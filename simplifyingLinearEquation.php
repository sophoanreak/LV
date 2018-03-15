<html>	

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Algebra >> Solving Linear Equations >> Simplifying linear equation:</font></b><br>
					<p>
					Objective: Able to simplify linear equation.<br>
					</p>
					<p>
					With simplifying equation, it is easy to solve an equation as long as it is having an expression as aX + b = y.
					</p>
					</td>
				</tr>
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black; border: 0px ; 
			solid: #A7C942; tom: 4px;">
					<td width = 50%>
					<b><font style="font-size:1em">Examples :</font></b><br>
					Example	1: 2(4x - 3) - 3(2x + 1) =  2*4*x-6-3*2*x-3<br>
					Example 2: 4(2x - 6) + 10 = 3(x - 2 ) + 9x = 0.4 Not yet done<br>
					
					</td>
					<td width = 50%>
					
					</td>
				</tr>
			</table>
			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid: #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black; tom: 4px;">
					<td> 
					<b><font style="font-size:1em">Codes :</font></b><br>

<spamb>&lt;html></spamb><br>
<spamb>&lt;?php</spamb><br>
	<pre style = "font-family:'Time New Roman'">
	echo "Example	1: 2(4x - 3) - 3(2x + 1) = 2 * ((4 * x) -3) - 3 * ((2 * x) + 1) = ";
	echo "\n";
	$x;
	echo $value1 = "2 * ((4 * x) -3) - 3 * ((2 * x) + 1)";
	echo "\n";
	$value1Array = array();
	
	<spamg>//echo strlen($value1);</spamg>
	for($i=0;$i&lt;strlen($value1);$i++){
		$value1Array[$i] = $value1[$i];
	}
	
	<spamg>//key 4 for giving us a better understanding with the exact amount of open par.</spamg>
	<spamg>//$openParenthesisKey = array_search("(",$value1Array);</spamg>
	<spamg>//declaring variable for storing key for parenthesis</spamg>
	$openParenthesisKeyArray = array();
	$closeParenthesisKeyArray = array();
	$parenthesisKeyArray = array();
	$saveInternalParenthesisMutiArray = array();
	$openParenthesisKeyLength = count(array_keys($value1Array,"("));
	
	<spamg>//store openParenthesis's key</spamg>
	$i=0;<spamg>//it is used for recording open parenthesis's key</spamg>
	foreach ($value1Array as $key=>$val){
		if ($val == "("){
			$openParenthesisKeyArray[$i] = $key;
			$i++;
		}
	}
	
	<spamg>//store closeParenthesis's key</spamg>
	$j=0;//it is used for recording close parenthesis's key
	foreach ($value1Array as $key=>$val){
		if ($val == ")"){
			$closeParenthesisKeyArray[$j] = $key;
			$j++;
		}
	}
	
	<spamg>//make AI recognizes parenthesis</spamg> 
	$parenthesisKeyArray = array_merge($openParenthesisKeyArray,
	$closeParenthesisKeyArray);
	sort($parenthesisKeyArray);
	
	<spamg>//check for amount of internal parenthesises- replace them with variable</spamg>
	$k=0;
	for ($i= 0;$i&lt;$openParenthesisKeyLength *2;$i++){
		if ($value1Array[$parenthesisKeyArray[$i]]=="(" and 
		$value1Array[$parenthesisKeyArray[$i+1]]== ")"){
			$internalOpenParenthesisKeyArray[$k] = $parenthesisKeyArray[$i];
			$internalCloseParenthesisKeyArray[$k] = $parenthesisKeyArray[$i+1];
			$k++;
		}
	}
	
	<spamg>//print_r($internalOpenParenthesisKeyArray);
	//echo "\n";
	//print_r($internalCloseParenthesisKeyArray);
	//internalParenthesis amount</spamg>
	$internalParenthesis = array_merge($internalOpenParenthesisKeyArray,
	$internalCloseParenthesisKeyArray);
	<spamg>//print_r($internalParenthesis);</spamg>
	sort($internalParenthesis);
	<spamg>//print_r($internalParenthesis);
	//echo "\n";
	
	//save what is in internal parenthesis</spamg>
	$iloop = 0;
	
	for($i=0;$i&lt;count($internalCloseParenthesisKeyArray);$i++){
		for($j=$internalOpenParenthesisKeyArray[$i]+1;$j&lt;
		$internalCloseParenthesisKeyArray[$i];$j++){
			$saveInternalParenthesisMutiArray[$i][$iloop] = $value1Array[$j];
			$iloop++;
		}
		$saveInternalParenthesisMutiArray[$i] = 
		array_values($saveInternalParenthesisMutiArray[$i]);
	}
	<spamg>//print_r($saveInternalParenthesisMutiArray);
	/*
	foreach($saveInternalParenthesisMutiArray as $key){
		foreach($key as $value){
			echo $value;
		}
	}
	echo "\n";
	*/</spamg>
	
	<spamg>//Print value1array in section by deleting what is in internal parenthesis</spamg>
	
	for($i=0;$i&lt;count($internalCloseParenthesisKeyArray);$i++){
		for($j=$internalOpenParenthesisKeyArray[$i];$j&lt;
		$internalCloseParenthesisKeyArray[$i];$j++){
			unset($value1Array[$j]);
		}
	}
	for($i=0;$i&lt;count($internalCloseParenthesisKeyArray);$i++){
		$value1Array[$internalCloseParenthesisKeyArray[$i]] = "y".$i;
	}
	
	<spamg>/*foreach ($value1Array as $value){
		echo $value;
	}	*/		</spamg>
	
	
	
	<spamr>//second phases</spamr>
	if (count($internalParenthesis) == count($parenthesisKeyArray)/2){
		//key 4 for giving us a better understanding with the exact amount of open paren.
		//declaring variable for storing key for parenthesis
		$value1Array = array_values($value1Array);//reset array from unset value
		$openParenthesisKeyArray = array();
		$closeParenthesisKeyArray = array();
		$parenthesisKeyArray = array();
		$saveInternalParenthesisMultiArray = array();
		$openParenthesisKeyLength = count(array_keys($value1Array,"("));
		<spamg>//store openParenthesis's key</spamg>
		$i=0;<spamg>//it is used for recording open parenthesis's key</spamg>
		foreach ($value1Array as $key=>$val){
			if ($val == "("){
				$openParenthesisKeyArray[$i] = $key;
				$i++;
			}
		}
		<spamg>//store closeParenthesis's key</spamg>
		$j=0;<spamg>//it is used for recording close parenthesis's key</spamg>
		foreach ($value1Array as $key=>$val){
			if ($val == ")"){
				$closeParenthesisKeyArray[$j] = $key;
				$j++;
			}
		}
		
		<spamg>//make AI recognizes parenthesis </spamg>
		$parenthesisKeyArray = array_merge($openParenthesisKeyArray,
		$closeParenthesisKeyArray);
		sort($parenthesisKeyArray);
		
		<spamg>//check for amount of internal parenthesises- replace them with variable</spamg>
		$k=0;
		for ($i= 0;$i&lt;$openParenthesisKeyLength *2;$i++){
			if ($value1Array[$parenthesisKeyArray[$i]]=="(" and 
			$value1Array[$parenthesisKeyArray[$i+1]]== ")"){
				$internalOpenParenthesisKeyArray[$k] = $parenthesisKeyArray[$i];
				$internalCloseParenthesisKeyArray[$k] = $parenthesisKeyArray[$i+1];
			$k++;
			}
		}
		
		<spamg>//internalParenthesis amount</spamg>
		$internalParenthesis = array_merge($internalOpenParenthesisKeyArray,
		$internalCloseParenthesisKeyArray);
		sort($internalParenthesis);
		<spamg>//save what is in internal parenthesis</spamg>
		$iloop1 = 0;
		for($i=0;$i&lt;count($internalCloseParenthesisKeyArray);$i++){
			for($j=$internalOpenParenthesisKeyArray[$i]+1;$j&lt;
			$internalCloseParenthesisKeyArray[$i];$j++){
				$saveInternalParenthesisMultiArray[$i][$iloop1] = $value1Array[$j];
				$iloop1++;
			}
			$saveInternalParenthesisMultiArray[$i] = 
			array_values($saveInternalParenthesisMultiArray[$i]);
		}
		<spamg>/*foreach($value1Array as $value){
			echo $value;
		}
		*/
		/*foreach ($saveInternalParenthesisMultiArray as $key){
			foreach ($key as $value){
				echo $value;
			}
		}*/</spamg>
		
		<spamg>//split into MultiArray to store section of operator for operations</spamg>
		for($i=0;$i&lt;count($internalParenthesis)/2;$i++){
			if($i==0){
				for($j=0;$j&lt;=$internalCloseParenthesisKeyArray[$i];$j++){
					$splitValue1Array[$i][$j] = $value1Array[$j];
				}
			}else{
				for($j=$internalCloseParenthesisKeyArray[$i-1]+1;$j&lt;=
				$internalCloseParenthesisKeyArray[$i];$j++){
					$splitValue1Array[$i][$j] = $value1Array[$j];
				}
				$splitValue1Array[$i] = array_values($splitValue1Array[$i]);
				//reset key value
			}
		}
		
		<spamg>//search each slipt value1array for "*"</spamg>
		for($i=0;$i&lt;count($splitValue1Array);$i++){
			//search for * sign and store in array
			$multiSignkey[$i] = array_search("*",$splitValue1Array[$i]);
		}
		
		<spamg>//store number in front of * sign</spamg>
		for($i=0;$i&lt;count($splitValue1Array);$i++){
			for($j=0;$j&lt;$multiSignkey[$i];$j++){
				$value2ArrayMulti[$i][$j] = $splitValue1Array[$i][$j]; 
				//echo $i . "=>". $j;
			}
		}
		
		<spamg>//store number from internalParenthesis</spamg>
		for($i=0;$i&lt;count($saveInternalParenthesisMultiArray);$i++){
			for($j=1;$j&lt;count($saveInternalParenthesisMultiArray[$i]);$j++){
				$value3ArrayMulti[$i][$j] = 
				$saveInternalParenthesisMultiArray[$i][$j];
			}
		}
		
		<spamg>//implode value2ArrayMulti and value2ArrayMulti and Multiply</spamg>
		for($i=0;$i&lt;count($internalOpenParenthesisKeyArray);$i++){
			$value2ArrayImplode[$i] = implode($value2ArrayMulti[$i]);
			$value2ArrayImplode[$i] = str_replace(" ","",$value2ArrayImplode[$i]);
			$value3ArrayImplode[$i] = implode($value3ArrayMulti[$i]);
			$value3ArrayImplode[$i] = str_replace(" ","",$value3ArrayImplode[$i]);
			$valueTotalArrayFromImplode[$i] = intval($value2ArrayImplode[$i]) * 
			intval($value3ArrayImplode[$i]);
		}
		
		<spamg>//unset array_search("(",$splitValue1Array[0]) to count</spamg>
		for($i=0;$i&lt;count($splitValue1Array);$i++){
			for($j=array_search("(",$splitValue1Array[$i])+2;$j&lt;=
			count($splitValue1Array[$i]);$j++){
				unset ($splitValue1Array[$i][$j]);
				if ($j == array_search("(",$splitValue1Array[$i])+2){
					$splitValue1Array[$i][$j] = $valueTotalArrayFromImplode[$i];
				}
			}
			$splitValue1Array[$i] = array_values($splitValue1Array[$i]);
		}
		
		<spamg>//delete open Parenthesis</spamg>
		for($i=0;$i&lt;count($splitValue1Array);$i++){			
			$deleteCloseParen[$i] = array_search("(",$splitValue1Array[$i]);
			$splitValue1Array[$i][$deleteCloseParen[$i]]= "";
			$deleteOpenParen[$i] = array_search(")",$splitValue1Array[$i]);
			$splitValue1Array[$i][$deleteOpenParen[$i]]= "";
		}
		
		<spamg>//echo $valueTotalArrayFromImplode[1];
		/*foreach($value2ArrayMulti as $key){
			foreach($key as $value){
				echo $value;
			}
		}*/</spamg>
		
		<spamg>//replace back y0 and y1 to x</spamg>
		$value4Array = array();
		for($i=0;$i&lt;count($splitValue1Array);$i++){
			$value4Array = array_merge($value4Array,$splitValue1Array[$i]);
		}
		
		<spamg>//implode($saveInternalParenthesisMutiArray[0]);</spamg>
		for($i=0;$i&lt;count($internalParenthesis)/2;$i++){
			$replacemntKey[$i] = array_search("y".$i,$value4Array);
			$value4Array[$replacemntKey[$i]] = 
			implode($saveInternalParenthesisMutiArray[$i]);	
		}
		<spamg>/*foreach($value4Array as $value => $ky){
			echo  $value. "=>". $ky."\n";
		}
		*/</spamg>
		<spamg>//multiplying</spamg>

			<spamg>//explode variable in internalparenthesis</spamg>
		$addingnum=0;
		for($i=0;$i&lt;(count($value4Array));$i++){
			if (strlen($value4Array[$i])&lt;2){
				$value5Array[$i+$addingnum] = $value4Array[$i];
				$i+$addingnum;
			}else{ 
				for($j=0;$j&lt;strlen($value4Array[$i]);$j++){
				$value4Array[$i] = strval($value4Array[$i]);
				$value5Array[$i+$addingnum] = $value4Array[$i][$j];
				$i+$addingnum++;
				}
			}
		}
		foreach($value5Array as $key => $value){
			if($value == " "){
				unset($value5Array[$key]);
			}
		}
		$value5Array = array_values($value5Array);
		<spamg>//print_r($value5Array);
		//echo "\n";</spamg>
		$i=0;
		foreach($value5Array as $key => $value){
			<spamg>//echo $key . "=>". $value. "\n";</spamg>
			if ($value == "*" or $value == "-" or $value == "+" or $value == "/"){
				$allSignKeyArray[$i] = $key;
				$i++;
				<spamg>//echo "\n";</spamg>
			}
		}
		
			<spamg>//print_r($allSignKeyArray);
			//echo "\n";
	//split value5Array into section by saving in mutidimensionArr
			//echo count($value5Array);
			//echo "\n";
			//print_r($value5Array);
			//echo "\n";</spamg>
		for($i=0;$i&lt;=count($allSignKeyArray);$i++){
			if($i==0){
				for($j=0;$j&lt;$allSignKeyArray[$i];$j++){ $splitValue5ArrayMultiDi[$i][$j] 
				= $value5Array[$j]; 
				}
			}else{
				if(isset($allSignKeyArray[$i])== true){
					for($k=$allSignKeyArray[$i-1]+1;$k&lt;$allSignKeyArray[$i];$k++){
						//echo $i-1;
						$splitValue5ArrayMultiDi[$i][$k] = $value5Array[$k];
					}
				}else{
					for($l=$allSignKeyArray[$i-1]+1;$l&lt;count($value5Array);$l++){
						$splitValue5ArrayMultiDi[$i][$l] = $value5Array[$l];
					}
				}
			}
		}
		
		$resultofOperation = array();
		for($i=0;$i&lt;count($allSignKeyArray);$i++){
			switch ($value5Array[$allSignKeyArray[$i]]){
				case "*":
					$num1 = implode($splitValue5ArrayMultiDi[$i]);
					$num2 = implode($splitValue5ArrayMultiDi[$i+1]);
					if (is_numeric($num1) and is_numeric($num2)){
						$num1 = intval($num1);
						$num2 = intval($num2);
						$resultofOperation[$i] = $num1 * $num2;
						//unset($splitValue5ArrayMultiDi[$i]);
						//unset($splitValue5ArrayMultiDi[$i+1]);
						//unset($allSignKeyArray[$i]);
					}else {
						$resultofOperation[$i] = $num1 ."*".$num2; 
					}
					
					break;
				default:
			}
		}
		<spamg>/*echo "\n";
		for($i=0;$i&lt;=count($allSignKeyArray);$i++){
			if(isset($allSignKeyArray[$i])==true){
				echo $allSignKeyArray[$i];
				echo "\n";
			}else{echo "no value";}
			
		}
		*/
		/*
		echo "\n";
		foreach ($splitValue5ArrayMultiDi as $value){
			foreach($value as $key => $value1){
				echo $key."=>".$value1."\n";
				//echo "1";
			}
		}
		*/
		
		//echo "\n";
		//echo "\n";
		//print_r($value5Array);</spamg>
		echo "=";
		foreach($value5Array as $value){
				echo $value;
		}
		<spamg>/*
		echo "\n";
		$book= "2 ";
		//echo $one = intval($book);
		if (is_numeric($book)){
			echo "true";
		}else {echo "fales";}
		*/</spamg>
		
	}elseif(count($internalParenthesis) &lt; count($parenthesisKeyArray)/2){
		$iloop=count($internalParenthesis);
		do{
			$iloop=count($internalParenthesis);//loop Iloop
			
			<spamg>//key 4 for giving us a better understanding with the exact amount of open pa</spamg>
			$openParenthesisKey = array_search("(",$value1Array);
			
			<spamg>//declaring variable for storing key for parenthesis</spamg>
			$openParenthesisKeyArray = array();
			$closeParenthesisKeyArray = array();
			$parenthesisKeyArray = array();
			$openParenthesisKeyLength = count(array_keys($value1Array,"("));
			
			<spamg>//store openParenthesis's key</spamg>
			$i=0;<spamg>//it is used for recording open parenthesis's key</spamg>
			foreach ($value1Array as $key=>$val){
				if ($val == "("){
					$openParenthesisKeyArray[$i] = $key;
					$i++;
				}
			}
			<spamg>//store closeParenthesis's key</spamg>
			$j=0;<spamg>//it is used for recording close parenthesis's key</spamg>
			foreach ($value1Array as $key=>$val){
				if ($val == ")"){
					$closeParenthesisKeyArray[$j] = $key;
					$j++;
				}
			}
				<spamg>//make AI recognizes parenthesis </spamg>
				$parenthesisKeyArray = array_merge($openParenthesisKeyArray,
				$closeParenthesisKeyArray);
				sort($parenthesisKeyArray);
				
				<spamg>//check for amount of internal parenthesises- replace them with var</spamg>
				$k=0;
				for ($i= 0;$i&lt;$openParenthesisKeyLength *2;$i++){
					if ($value1Array[$parenthesisKeyArray[$i]]=="(" and 
					$value1Array[$parenthesisKeyArray[$i+1]]== ")"){
						$internalOpenParenthesisKeyArray[$k] = 	
						$parenthesisKeyArray[$i];
						$internalCloseParenthesisKeyArray[$k] = 
						$parenthesisKeyArray[$i+1];
						$k++;
					}
				}
				
				<spamg>//internalParenthesis amount</spamg>
				$internalParenthesis = array_merge($internalOpenParenthesisKeyArray,
				$internalCloseParenthesisKeyArray);
				sort($internalParenthesis);
				
				<spamg>//Print value1array in section by deleting what is in internal paren</spamg>
	
				for($i=0;$i&lt;count($internalCloseParenthesisKeyArray);$i++){
					for($j=$internalOpenParenthesisKeyArray[$i];$j&lt;
					$internalCloseParenthesisKeyArray[$i];$j++){
					unset($value1Array[$j]);
					}
				}
				for($i=0;$i&lt;count($internalCloseParenthesisKeyArray);$i++){
					$value1Array[$internalCloseParenthesisKeyArray[$i]] = "y".$i;
				}
				foreach ($value1Array as $value){
					echo $value;
				}
			}while($iloop&lt;=count($parenthesisKeyArray));<spamg>//end do while loop</spamg>
		
	}</]spamg>//end elseif</spamg>
