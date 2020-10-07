<!Doctype html>
<html>
    <head>  
        <title>ReservaCinema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <?php
        $lugar=$_GET["lugares"];
        ?>

        <H1 id="titulo">ESCOLHA OS ASSENTOS QUE DESEJA SENTAR:</H1>
        <div class="assentos"><form method="GET" action="dados-assento.php">
            <table>
                <tr>
                    <th>A</th>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++;$id=sprintf("A$n");
                        if(in_array($id, $lugar)){echo"<td><label for='A$n'>[---]</label></td>";}
                        else{echo"<td><label for='A$n'>[A$n]</label></td>";}}?>
                </tr>
                <tr>
                    <th>B</th>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++;$id=sprintf("B$n");
                        if(in_array($id, $lugar)){echo"<td><label for='B$n'>[---]</label></td>";}
                        else{echo"<td><label for='B$n'>[B$n]</label></td>";}}?>
                </tr>
                <tr>
                    <th>C</th>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++;$id=sprintf("C$n");
                        if(in_array($id, $lugar)){echo"<td><label for='C$n'>[---]</label></td>";}
                        else{echo"<td><label for='C$n'>[C$n]</label></td>";}}?>
                </tr>
                <tr>
                    <th>D</th>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++;$id=sprintf("D$n");
                        if(in_array($id, $lugar)){echo"<td><label for='D$n'>[---]</label></td>";}
                        else{echo"<td><label for='D$n'>[D$n]</label></td>";}}?>
                </tr>
                <tr>
                    <th>E</th>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++;$id=sprintf("E$n");
                        if(in_array($id, $lugar)){echo"<td><label for='E$n'>[---]</label></td>";}
                        else{echo"<td><label for='E$n'>[E$n]</label></td>";}}?>
                </tr>
            </table>
        </form></div>    

        <div id="bnt"><p>Você escolhes os assentos:
        <?php 
            foreach($lugar as $v){
                echo"$v / ";
            }
        ?></div>
        <div id="bnt"><button><a href="javascript:history.go(-1)">Voltar</a></button></div>
    </body>
</html>