
<html>

		
		<table width = 100% border = 0 cellpadding = 5 cellspacing = 0 >
				<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 5px;
			padding-bot: 5px;
			background-color:#EAF2D3;
			color: black;border: 0px solid #98bf21;tom: 4px;">
					<td colspan = 2>
					<b><font style="font-size:1.2em;color:green;">Math Games >> Cryptogram >> Encrypted Text :</font></b><br>
					<p>
					<b>Objective :</b> Encrypted Text with PHP.
					</p>
					<p>
					<b>Encrypted Text : </b>
<?php
 for($i=1;$i<=70;$i++){
	 ${'txtbox'.$i} = '';
 }
$txtbox1='i';
$txtbox2='n';
$txtbox3='t';
$txtbox4='h';
$txtbox5='e';
$txtbox6='e';
$txtbox7='y';
$txtbox8='e';
$txtbox9='s';
$txtbox10='o';
$txtbox11='f';
$txtbox12='s';
$txtbox13='t';
$txtbox14='r';
$txtbox15='a';
$txtbox16='n';
$txtbox17='g';
$txtbox18='e';
$txtbox19='r';
$txtbox20='s';
$txtbox21='i';
$txtbox22='t';
$txtbox23='m';
$txtbox24='i';
$txtbox25='g';
$txtbox26='h';
$txtbox27='t';
$txtbox28='h';
$txtbox29='a';
$txtbox30='s';
$txtbox31='n';
$txtbox32='e';
$txtbox33='i';
$txtbox34='t';
$txtbox35='h';
$txtbox36='e';
$txtbox37='r';
$txtbox38='v';
$txtbox39='a';
$txtbox40='l';
$txtbox41='u';
$txtbox42='e';
$txtbox43='n';
$txtbox44='o';
$txtbox45='r';
$txtbox46='m';
$txtbox47='e';
$txtbox48='a';
$txtbox49='n';
$txtbox50='i';
$txtbox51='n';
$txtbox52='g';
$txtbox53='t';
$txtbox54='o';
$txtbox55='m';
$txtbox56='e';
$txtbox57='i';
$txtbox58='t';
$txtbox59='i';
$txtbox60='s';
$txtbox61='e';
$txtbox62='v';
$txtbox63='e';
$txtbox64='r';
$txtbox65='y';
$txtbox66='t';
$txtbox67='h';
$txtbox68='i';
$txtbox69='n';
$txtbox70='g';

