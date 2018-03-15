
<html>
<style>
#calculator {
	width :200px;
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
	width:53px;
	height:40px;
	padding:5px;
	
}

input:hover {
	font-size:1.2em;
	width:53px;
	height:40px;
	box-shadow: 1px 1px 3px rgba(0,1,1,0.75);
}

.tabletr > td {
	padding:5px;
}

.hidebtn1{
	position: absolute;
	visibility:visible;
	margin-top:-20px;
}

.hidebtn2{
	position: absolute;
	visibility:hidden;
	margin-top:-20px;
}
</style>
<script>

	var temp1, temp2 , result, operator, radiovalue;
	
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
	
	function CE(){
		document.inputf.txtinputandresult.value = 0;
	}
	
	function C(){
		temp1 = 0;
		temp2 = 0;
		document.getElementById("label1").innerHTML = " ";
		document.getElementById("label2").innerHTML = " ";
		document.inputf.txtinputandresult.value = 0;
	}
	
	//scientific notation
		//sin
	function sinus(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			document.inputf.txtinputandresult.value = Math.sin(temp1*(Math.PI/180));
		}else{
			document.inputf.txtinputandresult.value = Math.sin(temp1);
		}
	}	
	
		//asin
	function asinus(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			temp1 = Math.asin(temp1)*(180/Math.PI);
			document.inputf.txtinputandresult.value = temp1.toFixed(2);
		}else{
			document.inputf.txtinputandresult.value = Math.asin(temp1);
		}
	}
	
		//xqaure
	function xsquare(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = numberWithCommas(temp1*temp1) ;
	}
	
		//cos
	function cosinus(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			document.inputf.txtinputandresult.value = Math.cos(temp1*(Math.PI/180));
		}else{
			document.inputf.txtinputandresult.value = Math.cos(temp1);
		}
	}

		//acos
	function acosinus(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			temp1 = Math.acos(temp1)*(180/Math.PI);
			document.inputf.txtinputandresult.value = temp1.toFixed(2);
		}else{
			document.inputf.txtinputandresult.value = Math.acos(temp1);
		}
	}
	
		//xcube
	function xcube(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = numberWithCommas(temp1*temp1*temp1) ;
	}	
	
		//tan
	function tangent(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			document.inputf.txtinputandresult.value = Math.tan(temp1*(Math.PI/180));
		}else{
			document.inputf.txtinputandresult.value = Math.tan(temp1);
		}
	}
	
		//atan
	function atangent(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			temp1 = Math.atan(temp1)*(180/Math.PI);
			document.inputf.txtinputandresult.value = temp1.toFixed(2);
		}else{
			document.inputf.txtinputandresult.value = Math.atan(temp1);
		}
	}
	
		//x to the power of n
	function powerofn(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();
		operator = "powerofn";
	}	
	
	//Cot
	function cotangent(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			document.inputf.txtinputandresult.value = 1 / (Math.tan(temp1*(Math.PI/180)));
		}else{
			document.inputf.txtinputandresult.value = 1 /(Math.tan(temp1));
		}
	}
	
		//acot
	function acotangent(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			temp1 = (180/2) - (Math.atan(temp1)*(180/Math.PI));
			document.inputf.txtinputandresult.value = temp1.toFixed(2);
		}else{
			temp1 = (Math.PI/2) - (Math.atan(temp1));
			document.inputf.txtinputandresult.value = temp1;
		}
	}
	
	//nrootofn
	function nrootofn(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();
		operator = "nrootofn";
	}
	
		//cube root 
	function cuberoot(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.pow(temp1,1/3);
	}
	
		//logarithm
	function logarithm(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.log(temp1);
	
	}
	
		//factorial
	function factorial(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseInt(temp1);
		for(i = temp1; i>1 ;i--){
			temp1=temp1*(i-1);
		}
		document.inputf.txtinputandresult.value = numberWithCommas(temp1);
	}
	
		//sinh
	function sinush(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.sinh(temp1);
	}	
		
		//sinh
	function asinush(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.asinh(temp1);
	}
	
		//cosh
	function cosinush(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.cosh(temp1);
	}
	
		//acosh
	function acosinush(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.acosh(temp1);
	}
	
		//tangenth
	function tangenth(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.tanh(temp1);
	}	
	
		//tangenth
	function atangenth(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.atanh(temp1);
	}
	
		//exponent
	function exponent(){
		document.inputf.txtinputandresult.value = Math.E;
	}
		
		//Pi
	function numberpi(){
		document.inputf.txtinputandresult.value = Math.PI;
	}
	
	//reverse on click 2nd
	function reverse(){
		if (document.inputf.btnsecond.value == "2nd"){
			document.inputf.btnsecond.value = "1st";
			
			for(i = 0 ;i<=7;i++){
				document.getElementsByClassName("hidebtn2")[i].setAttribute("style","font-size:0.8em");
				document.getElementsByClassName("hidebtn2")[i].style.visibility = "visible";
				document.getElementsByClassName("hidebtn1")[i].style.visibility = "hidden";
			}
		
		}else{
		document.inputf.btnsecond.value = "2nd";
			for(i = 0 ;i<=7;i++){
				document.getElementsByClassName("hidebtn2")[i].style.visibility = "hidden";
				document.getElementsByClassName("hidebtn1")[i].style.visibility = "visible";
			}
		
		}
		
	}
	
	//result from equal sign
	function calculate(){
		temp2 = document.inputf.txtinputandresult.value;
		temp2 = temp2.replace(/,/g,'');
		temp2 = parseFloat(temp2);
		switch (operator){
			
			//Multi
			case "*":
				result = temp1 * temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result.toFixed(2));
				break;
			
			// division
			case "/":
				result = temp1 / temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result.toFixed(2));
				break;
				
			//addition
			case "+":
				result = temp1 + temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result.toFixed(2));
				break;
			
			//substraction
			case "-":
				result = temp1 - temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result.toFixed(2));
				break;
			
			//modulus
			case "modulus":
				result = temp1 % temp2;
				document.inputf.txtinputandresult.value = numberWithCommas(result.toFixed(2));
				break;
				
			//power of n
			case "powerofn":
				result = Math.pow(temp1,temp2);
				document.inputf.txtinputandresult.value = numberWithCommas(result.toFixed(2));
				break;
				
			//nrootofn
			case "nrootofn":
				result = Math.pow(temp1,1/temp2);
				document.inputf.txtinputandresult.value = result;
				break;
			
		}//end switch
		
		//show label1 and lable2
			document.getElementById("label1").innerHTML = "N1 :" + temp1;
			document.getElementById("label2").innerHTML = ", N2 :" + temp2;
			
	}//end function result
	
	function undotxtbox(){
		x = document.inputf.txtinputandresult.value;
		x = x.replace(/,/g,'');
		x = parseFloat(x);
		document.inputf.txtinputandresult.value = (x / 10) - (0.1*(x % 10));
	}
	
	function answer(){
		document.inputf.txtinputandresult.value = result;
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
					<b><font style="font-size:1.2em;color:green;">Math Special >> Calculator >> Scientific Calculator :</font></b><br>
					<p>
					<b>Objective :</b> To create Scientific calculator on JavaScript since PHP will mostly reload the page. 
					</p>
					
					</td>
				</tr>
				<tr>
					<td>

<center>
<table id = "calculator">
	<tr class="tabletr">
		<!-- left-->
		
		<!-- right-->
		<td colspan = 4><b style="font-size:1.3em;">Scientific Calculator</b></td>
		<td colspan = 5 style ="text-align:right;font-weight:bold;"><label id = "label1"></label><label id = "label2"></label></td>
	</tr>
	<tr tr class="tabletr">
		<!-- left-->
		
		<!-- right-->
		<td colspan = 9>
			<form name = "inputf">
				<input type = "text" name = "txtinputandresult" value = "0.00" style = "width:97.5%;text-align:center; text-align:right;" onfocus="cleantxt()">
			
		</td>	
	</tr>
	<tr tr class="tabletr">
		<!-- left sin/x2-->
		<td>
			<input type="radio" name = "btnradio" value = "Rad" onclick="radian()" style ="width:12px;height:12px;">Rad
		</td>
		<td>
			<input type="radio" name = "btnradio" value = "Deg" checked onclick="degree()" style ="width:12px;height:12px;">Deg
		</td>
		<td>
			
			<div class="hidebtn1">
				<input type="button" name = "btnsin" value = "Sin" onclick="sinus()">
			</div>
			<div class="hidebtn2">
				<input type="button" name = "btnsin" value = "Asin" onclick="asinus()">
			</div>
		</td>
		<td>
			<input type="button" name = "btnxsquare" value = "x²" style = "" onclick="xsquare()">
		</td>
		<!-- right-->
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
		<!-- left-->
		<td>
			<input type="button" name = "btnsecond" value = "2nd" onclick ="reverse()" style="background-color:red;color:white;">
		</td>
		<td><input type="button" value = "n!" onclick = "factorial()"></td>
		<td>
			<div class="hidebtn2">
				<input type="button" value = "Acos" style = "" onclick="acosinus()">
			</div>
			<div class="hidebtn1">
				<input type="button" value = "Cos" style = "" onclick="cosinus()">
			</div>
		</td>
		<td>
			<input type="button" name = "btnxcube" value = "x³" style = "" onclick="xcube()">
		</td>
		
		<!-- right-->
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
		<!-- left-->
		<td><input type="button" value = "Log" onclick ="logarithm()"></td>
		<td>
			<div class="hidebtn1">
				<input type="button" value = "Sinh" onclick ="sinush()">
			</div>
			<div class="hidebtn2">
				<input type="button" value = "Asinh" onclick ="asinush()">
			</div>
		</td>
		<td>
			<div class="hidebtn2">
				<input type="button" value = "Atan" onclick="atangent()">
			</div>
			<div class="hidebtn1">
				<input type="button" value = "Tan" onclick="tangent()">
			</div>
		</td>
		<td>
			<input type="button" name = "" value = "xⁿ" style = "" onclick="powerofn()">
		</td>
		<!-- right-->
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
		<!-- left-->
		<td><input type="button" value = "Exp" onclick ="exponent()"></td>
		<td>
			<div class ="hidebtn1">
				<input type="button" value = "Cosh" onclick ="cosinush()">
			</div>
			<div class ="hidebtn2">
				<input type="button" value = "Acosh" onclick ="acosinush()">
			</div>
		</td>
		<td>
			<div class="hidebtn1">
				<input type="button" value = "Cot" onclick="cotangent()">
			</div>
			<div class = "hidebtn2">
				<input type="button" value = "Acot" onclick="acotangent()">
			</div>
		</td>
		<td>
			<input type="button" value = "³&radic;x" onclick="cuberoot()">
		</td>
		<!-- right-->
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
		<!-- left-->
		<td><input type="button" value = "&Pi;" onclick ="numberpi()"></td>
		<td>
			<div class="hidebtn1">
				<input type="button" value = "Tanh" onclick ="tangenth()">
			</div>
			<div class="hidebtn2">
				<input type="button" value = "Atanh" onclick ="atangenth()">
			</div>
		</td>
		<td>
			<input type="button" name = "" value = "ⁿ&radic;x" style = "" onclick="nrootofn()()">
		</td>
		<td>
			<input type="button" name = "" value = "Ans" style = "" onclick="answer()">
		</td>
		<!-- right-->
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
	var temp1, temp2 , result, operator, radiovalue;
	
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
	
	function CE(){
		document.inputf.txtinputandresult.value = 0;
	}
	
	function C(){
		temp1 = 0;
		temp2 = 0;
		document.getElementById("label1").innerHTML = " ";
		document.getElementById("label2").innerHTML = " ";
		document.inputf.txtinputandresult.value = 0;
	}
	
	<spamg>//scientific notation
		//sin</spamg>
	function sinus(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			document.inputf.txtinputandresult.value = Math.sin(temp1*(Math.PI/180));
		}else{
			document.inputf.txtinputandresult.value = Math.sin(temp1);
		}
	}	
	
		<spamg>//asin</spamg>
	function asinus(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			temp1 = Math.asin(temp1)*(180/Math.PI);
			document.inputf.txtinputandresult.value = temp1.toFixed(2);
		}else{
			document.inputf.txtinputandresult.value = Math.asin(temp1);
		}
	}
	
		<spamg>//xqaure</spamg>
	function xsquare(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = numberWithCommas(temp1*temp1) ;
	}
	
		<spamg>//cos</spamg>
	function cosinus(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			document.inputf.txtinputandresult.value = Math.cos(temp1*(Math.PI/180));
		}else{
			document.inputf.txtinputandresult.value = Math.cos(temp1);
		}
	}

		<spamg>//acos</spamg>
	function acosinus(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			temp1 = Math.acos(temp1)*(180/Math.PI);
			document.inputf.txtinputandresult.value = temp1.toFixed(2);
		}else{
			document.inputf.txtinputandresult.value = Math.acos(temp1);
		}
	}
	
		<spamg>//xcube</spamg>
	function xcube(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = numberWithCommas(temp1*temp1*temp1) ;
	}	
	
		//tan
	function tangent(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			document.inputf.txtinputandresult.value = Math.tan(temp1*(Math.PI/180));
		}else{
			document.inputf.txtinputandresult.value = Math.tan(temp1);
		}
	}
	
		<spamg>//atan</spamg>
	function atangent(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			temp1 = Math.atan(temp1)*(180/Math.PI);
			document.inputf.txtinputandresult.value = temp1.toFixed(2);
		}else{
			document.inputf.txtinputandresult.value = Math.atan(temp1);
		}
	}
	
		<spamg>//x to the power of n</spamg>
	function powerofn(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();
		operator = "powerofn";
	}	
	
		<spamg>//Cot</spamg>
	function cotangent(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			document.inputf.txtinputandresult.value = 1 / (Math.tan(temp1*(Math.PI/180)));
		}else{
			document.inputf.txtinputandresult.value = 1 /(Math.tan(temp1));
		}
	}
	
		<spamg>//acot</spamg>
	function acotangent(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		radiovalue = document.inputf.btnradio.value;
		if (radiovalue == "Deg"){
			temp1 = (180/2) - (Math.atan(temp1)*(180/Math.PI));
			document.inputf.txtinputandresult.value = temp1.toFixed(2);
		}else{
			temp1 = (Math.PI/2) - (Math.atan(temp1));
			document.inputf.txtinputandresult.value = temp1;
		}
	}
	
	<spamg>//nrootofn</spamg>
	function nrootofn(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.focus();
		operator = "nrootofn";
	}
	
		<spamg>//cube root </spamg>
	function cuberoot(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.cbrt(temp1);
	}
	
		<spamg>//logarithm</spamg>
	function logarithm(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.log(temp1);
	
	}
	
		<spamg>//factorial</spamg>
	function factorial(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseInt(temp1);
		for(i = temp1; i>1 ;i--){
			temp1=temp1*(i-1);
		}
		document.inputf.txtinputandresult.value = numberWithCommas(temp1);
	}
	
		<spamg>//sinh</spamg>
	function sinush(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.sinh(temp1);
	}	
		
		<spamg>//sinh</spamg>
	function asinush(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.asinh(temp1);
	}
	
		<spamg>//cosh</spamg>
	function cosinush(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.cosh(temp1);
	}
	
		<spamg>//acosh</spamg>
	function acosinush(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.acosh(temp1);
	}
	
		<spamg>//tangenth</spamg>
	function tangenth(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.tanh(temp1);
	}	
	
		<spamg>//tangenth</spamg>
	function atangenth(){
		temp1 = document.inputf.txtinputandresult.value;
		temp1 = temp1.replace(/,/g,'');
		temp1 = parseFloat(temp1);
		document.inputf.txtinputandresult.value = Math.atanh(temp1);
	}
	
		<spamg>//exponent</spamg>
	function exponent(){
		document.inputf.txtinputandresult.value = Math.E;
	}
		
		<spamg>//Pi</spamg>
	function numberpi(){
		document.inputf.txtinputandresult.value = Math.PI;
	}
	
	<spamg>//reverse on click 2nd</spamg>
	function reverse(){
		if (document.inputf.btnsecond.value == "2nd"){
			document.inputf.btnsecond.value = "1st";
			
			for(i = 0 ;i&lt;=7;i++){
				document.getElementsByClassName("hidebtn2")[i].
				setAttribute("style","font-size:0.8em");
				document.getElementsByClassName("hidebtn2")[i].style.visibility = "visible";
				document.getElementsByClassName("hidebtn1")[i].style.visibility = "hidden";
			}
		
		}else{
		document.inputf.btnsecond.value = "2nd";
			for(i = 0 ;i&lt;=7;i++){
				document.getElementsByClassName("hidebtn2")[i].style.visibility = "hidden";
				document.getElementsByClassName("hidebtn1")[i].style.visibility = "visible";
			}
		
		}
		
	}
	
	<spamg>//result from equal sign</spamg>
	function calculate(){
		temp2 = document.inputf.txtinputandresult.value;
		temp2 = temp2.replace(/,/g,'');
		temp2 = parseFloat(temp2);
		switch (operator){
			
			<spamg>//Multi</spamg>
			case "*":
				result = temp1 * temp2;
				document.inputf.txtinputandresult.value = numberWithCommas
				(result.toFixed(2));
				break;
			
			<spamg>// division</spamg>
			case "/":
				result = temp1 / temp2;
				document.inputf.txtinputandresult.value = numberWithCommas
				(result.toFixed(2));
				break;
				
			<spamg>//addition</spamg>
			case "+":
				result = temp1 + temp2;
				document.inputf.txtinputandresult.value = numberWithCommas
				(result.toFixed(2));
				break;
			
			<spamg>//substraction</spamg>
			case "-":
				result = temp1 - temp2;
				document.inputf.txtinputandresult.value = numberWithCommas
				(result.toFixed(2));
				break;
			
			<spamg>//modulus</spamg>
			case "modulus":
				result = temp1 % temp2;
				document.inputf.txtinputandresult.value = numberWithCommas
				(result.toFixed(2));
				break;
				
			<spamg>//power of n</spamg>
			case "powerofn":
				result = Math.pow(temp1,temp2);
				document.inputf.txtinputandresult.value = numberWithCommas
				(result.toFixed(2));
				break;
				
			<spamg>//nrootofn</spamg>
			case "nrootofn":
				result = Math.pow(temp1,1/temp2);
				document.inputf.txtinputandresult.value = result;
				break;
			
		}<spamg>//end switch
		
		//show label1 and lable2</spamg>
			document.getElementById("label1").innerHTML = "N1 :" + temp1;
			document.getElementById("label2").innerHTML = ", N2 :" + temp2;
			
	}<spamg>//end function result</spamg>
	
	function undotxtbox(){
		x = document.inputf.txtinputandresult.value;
		x = x.replace(/,/g,'');
		x = parseFloat(x);
		document.inputf.txtinputandresult.value = (x / 10) - (0.1*(x % 10));
	}
	
	function answer(){
		document.inputf.txtinputandresult.value = result;
	}	
