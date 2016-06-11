<html>
<head>
<title>LOGIN</title>
</head>
<body>
<font size="30px" color="pink">
<style>
h2
{
	 color: yellow;
	 font-align:center;
	 font-size:40px;
}
</style>
<body background="bg12.jpg">
<?php
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('php_sample');
session_start();
$n=$_POST['name'];
$p=$_POST['pwd'];
if($n!=NULL && $p!=NULL)
{
	$query=mysql_query("select * from details where Email='".$n."' and password='".$p."'");
	$res=mysql_fetch_row($query);
	if($res)
	{
		//header('location:view.php');
		$sql=mysql_query("select * from details where Email='$n'");
		$res=mysql_fetch_array($sql,MYSQL_ASSOC);
		echo "<center>Hii&nbsp".$res['name']."!&nbspWe extend our hearty welcome!</center>";
		echo "<center> Here are your details..</center><br>";
		echo"<table align='center' cellspacing='5'>
			<tr><td><h1>NAME:</h1></td><td><h2>".$res['name']."</h2></td></tr>	
			<tr><td><h1>AGE:</h1></td><td><h2>".$res['age']."</h2></td></tr>
			<tr><td><h1>GENDER:</h1></td><td><h2>".$res['gender']."</h2></td></tr>
			<tr><td><h1>ADDRESS:</h1></td><td><h2>".$res['address']."</h2></td></tr>
		    <tr><td><h1>PHONE NUMBER:</h1></td><td><h2>".$res['phone number']."</h2></td></tr>
			<tr><td><h1>EMAIL ID:</h1></td><td><h2>".$res['Email']."</h2></td></tr>";
	}
	else
	{
		echo"<br><br><br><br><br>";
		echo"<html><center><b>Invalid usernames and passwords! :(</b></center></html>";
	}
}
else
{
	echo "<html><center><b>Enter both username and password! :)</b></center></html>";
}
?>
</font>
<form action=index.php>
<tr><td><center><input type="image" value="submit" src="button(9).png" alt="submit Button" onMouseOver="this.src='button(9).png'"></center></td></tr>
</form>
</body>
</html>