
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
 
 #menusudoku {
				//position: absolute;
				bottom: 20px;
				//width: 100%;
				text-align: center;
			}

.element {
				width: 120px;
				height: 160px;
				box-shadow: 0px 0px 12px rgba(0,255,255,0.5);
				border: 1px solid rgba(127,255,255,0.25);
				text-align: center;
				cursor: default;
			}

			.element:hover {
				box-shadow: 6px 6px 12px rgba(0,1,1,0.75);
				border: 1px solid rgba(127,255,255,0.75);
			}

				.element .number {
					position: absolute;
					top: 20px;
					right: 20px;
					font-size: 12px;
					color: rgba(127,255,255,0.75);
				}

				.element .symbol {
					position: absolute;
					top: 40px;
					left: 0px;
					right: 0px;
					font-size: 60px;
					font-weight: bold;
					color: rgba(255,255,255,0.75);
					text-shadow: 0 0 10px rgba(0,255,255,0.95);
				}

				.element .details {
					position: absolute;
					bottom: 15px;
					left: 0px;
					right: 0px;
					font-size: 12px;
					color: rgba(127,255,255,0.75);
				}
	button {
				color: black;
				background: transparent;
				outline: 1px solid rgba(255,255,255,250);
				border: 0px;
				padding: 5px 10px;
				cursor: pointer;
			}
	button:hover {
				background-color: rgba(0,255,255,0.5);
			}
	button:active {
				color: #000000;
				background-color: rgba(0,255,255,0.75);
			}
 
</style>

<?php

//declare variable for each cell
	for ($m=11;$m<=99;$m++){
		${'txt'.$m}= NULL;
	}
	$temp12 = '';
	$temp33 = '';
	
