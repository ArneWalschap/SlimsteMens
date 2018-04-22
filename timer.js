var deadline = new Date(2017,0,20,12,00,00,00);
var aantalplaatsen = 166;

function initializeClock() {
	//alert("initializeClock");
	var clock = document.getElementById('timerclockdiv');
	var button = document.getElementById('timerinschrijfknop');
	var deadlinetext = document.getElementById('timerdeadline');
	var plaatsen = document.getElementById('aantal');
	var inschrijven = ddocument.getElementById('inschrijflink');
	var daysSpan = clock.querySelector('.days');
	var hoursSpan = clock.querySelector('.hours');
	var minutesSpan = clock.querySelector('.minutes');
	var secondsSpan = clock.querySelector('.seconds');
	//alert(deadline);
	var t = getTimeRemaining(deadline);
	//alert(t.days);
	if(t.total <= 0){
	clock.style.display = 'none';           
	button.style.display = 'block'; 
	inschrijven.style.display = 'block'; 	
	deadlinetext.innerHTML = 'tot 28 februari - 12:00 <br> of tot volzet';
	plaatsen.innerHTML = aantalplaatsen;
	}
	else{
		button.style.display = 'none';   
		inschrijven.style.display = 'none'; 	        
		clock.style.display = 'block';  
		function updateClock() {
			var t = getTimeRemaining(deadline);

			daysSpan.innerHTML = t.days;
			hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
			minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
			secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

			if (t.total <= 0) {
				clearInterval(timeinterval);
				clock.style.display = 'none';           
				button.style.display = 'block';
				inschrijven.style.display = 'block'; 				
				deadlinetext.innerHTML = 'tot 28 februari - 12:00 <br> of tot volzet';		
				plaatsen.innerHTML = aantalplaatsen;
			}
		}

		updateClock();
		var timeinterval = setInterval(updateClock, 1000);
	}
	//alert(t.days + " " + t.hours + " " + t.minutes + " " + t.seconds);
}

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}


