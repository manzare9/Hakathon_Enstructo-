<html>
    
    
    <body>
        
        
            
            
   

<?php

require './connection.php';

$query= 'select * from student_data';
$rs=  mysqli_query($mysqli, $query);
if(!$rs){
   die('Error ' . mysqli_error($mysqli));
}
else
{
    
   while($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)){
       ?>
           
           <form action="attendanceclr.php" method="POST">     
           <?php
           $regno=$row['username'];
       echo $row['username']; 
       
       ?>
            <input type="text" name="present">
             <input type="text" name="absent">
              
 <?php
   }
}
echo '<br>';

?>
                    
                  
            
      <input type="submit" value="SUBMIT">       
     </form>
    </body>
</html>


