<?php
/*
*@	orczhou@gmail.com
*/
class tnsSystem{
	var $tns_systemName;
	var $tns_adminPwd;
	var $tns_contentFile;
	var $tns_contentFileBackup;
	var $tns_contentArrayName;
	var $tns_content;	//Data
	var $tipInfo;
	function tnsSystem($tns_name = "Tiny_Notice_System",$tns_adminPwd = "5eE5hqP8z"){
		$this->tns_systemName = $tns_name;
		$this->tns_adminPwd = $tns_adminPwd;
		$this->tns_contentFile = "tns_".$tns_name.".php";
		$this->tns_contentFileBackup = "tns_".$tns_name.".backup.php";
		$this->tns_contentArrayName = $tns_name;
		$this->$tns_adminPwd = $tns_adminPwd;
		if(!file_exists($this->tns_contentFile)){
			$this->initFile($this->tns_contentFile);
			//Create File Init the Array
			$this->tipInfo .= "Your Tiny_Notice_System ".$tns_name." Created";
		}
		if(!file_exists($this->tns_contentFileBackup)){
			$this->initFile($this->tns_contentFileBackup);
			//Create File Init the Array
		}
		if(@!include($this->tns_contentFile)){
			@include $this->tns_contentFileBackup;
		}
		if(is_array(${$this->tns_contentArrayName})){
			$this->tns_content = ${$this->tns_contentArrayName};
		}
		else {
			$this->tns_content = array();
		}
	}
	function tns_checkAuthenticated(){
		if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])
		||	(trim($_SERVER['PHP_AUTH_USER']) != "admin")
		||	(trim($_SERVER['PHP_AUTH_PW'])) != $this->tns_adminPwd
		)
		{
			header("WWW-Authenticate: Basic realm=\"{$this->tns_systemName}-- Admin Field\"");
			header("HTTP/1.0 401 Unauthorized");
			echo "Need a username and password to access this {$this->tns_systemName}!";
			echo "<br></html>";
			exit;
		}
	}
	function tns_checkAction(){
		if(isset($_REQUEST['action'])){
			$action = $_REQUEST['action'];
			switch($action){
				case "del":
					$noticeID = $_REQUEST['nid'];
					unset($this->tns_content[$noticeID]);
					$this->tipInfo .= "<br/>DELETE A Notice-$noticeID!";
					break;
				case "add":
					if($_REQUEST['noticeID'] == ""){
						break;
					}
					$noticeID = $_REQUEST['noticeID'];
					$noticecontent = $_REQUEST['noticecontent'];
					$this->tns_content[$noticeID] = $noticecontent;
					$this->tipInfo .= "<br/>ADD A Notice!";
					break;
				case "backup":
					break;
			}
			$this->writeArrayFile($this->tns_contentFile,
				$this->tns_content,$this->tns_contentArrayName);
			$this->writeArrayFile($this->tns_contentFileBackup,
				$this->tns_content,$this->tns_contentArrayName);
		}
	}
	function addForm($actionTarget){
		$formHtml = '
		<div id="tnsnotice">
			<fieldset>
				<legend>Add a Notice</legend>
				<form action="'.$actionTarget.'" method="POST">
					<input type="hidden" name="action" value="add" />					
					<label for="noticeID">notice ID:</label>
					<input type="text" id="noticeID" name="noticeID" maxlength="11" size="12" value=""><br/>
					<label for="noticecontent">Notice Content:</label>
					<textarea id="noticecontent" name="noticecontent" cols="40" rows="4" ></textarea>
					<input type="submit" name="submit" value="submit">
				</form>
			</fieldset>	
		</div>
		';
		return $formHtml; 
	}
	function listAdmin($actionTarget){
		$listHtml = '
		<table id="clothcsstable" width="70%" >	';
		$lists = $this->tns_content;
		foreach($lists as $key=>$value){
			$listHtml .= "
			<tr>";
			$listHtml .= '
				<td width="10%">'.$key.'</td>
				<td  width="80%">'.htmlspecialchars(stripcslashes($value)).'</td>
				<td width="10%"><a href="'.$actionTarget.'?action=del&nid='.$key.'">Delete</a></td>';
			$listHtml .= "
			</tr>";
		}
		$listHtml .= "
		</table>
		";
		return $listHtml;
	}
	function initFile($fileName){
		$this->writeArrayFile($fileName,array(),$this->tns_contentArrayName);
	}
	function writeArrayFile($sFileName, $aDataRec,$arrayName,$iIsArray = 0)
	{
		$bCheck = false;
		$bCheck = $iIsArray ? (is_array($aDataRec) ? true : false) : (!empty($aDataRec) ? true : false);

		/*
		if(empty($sFileName) || !$bCheck)
		{
			return false;
		}
		*/

		$fp = fopen($sFileName, "w");

		if(!$fp)
		{
			return false;
		}

		flock($fp, LOCK_EX);

		//init file
		$sPhpData = "<?php\n";
		$sPhpData .= "\${$arrayName} = ".var_export($aDataRec, true).";\n";
		$sPhpData .= "?>";

		fwrite($fp, $sPhpData);
		flock($fp, LOCK_UN);
		fclose($fp);

		return true;
	}
}

?>