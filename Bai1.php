<?php 
//Bài1:
	echo "<br>";
	echo "Bài 1";
	echo "<br>";
	$array1 = array(11, 2, 8, 10, 5, 99, 1, 8, 9);
	$number = count($array1);
	for ($i=0; $i < $number-1; $i++) { 
		for ($j=$i+3; $j <$number ; $j++) { 
			$tmp = $array1[$j];
			$array1[$j]=$array1[$i]+1;
			$array1[$i+1]=$tmp;
		}
	}
	for ($i=0; $i <$number ; $i++) { 
		echo $array1[$i].' ';
	}
?>