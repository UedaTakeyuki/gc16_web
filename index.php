<!DOCTYPE html>
<html>
<head>
<title>GC16 CLI</title>
<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<body>
<h1>GC16 CLI</h1>
<?php
  if(isset($_SERVER["HTTPS"])){
    $ptl = "https://";
  } else {
    $ptl = "http://";
  }
?>
<h2><a href="<?php echo $ptl.$_SERVER["SERVER_ADDR"]?>:4200">shell in a box</a></h2>
<h2><a href="SCRIPT/BackupPi_2">BackupPi_2</a></h2>
<h2><a href="SCRIPT/monitor/index.php?serial_id=0000000000000000">monitor</a></h2>
<h2><a href="SCRIPT/say/say.php">say</a></h2>
<h2><a href="SCRIPT/sdt/dt.php">Set DateTime</a></h2>

</body>
</html>