//encrypted the original message to show first
	for($i=1;$i<=70;$i++){
		switch (${'txtbox'.$i}){
			
			//1
			case 'a':
			 ${'txtbox'.$i} = 'z';
			break;
			
			//2
			case 'b':
			 ${'txtbox'.$i} = 'y';
			break;
			
			//3
			case 'c':
			 ${'txtbox'.$i} = 'x';
			break;
			
			//4
			case 'd':
			 ${'txtbox'.$i} = 'w';
			break;
			
			//5
			case 'e':
			 ${'txtbox'.$i} = 'v';
			break;
			
			//6
			case 'f':
			 ${'txtbox'.$i} = 'u';
			break;
			
			//7
			case 'g':
			 ${'txtbox'.$i} = 't';
			break;
			
			//4
			case 'h':
			 ${'txtbox'.$i} = 's';
			break;
			//8
			case 'i':
			 ${'txtbox'.$i} = 'r';
			break;
			
			//9
			case 'j':
			 ${'txtbox'.$i} = 'q';
			break;
			
			//4
			case 'k':
			 ${'txtbox'.$i} = 'p';
			break;
			
			//10
			case 'l':
			 ${'txtbox'.$i} = 'o';
			break;
			
			//11
			case 'm':
			 ${'txtbox'.$i} = 'n';
			break;
			
			//12
			case 'n':
			 ${'txtbox'.$i} = 'm';
			break;
			
			//13
			case 'o':
			 ${'txtbox'.$i} = 'l';
			break;
			
			//14
			case 'p':
			 ${'txtbox'.$i} = 'k';
			break;
			
			//15
			case 'q':
			 ${'txtbox'.$i} = 'j';
			break;
			
			//16
			case 'r':
			 ${'txtbox'.$i} = 'i';
			break;
			
			//17
			case 's':
			 ${'txtbox'.$i} = 'h';
			break;
			
			//18
			case 't':
			 ${'txtbox'.$i} = 'g';
			break;
			
			//19
			case 'u':
			 ${'txtbox'.$i} = 'f';
			break;
			
			//20
			case 'v':
			 ${'txtbox'.$i} = 'e';
			break;
			
			//21
			case 'w':
			 ${'txtbox'.$i} = 'd';
			break;
			
			//22
			case 'x':
			 ${'txtbox'.$i} = 'c';
			break;
			
			//23
			case 'y':
			 ${'txtbox'.$i} = 'b';
			break;
			
			//24
			case 'z':
			 ${'txtbox'.$i} = 'a';
			break;
			
			
			default:
			 ${'txtbox'.$i} = "Noo!";
			break;
		}
	}
 
 //decrypt the code back to original
 if (isset($_REQUEST['btngenerate'])){
	 for($i=1;$i<=70;$i++){
		switch (${'txtbox'.$i}){
			
			//1
			case 'a':
			 ${'txtbox'.$i} = 'z';
			break;
			
			//2
			case 'b':
			 ${'txtbox'.$i} = 'y';
			break;
			
			//3
			case 'c':
			 ${'txtbox'.$i} = 'x';
			break;
			
			//4
			case 'd':
			 ${'txtbox'.$i} = 'w';
			break;
			
			//5
			case 'e':
			 ${'txtbox'.$i} = 'v';
			break;
			
			//6
			case 'f':
			 ${'txtbox'.$i} = 'u';
			break;
			
			//7
			case 'g':
			 ${'txtbox'.$i} = 't';
			break;
			
			//4
			case 'h':
			 ${'txtbox'.$i} = 's';
			break;
			//8
			case 'i':
			 ${'txtbox'.$i} = 'r';
			break;
			
			//9
			case 'j':
			 ${'txtbox'.$i} = 'q';
			break;
			
			//4
			case 'k':
			 ${'txtbox'.$i} = 'p';
			break;
			
			//10
			case 'l':
			 ${'txtbox'.$i} = 'o';
			break;
			
			//11
			case 'm':
			 ${'txtbox'.$i} = 'n';
			break;
			
			//12
			case 'n':
			 ${'txtbox'.$i} = 'm';
			break;
			
			//13
			case 'o':
			 ${'txtbox'.$i} = 'l';
			break;
			
			//14
			case 'p':
			 ${'txtbox'.$i} = 'k';
			break;
			
			//15
			case 'q':
			 ${'txtbox'.$i} = 'j';
			break;
			
			//16
			case 'r':
			 ${'txtbox'.$i} = 'i';
			break;
			
			//17
			case 's':
			 ${'txtbox'.$i} = 'h';
			break;
			
			//18
			case 't':
			 ${'txtbox'.$i} = 'g';
			break;
			
			//19
			case 'u':
			 ${'txtbox'.$i} = 'f';
			break;
			
			//20
			case 'v':
			 ${'txtbox'.$i} = 'e';
			break;
			
			//21
			case 'w':
			 ${'txtbox'.$i} = 'd';
			break;
			
			//22
			case 'x':
			 ${'txtbox'.$i} = 'c';
			break;
			
			//23
			case 'y':
			 ${'txtbox'.$i} = 'b';
			break;
			
			//24
			case 'z':
			 ${'txtbox'.$i} = 'a';
			break;
			
			
			default:
			${'txtbox'.$i} = "Noo!";
			break;
			
		}
	}
 }
?>					

<center>
<table border = 0
style="text-align:center;padding:0;margin:0;">
	<tr>
		<td>r</td>
		<td>m</td>
		<td></td>
		<td>g</td>
		<td>s</td>
		<td>v</td>
		<td></td>
		<td>v</td>
		<td>b</td>
		<td>v</td>
		<td>h</td>
		<td></td>
		<td>l</td>
		<td>u</td>
		<td></td>
		<td>h</td>
		<td>g</td>
		<td>i</td>
		<td>z</td>
		<td>m</td>
		<td>t</td>
		<td>v</td>
		<td>i</td>
		<td>h</td>
	</tr>
	
	<tr>
		<td>,</td>
		<td>r</td>
		<td>g</td>
		<td></td>
		<td>n</td>
		<td>r</td>
		<td>t</td>
		<td>s</td>
		<td>g</td>
		<td></td>
		<td>s</td>
		<td>z</td>
		<td>h</td>
		<td></td>
		<td>m</td>
		<td>v</td>
		<td>r</td>
		<td>g</td>
		<td>s</td>
		<td>v</td>
		<td>i</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<td>e</td>
		<td>z</td>
		<td>o</td>
		<td>f</td>
		<td>v</td>
		<td></td>
		<td>m</td>
		<td>l</td>
		<td>i</td>
		<td></td>
		<td>n</td>
		<td>v</td>
		<td>z</td>
		<td>m</td>
		<td>r</td>
		<td>m</td>
		<td>t</td>
		<td>.</td>
		<td></td>
		<td>g</td>
		<td>l</td>
		<td></td>
		<td>n</td>
		<td>v</td>
	</tr>
	
	<tr>
		<td>!</td>
		<td></td>
		<td>r</td>
		<td>g</td>
		<td></td>
		<td>r</td>
		<td>h</td>
		<td></td>
		<td>v</td>
		<td>e</td>
		<td>v</td>
		<td>i</td>
		<td>b</td>
		<td>g</td>
		<td>s</td>
		<td>r</td>
		<td>m</td>
		<td>t</td>
		<td>.</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
