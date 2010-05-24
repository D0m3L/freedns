<?
$content = '
   <dl>
   <dt>Polskie znaki w nazwach domen [2009-12-31]</dt>
   <dd>Polskie znaki w nazwach domen uzyskuje si� przez wpisanie w konfiguracji nazwy IDN,
   nie bezpo�rednio nazwy z polskimi literami. Przyk�adowo
   zamiast <code>szko�ag��wnahandlowa.pl</code> trzeba za�o�y� 
   domen� <nobr><code>xn--szkoagwnahandlowa-lyb21mca.pl</code></nobr>.
   Przegl�darki automatycznie zamieniaj� nazw� z polskimi literami wpisan� w pasku adresu
   na posta� IDN rozumian� przez DNS, wi�c dla u�ytkownik�w jest to niezauwa�alne, tylko
   administrator DNS widzi, jak jest naprawd�. :)<p>
   T�umacz IDN jest m.in. na stronie <a href="http://www.dns.pl/cgi-bin/idntranslator.pl">NASK</a>.
   </dd>
   <dt>Zmienione delegowanie podstref stref odwrotnych [2008-11-28]</dt>
   <dd>Dla stref odwrotnych IPv6, jako �e zazwyczaj dostaje si� bardzo du�y
       blok IP, wprowadzi�em mo�liwo�� delegowanie ca�ych podsieci na inne serwery DNS
       (mo�na, oczywi�cie, poda� serwery FreeDNS).<p>
       Dla stref odwrotnych IPv4 zostaje po staremu &mdash; mo�liwo�� delegowania
       kawa�k�w sieci (kilku IP) innym u�ytkownikom FreeDNS. Wyszed�em z za�o�enia,
       �e na 99,99% tacy u�ytkownicy nie maj� do dyspozycji klas B, �eby rozpisywa�
       dla nich normalne delegacje.
   </dd>
	<dd>Prosz� o komentarze i zg�aszanie ewentualnych problem�w.</dd>
   <dt>Rekordy wildcard (*) [2008-09-12]</dt>
   <dd>Zamiast dodawa� <code>* IN A 123.45.67.89</code>, skorzystaj z wieloznacznego
   rekordu CNAME:<p>
   <code>* IN CNAME rekord<br>rekord IN A 123.45.67.89</code>
   </dd>
   <dt>Eksperyment: rekord WWW [2007-05-27]</dt>
   <dd>Doda�em eksperymentalnie nowy rekord: WWW. To nie jest rekord DNS, tylko
		 skr�t my�lowy na ramk� lub przekierowanie WWW. Dzia�a to w nast�puj�cy
		 spos�b: dodajemy rekord WWW "test". w domenie "nasza.pl" z zawarto�ci�
		 "http://gdzies.serwer.z.naszym/~username/i/plikami/". Je�eli zaznaczymy
		 "przekierowanie", to po wej�ciu na "test.nasza.pl" zostaniemy przekierowani
		 na stron� jw., a je�eli "ramka", to zobaczymy od razu nasz� stron� (ukryt�
		 w ramce). Oczywi�cie trzeba chwil� odczeka�, bo serwer dodaje po cichu
		 nowy rekord A wskazuj�cy na adres serwera WWW, kt�ry to obs�uguje. :)
   </dd>
	<dd>Bardzo prosz� o komentarze i zg�aszanie ewentualnych problem�w.
	</dd>
	<dt>Rekordy SRV [2006-10-20]</dt>
	<dd>
        Po aktualizacji dosz�a jedna opcja w ustawieniach u�ytkownika: "rekordy SRV".
        Nale�y j� sobie w��czy�, je�li chcecie zmienia� rekordy SRV. 
   </dd>
	<dt>Rekordy TXT [2005-07-25]</dt>
	<dd>
        Po aktualizacji dosz�a jedna opcja w ustawieniach u�ytkownika: "rekordy TXT".
        Nale�y j� sobie w��czy�, je�li chcecie zmienia� rekordy TXT. Dodatkowo mo�na
	teraz robi� rekordy TXT nie tylko na domen� g��wn�.
        </dd>
	<dt>Automatyczne aktualizacje [2005-02-28]</dt>
	<dd>
	Aktualizacja wpis�w do DNS odbywa si� co kwadrans o :01, :16, :31 i :46. <!-- Prosz�
	wywo�ywa� skrypt do dynamicznej aktualizacji danych nie p�niej ni� o
	:00 i :30, bo mo�e si� zdarzy�, �e jeszcze nie wygeneruje, a ju� zapisze,
	�e wygenerowa�. :-) -->
        </dd>
	<dt>Nazwa z kropk� [2005-01-22]</dt>
	<dd>
	Ulegaj�c wielu pro�bom u�ytkownik�w umo�liwi�em tworzenie wpis�w IN A
	zawieraj�cych jedn� kropk�.
   </dd>
	<!-- <dt>Admin DNS [2004-01-20]</dt>
	<dd>
	Je�eli rejestruj�cy domen� (np. NASK) wymaga podania danych osobowych
   i/lub emaila administratora domeny, to podawajcie wasze. To wy b�dziecie
   zarz�dza� domen�, nie ja. Nie wpisujcie mnie jako administratora
   waszych domen.
   </dd> -->
	<dt>Dynamiczny DNS [2003-12-12]</dt>
	<dd>
	Kilka s��w wyja�nienia: mo�liwo�� aktualizacji IP przez skrypt (poni�ej)
	to nie jest prawdziwy dynamiczny DNS &mdash; ten system od�wie�a
	konfiguracj� co kwadrans. Je�li Twoje IP zmienia si� cz�ciej, to nie
	jest serwis dla Ciebie (chyba �e u�yjesz CNAME na adres w "prawdziwym" DynDNS).
   </dd>
	<dt>CNAME na domen� [2003-12-11]</dt>
	<dd>
	Nie da si� ustawi� CNAME na domen�. Prosz� nie pyta� o tak� mo�liwo��.<br>
	"cokolwiek IN CNAME" &mdash; tak, "@ IN CNAME" &mdash; nie.<br>
	To nie jest m�j wymys�, RFC 1034 zabrania rekord�w, kt�re maj� co� opr�cz 
	CNAME (a tak jest w przypadku rekordu domeny, kt�ry przecie� musi mie� SOA i NS).
   </dd>
	<dt>Dynamiczny DNS</dt>
	<dd>
        Ju� dzia�a dynamiczne aktualizowanie rekord�w A! W tym celu u�ywany
        jest XML RPC. Przygotowa�em <a href="freedns-dyndns.py">skrypt w Pythonie</a>,
        kt�ry w prosty spos�b (<tt>freedns-dyndns.py --help</tt> lub zajrzyj do
        �r�d�a) pozwoli Ci na zmian� Twojego IP. Po zmianie IP wystarczy uruchomi�
        <tt>freedns-dyndns.py --newaddress <i>no.wy.ip</i></tt> i ju�! (�eby nie
        musie� podawa� nazwy hosta, u�ytkownika i has�a w linii komend, 
        trzeba poprawi� domy�lne warto�ci w �r�dle; stare IP mo�na poda� jako \'*\',
        nie trzeba b�dzie go nigdzie zapisywa�.)<br>
        Innym sposobem jest skorzystanie z jakiegokolwiek serwisu oferuj�cego
        us�ug� dynamicznego DNS (np. <a href="http://www.dyndns.org">DynDNS</a>)
        i dodanie tutaj rekordu CNAME host.Twoja.domena wskazuj�cego na nazw�
        w zewn�trznym serwisie.
	</dd>
	<dt>Dwa serwery DNS</dt>
	<dd>
	Zrezygnowa�em z obowi�zku rejestrowania obu serwer�w DNS,
	teraz obowi�zkowy jest tylko fns1.sgh.waw.pl. Oczywi�cie
	dalej mo�na wpisywa� fns2.sgh.waw.pl (193.111.27.194). W dodatku
	na razie fns2 b�dzie posiada� dok�adn� kopi� fns1, a tak�e b�dzie
	sam pr�bowa� �ci�ga� zawarto�� stref, dla kt�rych jeste�my
	zapasowym serwerem DNS.
	</dd>
	<dt>Idea</dt>
	<dd>
	Darmowy serwis utrzymywania DNS przeznaczony jest dla os�b, kt�re nie
	chc� traci� czasu ani pieni�dzy u provider�w (kt�rzy w dodatku
	czasem nie s� zbyt �wawi, je�li chodzi o zmiany w DNS).</dd>
	<dd>
	Oferujemy Ci podstawowy <b>oraz</b> zapasowy serwer nazw.
	<br />
	Wszystkie strefy obs�ugiwane jako podstawowe lub zapasowe na
	g��wnym serwerze &mdash; fns1.sgh.waw.pl (194.145.96.21) &mdash; s� automatycznie
	replikowane na nasz drugi serwer, fns2.sgh.waw.pl (193.111.27.194).</dd>
	<dd>Je�eli rejestruj�cy domen� (np. NASK) wymaga podania danych osobowych
   i/lub emaila administratora domeny, to podawajcie wasze w�asne. To wy b�dziecie
   zarz�dza� domen�, nie ja. Nie wpisujcie mnie jako administratora
   waszych domen.</dd>
	<dd>
	Wszystkie konfiguracje musz� zosta� przeprowadzone przy u�yciu
	tego interfejsu WWW.</dd>
	<dt>Skontaktuj si� z nami</dt>
	<dd>
	Je�li masz jakie� pytania, napisz do nas email na adres
	<a href="mailto:freedns na sgh kropka waw kropka pl" class="linkcolor">
	freedns na sgh waw pl</a>. Czekaj cierpliwie &mdash; to darmowy serwis i na
	pytania odpowiadamy w wolnym czasie.
	</dd>
   </dl>
