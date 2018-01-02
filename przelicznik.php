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
        <div id="main">
		<div id="przelicznik">
		<h4> Przelicznik Wag</h4>
		<form action="przelicznik.php" method="POST" >
	
					 <b>produkt:</b>
						
							<select name="produkt">
								<option>wybierz produkt</option>
								<option>cukier</option>
								<option>kakao</option>
								<option>mąka pszenna</option>
								<option>mleko</option>
							</select>  </br></br>
												
					
					 <b>waga:</b>  <input type="text" name="wag"/>&emsp;<i>(dag)</i>
                    </br></br></br>
					<input type="submit" value="przelicz" />    </br>          
					</form>
					<?php
					if(isset($_POST['produkt']) && isset($_POST['wag']) && $_POST['wag']>0){
					
					$produkt=$_POST['produkt'];
					$wag=$_POST['wag'];
					switch($produkt){
						case 'cukier':
							$lyzka = round($wag/1.5, 2);
							$szklanka = round($wag/25, 2);
							echo "</br>"."cukier: ".$_POST['wag']."dag  = ".$lyzka." łyżek, lub ".$szklanka."szklanki";
						break;
						case 'mleko':
							$lyzka = round($wag/1.5, 2);
							$szklanka = round($wag/25, 2);					
							echo "</br>"."mleko: ".$_POST['wag']."dag  = ".$lyzka." łyżek, lub ".$szklanka."szklanki";
						break;
						case 'kakao':
							$lyzka = round($wag/0.6, 2);
							$szklanka = round($wag/10, 2);
							echo "</br>"."kakao: ".$_POST['wag']."dag  = ".$lyzka." łyżek, lub ".$szklanka."szklanki";
						break;
						case 'mąka pszenna':
							$lyzka = round($wag/0.9, 2);
							$szklanka = round($wag/15, 2);
							echo "</br>"."mąka pszenna: ".$_POST['wag']."dag  = ".$lyzka." łyżek, lub ".$szklanka."szklanki";
						break;
						default:
						echo "nie wybrałeś produktu";
					}
					}else {echo "";}
					?></div></div>
        <div id="licznik"><div style="margin-left:40px;">
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
