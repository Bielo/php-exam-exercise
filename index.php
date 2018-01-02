<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Strona o gotowaniu</title>
</head>

<body>
    <div id="container">
        <div id="logo"><img src="banner.jpg" alt="logo strony"></div>
        <div id="nav">
            <ol>
                <li><a href="index.php">Strona główna</a></li>
                <li><a href="przepisy.php">Przepisy</a></li>
                <li><a href="przelicznik.php">Przelicznik wag</a></li>
            </ol></div>
        <div id="mid">
        <div id="main"><h1>Książka kucharska</h1>
            <p>Na stronie znajdziesz przepisy i porady kulinarne.Jeżeli chcesz, to podziel się z nami swoim przepisem.</br> Prześlij go na adres: cosinf15@gmail.com.
            Każdy z przepisów uporzadkuj w następujący sposób:</p>
            <ul>
                <li>Składniki</li>
                <li>Wykonanie</li>
                <li>Czas pracy</li>
                <li>Zdjęcie</li>
            </ul></div>
        <div id="licznik">
            <div style="margin-left:40px;">
            <?php
             $dni=array('niedziela','poniedziałek','wtorek','środa','czwartek','piątek','sobota');  
            $miesiace=array('grudnia','stycznia','lutego','marca','kwietnia','maja','czerwca','lipca','sierpnia','września','października','listopada'); 
            
              $dzien=date('d'); 
              $dn=$dni[date('w')]; 
              $mc=$miesiace[date('n')];  
              $rok=date('Y');  
              echo 'Dzisiaj jest '.$dn.', '.$dzien.' '.$mc.' '.$rok.' roku.'; 
                ?></div></br>
           <div style="margin-left:40px;">Stronę odwiedziło:<?php
               $fp = fopen("licznik.txt", "r+");
               $count = fgets($fp);
               $count = $count + 1;
               fseek($fp, 0);
               fputs($fp, $count);
               fclose($fp);
               echo(" $count "."osób");
               ?></div>
            </div>
        </div>
        <div id="footer">Maciej Bielak, 11.06.2017 Strona wykonana w programie NotePad++ </div>
    </div>
</body>
</html>
