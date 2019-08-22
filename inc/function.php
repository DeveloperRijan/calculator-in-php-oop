<?php

/* 
for removin this error ->  Warning: A non-numeric value encountered in C:\xampp\htdocs\calculator\inc\function.php on line 8 , just use () in funcion like ($a-$b) */

class Calculator{
	function add($a, $b){
		return "Your Result: Summation of $a + $b is: <b>".($a + $b)."</b>";	 
	}
	
	function sub($a, $b){
		return "Your Result: Substraction of $a - $b is: <b>".($a - $b)."</b>";
	}
	
	function mul($a, $b){
		return "Your Result: Multiplication of $a * $b is: <b>".($a * $b)."</b>";
	}
	
	function div($a, $b){
		return "Your Result: Division of $a / $b is: <b>".($a / $b)."</b>";
	}
}
?>