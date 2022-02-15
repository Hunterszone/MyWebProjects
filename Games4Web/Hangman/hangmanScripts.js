var attempt = 0;
var secretText = "decadence";
var request = new XMLHttpRequest()
var data;
var partOfSp = "noun";
var wordDefinition = "Moral or cultural decline as characterized by excessive indulgence in pleasure or luxury.";
var wordSynonyms = "";
var parsedWord;
var meanings;
var definitions;

function parseRandWord() {

    request.open('GET', 'https://random-word-api.herokuapp.com/word', true)
    request.onload = function() {
        // Begin accessing JSON data here
        data = JSON.parse(this.response)

        if (request.status >= 200 && request.status < 400) {
            secretText = data[0];
			parseWordAttributes();
        } else {
            console.log('error')
        }
    }

    request.send()
	
	return secretText;
}

function parseWordAttributes() {
	
	if (request.status >= 200 && request.status < 400) {
		
		parsedWord = "https://api.dictionaryapi.dev/api/v2/entries/en/" + secretText;		
		
		request.open('GET', parsedWord, true)
		
		request.onload = function() {
			// Begin accessing JSON data here
			data = JSON.parse(this.response)
			meanings = data[0].meanings[0];
			definitions = data[0].meanings[0].definitions[0];
			
			if(typeof meanings !== 'undefined' ||
			   typeof definitions !== 'undefined') {
				wordDefinition = data[0].meanings[0].definitions[0].definition;
				wordSynonyms = data[0].meanings[0].definitions[0].synonyms.join();
				partOfSp = data[0].meanings[0].partOfSpeech;
			} else {
				wordDefinition = "Definition is missing!";
				wordSynonyms = "SYNONYMS INFO IS MISSING!";
				partOfSp = "Part of speech info is missing!";
			}
			console.log(data[0]);
		} 
		
		request.send()
		
	} else {
		wordDefinition = "Definition is missing!";
		partOfSp = "Part of speech info is missing!";
		wordSynonyms = "SYNONYMS INFO IS MISSING!";
		console.log('error')
	}
	
	return wordDefinition.toUpperCase() + " \nPart of speech: " + partOfSp.toUpperCase() + "!" + " \nSynonyms: " + wordSynonyms;
}

function generateSecret() {

	attempt = 0;
	
	parseRandWord();
	
    alert("New word was generated!");
}

function gameTwo() {
		
    document.open();
		
	console.log("Secret: " + secretText);

	var word = prompt("Enter a suggestion: ");

    var wordToLower = word.toLowerCase();

    var stack = [];

    var wordAsterisks = [];

	var counter = -1;

    var low = secretText.toLowerCase();

    for (i = 0; i < secretText.length; i++) {
        wordAsterisks[i] = '*';
    }

    if (isNaN(wordToLower)) {

        document.write('<font color="yellow" size="4"><center><b>Your suggestion is: </b></center></font>' + '<font color="cyan" size="4"><center><b>' + wordToLower.toUpperCase() + '</b></center></font>');		

		document.write("<br>");

		document.write('<style>body{background-size: 100%;}</style>');

		document.write('<body background="images/hangman2.jpg" />');
		
		document.write('<style>.nice {background-color: #03AD07;border-style: solid;border-color: black;color: white;padding: 12px 24px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 6px;cursor: pointer;width: 190px;height: 50px;)</style>');
		
		document.write('<center><button class="nice" id="plays" onclick="gameTwo();">Play again?</button><button class="nice" id="plays2" onclick="hintword();">Hint</button><button class="nice" id="plays3" onclick="console.log(generateSecret());">Generator</button></center>');
		
		document.write('<br><center><textarea readonly id="hintWord" name="hintWord" rows="10" cols="50">Hints will be displayed here</textarea></center><br>');

        for (i = 0; i < wordToLower.length; i++) {

            counter++;

            stack = low[i];

            if (wordToLower[i] == low[i]) {

                wordAsterisks[i] = wordToLower[i];

                var wordAsterisksToLower = wordAsterisks.join(',').replace(/,/g, '').split();

            }

        }
		
		document.write('<p><font color="yellow" size="4"><center><b>Following letters match: </b></center></font></p>');

		document.write("\n\n");

		document.write('<p><font color="cyan" size="4"><center><b>' + wordAsterisksToLower.map(function(x) {
			return x.toUpperCase()
		}) + '</b></center></font></p>');

        if (wordToLower == low) {
			
			document.write('<audio id="celebrateSound" src="sounds/victory.wav" preload="auto"></audio>');
      
			var sound = document.getElementById("celebrateSound");
			sound.play();
			perfectMatch();
			
            document.write('<font color="yellow" size="4"><center><b>\nA PERFECT MATCH! YOU WON!</b></center></font>');
        }
		
    } else {
		
        document.write('<font color="yellow" size="4"><center><br><br><b>Looking for a word...</b></center></font>');
		
		document.write("<br>");

		document.write('<style>body{background-size: 100%;}</style>');

		document.write('<body background="images/hangman2.jpg" />');
		
		document.write('<style>.nice {background-color: #03AD07;border-style: solid;border-color: black;color: white;padding: 12px 24px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 6px;cursor: pointer;width: 190px;height: 50px;)</style>');
		
		document.write('<center><button id="plays" class="nice" onclick="gameTwo();">Play again?</button><button class="nice" id="plays2" onclick="hintword();">Hint</button><button class="nice" id="plays3" onclick="console.log(generateSecret());">Generator</button></center>');
		
		document.write('<br><center><textarea readonly id="hintWord" name="hintWord" rows="10" cols="50">Hints will be displayed here</textarea></center><br>');
    }

}

