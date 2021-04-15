<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Varga B. Dániel">
    
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <meta name="keywords" content="Klíma, Klímaszerelés , Klímaszerelő, Épületgépészet, Légkondi, Légkondícionáló, Légkondiszerelő, Légkondiszerelés">

    <title>Székely Ferenc - Klímaszerelő</title>

    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/gallery.css">

    <script src="scripts/ScrollToModule.js"></script>
</head>

<body onload="initializeNavButtons()">
    <div class="nav-menu desktop">
        <img src="img/logo_cropped.png" alt="" class="logo">
        <div class="btn-wrapper">
            <h1 data-scrollto-button="about">Rólunk</h1>
            <h1 data-scrollto-button="process">Hogyan dolgozunk</h1>
            <h1 data-scrollto-button="fees">Áraink</h1>
            <h1 data-scrollto-button="example">Munkamenet</h1>
            <h1 data-scrollto-button="tips">Tippek</h1>
            <h1 data-scrollto-button="gallery">Galéria</h1>
        </div>
    </div>
    <div class="nav-menu mobile closed">
        <div class="nav-button" onclick="openAndCloseNavMenu()">
            <span></span>
        </div>
        <div class="btn-wrapper">
            <h1 data-scrollto-button="about">Rólunk</h1>
            <h1 data-scrollto-button="process">Hogyan dolgozunk</h1>
            <h1 data-scrollto-button="fees">Áraink</h1>
            <h1 data-scrollto-button="example">Munkamenet</h1>
            <h1 data-scrollto-button="tips">Tippek</h1>
            <h1 data-scrollto-button="gallery">Galéria</h1>
        </div>
    </div>
    <div class="pop-up desktop">
        <h2><span>Ingyenes</span> helyszíni felmérésre időpont egyeztetés</h2>
        <h1>+36 20 292 5281</h1>
    </div>
    <div class="splash-screen" data-scrollto-target="about">
        <h1 class="title">Rólunk</h1>
        <div class="wrapper">
            <img class="portrait" src="" alt="">
            <h1 id="name">Székely Ferenc</h1>
            <div class="tel">
                <img src="img/phone.png" alt="telefonszám">
                <h2>+36 20 292 5281</h2>
            </div>
            <div class="email">
                <img src="img/email.png" alt="email">
                <h2>szfklima@gmail.com</h2>
            </div>
            <p>-- Oldal szerkesztés alatt. --</p>
        </div>
        <img src="img/arrow.png" alt="Görgess lejjebb!" class="arrow" data-scrollto-button="process">
    </div>
    <div class="process" data-scrollto-target="process">
        <h1 class="title">Hogyan dolgozunk?</h1>
        <div class="wrapper">
            <div class="right">
                <h1>1. LÉPÉS: <span>KAPCSOLATFELVÉTEL</span></h1>
                <h2>Vegye fel velünk a kapcsolatot, kérjen ajánlatot!</h2>
            </div>
            <div class="left">
                <h1>2. LÉPÉS: <span>HELYSZÍNI FELMÉRÉS</span></h1>
                <h2>Előre egyeztetett időpontban elvégezzünk a helyszíni felmérést</h2>
            </div>
            <div class="right">
                <h1>3. LÉPÉS: <span>KLÍMA KIVÁLASZTÁSA</span></h1>
                <h2>A helyszíni felmérés alapján megtervezzük a szükséges hűtési kapacitást és kiválasztjuk a legjobb
                    ár/érték arányú klímaberendezést.</h2>
            </div>
            <div class="left">
                <h1>4. LÉPÉS: <span>BESZERELÉS</span></h1>
                <h2>Elvégezzük a szakszerű beszerelést és üzembe helyezzük a klímát.</h2>
            </div>
            <div class="middle">
                <h1>5. LÉPÉS: <span>TISZTÍTÁS ÉS KARBANTARTÁS</span></h1>
                <h2>Előre egyeztetett időpontban elvégezzük a klíma kötelező éves tisztítását és esetleges
                    karbantartását.</h2>
            </div>
        </div>
    </div>
    <div class="fees" data-scrollto-target="fees">
        <h1 class="title">Áraink</h1>
        <div class="wrapper">
            <div class="container">
                <div>
                    <h2>Felmérés és árajánlat készítés:</h2>
                    <ul>
                        <li>Alap szerelés 3 méter csőhosszig: <span>60.000</span>.- Ft</li>
                        <li>Alapszerelésen felüli csövezés méterenként + <span>7.000</span>.- Ft</li>
                        <li>Előcsövezés: vésés/csövezés méterenként: <span>9.000</span>.- Ft</li>
                        <li>Előcsövezésre telepítés (beltéri egységenként): <span>40.000</span>.- Ft</li>
                    </ul>
                </div>
                <div>
                    <h2>A TELEPÍTÉS ALAPSZERELÉSI ÁRA TARTALMAZZA:</h2>
                    <ul>
                        <li>- bel-, és kültéri egység felszerelését, bekötését</li>
                        <li>- bel-, és kültéri egység felszereléséhez szükséges anyagokat</li>
                        <li>- hőszigeteléssel ellátott rézcső pár kiépítését 3 fm-ig</li>
                        <li>- kondenzvíz gravitációs elvezetését 3 fm-ig</li>
                        <li>- elektromos betáplálás kiépítését 3 fm-ig</li>
                        <li>- klímaberendezés helyszínre szállítását (szállíttatását)</li>
                        <li>- egyszeri főfal átfúrását</li>
                        <li>- keletkezett törmelék eltakarítását</li>
                        <li>- klímaszerelők munkadíját</li>
                        <li>- a telepített klímaberendezés szakszerű beüzemelését</li>
                        <li>- a készülék gazdaságos és komfortos üzemeltetésének betanítását</li>
                    </ul>
                </div>
                <div>
                    <h2>A TELEPÍTÉS ALAPSZERELÉSI ÁRA <span>NEM</span> TARTALMAZZA:</h2>
                    <ul>
                        <li>- tetőre szerelhető kültéri tartókonzol árát</li>
                        <li>- hosszított kültéri tartókonzol árát (későbbi hőszigetelés miatt indokolt)</li>
                    </ul>
                </div>
                <div>
                    <h2>Munkavállalás helyszíne:</h2>
                    <p>Monor, Monorierdő, Pilis, Albertirsa, Dánszentmiklós, Nyáregyháza, Vasad, Csévharaszt, Újlengyel, Inárcs, Kakucs, Újhartyán, Hernád, Gyón, Dabas, Sári, Ócsa, Felsőpakony, Gyál, Vecsés, Üllő, Ecser, Maglód, Gyömrő, Péteri, Mende, Tápiósáp, Sülysáp, Tápiószecső, Szentmártonkáta, Nagykáta, Tápiószentmárton, Tápióbicske, Tápióság, Úri, Gomba, Bénye, Káva, Pánd, Cegléd, Pécel, Nagytarcsa, Kistarcsa, Csömör, Kerepes, Dunakeszi, Fót, Mogyoród</p>
                    <h3>Budapesten belül:</h3>
                    <p>3, 4, 10, 13, 15, 16, 17, 18, 19, 20, 21, 22, 23</p>
                </div>
            </div>
        </div>
    </div>
    <div class="example" data-scrollto-target="example">
        <h1 class="title">A munka menete</h1>
        <div class="wrapper">
            <div>
                <img src="img/kep_1.jpg" alt="">
                <h2>Alapszerelés kötelező 3 méter. </h2>
            </div>
            <div>
                <img src="img/kep_2.jpg" alt="">
                <h2>Alapszerelés (3 méter csőhosszig)</h2>
            </div>
            <div>
                <img src="img/kep_3.jpg" alt="">
                <h2>
                    Alapszerelésen felüli szerelés: a klíma egységek beüzemeléséhez több
                    mint 3 méteres nyomvonal kiépítésére van szükség, ebben az esetben
                    egy alapszerelés és az azon túli csőszakasz hossza kerül kiszámlázásra
                </h2>
            </div>
        </div>
    </div>
    <div class="tips" data-scrollto-target="tips">
        <h1 class="title">Klímaszerelés</h1>
        <div class="wrapper">
            <p>Teljes körűen vállaljuk klímák beszerelését, beüzemelését, előcsövezését,
                légcsatornázását, készülék beszerzését lakossági és ipari szinten egyaránt.</p>
            <h2>Ingyenes helyszíni felmérés
            </h2>
            <p>Amennyiben úgy dönt, hogy szüksége van egy klíma készülékre, először mindenképpen kérje szakember
                véleményét!
            </p>
            <div class="container">
                <div class="blue">
                    <h1>Ön igényeihez igazodva az alábbi szempontokat kell figyelembe venni:</h1>
                    <ul>
                        <li>mekkora a hűtendő/fűtendő helyiség mérete (alapterület, belmagasság)</li>
                        <li>jellemzői (tetőtér, szigetelés, áramellátási lehetőség, kondenzvíz elvezetés, fal anyaga és
                            vastagsága)</li>
                        <li>hűtési, fűtési vagy mindkét funkció lesz-e aktívan használva</li>
                        <li>kültéri-beltéri egység elhelyezkedése és távolsága</li>
                        <li>wifi elérhetőséggel rendelkezzen-e a készülék</li>
                    </ul>
                    <h2>Sürgős esetben az ingatlan alaprajza vagy szóbeli leírása alapján is elvégezhető a felmérés.
                    </h2>
                </div>
                <div class="orange">
                    <h1>Alapvetően helyiségenként 1db készülékben gondolkozzunk, ugyanis ahhoz, hogy több helyiséget is
                        hatékonyan akklimatizáljunk, szerencsés adottságok kellenek.</h1>
                    <p>Általánosságban elmondható, hogy túlnyomórészt 3,5KW-os készülékek kerülnek
                        felszerelésre 20-40m2-es helyiségekbe. 2,5KW-os készülékek igazán kis helyiségekben,
                        például kb. 10-15m2-es hálószobában hatékonyak és még ha gyárilag akár 15-20m2-es
                        helyiségben is használhatók, a 3,5KW-os készülékek könnyebben-kisebb teljesítménnyel
                        adják le a hőt és gyártótól függetlenül kb. 10-20e Ft a különbség. Tetőtéri kis helyiség
                        esetén pedig abszolút a 3,5KW-os készülék javasolt. 40-50m2 feletti helyiségek hatékony
                        hűtésére/fűtésére már inkább az 5KW-os készülékek javasoltak, azonban itt már
                        figyelembe kell venni a helyiségek elhelyezkedését. Amennyiben az egyik helyiség belső
                        falára helyezzük a készüléket és vele szemben helyezkedik el a másik klimatizálandó
                        helyiség ajtaja (szerencsés eset), úgy hatékonyan működtethetjük. Az egyik szobából a
                        másikba nem fog átmenni az előszobán és „bekanyarodni” a hő, habár a hőmérséklet
                        megpróbál kiegyenlítődni. Ide tartozik a nem elhanyagolható gazdasági tény is, miszerint
                        az 5KW-os készülékek kb. dupla annyiba kerülnek mint a 3,5KW-os társaik, így ha már
                        erre van szükségünk és pénztárcánk engedi az 5KW-os készüléket, érdemesebb lehet
                        elgondolkozni inkább 2db 3,5KW-os készüléken…
                    </p>
                    <p>Már meglévő ingatlanok esetében a kül- és beltéri egység legideálisabb helyét kell
                        megtalálnunk, a szükséges vezetékezést pedig ezeket eltakaró kábelcsatornába rejtjük.
                        Újonnan épülő vagy átépítés alatt álló ingatlanok esetében a falba rejtve süllyesztjük a
                        vezetékeket, így érve el a diszkrét megjelenést.
                    </p>
                    <p>Klíma készülék felszerelésének legzajosabb és legporosabb része a beltéri és kültéri
                        egység összekötésének előkészítése. Ilyenkor jó esetben csak 1db lyukat szükséges
                        fúrni a homlokzati falon, mely kb. 6cm átmérőjű. A fúrás zaja sajnos nem tompítható,
                        porelszívást és - ha szükséges - védőfóliázást, valamint minden esetben magunk után
                        összetakarítást alkalmazunk.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery" data-scrollto-target="gallery">
        <h1 class="title">Munkáink</h1>
        <div class="wrapper">
            <?php
            // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
            $dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR; // dir/gallery/
            $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

            // (C) OUTPUT IMAGES    
            foreach ($images as $i) {
            printf(' <div class="gallery-item"><img class="gallery-image" src="gallery/%s"/></div>', basename($i));
            }
            ?>
        </div>
    </div>
</body>
</html>