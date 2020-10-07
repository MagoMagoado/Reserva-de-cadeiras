<!Doctype html>
<html>
    <head>  
        <title>ReservaCinema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css"/>
    </head>
    <body onload="nums()">
        <?php
        $lugar=$_GET["lugares"];
        ?>

        <h1 id="titulo">ASSENTOS ESCOLHIDOS:</h1>
        <form method="GET" action="#">
            <div id="table">
                <div class="linha">
                    <p class="tit-linha">A</p>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++;$id=sprintf("A$n");
                        if(in_array($id, $lugar)){echo"<div class='cedula-resp primeira-resp'><label for='A$n'><img src='./img/bolinha.png'/></label></div>";}
                        else{echo"<div class='cedula-resp primeira-resp'><label for='A$n'><img src='./img/cadeira.png'/></label></div>";}}?>
                </div>
                <div class="linha">
                    <p class="tit-linha">B</p>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++;$id=sprintf("B$n");
                        if(in_array($id, $lugar)){echo"<div class='cedula-resp'><label for='B$n'><img src='./img/bolinha.png'/></label></div>";}
                        else{echo"<div class='cedula-resp'><label for='B$n'><img src='./img/cadeira.png'/></label></div>";}}?>
                </div>
                <div class="linha">
                    <p class="tit-linha">C</p>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++;$id=sprintf("C$n");
                        if(in_array($id, $lugar)){echo"<div class='cedula-resp'><label for='C$n'><img src='./img/bolinha.png'/></label></div>";}
                        else{echo"<div class='cedula-resp'><label for='C$n'><img src='./img/cadeira.png'/></label></div>";}}?>
                </div>
                <div class="linha">
                    <p class="tit-linha">D</p>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++;$id=sprintf("D$n");
                        if(in_array($id, $lugar)){echo"<div class='cedula-resp'><label for='D$n'><img src='./img/bolinha.png'/></label></div>";}
                        else{echo"<div class='cedula-resp'><label for='D$n'><img src='./img/cadeira.png'/></label></div>";}}?>
                </div>
                <div class="linha">
                    <p class="tit-linha">E</p>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++;$id=sprintf("E$n");
                        if(in_array($id, $lugar)){echo"<div class='cedula-resp'><label for='E$n'><img src='./img/bolinha.png'/></label></div>";}
                        else{echo"<div class='cedula-resp'><label for='E$n'><img src='./img/cadeira.png'/></label></div>";}}?>
                </div>
            </div>

            <div id="recado"><p>Você escolhes os assentos:
            <?php 
                foreach($lugar as $v){
                    echo"$v / ";
                }
            ?></div>
            <div id="bnt"><button><a href="index.php">Voltar</a></button></div>
        </form>

        <script>   
            function nums(){
                var numeros= document.getElementsByClassName('primeira-resp');
                var cont=1;
                for(let i=0; i<numeros.length;i++){
                    numeros[i].dataset.content = cont++;
                }
            }
        </script>
    </body>
</html>