<!DOCTYPE html>

<html>
    <head>
      <title>Processing</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
    </head>

    <body>
<?php //$_POST = json_decode(file_get_contents("php://input"), true);
$message = $_POST['msg'];
//$message = echo $_POST["msg"];
$file = 'mylog.log';
$handle = fopen($file, 'a');
fwrite($handle, $message);
fclose($handle);
//exit(header('Location: johann.local/'));
?>
      <p class="par">Our server is processing your request. You will be redirected…</p>
      <script> location.replace("http://localhost:5000"); </script>
    </body>
</html>
