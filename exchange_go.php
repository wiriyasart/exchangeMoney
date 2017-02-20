<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			overflow: hidden;
			font-family: 'Arimo', sans-serif;
		}
		input{
			font-family: 'Arimo', sans-serif;
		}
		select option{
			font-family: 'Arimo', sans-serif;
		}
		select{
			font-family: 'Arimo', sans-serif;
		}
		

	</style>
</head>
<body>
<div class="wapper">
	<span>EXCHANGE MONEY</span><br>
	<?php
	session_start();
	if(isset($_SESSION["resultlast"])){
		echo $_SESSION["resultlast"];	
	}else{
		echo $_SESSION["resultlast"]=0;
	}
	
	?>
	<div class="input_ex">
		<form  method="GET" action="exchange_go_api.php">
			<input type="number" name="num" placeholder="money" class="input_money"><br>
			<select name="from" class="select_money">
			  <option value="THB">THB</option>
			  <option value="EUR">EUR</option>
			  <option value="USD">USD</option>
			</select> 
			<select name="to" class="select_money">
			  <option value="THB">THB</option>
			  <option value="EUR">EUR</option>
			  <option value="USD">USD</option>
			</select>
			<div class="arrow"></div>
		<input type="submit" name="submit" value="EXCHANGE" class="buttom"></input>
		</form>
	</div>
<br>
<br>
<br>
<br>
	
</div>
</body>
</html>