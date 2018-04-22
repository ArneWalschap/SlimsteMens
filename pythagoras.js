function vraagEnAntwoord(){
	var a = prompt("Geef de lengte van de eerste rechthoekszijde"); // gebruiker typt 3
	var b = prompt("Geef de lengte van de tweede rechthoekszijde"); // gebruiker typt 4
	var c = berekeniets(a,b);
	alert("We berekenden iets: " + c);
}

function berekenIets(a,b){
	var c = sqrt(a*a + b*b);
	return c;
}



