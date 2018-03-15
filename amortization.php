
<html>
<script>
	function changeonfocus1(){
		document.getElementById('loanidf').value = "";
	}
	function changeonfocus2(){
		document.getElementById('interestidf').value = "";
	}
	function changeonfocus3(){
		document.getElementById('termidf').value = "";
	}
	function changeonfocus4(){
		document.getElementById('dateidf').value = "";
	}
</script>
	
		<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Math Special >> Loan >> Amortization :</font></b><br>
					<p>
					<b>Objective :</b> To be able to check monthly, and yearly interest payment.
					</p>
					
					</td>
				</tr>
				<tr style="background-color:#EAF2D3;">
					<td>
<?php
	$loanamount1=0;
	 $interest=0;
	 $term=0;
	 $total1=0;
	 $payment1=0;
	 $principle1=0;
	 $endingba1=0;
	
?>

<form name="finput" method="post">
	<center>
	<h3>Amortization</h3>
	<table>
		<tr>
			<td width=200px><b>Loan Amount:</b></td>
			<td><b>Interest Rate (Y):</b></td>
		
		</tr>
		<tr>
			<td><input id = "loanidf" type = "text" name = "loanamount" value ="10000" onfocus="changeonfocus1()"></td>
			<td><input id = "interestidf" type = "text" name = "interest" value ="10%" onfocus="changeonfocus2()"></td>
		
		</tr>
		<tr>
			<td><b>Term of Loan (M):</b></td>
			<td><b>Date of Reimbursement:</b></td>
		
		</tr>
		<tr>
			<td><input id = "termidf" type = "text" name = "termloan" value ="2" onfocus="changeonfocus3()"></td>
			<td><input id = "dateidf" type = "text" name = "datereim" value ="10/10/2015" onfocus="changeonfocus4()"></td>
	
		</tr>
		<tr>
			<td colspan=2 style="text-align:center;">
			
				<br><input type = "submit" name = "btnsubmit" value ="Calculate" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?>><br>
			</td>
			
		</tr>

	</table>
	</center>
</form>
<br>
<table border="1px" width="100%" style="padding:10px;">
	<tr>
		<th>No</th>
		<th>Loan Amount</th>
		<th>Interest Rate</th>
		<th>Term</th>
		<th>Int Payment</th>
		<th>Principle</th>
		<th>Ending Bal</th>
		<th>Total Payment</th>
	</tr>
	<?php 
	
	if (isset($_REQUEST['btnsubmit'])){
		
			//step 1 which is No.1
			$term=$_REQUEST['termloan'];
			$interest=($_REQUEST['interest']/100)/$term;
			$loanamount1=$_REQUEST['loanamount'];
			$payment1 = $interest*$loanamount1;
			$total1 = ($loanamount1*$interest*pow((1+$interest),$term))/(pow((1+$interest),$term)-1);
			$principle1 = $total1 - $payment1;
			$endingba1 = $loanamount1-$principle1;
			
		for($i=1;$i<=$term+1;$i++){
			$termtemp=$term;
			$termtemp--;
			
			//to find the sum
			$loantemp=0;
			$paymenttemp=0;
			$principletemp=0;
			$totaltemp=0;
			$endingbatemp=0;
			if($i==($term+1)){
				for($j=1;$j<=$term;$j++){
					$loantemp += ${'loanamount'.$j};					
					$paymenttemp += ${'payment'.$j};
					$principletemp += ${'principle'.$j};
					$totaltemp += ${'total'.$j};
					$endingbatemp += ${'endingba'.$j};
				${'loanamount'.($term+1)} = $loantemp;
				${'payment'.($term+1)} = $paymenttemp;
				${'principle'.($term+1)} = $principletemp;
				${'total'.($term+1)} = $totaltemp;
				${'endingba'.($term+1)} = $endingbatemp;
				}
	
			echo '
		<tr style="text-align:center">
			<td> <b>'.$i.'</b></td>
			<td> <b>'.number_format(${'loanamount'.$i},2,'.',',')." $".'</b></td>
			<td> <b>'.number_format($interest,4,'.',',').'</b></td>
			<td> <b>'.$term.'</b></td>
			<td><b>' .number_format(${'payment'.$i},2,'.',',')." $".'</b></td>
			<td><b>' .number_format(${'principle'.$i},2,'.',',')." $".'</b></td>
			<td><b>' .number_format(${'endingba'.$i},2,'.',',')." $".'</b></td>
			<td><b>' .number_format(${'total'.$i},2,'.',',')." $".'</b></td>
		</tr>';
				break;
			}
			
			//from 2 or higher
			if($i>=2){
			${'loanamount'.$i}=${'endingba'.($i-1)};
			${'payment'.$i} = ${'endingba'.($i-1)}*$interest;
			${'principle'.$i} = $total1-${'payment'.$i};
			${'endingba'.$i} = ${'loanamount'.$i}-${'principle'.$i};
			${'total'.$i} = $total1;
			
			}
		echo '
		<tr style="text-align:center">
			<td> '.$i.'</td>
			<td> '.number_format(${'loanamount'.$i},2,'.',',').'</td>
			<td> '.number_format($interest,4,'.',',').'</td>
			<td> '.$term.'</td>
			<td>' .number_format(${'payment'.$i},2,'.',',').'</td>
			<td>' .number_format(${'principle'.$i},2,'.',',').'</td>
			<td>' .number_format(${'endingba'.$i},2,'.',',').'</td>
			<td>' .number_format(${'total'.$i},2,'.',',').'</td>
		</tr>';
		
		}
	}else{
		$i=1;
		echo '
	<tr style="text-align:center">
		<td> '.$i.'</td>
		<td> '.number_format(${'loanamount'.$i},2,'.',',').'</td>
		<td> '.number_format($interest,4,'.',',').'</td>
		<td> '.$term.'</td>
		<td>' .number_format(${'payment'.$i},2,'.',',').'</td>
		<td>' .number_format(${'principle'.$i},2,'.',',').'</td>
		<td>' .number_format(${'endingba'.$i},2,'.',',').'</td>
		<td>' .number_format(${'total'.$i},2,'.',',').'</td>
	</tr>';
	}
	?>
