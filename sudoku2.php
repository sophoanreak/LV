
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
	 border: 0;
	 text-align:center;
 }
</style>
<script>
	function submitSoduku(){
		var x=1;var y = 9;
			var ranNum11 = Math.floor(Math.random()* ((y-x)+1)+x);//random between 1 and 9
			document.finput.txt11.value = ranNum11;
		
		var ranNum12 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum12 == ranNum11){
			ranNum12 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt12.value = ranNum12;
		
		var ranNum13 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum13 == ranNum11 || ranNum13 == ranNum12){
			ranNum13 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt13.value = ranNum13;
		
		var ranNum21 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum21 == ranNum11 || ranNum21 ==ranNum12 || ranNum21 == ranNum13){
			ranNum21 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt21.value = ranNum21;
		
		var ranNum22 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum22 == ranNum11 || ranNum22 ==ranNum12 || ranNum22 == ranNum13 || ranNum22 ==ranNum21){
			ranNum22 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt22.value = ranNum22;
		
		var ranNum23 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum23 == ranNum11 || ranNum23 ==ranNum12 || ranNum23 == ranNum13 || ranNum23 ==ranNum21 || ranNum23 ==ranNum22){
			ranNum23 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt23.value = ranNum23;

		var ranNum31 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum31 == ranNum11 || ranNum31 ==ranNum12 || ranNum31 == ranNum13 || ranNum31 ==ranNum21 || ranNum31 ==ranNum22 || ranNum31 ==ranNum23){
			ranNum31 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt31.value = ranNum31;

		var ranNum32 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum32==ranNum11 || ranNum32 == ranNum12 || ranNum32 == ranNum13 || ranNum32 ==ranNum21 || ranNum32 ==ranNum22 || ranNum32 ==ranNum23 || ranNum32 == ranNum31){
			ranNum32 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt32.value = ranNum32;
		
		var ranNum33 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum33==ranNum11 || ranNum33 == ranNum12 || ranNum33 == ranNum13 || ranNum33 ==ranNum21 || ranNum33 ==ranNum22 || ranNum33 ==ranNum23 || ranNum33 == ranNum31 || ranNum33 ==ranNum32){
			ranNum33 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt33.value = ranNum33;
		
		//box2
		var ranNum14 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum14==ranNum11 || ranNum14 == ranNum12 || ranNum14 == ranNum13){
			ranNum14 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt14.value = ranNum14;
		
		var ranNum15 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum15==ranNum11 || ranNum15 == ranNum12 || ranNum15 == ranNum13 || ranNum15 ==ranNum14){
			ranNum15 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt15.value = ranNum15;
		
		var ranNum16 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum16==ranNum11 || ranNum16 == ranNum12 || ranNum16 == ranNum13 || ranNum16==ranNum14 || ranNum16 == ranNum15){
			ranNum16 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt16.value = ranNum16;
		
		var ranNum24 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum24==ranNum21 || ranNum24 == ranNum22 || ranNum24 == ranNum23 || ranNum24==ranNum14 || ranNum24 == ranNum15 || ranNum24 == ranNum16){
			ranNum24 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt24.value = ranNum24;
		
		var ranNum25 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum25==ranNum21 || ranNum25 == ranNum22 || ranNum25 == ranNum23 || ranNum25==ranNum14 || ranNum25 == ranNum15 || ranNum25 == ranNum16 || ranNum25==ranNum24){
			ranNum25 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt25.value = ranNum25;

		var ranNum26 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum26==ranNum21 || ranNum26 == ranNum22 || ranNum26 == ranNum23 || ranNum26==ranNum14 || ranNum26 == ranNum15 || ranNum26 == ranNum16 || ranNum26==ranNum24 || ranNum26==ranNum25 ){
			ranNum26 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt26.value = ranNum26;
		
		var ranNum34 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum34==ranNum31 || ranNum34 == ranNum32 || ranNum34 == ranNum33 || ranNum34==ranNum14 || ranNum34 == ranNum15 || ranNum34 == ranNum16 || ranNum34==ranNum24 || ranNum34==ranNum25 ||ranNum34==ranNum26 ){
			ranNum34 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt34.value = ranNum34;
		
		var ranNum35 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum35==ranNum31 || ranNum35 == ranNum32 || ranNum35 == ranNum33 || ranNum35==ranNum14 || ranNum35 == ranNum15 || ranNum35 == ranNum16 || ranNum35==ranNum24 || ranNum35==ranNum25 ||ranNum35==ranNum26 || ranNum35==ranNum34){
			ranNum35 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt35.value = ranNum35;
		
		var ranNum36 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum36==ranNum31 || ranNum36 == ranNum32 || ranNum36 == ranNum33 || ranNum36==ranNum14 || ranNum36 == ranNum15 || ranNum36 == ranNum16 || ranNum36==ranNum24 || ranNum36==ranNum25 ||ranNum36==ranNum26 || ranNum36==ranNum34 || ranNum36==ranNum35){
			ranNum36 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt36.value = ranNum36;
		
		//box3
		var ranNum17 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum17==ranNum11 || ranNum17 == ranNum12 || ranNum17 == ranNum13 || ranNum17==ranNum14 || ranNum17 == ranNum15 || ranNum17 == ranNum16 ){
			ranNum17 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt17.value = ranNum17;
		
		var ranNum18 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum18==ranNum11 || ranNum18 == ranNum12 || ranNum18 == ranNum13 || ranNum18==ranNum14 || ranNum18 == ranNum15 || ranNum18 == ranNum16 || ranNum18 == ranNum17){
			ranNum18 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt18.value = ranNum18;
		
		var ranNum19 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum19==ranNum11 || ranNum19 == ranNum12 || ranNum19 == ranNum13 || ranNum19==ranNum14 || ranNum19 == ranNum15 || ranNum19 == ranNum16 || ranNum19 == ranNum17 || ranNum19==ranNum18){
			ranNum19 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt19.value = ranNum19;

		var ranNum27 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum27==ranNum21 || ranNum27 == ranNum22 || ranNum27 == ranNum23 || ranNum27==ranNum24 || ranNum27 == ranNum25 || ranNum27 == ranNum26 || ranNum27 == ranNum17 || ranNum27==ranNum18 || ranNum27 == ranNum19){
			ranNum27 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt27.value = ranNum27;
		
		var ranNum28 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum28==ranNum21 || ranNum28 == ranNum22 || ranNum28 == ranNum23 || ranNum28==ranNum24 || ranNum28 == ranNum25 || ranNum28 == ranNum26 || ranNum28 == ranNum17 || ranNum28==ranNum18 || ranNum28 == ranNum19|| ranNum28 ==ranNum27){
			ranNum28 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt28.value = ranNum28;
		
		var ranNum29 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum29==ranNum21 || ranNum29 == ranNum22 || ranNum29 == ranNum23 || ranNum29==ranNum24 || ranNum29 == ranNum25 || ranNum29 == ranNum26 || ranNum29 == ranNum17 || ranNum29==ranNum18 || ranNum29 == ranNum19|| ranNum29 ==ranNum27 || ranNum29 ==ranNum28){
			ranNum29 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt29.value = ranNum29;
		
		var ranNum37 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum37==ranNum31 || ranNum37 == ranNum32 || ranNum37 == ranNum33 || ranNum37==ranNum34 || ranNum37 == ranNum35 || ranNum37 == ranNum36 || ranNum37 == ranNum17 || ranNum37==ranNum18 || ranNum37 == ranNum19|| ranNum37 ==ranNum27 || ranNum37 ==ranNum28 || ranNum37 == ranNum29){
			ranNum37 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt37.value = ranNum37;
		
		var ranNum38 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum38==ranNum31 || ranNum38 == ranNum32 || ranNum38 == ranNum33 || ranNum38==ranNum34 || ranNum38 == ranNum35 || ranNum38 == ranNum36 || ranNum38 == ranNum17 || ranNum38==ranNum18 || ranNum38 == ranNum19|| ranNum38 ==ranNum27 || ranNum38 ==ranNum28 || ranNum38 == ranNum29 || ranNum38 == ranNum37){
			ranNum38 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt38.value = ranNum38;
		
		var ranNum39 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum39 == ranNum17 || ranNum39==ranNum18 || ranNum39 == ranNum19|| ranNum39 ==ranNum27 || ranNum39 ==ranNum28 || ranNum39 == ranNum29 || ranNum39 == ranNum37 || ranNum39 == ranNum38){
			ranNum39 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt39.value = ranNum39;
		
		//box4
		var ranNum41 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum41 == ranNum11 || ranNum41==ranNum21 || ranNum41 == ranNum31){
			ranNum41 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt41.value = ranNum41;
		
		var ranNum51 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum51 == ranNum11 || ranNum51==ranNum21 || ranNum51 == ranNum31 || ranNum51 == ranNum41){
			ranNum51 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt51.value = ranNum51;
		
		var ranNum61 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum61 == ranNum11 || ranNum61==ranNum21 || ranNum61 == ranNum31 || ranNum61 == ranNum41|| ranNum61 ==ranNum51){
			ranNum61 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt61.value = ranNum61;
		//box5
		//box6
		//box7
		//box8
		//box9
}
</script>

			<table width = 650px border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 1px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1em;color:green;">Math Games >> Sudoku 3:</font></b><br>
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

			<table width = 650px;
			style="padding-bot: 5px;
			background-color: #f1f1f1;
			color: black;
			border: 0px solid #98bf21;
			tom: 4px;">
					<td style="font-size:1em"> 
					
