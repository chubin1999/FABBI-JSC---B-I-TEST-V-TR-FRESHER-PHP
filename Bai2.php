<?php 
//Bài 2:
	echo "<br>";
	echo "<br>";
	echo "Bài 2:";
	echo "<br>";
	$array2= array(0, 100, -4, 8, 143, 5, 99, 100);
	$max1=0;
	$max2=0;

	for ($i = 0; $i < count($array2); $i++) {
	    if($i == 0) {
	        $max2 = $array2[$i];
	    }
	     
	    if($array2[$i] > $max1) {
	        $max1 = $array2[$i];
	    }
	    
	    if($max1 > $array2[$i] && $array2[$i] > $max2) {
	        $max2 = $array2[$i];
	    }
	}    
	$total = $max1+$max2;
	echo "Output: " .$total;
 ?>