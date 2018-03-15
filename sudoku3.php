
<html>
<style>

 #outer {
	 border-spacing: 0rem;
	 text-align:center;
	 cellpadding:0 ;
	 cellspacing:0 ;
	 background-color:#A7C942;
 }
 #inner {
	border-spacing: 0rem;
 }
  #fitting {
	 width:100%;
	 height:40px;
	 font-size: 1em;
	 padding:0;
	 border: 0;
	 text-align:center;
 }
</style>
<script>
	function submitSoduku(){
		
		//box1
		for (i=11;i<=99;i++){
			var ranNum11 = "<?php 
				echo $temp11 = mt_rand(1,9);
			?>";
			document.finput.txt11.value = ranNum11;
		}

	}

</script>

<?php
for ($m=11;$m<=99;$m++){
	${'txt'.$m}= '';
}
$num =array(1,2,3,4,5,6,7,8,9);
	if (isset($_POST['btnSub'])){		
		for($i=1;$i<=9;$i++){
			$num =array(1,2,3,4,5,6,7,8,9);
			for($j=1;$j<=9;$j+=1){
				if ($i==1){
					${'temp'.$i.$j} = array_rand($num);
					${'txt'.$i.$j} = $num[${'temp'.$i.$j}];
					unset($num[${'temp'.$i.$j}]);
				}
				if($i==2){
					do{
						${'temp'.$i.$j} = array_rand($num);
						${'txt'.$i.$j} = $num[${'temp'.$i.$j}];
					}while(${'txt'.$i.$j} == ${'txt'.($i-1).$j});
					unset($num[${'temp'.$i.$j}]);
				}
				
				if($i==3){
					do{
						${'temp'.$i.$j} = array_rand($num);
						${'txt'.$i.$j} = $num[${'temp'.$i.$j}];
					}while(${'txt'.$i.$j} == ${'txt'.($i-1).$j} or ${'txt'.$i.$j} == ${'txt'.($i-2).$j});
					unset($num[${'temp'.$i.$j}]);
				}
				if($i==4){
					do{
						${'temp'.$i.$j} = array_rand($num);
						${'txt'.$i.$j} = $num[${'temp'.$i.$j}];
					}while(${'txt'.$i.$j} == ${'txt'.($i-1).$j} or ${'txt'.$i.$j} == ${'txt'.($i-2).$j} or ${'txt'.$i.$j} == ${'txt'.($i-3).$j});
					unset($num[${'temp'.$i.$j}]);
				}
				
				if($i==5){
					do{
						${'temp'.$i.$j} = array_rand($num);
						${'txt'.$i.$j} = $num[${'temp'.$i.$j}];
					}while(${'txt'.$i.$j} == ${'txt'.($i-1).$j} or ${'txt'.$i.$j} == ${'txt'.($i-2).$j} or ${'txt'.$i.$j} == ${'txt'.($i-3).$j} or ${'txt'.$i.$j} == ${'txt'.($i-4).$j});
					unset($num[${'temp'.$i.$j}]);
				}
				if($i==6){
					do{
						${'temp'.$i.$j} = array_rand($num);
						${'txt'.$i.$j} = $num[${'temp'.$i.$j}];
					}while(${'txt'.$i.$j} == ${'txt'.($i-1).$j} or ${'txt'.$i.$j} == ${'txt'.($i-2).$j} or ${'txt'.$i.$j} == ${'txt'.($i-3).$j} or ${'txt'.$i.$j} == ${'txt'.($i-4).$j} or ${'txt'.$i.$j} == ${'txt'.($i-5).$j});
					unset($num[${'temp'.$i.$j}]);
				}
				if($i==7){
					do{
						${'temp'.$i.$j} = array_rand($num);
						${'txt'.$i.$j} = $num[${'temp'.$i.$j}];
					}while(${'txt'.$i.$j} == ${'txt'.($i-1).$j} or ${'txt'.$i.$j} == ${'txt'.($i-2).$j} or ${'txt'.$i.$j} == ${'txt'.($i-3).$j} or ${'txt'.$i.$j} == ${'txt'.($i-4).$j} or ${'txt'.$i.$j} == ${'txt'.($i-5).$j} or ${'txt'.$i.$j} == ${'txt'.($i-6).$j});
					unset($num[${'temp'.$i.$j}]);
				}
				if($i==8){
					do{
						${'temp'.$i.$j} = array_rand($num);
						${'txt'.$i.$j} = $num[${'temp'.$i.$j}];
					}while(${'txt'.$i.$j} == ${'txt'.($i-1).$j} or ${'txt'.$i.$j} == ${'txt'.($i-2).$j} or ${'txt'.$i.$j} == ${'txt'.($i-3).$j} or ${'txt'.$i.$j} == ${'txt'.($i-4).$j} or ${'txt'.$i.$j} == ${'txt'.($i-5).$j} or ${'txt'.$i.$j} == ${'txt'.($i-6).$j} or ${'txt'.$i.$j} == ${'txt'.($i-7).$j});
					unset($num[${'temp'.$i.$j}]);
				}
				if($i==9){
					do{
						${'temp'.$i.$j} = array_rand($num);
						${'txt'.$i.$j} = $num[${'temp'.$i.$j}];
					}while(${'txt'.$i.$j} == ${'txt'.($i-1).$j} or ${'txt'.$i.$j} == ${'txt'.($i-2).$j} or ${'txt'.$i.$j} == ${'txt'.($i-3).$j} or ${'txt'.$i.$j} == ${'txt'.($i-4).$j} or ${'txt'.$i.$j} == ${'txt'.($i-5).$j} or ${'txt'.$i.$j} == ${'txt'.($i-6).$j} or ${'txt'.$i.$j} == ${'txt'.($i-7).$j} or ${'txt'.$i.$j} == ${'txt'.($i-8).$j});
					unset($num[${'temp'.$i.$j}]);
				}
			}
		}
	}