</table>
					</td>
				</tr>

			</table>

			<table width = 100%
			style="padding-bot: 5px;
			background-color: #f1f1f1;
			color: black;
			border: 0px solid #98bf21;
			tom: 4px;">
				<tr>
					<td style="font-size:1em"> 
					<b><font style="font-size:1em">Code :</font></b> 
<pre style = "font-family:'Time New Roman';">
<spamb>&lt;html></spamb> 
<spamb>&lt;?php</spamb> 
	$loanamount1=0;
	 $interest=0;
	 $term=0;
	 $total1=0;
	 $payment1=0;
	 $principle1=0;
	 $endingba1=0;
<spamb>?></spamb>

&lt;form name="finput" method="post">
	&lt;center>
	&lt;h3>Amortization&lt;/h3>
	&lt;table>
		&lt;tr>
			&lt;td width=200px>&lt;b>Loan Amount:&lt;/b>&lt;/td>
			&lt;td>&lt;b>Interest Rate:&lt;/b>&lt;/td>
		
		&lt;/tr>
		&lt;tr>
			&lt;td>&lt;input type = "text" name = "loanamount" value ="10000">&lt;/td>
			&lt;td>&lt;input type = "text" name = "interest" value ="10%">&lt;/td>
		
		&lt;/tr>
		&lt;tr>
			&lt;td>&lt;b>Term of Loan:&lt;/b>&lt;/td>
			&lt;td>&lt;b>Date of Reimbursement:&lt;/b>&lt;/td>
		
		&lt;/tr>
		&lt;tr>
			&lt;td>&lt;input type = "text" name = "termloan" value ="2">&lt;/td>
			&lt;td>&lt;input type = "text" name = "datereim" value ="10/10/2015">&lt;/td>
	
		&lt;/tr>
		&lt;tr>
			&lt;td colspan=2 style="text-align:center;">
			
				&lt;br>&lt;input type = "submit" name = "btnsubmit" value ="Calculate" 
				&lt;?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?>>&lt;br>
			&lt;/td>
			
		&lt;/tr>

	&lt;/table>
	&lt;/center>
