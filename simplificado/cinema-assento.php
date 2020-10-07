<!Doctype html>
<html>
    <head>  
        <title>ReservaCinema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <H1 id="titulo">ESCOLHA OS ASSENTOS QUE DESEJA SENTAR:</H1>
        <div class="assentos"><form method="GET" action="dados-assento.php">
            <table>
                <tr>
                    <th>A</th>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++; echo"<td><input type='checkbox' id='A$n' value='A$n' name='lugares[]'>
                                   <label for='A$n'>[A$n]</label></td>";}?>
                </tr>
                <tr>
                    <th>B</th>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++; echo"<td><input type='checkbox' id='B$n' value='B$n' name='lugares[]'>
                                   <label for='B$n'>[B$n]</label></td>";}?>
                </tr>
                <tr>
                    <th>C</th>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                    $n++; echo"<td><input type='checkbox' id='C$n' value='C$n' name='lugares[]'>
                                   <label for='C$n'>[C$n]</label></td>";}?>
                </tr>
                <tr>
                    <th>D</th>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++; echo"<td><input type='checkbox' id='D$n' value='D$n' name='lugares[]'>
                                   <label for='D$n'>[D$n]</label></td>";}?>
                </tr>
                <tr>
                    <th>E</th>
                    <?php $n=0;for($c=1;$c<=10;$c++){
                        $n++; echo"<td><input type='checkbox' id='E$n' value='E$n' name='lugares[]'>
                                   <label for='E$n'>[E$n]</label></td>";}?>
                </tr>
            </table>
            <div id="bnt"><button><input type="submit"></button></div>
        </form></div>
    </body>
</html>