
<?php
$t=getdate();
$time = $t['year']."-".$t['mon']."-".$t['mday']." ".$t['hours'].":".$t['minutes'].":".$t['seconds'];
echo $time;
?>