var rondes;
var rondeidx;
var vragen;
var vraagidx;
var antwoorden;
var scores;
var seconden;
var score1;
var score2;
var score3;
var admintools;
var currentteam;
var nrOfteamscurrentQuestion;
var timeinterval;
var tn1;
var tn2;
var tn3;
var subansweridx;
var nextQuestionAllowed;
var triggerForNieuweRonde;
var displaystyle;

function load_current(){
	document.getElementById("wrapper1").style.display = 'block';
	document.getElementById("wrapper2").style.display = 'none';
	document.getElementById("admintools").style.display = 'none'
	document.getElementById("wrapper3").style.display = 'none';
	tn1 = "1";
	tn2 = "2";
	tn3 = "3";
	admintools = false;
	//tn1 = prompt("Geef een naam op voor het eerste team!");
	//tn2 = prompt("Geef een naam op voor het tweede team!");
	//tn3 = prompt("Geef een naam op voor het derde team!");
}

function start(){
	document.getElementById("wrapper1").style.display = 'none';
	document.getElementById("wrapper2").style.display = 'block';
	document.getElementById("transparantimaget1").style.display = 'block';
	document.getElementById("transparantimaget2").style.display = 'none';
	document.getElementById("transparantimaget3").style.display = 'none';
	document.getElementById("wrapper3").style.display = 'flex';
	rondes = [];
	rondes[0] = "3 - 6 - 9"
	rondes[1] = "Wat weet je over?";
	rondes[2] = "Puzzel 3 thema's bij elkaar";
	rondes[3] = "Einde!";
	rondeidx = 0;
	triggerForNextQuestion = false;
	triggerForNieuweRonde = false;
	vragen = [[],[],[],[]];
	vragen[0][0] = "1. Waarvoor staat de eerste 'L' in UCLL?";
	vragen[0][1] = "2. Waarvan is TI de afkorting?";
	vragen[0][2] = "3. Waarvoor staat www?";
	vragen[0][3] = "4. Wat hebben Donut, Gingerbread, Jelly Bean, KitKat, Lollipop en Nougat met elkaar gemeen?";
	vragen[0][4] = "5. Hoe noemen we computers die met elkaar verbonden (evt. draadloos) zijn om te communiceren?";
	vragen[0][5] = "6. Welk van de volgende bestanden is een videobestand? appel.wav, banaan.ppt, druiven.mkv, ananas.png"
	vragen[0][6] = "7. Welk beroep zal je wellicht niet uitoefenen met je diploma TI? Webontwikkelaar, Verpleger, Netwerkbeheerder, Lesgever, Ondernemer,";
	vragen[0][7] = "8. Hoe maakt men cyber-brood?";
	vragen[0][8] = "9. Waarvan is dit het logo? <img src='images/Tux.png' height=50 title='logo'/>";
	vragen[0][9] = "10. In welk jaar werd de eerste iPhone geïntroduceerd?";
	vragen[0][10] = "11. Geen melk meer in de frigo? Automatisch nieuwe melk bestelling, dankzij?";
	vragen[0][11] = "12. Hoe heet de programmeertaal die aan koffie doet denken?";
	vragen[1][0] = "<img src='images/Zuckerberg.jpg' height=150 title='code'/>";
	vragen[1][1] = "<img src='images/algoritme3.PNG' height=150 title='code'/>";
	vragen[1][2] = "<img src='images/apple.png' height=150 title='code'/>";
	vragen[2][0] = "<img src='images/puzzel1.PNG' height=150 title='puzzel'/>";
	vragen[2][1] = "<img src='images/puzzel2.PNG' height=150 title='puzzel'/>";
	vragen[2][2] = "<img src='images/puzzel3.PNG' height=150 title='puzzel'/>";
	vragen[3][0] = "?";
	vraagidx = 0;
	subansweridx = 0;
	antwoorden = [[],[],[],[]];
	antwoorden [0][0] = "Leuven";
	antwoorden [0][1] = "Toegepaste Informatica";
	antwoorden [0][2] = "World Wide Web";
	antwoorden [0][3] = "Android besturingssystemen";
	antwoorden [0][4] = "Netwerk";
	antwoorden [0][5] = "druiven.mkv";
	antwoorden [0][6] = "Verpleger";
	antwoorden [0][7] = "met e-meel";
	antwoorden [0][8] = "Linux";
	antwoorden [0][9] = "2007";
	antwoorden [0][10] = "Internet of Things";
	antwoorden [0][11] = "JAVA";
	antwoorden [1][0] = "Zuckerberg;Facebook;sociale media;film";
	antwoorden [1][1] = "programmeertaal;oppervlakte cirkel;3.14 of PI;java";
	antwoorden [1][2] = "Apple;Steve Jobs;duur;Tim Cook";
	antwoorden [2][0] = "hoger onderwijs;Mario;TI";
	antwoorden [2][1] = "TI;Microsoft;data-opslag";
	antwoorden [2][2] = "Google;emoticons;computervirus";
	antwoorden [3][0] = "";
	scores = [[],[],[],[]];
	scores [0][0] = 0;
	scores [0][1] = 0;
	scores [0][2] = 10;
	scores [0][3] = 0;
	scores [0][4] = 0;
	scores [0][5] = 10;
	scores [0][6] = 0;
	scores [0][7] = 0;
	scores [0][8] = 10;
	scores [0][9] = 0;
	scores [0][10] = 0;
	scores [0][11] = 10;
	scores [1][0] = "5;10;15;20";
	scores [1][1] = "5;10;15;20";
	scores [1][2] = "5;10;15;20";
	scores [2][0] = "10;15;20";
	scores [2][1] = "10;15;20";
	scores [2][2] = "10;15;20";
	scores [3][0] = 0;
	seconden = [[],[],[],[]];
	seconden [0][0] = 16;
	seconden [0][1] = 16;
	seconden [0][2] = 16;
	seconden [0][3] = 16;
	seconden [0][4] = 16;
	seconden [0][5] = 16;
	seconden [0][6] = 16;
	seconden [0][7] = 16;
	seconden [0][8] = 16;
	seconden [0][9] = 16;
	seconden [0][10] = 16;
	seconden [0][11] = 16;
	seconden [1][0] = 60;
	seconden [1][1] = 60;
	seconden [1][1] = 60;
	seconden [2][0] = 60;
	seconden [2][1] = 60;
	seconden [2][1] = 60;
	seconden [3][0] = 0;
	currentteam = 1;
	nextQuestionAllowed = false;
	nrOfteamscurrentQuestion = 1;
	score1 = 60;
	score2 = 60;
	score3 = 60;

	document.getElementById("ronde").innerHTML = rondes[rondeidx];
	document.getElementById("tnA").innerHTML = tn1;
	document.getElementById("tnB").innerHTML = tn2;
	document.getElementById("tnC").innerHTML = tn3;
	document.getElementById("vraag").innerHTML = vragen[rondeidx][vraagidx];
	document.getElementById("antwoordsuggestie").innerHTML = blurAntwoord(antwoorden[rondeidx][vraagidx]);
	disableButton("volgendevraagbutton");
	nieuweronde();
}

