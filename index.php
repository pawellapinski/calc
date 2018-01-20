<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>calculacion form</title>
</head>
<body>

  <form action = "calc.php" method = "post">

  Value 1: <input type = "text" name = "val1" size = "10">
  Value 2: <input type = "text" name = "val2" size = "10">
  <br>
  Calculation: <br>
  <input type = "radio" name = "calc" value = "add"> Add
  <input type = "radio" name = "calc" value = "sub"> Subtract
  <input type = "radio" name = "calc" value = "mul"> Multiply
  <input type = "radio" name = "calc" value = "div"> Divide
  <hr>
  <input type = "submit" value = "Calculate">
  <input type = "reset" value = "Clear">

  </form>

 </body>

</html>