<br>
<table border = 0 
style="text-align:center;padding:0;margin:0;">
	<tr>
		<td><?php echo $txtbox1;?></td>
		<td><?php echo $txtbox2;?></td>
		<td></td>
		<td><?php echo $txtbox3;?></td>
		<td><?php echo $txtbox4;?></td>
		<td><?php echo $txtbox5;?></td>
		<td></td>
		<td><?php echo $txtbox6;?></td>
		<td><?php echo $txtbox7;?></td>
		<td><?php echo $txtbox8;?></td>
		<td><?php echo $txtbox9;?></td>
		<td></td>
		<td><?php echo $txtbox10;?></td>
		<td><?php echo $txtbox11;?></td>
		<td></td>
		<td><?php echo $txtbox12;?></td>
		<td><?php echo $txtbox13;?></td>
		<td><?php echo $txtbox14;?></td>
		<td><?php echo $txtbox15;?></td>
		<td><?php echo $txtbox16;?></td>
		<td><?php echo $txtbox17;?></td>
		<td><?php echo $txtbox18;?></td>
		<td><?php echo $txtbox19;?></td>
		<td><?php echo $txtbox20;?></td>
	</tr>
	<tr>
		<td>,</td>
		<td><?php echo $txtbox21;?></td>
		<td><?php echo $txtbox22;?></td>
		<td></td>
		<td><?php echo $txtbox23;?></td>
		<td><?php echo $txtbox24;?></td>
		<td><?php echo $txtbox25;?></td>
		<td><?php echo $txtbox26;?></td>
		<td><?php echo $txtbox27;?></td>
		<td></td>
		<td><?php echo $txtbox28;?></td>
		<td><?php echo $txtbox29;?></td>
		<td><?php echo $txtbox30;?></td>
		<td></td>
		<td><?php echo $txtbox31;?></td>
		<td><?php echo $txtbox32;?></td>
		<td><?php echo $txtbox33;?></td>
		<td><?php echo $txtbox34;?></td>
		<td><?php echo $txtbox35;?></td>
		<td><?php echo $txtbox36;?></td>
		<td><?php echo $txtbox37;?></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><?php echo $txtbox38;?></td>
		<td><?php echo $txtbox39;?></td>
		<td><?php echo $txtbox40;?></td>
		<td><?php echo $txtbox41;?></td>
		<td><?php echo $txtbox42;?></td>
		<td></td>
		<td><?php echo $txtbox43;?></td>
		<td><?php echo $txtbox44;?></td>
		<td><?php echo $txtbox45;?></td>
		<td></td>
		<td><?php echo $txtbox46;?></td>
		<td><?php echo $txtbox47;?></td>
		<td><?php echo $txtbox48;?></td>
		<td><?php echo $txtbox49;?></td>
		<td><?php echo $txtbox50;?></td>
		<td><?php echo $txtbox51;?></td>
		<td><?php echo $txtbox52;?></td>
		<td>.</td>
		<td></td>
		<td><?php echo $txtbox53;?></td>
		<td><?php echo $txtbox54;?></td>
		<td></td>
		<td><?php echo $txtbox55;?></td>
		<td><?php echo $txtbox56;?></td>
	</tr>
	<tr>
		<td>!</td>
		<td></td>
		<td><?php echo $txtbox57;?></td>
		<td><?php echo $txtbox58;?></td>
		<td></td>
		<td><?php echo $txtbox59;?></td>
		<td><?php echo $txtbox60;?></td>
		<td></td>
		<td><?php echo $txtbox61;?></td>
		<td><?php echo $txtbox62;?></td>
		<td><?php echo $txtbox63;?></td>
		<td><?php echo $txtbox64;?></td>
		<td><?php echo $txtbox65;?></td>
		<td><?php echo $txtbox66;?></td>
		<td><?php echo $txtbox67;?></td>
		<td><?php echo $txtbox68;?></td>
		<td><?php echo $txtbox69;?></td>
		<td><?php echo $txtbox70;?></td>
		<td>.</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
