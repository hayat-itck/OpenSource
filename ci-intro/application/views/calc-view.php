<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
<title>Calculator</title>
<style type="text/css">
input{
	padding: 6px;
}
</style>
</head>

<body>
	<div id="main">
			<h1>Simple Calculator</h1>
			<a href="index">Calculator</a> | <a href="home">Home</a>
			<p>This is a simple View created with CodIgniter</p>
	</div>
	<div>
	<table>	
		<form method="POST">
			<tr><th>Num1:</th><td><input type="number" name="num1" /></td></tr>
			<tr><th>+</th></tr>
			<tr><th>Num2:</th><td><input type="number" name="num2" /></td></tr>
			<tr><th>&nbsp;</th><td><input type="submit" value="Calculate" /></td></tr>
		</form>
	</table>
	<table><tr><th>Result:</th><td><input type="text" name="result" value="<?php echo $Name; ?>" disabled="true"</td></tr></table>
	</div>
</body>

</html>