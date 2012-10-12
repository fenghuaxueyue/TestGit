<?php
	function StringCmp(&$a, &$b) {
		if($a == null) {
			echo "First String is null<br/>";
			return;
		}
		if($b == null) {
			echo "Second String is null<br/>";
			return;
		}
		$check = strcmp($a, $b);
		if($check < 0) {
			ReverseString($a);
			ReverseString($b);
		} else if($check == 0) {
			MergeString($a, $b);
		} else {
			ReverseString($a);
			ReverseString($b);
			SwapString($a, $b);		
			MergeString($a, $b);
		}
		return $check;
	}
	function ReverseString(&$str) {
		$begin = 0;
		$end = strlen($str)-1;
		while($begin < $end) {
			$tmp = $str[$begin];
			$str[$begin] = $str[$end];
			$str[$end] = $tmp;
			$begin++;
			$end--;
		}
	}
	function MergeString(&$a, &$b) {
		$lengthA = strlen($a);
		$lengthB = strlen($b);
		$first = 0;
		$second = 0;
		$str = "";
		while($first < $lengthA && $second < $lengthB) {
			$str .= $a[$first] . $b[$second];
			$first++;
			$second++;
		}
		while($first < $lengthA) {
			$str .= $a[$first];
			$first++;
		}
		while($second < $lengthB) {
			$str .= $b[$second];
			$second++;
		}
		$a = $str;
	}
	function SwapString(&$a, &$b) {
		$tmp = $a;
		$a = $b;
		$b = $tmp;
	}
	$a = "abcd";
	$b = "efghi";
	echo "First String: " . $a . "<br/>";
	echo "Second String: " . $b . "<br/>";
	echo "First String < Second String: <br/>";
	StringCmp($a, $b);
	echo "First String: " . $a . "<br/>";
	echo "Second String: " . $b . "<br/>";
	$a = "abcd";
	$b = "abcd";
	echo "First String: " . $a . "<br/>";
	echo "Second String: " . $b . "<br/>";
	echo "First String == Second String: <br/>";
	StringCmp($a, $b);
	echo "Return String: " . $a . "<br/>";
	$a = "zxab";
	$b = "jklmn";
	echo "First String: " . $a . "<br/>";
	echo "Second String: " . $b . "<br/>";
	echo "First String > Second String: <br/>";
	StringCmp($a, $b);
	echo "Return String: " . $a . "<br/>";
	
?>