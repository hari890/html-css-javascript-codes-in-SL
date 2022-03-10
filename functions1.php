<?php
function display()
{
$a=array("coa","dbms","flat","telugu");
for($i=0;$i<count($a);$i++)
{
  echo "value of $i is:$a[$i]<br/>";
}
foreach($a as $value)
echo "$value <br/>";
}
display();
?>
