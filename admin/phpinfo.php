<?php
echo "test";
if(basename(__FILE__) == basename($_SERVER['PHP_SELF'])){exit("restricted access.");}

	//print(phpinfo());

?>
