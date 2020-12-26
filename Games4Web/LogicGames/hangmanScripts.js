var attempt = 0;
var secretText = "decadence";
var request = new XMLHttpRequest()
var data;
var partOfSp = "noun";
var wordDefinition = "Moral or cultural decline as characterized by excessive indulgence in pleasure or luxury.";
var wordSynonyms;
var parsedWord;
	
function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

function parseRandWord() {

    request.open('GET', 'https://random-word-api.herokuapp.com/word', true)
    request.onload = function() {
        // Begin accessing JSON data here
        data = JSON.parse(this.response)

        if (request.status >= 200 && request.status < 400) {
            secretText = data[0];
			parseWordAttributes();
            //console.log(data[0].word)
        } else {
            console.log('error')
        }
    }

    request.send()
	
	return secretText;
}

function parseWordAttributes() {
	
	if (request.status >= 200 && request.status < 400 && secretText.localeCompare("undefined") != 0) {
		
		parsedWord = "https://api.dictionaryapi.dev/api/v2/entries/en/" + secretText;		
		
		request.open('GET', parsedWord, true)
		
		request.onload = function() {
			// Begin accessing JSON data here
			data = JSON.parse(this.response)
			wordDefinition = data[0].meanings[0].definitions[0].definition;
			console.log(data[0].meanings[0].definitions[0].synonyms);
			wordSynonyms = data[0].meanings[0].definitions[0].synonyms.join();
			partOfSp = data[0].meanings[0].partOfSpeech;
			console.log(data[0]);
		} 
		request.send()
	} else {
		wordDefinition = "Definition is missing!";
		partOfSp = "Part of speech info is missing!";
		wordSynonyms = "SYNONYMS INFO IS MISSING!";
		console.log('error')
	}
	
	return wordDefinition.toUpperCase() + " Part of speech: " + partOfSp.toUpperCase() + "!" + " Synonyms: " + wordSynonyms;
}

function generateSecret() {

	attempt = 0;
	
	parseRandWord();

    //alert(secretText);
	
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

        //document.write('<font color="yellow" size="4"><center><b>The word matches the required length!</b></center></font>');

        document.write('<font color="yellow" size="4"><center><b>Your suggestion is: </b></center></font>' + '<font color="cyan" size="4"><center><b>' + wordToLower.toUpperCase() + '</b></center></font>');

        for (i = 0; i < wordToLower.length; i++) {
            //console.log(word[i])

            counter++;

            stack = low[i];

            if (wordToLower[i] == low[i]) {

                wordAsterisks[i] = wordToLower[i];

                var wordAsterisksToLower = wordAsterisks.join(',').replace(/,/g, '').split();

                document.write('<p><font color="red" size="4"><center><b> Comparisson No: </b></center></font>' + '<font color="red" size="4"><center><b>' + (counter + 1) + '</b></center></font>' + '<font color="yellow" size="4"><center><b>The following letter and position match: On position</b></center></font>' + '<font color="yellow" size="4"><center><b>' + (counter + 1) + '</b></center></font>' + '<font color="yellow" size="4"><center><b> is letter </b></center></font>' + '<font color="pink" size="4"><center><b>' + stack.toUpperCase() + '</b></center></font></p>');

                document.write("\n\n");

                document.write('<p><font color="orange" size="4"><center><b>' + wordAsterisksToLower.map(function(x) {
                    return x.toUpperCase()
                }) + '</b></center></font></p>');
            }

        }



        if (wordToLower == low) {
            document.write('<font color="orange" size="4"><center><b>\nA PERFECT MATCH! YOU WON!</b></center></font>');

            document.write('<center><table><tr><th><button class="nice" onclick="perfectMatch();">Celebrate!</button></th></tr></table></center>');
        } else {
            document.write('<font color="orange" size="4"><center><br><b>\nYOU ARE NOW CLOSER!</b></center></font>');
        }

    } else if (!isNaN(wordToLower)) {
        document.write('<font color="yellow" size="4"><center><br><br><b>Looking for a word...</b></center></font>');
    }


    document.write("<br>");

	document.write('<style>body{background-size: 100%;}</style>');

	document.write('<body background="images/hangman.jpg" />');
	
    document.write('<style>.nice {background-color: #03AD07;border-style: solid;border-color: black;color: white;padding: 12px 24px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 6px;cursor: pointer;width: 190px;height: 50px;)</style>');
	
	document.write('<center><button id="plays" class="nice" onclick="gameTwo();">Play again?</button><button class="nice" id="plays2" onclick="hintword();">Hint</button><button class="nice" id="plays3" onclick="console.log(generateSecret());">Generator</button></center>');

}



