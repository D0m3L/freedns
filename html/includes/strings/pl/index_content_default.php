<?
$content = '
		<div class="boxheader">XName Software</div>
		<div class="boxcontent">
		Oprogramowanie XName zosta�o poprawnie(?) zainstalowane.<br />
		Musisz teraz poprawi� nast�puj�ce rzeczy:
		<ul>
		<li> copy libs/config.default into libs/config.php</li>
		<li> wszystkie pozycje w pliku libs/config.php</li>
		<li> je�li dostajesz b��dy z mysql, sprawd�, czy u�ytkownik 
		skonfigurowany w config.php istnieje, a tak�e czy nazwa bazy
		danych jest taka sama, jak ta w sql/creation.sql</li>
		<li> ten tekst: html/includes/strings/pl/index_content.php
		(ewentualnie wnie� poprawki do tego pliku w innych katalogach
		j�zykowych)</li>
		<li> wszystkie pliki html/*.php, aby pasowa�y do Twojego
		projektu strony (wszystkie u�ywane obecnie funkcje opisuj�ce stron�
		s� w pliku libs/html.php, �mia�o mo�esz u�y� swoich w�asnych!);
		klasa HTML jest u�yta tylko w tych plikach oraz w includes/*.php</li>
		</ul>
		</div>
	';
?>
