<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set("Asia/Kolkata");
$d = date("d/m/Y h:i:s A");
echo $d."<br>";
echo date("d/m/Y h:i:s A", strtotime('+ 20 days'));

?>

</body>
</html>