&lt;/form>
&lt;br>
&lt;table border="1px" width="100%" style="padding:10px;">
	&lt;tr>
		&lt;th>No&lt;/th>
		&lt;th>Loan Amount&lt;/th>
		&lt;th>Interest Rate&lt;/th>
		&lt;th>Term&lt;/th>
		&lt;th>Int Payment&lt;/th>
		&lt;th>Principle&lt;/th>
		&lt;th>Ending Bal&lt;/th>
		&lt;th>total Payment&lt;/th>
	&lt;/tr>
	
	<spamb>&lt;?php</spamb>
	
	if (isset($_REQUEST['btnsubmit'])){
		
			<spamg>//step 1 which is No.1</spamg>
			$term=$_REQUEST['termloan'];
			$interest=($_REQUEST['interest']/100)/$term;
			$loanamount1=$_REQUEST['loanamount'];
			$payment1 = $interest*$loanamount1;
			$total1 = ($loanamount1*$interest*pow((1+$interest),$term))/
			(pow((1+$interest),$term)-1);
			$principle1 = $total1 - $payment1;
			$endingba1 = $loanamount1-$principle1;
			
		for($i=1;$i&lt;=$term+1;$i++){
			$termtemp=$term;
			$termtemp--;
			
			<spamg>//to find the sum</spamg>
			$loantemp=0;
			$paymenttemp=0;
			$principletemp=0;
			$totaltemp=0;
			$endingbatemp=0;
			if($i==($term+1)){
				for($j=1;$j&lt;=$term;$j++){
					$loantemp += ${'loanamount'.$j};					
					$paymenttemp += ${'payment'.$j};
					$principletemp += ${'principle'.$j};
					$totaltemp += ${'total'.$j};
					$endingbatemp += ${'endingba'.$j};
				${'loanamount'.($term+1)} = $loantemp;
				${'payment'.($term+1)} = $paymenttemp;
				${'principle'.($term+1)} = $principletemp;
				${'total'.($term+1)} = $totaltemp;
				${'endingba'.($term+1)} = $endingbatemp;
				}
	
			echo '
		&lt;tr style="text-align:center">
			&lt;td> &lt;b>'.$i.'&lt;/b>&lt;/td>
			&lt;td> &lt;b>'.number_format(${'loanamount'.$i},2,'.',',').'&lt;/b>&lt;/td>
			&lt;td> &lt;b>'.number_format($interest,4,'.',',').'&lt;/b>&lt;/td>
			&lt;td> &lt;b>'.$term.'&lt;/b>&lt;/td>
			&lt;td>&lt;b>' .number_format(${'payment'.$i},2,'.',',').'&lt;/b>&lt;/td>
			&lt;td>&lt;b>' .number_format(${'principle'.$i},2,'.',',').'&lt;/b>&lt;/td>
			&lt;td>&lt;b>' .number_format(${'endingba'.$i},2,'.',',').'&lt;/b>&lt;/td>
			&lt;td>&lt;b>' .number_format(${'total'.$i},2,'.',',').'&lt;/b>&lt;/td>
		&lt;/tr>';
				break;
			}
			
			<spamg>//from 2 or higher</spamg>
			if($i>=2){
			${'loanamount'.$i}=${'endingba'.($i-1)};
			${'payment'.$i} = ${'endingba'.($i-1)}*$interest;
			${'principle'.$i} = $total1-${'payment'.$i};
			${'endingba'.$i} = ${'loanamount'.$i}-${'principle'.$i};
			${'total'.$i} = $total1;
			
			}
		echo '
		&lt;tr style="text-align:center">
			&lt;td> '.$i.'&lt;/td>
			&lt;td> '.number_format(${'loanamount'.$i},2,'.',',').'&lt;/td>
			&lt;td> '.number_format($interest,4,'.',',').'&lt;/td>
			&lt;td> '.$term.'&lt;/td>
			&lt;td>' .number_format(${'payment'.$i},2,'.',',').'&lt;/td>
			&lt;td>' .number_format(${'principle'.$i},2,'.',',').'&lt;/td>
			&lt;td>' .number_format(${'endingba'.$i},2,'.',',').'&lt;/td>
			&lt;td>' .number_format(${'total'.$i},2,'.',',').'&lt;/td>
		&lt;/tr>';
		
		}
	}else{
		$i=1;
		echo '
	&lt;tr style="text-align:center">
		&lt;td> '.$i.'&lt;/td>
		&lt;td> '.number_format(${'loanamount'.$i},2,'.',',').'&lt;/td>
		&lt;td> '.number_format($interest,4,'.',',').'&lt;/td>
		&lt;td> '.$term.'&lt;/td>
		&lt;td>' .number_format(${'payment'.$i},2,'.',',').'&lt;/td>
		&lt;td>' .number_format(${'principle'.$i},2,'.',',').'&lt;/td>
		&lt;td>' .number_format(${'endingba'.$i},2,'.',',').'&lt;/td>
		&lt;td>' .number_format(${'total'.$i},2,'.',',').'&lt;/td>
	&lt;/tr>';
	}

<spamb>?></spamb> 
<spamb>&lt;/html></spamb> 
</pre>	
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td width = 50% valign="top">
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
							<input type ="submit" name="btnTryit" form = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px" disabled> Sorry, for the inconvenience!
							</form>
					</td>
				</tr>
			</table>
			
</html>










