function requisicao(){
    //os names das cadeiras
    var cadeiras = document.getElementsByName("lugares[]");
    //o botão
    var bnt=document.getElementById('myBtn');
    //o botão enviar
    var bnt_enviar=document.getElementById('myBtn-enviar');

    bnt.addEventListener('click',function(event){
        //previne que o botão recarregue a página
        event.preventDefault();

        //cria a instância
        var ajax= new XMLHttpRequest();
        
        /*pega os dados que seram enviados, e coloca em formato formData
        var formdata= new FormData();*/

        //verifica se a solicitação foi enviada, coloco apenas Status pq se não
        //ele testa mais de 1 vez os States, fazendo aparecer o alert
        ajax.onreadystatechange= function(){
            if(ajax.status===200){
                if(ajax.readyState===4){
                    console.log('OK! Enviado solicitação');
                }
            }
            else{
                console.error('Error 404 Page Not Found!');
            }
        }

        /*verifica quais cadeiras foram checadas, se foram checadas, armazena na
        variável array*/
        var array = new Array();
        for (i=0; i< cadeiras.length; i++){
            if (cadeiras[i].checked == true){
                // adiciona ao array o valor do input, ex: A1
            array.push(cadeiras[i].value);
            }
        }
        //converte em string o obj array
        lugares = JSON.stringify(array);

        //especifica o método da requisição e para onde enviar
        ajax.open('POST','assentos-ajax.php');

        //dizemos que vamos enviar um arquivo json, a variável "lugares"
        ajax.setRequestHeader("Content-Type", "application/json");

        //envia a requisição
        ajax.send(lugares);

        //onload quer dizer "quando carregar faça..."
        //em onload ira transformar o obj em JSON
        ajax.onload = function(){
            //transforma em JSON
            let respostaAjax = null;
            try {
                respostaAjax = JSON.parse(ajax.responseText);
                /*respostaAjax tem 2 itens:
                respostaAjax.ok e respostaAjax.messages*/
            } catch (e) {
                console.error('Não conseguiu converter em JSON');
            };
            
            console.log(respostaAjax);
            if (respostaAjax) {
                MostrarEscolhas(respostaAjax);
                Enviar(respostaAjax);
            }
        };

        //Se estiver tudo ok, mostra as cadeiras
        function MostrarEscolhas(obj){
            var tabela=document.getElementById('table');
            var tabela_enviar = document.getElementById('table-enviar');
            var mensagens=document.getElementById('mensagens');
            var close=document.getElementById('close').children[0];

            tabela.style.visibility = 'hidden';
            tabela_enviar.style.visibility = 'visible';

            //apaga as mensagens antigas
            while (mensagens.firstChild){
                mensagens.removeChild(mensagens.firstChild);
            }
            
            //mostra as mensagens
            var p1 = document.createElement('p');
            var p2 = document.createElement('p');
            var p3 = document.createElement('p');
            p1.textContent ='Assentos escolhidos:';
            p2.textContent =`${obj.join(' - ')}`;
            p3.textContent ='Deseja enviar?';
            mensagens.append(p1, p2, p3);

            close.onclick = function(){
                tabela.style.visibility = 'visible';
                tabela_enviar.style.visibility = 'hidden';
            };

        };
    });
        
        function Enviar(obj){

            bnt_enviar.onclick = function(e){
                e.preventDefault();
    
                console.log(obj);
            };

        };

        /* //cria a instância
        var envio= new XMLHttpRequest();
        
        //converte em string o obj array
        resposta = JSON.stringify(respostaAjax);

        //especifica o método da requisição e para onde enviar
        envio.open('POST','dados.php');

        //dizemos que vamos enviar um arquivo json, a variável "lugares"
        envio.setRequestHeader("Content-Type", "application/json");

        //envia a requisição
        envio.send(resposta);*/
};

window.addEventListener('load',requisicao);