?>	

			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 1px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Math Games >> Sudoku 4:</font></b><br>
					<p>
					<b>Objective :</b> Showing how to code a basic Soduku.
					</p>
					<p>
					<b>Rules : </b>Sudoku is a number placing puzzle based on a 9x9 grid with several numbers. The goal is to place the numbers 1 to 9 in the empty squares so that each row, each column and each 3x3 box contains the same number only once.
					
					</p>
					</td>
				</tr>
				<!-- 
				<tr style= "font-size: 1.4em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black; border: 0px ; 
			solid: #A7C942; tom: 4px;"
				>
					<td width = 50%>
					<b><font style="font-size:1em">Examples :</font></b><br>
					
					</td>
					<td width = 50%>
					
					</td>
				</tr>
				-->
			</table>

			<table width = 650px 
			style="padding-bot: 5px;
			background-color: f1f1f1;
			color: black;
			border: 0px solid #98bf21;
			tom: 4px;">
				<tr>
					<td style="font-size:1em"> 
					
<h2><center>Sudoku 4</center></h2>
<table id = 'outer' align = 'center' border = 1>
	<form action='' method = 'post' name = 'finput'>
	<tr>
		<td>
			<table id = 'inner'>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1 
						name = 'txt11'
						value = '<?php echo $txt11;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt12'
						id = 'txtid12'
						value = '<?php echo $txt12;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt13'
						value = '<?php echo $txt13;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt21'
						value = '<?php echo $txt21;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt22'
						value = '<?php echo $txt22;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt23'
						value = '<?php echo $txt23;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt31'
						value = '<?php echo $txt31;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt32'
						value = '<?php echo $txt32;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt33'
						value = '<?php echo $txt33;?>'
						>
					</td>
				</tr>
			</table>
		</td>
		<td style= "background-color: #EAF2D3;">
		<table id = 'inner'>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt14'
						value = '<?php echo $txt14;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt15'
						value = '<?php echo $txt15;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt16'
						value = '<?php echo $txt16;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt24'
						value = '<?php echo $txt24;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt25'
						value = '<?php echo $txt25;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt26'
						value = '<?php echo $txt26;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt34'
						value = '<?php echo $txt34;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt35'
						value = '<?php echo $txt35;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt36'
						value = '<?php echo $txt36;?>'
						>
					</td>
				</tr>
			</table>
		</td>
		<td>
		<table id = 'inner'>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt17'
						value = '<?php echo $txt17;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt18'
						value = '<?php echo $txt18;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt19'
						value = '<?php echo $txt19;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt27'
						value = '<?php echo $txt27;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt28'
						value = '<?php echo $txt28;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt29'
						value = '<?php echo $txt29;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt37'
						value = '<?php echo $txt37;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt38'
						value = '<?php echo $txt38;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt39'
						value = '<?php echo $txt39;?>'
						>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr style= "background-color: #EAF2D3;">
		<td>
		<table id = 'inner'>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt41'
						value = '<?php echo $txt41;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt42'
						value = '<?php echo $txt42;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt43'
						value = '<?php echo $txt43;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt51'
						value = '<?php echo $txt51;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt52'
						value = '<?php echo $txt52;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt53'
						value = '<?php echo $txt53;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt61'
						value = '<?php echo $txt61;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt62'
						value = '<?php echo $txt62;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt63'
						value = '<?php echo $txt63;?>'
						>
					</td>
				</tr>
			</table>
		</td>
		<td style= "background-color: #A7C942;">
		<table id = 'inner'>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt44'
						value = '<?php echo $txt44;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt45'
						value = '<?php echo $txt45;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt46'
						value = '<?php echo $txt46;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt54'
						value = '<?php echo $txt54;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt55'
						value = '<?php echo $txt55;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt56'
						value = '<?php echo $txt56;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt64'
						value = '<?php echo $txt64;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt65'
						value = '<?php echo $txt65;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt66'
						value = '<?php echo $txt66;?>'
						>
					</td>
				</tr>
			</table>
		</td>
		<td>
		<table id = 'inner'>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt47'
						value = '<?php echo $txt47;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt48'
						value = '<?php echo $txt48;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt49'
						value = '<?php echo $txt49;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt57'
						value = '<?php echo $txt57;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt58'
						value = '<?php echo $txt58;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt59'
						value = '<?php echo $txt59;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt67'
						value = '<?php echo $txt67;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt68'
						value = '<?php echo $txt68;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt69'
						value = '<?php echo $txt69;?>'
						>
					</td>
				</tr>
			</table>
		</td>
		
	</tr>
		<tr>
		<td>
		<table id = 'inner'>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt71'
						value = '<?php echo $txt71;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt72'
						value = '<?php echo $txt72;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt73'
						value = '<?php echo $txt73;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt81'
						value = '<?php echo $txt81;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt82'
						value = '<?php echo $txt82;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt83'
						value = '<?php echo $txt83;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt91'
						value = '<?php echo $txt91;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt92'
						value = '<?php echo $txt92;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt93'
						value = '<?php echo $txt93;?>'
						>
					</td>
				</tr>
			</table>
		</td>
		<td style= "background-color: #EAF2D3;">
		<table id = 'inner'>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt74'
						value = '<?php echo $txt74;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt75'
						value = '<?php echo $txt75;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt76'
						value = '<?php echo $txt76;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt84'
						value = '<?php echo $txt84;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt85'
						value = '<?php echo $txt85;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt86'
						value = '<?php echo $txt86;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt94'
						value = '<?php echo $txt94;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt95'
						value = '<?php echo $txt95;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt96'
						value = '<?php echo $txt96;?>'
						>
					</td>
				</tr>
			</table>
		</td>
		<td>
		<table id = 'inner'>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt77'
						value = '<?php echo $txt77;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt78'
						value = '<?php echo $txt78;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt79'
						value = '<?php echo $txt79;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt87'
						value = '<?php echo $txt87;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt88'
						value = '<?php echo $txt88;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt89'
						value = '<?php echo $txt89;?>'
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt97'
						value = '<?php echo $txt97;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt98'
						value = '<?php echo $txt98;?>'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt99'
						value = '<?php echo $txt99;?>'
						>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
	<br>
