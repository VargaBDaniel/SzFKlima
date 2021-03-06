<?php
    $message_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != '' && $_POST['subject'] != ""){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            //submit
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userTel = $_POST['tel'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];
        
            $to = "szfklima@gmail.com";
            $body = "";
        
            $body .= "Név: ".$userName. "\r\n";
            $body .= "E-mail cím: ".$userEmail. "\r\n";
            $body .= "Telefonszám: ".$userTel. "\r\n";
            $body .= "Üzenet: ".$message. "\r\n";

            $secretKey = "";
            $responseKey = $_POST['g-recaptcha-response'];
            $UserIP = $_SERVER['REMOTE_ADDR'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

            $response = file_get_contents($url);
            $response = json_decode($response);
            
            if ($response->success) {
                
                $message_sent = true;
            } else {
                echo '<h1>Fogadja el a reCAPTCHA hitelesítést!</h1>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Varga B. Dániel">
    
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <meta name="keywords" content="klímaszerelés, klíma beszerelés, klíma beszerelése, klíma telepítés, klíma beszereléssel, klímaszerelés budapesten, légkondi, légkondicionáló, légkondiszerelés, ">
    <meta name="description" content="Klímaszerelés Budapesten és Budapest vonzáskörzetében, ingyenes helyszíni felmérésért keressen minket!">

    <title>Székely Ferenc - Klímaszerelő</title>

    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/gallery.css">
    <link rel="stylesheet" href="style/form.css">

    <script src="scripts/ScrollToModule.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
</head>

<body onload="initializeNavButtons(),displaySentMessage()">
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
    <div id="particles-js">
        <div class="wrapper"></div>
    </div>
    <div class="splash-screen" data-scrollto-target="about">
        <h1 class="title">SzF Klíma</h1>
        <div class="wrapper">
            <img class="portrait" src="" alt="">
            <h1 id="name">Székely Ferenc</h1>
            <div class="tel">
                <img src="img/phone.png" alt="telefonszám">
                <h2>+36 20 292 5281</h2>
            </div>
            <div class="email" onclick="toggleContactForm()">
                <img src="img/email.png" alt="email">
                <h2>Küldjön üzenetet!</h2>
            </div>
            <div id="form-container" class="hidden">
                <?php
                if($message_sent):

                    mail($to,$messageSubject,$body);

                    echo "<script type='text/javascript'>
                    localStorage.messageSent = 'true';
                    window.location = 'https://vargabdaniel.hu/wipdemo/szfklima/index.php';
                    </script>";

                ?>

                <?php
                else:
                ?>
                <form action="index.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="name" class="form-label">Név</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Gipsz Jakab" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail cím</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="gjakab@email.com" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="tel" class="form-label">Telefonszám</label>
                        <input type="tel" class="form-control" id="tel" name="tel" placeholder="+36 00 000 0000" pattern="((?:\+?3|0)6)(?:-|\()?(\d{1,2})(?:-|\))?(\d{3})-?(\d{3,4})" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="form-label">Tárgy</label>
                        <select class="form-control" id="subject" name="subject" tabindex="3" required>
                            <option value="" disabled selected hidden>Válasszon egyet!</option>
                            <option value="Rendelés">Új rendelés</option>
                            <option value="Érdeklődés">Érdeklődés</option>
                            <option value="Karbantartás">Karbantartási kérelem</option>
                            <option value="Panasz">Panaszbejelentés</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Üzenet</label>
                        <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Írja ide üzenetét..." tabindex="4" required></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey=""></div>
                    <div>
                        <input type="submit" class="btn" value="Küldés">
                    </div>
                </form>
                <?php
                endif;
                ?>
            </div>
            <p class="message-sent-alert"></p>
        </div>
        <img src="img/arrow.png" alt="Görgess lejjebb!" class="arrow" data-scrollto-button="process">
    </div>
    <div class="process" data-scrollto-target="process">
        <h1 class="title">Hogyan dolgozunk:</h1>
        <div class="wrapper">
            <div class="right">
                <h1>1. LÉPÉS: <span>KAPCSOLATFELVÉTEL</span></h1>
                <h2>Vegye fel velünk a kapcsolatot, kérjen ajánlatot!</h2>
            </div>
            <div class="left">
                <h1>2. LÉPÉS: <span>HELYSZÍNI FELMÉRÉS</span></h1>
                <h2>Előre egyeztetett időpontban elvégezzünk a helyszíni felmérést.</h2>
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
        <h1 class="title">Áraink:</h1>
        <div class="wrapper">
            <div class="container">
                <div>
                    <h2>Felmérés és árajánlat készítés:</h2>
                    <ul>
                        <li>Alap szerelés 3 méter csőhosszig: <span>60.000</span>.- Ft</li>
                        <li>Alapszerelésen felüli csövezés méterenként +<span>7.000</span>.- Ft</li>
                        <li>Előcsövezés: vésés/csövezés méterenként +<span>9.000</span>.- Ft</li>
                        <li>Előcsövezésre telepítés (beltéri egységenként): <span>40.000</span>.- Ft</li>
                    </ul>
                </div>
                <div>
                    <h2>Karbantartás</h2>
                    <ul>
                        <li>Egy beltéri egység esetén: <span>9500</span>.- Ft</li>
                        <li>Több egység esetén: <span>8500</span>.- Ft/db</li>
                    </ul>
                </div>
                <div>
                    <h2>A TELEPÍTÉS ALAPSZERELÉSI ÁRA TARTALMAZZA:</h2>
                    <ul>
                        <li>- bel-, és kültéri egység felszerelését, bekötését</li>
                        <li>- bel-, és kültéri egység felszereléséhez szükséges anyagokat</li>
                        <li>- hőszigeteléssel ellátott rézcsőpár kiépítését 3 fm-ig</li>
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
                    <p>III., IV., X., XIII., XV., XVI., XVII., XVIII., XIX., XX., XXI., XXII., XXIII. kerület</p>
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
                    Alapszerelésen felüli szerelés: a klímaegységek beüzemeléséhez több
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
            <p>Amennyiben úgy dönt, hogy szüksége van egy klímakészülékre, először mindenképpen kérje szakember
                véleményét!
            </p>
            <div class="container">
                <div class="blue">
                    <h1>Ön igényeihez igazodva az alábbi szempontokat kell figyelembe venni:</h1>
                    <ul>
                        <li>mekkora a hűtendő/fűtendő helyiség mérete (alapterület, belmagasság)</li>
                        <li>jellemzői (tetőtér, szigetelés, áramellátási lehetőség, kondenzvíz-elvezetés, fal anyaga és -vastagsága)</li>
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
                    <p>Általánosságban elmondható, hogy túlnyomórészt 3,5 KW-os készülékek kerülnek felszerelésre 20-40 m<sup>2</sup>-es helyiségekbe.
                        2,5 KW-os készülékek igazán kis helyiségekben, például kb. 10-15 m<sup>2</sup>-es hálószobában hatékonyak és még ha gyárilag akár 15-20 m<sup>2</sup>-es helyiségben is használhatók,
                        a 3,5 KW-os készülékek könnyebben-kisebb teljesítménnyel adják le a hőt és gyártótól függetlenül kb. 10-20 ezer Ft a különbség.
                        Tetőtéri kis helyiség esetén pedig abszolút a 3,5 KW-os készülék javasolt.
                        40-50 m<sup>2</sup> feletti helyiségek hatékony hűtésére/fűtésére már inkább az 5 KW-os készülékek javasoltak, azonban itt már figyelembe kell venni a helyiségek elhelyezkedését.
                        Amennyiben az egyik helyiség belső falára helyezzük a készüléket és vele szemben helyezkedik el a másik klimatizálandó helyiség ajtaja (szerencsés eset),
                        úgy hatékonyan működtethetjük. Az egyik szobából a másikba nem fog átmenni az előszobán és „bekanyarodni” a hő, habár a hőmérséklet megpróbál kiegyenlítődni.
                        Ide tartozik a nem elhanyagolható gazdasági tény is, miszerint az 5KW-os készülékek kb. dupla annyiba kerülnek mint a 3,5 KW-os társaik,
                        így ha már erre van szükségünk és pénztárcánk engedi az 5 KW-os készüléket, érdemesebb lehet elgondolkozni inkább 2 db 3,5 KW-os készüléken…
                    </p>
                    <p>Már meglévő ingatlanok esetében a kül- és beltéri egység ideális helyét kell megtalálnunk,
                        a szükséges vezetékezést pedig ezeket eltakaró kábelcsatornába rejtjük.
                        Újonnan épülő vagy átépítés alatt álló ingatlanok esetében a falba rejtve süllyesztjük a vezetékeket,
                        így érve el a diszkrét megjelenést.
                    </p>
                    <p>Klímakészülék felszerelésének legzajosabb és legporosabb része a beltéri és kültéri egység összekötésének előkészítése.
                        Ilyenkor jó esetben csak 1 db lyukat szükséges fúrni a homlokzati falon, amely kb. 6 cm átmérőjű.
                        A fúrás zaja sajnos nem tompítható, porelszívást, és – ha szükséges – védőfóliázást alkalmazunk.
                        Magunk után minden esetben összetakarítunk.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery" data-scrollto-target="gallery">
        <h1 class="title">Munkáink</h1>
        <div class="wrapper" id="gallery-wrapper">
            <div class="grid">
            <?php
            // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
            $dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR; // dir/gallery/
            $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

            // (C) OUTPUT IMAGES    
            foreach ($images as $i) {
            printf(' <div class="gallery-item"><img class="gallery-image" loading="lazy" src="gallery/%s"/></div>', basename($i));
            }
            ?>
            </div>
        </div>
    </div>

    <script src="scripts/jquery-3.6.0.min.js"></script>
    <script src="scripts/particles.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="scripts/app.js"></script>
    
    
</body>
</html>