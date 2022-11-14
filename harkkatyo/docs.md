# Dokumentaatio harkkatyöstä

Studio Rumian verkkosivut (blogi/verkkokauppa)
Tanja Korolainen, AB3775, TTV21SM
Web-julkaisujärjestelmät syksy 2022
Palautettu ?????

Ei mitään kokemusta php-ohjelmoinnista entuudestaan. Javascriptiä olen vähän pyöritellyt, samoin html on tuttua, css:stä perusteet. Bootstrap oli onneksi entuudestaan tuttu, joten sen muotoiluja oli suht helppo muuttaa, kun löysi php-koodin seasta oikeat kohdat.

## Taustaa
Linkki sivustolle: http://172.21.4.76/rumia/

Sivusto on suunnattu työssäkäyville ja työelämässä hieman pidempään olleille naisille, jotka ovat ikähaarukassa 25-45. Naisille, joiden arvomaailmaan kuuluu ekologisuus, luonto, DIY-meininki ja jotka arvostavat taidetta/kulttuuria ja haluavat tukea suomalaisia pienyrittäjiä laadukasta ja kaunista ulkoasua. 
Sivuston tarkoitus on toimia väylänä myydä Studio Rumian palveluita ja tuotteita (käsityöt ja valokuvauspalvelut), Blogi toimii sisällön tuottajana, johon tuotetaan ilmaisia käsityö- ja leivontaohjeita ja samalla päästää sivustolla vierailevat tutustumaan hiukan syvemmin yrittäjän mielenmaisemaan. Tavoitteena on toki saada myytyä tuotteita ja valokuvauspalveluita.

## Suunnittelu 

Aloitin harkkatyön tekemisen valitsemalla sopivan teeman. Loin sivuston VLE-ympäristöön, mutta tarkoitus on tehdä varmuuskopiot paikalliselle koneelleni, josta siirrän ne githubiin. Sivuston aihe (halusin sivustolle myös woocommerce-verkkokaupan, mutta sen lisäksi blogimaisen tunnelman) rajasi sopivia teemoja aika paljon, joten lopulta teeman löytäminen pohjaksi oli suhteellisen helppoa ja nopeaa wp:n hakutoiminnalla. Alla olevasta kuvasta näkyy valitsemani teema: Multipurpose-Blog

![](img/teema.png)

Olin jo päättänyt jonkun aikaa sitten mitä sisältöä eli millaisen rakenteen haluan sivustolle luoda, joten menun luominen oli lopulta simppeli homma. Alunperin suunnittelin työstä yksinkertaisen, jota voisin monipuolistaa ajan riittäessä. En kuitenkaan halunnut haukata liian suurta palaa heti kerralla, joten koin helpommaksi aloittaa pienestä ja ajan riittäessä lisätä toiminnallisuuksia ja omia säätöjäni. Tähän minulla meni aikaan n. 3h ottaen huomioon brainstormauksen mitä olin tehnyt jo aiemmin kurssin aikana. 


## Day 1
Itse sivuston rakentamisen aloitin verkkokaupasta. 

Loin verkkokaupan tuotteet csv-generaattorilla. Sainpa samalla muistutella itselleni javascriptiä, kun generaattorilla pystyi luomaan myös fuktioilla arvoja muiden kenttien arvoista riippuen. Tämä helpotti suunnattomasti järkevän tuotekatalogin rakentamista. Tajusin vasta importtauksen jälkeen, että jouduin lisäämään kuvat manuaalisesti. Onneksi en halunnut verkkokauppaan kuin 20-30 tuotetta, joten manuaalinen näpertely ei ollut ihan kamalan työlästä. 
![](img/csv_gen.png)
Tähän meni aikaa n. 3-4h, sillä sopivan csv-generaattorin etsiminen ja käytön opettelu vei aikaa. Sain kuitenkin tässä ajassa verkkokaupan tehtyä loppuun lukuunottamatta kategorioiden lisäämistä menuun.

## Day 2
Verkkokaupan kategoriat menuun, toiminnan testaus ja pieniä viilauksia, lopun sivuston hahmottelua. Eli uudet Pagesit Esittelylle, Gallerialle ja Yhteydenotolle. Samaan aikaan päivitin menua koko ajan. Sopivan lisäosan olin etsinut jo suunnitteluvaiheessa valokuvagallerialle. Valitsin gallerialle "Photo Gallery"-nimisen lisäosan, latausten määrän ja ilmaisen version ominaisuuksien perusteella. Pisimpään meni ehkä aikaa kuvien lataamisessa, sillä halusin helpottaa omaa naputteluani ja latasin omia kuviani sivuille. Näin ei tarvinnut miettiä käyttöoikeuksia sen kummemmin. Lisäosan kautta sain kaikki gallerian tarvitsemat asetukset asetettua suoraan käyttöliittymästä. Tähän meni aikaa n. 4h, josta suuri osa meni kuvien lataamiseen ja etsimiseen.

