<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css"/>
    <script type="text/javascript" src="javascript.js"></script>

    <style>  </style>

</head>
<body>
    <h1 id="titulo">ESCOLHA OS ASSENTOS QUE DESEJA SENTAR:</h1>
    <form method="GET" action="dados.php">
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

        <div id="bnt"><button><input id="myBtn" type="submit"></button></div>

    </form>
</body>
</html>
