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

function somar(){
    var campo1 = parseInt(document.getElementById("num1").value);
    var campo2 = parseInt(document.getElementById("num2").value);
    var soma = campo1 + campo2;
    alert("Soma: " + soma);
}

function verificador(){
    var x = prompt("Digite um número! ");
    if (x > 10){
        alert("X é maior que 10");
    }else{
        alert("X não é maior que 10");
    }
}

function loopWhile(){
    document.write("Um loop com while...");
    var x = 0;
    while (x < 10){
        document.write("x é: " + x + "<br>");
        x++;
    }
    document.write("Fim do loop");
}

function jogoNumero(){
    var n1 = document.getElementById("n1").innerHTML;
    var n2 = document.getElementById("n2").value;
    if (n1 == n2){
        alert("Você acertou!")
    }else{
        alert("Você errou!")
    }
    resetar();
}
function resetar(){
    document.getElementById("n2").value = "";
    var reset = Math.floor(Math.random() * 100);
    document.getElementById("n1").innerHTML = reset;
}

function mudarCidade (objeto){
    document.getElementById("campo").value = objeto.value;
    console.log("Selecionou: " + objeto.value);
}

function addBola (){
    var bola = document.createElement("div");
    bola.setAttribute("class", "bola");
    //Match.ramdom -> gera um número aleatório (* 500, de 0 a 500) - Match.floor -> transforma o número em inteiro
    var posicao1 = Math.floor(Math.random() * 500);
    var posicao2 = Math.floor(Math.random() * 500);
    bola.setAttribute("style", "left:" + posicao1 + "px;top:" + posicao2 + "px;")
    bola.setAttribute("onclick", estourar(this));

    document.body.appendChild(bola);
}

function estourar(element) {
    document.body.removeChild(element);
}

function iniciar() {
    setInterval(addBola, 1000);
}
