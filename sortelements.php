<!DOCTYPE html>
<html>
<body>
 
<?php    
$numbers=array("10","20","30","40","50","60","70"); 
//echo "$numbers<br/>";   
ksort($numbers);  
foreach( $numbers as $n )    
{    
  echo "$n<br />";    
}    
?>	
 
</body>
</html>