</center>
<form method = "post">
<br>
	<center><input type="submit" value="Generate" name = "btngenerate"></center>
</form>

					
					</p>
					</td>
				</tr>
				<tr>
					<td>

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
<pre style = "font-family:'Time New Roman'; width:650px">
<spamb>&lt;html></spamb> 	
<spamb>&lt;?php</spamb>
<spamg>//loop to declare variables</spamg>
 for($i=1;$i&lt;=70;$i++){
	 ${'txtbox'.$i} = '';
 }
 
<spamg>//assign variables</spamg>
$txtbox1='i';$txtbox2='n';$txtbox3='t';$txtbox4='h';
$txtbox5='e';$txtbox6='e';$txtbox7='y';$txtbox8='e';
$txtbox9='s';$txtbox10='o';$txtbox11='f';$txtbox12='s';
$txtbox13='t';$txtbox14='r';$txtbox15='a';$txtbox16='n';
$txtbox17='g';$txtbox18='e';$txtbox19='r';$txtbox20='s';
$txtbox21='i';$txtbox22='t';$txtbox23='m';$txtbox24='i';
$txtbox25='g';$txtbox26='h';$txtbox27='t';$txtbox28='h';
$txtbox29='a';$txtbox30='s';$txtbox31='n';$txtbox32='e';
$txtbox33='i';$txtbox34='t';$txtbox35='h';$txtbox36='e';
$txtbox37='r';$txtbox38='v';$txtbox39='a';$txtbox40='l';
$txtbox41='u';$txtbox42='e';$txtbox43='n';$txtbox44='o';
$txtbox45='r';$txtbox46='m';$txtbox47='e';$txtbox48='a';
$txtbox49='n';$txtbox50='i';$txtbox51='n';$txtbox52='g';
$txtbox53='t';$txtbox54='o';$txtbox55='m';$txtbox56='e';
$txtbox57='i';$txtbox58='t';$txtbox59='i';$txtbox60='s';
$txtbox61='e';$txtbox62='v';$txtbox63='e';$txtbox64='r';
$txtbox65='y';$txtbox66='t';$txtbox67='h';$txtbox68='i';
$txtbox69='n';$txtbox70='g';

