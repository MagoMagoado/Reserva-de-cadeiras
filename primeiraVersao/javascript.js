/*-----------------------------------------------------------------
            A COR MUDA QUANDO PASSA O MOUSE POR CIMA
function over(obj){
    obj.src="./img/cadeira2.png";
}
function out(obj){
    obj.src="./img/cadeira.png";
}
function eventos(){
    var assentos=document.querySelectorAll("img.images");
    
    for(let i=0;i<assentos.length;i++){
        assentos[i].addEventListener("mouseover",function(){
            over(assentos[i]);
        });
        assentos[i].addEventListener("mouseout",function(){
            out(assentos[i]);
        });
    }
}
window.addEventListener("load",eventos);
-----------------------------------------------------------------*/

function eventos(){
    var label = document.getElementsByClassName('a');
    for(let i=0; i<label.length;i++){
        label[i].addEventListener('click', function(){
            toggleImage(label[i]);//passa a label clicada
            enableBnt();//toda vez que eu clicar no botão, atualiza função 
        });
    }
}
function toggleImage(lbl){
    var cadeiras=lbl.children;

    //troca posição das cadeiras no DOM
    lbl.insertBefore(cadeiras[1], cadeiras[0]);
    //atualiza o objeto cadeiras para refletir a troca
    var label = document.getElementsByClassName('a');
    for(let i=0; i<label.length;i++){
        var cadeiras=label.children;//retorna as imgs
    }
}

function enableBnt(){
    var label = document.getElementsByClassName('a');
    var bnt=document.getElementById('myBtn');//pega o botão

    for(let i=0; i<label.length;i++){
        var cadeiras=label[i].children[0];//pega as primeiras cadeiras
        console.log(cadeiras.getAttribute('src'));
        
        var result = true;
        if(cadeiras.getAttribute('src')=='./img/cadeiraVermelha.png'){
            var result = false;//se 1 deles for vermelho
            break;
        }
    }
    //muda de acordo com o valor de result
    bnt.disabled = result;
}
function nums(){
    var numeros= document.getElementsByClassName('primeira');
    var cont=1;
    for(let i=0; i<numeros.length;i++){
        numeros[i].dataset.content = cont++;
    }
}
window.addEventListener("load", function(){
    eventos();
    /*chama a função quando carrega a página,
     mas tem que atualizar também quando é clicada*/
    enableBnt();
    nums();
});
