

<div class="gtco-loader"></div>
    <div id="gtco-features" >
        <div class="gtco-container" id="aboutus">
            <div class="row animatedParent">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading " data-aos="fade-up"  data-aos-easing="ease-in-out">
                    <h2>Rólunk</h2>
                </div>
            </div>

            <div class="row row-pb-md ">
                <div class="col-md-12 " data-aos="zoom-in-down" data-aos-easing="linear">
                    <p>Kezdeményezésünk azon felismerésből, motivációból fakad, melyet hosszas évek során tapasztaltunk bérlői oldalról. Meglátásunk szerint a legfontosabb a flexibilitás, megbízhatóság és a folyamatos rendelkezésre állás mindig, minden körülmények között. Épp ezért lendületes, fiatalos csapatunk, komoly szervízháttérrel, gyors problémamegoldó képességgel, nemzetközileg kiterjedt kapcsolatrendszerrel áll rendelkezésre legyen szó zenekari fellépésről, sítúráról, csoportos siklóernyőzésről, színpadi fellépésről vagy akár családi nyaralásról az év bármely napján. Gépjárműveink minden indulás előtt teljeskörű átvizsgáláson esnek át, hogy biztosan, zökkenőmentesen elérje célját!</p>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading "  data-aos="fade-down">
                    <h2>Járműveink</h2>
                </div>
            </div>
            <div class="row row-pb-md ">
                <div class="col-md-4 p-0 "  data-aos="fade-right" data-aos-easing="ease-in-sine">
                    <div class="">
                        <a  onclick="showPics(1);" ><img src="images/tranzit/pic18.jpg" alt="kisbusz" style="width:100%;"><div class="vehicle-overlay">Több kép >></div></a>
                    </div>
                </div>
                <div class="col-md-8 mt-5 "  data-aos="fade-left" data-aos-easing="ease-in-sine">
                        <div class="">
                        <h3 class="font-weight-bold">Ford Transit</h3>
                        <p>- Ford Transit, 9 személyes, diesel üzemű, 6 sebességes váltó, kedvező fogyasztás (6-8l) </p>

                        <h4 class="font-weight-bold">Felszereltség:</h4>
                        <p>- tempomat, állófűtés, sötétített üveg, MP3-lejátszás, AUX kimenet, kormányról vezérelhető multimédia rendszer, dupla klíma, hátul külön állítható fűtés-hűtés, ISOFIX ülések, visszagurulás gátló, centrálzár, elektromos tükrök, fűthető-hűthető szélvédő, vonóhorog</p>
                        </div>
                </div>
                <div class="row-pb-md gallery-1" style="display: none;">
                    <?php
                    for ($i=18; $i<=23;$i++) {
                        echo '<div class="col-lg-3 col-md-4 thumb my-4" >';
                        echo '<a href="images/tranzit/pic'.$i.'.jpg" class="fancybox" rel="ligthbox">';
                        echo '<img src="images/tranzit/pic'.$i.'.jpg" alt="kisbusz" class=" img-fluid zoom">';
                        echo '</a></div>';
                    }
                    ?>
                </div>

            </div>
            <hr>
            <div class="row row-pb-md d-flex  flex-sm-row-reverse">
                <div class="col-md-4 p-0 " data-aos="fade-left" data-aos-easing="ease-in-sine">
                    <a  onclick="showPics(2);" ><img src="images/tranzit/pic1.jpg" alt="kisbusz" style="width:100%;"><div class="vehicle-overlay">Több kép >></div></a>
                </div>
                <div class="col-md-8 mt-5" data-aos="fade-right" data-aos-easing="ease-in-sine">
                    <h3 class="font-weight-bold" >Ford Transit Long</h3>
                    <p>-  9 személyes, diesel üzemű, 6 sebességes váltó, kedvező fogyasztás (6-8l) </p>

                    <h4 class="font-weight-bold">Felszereltség:</h4>
                    <p style="text-transform: lowercase">- 2.2 TDCI, MP3-AUX HIFI, TEMPOMAT, DUPLA-KLÍMA,
                        VONÓHOROG, CSOMAGTÉR MÉRETE:150 cm HOSSZÚ, 168 cm MAGAS,
                        174 cm SZÉLES</p>
                </div>


            </div>
            <div class="row-pb-md gallery-2" style="display: none;">
                <?php
                for ($i=1; $i<=7;$i++) {
                    echo '<div class="col-lg-3 col-md-4 thumb my-4" >';
                    echo '<a href="images/tranzit/pic'.$i.'.jpg" class="fancybox" rel="ligthbox">';
                    echo '<img src="images/tranzit/pic'.$i.'.jpg" alt="kisbusz" class=" img-fluid zoom">';
                    echo '</a></div>';
                }
                ?>
            </div>
            <hr>
            <div class="row row-pb-md">
                <div class="col-md-4 p-0 " data-aos="fade-right" data-aos-easing="ease-in-sine">
                    <a  onclick="showPics(3);" ><img src="images/tranzit/pic8.jpg" alt="kisbusz" style="width:100%;"><div class="vehicle-overlay">Több kép >></div></a>
                </div>
                <div class="col-md-8 mt-5" data-aos="fade-left" data-aos-easing="ease-in-sine">
                    <h2 class="font-weight-bold">Renault Trafic</h2>
                    <p>-  9 személyes, diesel üzemű, 6 sebességes váltó, kedvező fogyasztás (6-8l) </p>

                    <h3 class="font-weight-bold">Felszereltség:</h3>
                    <p style="text-transform: lowercase">-
                        2.0 dCi, NAVIGÁCIÓ, MP3-USB-BLUETOOTH, TEMPOMAT, 3 ZÓNÁS KLÍMA/FŰTÉS, TOLATÓ RADAR,
                        BLUETOOTH KIHANGOSÍTÓ,
                        CSOMAGTÉR MÉRET:
                        110 cm HOSSZÚ,
                        127 cm SZÉLES,
                        140 cm MAGAS</p>
                </div>
                <div class="row-pb-md gallery-3" style="display: none;">
                    <?php
                    for ($i=8; $i<=17;$i++) {
                        echo '<div class="col-lg-3 col-md-4 thumb my-4" >';
                        echo '<a href="images/tranzit/pic'.$i.'.jpg" class="fancybox" rel="ligthbox">';
                        echo '<img src="images/tranzit/pic'.$i.'.jpg" alt="kisbusz" class=" img-fluid zoom">';
                        echo '</a></div>';
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading ">
                    <h2>A bérlés előnyei</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center" data-aos="zoom-out-down" data-aos-delay="100">
						<span class="icon mx-auto" style="background-image: url('images/ikonok/fuel.png'); background-repeat: no-repeat; background-position: center; " >
						</span>
                        <h3>Alacsonyabb fogyasztással bír mint két személyautó</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center" data-aos="zoom-out-down" data-aos-delay="200">
						<span class="icon mx-auto" style="background-image: url('images/ikonok/road.png'); background-repeat: no-repeat; background-position: center; " >
						</span>
                        <h3>Nincs szükség autópálya matricákra, hisz benne van az árban</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center" data-aos="zoom-out-down" data-aos-delay="300">
						<span class="icon mx-auto" style="background-image: url('images/ikonok/money_box.png'); background-repeat: no-repeat; background-position: center; " >
						</span>
                        <h3>Nincsenek fenntartási,karbantartási  költségek</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center " data-aos="zoom-out-down" data-aos-delay="400">
						<span class="icon mx-auto" style="background-image: url('images/ikonok/luggage.png'); background-repeat: no-repeat; background-position: center; " >
						</span>
                        <h3>Nagy raktér, magas szintű kényelem</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center" data-aos="zoom-out-down" data-aos-delay="500">
						<span class="icon mx-auto" style="background-image: url('images/ikonok/license.png'); background-repeat: no-repeat; background-position: center; " >
						</span>
                        <h3>B kategóriás jogosítvánnyal vezethető</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center" data-aos="zoom-out-down" data-aos-delay="600">
						<span class="icon mx-auto" style="background-image: url('images/ikonok/emoj.png'); background-repeat: no-repeat; background-position: center; " >
						</span>
                        <h3>Nincs menetrend, csak szabadság</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="gtco-container pt-5" id="prices">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
            <h2>Áraink</h2>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-4">

            <div class="card text-dark" data-aos="zoom-in">
                <div class="text-center"><img src="images/tranzit/pic18.jpg" alt="busz" style="width: 100%;object-fit: cover;"></div>

                <div class="card-header text-center font-weight-bold"><h3>Ford Transit</h3></div>

                <div class="card-body text-center">

                    <h4 class="card-title">Áraink</h4>

                    <p class="card-text ">1 naptól: 18.500 Ft</p>
                    <p class="card-text ">3 naptól: 16.900 F</p>
                    <p class="card-text ">7 naptól: 15.900 Ft</p>
                    <p class="card-text ">14 naptól: 14.900 Ft</p>
                    <h6>napi 400 km felett 30 Ft/km </h6>
                    <h6> kisbusz címre szállítása Budapesten belül (+8.000 Ft)</h6>
                    <h6><i>/7 napon felüli bérlés esetén és visszatérő ügyfeleknek ingyenes/</i></h6>
                    <h6>sofőr szolgáltatás (megegyezés szerint)</h6>
                    <i>Az árak az áfát nem tartalmazzák. Minden megkezdett nap bérleti napnak számít.</i>


                </div>
                <div class="card-footer">
                    <a href="/?template=tranzit">Megnézem</a>
                </div>
            </div>

        </div>

        <div class="col-sm-4">

            <div class="card text-dark " data-aos="zoom-in" data-aos-delay="50">
                <div class="text-center"><img src="images/tranzit/pic1.jpg" alt="busz" style="width: 100%;object-fit: cover;"></div>

                <div class="card-header text-center font-weight-bold"><h3>Ford Transit Long</h3></div>

                <div class="card-body text-center">

                    <h4 class="card-title">Áraink</h4>

                    <p class="card-text ">1 naptól: 18900 Ft</p>
                    <p class="card-text ">3 naptól: 16900 Ft</p>
                    <p class="card-text ">7 naptól: 15.900 Ft</p>
                    <p class="card-text ">14 naptól: 14.900 Ft</p>
                    <h6>napi 400 km felett 30 Ft/km </h6>
                    <h6> kisbusz címre szállítása Budapesten belül (+8.000 Ft)</h6>
                    <h6><i>/7 napon felüli bérlés esetén és visszatérő ügyfeleknek ingyenes/</i></h6>
                    <h6>sofőr szolgáltatás (megegyezés szerint)</h6>
                    <i>Az árak az áfát nem tartalmazzák. Minden megkezdett nap bérleti napnak számít.</i>


                </div>
                <div class="card-footer">
                    <a href="/?template=tranzit">Megnézem</a>
                </div>


            </div>

        </div>

        <div class="col-sm-4">

            <div class="card text-dark" data-aos="zoom-in" data-aos-delay="100">
                <div class="text-center"><img src="images/tranzit/pic8.jpg" alt="busz" style="width: 100%;object-fit: cover;"></div>

                <div class="card-header text-center font-weight-bold"><h3>Renault Trafic</h3></div>

                <div class="card-body text-center">

                    <h4 class="card-title">Áraink</h4>

                    <p class="card-text ">1 naptól: 19900  Ft</p>
                    <p class="card-text ">3 naptól: 17900  Ft</p>
                    <p class="card-text ">7 naptól: 16900 Ft</p>
                    <p class="card-text ">14 naptól: 15900 Ft</p>
                    <h6>napi 400 km felett 30 Ft/km </h6>
                    <h6> kisbusz címre szállítása Budapesten belül (+8.000 Ft)</h6>
                    <h6><i>/7 napon felüli bérlés esetén és visszatérő ügyfeleknek ingyenes/</i></h6>
                    <h6>sofőr szolgáltatás (megegyezés szerint)</h6>
                    <i>Az árak az áfát nem tartalmazzák. Minden megkezdett nap bérleti napnak számít.</i>


                </div>


                <div class="card-footer">
                    <a href="/?template=tranzit">Megnézem</a>
                </div>
            </div>

        </div>

    </div>
    <div class="row row-pb-md pt-5 mt-5" style="margin-top:20px;">
        <div class="col-md-6 " data-aos="fade-left" data-aos-easing="ease-in-out">
            <h4 class="pl-4">A bérleti díj tartalmazza</h4>
            <ul>
                <li>- kötelező felelősség biztosítás</li>
                <li>- casco biztosítás </li>
                <li>- magyar és osztrák autópálya matricát</li>
                <li>- napi 400 km</li>

            </ul>
        </div>
        <div class="col-md-6 "  data-aos="fade-right" data-aos-easing="ease-in-out">
            <h4 class="pl-4">Mit nem tartalmaz a kisbusz bérbeadás díja?</h4>
            <ul>
                <li>- a bérelt kisbusz takarítását, amely normál szennyeződésnél nehezebben takarítható  7.000 Ft</li>
                <li>- parkolási díjakat </li>
                <li>- bérlő által megjelölt címen átadást Budapest területén (8.000 Ft)</li>

            </ul>
        </div>
    </div>

</div>

    <div id="gtco-portfolio" class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading ">
                    <h2 data-aos="zoom-out-down">Kiknek ajánljuk?</h2>
                </div>
            </div>

            <div class="row row-pb-md">
                <div class="col-md-12 d-flex justify-content-center">
                    <ul id="gtco-portfolio-list">
                        <li class="two-third" style="background-image: url(images/zenekaroknak.jpg); " data-aos="fade-right" data-aos-easing="ease-in-out">
                            <a  class="color-1" data-toggle="modal" data-target="#bandsModalCenter">
                                <div class="case-studies-summary">
                                    <h2>Zenekaroknak</h2>
                                </div>
                            </a>
                        </li>
                        <div class="modal fade-scale modal-noscroll" id="bandsModalCenter" tabindex="-1" role="dialog" aria-labelledby="bandsModalCenterTitle" aria-hidden="true" >
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close text-right mr-3" data-dismiss="modal" aria-label="Close" style="background-color: transparent!important; color: white;"> Bezár
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                    <div class="modal-body" style="background-color: #1b1e21;">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="modal-img">
                                                    <img src="images/zenekaroknak.jpg" alt="" style="width:100%;">
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="modal-title" id="exampleModalLongTitle">Zenekaroknak</h3>
                                                    <h4>Amennyiben kérdésed van, hívj minket bizalommal az xy telefonszámon</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mt-4">
                                                    Bel- és külföldi turnék szakszerű lebonyolításában hozzáértő kollégák állnak rendelkezésre, kik a vezetési rutinon túlmenően idegen nyelvtudással és kiváló szervezőkészséggel bírnak.
                                                    Szolgáltatásunk része a backline, hangszerek szakszerű szállítása, kitelepítése.
                                                    Igény esetén roadot is tudunk biztosítani!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li class="one-third " data-aos="fade-left" data-aos-easing="ease-in-out" style="background-image: url(images/siutakra.jpg); ">
                            <a  class="color-1" data-toggle="modal" data-target="#schiModalCenter">
                                <div class="case-studies-summary">
                                    <h2>Síutakra</h2>
                                </div>
                            </a>
                        </li>
                        <div class="modal fade-scale " id="schiModalCenter" tabindex="-1" role="dialog" aria-labelledby="schiModalCenterTitle" aria-hidden="true" >
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close text-right mr-3" data-dismiss="modal" aria-label="Close" style="background-color: transparent!important; color: white;">Bezár
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                    <div class="modal-body" style="background-color: #1b1e21;">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="modal-img">
                                                    <img src="images/siutakra.jpg" alt="" style="width:100%;">
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="modal-title" id="exampleModalLongTitle">Síutakra</h3>
                                                    <h4>Amennyiben kérdésed van, hívj minket bizalommal az xy telefonszámon</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="mt-4">
                                                    A síutak zökkenőmentes lebonyolításában kiváló eszköznek bizonyul a kisbusz, mellyel a csoportok komoly költséget tudnak megspórolni jelen üzemanyagárak mellett, arról nem is beszélve hogy csapatban élvezetesebb az utazás, jobban telnek a kilométerek!
                                                    Kisbuszunk szakszerűen a téli időszakra felkészítve,Magyar/ Osztrák pályamatricával, hólánccal és téli gumikkal áll rendelkezésre minden körülmények között, az időzített  állófűtés pedig gondoskodik, hogy a síelés után megfelelő komfortérzet fogadja a kisbuszban.
                                                    Extrémebb téli utakhoz nem elég a jó autó, fontos a szakképzett sofőr is. Kérjen árajánlatot és sofőr kollégánk gondoskodik a biztonságos üzemeltetésről, hogy Önnek csak a forraltbor kellemes ízével legyen gondja.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <li class="one-half "  style="background-image: url(images/nyaralas.jpg); " data-aos="fade-right" data-aos-easing="ease-in-out">
                            <a  class="color-1" data-toggle="modal" data-target="#holidayModalCenter">
                                <div class="case-studies-summary">
                                    <h2 data-aos="zoom-out-down">Nyaralásra</h2>
                                </div>
                            </a>
                        </li>
                        <div class="modal fade-scale " id="holidayModalCenter" tabindex="-1" role="dialog" aria-labelledby="schiModalCenterTitle" aria-hidden="true" >
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close text-right mr-3" data-dismiss="modal" aria-label="Close" style="background-color: transparent!important; color: white;">Bezár
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="modal-body" style="background-color: #1b1e21;">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="modal-img">
                                                    <img src="images/nyaralas.jpg" alt="" style="width:100%;">
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="modal-title" id="exampleModalLongTitle">Síutakra</h3>
                                                    <h4>Amennyiben kérdésed van, hívj minket bizalommal az xy telefonszámon</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="mt-4">
                                                    Egy baráti/családi nyaralás  zökkenőmentes lebonyolításában kiváló eszközként bizonyulhat a kisbusz, mellyel  komoly költséget lehet  megspórolni jelen üzemanyagárak és a külföldi parkolási díjak mellett, arról nem is beszélve hogy társaságban élvezetesebb az utazás, jobban telnek a kilométerek!
                                                    Kisbuszunk szakszerűen az adott évszaknak megfelelően felkészítve,Magyar/ Osztrák pályamatricával,téli/nyári gumikkal áll rendelkezésre minden körülmények között, az időzített  állófűtés pedig gondoskodik, hogy a hidegebb napokon is megfelelő komfortérzet fogadja a kisbuszban.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li class="one-half" data-aos="fade-left" style="background-image: url(images/paraglider.jpg); " data-aos-easing="ease-in-out">
                            <a  class="color-1" data-toggle="modal" data-target="#paraglideModalCenter">
                                <div class="case-studies-summary">
                                    <h2>Siklóernyősöknek</h2>
                                </div>
                            </a>
                        </li>
                        <div class="modal fade-scale " id="paraglideModalCenter" tabindex="-1" role="dialog" aria-labelledby="schiModalCenterTitle" aria-hidden="true" >
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close text-right mr-3" data-dismiss="modal" aria-label="Close" style="background-color: transparent!important; color: white;">Bezár
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                    <div class="modal-body" style="background-color: #1b1e21;">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="modal-img">
                                                    <img src="images/paraglider.jpg" alt="" style="width:100%;">
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="modal-title" id="exampleModalLongTitle">Siklóernyősöknek</h3>
                                                    <h4>Amennyiben kérdésed van, hívj minket bizalommal az xy telefonszámon</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="mt-4">
                                                    A siklóernyős kikapcsolódások zavartalan lebonyolításában kiváló eszközként bizonyulhat a kisbusz, mellyel komoly üzemanyagköltséget, szabadidőt  lehet megspórolni. Rutinos, kíváló helyismerettel bíró sofőrkollégánk segítségével pedig nincs más dolga mint a széljárásoknak megfelelően eljutni a kívánt desztinácioba és a starthelytől való elrugaszkodástól a landolásig mégélni a teret, az időt és a szabadságot, mialatt a kisbusz  a kívánt helyen fogja várni hogy kényelmesen visszatérhessen a startpontra. Kisbuszunk szakszerűen az adott évszaknak megfelelően felkészítve, kényelmes, nagy csomagtérrel, magyar/osztrák pályamatricával, téli/nyári gumikkal áll rendelkezésre minden körülmények között, az időzített állófűtés pedig gondoskodik, hogy a hidegebb napokon is megfelelő komfortérzet fogadja a kisbuszban.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/repter.jpg); " data-aos="fade-right" data-aos-easing="ease-in-out">
                            <a  class="color-1" data-toggle="modal" data-target="#airModalCenter">
                                <div class="case-studies-summary">
                                    <h2>Reptéri transzfer</h2>
                                </div>
                            </a>
                        </li>
                        <div class="modal fade-scale " id="airModalCenter" tabindex="-1" role="dialog" aria-labelledby="schiModalCenterTitle" aria-hidden="true" >
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close text-right mr-3" data-dismiss="modal" aria-label="Close" style="background-color: transparent!important; color: white;">Bezár
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                    <div class="modal-body" style="background-color: #1b1e21;">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="modal-img">
                                                    <img src="images/paraglider.jpg" alt="" style="width:100%;">
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="modal-title" id="exampleModalLongTitle">Reptéri transzfer</h3>
                                                    <h4>Amennyiben kérdésed van, hívj minket bizalommal az xy telefonszámon</h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="mt-4">
                                                    Miért várna a taxira mikor repülőtéri transzfer szolgáltatásunk rugalmasan,kedvező áron  igényelhető?
                                                    Idegen nyelvet beszélő    kollegánk segít a ki-és bepakolásban, pontos helyismerete révén pedig gondoskodik róla, hogy a lehető legrövidebb idő alatt eljusson  csatlakozási pontjához.
                                                    Minimum 7 napnyi  kisbuszbérlés felett a  reptéri transzfer szolgáltatásunkat ajándékba kapja!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <li class="two-third" data-aos="fade-left" data-aos-easing="ease-in-out" style="background-image: url(images/img_6.jpg); ">
                            <a href="#" class="color-6">
                                <div class="case-studies-summary">
                                    <span>Illustration</span>
                                    <h2>Beautiful Flowers In The Air</h2>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="gtco-section">
        <div class="gtco-container" id="services">

            <div class="row ">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading" data-aos="zoom-in" data-aos-ease="ease-in-out">
                    <h2>Szolgáltatásaink</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="feature-left " data-aos="zoom-in-right" data-aos-delay="50">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>Parkolás</h3>
                            <p>A bérlés ideje alatt a saját autó parkolása biztosított</p>

                        </div>
                    </div>

                    <div class="feature-left " data-aos="zoom-in-right" data-aos-delay="100">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>Casco</h3>
                            <p>Casco biztosítás, assistance szolgáltatás</p>

                        </div>
                    </div>

                    <div class="feature-left " data-aos="zoom-in-right" data-aos-delay="150">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>Autópálya matrica</h3>
                            <p>Magyar és osztrák éves autópályamatrica az árban!!</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-left " data-aos="zoom-in-left" data-aos-delay="200">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>Sofőr biztosítása</h3>
                            <p>Nemzetközi rutinnal, nyelvtudással bíró, kulturált sofőr biztosítása</p>

                        </div>
                    </div>

                    <div class="feature-left " data-aos="zoom-in-left" data-aos-delay="250">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>Címre szállítás</h3>
                            <p>A kisbusz Budapesten belüli címre szállítása </p>

                        </div>
                    </div>

                    <div class="feature-left " data-aos="zoom-in-left" data-aos-delay="300">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>Reptéri transzfer</h3>
                            <p>Reptéri transzfer szolgáltatás </p>

                        </div>
                    </div>
                    <div class="feature-left    " data-aos="zoom-in-left" data-aos-delay="350">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>Assistance</h3>
                            <p>0-24 órás európai garanciális assistance szolgáltatás igényelhető</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>



