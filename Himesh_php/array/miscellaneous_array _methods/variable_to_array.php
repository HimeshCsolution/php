<!DOCTYPE html>
<html>
<body>

<?php
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");

print_r($result);
?>

</body>
</html>