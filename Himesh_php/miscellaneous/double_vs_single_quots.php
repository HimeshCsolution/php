<?php 
$txt1=90;
//1
echo "<h2> $txt1 s</h2>";//90 s
echo '<h2> $txt1 s</h2>';//$txt1 s
//corrected way
echo '</h2>'.$txt1.'s</h2>';//90 s
//2
?>