<div class="gtco-container lists">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading " data-aos="zoom-in">
            <h2>Feltételek</h2>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 gtco-heading  my-0" data-aos="zoom-in">
            <h3 class="font-weight-bold">Magánszemélynek</h3>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-12 col-md-offset-2 gtco-heading  pl-0" >
            <ul>
                <li data-aos="fade-left">- betöltött 21. életév</li>
                <li data-aos="fade-left">- legalább egy éves B kategóriás jogosítvány</li>
                <li data-aos="fade-left">- személyi igazolvány vagy útlevél</li>
                <li data-aos="fade-left">- lakcímkártya</li>
                <li data-aos="fade-left">- 100.000 Ft kaució</li>
                <li data-aos="fade-left">- bérleti díj megfizetés</li>
                <li data-aos="fade-left">- mobiltelefon szám és e-mail cím</li>
            </ul>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 gtco-heading  my-0" data-aos="zoom-in">
            <h3 class="font-weight-bold">Cégeknek</h3>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-12 col-md-offset-2 gtco-heading  pl-0">
            <ul>
                <li data-aos="fade-left">- a fenti iratok és adatok az összes vezetésre jogosult személynek</li>
                <li data-aos="fade-left">- eredeti aláírási címpéldány</li>
                <li data-aos="fade-left">- megbízott eljáró esetében meghatalmazás két tanú aláírásával</li>
                <li data-aos="fade-left">- cégjegyzékszám</li>

            </ul>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 gtco-heading  my-0" data-aos="zoom-in">
            <h3 class="font-weight-bold">Fizetési módok</h3>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 gtco-heading " data-aos="zoom-in">
            <p>Magánszemélyek és jogi személyek esetén is készpénzes és átutalásos fizetést tudunk elfogadni. Bankkártyás fizetésre nincs lehetőség.</p>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 gtco-heading  my-0">
            <h3 class="font-weight-bold" data-aos="zoom-in">Kaució</h3>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 gtco-heading ">
            <p data-aos="fade-left">A bérlés idejére letétet kérünk, melyet készpénzben megőrzünk a bérlés végéig, és az autó sértetlen visszaadáskor visszatérítjük.
                A kaució mértéke kategóriánként eltérhet, általános letét összege: 100.000 Ft
            </p>
            <p data-aos="fade-right">A bérleti díjak nem tartalmazzák az üzemanyagot, a meg nem váltható önrészt, a repülőtéri- és kiszállítási pótdíjat és a nem rendeltetésszerű használatból eredő javítási költségeket, valamint minden egyéb, a bérlet során felmerülő egyéb költséget. 60 percen túli késedelmes visszahozatal esetén plusz fél nap bérleti díj kerül felszámításra.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 gtco-heading  my-0">
            <h3 data-aos="zoom-in">Pótdíjak hiány esetén</h3>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-12 col-md-offset-2 gtco-heading  pl-0">
            <ul>
                <li data-aos="fade-left">- gépjármű dokumentumai (forgalmi engedély, zöldkártya), rendszámtábla hiánya esetén: bruttó 40.000 Ft</li>
                <li data-aos="fade-left">- gyári kulcsok elvesztése esetén: bruttó 80.000 Ft</li>
                <li data-aos="fade-left">- láthatósági mellény hiánya esetén: bruttó 1000 Ft</li>
                <li data-aos="fade-left">- KRESZ-csomag (elakadásjelző háromszög, egészségügyi csomag) hiánya esetén: bruttó 9.000 Ft</li>
            </ul>
        </div>
    </div>
</div>