</pre>
<spamb>?></spamb><br>
<spamb>&lt;/html></spamb><br>
				
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width = 50%>
						<form action="" method = "post" id="tryitform">
							<b><font style="font-size:1.2em">PHP Code :</font></b><br><br>
							<textarea form="tryitform" name="txtcode" style="width:320px; height:350px; font-size:1em;"></textarea> 
						
					</td>
					<td width = 50% valign = "top">
						
							<b><font style="font-size:1em">Result :</font></b><br><br>
						<textarea form="tryitform" name="txtresult" style="width:320px; height:350px; font-size:1em;">
								<?php 
									if (isset($_POST['txtcode'])){
										$txtcode1 = $_POST['txtcode'];
										$txtcode1 = str_replace("<html>","",$txtcode1);
										$txtcode1 = str_replace("</html>","",$txtcode1);
										//echo strlen($txtcode1);
										ob_start();
										eval("?>".$txtcode1);
										$this_string = ob_get_contents();
										ob_end_flush();
										//echo strlen($this_string);
										
									} 
								?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td> 
							<input type ="submit" name="btnTryit" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px">
							</form>
					</td>
				</tr>
			</table>

			
</html>
<html>
<?php
	echo "Example	1: 2(4x - 3) - 3(2x + 1) =  ";
	echo "<br>";
	$x;
	echo $value1 = "2 * ((4 * x) -3) - 3 * ((2 * x) + 1)";
	echo "<br>";
	$value1Array = array();
	//echo strlen($value1);
	for($i=0;$i<strlen($value1);$i++){
		$value1Array[$i] = $value1[$i];
	}
	//key 4 for giving us a better understanding with the exact amount of open parenthesis.
	//$openParenthesisKey = array_search("(",$value1Array);
	//declaring variable for storing key for parenthesis
	$openParenthesisKeyArray = array();
	$closeParenthesisKeyArray = array();
	$parenthesisKeyArray = array();
	$saveInternalParenthesisMutiArray = array();
	$openParenthesisKeyLength = count(array_keys($value1Array,"("));
	//store openParenthesis's key
	$i=0;//it is used for recording open parenthesis's key
	foreach ($value1Array as $key=>$val){
		if ($val == "("){
			$openParenthesisKeyArray[$i] = $key;
			$i++;
		}
	}
	//store closeParenthesis's key
	$j=0;//it is used for recording close parenthesis's key
	foreach ($value1Array as $key=>$val){
		if ($val == ")"){
			$closeParenthesisKeyArray[$j] = $key;
			$j++;
		}
	}
	//make AI recognizes parenthesis 
	$parenthesisKeyArray = array_merge($openParenthesisKeyArray,$closeParenthesisKeyArray);
	sort($parenthesisKeyArray);
	//check for amount of internal parenthesises- replace them with variable
	$k=0;
	for ($i= 0;$i<$openParenthesisKeyLength *2;$i++){
		if ($value1Array[$parenthesisKeyArray[$i]]=="(" and $value1Array[$parenthesisKeyArray[$i+1]]== ")"){
			$internalOpenParenthesisKeyArray[$k] = $parenthesisKeyArray[$i];
			$internalCloseParenthesisKeyArray[$k] = $parenthesisKeyArray[$i+1];
			$k++;
		}
	}
	//print_r($internalOpenParenthesisKeyArray);
	//echo "<br>";
	//print_r($internalCloseParenthesisKeyArray);
	//internalParenthesis amount
	$internalParenthesis = array_merge($internalOpenParenthesisKeyArray,$internalCloseParenthesisKeyArray);
	//print_r($internalParenthesis);
	sort($internalParenthesis);
	//print_r($internalParenthesis);
	//echo "<br>";
	
	//save what is in internal parenthesis
	$iloop = 0;
	
	for($i=0;$i<count($internalCloseParenthesisKeyArray);$i++){
		for($j=$internalOpenParenthesisKeyArray[$i]+1;$j<$internalCloseParenthesisKeyArray[$i];$j++){
			$saveInternalParenthesisMutiArray[$i][$iloop] = $value1Array[$j];
			$iloop++;
		}
		$saveInternalParenthesisMutiArray[$i] = array_values($saveInternalParenthesisMutiArray[$i]);
	}
	//print_r($saveInternalParenthesisMutiArray);
	/*
	foreach($saveInternalParenthesisMutiArray as $key){
		foreach($key as $value){
			echo $value;
		}
	}
	echo "<br>";
	*/
	
	//Print value1array in section by deleting what is in internal parenthesis
	
	for($i=0;$i<count($internalCloseParenthesisKeyArray);$i++){
		for($j=$internalOpenParenthesisKeyArray[$i];$j<$internalCloseParenthesisKeyArray[$i];$j++){
			unset($value1Array[$j]);
		}
	}
	for($i=0;$i<count($internalCloseParenthesisKeyArray);$i++){
		$value1Array[$internalCloseParenthesisKeyArray[$i]] = "y".$i;
	}
	
	/*foreach ($value1Array as $value){
		echo $value;
	}	*/		
	
	
	
	//second phases
	if (count($internalParenthesis) == count($parenthesisKeyArray)/2){
		//key 4 for giving us a better understanding with the exact amount of open parenthesis.
		//declaring variable for storing key for parenthesis
		$value1Array = array_values($value1Array);//reset array from unset value
		$openParenthesisKeyArray = array();
		$closeParenthesisKeyArray = array();
		$parenthesisKeyArray = array();
		$saveInternalParenthesisMultiArray = array();
		$openParenthesisKeyLength = count(array_keys($value1Array,"("));
		//store openParenthesis's key
		$i=0;//it is used for recording open parenthesis's key
		foreach ($value1Array as $key=>$val){
			if ($val == "("){
				$openParenthesisKeyArray[$i] = $key;
				$i++;
			}
		}
		//store closeParenthesis's key
		$j=0;//it is used for recording close parenthesis's key
		foreach ($value1Array as $key=>$val){
			if ($val == ")"){
				$closeParenthesisKeyArray[$j] = $key;
				$j++;
			}
		}
		//make AI recognizes parenthesis 
		$parenthesisKeyArray = array_merge($openParenthesisKeyArray,$closeParenthesisKeyArray);
		sort($parenthesisKeyArray);
		//check for amount of internal parenthesises- replace them with variable
		$k=0;
		for ($i= 0;$i<$openParenthesisKeyLength *2;$i++){
			if ($value1Array[$parenthesisKeyArray[$i]]=="(" and $value1Array[$parenthesisKeyArray[$i+1]]== ")"){
				$internalOpenParenthesisKeyArray[$k] = $parenthesisKeyArray[$i];
				$internalCloseParenthesisKeyArray[$k] = $parenthesisKeyArray[$i+1];
			$k++;
			}
		}
		//internalParenthesis amount
		$internalParenthesis = array_merge($internalOpenParenthesisKeyArray,$internalCloseParenthesisKeyArray);
		sort($internalParenthesis);
		//save what is in internal parenthesis
		$iloop1 = 0;
		for($i=0;$i<count($internalCloseParenthesisKeyArray);$i++){
			for($j=$internalOpenParenthesisKeyArray[$i]+1;$j<$internalCloseParenthesisKeyArray[$i];$j++){
				$saveInternalParenthesisMultiArray[$i][$iloop1] = $value1Array[$j];
				$iloop1++;
			}
			$saveInternalParenthesisMultiArray[$i] = array_values($saveInternalParenthesisMultiArray[$i]);
		}
		/*foreach($value1Array as $value){
			echo $value;
		}
		*/
		/*foreach ($saveInternalParenthesisMultiArray as $key){
			foreach ($key as $value){
				echo $value;
			}
		}*/
		//split into MultiArray to store section of operator for operations
		for($i=0;$i<count($internalParenthesis)/2;$i++){
			if($i==0){
				for($j=0;$j<=$internalCloseParenthesisKeyArray[$i];$j++){
					$splitValue1Array[$i][$j] = $value1Array[$j];
				}
			}else{
				for($j=$internalCloseParenthesisKeyArray[$i-1]+1;$j<=$internalCloseParenthesisKeyArray[$i];$j++){
					$splitValue1Array[$i][$j] = $value1Array[$j];
				}
				$splitValue1Array[$i] = array_values($splitValue1Array[$i]);//reset key value
			}
		}
		
		//search each slipt value1array for "*"
		for($i=0;$i<count($splitValue1Array);$i++){
			//search for * sign and store in array
			$multiSignkey[$i] = array_search("*",$splitValue1Array[$i]);
		}
		//store number in front of * sign
		for($i=0;$i<count($splitValue1Array);$i++){
			for($j=0;$j<$multiSignkey[$i];$j++){
				$value2ArrayMulti[$i][$j] = $splitValue1Array[$i][$j]; 
				//echo $i . "=>". $j;
			}
		}
		//store number from internalParenthesis
		for($i=0;$i<count($saveInternalParenthesisMultiArray);$i++){
			for($j=1;$j<count($saveInternalParenthesisMultiArray[$i]);$j++){
				$value3ArrayMulti[$i][$j] = $saveInternalParenthesisMultiArray[$i][$j];
			}
		}
		//implode value2ArrayMulti and value2ArrayMulti and Multiply
		for($i=0;$i<count($internalOpenParenthesisKeyArray);$i++){
			$value2ArrayImplode[$i] = implode($value2ArrayMulti[$i]);
			$value2ArrayImplode[$i] = str_replace(" ","",$value2ArrayImplode[$i]);
			$value3ArrayImplode[$i] = implode($value3ArrayMulti[$i]);
			$value3ArrayImplode[$i] = str_replace(" ","",$value3ArrayImplode[$i]);
			$valueTotalArrayFromImplode[$i] = intval($value2ArrayImplode[$i]) * intval($value3ArrayImplode[$i]);
		}
		//unset array_search("(",$splitValue1Array[0]) to count
		for($i=0;$i<count($splitValue1Array);$i++){
			for($j=array_search("(",$splitValue1Array[$i])+2;$j<=count($splitValue1Array[$i]);$j++){
				unset ($splitValue1Array[$i][$j]);
				if ($j == array_search("(",$splitValue1Array[$i])+2){
					$splitValue1Array[$i][$j] = $valueTotalArrayFromImplode[$i];
				}
			}
			$splitValue1Array[$i] = array_values($splitValue1Array[$i]);
		}
		//delete open Parenthesis
		for($i=0;$i<count($splitValue1Array);$i++){			
			$deleteCloseParen[$i] = array_search("(",$splitValue1Array[$i]);
			$splitValue1Array[$i][$deleteCloseParen[$i]]= "";
			$deleteOpenParen[$i] = array_search(")",$splitValue1Array[$i]);
			$splitValue1Array[$i][$deleteOpenParen[$i]]= "";
		}
		
		//echo $valueTotalArrayFromImplode[1];
		/*foreach($value2ArrayMulti as $key){
			foreach($key as $value){
				echo $value;
			}
		}*/
		//replace back y0 and y1 to x
		$value4Array = array();
		for($i=0;$i<count($splitValue1Array);$i++){
			$value4Array = array_merge($value4Array,$splitValue1Array[$i]);
		}
		//implode($saveInternalParenthesisMutiArray[0]);
		for($i=0;$i<count($internalParenthesis)/2;$i++){
			$replacemntKey[$i] = array_search("y".$i,$value4Array);
			$value4Array[$replacemntKey[$i]] = implode($saveInternalParenthesisMutiArray[$i]);	
		}
		/*foreach($value4Array as $value => $ky){
			echo  $value. "=>". $ky."<br>";
		}
		*/
		//multiplying

			//explode variable in internalparenthesis
		$addingnum=0;
		for($i=0;$i<(count($value4Array));$i++){
			if (strlen($value4Array[$i])<2){
				$value5Array[$i+$addingnum] = $value4Array[$i];
				$i+$addingnum;
			}else{ 
				for($j=0;$j<strlen($value4Array[$i]);$j++){
				$value4Array[$i] = strval($value4Array[$i]);
				$value5Array[$i+$addingnum] = $value4Array[$i][$j];
				$i+$addingnum++;
				}
			}
		}
		foreach($value5Array as $key => $value){
			if($value == " "){
				unset($value5Array[$key]);
			}
		}
		$value5Array = array_values($value5Array);
		//print_r($value5Array);
		//echo "<br>";
		$i=0;
		foreach($value5Array as $key => $value){
			//echo $key . "=>". $value. "<br>";
			if ($value == "*" or $value == "-" or $value == "+" or $value == "/"){
				$allSignKeyArray[$i] = $key;
				$i++;
				//echo "<br>";
			}
		}
			//print_r($allSignKeyArray);
			//echo "<br>";
	//split value5Array into section by saving in mutidimensionArr
			//echo count($value5Array);
			//echo "<br>";
			//print_r($value5Array);
			//echo "<br>";
		for($i=0;$i<=count($allSignKeyArray);$i++){
			if($i==0){
				for($j=0;$j<$allSignKeyArray[$i];$j++){ $splitValue5ArrayMultiDi[$i][$j] = $value5Array[$j]; 
				}
			}else{
				if(isset($allSignKeyArray[$i])== true){
					for($k=$allSignKeyArray[$i-1]+1;$k<$allSignKeyArray[$i];$k++){
						//echo $i-1;
						$splitValue5ArrayMultiDi[$i][$k] = $value5Array[$k];
					}
				}else{
					for($l=$allSignKeyArray[$i-1]+1;$l<count($value5Array);$l++){
						$splitValue5ArrayMultiDi[$i][$l] = $value5Array[$l];
					}
				}
			}
		}
		
		$resultofOperation = array();
		for($i=0;$i<count($allSignKeyArray);$i++){
			switch ($value5Array[$allSignKeyArray[$i]]){
				case "*":
					$num1 = implode($splitValue5ArrayMultiDi[$i]);
					$num2 = implode($splitValue5ArrayMultiDi[$i+1]);
					if (is_numeric($num1) and is_numeric($num2)){
						$num1 = intval($num1);
						$num2 = intval($num2);
						$resultofOperation[$i] = $num1 * $num2;
						//unset($splitValue5ArrayMultiDi[$i]);
						//unset($splitValue5ArrayMultiDi[$i+1]);
						//unset($allSignKeyArray[$i]);
					}else {
						$resultofOperation[$i] = $num1 ."*".$num2; 
					}
					
					break;
				default:
			}
		}
		/*echo "<br>";
		for($i=0;$i<=count($allSignKeyArray);$i++){
			if(isset($allSignKeyArray[$i])==true){
				echo $allSignKeyArray[$i];
				echo "<br>";
			}else{echo "no value";}
			
		}
		*/
		/*
		echo "<br>";
		foreach ($splitValue5ArrayMultiDi as $value){
			foreach($value as $key => $value1){
				echo $key."=>".$value1."<br>";
				//echo "1";
			}
		}
		*/
		
		//echo "<br>";
		//echo "<br>";
		//print_r($value5Array);
		echo "=";
		foreach($value5Array as $value){
				echo $value;
		}
		/*
		echo "<br>";
		$book= "2 ";
		//echo $one = intval($book);
		if (is_numeric($book)){
			echo "true";
		}else {echo "fales";}
		*/
		
	}elseif(count($internalParenthesis) < count($parenthesisKeyArray)/2){
		$iloop=count($internalParenthesis);
		do{
			$iloop=count($internalParenthesis);//loop Iloop
			//key 4 for giving us a better understanding with the exact amount of open parenthesis.
			$openParenthesisKey = array_search("(",$value1Array);
			//declaring variable for storing key for parenthesis
			$openParenthesisKeyArray = array();
			$closeParenthesisKeyArray = array();
			$parenthesisKeyArray = array();
			$openParenthesisKeyLength = count(array_keys($value1Array,"("));
			//store openParenthesis's key
			$i=0;//it is used for recording open parenthesis's key
			foreach ($value1Array as $key=>$val){
				if ($val == "("){
					$openParenthesisKeyArray[$i] = $key;
					$i++;
				}
			}
			//store closeParenthesis's key
			$j=0;//it is used for recording close parenthesis's key
			foreach ($value1Array as $key=>$val){
				if ($val == ")"){
					$closeParenthesisKeyArray[$j] = $key;
					$j++;
				}
			}
				//make AI recognizes parenthesis 
				$parenthesisKeyArray = array_merge($openParenthesisKeyArray,$closeParenthesisKeyArray);
				sort($parenthesisKeyArray);
				//check for amount of internal parenthesises- replace them with variable
				$k=0;
				for ($i= 0;$i<$openParenthesisKeyLength *2;$i++){
					if ($value1Array[$parenthesisKeyArray[$i]]=="(" and $value1Array[$parenthesisKeyArray[$i+1]]== ")"){
						$internalOpenParenthesisKeyArray[$k] = 	$parenthesisKeyArray[$i];
						$internalCloseParenthesisKeyArray[$k] = $parenthesisKeyArray[$i+1];
						$k++;
					}
				}
				//internalParenthesis amount
				$internalParenthesis = array_merge($internalOpenParenthesisKeyArray,$internalCloseParenthesisKeyArray);
				sort($internalParenthesis);
				//Print value1array in section by deleting what is in internal parenthesis
	
				for($i=0;$i<count($internalCloseParenthesisKeyArray);$i++){
					for($j=$internalOpenParenthesisKeyArray[$i];$j<				$internalCloseParenthesisKeyArray[$i];$j++){
					unset($value1Array[$j]);
					}
				}
				for($i=0;$i<count($internalCloseParenthesisKeyArray);$i++){
					$value1Array[$internalCloseParenthesisKeyArray[$i]] = "y".$i;
				}
				foreach ($value1Array as $value){
					echo $value;
				}
			}while($iloop<=count($parenthesisKeyArray));//end do while loop
		
	}//end elseif
	
?>
</html>