//input data into each cell
//	if (isset($_POST['btnSub'])){
		
		$num = array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9);
		$numMul = array('1'=>$num,'2'=>$num,'3'=>$num,'4'=>$num,'5'=>$num,'6'=>$num,'7'=>$num,'8'=>$num,'9'=>$num);
		
		///box 5
		$i=5;
			for($j=1;$j<=9;$j++){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		
		///box 4
			//44,45,46
		$i=4;
			for($j=4;$j<7;$j++){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			for($j=4;$j<7;$j++){
				
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//41,42,43
			
			for($j=1;$j<4;$j++){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			for($j=1;$j<4;$j++){
				if(count($numMul[$i])==0){break;}
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
				
			}
				//adding 41 if missing
				
			if (${'txt'.$i.'1'}==NULL){
				$numMul[$i] = $num;
				for($j=4;$j<7;$j++){
					unset($numMul[$i][${'temp'.($i).($j)}]);
				}
				for($j=1;$j<4;$j++){
					unset($numMul[$i][${'temp'.($i+1).($j)}]);
				}
				for($j=1;$j<4;$j++){
					${'temp'.($i).($j)} = array_rand($numMul[$i]);
					${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
					unset($numMul[$i][${'temp'.($i).($j)}]);
				}
				
				//adding 42 if missing
			}elseif(${'txt'.$i.'2'}==Null){
				$numMul[$i] = $num;
				for($j=4;$j<7;$j++){
					unset($numMul[$i][${'temp'.($i).($j)}]);
				}
				for($j=1;$j<4;$j++){
					unset($numMul[$i][${'temp'.($i+1).($j)}]);
				}
				unset($numMul[$i][${'temp'.($i).'1'}]);
				for($j=2;$j<4;$j++){
					${'temp'.($i).($j)} = array_rand($numMul[$i]);
					${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
					unset($numMul[$i][${'temp'.($i).($j)}]);
				}
				//adding 43 if missing
			}elseif(${'txt'.$i.'3'}==Null){
				$numMul[$i] = $num;
				for($j=4;$j<7;$j++){
					unset($numMul[$i][${'temp'.($i).($j)}]);}
				for($j=1;$j<4;$j++){
					unset($numMul[$i][${'temp'.($i+1).($j)}]);
				}
				unset($numMul[$i][${'temp'.($i).'1'}]);
				unset($numMul[$i][${'temp'.($i).'2'}]);
				for($j=3;$j<4;$j++){
					${'temp'.($i).($j)} = array_rand($numMul[$i]);
					${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
					unset($numMul[$i][${'temp'.($i).($j)}]);
				}
			}
			
			//47,48,49
			$numMul[$i] = $num;
			for($j=1;$j<7;$j++){
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			for($j=7;$j<=9;$j++){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
								
		///box 6
			//64,65,66
		$i=6;
			for($j=4;$j<7;$j++){
				unset($numMul[$i][${'temp'.($i-1).($j)}]);
			}
			
			for($j=4;$j<7;$j++){
				unset($numMul[$i][${'temp'.($i-2).($j)}]);
			}
			
			for($j=4;$j<7;$j++){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//61,62,63
			$numMul[$i] = $num;
			for($j=1;$j<4;$j++){
				unset($numMul[$i][${'temp'.($i-1).($j)}]);
			}
			for($j=1;$j<4;$j++){
				unset($numMul[$i][${'temp'.($i-2).($j)}]);
			}
			for($j=1;$j<4;$j++){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//67,68,69
			$numMul[$i] = $num;
			for($j=1;$j<7;$j++){
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			for($j=7;$j<=9;$j++){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		
		//box2
		$i = 2;
		
			//23,26,29
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			
			for($j=3;$j<=9;$j+=3){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			//22,25,28
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			for($j=2;$j<9;$j+=3){
				if(count($numMul[$i])==0){break;}
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//adding 22 if missing
				
			if (${'txt'.$i.'2'}==NULL){
				$numMul[$i] = $num;
				for($j=3;$j<=9;$j+=3){
					unset($numMul[$i][${'temp'.($i).($j)}]);
				}
				for($j=2;$j<9;$j+=3){
					unset($numMul[$i][${'temp'.($i+3).($j)}]);
				}
				for($j=2;$j<9;$j+=3){
					${'temp'.($i).($j)} = array_rand($numMul[$i]);
					${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
					unset($numMul[$i][${'temp'.($i).($j)}]);
				}
				
				//adding 25 if missing
			}elseif(${'txt'.$i.'5'}==Null){
				$numMul[$i] = $num;
				for($j=3;$j<=9;$j+=3){
					unset($numMul[$i][${'temp'.($i).($j)}]);
				}
				for($j=2;$j<9;$j+=3){
					unset($numMul[$i][${'temp'.($i+3).($j)}]);
				}
				unset($numMul[$i][${'temp'.($i).'2'}]);
				for($j=5;$j<9;$j+=3){
					${'temp'.($i).($j)} = array_rand($numMul[$i]);
					${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
					unset($numMul[$i][${'temp'.($i).($j)}]);
				}
				//adding 28 if missing
			}elseif(${'txt'.$i.'8'}==Null){
				$numMul[$i] = $num;
				for($j=3;$j<=9;$j+=3){
					unset($numMul[$i][${'temp'.($i).($j)}]);}
				for($j=2;$j<9;$j+=3){
					unset($numMul[$i][${'temp'.($i+3).($j)}]);
				}
				unset($numMul[$i][${'temp'.($i).'2'}]);
				unset($numMul[$i][${'temp'.($i).'5'}]);
				for($j=8;$j<9;$j+=3){
					${'temp'.($i).($j)} = array_rand($numMul[$i]);
					${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
					unset($numMul[$i][${'temp'.($i).($j)}]);
				}
			}
			
				//21,24,27
			$numMul[$i] = $num;
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i).($j)}]);}
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			for($j=1;$j<9;$j+=3){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		
		//box8
		$i = 8;
		
			//83,86,89
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i-6).($j)}]);
			}
			
			for($j=3;$j<=9;$j+=3){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//82,85,88
			$numMul[$i] = $num;
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i-6).($j)}]);
			}
			
			for($j=2;$j<9;$j+=3){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//81,84,87
			$numMul[$i] = $num;
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			for($j=1;$j<9;$j+=3){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
		//box1
		$i=1;
		
			//11
			for($j=1;$j<=3;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			for($j=1;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			
			for($j=1;$j<2;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
		//box3
		$i=3; 
		
			//33
			for($j=1;$j<=3;$j+=1){
				unset($numMul[$i][${'temp'.($i-1).($j)}]);
			}
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-2).'1'}]);
			
			for($j=3;$j<4;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		
		//box9
		$i=9;
			
			//99
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-6).'3'}]);
			for($j=7;$j<=9;$j+=1){
				unset($numMul[$i][${'temp'.($i-6).'3'}]);
			}
			
			for($j=9;$j<=9;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		
		//box7
		$i=7;
			
			//77
			for($j=1;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-6).'1'}]);
			for($j=7;$j<=9;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i+2).'9'}]);
			for($j=7;$j<8;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		
		//box1
		$i=1;
			
			//15
			
			for($j=4;$j<7;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			for($j=5;$j<6;$j+=1){
				if (count($numMul[$i])==0){break;}
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		
			//missing 15
		if ($txt15 == NULL){
			$numMul[$i] = $num;
			for($j=4;$j<7;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i).'1'}]);
			for($j=5;$j<6;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		}
			
			//19
			for($j=7;$j<=9;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			for($j=9;$j<=9;$j+=1){
				if (count($numMul[$i])==0){break;}
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//Missing 19
		if ($txt19 == NULL){
			$numMul[$i] = $num;
			for($j=7;$j<=9;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i).'1'}]);
			unset($numMul[$i][${'temp'.($i).'5'}]);
			for($j=9;$j<=9;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		}
			
		//box3
		$i=3;
			
			//35
			for($j=4;$j<7;$j+=1){
				unset($numMul[$i][${'temp'.($i-1).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-2).'5'}]);
			unset($numMul[$i][${'temp'.($i).'3'}]);
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			for($j=5;$j<6;$j+=1){
				if (count($numMul[$i])==0){break;}
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//missing 35
		if ($txt35 == NULL){
			$numMul[$i] = $num;
			for($j=4;$j<7;$j+=1){
				unset($numMul[$i][${'temp'.($i-1).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-2).'5'}]);
			unset($numMul[$i][${'temp'.($i).'3'}]);
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			for($j=5;$j<6;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		}
			
			//37
			for($j=7;$j<=9;$j+=1){
				unset($numMul[$i][${'temp'.($i-1).($j)}]);
			}
			for($j=1;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-2).'9'}]);
			unset($numMul[$i][${'temp'.($i).'3'}]);
			unset($numMul[$i][${'temp'.($i).'5'}]);
			for($j=7;$j<8;$j+=1){
				if (count($numMul[$i])==0){break;}
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//missing 37
		if ($txt37 == NULL){
			$numMul[$i] = $num;
			for($j=7;$j<=9;$j+=1){
				unset($numMul[$i][${'temp'.($i-1).($j)}]);
			}
			for($j=1;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-2).'9'}]);
			unset($numMul[$i][${'temp'.($i).'3'}]);
			unset($numMul[$i][${'temp'.($i).'5'}]);
			for($j=7;$j<8;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		}
		
		//box9
		$i=9;
			
			//95
			for($j=4;$j<7;$j+=1){
				unset($numMul[$i][${'temp'.($i-1).($j)}]);
			}
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-6).'5'}]);
			unset($numMul[$i][${'temp'.($i).'9'}]);
			for($j=5;$j<6;$j+=1){
				if (count($numMul[$i])==0){break;}
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//missing 95
		if ($txt95 == NULL){
			$numMul[$i] = $num;
			for($j=4;$j<7;$j+=1){
				unset($numMul[$i][${'temp'.($i-1).($j)}]);
			}
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-6).'5'}]);
			unset($numMul[$i][${'temp'.($i).'9'}]);
			for($j=5;$j<6;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		}
		
			//91
			for($j=1;$j<=3;$j+=1){
				unset($numMul[$i][${'temp'.($i-1).($j)}]);
			}
			for($j=1;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-6).'7'}]);
			unset($numMul[$i][${'temp'.($i).'9'}]);
			unset($numMul[$i][${'temp'.($i).'5'}]);
			for($j=1;$j<2;$j+=1){
				if (count($numMul[$i])==0){break;}
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//Missing 91
		if ($txt91 == NULL){
			$numMul[$i] = $num;
			for($j=1;$j<=3;$j+=1){
				unset($numMul[$i][${'temp'.($i-1).($j)}]);
			}
			for($j=1;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-6).'7'}]);
			unset($numMul[$i][${'temp'.($i).'9'}]);
			unset($numMul[$i][${'temp'.($i).'5'}]);
			for($j=1;$j<2;$j+=1){
				if (count($numMul[$i])==0){break;}
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		}
		
		//box7
		$i=7;
			
			//75
			
			for($j=4;$j<7;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-6).'5'}]);
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i+2).'5'}]);
			for($j=5;$j<6;$j+=1){
				if (count($numMul[$i])==0){break;}
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//missing 75
		if ($txt75 == NULL){
			$numMul[$i] = $num;
			for($j=4;$j<7;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i-6).'5'}]);
			for($j=2;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i+2).'5'}]);
			unset($numMul[$i][${'temp'.($i).'7'}]);
			for($j=5;$j<6;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		}
			
			//73
			for($j=1;$j<=3;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i+2).'1'}]);
			unset($numMul[$i][${'temp'.($i-6).'9'}]);
			for($j=3;$j<4;$j+=1){
				if (count($numMul[$i])==0){break;}
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
			//Missing 73
		if ($txt73 == NULL){
			$numMul[$i] = $num;
			for($j=1;$j<=3;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i-3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i+2).'1'}]);
			unset($numMul[$i][${'temp'.($i-6).'9'}]);
			unset($numMul[$i][${'temp'.($i).'7'}]);
			unset($numMul[$i][${'temp'.($i).'5'}]);
			for($j=3;$j<4;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
		}
		
		//box1
		$i=1;
			
			//13
			$numMul[$i] = $num;
			for($j=1;$j<=3;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			for($j=3;$j<=9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i).'1'}]);
			unset($numMul[$i][${'temp'.($i).'5'}]);
			unset($numMul[$i][${'temp'.($i).'9'}]);
			unset($numMul[$i][${'temp'.($i+6).'3'}]);
			unset($numMul[$i][${'temp'.($i+2).'3'}]);
			for($j=3;$j<4;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			/*
			//17
			$numMul[$i] = $num;
			for($j=7;$j<=9;$j+=1){
				unset($numMul[$i][${'temp'.($i+1).($j)}]);
			}
			for($j=1;$j<9;$j+=3){
				unset($numMul[$i][${'temp'.($i+3).($j)}]);
			}
			unset($numMul[$i][${'temp'.($i).'1'}]);
			unset($numMul[$i][${'temp'.($i).'3'}]);
			unset($numMul[$i][${'temp'.($i).'5'}]);
			unset($numMul[$i][${'temp'.($i).'9'}]);
			unset($numMul[$i][${'temp'.($i+2).'7'}]);
			unset($numMul[$i][${'temp'.($i+6).'7'}]);
			
			for($j=7;$j<8;$j+=1){
				${'temp'.($i).($j)} = array_rand($numMul[$i]);
				${'txt'.($i).($j)} = $numMul[$i][${'temp'.($i).($j)}]; 
				unset($numMul[$i][${'temp'.($i).($j)}]);
			}
			
		*/
	//}//end isset
	
?>	

		<script src="3D/three.min.js"></script>
		<script src="3D/js/tween.min.js"></script>
		<script src="3D/TrackballControl.js"></script>
		<script src="3D/js/CSS3DRenderer.js"></script>
<script>

			var table = [
			<?php
			$num = array(1,2,3,4,5,6,7,8,9);
			$numMul = array($num,$num,$num,$num,$num,$num,$num,$num,$num);
			for ($i=1;$i<=9;$i++){
				for($j=6;$j<=14;$j++){
					echo ${'txt'.$i.($j-5)} . "," . "' '" . "," . "' '" . "," . $j .",". $i . ",";
				}
			}
			?>
	
			];

			var camera, scene, renderer;
			var controls;

			var objects = [];
			var targets = { table: [], sphere: [], helix: [], grid: [] };

			

			function init() {

				camera = new THREE.PerspectiveCamera( 40, 600 / 600, 1, 10000 );
				camera.position.z = 3000;

				scene = new THREE.Scene();

				// table1

				for ( var i = 0; i < table.length; i += 5 ) {
				
				//element
					var element = document.createElement( 'div' );
					element.className = 'element';
						
						if ( i>=15 && i<=25 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=60 && i<=70 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=105 && i<=115 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=135 && i<=145 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=165 && i<=175 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=180 && i<=190 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=210 && i<=220 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=225 && i<=235 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=255 && i<=265 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=285 && i<=295 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=330 && i<=340 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=375 && i<=385 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}
						else{
							element.style.backgroundColor = 'rgba(127,127,127,127)';
							}
							
					var number = document.createElement( 'div' );
					number.className = 'number';
					number.textContent = (i/5) + 1;
					//element
					element.appendChild( number );

					var symbol = document.createElement( 'div' );
					symbol.className = 'symbol';
					symbol.textContent = table[ i ];
					//element
					element.appendChild( symbol );

					var details = document.createElement( 'div' );
					details.className = 'details';
					details.innerHTML = table[ i + 1 ] + '<br>' + table[ i + 2 ];
					//element
					element.appendChild( details );
				
				//create object
					//object
					var object = new THREE.CSS3DObject( element );
					object.position.x = Math.random() * 4000 - 2000;
					object.position.y = Math.random() * 4000 - 2000;
					object.position.z = Math.random() * 4000 - 2000;
					
				//add to scene
					scene.add( object );

					
					objects.push( object );
					//

					var object = new THREE.Object3D();
					object.position.x = ( table[ i + 3 ] * 140 ) - 1330;
					object.position.y = - ( table[ i + 4 ] * 180 ) + 990;

					targets.table.push( object );

				}
				
				// table2

				for ( var i = 0; i < table.length; i += 5 ) {
				
				//element
					var element = document.createElement( 'div' );
					element.className = 'element';
						
						if ( i>=15 && i<=25 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=60 && i<=70 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=105 && i<=115 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=135 && i<=145 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=165 && i<=175 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=180 && i<=190 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=210 && i<=220 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=225 && i<=235 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=255 && i<=265 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=285 && i<=295 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=330 && i<=340 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}else if ( i>=375 && i<=385 ){
							element.style.backgroundColor = 'rgba(0,127,127,127)';
						}
						else{
							element.style.backgroundColor = 'rgba(127,127,127,127)';
							}
							
					var number = document.createElement( 'div' );
					number.className = 'number';
					number.textContent = (i/5) + 1;
					//element
					element.appendChild( number );

					var symbol = document.createElement( 'div' );
					symbol.className = 'symbol';
					symbol.textContent = table[ i ];
					//element
					element.appendChild( symbol );

					var details = document.createElement( 'div' );
					details.className = 'details';
					details.innerHTML = table[ i + 1 ] + '<br>' + table[ i + 2 ];
					//element
					element.appendChild( details );
				
				//create object
					//object
					var object = new THREE.CSS3DObject( element );
					object.position.x = Math.random() * 4000 - 2000;
					object.position.y = Math.random() * 4000 - 2000;
					object.position.z = Math.random() * 4000 - 2000;
					
				//add to scene
					scene.add( object );

					
					objects.push( object );
					//

					var object = new THREE.Object3D();
					object.position.x = ( table[ i + 3 ] * 140 ) - 1330;
					
					object.position.y = - ( table[ i + 4 ] * 180 ) + 990;
					object.position.z = -100 ;
					object.rotation.y = -Math.PI ;
					targets.table.push( object );

				}
		
				// helix

				var vector = new THREE.Vector3();

				for ( var i = 0, l = objects.length; i < l; i ++ ) {

					var phi = i * 0.175 + Math.PI;

					var object = new THREE.Object3D();

					object.position.x = 900 * Math.sin( phi );
					object.position.y = - ( i * 8 ) + 450;
					object.position.z = 900 * Math.cos( phi );

					vector.x = object.position.x * 2;
					vector.y = object.position.y;
					vector.z = object.position.z * 2;

					object.lookAt( vector );

					targets.helix.push( object );

				}

				//

				renderer = new THREE.CSS3DRenderer();
				renderer.setSize( 600, 600 );
				renderer.domElement.style.position = 'absolute';
				document.getElementById( 'container' ).appendChild( renderer.domElement );

				//

				controls = new THREE.TrackballControls( camera, renderer.domElement );
				controls.rotateSpeed = 1;
				controls.minDistance = 500;
				controls.maxDistance = 6000;
				controls.addEventListener( 'change', render );

				var button = document.getElementById( 'table' );
				button.addEventListener( 'click', function ( event ) {

					transform( targets.table, 2000 );
					
					camera = new THREE.PerspectiveCamera( 40, 600 / 600, 1, 10000 );
					camera.position.z = 3000;
					
					//
					controls = new THREE.TrackballControls( camera, renderer.domElement );
					controls.rotateSpeed = 2;
					controls.minDistance = 500;
					controls.maxDistance = 6000;
					controls.addEventListener( 'change', render );

				}, false );

				var button = document.getElementById( 'helix' );
				button.addEventListener( 'click', function ( event ) {

					transform( targets.helix, 2000 );

				}, false );


				transform( targets.table, 2000 );

				//

				window.addEventListener( 'resize', onWindowResize, false );

			}

			function transform( targets, duration ) {

				TWEEN.removeAll();

				for ( var i = 0; i < objects.length; i ++ ) {

					var object = objects[ i ];
					var target = targets[ i ];

					new TWEEN.Tween( object.position )
						.to( { x: target.position.x, y: target.position.y, z: target.position.z }, Math.random() * duration + duration )
						.easing( TWEEN.Easing.Exponential.InOut )
						.start();

					new TWEEN.Tween( object.rotation )
						.to( { x: target.rotation.x, y: target.rotation.y, z: target.rotation.z }, Math.random() * duration + duration )
						.easing( TWEEN.Easing.Exponential.InOut )
						.start();

				}

				new TWEEN.Tween( this )
					.to( {}, duration * 2 )
					.onUpdate( render )
					.start();

			}

			function onWindowResize() {

				camera.aspect = 600 / 600;
				camera.updateProjectionMatrix();

				renderer.setSize( 600, 600 );

				render();

			}

			function animate() {

				requestAnimationFrame( animate );

				TWEEN.update();

				controls.update();

			}

			function render() {

				renderer.render( scene, camera );

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
					<b><font style="font-size:1.2em;color:green;">Math Games >> Sudoku 3D:</font></b><br>
					<p>
					<b>Objective :</b> Showing how to code a basic Soduku in 3D.
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
					
<h2><center>Sudoku 3D</center></h2>


<center><div id="container" style = "width:600px;height:600px;border :1px solid white"></div></center>

	<br>
	<div id="menusudoku">
		<button id="table">TABLE</button>
		<button id="helix">HELIX</button>
	</div><br>
	<div style="text-align:center"><b>Big Thank to Three JS</b></div>
	<script>init();animate();</script>
	<br>

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
		
</html>