## Day 3
Muokkasin galleria-sivua sen verran, että otin sivun titlen pois käytöstä, sillä halusin cover-kuvan toimivan sivun otsikkona:
![](img/galleria_template.png)
![](img/galleria_sivu.png)

Tässä vaiheessa muistin tehdä lapsiteeman multipurpose-blog teemasta. Jouduin siis kopioimaan pari tiedostoa isäntäteeman kansiosta lapsikansioon. Onneksi vain 3!

Esittelysivusta tein Custom Postin, eli Esittely-sivun. Esittely-sivu on archive-muotoinen sivu, johon on kerätty kaikki hahmot Rumia-Studiolta. Custom Post on tehty sivustokohtainen pluginin avulla (jonka tein itse, tähän ei siis ole käytetty lisäosaa). Koodi löytyy harkkatyön alta githubista nimellä oma-plugin.php ja esittelyjen sivupohja löytyy nimellä single-esittely.php. Käytin single-esittelyssä hyödyksi single.php tiedostoa, jota muokkasin tarvittavan verran, jotta sain sidebarin puolen muutettua sekä sidebarin itsessään vaihdettua toiseksi ja haluamani lisätiedot näkyviin.

Custom Fieldseissä käytin tällä kertaa metatietoja, eli en käyttänyt tässäkään lisäosaa, vaan naputtelin haluamani custom fieldsit käyttöliittymäsä ja näytin ne the_meta() funktiolla single-esitys.php:ssä. 
![](img/single-esittely.png)
Jouduin jonkun verran muuttamaan bootstrap-koodia, jotta sain sidebarista pienemmän ja itse postista isomman. Ongelmaksi muodostui se, että olisin halunnut kys. koodia lyhyemmäksi, koska mielestäni if-else rakennetta ei tuonne tarvita, koska sivua ei muokata enää erikseen käyttöliittymän kautta, mutta en löytänyt oikeaa pätkää, mitä voin poistaa ilman, että koko sivu menee rikki. Tähän siis tarttee kysyä open neuvoa. Tänään aikaa meni noin 6h. Suurin osa meni single-esittelykoodin muokkaamiseen, sillä se meni aikalailla yritä-erehdy-metodilla.

## Day 5
Esittelysivun archive-versio olisi ollut ihan nätti sellaisenaankin (eli archive.php:n asetuksilla), mutta halusin muokata siitä kuitenkin omanlaiseni, joten tein allaolevan koodin siihen. Periaatteessa ulkoasu ei ihan kamalasti muuttunut muuten kuin kuvat pienenivät ja grid-muotoilu(korttityyli) poistui.

![](img/esittely_archive.png)

Muokkasin myös single-esittely.php:tä niin, että sain postien välisen navigaation toimimaan ja näyttämään järkevältä:

![](img/single_nav.png)

Yhteydenottolomake toimii Forminator-lisäosan kautta, sillä saa lähetettyä viestin sekä laitettua ehdotuksen valokuvausajalle. Oletuksena form tuli vähän turhan lähelle teksti-kappaletta, niin muokkasin tekstin alamarginaalia, jotta sain siihen hiukan tilaa. Muutin myös lomakkeen css-koodia hieman (tein lomakkeesta kapeamman ja keskitin sen). Muokkasin oletus värit paremmin sopimaan teemaan (sinisestä vihreäksi korostukset). 

Päivitin kauppasivuja vielä sen verran, että sain sinne oman sidebarin, eli muokkasin woocommerce/templates/global/sidebar.php-tiedostoa niin, että vaihdoin sidebarin nimen "shop":sta "kauppa"an, jolloin sain käyttiksessä muokkaamani sidebarin näkyviin vain kaupan sivuille. Lisäsin käyttiksessä tuotteiden etsimiselle ja uusille tuotteille otsikot ja lisäsin niihin ylä-marginaalia hiukan ja muokkasin uusimpien tuotteiden näyttöasetuksia niin, että rivejä oli kolmen sijaan kaksi. Muuten sidebar meni oletusasetuksilla. 

Tänään aikaa meni eniten jälleen php-koodin rakentamiseen toimivaksi. Yhteensä aikaa meni n. 5h

## Day 6-7
Blogisivu kuntoon (artikkeleita lisää, archive näkymän muokkaus gridimuotoon? vai mahdollisesti jaottelu kategorioittain kuten teeman kuvassa? Hero-kuva etusivulle? Tekeekö sotkuisen?)

## Day 7-8 
Loppuviilaus (menun säätö, testaus)

## Day 8/9
Raportin loppuunvienti