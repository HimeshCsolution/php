<!DOCTYPE html>
<html>
<body>

<?php  
$i = 1;

while ($i < 6) {
  if ($i == 3) break;  
  echo $i;
  $i++;
} 

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}
?>  
<!-- dowhile -->
<?php  
$i = 1;

do {
  echo $i;
  $i++;
} while ($i > 6);
?>  
</body>
</html>