<h2><center>Sudoku 3</center></h2>
<table id = 'outer' align = 'center' border = 1>
	<form name = 'finput'>
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt12'
						id = 'txtid12'
						value = '';
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt13'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt22'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt23'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt32'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt33'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt15'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt16'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt25'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt26'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt35'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt36'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt18'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt19'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt28'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt29'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt38'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt39'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt42'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt43'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt52'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt53'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt62'
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt63'
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
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
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
				</tr>
				<tr>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
					<td>
						<input
						type = text
						id = 'fitting'
						size = 1
						>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
	<br>
<center>
<input type = 'button' value='Result' name='btnSub' style='font-size:1.2em' onclick = 'submitSoduku()'>
<!--input type = 'button' value='New' name='btnNew' style='font-size:1.2em'-->
</center>
<br>
<form>
					
					<b><font style="font-size:1em">Code 1 :</font></b> With additional Help from JavaScript. There is no PHP and the code is not completed due to limited processing power of my PC.. But the idea works... Please look at the code below<br>
<pre style = "font-family:'Time New Roman'; width:650px">
&lt;html> 	
&lt;script>
	function submitSoduku(){
		var x=1;var y = 9;
			var ranNum11 = Math.floor(Math.random()* ((y-x)+1)+x);//random between 1 and 9
			document.finput.txt11.value = ranNum11;
		
		var ranNum12 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum12 == ranNum11){
			ranNum12 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt12.value = ranNum12;
		
		var ranNum13 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum13 == ranNum11 || ranNum13 == ranNum12){
			ranNum13 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt13.value = ranNum13;
		
		var ranNum21 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum21 == ranNum11 || ranNum21 ==ranNum12 || ranNum21 == ranNum13){
			ranNum21 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt21.value = ranNum21;
		
		var ranNum22 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum22 == ranNum11 || ranNum22 ==ranNum12 || ranNum22 == ranNum13 ||
		ranNum22 ==ranNum21){
			ranNum22 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt22.value = ranNum22;
		
		var ranNum23 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum23 == ranNum11 || ranNum23 ==ranNum12 || ranNum23 == ranNum13 ||
		ranNum23 ==ranNum21 || ranNum23 ==ranNum22){
			ranNum23 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt23.value = ranNum23;

		var ranNum31 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum31 == ranNum11 || ranNum31 ==ranNum12 || ranNum31 == ranNum13 ||
		ranNum31 ==ranNum21 || ranNum31 ==ranNum22 || ranNum31 ==ranNum23){
			ranNum31 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt31.value = ranNum31;

		var ranNum32 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum32==ranNum11 || ranNum32 == ranNum12 || ranNum32 == ranNum13 ||
		ranNum32 ==ranNum21 || ranNum32 ==ranNum22 || ranNum32 ==ranNum23 ||
		ranNum32 == ranNum31){
			ranNum32 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt32.value = ranNum32;
		
		var ranNum33 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum33==ranNum11 || ranNum33 == ranNum12 || ranNum33 == ranNum13 ||
		ranNum33 ==ranNum21 || ranNum33 ==ranNum22 || ranNum33 ==ranNum23 ||
		ranNum33 == ranNum31 || ranNum33 ==ranNum32){
			ranNum33 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt33.value = ranNum33;
		
		//box2
		var ranNum14 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum14==ranNum11 || ranNum14 == ranNum12 || ranNum14 == ranNum13){
			ranNum14 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt14.value = ranNum14;
		
		var ranNum15 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum15==ranNum11 || ranNum15 == ranNum12 || ranNum15 == ranNum13 ||
		ranNum15 ==ranNum14){
			ranNum15 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt15.value = ranNum15;
		
		var ranNum16 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum16==ranNum11 || ranNum16 == ranNum12 || ranNum16 == ranNum13 ||
		ranNum16==ranNum14 || ranNum16 == ranNum15){
			ranNum16 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt16.value = ranNum16;
		
		var ranNum24 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum24==ranNum21 || ranNum24 == ranNum22 || ranNum24 == ranNum23 ||
		ranNum24==ranNum14 || ranNum24 == ranNum15 || ranNum24 == ranNum16){
			ranNum24 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt24.value = ranNum24;
		
		var ranNum25 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum25==ranNum21 || ranNum25 == ranNum22 || ranNum25 == ranNum23 ||
		ranNum25==ranNum14 || ranNum25 == ranNum15 || ranNum25 == ranNum16 ||
		ranNum25==ranNum24){
			ranNum25 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt25.value = ranNum25;

		var ranNum26 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum26==ranNum21 || ranNum26 == ranNum22 || ranNum26 == ranNum23 ||
		ranNum26==ranNum14 || ranNum26 == ranNum15 || ranNum26 == ranNum16 ||
		ranNum26==ranNum24 || ranNum26==ranNum25 ){
			ranNum26 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt26.value = ranNum26;
		
		var ranNum34 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum34==ranNum31 || ranNum34 == ranNum32 || ranNum34 == ranNum33 ||
		ranNum34==ranNum14 || ranNum34 == ranNum15 || ranNum34 == ranNum16 ||
		ranNum34==ranNum24 || ranNum34==ranNum25 ||ranNum34==ranNum26 ){
			ranNum34 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt34.value = ranNum34;
		
		var ranNum35 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum35==ranNum31 || ranNum35 == ranNum32 || ranNum35 == ranNum33 ||
		ranNum35==ranNum14 || ranNum35 == ranNum15 || ranNum35 == ranNum16 ||
		ranNum35==ranNum24 || ranNum35==ranNum25 ||ranNum35==ranNum26 ||
		ranNum35==ranNum34){
			ranNum35 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt35.value = ranNum35;
		
		var ranNum36 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum36==ranNum31 || ranNum36 == ranNum32 || ranNum36 == ranNum33 ||
		ranNum36==ranNum14 || ranNum36 == ranNum15 || ranNum36 == ranNum16 ||
		ranNum36==ranNum24 || ranNum36==ranNum25 ||ranNum36==ranNum26 ||
		ranNum36==ranNum34 || ranNum36==ranNum35){
			ranNum36 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt36.value = ranNum36;
		
		//box3
		var ranNum17 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum17==ranNum11 || ranNum17 == ranNum12 || ranNum17 == ranNum13 ||
		ranNum17==ranNum14 || ranNum17 == ranNum15 || ranNum17 == ranNum16 ){
			ranNum17 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt17.value = ranNum17;
		
		var ranNum18 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum18==ranNum11 || ranNum18 == ranNum12 || ranNum18 == ranNum13 ||
		ranNum18==ranNum14 || ranNum18 == ranNum15 || ranNum18 == ranNum16 ||
		ranNum18 == ranNum17){
			ranNum18 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt18.value = ranNum18;
		
		var ranNum19 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum19==ranNum11 || ranNum19 == ranNum12 || ranNum19 == ranNum13 ||
		ranNum19==ranNum14 || ranNum19 == ranNum15 || ranNum19 == ranNum16 ||
		ranNum19 == ranNum17 || ranNum19==ranNum18){
			ranNum19 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt19.value = ranNum19;

		var ranNum27 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum27==ranNum21 || ranNum27 == ranNum22 || ranNum27 == ranNum23 ||
		ranNum27==ranNum24 || ranNum27 == ranNum25 || ranNum27 == ranNum26 ||
		ranNum27 == ranNum17 || ranNum27==ranNum18 || ranNum27 == ranNum19){
			ranNum27 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt27.value = ranNum27;
		
		var ranNum28 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum28==ranNum21 || ranNum28 == ranNum22 || ranNum28 == ranNum23 ||
		ranNum28==ranNum24 || ranNum28 == ranNum25 || ranNum28 == ranNum26 ||
		ranNum28 == ranNum17 || ranNum28==ranNum18 || ranNum28 == ranNum19||
		ranNum28 ==ranNum27){
			ranNum28 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt28.value = ranNum28;
		
		var ranNum29 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum29==ranNum21 || ranNum29 == ranNum22 || ranNum29 == ranNum23 ||
		ranNum29==ranNum24 || ranNum29 == ranNum25 || ranNum29 == ranNum26 ||
		ranNum29 == ranNum17 || ranNum29==ranNum18 || ranNum29 == ranNum19||
		ranNum29 ==ranNum27 || ranNum29 ==ranNum28){
			ranNum29 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt29.value = ranNum29;
		
		var ranNum37 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum37==ranNum31 || ranNum37 == ranNum32 || ranNum37 == ranNum33 ||
		ranNum37==ranNum34 || ranNum37 == ranNum35 || ranNum37 == ranNum36 ||
		ranNum37 == ranNum17 || ranNum37==ranNum18 || ranNum37 == ranNum19||
		ranNum37 ==ranNum27 || ranNum37 ==ranNum28 || ranNum37 == ranNum29){
			ranNum37 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt37.value = ranNum37;
		
		var ranNum38 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum38==ranNum31 || ranNum38 == ranNum32 || ranNum38 == ranNum33 ||
		ranNum38==ranNum34 || ranNum38 == ranNum35 || ranNum38 == ranNum36 ||
		ranNum38 == ranNum17 || ranNum38==ranNum18 || ranNum38 == ranNum19||
		ranNum38 ==ranNum27 || ranNum38 ==ranNum28 || ranNum38 == ranNum29 ||
		ranNum38 == ranNum37){
			ranNum38 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt38.value = ranNum38;
		
		var ranNum39 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum39 == ranNum17 || ranNum39==ranNum18 || ranNum39 == ranNum19||
		ranNum39 ==ranNum27 || ranNum39 ==ranNum28 || ranNum39 == ranNum29 ||
		ranNum39 == ranNum37 || ranNum39 == ranNum38){
			ranNum39 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt39.value = ranNum39;
		
		//box4
		var ranNum41 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum41 == ranNum11 || ranNum41==ranNum21 || ranNum41 == ranNum31){
			ranNum41 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt41.value = ranNum41;
		
		var ranNum51 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum51 == ranNum11 || ranNum51==ranNum21 || ranNum51 == ranNum31 ||
		ranNum51 == ranNum41){
			ranNum51 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt51.value = ranNum51;
		
		var ranNum61 = Math.floor(Math.random()* ((y-x)+1)+x);
		while(ranNum61 == ranNum11 || ranNum61==ranNum21 || ranNum61 == ranNum31 ||
		ranNum61 == ranNum41|| ranNum61 ==ranNum51){
			ranNum61 = Math.floor(Math.random()* ((y-x)+1)+x);
		}
		document.finput.txt61.value = ranNum61;
		//box5
		//box6
		//box7
		//box8
		//box9
}
&lt;/script>