<spamg>//encrypted the original message to show first</spamg>
	for($i=1;$i&lt;=70;$i++){
		switch (${'txtbox'.$i}){
			
			<spamg>//1</spamg>
			case 'a':
			echo ${'txtbox'.$i} = 'z';
			break;
			
			<spamg>//2</spamg>
			case 'b':
			echo ${'txtbox'.$i} = 'y';
			break;
			
			<spamg>//3</spamg>
			case 'c':
			echo ${'txtbox'.$i} = 'x';
			break;
			
			<spamg>//4</spamg>
			case 'd':
			echo ${'txtbox'.$i} = 'w';
			break;
			
			//5
			case 'e':
			echo ${'txtbox'.$i} = 'v';
			break;
			
			//6
			case 'f':
			echo ${'txtbox'.$i} = 'u';
			break;
			
			//7
			case 'g':
			echo ${'txtbox'.$i} = 't';
			break;
			
			//4
			case 'h':
			echo ${'txtbox'.$i} = 's';
			break;
			//8
			case 'i':
			echo ${'txtbox'.$i} = 'r';
			break;
			
			//9
			case 'j':
			echo ${'txtbox'.$i} = 'q';
			break;
			
			//4
			case 'k':
			echo ${'txtbox'.$i} = 'p';
			break;
			
			//10
			case 'l':
			echo ${'txtbox'.$i} = 'o';
			break;
			
			//11
			case 'm':
			echo ${'txtbox'.$i} = 'n';
			break;
			
			//12
			case 'n':
			echo ${'txtbox'.$i} = 'm';
			break;
			
			//13
			case 'o':
			echo ${'txtbox'.$i} = 'l';
			break;
			
			//14
			case 'p':
			echo ${'txtbox'.$i} = 'k';
			break;
			
			//15
			case 'q':
			echo ${'txtbox'.$i} = 'j';
			break;
			
			//16
			case 'r':
			echo ${'txtbox'.$i} = 'i';
			break;
			
			//17
			case 's':
			echo ${'txtbox'.$i} = 'h';
			break;
			
			//18
			case 't':
			echo ${'txtbox'.$i} = 'g';
			break;
			
			//19
			case 'u':
			echo ${'txtbox'.$i} = 'f';
			break;
			
			//20
			case 'v':
			echo ${'txtbox'.$i} = 'e';
			break;
			
			//21
			case 'w':
			echo ${'txtbox'.$i} = 'd';
			break;
			
			//22
			case 'x':
			echo ${'txtbox'.$i} = 'c';
			break;
			
			<spamg>//23</spamg>
			case 'y':
			echo ${'txtbox'.$i} = 'b';
			break;
			
			<spamg>//24</spamg>
			case 'z':
			echo ${'txtbox'.$i} = 'a';
			break;
			
			
			default:
			echo ${'txtbox'.$i} = "Noo!";
			break;
		}
	}
 
 <spamg>//decrypt the code back to original</spamg>
 if (isset($_REQUEST['btngenerate'])){
	 for($i=1;$i&lt;=70;$i++){
		switch (${'txtbox'.$i}){
			
			<spamg>//1</spamg>
			case 'a':
			 ${'txtbox'.$i} = 'z';
			break;
			
			<spamg>//2</spamg>
			case 'b':
			 ${'txtbox'.$i} = 'y';
			break;
			
			//3
			case 'c':
			 ${'txtbox'.$i} = 'x';
			break;
			
			//4
			case 'd':
			 ${'txtbox'.$i} = 'w';
			break;
			
			//5
			case 'e':
			 ${'txtbox'.$i} = 'v';
			break;
			
			//6
			case 'f':
			 ${'txtbox'.$i} = 'u';
			break;
			
			//7
			case 'g':
			 ${'txtbox'.$i} = 't';
			break;
			
			//4
			case 'h':
			 ${'txtbox'.$i} = 's';
			break;
			//8
			case 'i':
			 ${'txtbox'.$i} = 'r';
			break;
			
			//9
			case 'j':
			 ${'txtbox'.$i} = 'q';
			break;
			
			//4
			case 'k':
			 ${'txtbox'.$i} = 'p';
			break;
			
			//10
			case 'l':
			 ${'txtbox'.$i} = 'o';
			break;
			
			//11
			case 'm':
			 ${'txtbox'.$i} = 'n';
			break;
			
			//12
			case 'n':
			 ${'txtbox'.$i} = 'm';
			break;
			
			//13
			case 'o':
			 ${'txtbox'.$i} = 'l';
			break;
			
			//14
			case 'p':
			 ${'txtbox'.$i} = 'k';
			break;
			
			//15
			case 'q':
			 ${'txtbox'.$i} = 'j';
			break;
			
			//16
			case 'r':
			 ${'txtbox'.$i} = 'i';
			break;
			
			//17
			case 's':
			 ${'txtbox'.$i} = 'h';
			break;
			
			//18
			case 't':
			 ${'txtbox'.$i} = 'g';
			break;
			
			//19
			case 'u':
			 ${'txtbox'.$i} = 'f';
			break;
			
			//20
			case 'v':
			 ${'txtbox'.$i} = 'e';
			break;
			
			//21
			case 'w':
			 ${'txtbox'.$i} = 'd';
			break;
			
			<spamg>//22</spamg>
			case 'x':
			 ${'txtbox'.$i} = 'c';
			break;
			
			<spamg>//23</spamg>
			case 'y':
			 ${'txtbox'.$i} = 'b';
			break;
			
			<spamg>//24</spamg>
			case 'z':
			 ${'txtbox'.$i} = 'a';
			break;
			
			
			default:
			 ${'txtbox'.$i} = "Noo!";
			break;
			
		}
	}
 }
 <spamb>?></spamb>
