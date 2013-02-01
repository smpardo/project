<?php require_once('util/main.php'); ?>
<!DOCTYPE html>

<html lang="en">
<head>
	<head>
		<meta charset="utf-8" />
		<title>Mystic Rhythms</title>
		<link rel="shortcut icon" href="images/mr_icon.ico" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/nav.css" />
 		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
		<script src="js/chord_book.js"></script>

		
		<style>
			#title {
				font-family: times new roman;
				font-weight: bold;
				font-style: italic;
				color: rgb(0, 108, 186);
			}	

			#svgContainer{
				width: 700px;
				margin: 0 auto;
				clear: both;
			}
			
			svg	{
				border: 2px solid rgb(0, 108, 186);
       			border-radius: 0px 5px 5px 0px;	
       			no-repeat;
			}
		
			#chordControl{
				width: 200px;
				height: 450px;
				margin: 0 auto;
				border-top: 2px solid rgb(0, 108, 186);
				border-bottom: 2px solid rgb(0, 108, 186);
				border-left: 2px solid rgb(0, 108, 186);
				border-radius: 5px 0px 0px 5px;	
				float: left;
			}
		
			button{
				background-color: rgb(0, 108, 186);
				border-radius: 5px 5px 5px 5px;	
				font-size: 115%;
				font-weight: bold;
				color: white;	
				margin: auto;		
			}
			
			#chordList{
							font-size: 115%;	
			}
		</style>	
		


	</head>
	<body>	
	<div id="wrapper">
		<?php include 'view/header.php'; ?>
		
		<div id="container">
			<div id="centerContentSingle">				
				<h2 id="title">Mystic Rhythms Chord Book</h2>
				
				<div id="svgContainer">
					<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="400" height="450" viewBox="0 0 400 450">

						<!-- open/unplayed strings -->
						<text id="lowE" x='20' y='75' fill='black' font-size='16' visibility='hidden'>O</text>
						<text id="a" x='70' y='75' fill='black' font-size='16' visibility='hidden'>O</text>
						<text id="d" x='120' y='75' fill='black' font-size='16' visibility='hidden'>O</text>
						<text id="g" x='170' y='75' fill='black' font-size='16' visibility='hidden'>O</text>
						<text id="b" x='220' y='75' fill='black' font-size='16' visibility='hidden'>O</text>
						<text id="highE" x='270' y='75' fill='black' font-size='16' visibility='hidden'>O</text>
						<text id="xlowE" x='20' y='75' fill='black' font-size='16' visibility='hidden'>X</text>
						<text id="xa" x='70' y='75' fill='black' font-size='16' visibility='hidden'>X</text>
						<text id="xd" x='120' y='75' fill='black' font-size='16' visibility='hidden'>X</text>
						<text id="xg" x='170' y='75' fill='black' font-size='16' visibility='hidden'>X</text>
						<text id="xb" x='220' y='75' fill='black' font-size='16' visibility='hidden'>X</text>
						<text id="xhighE" x='270' y='75' fill='black' font-size='16' visibility='hidden'>X</text>
	
						<!-- Fretboard -->
						<rect x="20" y="95" width="260" height="250" style="stroke: black; fill: #8B4513;" />
	
						<!-- Nut - Zero Fret -->
						<rect x="20" y="85" width="260" height="20" style="stroke: black; fill: #FFFFFF;" />
	
						<!-- Frets -->
						<line x1='20' y1='145' x2='280' y2='145' style='stroke:rgb(0,0,0);stroke-width:3.0' />
						<line x1='20' y1='195' x2='280' y2='195' style='stroke:rgb(0,0,0);stroke-width:3.0' />
						<line x1='20' y1='245' x2='280' y2='245' style='stroke:rgb(0,0,0);stroke-width:3.0' />
						<line x1='20' y1='295' x2='280' y2='295' style='stroke:rgb(0,0,0);stroke-width:3.0' />
						<line x1='20' y1='345' x2='280' y2='345' style='stroke:rgb(0,0,0);stroke-width:3.0' />
	
						<!-- Strings -->
						<line x1='25'  y1='85' x2='25'  y2='345' style='stroke:rgb(0,0,0);stroke-width:1.0' />
						<line x1='75'  y1='85' x2='75'  y2='345' style='stroke:rgb(0,0,0);stroke-width:1.0' />
						<line x1='125'  y1='85' x2='125'  y2='345' style='stroke:rgb(0,0,0);stroke-width:1.0' />
						<line x1='175'  y1='85' x2='175'  y2='345' style='stroke:rgb(0,0,0);stroke-width:1.0' />
						<line x1='225'  y1='85' x2='225'  y2='345' style='stroke:rgb(0,0,0);stroke-width:1.0' />
						<line x1='275'  y1='85' x2='275'  y2='345' style='stroke:rgb(0,0,0);stroke-width:1.0' />
	
						<!-- Fret numbers -->
						<text x='300' y='95' font-size='16' fill='black' font-style='italic'>Nut</text>
						<text x='300' y='145' font-size='16' fill='black' font-style='italic'>1st Fret</text>
						<text x='300' y='195' font-size='16' fill='black' font-style='italic'>2nd Fret</text>
						<text x='300' y='245' font-size='16' fill='black' font-style='italic'>3rd Fret</text>
						<text x='300' y='295' font-size='16' fill='black' font-style='italic'>4th Fret</text>
						<text x='300' y='345' font-size='16' fill='black' font-style='italic'>5th Fret</text>
						
						<!-- String names -->
						<text x='22' y='50' font-size='16' fill='black' font-style='italic'>E</text>
						<text x='72' y='50' font-size='16' fill='black' font-style='italic'>A</text>
						<text x='122' y='50' font-size='16' fill='black' font-style='italic'>D</text>
						<text x='172' y='50' font-size='16' fill='black' font-style='italic'>G</text>
						<text x='222' y='50' font-size='16' fill='black' font-style='italic'>B</text>
						<text x='272' y='50' font-size='16' fill='black' font-style='italic'>e</text>
						
						<!-- finger positions -->
						<circle id="finger1" cx='25' cy='34' r='10' stroke='black' stroke-width='2' fill='red' visibility='hidden'/>
						<circle id="finger2" cx='55' cy='34' r='10' stroke='black' stroke-width='2' fill='red' visibility='hidden'/>
						<circle id="finger3" cx='85' cy='34' r='10' stroke='black' stroke-width='2' fill='red' visibility='hidden'/>
						<circle id="finger4" cx='115' cy='34' r='10' stroke='black' stroke-width='2' fill='red' visibility='hidden'/>
 					
						<!-- Chord Name -->
						<text id="chordNameText" x='30' y='400' font-size='48' fill='rgb(0, 108, 186)' font-style='italic'></text> 						
 					</svg>
					<div id="chordControl">
						<p>Select a chord form the list and click Show Chord to see and hear it.</p>
						<select id="chordList" name="chordList" size="7">
							<option>Open A</option>
						    <option>Open B</option>
						    <option>Open C</option>
						    <option>Open D</option>
						    <option>Open E</option>
						    <option>Open F</option>						    
						    <option>Open G</option>						    
					 	</select>
					 	<br>
						<button type="button" onclick="changeChord();">Show Chord</button>			
					
					</div>
	
	
				</div>
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>