&lt;h2>&lt;center>Sudoku&lt;/center>&lt;/h2>
&lt;table id = 'outer' align = 'center' border = 1>
	&lt;form name = 'finput'>
	&lt;tr>
		&lt;td>
			&lt;table id = 'inner'>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1 
						name = 'txt11'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt12'
						id = 'txtid12'
						value = '';
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt13'
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt21'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt22'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt23'
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt31'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt32'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt33'
						>
					&lt;/td>
				&lt;/tr>
			&lt;/table>
		&lt;/td>
		&lt;td style= "background-color: #EAF2D3;">
		&lt;table id = 'inner'>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt14'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt15'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt16'
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt24'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt25'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt26'
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt34'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt35'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt36'
						>
					&lt;/td>
				&lt;/tr>
			&lt;/table>
		&lt;/td>
		&lt;td>
		&lt;table id = 'inner'>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt17'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt18'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt19'
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt27'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt28'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt29'
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt37'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt38'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt39'
						>
					&lt;/td>
				&lt;/tr>
			&lt;/table>
		&lt;/td>
	&lt;/tr>
	&lt;tr style= "background-color: #EAF2D3;">
		&lt;td>
		&lt;table id = 'inner'>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt41'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt42'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt43'
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt51'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt52'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt53'
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt61'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt62'
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						name = 'txt63'
						>
					&lt;/td>
				&lt;/tr>
			&lt;/table>
		&lt;/td>
		&lt;td style= "background-color: #A7C942;">
		&lt;table id = 'inner'>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
			&lt;/table>
		&lt;/td>
		&lt;td>
		&lt;table id = 'inner'>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
			&lt;/table>
		&lt;/td>
		
	&lt;/tr>
		&lt;tr>
		&lt;td>
		&lt;table id = 'inner'>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
			&lt;/table>
		&lt;/td>
		&lt;td style= "background-color: #EAF2D3;">
		&lt;table id = 'inner'>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
			&lt;/table>
		&lt;/td>
		&lt;td>
		&lt;table id = 'inner'>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
				&lt;tr>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
					&lt;td>
						&lt;input
						type = text
						id = 'fitting'
						size = 1
						>
					&lt;/td>
				&lt;/tr>
			&lt;/table>
		&lt;/td>
	&lt;/tr>
&lt;/table>
	&lt;br>
&lt;center>
&lt;input type = 'button' value='Result' name='btnSub' style='font-size:1.2em' onclick = 'submitSoduku()'>
&lt;input type = 'button' value='New' name='btnNew' style='font-size:1.2em'>
&lt;/center>
&lt;form>

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
					<td width = 50% valign= "top">
						
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
			
</html>










