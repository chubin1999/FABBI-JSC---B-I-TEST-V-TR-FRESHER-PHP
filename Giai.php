<?php 
//Bài1:

$arr = array(11, 2, 8, 10, 5, 99, 1, 8, 9);

$sophantu = count($arr);
for ($i=0; $i < $sophantu-1; $i++) { 
	for ($j=$i+3; $j <$sophantu ; $j++) { 
		$tmp = $arr[$j];
		$arr[$j]=$arr[$i]+1;
		$arr[$i+1]=$tmp;

	}
}
for ($i=0; $i <$sophantu ; $i++) { 
	echo $arr[$i].' ';
}
?>