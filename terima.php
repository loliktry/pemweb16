<?php
	error_reporting(1);

	$n1=$_REQUEST['n1'];
	$n2=$_REQUEST['n2'];
	if($_REQUEST['operasi']==1){
		echo "Hasil penjumlahan $n1 dan $n2 adalah ".($_REQUEST['n1']+$_REQUEST['n2']);
	}
	else if ($_REQUEST['operasi']==2){
		echo 'Hasil pengurangan $n1 dan $n2 adalah '.($n1-$n2);
	}
?>

