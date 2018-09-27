var i = 250;
setTimeout(desapareceTudo, 50);
setTimeout(apareceTitulo, 1000);


function desapareceTudo(){
	document.getElementById('acess').style.display = "none";
	document.getElementById('title').style.display = "none";
	document.getElementById('pic').style.display = "none";
	document.getElementById('create').style.display = "none";
}

function aparecePic(){
	document.getElementById('pic').style.display = "block";
	setTimeout(apareceAcess, 1000)
}

function apareceTitulo(){
	document.getElementById('title').style.top = "250px";
	document.getElementById('title').style.fontsize = "7em";
	document.getElementById('title').style.display = "block";
	setInterval(sobeTitulo, 200);
}

function sobeTitulo(){
	if(i > 51){
        i = i - 25;
		document.getElementById('title').style.top = i+"px";
	} else {
		document.getElementById('title').style.fontsize = "2em";
		setTimeout(aparecePic, 1000);
	}
}

function apareceAcess(){
	document.getElementById('acess').style.display = "block";
	setTimeout(apareceCreate, 1000)
}

function apareceCreate(){
	document.getElementById('create').style.display = "block";
}