function movingButt() {
    document.getElementById("drag5").style.display = "inline-block";

    document.getElementById("drag6").style.display = "inline-block";

    document.getElementById("drag13").style.display = "inline-block";

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

    msg.text = "Congratulations! A perfect match!";

    msg.lang = 'en-GB';

    speechSynthesis.speak(msg);

}

function allowDrop(ev) {

    ev.preventDefault();

}


function drag(ev) {

    ev.dataTransfer.setData("text", ev.target.id);

}



function drop(ev) {

    ev.preventDefault();

    var data = ev.dataTransfer.getData("text");

    ev.target.appendChild(document.getElementById(data)); //IF YOU WANT DRAGnDROP TEXT-ONLY, THEN: 

    //ev.target.innerHTML+=" <p>"+document.getElementById(data).innerHTML+"</p>"; 

}




function loadPage() {

    var elem = document.getElementById("myBar");

    var width = 0;

    var id = setInterval(frame, 50);

    function frame() {

        if (width >= 100) {

            clearInterval(id);

            document.getElementById("myBar").style.display = "none";

            document.getElementById("myP").style.display = "none";

        } else {

            width++;

            elem.style.width = width + '%';

            var num = width * 1 / 1;

            num = num.toFixed(0)

            document.getElementById("demo").innerHTML = num;

        }

    }

}

function hintword() {

    if (attempt == 1) {

        hintWordOne();
		
		var msg1 = "The word has " + secretText.length + " letters."

        alert(msg1);

    }

    if (attempt == 2) {
		
		hintWordTwo();
		
		var vowelsCounter = 0;
		var vowels = ["a", "o", "u", "e", "i"];
		
		for(i = 0; i < secretText.length; i++) {
			if(vowels.includes(secretText[i])) {
				vowelsCounter++;
			}
		}
		
		var msg2 = "The word has " + vowelsCounter + " vowels."
		
        alert(msg2);
        
    }

    if (attempt == 3) {
        
		hintWordThree();
		
		var firstLetter = secretText[0];
		var lastLetter = secretText[secretText.length-1];
				
		var msg3 = "The first letter is " + firstLetter.toUpperCase() + 
				   " and the last letter is " + lastLetter.toUpperCase() + 
				   ". Definition: " + parseWordAttributes() + "! Could be plural or 3rd person.";
		
		alert(msg3);
    }

    if (attempt == 4) {
        document.write("<br>");
		
		document.write('<style>body{background-size: 100%;}</style>');

        document.write('<body background="images/hangman.jpg" />');

        document.write('<font color="yellow" size="4"><center><b>No more hints! Game over!</b></center></font>');

        document.write('<style>.nice {background-color: #03AD07;border-style: solid;border-color: black;color: white;padding: 12px 24px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 6px;cursor: pointer;width: 190px;height: 50px;)</style>');

        document.write('<center><table><tr><th><button class="nice" onclick="gameTwo();">Play again?</button></th></tr></table></center>');

        document.getElementById("plays4").style.display = "none";

        document.getElementById("plays5").style.display = "none";

        document.getElementById("plays6").style.display = "none";

        attempt = 0;
    }
	
	attempt++;
}