function trocarDiv(){
    var area = document.getElementById("area");
    var texto = prompt("Qual seu nome?");

    area.innerHTML = texto;
}

function adicionarIngrediente(){
    var ing = document.getElementById("ingrdientes").value;
    var listaHtml = document.getElementById("lista").innerHTML;
    listaHtml = listaHtml + "<li>" + ing + "</li>";
    document.getElementById("lista").innerHTML = listaHtml;
}
