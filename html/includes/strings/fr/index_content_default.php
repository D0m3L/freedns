<?
$content = '
		<div class="boxheader">Logiciel XName</div>
		<div class="boxcontent">
		Vous avez install� le logiciel XName avec succ�s (?). <br >
		Prenez garde aux points suivants:
		<ul>
		<li> copiez libs/config.default en libs/config.php</li>
		<li> Modifiez tous les �l�ments dans libs/config.php</li>
		<li> Si vous avez des erreurs mysql, v�rifiez que l\'utilisateur
		configur� dans config.php existe, et que le nom de la base de donn�es
		est le m�me que celui que vous avez modifi� dans sql/creation.sql</li>
		<li> Modifiez ce texte - html/includes/strings/fr/index_content.php (et copiez
		ce fichier dans tous les r�pertoires html/includes/strings/*) </li>
		<li> Modifiez tous les fichiers html/*.php pour correspondre � votre
		design html (toutes les fonctions graphiques utilis�es sont regroup�es 
		dans libs/html.php, n\'h�sitez pas � utiliser vos propres fonctions !).
		La classe Html n\'est utilis�e que dans ces fichiers et includes/*.php</li>
		</ul>
		</div>
	';
?>