<center>
<input type = 'submit' value='Generate' name='btnSub' <?php if (isset($_REQUEST['btnSub'])){echo "autofocus";} ?> style='font-size:1.2em'>
</center>
<br>
<form>
					
					<b><font style="font-size:1em">Code 1 :</font></b> The code is completed but and it is not a full Sudoku yet. since it is taking high processing power i stop half way through. Please look at the code below<br>
<pre style = "font-family:'Time New Roman'; width:650px">
&lt;html> 	

	

&lt;/html> 
</pre>	
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
							<input type ="submit" name="btnTryit" form = "tryitform" value="Try It" <?php if (isset($_REQUEST['btnTryit'])){echo "autofocus";} ?> style="font-size:1.2em; font-family: Georgia, Serif; width:100px; height:34px">
							</form>
					</td>
				</tr>
			</table>
<?php
/*
$num =array(1,2,3,4,5,6,7,8,9);	
		for($i=1;$i<=9;$i++){
			$num =array(1,2,3,4,5,6,7,8,9);
			for($j=1;$j<=9;$j+=1){
				if ($i==1){
					${'top'.$i.$j} = array_rand($num);
					echo ${'box'.$i.$j} = $num[${'top'.$i.$j}];
					unset($num[${'top'.$i.$j}]);
				}
				if($i==2){
					do{
						${'top'.$i.$j} = array_rand($num);
						${'box'.$i.$j} = $num[${'top'.$i.$j}];
					}while(${'box'.$i.$j} == ${'box'.($i-1).$j});
					echo ${'box'.$i.$j};
					unset($num[${'top'.$i.$j}]);
				}
				
				if($i==3){
					do{
						${'top'.$i.$j} = array_rand($num);
						${'box'.$i.$j} = $num[${'top'.$i.$j}];
					}while(${'box'.$i.$j} == ${'box'.($i-1).$j} or ${'box'.$i.$j} == ${'box'.($i-2).$j});
					echo ${'box'.$i.$j};
					unset($num[${'top'.$i.$j}]);
				}
				if($i==4){
					do{
						${'top'.$i.$j} = array_rand($num);
						${'box'.$i.$j} = $num[${'top'.$i.$j}];
					}while(${'box'.$i.$j} == ${'box'.($i-1).$j} or ${'box'.$i.$j} == ${'box'.($i-2).$j} or ${'box'.$i.$j} == ${'box'.($i-3).$j});
					echo ${'box'.$i.$j};
					unset($num[${'top'.$i.$j}]);
				}
				
				if($i==5){
					do{
						${'top'.$i.$j} = array_rand($num);
						${'box'.$i.$j} = $num[${'top'.$i.$j}];
					}while(${'box'.$i.$j} == ${'box'.($i-1).$j} or ${'box'.$i.$j} == ${'box'.($i-2).$j} or ${'box'.$i.$j} == ${'box'.($i-3).$j} or ${'box'.$i.$j} == ${'box'.($i-4).$j});
					echo ${'box'.$i.$j};
					unset($num[${'top'.$i.$j}]);
				}
				if($i==6){
					do{
						${'top'.$i.$j} = array_rand($num);
						${'box'.$i.$j} = $num[${'top'.$i.$j}];
					}while(${'box'.$i.$j} == ${'box'.($i-1).$j} or ${'box'.$i.$j} == ${'box'.($i-2).$j} or ${'box'.$i.$j} == ${'box'.($i-3).$j} or ${'box'.$i.$j} == ${'box'.($i-4).$j} or ${'box'.$i.$j} == ${'box'.($i-5).$j});
					echo ${'box'.$i.$j};
					unset($num[${'top'.$i.$j}]);
				}
				if($i==7){
					do{
						${'top'.$i.$j} = array_rand($num);
						${'box'.$i.$j} = $num[${'top'.$i.$j}];
					}while(${'box'.$i.$j} == ${'box'.($i-1).$j} or ${'box'.$i.$j} == ${'box'.($i-2).$j} or ${'box'.$i.$j} == ${'box'.($i-3).$j} or ${'box'.$i.$j} == ${'box'.($i-4).$j} or ${'box'.$i.$j} == ${'box'.($i-5).$j} or ${'box'.$i.$j} == ${'box'.($i-6).$j});
					echo ${'box'.$i.$j};
					unset($num[${'top'.$i.$j}]);
				}
				if($i==8){
					do{
						${'top'.$i.$j} = array_rand($num);
						${'box'.$i.$j} = $num[${'top'.$i.$j}];
					}while(${'box'.$i.$j} == ${'box'.($i-1).$j} or ${'box'.$i.$j} == ${'box'.($i-2).$j} or ${'box'.$i.$j} == ${'box'.($i-3).$j} or ${'box'.$i.$j} == ${'box'.($i-4).$j} or ${'box'.$i.$j} == ${'box'.($i-5).$j} or ${'box'.$i.$j} == ${'box'.($i-6).$j} or ${'box'.$i.$j} == ${'box'.($i-7).$j});
					echo ${'box'.$i.$j};
					unset($num[${'top'.$i.$j}]);
				}
				if($i==9){
					do{
						${'top'.$i.$j} = array_rand($num);
						${'box'.$i.$j} = $num[${'top'.$i.$j}];
					}while(${'box'.$i.$j} == ${'box'.($i-1).$j} or ${'box'.$i.$j} == ${'box'.($i-2).$j} or ${'box'.$i.$j} == ${'box'.($i-3).$j} or ${'box'.$i.$j} == ${'box'.($i-4).$j} or ${'box'.$i.$j} == ${'box'.($i-5).$j} or ${'box'.$i.$j} == ${'box'.($i-6).$j} or ${'box'.$i.$j} == ${'box'.($i-7).$j} or ${'box'.$i.$j} == ${'box'.($i-8).$j});
					echo ${'box'.$i.$j};
					unset($num[${'top'.$i.$j}]);
				}
			}
			echo "<br>";
		}
*/
?>			
</html>










