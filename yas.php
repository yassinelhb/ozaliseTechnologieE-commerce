<!DOCTYPE html>
<html>
<body>

<?php
$ch="hello/bvd";
$fin= strlen($ch);
$pos=strpos($ch,"/");
echo substr($ch,0,$pos);
echo substr($ch,$pos+1,$fin);

?>

</body>
</html>