function starttime() {
	initializeClock();
}

function initializeClock() {
	var clock = document.getElementById('headercounter');
	var secondsSpan = clock.querySelector('.seconds');

	var t = 1000*seconden[rondeidx][vraagidx];
	if (isNaN(t)) return;
	if(t <= 0){
		secondsSpan.innerHTML = "";
		clearInterval(timeinterval);
	}
	else{
		clearInterval(timeinterval);
		clock.style.display = 'block';
		function updateClock() {
			t = t-1000;

			secondsSpan.innerHTML = t/1000;
			if (t <= 0) {
				clearInterval(timeinterval);
				fout();
			}
		}
		updateClock();
		timeinterval = setInterval(updateClock, 1000);
	}
	playNextTeamSound();
}

function juist() {
	if(updateScore()){
		showantwoord();
		//ga naar het volgende team (in de eerste ronde) wanneer er punten zijn verdiend.
		if(scores[rondeidx][vraagidx] == 10){
			if(currentteam == 1){
				document.getElementById("team1").classList.remove('current');
				document.getElementById("team1").classList.add('notcurrent');
				document.getElementById("team2").classList.remove('notcurrent');
				document.getElementById("team2").classList.add('current');
				document.getElementById("transparantimaget1").style.display = 'none';
				document.getElementById("transparantimaget2").style.display = 'block';
			} else if(currentteam == 2){
				document.getElementById("team2").classList.remove('current');
				document.getElementById("team2").classList.add('notcurrent');
				document.getElementById("team3").classList.remove('notcurrent');
				document.getElementById("team3").classList.add('current');
				document.getElementById("transparantimaget2").style.display = 'none';
				document.getElementById("transparantimaget3").style.display = 'block';
			} else {
				document.getElementById("team3").classList.remove('current');
				document.getElementById("team3").classList.add('notcurrent');
				document.getElementById("team1").classList.remove('notcurrent');
				document.getElementById("team1").classList.add('current');
				document.getElementById("transparantimaget3").style.display = 'none';
				document.getElementById("transparantimaget1").style.display = 'block';
			}
			currentteam = (currentteam + 1)%3;
		}
	}
}

