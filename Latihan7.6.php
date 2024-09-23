<?php
class testParent
{
public function f1()
{
echo 1;
}
public function f2()
{
echo 2;
}
}
class testChild
{
function f2($a)
{
echo $a;
}
}
$a = new testChild();
$a->f2('ankur');//it will print ankur
?>