';
$oldcontent = '
	<dt>Aktualizacja oprogramowania [2006-10-20]</dt>
	<dd>
        Dzi� zaktualizowa�em oprogramowanie XName do najnowszej wersji. 
        Rzu�cie okiem na swoje strefy... mam nadziej�, �e nic si� nie popsu�o.
   </dd>
   <dt>Cz�stsze aktualizacje [2007-04-29]</dt>
   <dd>Ha, zapomnia�em napisa�, �e od lutego serwery s� aktualizowane co kwadrans,
       nie co p� godziny.
   </dd>
   <dt>B��d oprogramowania [2007-04-22]</dt>
   <dd>Piotr Szepty�ski z Marcinem Kopcem znale�li b��d w oprogramowaniu XName
       pozwalaj�cy ogl�da� cudze logi strefy. B��d oczywi�cie natychmiast 
       poprawi�em. Co zreszt� i tak nie ma wi�kszego znaczenia, bo z r�nych
       powod�w logi nie s� aktualizowane na bie��co. :(
   </dd>
   <dt>Brak list�w z powiadomieniem o zmianach w strefie [2006-10-31]</dt>
   <dd>Oczywi�cie po aktualizacji co� si� popsu�o: a mianowicie przesta�y
       przychodzi� listy z powiadomieniem o zmianach w strefie. Ju� naprawione.
   </dd>
	<dt>Problemy z fns2 [2006-08-08]</dt>
	<dd>
		Mamy problem z fns2, a administrator pojecha� na urlop. :(<br />
		Bardzo wszystkich przepraszam za k�opot.
	</dd>
        <dt>Dynamiczne aktualizowanie rekord�w [2005-08-30]</dt>
        <dd>
        Dynamiczne aktualizowanie rekord�w przy pomocy skrypt�w wykorzystuj�cych
        XML RPC chwilowo nie dzia�a. Gdy zniknie ten komunikat, to znaczy, �e ju�
        dzia�a. :-)
        </dd>
	<dt>Aktualizacja oprogramowania [2005-07-24]</dt>
	<dd>
        Dzi� zaktualizowa�em oprogramowanie XName do najnowszej 
        wersji. Rzu�cie okiem na swoje strefy... mam nadziej�, �e nic si�
	nie popsu�o.
        </dd>
	<dt>pf.pl =&gt; epf.pl [2005-03-15]</dt>
	<dd>
        W zwi�zku ze zmian� domeny pf.pl na epf.pl i zaprzestaniem �wiadczenia
        us�ug pod star� nazw� poszed�em u�ytkownikom na r�k� (mam nadziej�!)
        i zmieni�em hurtem wszystkie adresy mailowe z @pf.pl na @epf.pl.
        </dd>
	<dt>Problem z fns2.sgh.waw.pl [2004-10-07]</dt>
	<dd>
        Popsu� si� serwer, na kt�rym stoi fns2. Nie dzia�a� prawie przez ca�y
	dzie� 7. pa�dziernika, zosta� podmieniony tymczasowo na s�absz� maszyn�
	(ale nie powinno to zosta� zauwa�one) i ma by� naprawiony w weekend.
        </dd>
	<dt>FreeDNS::SGH na 42. miejscu [2004-09-15]</dt>
	<dd>
	W serwisie top100.pl FreeDNS::SGH zajmuje przyjemne 42. miejsce w rankingu
	serwis�w DNS pod wzgl�dem ilo�ci obs�ugiwanych domen .pl<br>
	<strong>To wasza zas�uga, u�ytkownicy &mdash; dzi�kuj�.
   </strong> :-)</dd>
	<dd>
	42. miejsce jest przyjemne dlatego, �e posiadam domen� 
	<a href="http://42.pl/">42.pl</a>
	i FreeDNS mia� tam sta� (a mo�e jeszcze b�dzie!).<br>
	Przy okazji ma�e pi�tno dla top100 za podawanie b��dnego adresu
	www do FreeDNS (do "freedns.sgh.waw.pl" dokleili na pocz�tku "www."
	(taka nazwa nie istnieje) i, co gorsza, odmawiaj� poprawienia t�umacz�c
	si�, �e "taki maj� skrypt" &mdash; lazy excuse of the day).
        </dd>
	<div class="boxheader"><em>strefa po��czona z t� ju� istnieje i to
 nie Ty ni� zarz�dzasz...</em>[2004-09-15]</dd>
	<dd>
	Poprawi�em w ko�cu to ograniczenie odno�nie zak�adania stref, kt�re
	s� podstrefami ju� istniej�cych. A konkretnie doda�em warunek, �e to
	ograniczenie dzia�a tylko dla stref podstawowych (w tym wypadku
	w�a�ciciel mo�e za�o�y� podstref� i odda� uprawnienia do niej komukolwiek).
	Dla stref, kt�re w serwisie by�y tylko jako secondary (jak np. pl.eu.org),
	ograniczenie to uniemo�liwia�o skorzystanie z serwisu w og�le.
	Za k�opot przepraszam.
        </dd>
	<dt>Naprawione listowanie stref [2004-09-15]</dt>
	<dd>
	Serwer DNS dzia�a� poprawnie, ale nie mo�na by�o wylistowa� zawarto�ci
	stref z innych serwer�w w interfejsie WWW. Problem naprawiony.
        </dd>
	<dt>Chwilowa przerwa w dzia�aniu [2004-09-01]</dt>
	<dd>
	Ze wzgl�du na upgrade sprz�tu w dniu dzisiejszym interfejs WWW FreeDNS::SGH
	mo�e by� chwilami nieczynny (komunikat "problem z baz� danych" i brak 
	mo�liwo�ci zalogowania si� na swoje konto). Sam serwer DNS powinien
	dzia�a� bez przeszk�d.
        </dd>
	<dt>U�ytkownicy z adresami @konto.pl [2004-08-20]</dt>
	<dd>
        Administratorzy konto.pl postanowili odrzuca�
        maile z domeny sgh.waw.pl, a wi�c tak�e z serwisu FreeDNS::SGH. Sugeruj�
        zapisywa� si� z innego adresu mail lub spr�bowa� wyja�ni� spraw�
        u administrator�w konto.pl.
        </dd>
	<dt>Problemy z baz� danych [2004-07-22]</dt>
	<dd>
	Z�o�liwo�� komputer�w, spu�ci� je z oka na kilka dni i si� psuj�. :-)
	Naprawione i mam nadziej�, �e si� nie powt�rzy.
        </dd>
	<dt>Rekordy TXT [2004-06-10]</dt>
	<dd>
	Na pro�b� u�ytkownik�w doda�em mo�liwo�� tworzenia rekord�w TXT.
        </dd>
	<dt>Bezpieczne logowanie [2004-05-30]</dt>
	<dd>
	Na pro�b� u�ytkownik�w logowanie do serwisu jest szyfrowane przez SSL.
	Niestety musia�em przez to zmieni� adres IP interfejsu WWW &mdash; teraz jest to
	194.145.96.21 (taki sam, jak adres serwera fns1).
        </dd>
	<del><dt>Uwaga przy tworzeniu domen [2004-05-27]</dt>
	<dd>
	Uwaga: po utworzeniu strefy nale�y j� zmodyfikowa�! Cho�by�cie nie dodawali
	�adnego wpisu, trzeba wej�� w zak�adk� modyfikuj stref� i wybra�
	<b>Utw�rz konfiguracj� strefy</b>. W przeciwnym wypadku strefa nie b�dzie
	widoczna jako dzia�aj�ca (przynajmniej dop�ki nie naprawi� tego b��du).
   </dd></del>
	<dt>Problemy z logami [2004-04-14]</dt>
	<dd>
	Poprawi�em problem braku �wie�ych log�w oraz niepoprawnych dat
	w logach. Przy okazji skasowa�em istniej�ce logi i za�adowa�em
	od nowa logi od pocz�tku roku &mdash; przejrzyjcie i pokasujcie.
   </dd>
	<dt>D�ugie logowanie [2004-02-13]</dt>
	<dd>
	Wyst�puj�ce od jakiego� czasu problemy z d�ugim logowaniem (i do�� cz�sto
	du�ymi utrudnieniami w zarz�dzaniu strefami) okaza�y si� wynikiem
	b��du w skrypcie wrzucaj�cym do bazy logi serwera DNS. Od 1 lutego nazbiera�o
	si� ich ca�kiem niepotrzebnie ponad 3.5mln, co (w zwi�zku z r�nymi
	procedurami wykonuj�cymi si� w trakcie logowania) kompletnie zatka�o
	serwer. Ju� powinno by� w porz�dku.
   </dd>
	<dt>Cz�ciej [2003-12-05]</dt>
	<dd>
	Teraz strefy s� od�wie�ane co p� godziny &mdash; taki Miko�ajkowy prezent ;)
   </dd>
	<dt>Drobiazgi [2003-11-28]</dt>
	<dd>
        Poprawiono kilka drobiazg�w. M.in. mo�na u�ywa� CNAME z kropk�,
        a tak�e korzysta� z @ (zamiast pe�nej nazwy) do robienia wpis�w
        dla samej strefy.<br>
        Dodatkowo zmieni�em interfejs w zak�adce modyfikacji &mdash; mam nadziej�,
        �e teraz jest czytelniej.
        </dd>
	<dt>Upgrade</dt>
	<dd>
        Zaktualizowa�em oprogramowanie FreeDNS. Przy okazji wkrad�o si�
        kilka b��d�w, kt�re musia�em r�cznie poprawi�, co spowodowa�o
        konieczno�� wygenerowania wszystkich stref od nowa. St�d te listy
        o tym, �e prze�adowano Twoje strefy.
        </dd>
';
?>
