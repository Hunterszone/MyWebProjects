var text;


if(line != null){
	
	text = "Der angegebene Wert ist: " + line;
	document.write('<div style="display: none;" id="hiddenText1" class="assistant">Sprachassistent</div>' + text);
	document.write("<br>");
}

else{
	
	text = "Operation wurde vom Benutzer abgebrochen!";
	document.write('<div style="display: none;" id="hiddenText1" class="assistant">Sprachassistent</div>' + text);

}

switch(line){
  
  case "1":
    lines = [];
    lines.push('<img src="http://www.picgifs.com/graphics/r/rubiks-cube/animaatjes-rubiks-cube-7217468.gif" height="55" width="55"/>');
	document.write("Kuben: " + lines);
    document.write("<br>");
    text = "Ungenug! Sally hat nur " + lines.length + " Kuben.";
    document.write('<div style="display: none;" id="hiddenText1" class="assistant">Sprachassistent</div>' + text);
    break;
    
    case "2":
		lines = [];
		document.write("Kuben: " + lines);
		
		do{
      
			lines.push('<img src="http://www.picgifs.com/graphics/r/rubiks-cube/animaatjes-rubiks-cube-7217468.gif" height="55" width="55"/>');
			document.write(lines[0]);
	  
		}

		while(lines.length < 2);
    
		document.write("<br>");
		text = "Ungenug! Sally hat nur " + lines.length + " Kuben.";
		document.write('<div style="display: none;" id="hiddenText1" class="assistant">Sprachassistent</div>' + text);
		break;
    
    case "3":
      lines = [];
  	  document.write("Kuben: " + lines);
      
      do{
      
        lines.push('<img src="http://www.picgifs.com/graphics/r/rubiks-cube/animaatjes-rubiks-cube-7217468.gif" height="55" width="55"/>');
        document.write(lines[0]);
      }
    
      while(lines.length < 3);
	  
	  document.write("<br>");    
	  if(lines.length == 3)
        text = "Sally glaubt du bist jetzt näher...";
		document.write('<div style="display: none;" id="hiddenText1" class="assistant">Sprachassistent</div>' + text);
		break;

    default:
		lines = [];
		document.write("Kuben: ");
		document.write("<br>");
		if(line != 0 && line > 0 && !isNaN(line)){
		
			do{
				lines.push('<img src="http://www.picgifs.com/graphics/r/rubiks-cube/animaatjes-rubiks-cube-7217468.gif" height="55" width="55"/>');
				document.write(lines[0]);
			}	

			while(lines.length < line);
		
		 
		}
	  
		else{
		
			document.write("Der angegebene Wert ist NULL oder NaN oder NEGATIV!");
			if(line == 0){
				
				document.write("<br>");
				document.write("<br>");
				text = "Achtung: Der angegebene Wert ist null!"
				document.write('<div style="display: none;" id="hiddenText1" class="assistant">Sprachassistent</div>' + text);
			}
			
			if(line < 0){
				
				document.write("<br>");
				document.write("<br>");
				text = "Achtung: Negative Nummer!"
				document.write('<div style="display: none;" id="hiddenText1" class="assistant">Sprachassistent</div>' + text);

			}
			
			if(isNaN(line)){
				
				document.write("<br>");
				document.write("<br>");
				text = "Achtung: Das ist keine Nummer!";
				document.write('<div style="display: none;" id="hiddenText1" class="assistant">Sprachassistent</div>' + text);

			}
			
		}	
	  
		document.write("<br>");
		document.write("<br>");
		text = "Unstimmigkeit! Die angegebene Nummer ist nicht akzeptabel! Jetzt haben wir " + line + " Kuben!";
		document.write('<div style="display: none;" id="hiddenText" class="assistant">Sprachassistent</div>' + text);

	  
     
}

	


	 
		
