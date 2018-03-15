<?php
$sysofequation ='';
$graphingV='';
$inequalityV = '';
$mathV = '';
$solvingLinearEquationV ='';
$exponentV='';
$primenumberV = '';
$ninetyV= '';
$ninetyB='';
$fibonacci1V='';
$fibonacci1VB='';
$fibonacci2V='';
$fibonacci3V='';
$specialV='';
$specialVB='';
$mathematicV='';
$mathematicVB='';
$homepageVB='';
$homepageV='';
$sixtydegreeV='';
$circle1V='';
$circleV='';
$polygonV='';
$polygon1V='';
$parallelandtranV='';
$parallelandtran1V='';
$congruenttriangleV='';
$sssV='';
$parallelogramV='';
$squareV='';
$rectangleV='';
$rhomboidV='';
$polyhedronV='';
$tetrahedronV='';
$dodecahedronV='';
$icosahedronV='';
$octahedronV='';
$polyhedronfunV='';
$parabolaV='';
$yxsquareV='';
$yonexV='';
$ysquarerootxV='';
$conicsecV='';
$radianV='';
$radianmV='';
$righttriangleV='';
$righttrianglesubV='';
$radianfunV='';
$trigonometryidentityV='';
$trigonometryidentitysubV='';
$limitV='';
$limitsubV='';
$limitareaV='';
$derivativeV='';
$derivativeslopeV='';
$fermatlittleV='';
$subprimeV='';
$akstestV='';
$uncertaintyandpopulationV='';
$centerV='';
$histogramandbarV='';
$setofrealnumberV='';
$fractionV='';
$orderofoperationV='';
$propertyofalgebraV='';
$oneStepEquationV='';
$SimplifyEquationV='';
$slopsandlinesV='';
$slopV='';
$parrallelV='';
$solveInV='';
$sphereV='';
$shapedataV='';
$circlespecialV='';
$epiccircleV='';
$factorialV='';
$factorialsubV='';
$g64V='';
$hilbertsproblemV='';
$hilbertsproblem7V='';
$algebraicnumberV='';
$algebraicnumbersubV='';
$transcendentalnumberV='';
$transcendentalnumbersubV='';
$loanV='';
$amortizationV='';
$compoundinterestV='';
$limitlawV='';
$limitlawsubV='';
$infinitelimitsubV='';
$infinitelimitV='';
$limitcontinuityV='';
$limitcontinuitysubV='';
$earthandmoonV='';
$basiccalculatorV='';
$scientificcalculatorV='';
$graphingcalculatorV='';
$numberpiV='';
$numbereV='';

	if(isset($_REQUEST['homepage'])){ 
			$homepage1 = $_REQUEST['homepage'];
			switch ($homepage1){
				
				case 'homepage':
					$homepageVB = 'background-color:green';
					//$homepageV = 'style=color:#345903;';
					break;
				
				case 'math':
					$mathV = 'style ="color:blue"';
					break;
					
				case 'solvingLinearEquation':
					$solvingLinearEquationV = 'style ="color:blue"';
					//$mathematicV = 'style ="color:white"';
					$mathematicVB = 'background-color:green';
					break;
					
					
				case 'sysofequation':
					$sysofequation = 'style ="color:blue"';
					break;
					
				case 'graphing':
					$graphingV = 'style ="color:blue"';
					break;
					
				case 'inequality':
					$inequalityV = 'style ="color:blue"';
					break;
					
				case 'polynomial':
					$exponentV = 'style ="color:blue"';
					break;
				
				case 'circle':
					$circleV = 'style ="color:blue"';
					break;
				
				case 'polygon':
					$polygonV = 'style ="color:blue"';
					break;
				
				case 'parallelandtran':
					$parallelandtranV = 'style ="color:blue"';
					break;
					
				case 'congruenttriangle':
					$congruenttriangleV = 'style ="color:blue"';
					break;
				
				case 'parallelogram':
					$parallelogramV = 'style ="color:blue"';
					break;
				
				case 'polyhedron':
					$polyhedronV = 'style ="color:blue"';
					break;
					
				case 'primenumber':
					$primenumberV = 'style ="color:blue"';
					break;
				
				case 'special':
					$specialVB = 'style ="color:blue"';
					break;
				
				case 'fibonacci':
					$specialVB = 'style ="color:blue"';
					break;
				
				case 'circlespecial':
					$circlespecialV = 'style ="color:blue"';
					break;
				
				case 'factorial':
					$factorialV = 'style ="color:blue"';
					break;
				
				case 'hilbertsproblem':
					$hilbertsproblemV = 'style ="color:blue"';
					break;
					
				case 'algebraicnumber':
					$algebraicnumberV = 'style ="color:blue"';
					break;
					
				case 'transcendentalnumber':
					$transcendentalnumberV = 'style ="color:blue"';
					break;
				
				case 'mathematic':
					$mathematicVB = 'style ="color:blue"';
					break;
				
				case 'parabola':
					$parabolaV = 'style ="color:blue"';
					break;
					
				case 'radian':
					$radianV = 'style ="color:blue"';
					break;
					
				case 'righttriangle':
					$righttriangleV = 'style ="color:blue"';
					break;
				
				case 'trigonometryidentity':
					$trigonometryidentityV = 'style ="color:blue"';
					break;
				
				case 'limit':
					$limitV = 'style ="color:blue"';
					break;
					
				case 'limitlaw':
					$limitlawV = 'style ="color:blue"';
					break;
					
				case 'infinitelimit':
					$infinitelimitV = 'style ="color:blue"';
					break;
					
				case 'limitcontinuity':
					$limitcontinuityV = 'style ="color:blue"';
					break;
				
				case 'derivative':
					$derivativeV = 'style ="color:blue"';
					break;
					
				case 'uncertaintyandpopulation':
					$uncertaintyandpopulationV = 'style ="color:blue"';
					break;
					
				default:
				//$sysofequation = 'style ="color:black"';
				//$graphingV = 'style ="color:black"';
				//$mathV = 'style ="color:black"';
				//$solvingLinearEquationV = 'style ="color:black"';
				//$homepageV = 'style=color:white;';
			}		
	}else{
		//$homepageV = 'style=color:white;';
		
	}
	if (isset($_REQUEST['subhomepage'])){
			$homepage2 = $_REQUEST['subhomepage'];
			switch ($homepage2){
				
				case 'realNumber':
					$setofrealnumberV = 'style ="color:blue"';
					$mathV = 'style ="color:blue"';
					break;
					
				case 'fraction':
					$fractionV = 'style ="color:blue"';
					$mathV = 'style ="color:blue"';
					break;
					
				case 'orderofOperation':
					$orderofoperationV = 'style ="color:blue"';
					$mathV = 'style ="color:blue"';
					break;
					
				case 'propertiesofAlgebra':
					$propertyofalgebraV = 'style ="color:blue"';
					$mathV = 'style ="color:blue"';
					break;
				
				case 'oneStepEquation':
					$oneStepEquationV = 'style ="color:blue"';
					$solvingLinearEquationV = 'style ="color:blue"';
					break;
					
				case 'SimplifyEquation':
					$SimplifyEquationV = 'style ="color:blue"';
					$solvingLinearEquationV = 'style ="color:blue"';
					break;
					
				case 'slopsandlines':
					$slopsandlinesV = 'style ="color:blue"';
					$graphingV = 'style ="color:blue"';
					break;
				
				case 'slop':
					$slopV = 'style ="color:blue"';
					$graphingV = 'style ="color:blue"';
					break;
				
				case 'parrallel':
					$parrallelV = 'style ="color:blue"';
					$graphingV = 'style ="color:blue"';
					break;
				
				case 'solveIn':
					$solveInV = 'style ="color:blue"';
					$inequalityV = 'style ="color:blue"';
					break;
				
				case 'ninety':
					$ninetyV = 'style ="color:blue"';
					//$ninetyVB = 'background-color:green';
					break;
					
				case 'fibonacci1':
					$fibonacci1V = 'style ="color:blue"';
					//$fibonacci1VB = 'background-color:green';
					break;
					
				case 'fibonacci2':
					$fibonacci2V = 'style ="color:blue"';
					break;
				
				case 'fibonacci3':
					$fibonacci3V = 'style ="color:blue"';
					break;
				
				case 'epiccircle':
					$epiccircleV = 'style ="color:blue"';
					$circlespecialV = 'style ="color:blue"';
					break;
					
				case 'factorialsub':
					$factorialsubV = 'style ="color:blue"';
					$factorialV = 'style ="color:blue"';
					break;
					
				case 'hilbertsproblem7':
					$hilbertsproblemV = 'style ="color:blue"';
					$hilbertsproblem7V = 'style ="color:blue"';
					break;
				
				case 'algebraicnumbersub':
					$algebraicnumbersubV = 'style ="color:blue"';
					$algebraicnumberV = 'style ="color:blue"';
					break;
				
				case 'transcendentalnumbersub':
					$transcendentalnumbersubV = 'style ="color:blue"';
					$transcendentalnumberV = 'style ="color:blue"';
					break;
				
				case 'earthandmoon':
					$earthandmoonV = 'style ="color:blue"';
					break;
					
				case 'basiccalculator':
					$basiccalculatorV = 'style ="color:blue"';
					break;
				
				case 'scientificcalculator':
					$scientificcalculatorV = 'style ="color:blue"';
					break;
				
				case 'graphingcalculator':
					$graphingcalculatorV = 'style ="color:blue"';
					break;
					
				case 'numberpi':
					$numberpiV = 'style ="color:blue"';
					break;
				
				case 'numbere':
					$numbereV = 'style ="color:blue"';
					break;

				case 'amortization':
					$amortizationV = 'style ="color:blue"';
					break;
				
				case 'compoundinterest':
					$compoundinterestV = 'style ="color:blue"';
					break;
				
				case 'g64':
					$g64V = 'style ="color:blue"';
					break;
					
				case 'sixtydegree':
					$sixtydegreeV = 'style ="color:blue"';
					break;
					
				case 'circle1':
					$circle1V = 'style ="color:blue"';
					$circleV = 'style ="color:blue"';
					break;
					
				case 'sphere':
					$sphereV = 'style ="color:blue"';
					$circleV = 'style ="color:blue"';
					break;
					
				case 'polygon1':
					$polygon1V = 'style ="color:blue"';
					break;
					
				case 'parallelandtran1':
					$parallelandtran1V = 'style ="color:blue"';
					break;
					
				case 'sss':
					$sssV = 'style ="color:blue"';
					break;
				
				case 'rectangle':
					$rectangleV = 'style ="color:blue"';
					break;
					
				case 'square':
					$squareV = 'style ="color:blue"';
					break;
					
				case 'rhomboid':
					$rhomboidV = 'style ="color:blue"';
					break;
					
				case 'tetrahedron':
					$tetrahedronV = 'style ="color:blue"';
					break;
				
				case 'dodecahedron':
					$dodecahedronV = 'style ="color:blue"';
					break;
				
				case 'icosahedron':
					$icosahedronV = 'style ="color:blue"';
					break;
				
				case 'octahedron':
					$octahedronV = 'style ="color:blue"';
					break;
				
				case 'polyhedronfun':
					$polyhedronfunV = 'style ="color:blue"';
					break;
				
				case 'yxsquare':
					$yxsquareV = 'style ="color:blue"';
					break;
					
				case 'yonex':
					$yonexV = 'style ="color:blue"';
					break;
				
				case 'ysquarerootx':
					$ysquarerootxV = 'style ="color:blue"';
					break;
					
				case 'conicsec':
					$conicsecV = 'style ="color:blue"';
					//$conicsecV = 'style ="color:blue"';
					break;
				
				case 'radianm':
					$radianmV = 'style ="color:blue"';
					$radianV = 'style ="color:blue"';
					break;
				
				case 'righttrianglesub':
					$righttrianglesubV = 'style ="color:blue"';
					$righttriangleV = 'style ="color:blue"';
					break;
				
				case 'radianfun':
					$radianfunV = 'style ="color:blue"';
					$radianV = 'style ="color:blue"';
					break;
					
				case 'trigonometryidentitysub':
					$trigonometryidentitysubV = 'style ="color:blue"';
					$trigonometryidentityV = 'style ="color:blue"';
					break;
				
				case 'limitsub':
					$limitsubV = 'style ="color:blue"';
					$limitV = 'style ="color:blue"';
					break;
				
				case 'limitarea':
					$limitareaV = 'style ="color:blue"';
					$limitV = 'style ="color:blue"';
					break;
					
				case 'limitlawsub':
					$limitlawsubV = 'style ="color:blue"';
					$limitlawV = 'style ="color:blue"';
					break;
					
				case 'infinitelimitsub':
					$infinitelimitsubV = 'style ="color:blue"';
					$infinitelimitV = 'style ="color:blue"';
					break;
					
				case 'limitcontinuitysub':
					$limitcontinuitysubV = 'style ="color:blue"';
					$limitcontinuityV = 'style ="color:blue"';
					break;
				
				case 'derivativeslope':
					$derivativeV = 'style ="color:blue"';
					$derivativeslopeV = 'style ="color:blue"';
					break;
				
				case 'subprime':
					$primenumberV = 'style ="color:blue"';
					$subprimeV = 'style ="color:blue"';
					break;
					
				case 'fermatlittle':
					$primenumberV = 'style ="color:blue"';
					$fermatlittleV = 'style ="color:blue"';
					break;
				
				case 'akstest':
					$akstestV = 'style ="color:blue"';
					break;
				
				case 'center':
					$centerV = 'style ="color:blue"';
					$uncertaintyandpopulationV = 'style ="color:blue"';
					break;
					
				case 'histogramandbar':
					$uncertaintyandpopulationV = 'style ="color:blue"';
					$histogramandbarV = 'style ="color:blue"';
					break;
				
				case 'shapedata':
					$uncertaintyandpopulationV = 'style ="color:blue"';
					$shapedataV = 'style ="color:blue"';
					break;
					
				default:
				
			}
	}
?>