function showantwoord(){
	document.getElementById("antwoordsuggestie").innerHTML = clearAntwoord(antwoorden[rondeidx][vraagidx]);
	var clock = document.getElementById('headercounter');
	var secondsSpan = clock.querySelector('.seconds');
	var t = 3000;
	clearInterval(timeinterval);
	function updateClock2() {
		t = t-1000;
		if (t <= 0) {
			clearInterval(timeinterval);
			secondsSpan.innerHTML = "0";
			enableButton("volgendevraagbutton");
			checkNextQuestion();
		} else if (isNaN(t)) {
			secondsSpan.innerHTML = "0";
		} else {
			secondsSpan.innerHTML = t/1000;
		}
	}
	timeinterval = setInterval(updateClock2, 1000);
}

function checkNextQuestion() {
	if(!triggerForNextQuestion){
		setTimeout(checkNextQuestion,100)
	}
	else {
		triggerForNextQuestion = false;
		nextQuestion();
	}
}

function setTriggerForNextQuestion(){
		triggerForNextQuestion = true;
		disableButton("volgendevraagbutton");
}

function enableButton(button){
	document.getElementById(button).disabled = false;
	document.getElementById(button).classList.remove("disabledbutton");
}

function disableButton(button){
	document.getElementById(button).disabled = true;
	document.getElementById(button).classList.add("disabledbutton")
}

function fout() {
	if(currentteam == 1){
		document.getElementById("team1").classList.remove('current');
		document.getElementById("team1").classList.add('notcurrent');
		document.getElementById("team2").classList.remove('notcurrent');
		document.getElementById("team2").classList.add('current');
		document.getElementById("transparantimaget1").style.display = 'none';
		document.getElementById("transparantimaget2").style.display = 'block';
	} else if(currentteam == 2){
		document.getElementById("team2").classList.remove('current');
		document.getElementById("team2").classList.add('notcurrent');
		document.getElementById("team3").classList.remove('notcurrent');
		document.getElementById("team3").classList.add('current');
		document.getElementById("transparantimaget2").style.display = 'none';
		document.getElementById("transparantimaget3").style.display = 'block';
	} else {
		document.getElementById("team3").classList.remove('current');
		document.getElementById("team3").classList.add('notcurrent');
		document.getElementById("team1").classList.remove('notcurrent');
		document.getElementById("team1").classList.add('current');
		document.getElementById("transparantimaget3").style.display = 'none';
		document.getElementById("transparantimaget1").style.display = 'block';
	}
	currentteam = (currentteam + 1)%3;
	nrOfteamscurrentQuestion ++;
	seconden[rondeidx][vraagidx] = (seconden[rondeidx][vraagidx]);
	if(nrOfteamscurrentQuestion == 4){
		showantwoord();
		nrOfteamscurrentQuestion = 1;
	} else {
		initializeClock();
	}
}

