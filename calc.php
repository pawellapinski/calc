
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Calculation Result</title>
 </head>
 <?php

  $val1 = $_POST['val1'];
  $val2 = $_POST['val2'];
  $calc = $_POST['calc'];

  if( is_numeric( $val1 ) && is_numeric( $val2 ) )
  {
      if( $calc != null )
      {
          switch( $calc )
          {
              case "add" : $result = $val1 + $val2; break;
              case "sub" : $result = $val1 - $val2; break;
              case "mul" : $result = $val1 * $val2; break;
              case "div" : $result = $val1 / $val2; break;
          }
        echo( "Calculation result: $result" );
      }
  }
  else
  {
    echo( "Invalid entry - please retry" );
  }
 ?>

 </body>
</html>
