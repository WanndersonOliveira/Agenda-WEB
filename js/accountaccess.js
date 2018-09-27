var i = 250;
setTimeout(desapareceTudo, 50);
setTimeout(apareceTitulo, 1000);

function desapareceTudo(){
	document.getElementById('subtitle').style.display = "none";
	document.getElementById('title').style.display = "none";
	document.getElementById('user').style.display = "none";
	document.getElementById('campo1').style.display = "none";
	document.getElementById('password').style.display = "none";
	document.getElementById('campo2').style.display = "none";
	document.getElementById('botao').style.display = "none";
	document.getElementById('inicio_c').style.display = "none";
	document.getElementById('inicio').style.display = "none";
}

function apareceTitulo(){
	document.getElementById('title').style.top = "250px";
	document.getElementById('title').style.font = "7em";
	document.getElementById('title').style.display = "block";
	setInterval(sobeTitulo, 200);
}

function sobeTitulo(){
	if(i > 51){
        i = i - 25;
		document.getElementById('title').style.top = i+"px";
	} else {
		document.getElementById('title').style.font = "2em";
		setTimeout(apareceSubtitle, 1000);
	}
}

function apareceSubtitle(){
	document.getElementById('subtitle').style.display = "block";
	setTimeout(apareceTxt1, 1000);
}

function apareceTxt1(){
	document.getElementById('user').style.display = "block";
	setTimeout(apareceCmp1, 1000);
}

function apareceCmp1(){
	document.getElementById('campo1').style.display = "block";
	setTimeout(apareceTxt2, 1000);
}

function apareceTxt2(){
	document.getElementById('password').style.display = "block";
	setTimeout(apareceCmp2, 1000);
}

function apareceCmp2(){
	document.getElementById('campo2').style.display = "block";
	setTimeout(apareceBtn, 1000);
}

function apareceBtn(){
	document.getElementById('botao').style.display = "block";
    setTimeout(lastId, 1000);
}

function lastId(){
	document.getElementById('inicio_c').style.display = "block";
	document.getElementById('inicio').style.display = "block";
}