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

function DancaCadeiras(){
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
        
        var cor_bnt = '#c7c6c6';
        var borda_bnt = '1px solid #c7c6c6';
        var tipo_cursor = 'default';
        var result = true;
        //se 1 deles for vermelho
        if(cadeiras.getAttribute('src')=='./img/cadeiraVermelha.png'){
            var result = false;
            var tipo_cursor = 'pointer';
            var cor_bnt = '#ffffff';
            var borda_bnt = '1px solid rgb(3, 24, 216)';

            //muda a cor do fundo ao passar o mouse
            function trocaCor(){
                bnt.style.backgroundColor='rgb(6, 19, 136)';
                bnt.style.color='#ffffff';
            };
            function voltaCor(){
                bnt.style.backgroundColor='#ffffff';
                bnt.style.color='#000000';
            };

            break;
        }
    }
    //muda de acordo com o valor de result
    bnt.disabled = result;
    //muda o cursor se tiver alguma cadeira vermelha
    bnt.style.cursor = tipo_cursor;
    //muda o fundo do botão
    bnt.style.backgroundColor = cor_bnt;
    //muda a borda do botão
    bnt.style.border= borda_bnt;
    //funciona como um hover
    bnt.onmouseover = function(){trocaCor()};
    bnt.onmouseout = function(){voltaCor()};
}
function nums(){
    var numeros= document.getElementsByClassName('primeira');
    var cont=1;
    for(let i=0; i<numeros.length;i++){
        numeros[i].dataset.content = cont++;
    }
}
function ajuste_tela(){
    var formulario=document.getElementById('formulario');
    var tabela=document.getElementById('table');

    //deixa o tamanho do formulario = tamanho da tabela
    formulario.style.height=tabela.scrollHeight+'px';
    formulario.style.width=tabela.scrollWidth+'px';

    //deixa o tamanho do body = tamanho da tabela
    document.body.style.height=formulario.scrollHeight+'px';
    document.body.style.width=formulario.scrollWidth+'px';
}

window.addEventListener('load', function(){
    DancaCadeiras();
    /*chama a função quando carrega a página,
     mas tem que atualizar também quando é clicada*/
    enableBnt();
    nums();
});
