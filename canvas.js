var cont = 1;
function criarPostit(div_id,id) {
	var text = document.getElementById("text" + id).value;

	var postit = document.createElement("DIV");
	postit.id = "drag" + cont;
	postit.className = "draggable";
	
	postit.innerHTML = "<a href=\"javascript:aceitarPostit('drag" + cont + "');\">[ Aceitar ]</a>" + 
	"<br />" +
	"<a href=\"javascript:discutirPostit('drag" + cont + "');\">[ Discutir ]</a>" +
	"<br />" +
	"<a href=\"javascript:removerPostit('drag" + cont + "');\">[ Remover ]</a>" +
	"<br />" + "<span class='postit-text'>" + text + "</span>";
	
	cont = cont + 1;

	document.getElementById(div_id).appendChild(postit);
	
	document.getElementById("text" + id).value = "";
}

function removerPostit(dragid) {
	var drag = document.getElementById(dragid);
	drag.parentElement.removeChild(drag);
}

function aceitarPostit(dragid) {
	//alert("ACEITAR");
	document.getElementById(dragid).style.backgroundColor = "#e3f6ce";
	var text = document.getElementById(dragid).getElementsByClassName("postit-text")[0].innerHTML;
	//alert(text);
	document.getElementById(dragid).innerHTML = "<a href=\"#openModal10\">[ Definir Tarefa ]</a>" +
	"<br />" + "<span class='postit-text'>" + text + "</span>";
}

function discutirPostit(dragid) {
	//alert(dragid);
	document.getElementById(dragid).style.backgroundColor = "#f6cece";
	var text = document.getElementById(dragid).getElementsByClassName("postit-text")[0].innerHTML;
	document.getElementById(dragid).innerHTML = "<a href=\"javascript:aceitarPostit('" + dragid + "');\">[ Aceitar ]</a>" + 
	"<br />" +
	"<a href=\"#openModal11\">[ Criar Tópico ]</a>" +
	"<br />" +
	"<a href=\"javascript:removerPostit('" + dragid + "');\">[ Remover ]</a>" +
	"<br />" + "<span class='postit-text'>" + text + "</span>";
}

function saveFormTarefa() {

	tarefa_form.submit();		
}

function saveFormDiscussao() {

	discussao_form.submit();
}

function saveFormMensagem() {
	mensagem_form.submit();
}

// target elements with the "draggable" class
interact('.draggable').draggable({
	// enable inertial throwing
	inertia: true,
	// keep the element within the area of it's parent
	restrict: {
  		restriction: "parent",
  		endOnly: true,
  		elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
	},

	// call this function on every dragmove event
	onmove: dragMoveListener,
	// call this function on every dragend event
	onend: function (event) {
  		var textEl = event.target.querySelector('p');
  		textEl && (textEl.textContent = 'moved a distance of ' + (Math.sqrt(event.dx * event.dx + event.dy * event.dy)|0) + 'px');
	}
});

function dragMoveListener (event) {
	var target = event.target,
    // keep the dragged position in the data-x/data-y attributes
    x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
    y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

	// translate the element
	target.style.webkitTransform = target.style.transform = 'translate(' + x + 'px, ' + y + 'px)';

	// update the posiion attributes
	target.setAttribute('data-x', x);
	target.setAttribute('data-y', y);
}

// this is used later in the resizing demo
window.dragMoveListener = dragMoveListener;