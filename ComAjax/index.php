<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="#">
    <link rel="stylesheet" href="estilo-assentos.css"/>
    <script type="text/javascript" src="script-assentos.js"></script>
    <script type="text/javascript" src="requisicao-assentos.js"></script>

    <style>  </style>

</head>
<body>
    <div id="quadro-assentos">
        <form id="formulario">
            <h1 id="titulo">ESCOLHA OS ASSENTOS QUE DESEJA SENTAR:</h1>

            <div id="table-enviar">
            <span id='close'><img src="img/close-icon-verm.png"/></span>
            <div id='mensagens'></div>
            <div id="bnt"><input id="myBtn-enviar" type="submit" value="Enviar"></div>
            </div>
            
            <div id="table">
                <div class="linha">
                <p class="tit-linha">A</p>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                    $n++; echo"<div class='cedula primeira'><input type='checkbox' id='A$n' value='A$n' name='lugares[]'>
                    <label for='A$n' class='a'>
                        <img class='images' src='./img/cadeira.png'/>
                        <img class='images' src='./img/cadeiraVermelha.png'/>
                    </label></div>";}?>
                </div>

                <div class="linha">
                <p class="tit-linha">B</p>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                    $n++; echo"<div class='cedula'><input type='checkbox' id='B$n' value='B$n' name='lugares[]'>
                    <label for='B$n' class='a'>
                        <img class='images' src='./img/cadeira.png'/>
                        <img class='images' src='./img/cadeiraVermelha.png'/>
                    </label></div>";}?>
                </div>

                <div class="linha">
                <p class="tit-linha">C</p>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                    $n++; echo"<div class='cedula'><input type='checkbox' id='C$n' value='C$n' name='lugares[]'>
                    <label for='C$n' class='a'>
                        <img class='images' src='./img/cadeira.png'/>
                        <img class='images' src='./img/cadeiraVermelha.png'/>
                    </label></div>";}?>
                </div>

                <div class="linha">
                <p class="tit-linha">D</p>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                    $n++; echo"<div class='cedula'><input type='checkbox' id='D$n' value='D$n' name='lugares[]'>
                    <label for='D$n' class='a'>
                        <img class='images' src='./img/cadeira.png'/>
                        <img class='images' src='./img/cadeiraVermelha.png'/>
                    </label></div>";}?>
                </div>

                <div class="linha">
                <p class="tit-linha">E</p>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                    $n++; echo"<div class='cedula'><input type='checkbox' id='E$n' value='E$n' name='lugares[]'>
                    <label for='E$n' class='a'>
                        <img class='images' src='./img/cadeira.png'/>
                        <img class='images' src='./img/cadeiraVermelha.png'/>
                    </label></div>";}?>
                </div>
            </div>

            <!--NÃO COLOCAR EM BOTÃO PARA NÃO DAR TRETA DEPOIS NA HORA DE ENVIAR, QUE O TAMANHO DO INPUT É MENOR QUE O DO BOTÃO-->
            <div id="bnt"><input id="myBtn" type="submit" value="Verificar"></div>

        </form>
    </div>
</body>
</html>
