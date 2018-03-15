<!DOCTYPE html>
<html lang="en">
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<head><title>Math on PHP</title>
	<link rel="shortcut icon" href="image/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	
	<?php
	//onclick change to blue
		include "clickblue.php";
	
	//show error
		include "Error/showError.php";
	?>
	
	</head>
	
	<body style="margin:0px;">

	<!-- Table Heading -->
	<table bgcolor="green" border = 0 width = 100% height =120px
	style="
			padding-top:10px; 
			padding-bottom:15px;
			background-position:top left;
			background-image:url('image/header1.jpg');
			background-size:1300px 120px
			">
		<tr>
			<td  width = 40% rowspan = 2>
				<img src="image/logo1.png" style = "
				height:100px;
				width:300px;
				display:inline-block;
				margin-left:50px;
				">
				<!--font face = "Segoe UI Light" color= "white" style="font-size:2.5em; "><b>Math on PHP</b></font-->
			</td>
			<td valign= "top" style="
			padding-top:10px;
			padding-right:30px;
			text-align:right;
			color:white;
			font-size:1em;
			">
				 <a href = "index.php?homepage=about">About Me</a> | <a href="index.php?homepage=contact">Contact</a>
			</td>
		</tr>
		<tr>
			<td style="
			color: white;
			font-family: 'Adobe Caslon Pro', 'Hoefler Text', Georgia, Garamond, Times, serif;
			letter-spacing:0.1em;
			text-align:center;
			font-size:9pt;
			text-transform: uppercase;
			font-variant: small-caps;
			margin: 40px auto;
			">
				"<font size = 5pt>I</font>n the eyes of strangers, it might<br> has neither value nor meaning.<br> TO ME! it is everything." - Lux
			</td>
		</tr>
	</table>	
	
	<table width = 100% border = 0 cellpadding = 2 cellspacing = 2 style="padding-top: 0px; border-collapse: collapse;">
		<tr bgcolor = "f1f1f1" style="border-bottom: 2px solid white; text-align:center;">
			<td bgcolor = "white"></td>
			<!--td></td-->
			<td colspan = 3>
			
				<?php include 'buttons/buttons.php';?>
				<a class = "button green big" href = "index.php?homepage=homepage">Home Page
				</a>
				<a class = "button blue big" href = "index.php?homepage=mathematic">Mathematics
				</a>
				<a name = "Top" class = "button gray big" href = "index.php?homepage=special">Math Specials
				</a>
				<a class = "button orange big" href = "index.php?homepage=mathPuzzle">Math Puzzles
				</a>
				<a class = "button green big" href = "index.php?homepage=about">About Me
				</a>
			</td>
			<!--td></td-->
			<td bgcolor = "white"></td>
		</tr>
		
		<tr style= "font-size: 1em;
			text-align: left;
			padding-top: 0px;
			padding-bot: 5px;
			background-color: #f1f1f1;
			color: black;tom: 4px;"
		>
			<td width = 10% rowspan = 3 bgcolor = "white"></td><!--rowspan 3-->
			<td width = 15% valign="top"><!--rowspan 3-->
				<?php 
				if (isset($_REQUEST['homepage'])){
					$homepageL = $_REQUEST['homepage'];
					switch ($homepageL){
						case 'homepage':
							include "leftlistmath.php";
							break;
							
						case 'mathematic':
							include "leftlistmath.php";
							break;
						case 'special':
							include "leftlistspecial.php";
							break;	
							
						case 'fibonacci':
							include "leftlistspecial.php";
							break;
						
						case 'primenumber':
							include "leftlistspecial.php";
							break;
						
						case 'circlespecial':
							include "leftlistspecial.php";
							break;
							
						case 'factorial':
							include "leftlistspecial.php";
							break;
						
						case 'hilbertsproblem':
							include "leftlistspecial.php";
							break;
						
						case 'algebraicnumber':
							include "leftlistspecial.php";
							break;
							
						case 'transcendentalnumber':
							include "leftlistspecial.php";
							break;
						
						case 'loan':
							include "leftlistspecial.php";
							break;
							
						case 'grahamnumber':
							include "leftlistspecial.php";
							break;
						
						case 'orbitalcalender':
							include "leftlistspecial.php";
							break;
							
						case 'calculator':
							include "leftlistspecial.php";
							break;
							
						case 'superstarnumber':
							include "leftlistspecial.php";
							break;

						case 'mathgames':
							include "leftmathpuzzle.php";
							break;
						
						case 'mathPuzzle':
							include "leftmathpuzzle.php";
							break;
							
						case 'verbalarithmetic':
							include "leftmathpuzzle.php";
							break;
						
						case 'cryptogram':
							include "leftmathpuzzle.php";
							break;
						
						case 'montyhallproblem':
							include "leftmathpuzzle.php";
							break;
						
						default:
							include "leftlistmath.php";
					}
				}else{
					include "leftlistmath.php";
				}
				?>
			</td>
			<!--- Middle table--->
			<td width = 50% valign = "top" style="background-color:#f1f1f1; border-right: 2px solid white; border-left: 2px solid white;">
				<?php
				if (isset($_REQUEST['homepage'])){
					$homepage = $_REQUEST['homepage'];
					switch ($homepage){
						case "homepage":
							include "Home.php";
							break;
						
						case "math":
							include "Math.php";
							break;
						
						case "mathematic":
							include "mathematic.php";
							break;
							
						case "special":
							include "special.php";
							break;
						
						case "mathPuzzle":
							include "mathPuzzle.php";
							break;
							
						case "primenumber":
							include "primenumber.php";
							break;
							
						case "fibonacci":
							include "fibonacci.php";
							break;
						
						case "circlespecial":
							include "circlespecial.php";
							break;
							
						case "factorial":
							include "factorial.php";
							break;
							
						case "hilbertsproblem":
							include "hilbertsproblem.php";
							break;
						
						case "algebraicnumber":
							include "algebraicnumber.php";
							break;
							
						case "transcendentalnumber":
							include "transcendentalnumber.php";
							break;
							
						case "orbitalcalender":
							include "orbitalcalender.php";
							break;
							
						case "calculator":
							include "calculator.php";
							break;	
						
						case "superstarnumber":
							include "superstarnumber.php";
							break;	

						case "loan":
							include "loan.php";
							break;
						
						case "grahamnumber":
							include "grahamnumber.php";
							break;
							
						case "mathgames"://sudoku
							include "mathGame.php";
							break;
							
						case "verbalarithmetic":
							include "verbalarithmetic.php";
							break;
							
						case "cryptogram":
							include "cryptogram.php";
							break;
						
						case "montyhallproblem":
							include "montyhallproblem.php";
							break;
							
						case "solvingLinearEquation":
							include "solvingLinearEquation.php";
							break;
							
						case "graphing":
							include "graphing.php";
							break;
						
						case "inequality":
							include "inequality.php";
							break;
							
						case "sysofequation":
							include "sysofequation.php";
							//mathpage();
							break;
						
						case "polynomial":
							include "polynomial.php";
							break;
							
						case "angle":
							include "angle.php";
							break;
							
						case "circle":
							include "circle.php";
							break;
						
						case "polygon":
							include "polygon.php";
							break;
							
						case "parallelandtran":
							include "parallelandtran.php";
							break;
							
						case "congruenttriangle":
							include "congruenttriangle.php";
							break;	
						
						case "parallelogram":
							include "parallelogram.php";
							break;
							
						case "polyhedron":
							include "polyhedron.php";
							break;							
					
						case "parabola":
							include "parabola.php";
							break;
						
						case "radian":
							include "radian.php";
							break;
						
						case "righttriangle":
							include "righttriangle.php";
							break;
						
						case "trigonometryidentity":
							include "trigonometryidentity.php";
							break;
							
						case "limit":
							include "limit.php";
							break;
							
						case "limitlaw":
							include "limitlaw.php";
							break;
							
						case "infinitelimit":
							include "infinitelimit.php";
							break;
							
						case "limitcontinuity":
							include "limitcontinuity.php";
							break;
						
						case "derivative":
							include "derivative.php";
							break;
						
						case "uncertaintyandpopulation":
							include "uncertaintyandpopulation.php";
							break;
						
						case "about":
							include "about.php";
							break;
					
						case "contact":
							include "contact.php";
							break;
						
						case "help":
							include "help.php";
							break;
					
						case "search":
							include "search.php";
							searchpage();
							break;
					
						default:
							echo "Page doesnt exit!, please do contact a developer";
					}
				}else {include "Home.php"; }
				?>
			</td>
			<td width = 15%  valign="top">
			<center>
				<br><br><br><br><br>
				<b>MATH on PHP</b> Recommends<br>
				<spamb>CHROME Web Browser</spamb>.<br>
				3D RENDERINGS Are<br>
				Done by JavaScript<br>
				Rather Than PHP<br>
				<br>
				<br>
				<br>
				This Website is a Record of My Learning on PHP <br>
				If You Have Any Recommendation or Complain, Just send Me an Email: <spamb>mathonphp@gamil.com</spamb><br>
				"SHARE THIS PAGE, IF YOU LIKE IT"<br>
				</center>
			</td >
			<td width = 10%  rowspan = 3 bgcolor = "white" valign="bottom">
				<form name="finput">
					<input type = "text" value="" name = "txtvisitor" size = 1 style="border:0;">
				</form>
			</td>
		</tr>
		<!---footer-->
		
		<tr cellpadding = 5 cellspacing = 5 style= "
			background-color: #A7C942; 
			border: 1px solid white;tom: 4px; height: 250px;
			background-position:bottom left;
			background-image:url('image/tran2.png');
			
			">
			<!--<td bgcolor = "white"></td>
			<td></td-->
			
			<td colspan = 3>
				<table width = 100% height = 100% border = 0 style="border-collapse:collapse;">
					<tr cellpadding = 5 cellspacing = 5 style= "font-size: 1.2em;
					padding-top: 5px;
					padding-bot: 5px;
					color: white;">
						<td width = 20%></td>
						
						<td width = 25% valign = "top" style="text-align:left">
							
							<a href="index.php?homepage=homepage" style="font-size:1.4em">Home Page</a><br><br>
							<a href="index.php?homepage=mathematic">Mathematics </a><br>
							<a href="index.php?homepage=special">Math Specials</a><br>
							<a href="index.php?homepage=mathgames">Math Puzzles </a><br>
							<a href="index.php?homepage=about">About Me </a><br>
							<a href="index.php?homepage=contact">Contact </a> <br>
							<a href="index.php?homepage=help">Help </a> <br>
							<a href="#">Search </a>
							
						</td>
						<td width = 25% valign = "top" style="text-align:left">
							<div style="font-size:1.4em">Links</div><br>
							<a href="http://www.mathwarehouse.com">Math Warehouse</a><br>
							<a href="http://www.freemathhelp.com/">Free Math Help </a><br>
							<a href="http://www.trigonometryhelp.org">Trigonometry Help </a><br>
							<a href="http://www.w3schools.com">W3School </a> <br>
							<a href="http://tympanus.net/codrops/">Tympanus </a> <br>
							<a href="http://stackoverflow.com/">Stackoverflow </a><br>
							<a href="http://threejs.org/">ThreeJS</a>
							
						</td>
						<td width = 20% valign = "top" >
						<table border = 0 cellpadding = 5 cellspacing = 5 style= "font-size: 1em;
					padding-top: 5px;
					padding-bot: 5px;
					color: white;
					border-collapse:collapse;">
							<tr>
								<td valign="top" colspan=2>
									<div style="font-size:1.4em">Social Networks</div><br>
								</td>
								
							</tr>
							<tr>
								<td valign="top">
									<a target=_blank href="https://www.facebook.com"><img style="float:right;" src="image/fb1.jpg" height = 35px width = 40px></a>
								</td>
								<td>
									<a target=_blank href="https://www.facebook.com">Facebook</a>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<a target=_blank href="https://www.linkedin.com">
									<img style="float:right;" src="image/link.png" height = 35px width = 40px>
									</a>
								</td>
								<td>
									<a target=_blank href="https://www.linkedin.com">LinkedIn</a>
								</td>
							</tr>
							<tr>
								<td valign="top">
									<a target=_blank href="https://www.twitter.com">
									<img style="float:right; " src="image/twit.png" height = 40px width = 40px>
									</a>
								</td>
								<td>
									<a target=_blank href="https://www.twitter.com">Twitter</a>
								</td>
							</tr>
						</table>
						</td>
						<td></td>
				</table>
			</td>
			
			<!--td></td>
			<td bgcolor = "white"></td-->
		</tr>
		<tr style= "font-size: 0.7em;
			text-align: center;
			padding-top: 5px;
			padding-bot: 5px;
			background-color: #EAF2D3;
			color: black; 
			border: 1px solid white;tom: 4px;
			">
			
			<!--td bgcolor = "white"></td>
			<td></td-->
			<td colspan = 3>	
				<center>
					<font size = 4>Math on PHP : Most reliable coding on Mathematics</font><br>
					<font size = 3>@Sophoanreak @ March 3<sup>rd</sup>, 2015 &copy; All Right Reserved</font>
				</center>
			</td>
			<!--td></td>
			<td bgcolor = "white"></td-->
		</tr>
		
		
	</table>
<!-- Fixed image for back to the top -->
	<a href="#top"><img src="image/up1.png" title="Home" style="
	position:fixed;
	height:50px;
	width:50px;
	bottom: 10px;
	right: 10px;"></a>
	
	<!--http://www.mathwarehouse.com/geometry/
	https://www.khanacademy.org/math/geometry
	http://www.trigonometryhelp.org/trigonometry-lessons.html#
	http://mslc.osu.edu/math-1151-online-lessons
	http://www.freemathhelp.com/geometry.html	http://www.cliffsnotes.com/math/geometry/triangles/congruent-triangles
	http://www.nabla.hr/
	https://www.youtube.com/watch?v=54_XRjHhZzI
	-->


	</body>
</html>