# Dokumentaatio harkkatyöstä

Studio Rumian verkkosivut (blogi/verkkokauppa)
Tanja Korolainen, AB3775, TTV21SM
Web-julkaisujärjestelmät syksy 2022
Palautettu ?????

## Taustaa
Linkki sivustolle: http://172.21.4.76/rumia/

Sivusto on suunnattu työssäkäyville ja työelämässä hieman pidempään olleille naisille, jotka ovat ikähaarukassa 25-45. Naisille, joiden arvomaailmaan kuuluu ekologisuus, luonto, DIY-meininki ja jotka arvostavat taidetta/kulttuuria ja haluavat tukea suomalaisia pienyrittäjiä laadukasta ja kaunista ulkoasua. 
Sivuston tarkoitus on toimia väylänä myydä Studio Rumian palveluita ja tuotteita (käsityöt ja valokuvauspalvelut), Blogi toimii sisällön tuottajana, johon tuotetaan ilmaisia käsityö- ja leivontaohjeita ja samalla päästää sivustolla vierailevat tutustumaan hiukan syvemmin yrittäjän mielenmaisemaan. Tavoitteena on toki saada myytyä tuotteita ja valokuvauspalveluita.

## Suunnittelu 

Aloitin harkkatyön tekemisen valitsemalla sopivan teeman. Loin sivuston VLE-ympäristöön, mutta tarkoitus on tehdä varmuuskopiot paikalliselle koneelleni, josta siirrän ne githubiin. Sivuston aihe (halusin sivustolle myös woocommerce-verkkokaupan, mutta sen lisäksi blogimaisen tunnelman) rajasi sopivia teemoja aika paljon, joten lopulta teeman löytäminen pohjaksi oli suhteellisen helppoa ja nopeaa wp:n hakutoiminnalla. Alla olevasta kuvasta näkyy valitsemani teema: Multipurpose-Blog

![](/web-julkaisujarjestelmat/harkkatyo/img/teema.png)

Olin jo päättänyt jonkun aikaa sitten mitä sisältöä eli millaisen rakenteen haluan sivustolle luoda, joten menun luominen oli lopulta simppeli homma. Alunperin suunnittelin työstä yksinkertaisen, jota voisin monipuolistaa ajan riittäessä. En kuitenkaan halunnut haukata liian suurta palaa heti kerralla, joten koin helpommaksi aloittaa pienestä ja ajan riittäessä lisätä toiminnallisuuksia ja omia säätöjäni. Tähän minulla meni aikaan n. 3h ottaen huomioon brainstormauksen mitä olin tehnyt jo aiemmin kurssin aikana. 


## Day 1
Itse sivuston rakentamisen aloitin verkkokaupasta. 

Loin verkkokaupan tuotteet csv-generaattorilla. Sainpa samalla muistutella itselleni javascriptiä, kun generaattorilla pystyi luomaan myös fuktioilla arvoja muiden kenttien arvoista riippuen. Tämä helpotti suunnattomasti järkevän tuotekatalogin rakentamista. Tajusin vasta importtauksen jälkeen, että jouduin lisäämään kuvat manuaalisesti. Onneksi en halunnut verkkokauppaan kuin 20-30 tuotetta, joten manuaalinen näpertely ei ollut ihan kamalan työlästä. 
![](/web-julkaisujarjestelmat/harkkatyo/img/csv_gen.png)
Tähän meni aikaa n. 3-4h, sillä sopivan csv-generaattorin etsiminen ja käytön opettelu vei aikaa. Sain kuitenkin tässä ajassa verkkokaupan tehtyä loppuun lukuunottamatta kategorioiden lisäämistä menuun.

## Day 2
Verkkokaupan kategoriat menuun, toiminnan testaus ja pieniä viilauksia, lopun sivuston hahmottelua. Eli uudet Pagesit Esittelylle, Gallerialle ja Yhteydenotolle. Samaan aikaan päivitin menua koko ajan. Sopivan lisäosan olin etsinut jo suunnitteluvaiheessa valokuvagallerialle. Valitsin gallerialle "Photo Gallery"-nimisen lisäosan, latausten määrän ja ilmaisen version ominaisuuksien perusteella. Pisimpään meni ehkä aikaa kuvien lataamisessa, sillä halusin helpottaa omaa naputteluani ja latasin omia kuviani sivuille. Näin ei tarvinnut miettiä käyttöoikeuksia sen kummmemmin. Lisäosan kautta sain kaikki gallerian tarvitsemat asetukset asetettua suoraan käyttöliittymästä. Tähän meni aikaa n. 4h, josta suuri osa meni kuvien lataamiseen ja etsimiseen.
