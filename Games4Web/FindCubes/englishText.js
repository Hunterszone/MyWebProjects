var line = prompt("Guess the number of cubes Sally needs: ");
var text;
var msg = new SpeechSynthesisUtterance();

if(line < 0){
	msg.lang = 'en-GB';
	msg.text = "Attention: Negative number!";
	speechSynthesis.speak(msg);
}

else if(line == 0){
	msg.lang = 'en-GB';
	msg.text = "Attention: The number is zero!";
	speechSynthesis.speak(msg);
}

else if(line == 1){
	msg.lang = 'en-GB';
	msg.text = "Insufficient! Sally has only " + lines.length + " cube.";
	speechSynthesis.speak(msg);
}

else if(line == 2){
	msg.lang = 'en-GB';
	msg.text = "Insufficient! Sally has only " + lines.length + " cube.";
	speechSynthesis.speak(msg);
}

else if(line == 3){
	msg.lang = 'en-GB';
	msg.text = "Sally thinks you are now close...";
	speechSynthesis.speak(msg);
}

else if(isNaN(line)){
	msg.lang = 'en-GB';
	msg.text = "Attention! This is not a number!";
	speechSynthesis.speak(msg);
}

else if(line > 3){
	msg.lang = 'en-GB';
	msg.text = "Wrong number! Now we have " + line + " cubes!";
	speechSynthesis.speak(msg);
}


else if(line == null){
	msg.text = "Operation cancelled by user!";
}


else if(line != null){
	
	text = "The entered value is: " + line;
	document.write('<div style="display: none;" id="hiddenText" class="assistant">Voice Assistant</div>' + text);
	document.write("<br>");
}

else{
	
	text = "Operation cancelled by user!";
	document.write('<div style="display: none;" id="hiddenText" class="assistant">Voice Assistant</div>' + text);

}

switch(line){
  
  case "1":
    lines = [];
    lines.push('<img src="http://www.picgifs.com/graphics/r/rubiks-cube/animaatjes-rubiks-cube-7217468.gif" height="55" width="55"/>');
	document.write("Cubes: " + lines);
    document.write("<br>");
    text = "Insufficient! Sally has only " + lines.length + " cube.";
    document.write('<div style="display: none;" id="hiddenText" class="assistant">Voice Assistant</div>' + text);
    break;
    
    case "2":
		lines = [];
		document.write("Cubes: " + lines);
		
		do{
      
			lines.push('<img src="http://www.picgifs.com/graphics/r/rubiks-cube/animaatjes-rubiks-cube-7217468.gif" height="55" width="55"/>');
			document.write(lines[0]);
	  
		}

		while(lines.length < 2);
    
		document.write("<br>");
		text = "Insufficient! Sally has only " + lines.length + " cubes.";
		document.write('<div style="display: none;" id="hiddenText" class="assistant">Voice Assistant</div>' + text);
		break;
    
    case "3":
      lines = [];
  	  document.write("Cubes: " + lines);
      
      do{
      
        lines.push('<img src="http://www.picgifs.com/graphics/r/rubiks-cube/animaatjes-rubiks-cube-7217468.gif" height="55" width="55"/>');
        document.write(lines[0]);
      }
    
      while(lines.length < 3);
	  
	  document.write("<br>");    
	  if(lines.length == 3)
        text = "Sally thinks you are now close...";
        document.write('<div style="display: none;" id="hiddenText" class="assistant">Voice Assistant</div>' + text);
		break;

    default:
		lines = [];
		document.write("Cubes: ");
		document.write("<br>");
		if(line != 0 && line > 0 && !isNaN(line)){
		
			do{
				lines.push('<img src="http://www.picgifs.com/graphics/r/rubiks-cube/animaatjes-rubiks-cube-7217468.gif" height="55" width="55"/>');
				document.write(lines[0]);
			}	
			while(lines.length < line);
		 
		}
	  
		else{
		
			document.write("The entered value is ZERO or NaN or NEGATIVE!");
			if(line == 0){
				
				document.write("<br>");
				document.write("<br>");
				text = "Attention: The number is zero!"
				document.write('<div style="display: none;" id="hiddenText" class="assistant">Voice Assistant</div>' + text);

			}
			
			if(line < 0){
				
				document.write("<br>");
				document.write("<br>");
				text = "Attention: Negative number!"
				document.write('<div style="display: none;" id="hiddenText" class="assistant">Voice Assistant</div>' + text);

			}
			
			if(isNaN(line)){
				
				document.write("<br>");
				document.write("<br>");
				text = "Attention: This is not a number!";
				document.write('<div style="display: none;" id="hiddenText" class="assistant">Voice Assistant</div>' + text);

			}
			
		}	
	  
		document.write("<br>");
		document.write("<br>");
		text = "Wrong number! Now we have " + line + " cubes!";
		document.write('<div style="display: none;" id="hiddenText" class="assistant">Voice Assistant: </div>' + text);
	  
     
}