function blurAntwoord(antwoord){
	var antwoorden = antwoord.split(";");
	var nrOfAntwoorden = antwoorden.length;
	var blurrytekst = "";
	var lengte = 0;
	for(var i = 0; i < nrOfAntwoorden; i++){
		for(var l=0; l<antwoorden[i].length; l++){
			var letter = antwoorden[i][l];
			if(letter==' '){
				blurrytekst += '&nbsp;&nbsp;&nbsp;';
			}else{
				blurrytekst += "_ ";
			}
			lengte ++;
		}
		if(i < nrOfAntwoorden-1){
			blurrytekst += "&nbsp; : &nbsp;";
			if(lengte + antwoorden[i+1].length > 20){
				blurrytekst += "<br>";
				lengte = 0;
			}
		}else{
			blurrytekst += "<br>";
		}
	}
	return blurrytekst;
}

function clearAntwoord(antwoord){
	var antwoorden = antwoord.split(";");
	var nrOfAntwoorden = antwoorden.length;
	var cleartekst = "";
	var lengte = 0;
	for(var i = 0; i < nrOfAntwoorden; i++){
		for(var l=0; l<antwoorden[i].length; l++){
			var letter = antwoorden[i][l];
			if(letter==' '){
				cleartekst += '&nbsp;&nbsp;&nbsp;';
			}else{
				cleartekst += letter + '&nbsp';
			}
			lengte ++;
		}
		if(i < nrOfAntwoorden-1){
			cleartekst += "&nbsp; : &nbsp;";
			if(lengte + antwoorden[i+1].length > 20){
				cleartekst += "<br>";
				lengte = 0;
			}
		}else{
			cleartekst += "<br>";
		}
	}
	return cleartekst;
}

function updateScore(){
	var volgendevraag = false;
	var score = ""+scores[rondeidx][vraagidx];
	var currentscore = 0;
	var ms = score.indexOf(";");
	if (ms > -1){
		var subscores = score.split(";");
		var currentscore = parseInt(subscores[subansweridx]);
		subansweridx ++;
		if(subansweridx == subscores.length){
			volgendevraag = true;
		}
	}else{
		currentscore = parseInt(score);
		volgendevraag = true;
	}
	if(isNaN(currentscore)){
		return volgendevraag;
	}
	if(currentteam == 1){
		score1 += currentscore;
		document.getElementById("scoreA").innerHTML = score1;
	} else if (currentteam == 2){
		score2 += currentscore;
		document.getElementById("scoreB").innerHTML = score2;
	} else {
		score3 += currentscore;
		document.getElementById("scoreC").innerHTML = score3;
	}
	return volgendevraag;
}

function nextQuestion(){
	nrOfteamscurrentQuestion = 1
	document.getElementById("q"+(vraagidx+1)).classList.remove('currentquestion');
	if(vraagidx < vragen[rondeidx].length-1){
		vraagidx ++;
		subansweridx = 0;
	} else {
		rondeidx ++;
		vraagidx = 0;
		subansweridx = 0;
		if(rondeidx != rondes.length-1) alert("Leg de volgende ronde uit. Klik op OK om de ronde te starten");
		nieuweronde();
	}
	document.getElementById("vraag").innerHTML = vragen[rondeidx][vraagidx];
	document.getElementById("antwoordsuggestie").innerHTML = blurAntwoord(antwoorden[rondeidx][vraagidx]);
	document.getElementById("q"+(vraagidx+1)).classList.add('currentquestion');
	initializeClock();
}