function hintWordOne() {

    var msg = new SpeechSynthesisUtterance();

    msg.text = "Hint number one!";

    msg.lang = 'en-GB';

    speechSynthesis.speak(msg);
}

function hintWordTwo() {
    
	var msg = new SpeechSynthesisUtterance();

    msg.text = "Hint number two!";

    msg.lang = 'en-GB';

    speechSynthesis.speak(msg);
}

function hintWordThree() {
    
	var msg = new SpeechSynthesisUtterance();

    msg.text = "Hint number three!";

    msg.lang = 'en-GB';

    speechSynthesis.speak(msg);
}

function perfectMatch() {
    
	var msg = new SpeechSynthesisUtterance();

    msg.text = "Congratulations! The word is " + secretText;

    msg.lang = 'en-GB';

    speechSynthesis.speak(msg);

}

function gameOver() {
	
    var msg = new SpeechSynthesisUtterance();

    msg.text = "You lost! Game over!";

    msg.lang = 'en-GB';

    speechSynthesis.speak(msg);

}

function hintword() {

    if (attempt == 0) {

        hintWordOne();
		
		var msg1 = "The word has " + secretText.length + " letters."
			
		document.getElementById('hintWord').innerHTML = "Hint 1: " + msg1;

    }

    if (attempt == 1) {
		
		hintWordTwo();
		
		var vowelsCounter = 0;
		var vowels = ["a", "o", "u", "e", "i"];
		
		for(i = 0; i < secretText.length; i++) {
			if(vowels.includes(secretText[i])) {
				vowelsCounter++;
			}
		}
		
		var msg2 = "The word has " + vowelsCounter + " vowels."
		
		document.getElementById('hintWord').innerHTML = "Hint 2: " + msg2;
        
    }

    if (attempt == 2) {
        
		hintWordThree();
		
		var firstLetter = secretText[0];
		var lastLetter = secretText[secretText.length-1];
				
		var msg3 = "The first letter is " + firstLetter.toUpperCase() + 
				   " and the last letter is " + lastLetter.toUpperCase() + 
				   ". \nDefinition: " + parseWordAttributes() + "! Could be plural or 3rd person.";
		
		document.getElementById('hintWord').innerHTML = "Hint 3: " + msg3;
    }

    if (attempt == 3) {
		
		gameOver();
		
		document.location.reload();
    }
	
	document.write('<style>body{background-size: 100%;}</style>');

    document.write('<body background="images/hangman2.jpg" />');
	
    document.write('<style>.nice {background-color: #03AD07;border-style: solid;border-color: black;color: white;padding: 12px 24px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 6px;cursor: pointer;width: 190px;height: 50px;)</style>');

	attempt++;
}