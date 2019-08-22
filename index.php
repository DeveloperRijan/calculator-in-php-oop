<?php 
include "inc/function.php";
$cal = new Calculator();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator in PHP OOP</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		global $result, $inputOne, $inputTwo;
		if(isset($_POST['submit'])){
			$numOne = $_POST['numOne'];
			$numTwo = $_POST['numTwo'];
			$optionsCal = $_POST['optionsCal'];
			if($numOne == "" || $numTwo == "" || $optionsCal == ""){
				$result = "<span style='color:red'>Please Enter Some Value.</span>";
				$inputOne = $numOne;
				$inputTwo = $numTwo;
			}else{
						
				if($optionsCal == "none"){
					$result = "<span style='color:red'>Please Select Operator</span>";
					$inputOne = $numOne;
					$inputTwo = $numTwo;
				}elseif($optionsCal == "+"){
					$result = $cal->add($numOne, $numTwo);
				}elseif($optionsCal == "-"){
					$result = $cal->sub($numOne, $numTwo);
				}elseif($optionsCal == "*"){
					$result = $cal->mul($numOne, $numTwo);
				}elseif($optionsCal == "/"){
					$result = $cal->div($numOne, $numTwo);
				}
			
			}
		}
	?>
	
	<div class="frontendView">
		<h3>Web Calculator</h3>
	
		<div class="show_result">
			<?php
				echo $result;
			?>
		</div>
	
	
		<form class="myform" action="" method="post">
			<label>Enter First Number: </label>
			<input type="number" name="numOne" value="<?php echo $inputOne; ?>"/> 
			
			<div class="operator">
				<select name="optionsCal">
					<option value="none">Select</option>
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
				</select>
			</div>
			<label>Enter Second Number: </label>
			<input type="number" name="numTwo" value="<?php echo $inputTwo; ?>"/>
			
			<input type="submit" name="submit" value="Calculate"/>
			
		</form>
	</div>
</body>
</html<>