function nieuweronde(){
	if(rondeidx == rondes.length-1){
		vragen[3][0] = "<br>Proficiat team " +getwinnaar()+"!<br><img src='images/celebration.gif' height=400 title=''/>";
		document.getElementById("team1").classList.remove('current');
		document.getElementById("team2").classList.remove('current');
		document.getElementById("team3").classList.remove('current');
		document.getElementById("team1").classList.add('notcurrent');
		document.getElementById("team2").classList.add('notcurrent');
		document.getElementById("team3").classList.add('notcurrent');
		document.getElementById("vraag").innerHTML = vragen[3][0];
		document.getElementById("antwoordsuggestie").style.display = 'none';
		document.getElementById("wrapper3").style.display ='none';
		document.getElementById("admintools").style.display = 'none';
	}
	startnieuweronde();
}

function startnieuweronde(){
	document.getElementById("ronde").innerHTML = rondes[rondeidx];
	vooruitgangstekst = "";
	if(vragen[rondeidx].length > 1){
		for(i = 0; i < vragen[rondeidx].length; i++){
			vooruitgangstekst += '<span id="q' + (i+1) + '"';
			if(i == vraagidx){
				vooruitgangstekst += 'class="currentquestion"';
			}
			if(scores[rondeidx][i] > 0){
				vooruitgangstekst += 'class="larger"'
			}
			vooruitgangstekst += '>' + (i+1) + '</span>&nbsp;&nbsp;';
		}
	}
	document.getElementById("vooruitgangsbalk").innerHTML = vooruitgangstekst;
}

function getwinnaar() {
	var winnaar = tn1;
	if(score2 > score1){
		winnaar = tn2;
		if(score3 > score2){
			winnaar = tn3;
		}
	} else if(score3 > score1){
		winnaar = tn3;
	}
	return winnaar;
}

function playSound(){
	//document.getElementById("play").play();
}

function playNextTeamSound(){
	document.getElementById("nextTeamSound").play();
}

function adminEndGame() {
	if(confirm("Ben je zeker dat je het spel wil beëindigen? Er is geen weg terug...")){
		rondeidx = rondes.length-1;
		nieuweronde();
		initializeClock();
	}
}

function toggleAdminTools() {
	if(admintools){
		document.getElementById("admintools").style.display = 'none';
		admintools = false;
	}
	else {
		document.getElementById("admintools").style.display = 'block';
		admintools = true;
	}
}

function setTeamScore(team) {
	scoreValue = parseInt(document.getElementById("manualscorevalue").value);
	if(scoreValue != 0){
		if (team == 1){
			score1 = scoreValue;
			document.getElementById("scoreA").innerHTML = score1;
		}
		if (team == 2){
			score2 = scoreValue;
			document.getElementById("scoreB").innerHTML = score2;
		}
		if (team == 3){
			score3 = scoreValue;
			document.getElementById("scoreC").innerHTML = score3;
		}
	}
}

function manualVolgendeRonde(){
	if(confirm("Ben je zeker dat je wil overgaan naar de volgende ronde? Er is geen weg terug...")){
		rondeidx ++;
		vraagidx = 0;
		subansweridx = 0;
		nieuweronde();
		document.getElementById("vraag").innerHTML = vragen[rondeidx][vraagidx];
		document.getElementById("antwoordsuggestie").innerHTML = blurAntwoord(antwoorden[rondeidx][vraagidx]);
		document.getElementById("q"+(vraagidx+1)).classList.add('currentquestion');
		initializeClock();
	}
}

function pause(){
	alert("Spel gepauzeerd. Druk op OK om te hervatten");
}

/*function testText(){
	element = document.getElementById("manualscorevalue");
	if(element.value != 0) document.getElementById("testText").innerHTML = element.value;
}*/