<spamb>&lt;script></spamb> 
&lt;center>
&lt;table id = "calculator">
	&lt;tr class="tabletr">
		<spamg>&lt;!-- left-->
		
		&lt;!-- right--></spamg>
		&lt;td colspan = 4>&lt;b style="font-size:1.3em;">Scientific Calculator&lt;/b>&lt;/td>
		&lt;td colspan = 5 style ="text-align:right;font-weight:bold;">
		&lt;label id = "label1">&lt;/label>&lt;label id = "label2">&lt;/label>&lt;/td>
	&lt;/tr>
	&lt;tr tr class="tabletr">
		<spamg>&lt;!-- left--></spamg>
		
		&lt;!-- right-->
		&lt;td colspan = 9>
			&lt;form name = "inputf">
				&lt;input type = "text" name = "txtinputandresult" value = "0.00" 
				style = "width:97.5%;text-align:center; text-align:right;" onfocus="cleantxt()">
			
		&lt;/td>	
	&lt;/tr>
	&lt;tr tr class="tabletr">
		<spamg>&lt;!-- left sin/x2--></spamg>
		&lt;td>
			&lt;input type="radio" name = "btnradio" value = "Rad" onclick="radian()" 
			style ="width:12px;height:12px;">Rad
		&lt;/td>
		&lt;td>
			&lt;input type="radio" name = "btnradio" value = "Deg" checked
			onclick="degree()" style ="width:12px;height:12px;">Deg
		&lt;/td>
		&lt;td>
			
			&lt;div class="hidebtn1">
				&lt;input type="button" name = "btnsin" value = "Sin" onclick="sinus()">
			&lt;/div>
			&lt;div class="hidebtn2">
				&lt;input type="button" name = "btnsin" value = "Asin" onclick="asinus()">
			&lt;/div>
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnxsquare" value = "x²" style = "" 
			onclick="xsquare()">
		&lt;/td>
		<spamg>&lt;!-- right--></spamg>
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
		<spamg>&lt;!-- left--></spamg>
		&lt;td>
			&lt;input type="button" name = "btnsecond" value = "2nd" onclick ="reverse()" 
			style="background-color:red;color:white;">
		&lt;/td>
		&lt;td>&lt;input type="button" value = "n!" onclick = "factorial()">&lt;/td>
		&lt;td>
			&lt;div class="hidebtn2">
				&lt;input type="button" value = "Acos" style = "" onclick="acosinus()">
			&lt;/div>
			&lt;div class="hidebtn1">
				&lt;input type="button" value = "Cos" style = "" onclick="cosinus()">
			&lt;/div>
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnxcube" value = "x³" style = "" onclick="xcube()">
		&lt;/td>
		
		<spamg>&lt;!-- right--></spamg>
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
		<spamg>&lt;!-- left--></spamg>
		&lt;td>&lt;input type="button" value = "Log" onclick ="logarithm()">&lt;/td>
		&lt;td>
			&lt;div class="hidebtn1">
				&lt;input type="button" value = "Sinh" onclick ="sinush()">
			&lt;/div>
			&lt;div class="hidebtn2">
				&lt;input type="button" value = "Asinh" onclick ="asinush()">
			&lt;/div>
		&lt;/td>
		&lt;td>
			&lt;div class="hidebtn2">
				&lt;input type="button" value = "Atan" onclick="atangent()">
			&lt;/div>
			&lt;div class="hidebtn1">
				&lt;input type="button" value = "Tan" onclick="tangent()">
			&lt;/div>
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "" value = "xⁿ" style = "" onclick="powerofn()">
		&lt;/td>
		<spamg>&lt;!-- right--></spamg>
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
		<spamg>&lt;!-- left--></spamg>
		&lt;td>&lt;input type="button" value = "Exp" onclick ="exponent()">&lt;/td>
		&lt;td>
			&lt;div class ="hidebtn1">
				&lt;input type="button" value = "Cosh" onclick ="cosinush()">
			&lt;/div>
			&lt;div class ="hidebtn2">
				&lt;input type="button" value = "Acosh" onclick ="acosinush()">
			&lt;/div>
		&lt;/td>
		&lt;td>
			&lt;div class="hidebtn1">
				&lt;input type="button" value = "Cot" onclick="cotangent()">
			&lt;/div>
			&lt;div class = "hidebtn2">
				&lt;input type="button" value = "Acot" onclick="acotangent()">
			&lt;/div>
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "" value = "³&radic;x" style = "" onclick="cuberoot()">
		&lt;/td>
		<spamg>&lt;!-- right--></spamg>
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
			&lt;input type="button" name = "btnequal" value = "=" 
			style = "height:88px;background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
			" onclick = "calculate()">
		&lt;/td>
	&lt;/tr>
	&lt;tr tr class="tabletr">
		<spamg>&lt;!-- left--></spamg>
		&lt;td>&lt;input type="button" value = "&Pi;" onclick ="numberpi()">&lt;/td>
		&lt;td>
			&lt;div class="hidebtn1">
				&lt;input type="button" value = "Tanh" onclick ="tangenth()">
			&lt;/div>
			&lt;div class="hidebtn2">
				&lt;input type="button" value = "Atanh" onclick ="atangenth()">
			&lt;/div>
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "" value = "ⁿ&radic;x" style = "" 
			onclick="nrootofn()()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "" value = "Ans" style = "" onclick="answer()">
		&lt;/td>
		<spamg>&lt;!-- right--></spamg>
		&lt;td colspan = "2">
			&lt;input type="button" name = "btn0" value = "0" style = "width:102px;" 
			onclick="inputnum()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnfullstop" value = "." 
			onclick = "inputnumfullstop()">
		&lt;/td>
		&lt;td>
			&lt;input type="button" name = "btnadd" value = "+"
			onclick = "addition()">
		&lt;/td>
		
	&lt;/tr>
	&lt;/form>
&lt;/table>&lt;br>
&lt;input type ="button" value = "Refresh" onclick="location.reload();" 
style ="width:100px">
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










