
<html>
<style>
#calculator {
	margin:5px;
	border:1px solid black;
	box-shadow: 3px 3px 6px rgba(0,1,1,0.75);
	background-color:gray;
}
#calculator >tr{
	padding-left:10px;
}
input {
	font-size:1.2em;
	width:45px;
	height:50px;
	
}

input:hover {
	font-size:1.2em;
	width:45px;
	height:50px;
	box-shadow: 1px 1px 3px rgba(0,1,1,0.75);
}

.tabletr > td {
	padding:5px;
}
</style>
<script>

	var temp1, temp2 , result, operator;
	
	//Number format
	function numberWithCommas(x) {
		y = x.toString();
		if (y.length >= 3 ){
			return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}else{
			return x;
		}
	}
	
	//clear txtbox
	function cleantxt(){
		document.inputf.txtinputandresult.value = "";
	}
	
	//input number
		//0
	function inputnum(){
		x = document.inputf.txtinputandresult.value;
		if (x == "" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 0;
		}else{
			x = x.toString();
			y = document.inputf.btn0.value;
			document.inputf.txtinputandresult.value = x + y;
		}
		
	}
		//1
	function inputnum1(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 1;
		}else{
			x = x.toString();
			y = document.inputf.btn1.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		//2
	function inputnum2(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 2;
		}else{
			x = x.toString();
			y = document.inputf.btn2.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		//3
	function inputnum3(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 3;
		}else{
			x = x.toString();
			y = document.inputf.btn3.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		//4
	function inputnum4(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 4;
		}else{
			x = x.toString();
			y = document.inputf.btn4.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		//5
	function inputnum5(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 5;
		}else{
			x = x.toString();
			y = document.inputf.btn5.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		//6
	function inputnum6(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 6;
		}else{
			x = x.toString();
			y = document.inputf.btn6.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
	//7
	function inputnum7(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 7;
		}else{
			x = x.toString();
			y = document.inputf.btn7.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		//8
	function inputnum8(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 8;
		}else{
			x = x.toString();
			y = document.inputf.btn8.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		//9
	function inputnum9(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 9;
		}else{
			x = x.toString();
			y = document.inputf.btn9.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		//fullstop
	function inputnumfullstop(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = ".";
		}else{
			x = x.toString();
			y = document.inputf.btnfullstop.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
	
	function CE(){
		document.inputf.txtinputandresult.value = 0;
	}
	
	function C(){
		temp1 = 0;
		temp2 = 0;
		document.inputf.txtinputandresult.value = 0;
	}
	
	function multiplication(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();		
		operator = "*";
	}
	
	function division(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();	
		operator = "/";
		
	}
	
	function addition(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();
		operator = "+";
	}
	
	function substraction(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();
		operator = "-";
	}
	
	function radical(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.sqrt(temp1);
	}
	
	function modulus(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();
		operator = "modulus";
	}
	
	function ratio(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		temp1 = 1/temp1;
		document.inputf.txtinputandresult.value = numberWithCommas(temp1.toFixed(2));
	}
	
	function calculate(){
		temp2 = document.inputf.txtinputandresult.value;
		temp2 = temp2.replace(/,/g,'');
		temp2 = parseFloat(temp2);
		switch (operator){
			
			//Multi
			case "*":
				result = temp1 * temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result);
				break;
			
			// division
			case "/":
				result = temp1 / temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result.toFixed(2));
				break;
				
			//addition
			case "+":
				result = temp1 + temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result);
				break;
			
			//substraction
			case "-":
				result = temp1 - temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result);
				break;
			
			//modulus
			case "modulus":
				result = temp1 % temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result.toFixed(2));
				break;
		}//end switch
		
	}//end funtion result
	
	function undotxtbox(){
		x = document.inputf.txtinputandresult.value;
		x = x.replace(/,/g,'');
		x = parseFloat(x);
		document.inputf.txtinputandresult.value = (x / 10) - (0.1*(x % 10));
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
					<b><font style="font-size:1.2em;color:green;">Math Special >> Calculator >> Basic Calculator :</font></b><br>
					<p>
					<b>Objective :</b> To create basic calculator on JavaScript since PHP will mostly reload the page. 
					</p>
					
					</td>
				</tr>
				<tr>
					<td>

<center>
<table id = "calculator">
	<tr class="tabletr">
		<td colspan = 5><b>Basic Calculator</b></td>
	</tr>
	<tr tr class="tabletr">
		<td colspan = 5>
			<form name = "inputf">
				<input type = "text" name = "txtinputandresult" value = "0.00" style = "width:275px;text-align:center; text-align:right;" onfocus="cleantxt()">
			
		</td>	
	</tr>
	<tr tr class="tabletr">
		<td colspan=2 >
			<input type="button" name = "btnback" value = "&larr;"</td style = "width:105px;text-align:center;" onclick = "undotxtbox()">
		</td>
		<td>
			<input type="button" name = "btnradical" value = "CE" onclick = "CE()"></td>
		</td>
		<td>
			<input type="button" name = "btnradical" value = "C" onclick = "C()"></td>
		</td>
		<td>
			<input type="button" name = "btnradical" value = "&radic;" onclick = "radical()"></td>
		</td>
	</tr>
	<tr tr class="tabletr">
		<td>
			<input type="button" name = "btn7" value = "7" onclick = "inputnum7()">
		</td>
		<td>
			<input type="button" name = "btn8" value = "8" onclick = "inputnum8()">
		</td>
		<td>
			<input type="button" name = "btn9" value = "9" onclick = "inputnum9()">
		</td>
		<td>
			<input type="button" name = "btndivide" value = "/" onclick = "division()">
		</td>
		<td>
			<input type="button" name = "btnmodulus" value = "%" onclick = "modulus()">
		</td>
	</tr>
	<tr tr class="tabletr">
		<td>
			<input type="button" name = "btn4" value = "4" onclick = "inputnum4()">
		</td>
		<td>
			<input type="button" name = "btn5" value = "5" onclick = "inputnum5()">
		</td>
		<td>
			<input type="button" name = "btn6" value = "6" onclick = "inputnum6()">
		</td>
		<td>
			<input type="button" name = "btnmultiply" value = "*" onclick = "multiplication()">
		</td>
		<td>
			<input type="button" name = "btnratio" value = "1/x" onclick = "ratio()">
		</td>
	</tr>
	<tr tr class="tabletr">
		<td>
			<input type="button" name = "btn1" value = "1" onclick = "inputnum1()">
		</td>
		<td>
			<input type="button" name = "btn2" value = "2" onclick = "inputnum2()">
		</td>
		<td>
			<input type="button" name = "btn3" value = "3" onclick = "inputnum3()">
		</td>
		<td>
			<input type="button" name = "btnsub" value = "-" onclick = "substraction()">
		</td>
		<td rowspan=2>
			<input type="button" name = "btnequal" value = "=" style = "height:88px;background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed); " onclick = "calculate()">
		</td>
	</tr>
	<tr tr class="tabletr">
		
		<td colspan = "2">
			<input type="button" name = "btn0" value = "0" style = "width:102px;" onclick="inputnum()">
		</td>
		<td>
			<input type="button" name = "btnfullstop" value = "." onclick = "inputnumfullstop()">
		</td>
		<td>
			<input type="button" name = "btnadd" value = "+" onclick = "addition()">
		</td>
		
	</tr>
	</form>
</table><br>
<input type ="button" value = "Refresh" onclick="location.reload();" style ="width:100px">
</center>
<hr>

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
<spamb>&lt;script</spamb> 
	var temp1, temp2 , result, operator;
	
	<spamg>//Number format</spamg>
	function numberWithCommas(x) {
		y = x.toString();
		if (y.length >= 3 ){
			return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}else{
			return x;
		}
	}
	
	<spamg>//clear txtbox</spamg>
	function cleantxt(){
		document.inputf.txtinputandresult.value = "";
	}
	
	<spamg>//input number
		//0</spamg>
	function inputnum(){
		x = document.inputf.txtinputandresult.value;
		if (x == "" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 0;
		}else{
			x = x.toString();
			y = document.inputf.btn0.value;
			document.inputf.txtinputandresult.value = x + y;
		}
		
	}
		<spamg>//1</spamg>
	function inputnum1(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 1;
		}else{
			x = x.toString();
			y = document.inputf.btn1.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		<spamg>//2</spamg>
	function inputnum2(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 2;
		}else{
			x = x.toString();
			y = document.inputf.btn2.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		<spamg>//3</spamg>
	function inputnum3(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 3;
		}else{
			x = x.toString();
			y = document.inputf.btn3.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		<spamg>//4</spamg>
	function inputnum4(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 4;
		}else{
			x = x.toString();
			y = document.inputf.btn4.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		<spamg>//5</spamg>
	function inputnum5(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 5;
		}else{
			x = x.toString();
			y = document.inputf.btn5.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		<spamg>//6</spamg>
	function inputnum6(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 6;
		}else{
			x = x.toString();
			y = document.inputf.btn6.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
	<spamg>//7</spamg>
	function inputnum7(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 7;
		}else{
			x = x.toString();
			y = document.inputf.btn7.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		<spamg>//8</spamg>
	function inputnum8(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 8;
		}else{
			x = x.toString();
			y = document.inputf.btn8.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
		<spamg>//9</spamg>
	function inputnum9(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = 9;
		}else{
			x = x.toString();
			y = document.inputf.btn9.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
	
	function CE(){
		document.inputf.txtinputandresult.value = 0;
	}
	
	function C(){
		temp1 = 0;
		temp2 = 0;
		document.inputf.txtinputandresult.value = 0;
	}
	
		<spamg>//fullstop</spamg>
	function inputnumfullstop(){
		x = document.inputf.txtinputandresult.value;
		if (x =="" || x == "0" || x == "0.00"){
			document.inputf.txtinputandresult.value = ".";
		}else{
			x = x.toString();
			y = document.inputf.btnfullstop.value;
			document.inputf.txtinputandresult.value = x + y;
		}
	}
	
	function multiplication(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();		
		operator = "*";
	}
	
	function division(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();	
		operator = "/";
		
	}
	
	function addition(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();
		operator = "+";
	}
	
	function substraction(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();
		operator = "-";
	}
	
	function radical(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.sqrt(temp1);
	}
	
	function modulus(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();
		operator = "modulus";
	}
	
	function ratio(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		temp1 = 1/temp1;
		document.inputf.txtinputandresult.value = numberWithCommas(temp1.toFixed(2));
	}
	
	function calculate(){
		temp2 = document.inputf.txtinputandresult.value;
		temp2 = temp2.replace(/,/g,'');
		temp2 = parseFloat(temp2);
		switch (operator){
			
			<spamg>//Multi</spamg>
			case "*":
				result = temp1 * temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result);
				break;
			
			<spamg>// division</spamg>
			case "/":
				result = temp1 / temp2;
				document.inputf.txtinputandresult.
				value = numberWithCommas(result.toFixed(2));
				break;
				
			<spamg>//addition</spamg>
			case "+":
				result = temp1 + temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result);
				break;
			
			<spamg>//substraction</spamg>
			case "-":
				result = temp1 - temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result);
				break;
			
			<spamg>//modulus</spamg>
			case "modulus":
				result = temp1 % temp2;
				document.inputf.txtinputandresult.value = 
				numberWithCommas(result.toFixed(2));
				break;
				
		}<spamg>//end switch</spamg>
		
	}<spamg>//end funtion result</spamg>
	
	function undotxtbox(){
		x = document.inputf.txtinputandresult.value;
		x = x.replace(/,/g,'');
		x = parseFloat(x);
		document.inputf.txtinputandresult.value = (x / 10) - (0.1*(x % 10));
	}

<spamb>&lt;script></spamb> 

<spamr>//Table</spamr>

&lt;center>
&lt;table id = "calculator">
	&lt;tr class="tabletr">
		&lt;td colspan = 5>&lt;b>Basic Calculator&lt;/b>&lt;/td>
	&lt;/tr>
	&lt;tr tr class="tabletr">
		&lt;td colspan = 5>
			&lt;form name = "inputf">
				&lt;input type = "text" name = "txtinputandresult" value = "0.00" 
				style = "width:275px;text-align:center; text-align:right;" onfocus="cleantxt()">
			
		&lt;/td>	
	&lt;/tr>
	&lt;tr tr class="tabletr">
		&lt;td colspan=2 >
			&lt;input type="button" name = "btnback" value = "&larr;"&lt;/td 
			style = "width:105px;text-align:center;" onclick = "undotxtbox()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnradical" value = "CE" onclick = "CE()">&lt;/td>
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnradical" value = "C" onclick = "C()">&lt;/td>
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnradical" value = "&radic;" 
			onclick = "radical()">&lt;/td>
		&lt;/td>
	&lt;/tr>
	&lt;tr tr class="tabletr">
		&lt;td>
			&lt;input type="button" name = "btn7" value = "7" onclick = "inputnum7()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btn8" value = "8" onclick = "inputnum8()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btn9" value = "9" onclick = "inputnum9()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btndivide" value = "/" onclick = "division()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnmodulus" value = "%" onclick = "modulus()">
		&lt;/td>
	&lt;/tr>
	&lt;tr tr class="tabletr">
		&lt;td>
			&lt;input type="button" name = "btn4" value = "4" onclick = "inputnum4()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btn5" value = "5" onclick = "inputnum5()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btn6" value = "6" onclick = "inputnum6()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnmultiply" value = "*" onclick = "multiplication()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnratio" value = "1/x" onclick = "ratio()">
		&lt;/td>
	&lt;/tr>
	&lt;tr tr class="tabletr">
		&lt;td>
			&lt;input type="button" name = "btn1" value = "1" onclick = "inputnum1()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btn2" value = "2" onclick = "inputnum2()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btn3" value = "3" onclick = "inputnum3()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnsub" value = "-" onclick = "substraction()">
		&lt;/td>
		&lt;td rowspan=2>
			&lt;input type="button" name = "btnequal" value = "=" style = "height:88px;
			background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed); " 
			onclick = "calculate()">
		&lt;/td>
	&lt;/tr>
	&lt;tr tr class="tabletr">
		
		&lt;td colspan = "2">
			&lt;input type="button" name = "btn0" value = "0" style = "width:102px;" 
			onclick="inputnum()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnfullstop" value = "." 
			onclick = "inputnumfullstop()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnadd" value = "+" onclick = "addition()">
		&lt;/td>
		
	&lt;/tr>
	&lt;/form>
&lt;/table>&lt;br>
&lt;input type ="button" value = "Refresh" onclick="location.reload();" style ="width:100px">
&lt;/center>
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

<script>

	//focus on txtinputandresult
	document.inputf.txtinputandresult.focus();
</script>
</html>










