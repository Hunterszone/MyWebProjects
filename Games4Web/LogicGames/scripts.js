var attempt = 0;
var secretText = "decadence";
var request = new XMLHttpRequest()
var data;

function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

function parseApiData() {

    request.open('GET', 'https://random-word-api.herokuapp.com/word', true)
    request.onload = function() {
        // Begin accessing JSON data here
        data = JSON.parse(this.response)

        if (request.status >= 200 && request.status < 400) {
            secretText = data[0];
            //console.log(data[0].word)
        } else {
            console.log('error')
        }
    }

    request.send()
}

function generateSecret() {

    parseApiData();

    //alert(secretText);

    document.write('<p><font color="red" size="4"><center><b>New word was generated!</b></center></font>');

    return secretText;

}



function gameTwo() {

    document.open();

    var word = prompt("Enter a suggestion: ");

    var wordToLower = word.toLowerCase();

    console.log("Secret: " + secretText);

    var stack = [];

    var counter = -1;

    var low = secretText.toLowerCase();

    var wordAsterisks = [];

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



    var result = prompt("Please confirm your suggestion");

    if (result === null) {

        document.write('<font color="#f836bd" size="4"><center><b>SUGGESTION NOT VERIFIED!</b></center></font>');

		document.write('<style>body{background-size: 100%;}</style>');

		document.write('<body background="images/hangman.jpg" />');
		
        document.write('<style>.nice {background-color: #03AD07;border-style: solid;border-color: black;color: white;padding: 12px 24px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 6px;cursor: pointer;width: 190px;height: 50px;)</style>');

        document.write('<center><button id="plays" class="nice" onclick="gameTwo();">Play again?</button><button class="nice" id="plays2" onclick="hintword();">Hint</button><button class="nice" id="plays3" onclick="console.log(generateSecret());">Generator</button></center>');

        return;

    }



    if (result != word) {
        document.write('<font color="#f836bd" size="4"><center><br><b>CONFIRMATION FAILED!</b></center></font>');
		
		document.write('<style>body{background-size: 100%;}</style>');

        document.write('<body background="images/hangman.jpg" />');

        document.write('<style>.nice {background-color: #03AD07;border-style: solid;border-color: black;color: white;padding: 12px 24px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 6px;cursor: pointer;width: 190px;height: 50px;)</style>');

        document.write('<center><button id="plays4" class="nice" onclick="gameTwo();">Play again?</button><button class="nice" id="plays5" onclick="hintword();">Hint</button><button class="nice" id="plays6" onclick="console.log(generateSecret());">Generator</button></center>');

        return;

    }



    document.write("<br>");

	document.write('<style>body{background-size: 100%;}</style>');

	document.write('<body background="images/hangman.jpg" />');
	
    document.write('<style>.nice {background-color: #03AD07;border-style: solid;border-color: black;color: white;padding: 12px 24px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 6px;cursor: pointer;width: 190px;height: 50px;)</style>');

    document.write('<center><button id="plays" class="nice" onclick="gameTwo();">Play again?</button></center>');
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
    attempt++;

    if (attempt == 1) {

        alert("The word is oposite to PROGRESS, but not exactly..Hint attempt No. " + attempt);

        hintWordOne();
    }



    if (attempt == 2) {
        alert("When something is rolling back and could not be stopped..Hint attempt No. " + attempt);
        hintWordTwo();
    }


    if (attempt == 3) {
        alert("The German word for it is Dekadenz..Hint attempt No. " + attempt + ". No more hints!");
        hintWordThree();
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

}