&lt;center>
&lt;table border = 0
style="text-align:center;padding:0;margin:0;">
	&lt;tr>
		&lt;td>r&lt;/td>
		&lt;td>m&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>g&lt;/td>
		&lt;td>s&lt;/td>
		&lt;td>v&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>v&lt;/td>
		&lt;td>b&lt;/td>
		&lt;td>v&lt;/td>
		&lt;td>h&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>l&lt;/td>
		&lt;td>u&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>h&lt;/td>
		&lt;td>g&lt;/td>
		&lt;td>i&lt;/td>
		&lt;td>z&lt;/td>
		&lt;td>m&lt;/td>
		&lt;td>t&lt;/td>
		&lt;td>v&lt;/td>
		&lt;td>i&lt;/td>
		&lt;td>h&lt;/td>
	&lt;/tr>
	
	&lt;tr>
		&lt;td>,&lt;/td>
		&lt;td>r&lt;/td>
		&lt;td>g&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>n&lt;/td>
		&lt;td>r&lt;/td>
		&lt;td>t&lt;/td>
		&lt;td>s&lt;/td>
		&lt;td>g&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>s&lt;/td>
		&lt;td>z&lt;/td>
		&lt;td>h&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>m&lt;/td>
		&lt;td>v&lt;/td>
		&lt;td>r&lt;/td>
		&lt;td>g&lt;/td>
		&lt;td>s&lt;/td>
		&lt;td>v&lt;/td>
		&lt;td>i&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
	&lt;/tr>
	
	&lt;tr>
		&lt;td>e&lt;/td>
		&lt;td>z&lt;/td>
		&lt;td>o&lt;/td>
		&lt;td>f&lt;/td>
		&lt;td>v&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>m&lt;/td>
		&lt;td>l&lt;/td>
		&lt;td>i&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>n&lt;/td>
		&lt;td>v&lt;/td>
		&lt;td>z&lt;/td>
		&lt;td>m&lt;/td>
		&lt;td>r&lt;/td>
		&lt;td>m&lt;/td>
		&lt;td>t&lt;/td>
		&lt;td>.&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>g&lt;/td>
		&lt;td>l&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>n&lt;/td>
		&lt;td>v&lt;/td>
	&lt;/tr>
	
	&lt;tr>
		&lt;td>!&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>r&lt;/td>
		&lt;td>g&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>r&lt;/td>
		&lt;td>h&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>v&lt;/td>
		&lt;td>e&lt;/td>
		&lt;td>v&lt;/td>
		&lt;td>i&lt;/td>
		&lt;td>b&lt;/td>
		&lt;td>g&lt;/td>
		&lt;td>s&lt;/td>
		&lt;td>r&lt;/td>
		&lt;td>m&lt;/td>
		&lt;td>t&lt;/td>
		&lt;td>.&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
	&lt;/tr>
&lt;/table>
&lt;br>
&lt;table border = 0 
style="text-align:center;padding:0;margin:0;">
	&lt;tr>
		&lt;td>&lt;?php echo $txtbox1;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox2;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox3;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox4;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox5;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox6;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox7;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox8;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox9;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox10;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox11;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox12;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox13;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox14;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox15;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox16;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox17;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox18;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox19;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox20;?>&lt;/td>
	&lt;/tr>
	&lt;tr>
		&lt;td>,&lt;/td>
		&lt;td>&lt;?php echo $txtbox21;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox22;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox23;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox24;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox25;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox26;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox27;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox28;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox29;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox30;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox31;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox32;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox33;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox34;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox35;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox36;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox37;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
	&lt;/tr>
	&lt;tr>
		&lt;td>&lt;?php echo $txtbox38;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox39;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox40;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox41;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox42;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox43;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox44;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox45;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox46;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox47;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox48;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox49;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox50;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox51;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox52;?>&lt;/td>
		&lt;td>.&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox53;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox54;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox55;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox56;?>&lt;/td>
	&lt;/tr>
	&lt;tr>
		&lt;td>!&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox57;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox58;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox59;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox60;?>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;?php echo $txtbox61;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox62;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox63;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox64;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox65;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox66;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox67;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox68;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox69;?>&lt;/td>
		&lt;td>&lt;?php echo $txtbox70;?>&lt;/td>
		&lt;td>.&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
		&lt;td>&lt;/td>
	&lt;/tr>
&lt;/table>
&lt;/center>
&lt;form method = "post">
&lt;br>
	&lt;center>&lt;input type="submit" value="Generate" name = "btngenerate">&lt;/center>
&lt;/form>
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










