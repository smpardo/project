	var string;
	var finger;
	var text;
    var audio = new Audio();
    
	function changeChord() {

		//first reset the fretboard so all strings and fingers are cleared
		resetFretboard();

		//get the chord selected from the list
	  	var chordName = document.getElementById("chordList").value;

		//now check against the chords we are expecting and find a match
	  	if (chordName == 'Open A'){
			//now grab each of the strings that are not to be played and place Xs
			//we are just toggling the invisibility
	       	string = document.getElementById("xlowE");	
       		string.setAttributeNS(null, 'visibility', 'visible');

			//then grab each string to be played open and place the Os
			//we are just toggling the invisibility
	       	string = document.getElementById("a");	
       		string.setAttributeNS(null, 'visibility', 'visible');
	       	string = document.getElementById("highE");	
       		string.setAttributeNS(null, 'visibility', 'visible');		       								

			//then put the fingers where they need to go
			//we need to  toggle the invisibility, and move it to the right spot
	       	finger = document.getElementById("finger1");	
	       	finger.setAttributeNS(null, 'cx', 125);
	       	finger.setAttributeNS(null, 'cy', 170);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       	
	       	finger = document.getElementById("finger2");	
	       	finger.setAttributeNS(null, 'cx', 175);
	       	finger.setAttributeNS(null, 'cy', 170);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       							
	       	finger = document.getElementById("finger3");	
	       	finger.setAttributeNS(null, 'cx', 225);
	       	finger.setAttributeNS(null, 'cy', 170);
	       	finger.setAttributeNS(null, 'visibility', 'visible');						

	       	text = document.getElementById("chordNameText");
	       	text.textContent = "A Chord";
	       	
	       	//then make some noise
	       	audio.setAttribute('src', 'media/audio/a-major-open.ogg');
	       	audio.play();

	  	}
	  	if (chordName == 'Open B'){
			//now grab each of the strings that are not to be played and place Xs
			//we are just toggling the invisibility
	       	string = document.getElementById("xlowE");	
       		string.setAttributeNS(null, 'visibility', 'visible');

	       	string = document.getElementById("xhighE");	
       		string.setAttributeNS(null, 'visibility', 'visible');
			//then grab each string to be played open and place the Os
			//we are just toggling the invisibility
   								

			//then put the fingers where they need to go
			//we need to  toggle the invisibility, and move it to the right spot
	       	finger = document.getElementById("finger1");	
	       	finger.setAttributeNS(null, 'cx', 125);
	       	finger.setAttributeNS(null, 'cy', 270);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       	
	       	finger = document.getElementById("finger2");	
	       	finger.setAttributeNS(null, 'cx', 175);
	       	finger.setAttributeNS(null, 'cy', 270);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       							
	       	finger = document.getElementById("finger3");	
	       	finger.setAttributeNS(null, 'cx', 225);
	       	finger.setAttributeNS(null, 'cy', 270);
	       	finger.setAttributeNS(null, 'visibility', 'visible');	

	       	finger = document.getElementById("finger4");	
	       	finger.setAttributeNS(null, 'cx', 75);
	       	finger.setAttributeNS(null, 'cy', 170);
	       	finger.setAttributeNS(null, 'visibility', 'visible');

	       	text = document.getElementById("chordNameText");
	       	text.textContent = "B Chord";			       	

	       	//then make some noise
	       	audio.setAttribute('src', 'media/audio/b-major-bar.ogg');
	       	audio.play();
	  	}
	  	if (chordName == 'Open C'){
			//now grab each of the strings that are not to be played and place Xs
			//we are just toggling the invisibility
	  		string = document.getElementById("xlowE");	
       		string.setAttributeNS(null, 'visibility', 'visible');

			//then grab each string to be played open and place the Os
			//we are just toggling the invisibility
	       	string = document.getElementById("g");	
       		string.setAttributeNS(null, 'visibility', 'visible');

	       	string = document.getElementById("highE");	
       		string.setAttributeNS(null, 'visibility', 'visible');	

       		//then put the fingers where they need to go
			//we need to  toggle the invisibility, and move it to the right spot
	       	finger = document.getElementById("finger1");	
	       	finger.setAttributeNS(null, 'cx', 75);
	       	finger.setAttributeNS(null, 'cy', 220);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       	
	       	finger = document.getElementById("finger2");	
	       	finger.setAttributeNS(null, 'cx', 125);
	       	finger.setAttributeNS(null, 'cy', 170);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       							
	       	finger = document.getElementById("finger3");	
	       	finger.setAttributeNS(null, 'cx', 225);
	       	finger.setAttributeNS(null, 'cy', 120);
	       	finger.setAttributeNS(null, 'visibility', 'visible');	

	       	text = document.getElementById("chordNameText");
	       	text.textContent = "C Chord";	

	       	//then make some noise
	       	audio.setAttribute('src', 'media/audio/c-major-open.ogg');
	       	audio.play();		  		
	  	}
	  	if (chordName == 'Open D'){
			//now grab each of the strings that are not to be played and place Xs
			//we are just toggling the invisibility
	  		string = document.getElementById("xlowE");	
       		string.setAttributeNS(null, 'visibility', 'visible');

	  		string = document.getElementById("xa");	
       		string.setAttributeNS(null, 'visibility', 'visible');

			//then grab each string to be played open and place the Os
			//we are just toggling the invisibility
	       	string = document.getElementById("d");	
       		string.setAttributeNS(null, 'visibility', 'visible');
       		
       		//then put the fingers where they need to go
			//we need to  toggle the invisibility, and move it to the right spot	
	       	finger = document.getElementById("finger1");	
	       	finger.setAttributeNS(null, 'cx', 175);
	       	finger.setAttributeNS(null, 'cy', 170);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       	
	       	finger = document.getElementById("finger2");	
	       	finger.setAttributeNS(null, 'cx', 225);
	       	finger.setAttributeNS(null, 'cy', 220);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       							
	       	finger = document.getElementById("finger3");	
	       	finger.setAttributeNS(null, 'cx', 275);
	       	finger.setAttributeNS(null, 'cy', 170);
	       	finger.setAttributeNS(null, 'visibility', 'visible');				  		

	       	text = document.getElementById("chordNameText");
	       	text.textContent = "D Chord";		

	       	//then make some noise
	       	audio.setAttribute('src', 'media/audio/d-major-open.ogg');
	       	audio.play();		       
	   	}

	  	if (chordName == 'Open E'){
			//grab each string to be played open and place the Os
			//we are just toggling the invisibility
	       	string = document.getElementById("lowE");	
       		string.setAttributeNS(null, 'visibility', 'visible');

	       	string = document.getElementById("b");	
       		string.setAttributeNS(null, 'visibility', 'visible');

	       	string = document.getElementById("highE");	
       		string.setAttributeNS(null, 'visibility', 'visible');		       		

       		//then put the fingers where they need to go
			//we need to  toggle the invisibility, and move it to the right spot	
	       	finger = document.getElementById("finger1");	
	       	finger.setAttributeNS(null, 'cx', 75);
	       	finger.setAttributeNS(null, 'cy', 170);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       	
	       	finger = document.getElementById("finger2");	
	       	finger.setAttributeNS(null, 'cx', 125);
	       	finger.setAttributeNS(null, 'cy', 170);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       							
	       	finger = document.getElementById("finger3");	
	       	finger.setAttributeNS(null, 'cx', 175);
	       	finger.setAttributeNS(null, 'cy', 120);
	       	finger.setAttributeNS(null, 'visibility', 'visible');

	       	text = document.getElementById("chordNameText");
	       	text.textContent = "E Chord";				       	

	       	//then make some noise
	       	audio.setAttribute('src', 'media/audio/e-major-open.ogg');
	       	audio.play();
	  	}
	  	if (chordName == 'Open F'){
			//now grab each of the strings that are not to be played and place Xs
			//we are just toggling the invisibility
	  		string = document.getElementById("xlowE");	
       		string.setAttributeNS(null, 'visibility', 'visible');

	  		string = document.getElementById("xa");	
       		string.setAttributeNS(null, 'visibility', 'visible');

       		//then put the fingers where they need to go
			//we need to  toggle the invisibility, and move it to the right spot	
	       	finger = document.getElementById("finger1");	
	       	finger.setAttributeNS(null, 'cx', 125);
	       	finger.setAttributeNS(null, 'cy', 220);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       	
	       	finger = document.getElementById("finger2");	
	       	finger.setAttributeNS(null, 'cx', 175);
	       	finger.setAttributeNS(null, 'cy', 170);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       							
	       	finger = document.getElementById("finger3");	
	       	finger.setAttributeNS(null, 'cx', 225);
	       	finger.setAttributeNS(null, 'cy', 120);
	       	finger.setAttributeNS(null, 'visibility', 'visible');	

	       	finger = document.getElementById("finger4");	
	       	finger.setAttributeNS(null, 'cx', 275);
	       	finger.setAttributeNS(null, 'cy', 120);
	       	finger.setAttributeNS(null, 'visibility', 'visible');

	       	text = document.getElementById("chordNameText");
	       	text.textContent = "F Chord";	

	       	//then make some noise
	       	audio.setAttribute('src', 'media/audio/f-major-bar.ogg');
	       	audio.play();
		 }
	  	if (chordName == 'Open G'){
			//grab each string to be played open and place the Os
			//we are just toggling the invisibility
	       	string = document.getElementById("d");	
       		string.setAttributeNS(null, 'visibility', 'visible');

	       	string = document.getElementById("g");	
       		string.setAttributeNS(null, 'visibility', 'visible');

	       	string = document.getElementById("b");	
       		string.setAttributeNS(null, 'visibility', 'visible');
       		//then put the fingers where they need to go
			//we need to  toggle the invisibility, and move it to the right spot	
	       	finger = document.getElementById("finger1");	
	       	finger.setAttributeNS(null, 'cx', 25);
	       	finger.setAttributeNS(null, 'cy', 220);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       	
	       	finger = document.getElementById("finger2");	
	       	finger.setAttributeNS(null, 'cx', 75);
	       	finger.setAttributeNS(null, 'cy', 170);
	       	finger.setAttributeNS(null, 'visibility', 'visible');
	       							
	       	finger = document.getElementById("finger3");	
	       	finger.setAttributeNS(null, 'cx', 275);
	       	finger.setAttributeNS(null, 'cy', 220);
	       	finger.setAttributeNS(null, 'visibility', 'visible');

	       	text = document.getElementById("chordNameText");
	       	text.textContent = "G Chord";	
	       	//then make some noise
	       	audio.setAttribute('src', 'media/audio/g-major-open.ogg');
	       	audio.play();
		}
	  	if (chordName == ''){
	  		alert("Please select a chord from the list and click again.");
	  	}
	}		

	function resetFretboard() {
		//toggle all of the Open strings, unplayed strings and fingers to invisible
       	string = document.getElementById("xlowE");	
   		string.setAttributeNS(null, 'visibility', 'hidden');
       	string = document.getElementById("xa");	
   		string.setAttributeNS(null, 'visibility', 'hidden');
       	string = document.getElementById("xd");	
   		string.setAttributeNS(null, 'visibility', 'hidden');
       	string = document.getElementById("xg");	
   		string.setAttributeNS(null, 'visibility', 'hidden');
       	string = document.getElementById("xb");	
   		string.setAttributeNS(null, 'visibility', 'hidden');
       	string = document.getElementById("xhighE");	
   		string.setAttributeNS(null, 'visibility', 'hidden');
   		
       	string = document.getElementById("lowE");	
   		string.setAttributeNS(null, 'visibility', 'hidden');
       	string = document.getElementById("a");	
   		string.setAttributeNS(null, 'visibility', 'hidden');
       	string = document.getElementById("d");	
   		string.setAttributeNS(null, 'visibility', 'hidden');
       	string = document.getElementById("g");	
   		string.setAttributeNS(null, 'visibility', 'hidden');
       	string = document.getElementById("b");	
   		string.setAttributeNS(null, 'visibility', 'hidden');
       	string = document.getElementById("highE");	
   		string.setAttributeNS(null, 'visibility', 'hidden');

       	finger = document.getElementById("finger1");	
       	finger.setAttributeNS(null, 'cx', 0);
       	finger.setAttributeNS(null, 'cy', 0);
       	finger.setAttributeNS(null, 'visibility', 'hidden');

       	finger = document.getElementById("finger2");	
       	finger.setAttributeNS(null, 'cx', 0);
       	finger.setAttributeNS(null, 'cy', 0);
       	finger.setAttributeNS(null, 'visibility', 'hidden');

       	finger = document.getElementById("finger3");	
       	finger.setAttributeNS(null, 'cx', 0);
       	finger.setAttributeNS(null, 'cy', 0);
       	finger.setAttributeNS(null, 'visibility', 'hidden');

       	finger = document.getElementById("finger4");	
       	finger.setAttributeNS(null, 'cx', 0);
       	finger.setAttributeNS(null, 'cy', 0);
       	finger.setAttributeNS(null, 'visibility', 'hidden');	       					

       	text = document.getElementById("chordNameText");
       	text.textContent = "";	
       	
	}