<!DOCTYPE html>
<html>
<head>
<title></title>


</head>
<center>
<h1>FLAMES</h1>
<br>
<h3>Enter the names</h3><br>
<form method="post" action="">
<body bgcolor="pink"/>
        <div><label> Name </label><input type="text-color:lightred" name="name1" /></div></br>
        <div><label> Partner </label><input type="text-color:lightblue" name="name2" /></div></br>
        <div><input type="submit" name="submit" value="FLAMES" /></div>
    </form>
    <br>
    <br>
<?php
$flames_text = array(
        "F" => "<b>Friends</b>",
        "L" => "<b>Lovers</b>",
        "A" => "<b>Affection</b>",
        "M" => "<b>Married</b>",
        "E" => "<b>Enemies</b>",
        "S" => "<b>Siblings</b>");

if(isset($_POST["submit"])){
// $name1=$name2='';
$name1=strtolower($_POST['name1']);
$name2=strtolower($_POST['name2']);
if($name1==$name2){
echo"<h3><center>Both name are same</center></h3>";
}
else{
for($i=0;$i<strlen($name1);$i++)
{
for($j=0;$j<strlen($name2);$j++)
{
if($name1[$i]==$name2[$j])
{
$name1[$i]=$name2[$j]='/';
break;
 }
}
  }

$name1=str_replace('/','',$name1);
$name2=str_replace('/','',$name2);
$sum=strlen($name1)+strlen($name2);
$flames="flames";
$l=strlen($flames);
$pos=0;
while($l>1)
{
$pos=($sum+$pos)%$l;
if($pos == 0){
        $pos=$l-1;  
}
    else{
        $pos--;
    }
$flames[$pos] = "/";
    $flames= str_replace("/", "", $flames);
$l=strlen($flames);
}
$result=strtoupper($flames);
echo" YOU ARE :$flames_text[$result]";
}
        }
?>
</center>
</body>
</html>