<html>

			<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 style="#fff;border: 0px solid #98bf21;">
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Statistics >> Uncertainty and Population >> Center :</font></b><br>
					<p>
					<b>Objective: </b>Find Mean/Median/Mode on PHP. <br>
					<ul>
						<li>
							<b>Mean/Average :</b> The sum of the scores (&sum;) divided by the number of scores (n).
						</li>
						<li>
							<b>Median :</b>The actual value of the middle number  in the even of an odd numbering data or the mean values of the two numbers in an even numbering data.
						</li>
						<li>
						<b>Mode :</b>The values that occurs most often.
						</li>
					</ul>
					
					</p>
					<p>
					
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
					<td width = 100%>
					<b><font style="font-size:1em"></font></b>
<?php
//12 students
echo "<b><u>Finding Mean/Median/Mode</u></b><br>";
$grade = array(77,88,50,95,88,77,88,65,61,83,79,44);	
foreach ($grade as $key =>$value){
		echo $key . " => " .$value;
		echo " , ";
		if ($key == 3 or $key == 7){
			echo "<br>";
		}
	}
echo "<br>";
echo "<br>";

	//Mean
	echo "<b><u>Mean</u></b><br>";
	$student = 12;
	$mean = array_sum($grade)/$student;
	echo "<b>Mean : </b>".number_format($mean,2,'.',',');
	echo "<br>";
	echo "<br>";
	
	/*median is the mean of the values of the two numbers for 
	an even numbering data. The data is required to be sorted*/
	echo "<b><u>Median</u></b><br>";
	sort($grade);
	foreach ($grade as $key =>$value){
		echo $key . " => " .$value;
		echo " , ";
		if ($key == 3 or $key == 7){
			echo "<br>";
		}
	}
	echo "<br>";
	$median = (77 +79)/2;
	echo "<b>Median : </b>" . $median;
	echo "<br>";
	echo "<br>";
	
	//mode
	echo "<b><u>Mode</u></b><br>";
	$values = array_count_values($grade); 
	$mode = array_search(max($values), $values);
	echo "<b>Mode : </b>". $mode;
?> 

					</td>
					<td valign="top">
	
					
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
					<b><font style="font-size:1em">Codes :</font></b>
						<P>
<spamb>&lt;html></spamb><br>
<spamb>&lt;?php</spamb>
<pre style= "font-family: 'Time New Roman';">
<spamg>//12 students</spamg>
echo "&lt;b>&lt;u>Finding Mean/Median/Mode&lt;/u>&lt;/b>&lt;\n>";
$grade = array(77,88,50,95,88,77,88,65,61,83,79,44);	
foreach ($grade as $key =>$value){
		echo $key . " => " .$value;
		echo " , ";
		if ($key == 3 or $key == 7){
			echo "&lt;\n>";
		}
	}
echo "&lt;\n>";
echo "&lt;\n>";

	<spamg>//Mean</spamg>
	echo "&lt;b>&lt;u>Mean&lt;/u>&lt;/b>&lt;\n>";
	$student = 12;
	$mean = array_sum($grade)/$student;
	echo "&lt;b>Mean : &lt;/b>".number_format($mean,2,'.',',');
	echo "&lt;\n>";
	echo "&lt;\n>";
	
	/*median is the mean of the values of the two numbers for 
	an even numbering data. The data is required to be sorted*/
	echo "&lt;b>&lt;u>Median&lt;/u>&lt;/b>&lt;\n>";
	sort($grade);
	foreach ($grade as $key =>$value){
		echo $key . " => " .$value;
		echo " , ";
		if ($key == 3 or $key == 7){
			echo "&lt;\n>";
		}
	}
	echo "&lt;\n>";
	$median = (77 +79)/2;
	echo "&lt;b>Median : &lt;/b>" . $median;
	echo "&lt;\n>";
	echo "&lt;\n>";
	
	<spamg>//mode</spamg>
	echo "&lt;b>&lt;u>Mode&lt;/u>&lt;/b>&lt;\n>";
	$values = array_count_values($grade); 
	$mode = array_search(max($values), $values);
	echo "&lt;b>Mode : &lt;/b>". $mode;
</pre>
<spamb>?></spamb><br>
<spamb>&lt;/html></spamb>
						</P>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width = 50% valign = "top">
						<form action="" method = "post" id="tryitform">
							<b><font style="font-size:1.2em">PHP Code :</font></b><br><br>
							<textarea form="tryitform" name="txtcode" style="width:320px; height:350px; font-size:1em;"></textarea> 
						
					</td>
					<td width = 50% valign="top">
						
							<b><font style="font-size:1.2em">Result :</font></b><br><br>
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
							<input type ="submit" name="btnTryit" id = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px">
							</form>
					</td>
				</tr>
			</table>

			
</html>