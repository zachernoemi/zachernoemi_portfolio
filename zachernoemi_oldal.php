<!DOCTYPE html>
<html>
<head>
	<title> Zacher Noémi Portfólió </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/oldal.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
		
	<div class="teto">
			<span class="cim"> Zacher Noémi</span>
				<div class="egesz">
				<div class="doboz1">
				<img class="kep1" src="kepek/boja4.jpg" alt="tájfutó bója">
				</div>
				<div class="doboz2">
				<img class="kep1" src="kepek/24oras3.jpg" alt="Zacher Noémi tájfutás közben">	
				</div>
				<div class="doboz3">
					<div class="box1"><img class="kep2 terkepek"src="kepek/map4.jpg" alt="belvárosi tájfutó térkép részlet"></div>
					<div class="box2"><img class="kep2 terkepek" src="kepek/map1.jpg" alt="erdei tájfutó térkép részlet"></div>
					<div class="box3"><img class="kep2 terkepek" src="kepek/map3.jpg" alt="sziklás tájfutó térkép részlet"></div>
					<div class="box3"><img class="kep2 terkepek" src="kepek/map5.jpg" alt="mocsaras tájfutó térkép részlet"></div>
				</div>
			</div>

		<div id="ikon">
			<ul class="menu">
		  <li><a href="zachernoemi_tajfutasrol.php"><i class="fa fa-compass"></i>
			 <span class="leiras">A tájfutásról...</span></a></li>
		  <li><a href="zachernoemi_feladataim.php"><i class="fa fa-tasks"></i>
		  	<span class="leiras">Feladataim</span></a></li>
		  <li><a href="zachernoemi_eredmenyeim.php"><i class="fas fa-medal"></i>
		  	<span class="leiras">Eredményeim</span></a></li>
		  <li><a href="zachernoemi_celok.php"></i> <i class="fa fa-globe"></i>
		  	<span class="leiras">Céljaim</span></a></li>
		  <li><a href="zachernoemi_oldal.php"> <i class="fas fa-drafting-compass"></i>
		  	<span class="leiras"> Oldal létrejötte</span></a></li>
		  	</ul>
		</div>
		<a href="zachernoemi_portfolio.php" name="text" id="kezdooldal"> Kezdő oldal</a>
			<span class="portfolio"> portfólió </span>
		
	</div>

	<div class="oldal">
		<h1>Oldal létrejötte</h1>
		<p class="szoveg"> A portfóliós oldal létrehozásánál kát probláma volt, ami eléggé megnehezítette a dolgomat. Az egyik, hogy nehezen találtam ki, az oldal felépítését és annak a tartalmát, illetve, hogy az inforatika tantárgy sajnos nem a kedvenc tantárgyaim közé tartozik. Azt nem állítanám, hogy a jövőben programozó leszek (szerintem önök sem), de a végére egészen szerettem csinálni és tovább fejlesztgetni.</p>
		<h2 class="szoveg">Alap koncepció</h2>
		<p class="szoveg">Volt a tervezés folyamán néhány dolog, amit már az elején tudtam. Az egyik ilyen volt, hogy viszonylag sötét háttért szerettem volna, fehér szöveg színnel. Az oldal tetejére több képet is szerettem volna igényesen elhelyezni. Illetve kicsit ki is akartam tekinteni a portfóliós témámra, hogy akik számára ismeretlen, azoknak is érthetővé válljon, miről is van szó.</p>
		<p class="szoveg">Az egyik legnehezebb az volt a programozás során, hogy tervezés közben született egy elképzelésem, amihez ragaszkodtam, azt akartam megvalósítani, így nagyon sok időbe telt míg az alap oldalt összeraktam.</p>
		<h2 class="szoveg">Tervek</h2>
		<p class="szoveg">Volt egy nagyon kezdetleges ötletem:
		<div class="tervek"><img src="kepek/terv1.jpg" align="Első terv az oldal kinézetéről"></div><br>
		<p class="szoveg">Ezt az elképzelést variáltam tovább. A tervezett menü ikon helyett a menü sáv melett döntöttem, illetve a térkép részletekből egy montázst akartam létrehozni (ehhez a kép dobozok számát háromra csökkentettem). Az utóbbi megvalósítása elég nehézkesen sikerült. Továbbá a háttérszínt is nagy nehezen kiválasztottam, amit színátmenetesen akartam megvalósítani</p>
		<div class="tervek"><img src="kepek/terv2.jpg" align="Második terv az oldal kinézetéről"></div>
		<br>
		<p class="szoveg">A végleges verzióhoz egy kezdőoldalt is hozzáadtam, amit így képzeltem el:</p>
		<div class="tervek"><img src="kepek/terv3.jpg" align="Első terv az oldal kinézetéről"></div>
		</p>
		<h2 class="szoveg">1. probláma - montázs</h2>
			<ul class="szoveg">
				<li>Előszőr a négy térképből álló válogatást külön kép szerkesztőben akartam üsszevágni, majd úgy beszúrni. Ezt a többi képpel sehogy sem tudtam egy magasságra hozni, mindig volt egy kis méret eltérés, így ezt a megoldási lehetőséget elvetettem.</li>
				<li>Utána táblázatként akartam megvalósítani, de a kép méretek így sem stimmeltek.</li>
				<li>A következő probálkozásom az volt, hogy online a képek pixel méretét egységesre állítottam, ez már egészen úgy nézett ki mint ahogy szerettem volna, de a montázs részénél a képek között rés keletkezett.</li>
			</ul>
				<div class="tervek"><img src="kepek/terv4.jpg" align="Montázsnál rés keletkezett"></div>
			<ul class="szoveg">
				<li>Ezután a div tageket és a táblázatot kezdtem el variálni. És ezután volt az a pillanat, amikor rájöttem, hogy arányosan kellen csökkennie a tartalomnak a képernyő kicsinyítésekor...Ezzel a problámával nagyon sokat szenvedtem és még a montázzsal is voltak gondok.</li>
				<li>A megoldás végül nem magamtól született meg, hanem egy programozó barátom segített benne. A táblázatot tehát elvetettem és divekkel, viszonylag egyszerű parancsokkal csak sikerült létrehozni egy montázst. Mivel aprólékos térkép részleteket szerettem volna ebbe beilleszteni, így nagyítást is raktam rájuk, még pedig úgy, hogy a cursor a jó láthatóság érdekében a nagyításkor tűnjön el.</li>
			</ul>
		<h2 class="szoveg">2. probláma - linkek, igazítások </h2>
		<p class="szoveg"> Az oldalon belüli igazítások elég nehézkesen mentek. A legtöbbet a portfólió felirat elhelyezkedésével szenvedtem. Ekkor ismerkedtem meg a display parancsokkal.</p>
		<p class="szoveg">A linkekkel tulajdonképpen csak a figyelmetlenség volt a problámám. A portfólió feliratot véletlenül a hivatkozáson belülre helyeztem el, ami sajnos elég sok időbe telt, mire feltűnt.</p>
		<h2 class="szoveg">3. probláma - menü sáv</h2>
		<p class="szoveg">A menü sáv középre igazítása, arányos méretezése, linkek beszúrása, szín változás, cursor stb. egyszerre okozták a problámát. A megoldásához elég sokat keresgéltem az interneten. A hibákat folyamatában sikerült javítgatni. A menü adott elemei fölá eredetileg három ikon tartozott, de a végén túl zsúfoltnak tartottam, így azokat kivettem. Ezt követően az alap oldal elkészült, már csak apróbb finomítások voltak rajta. Az oldalak összekötésével és a tartalom feltöltésével már nem volt különösebben problémám.</p>
		<h2 class="szoveg">Felhasznált weboldalak</h2>
		<ul class="szoveg">
			<li><a class="weboldalak" href="https://www.w3schools.com/?fbclid=IwAR0URCJpnDVMmXUFm9IplCH4RaqxhgNbfGI0Y6ru9NWi92FppN7kcuC1MQI">www.w3schools.com</a></li>
			<li><a class="weboldalak" href="http://users.atw.hu/webmesterke/index.php?temakor=css3&almenu=css_menu&oldal=css_menu_1">css alapok</a></li>
			<li><a class="weboldalak" href="https://fonts.google.com/specimen/Roboto">betű stílus - roboto google form</a></li>
			<li><a class="weboldalak" href="https://fontawesome.com">ikonok</a></li>
		</ul>
			
		
		<img class="foto" src="kepek/panorama1.jpg" alt="panoráma egy őszi tájról"><img class="foto" src="kepek/panorama1.jpg" alt="panoráma egy őszi tájról"><img class="foto" src="kepek/panorama1.jpg" alt="panoráma egy őszi tájról"><img class="foto" src="kepek/panorama1.jpg" alt="panoráma egy őszi tájról"><img class="foto" src="kepek/panorama1.jpg" alt="panoráma egy őszi tájról">

</body>
</html>
