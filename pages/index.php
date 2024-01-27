<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Servicii de odihnă</title>
</head>
<body>
    
    <?php include_once("particles/header.php"); ?>
    


    <section class="home" id="home">

        <div class="image">
            <img src="/nicolae/img/principala.png" alt="">
        </div>
        <div class="content">
            <h3>Aventura merită</h3>
            <p>Bine ați venit pe site-ul nostru plin de aventuri! Indiferent dacă sunteți un călător pasionat în căutarea unei noi experiențe sau un spirit liber însetat de aventură, sunteți la locul potrivit.</p>
            <a href="#" class="btn">Explorează acum</a>
        </div>

    </section>


    <section class="form-container">

        <form action="">    
            <div class="inputBox">
                <span>trebuie să</span>
                <input type="text" placeholder="caută locuri">
            </div>
            <div class="inputBox">
                <span>sosire</span>
                <input type="date">
            </div>
            <div class="inputBox">
                <span>plecare</span>
                <input type="date">
            </div>
            <input type="submit" value="rezervă acum" class="btn">
        </form>

    </section>


    <section class="packages" id="packages">

        <h1 class="heading">destinațiile <span>noastre</span></h1>
        <div class="box-container">
        <?php
            include('conexiune.php');

            $query = "SELECT * FROM packages";
            $result = mysqli_query($conexiune, $query);

            if (!$result) {
                die('Query failed: ' . mysqli_error($conexiune));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="box">';
                echo '    <div class="image">';
                echo '        <img src="' . $row['img'] . '" alt="">';
                echo '        <h3><i class="fas fa-map-marker-alt"></i> ' . $row['destination'] . ' </h3>';
                echo '    </div>';
                echo '    <div class="content">';
                echo '        <div class="price"> ' . $row['price'] . ' <span>' . $row['discounted_price'] . '</span> </div>';
                echo '        <p>' . $row['description'] . '</p>';
                echo '        <a href="#" class="btn"> rezervă acum</a>';
                echo '    </div>';
                echo '</div>';
            }

            mysqli_close($conexiune);
        ?>

        </div>

    </section>


    <section class="services" id="services">

        <h1 class="heading"> serviciile <span>noastre</span> </h1>
        <div class="box-container">
            <div class="box">
                <span>01</span>
                <i class="fas fa-hotel"></i>
                <h3>Hotel accesibil</h3>
                <p>Dacă ești în căutarea unui hotel accesibil, ai ajuns în locul potrivit. Ne-am asigurat că fiecare aspect al hotelului nostru este proiectat pentru a oferi o experiență confortabilă și convenabilă tuturor oaspeților. Avem facilități moderne, camere spațioase și adaptate nevoilor persoanelor cu dizabilități, iar personalul nostru este mereu pregătit să ofere asistență și să se asigure că te simți ca acasă.</p>
            </div>
            <div class="box">
                <span>02</span>
                <i class="fas fa-plane"></i>
                <h3>Cea mai rapidă călătorie</h3>
                <p>Călătoriile tale merită să fie rapide și eficiente, iar noi îți venim în întâmpinare cu servicii de înaltă calitate care să-ți faciliteze planificarea și deplasarea. Indiferent că alegi să explorezi destinații exotice sau să te delectezi cu frumusețea locurilor din apropiere, vom fi aici pentru a-ți oferi cele mai bune sfaturi și recomandări pentru a-ți optimiza timpul și pentru a te bucura din plin de fiecare experiență.</p>
            </div>
            <div class="box">
                <span>03</span>
                <i class="fas fa-utensils"></i>
                <h3>Mâncare și băuturi</h3>
                <p>Dar călătoriile nu sunt doar despre locații și camere de hotel. Este și despre descoperirea noilor arome, gusturi și experiențe culinare. La noi vei găsi o varietate impresionantă de preparate delicioase, realizate cu pasiune și atenție la detalii. Bucătăria noastră internațională te va purta într-o călătorie gustativă în jurul lumii, iar băuturile noastre rafinate completează perfect fiecare masă.</p>
            </div>
            <div class="box">
                <span>04</span>
                <i class="fas fa-globe"></i>
                <h3>În jurul lumii</h3>
                <p>Bucură-te de călătorii accesibile, aventuri palpitante, experiențe culinare deosebite și ghiduri complete de siguranță, toate într-un singur loc. Alătură-te nouă și pregătește-te pentru călătorii memorabile în jurul lumii!</p>
            </div>
            <div class="box">
                <span>05</span>
                <i class="fas fa-hiking"></i>
                <h3>Aventuri noi</h3>
                <p>Aventura este esența călătoriilor, iar noi suntem aici să-ți oferim experiențe de neuitat. Indiferent că îți dorești să explorezi locuri neumblate sau să te bucuri de activități pline de adrenalină, te vom ghida în alegerea celor mai interesante aventuri noi. De la excursii în natură la sporturi extreme sau evenimente culturale unice, vei descoperi mereu ceva nou și captivant.</p>
            </div>
            <div class="box">
                <span>06</span>
                <i class="fas fa-bullhorn"></i>
                <h3>ghid de siguranță</h3>
                <p>În plus, suntem dedicați siguranței tale deplină în timpul călătoriilor. Ghidurile noastre de siguranță sunt elaborate cu grijă, pentru a-ți oferi informații esențiale și sfaturi practice. Ne dorim ca tu să te simți protejat și încrezător în fiecare moment al călătoriei tale.</p>
            </div>
        </div>

    </section>


    <section class="pricing" id="pricing">

        <h1 class="heading"> prețurile <span>noastre</span> </h1>
        <div class="box-container">
            <div class="box">
                <h3> plan de bază </h3>
                <div class="price">
                    <span>$</span>
                    <span class="amount">30</span>
                    <span></span>
                </div>
                <ul>
                    <li>10 zile</li>
                    <li>mâncare și băuturi</li>
                    <li>ghid de siguranță</li>
                    <li>asigurare</li>
                    <li>hotel de lux</li>
                </ul>
                <a href="#" class="btn">alege planul</a>
            </div>
            <div class="box">
                <h3> plan standart </h3>
                <div class="price">
                    <span>$</span>
                    <span class="amount">50</span>
                    <span></span>
                </div>
                <ul>
                    <li>20 zile</li>
                    <li>mâncare și băuturi</li>
                    <li>ghid de siguranță</li>
                    <li>asigurare</li>
                    <li>hotel de lux</li>
                </ul>
                <a href="#" class="btn">alege planul</a>
            </div>
            <div class="box">
                <h3> premium plan </h3>
                <div class="price">
                    <span>$</span>
                    <span class="amount">90</span>
                    <span></span>
                </div>
                <ul>
                    <li>30 zile</li>
                    <li>mâncare și băuturi</li>
                    <li>ghid de siguranță</li>
                    <li>asigurare</li>
                    <li>hotel de lux</li>
                </ul>
                <a href="#" class="btn">alege planul</a>
            </div>
        </div>

    </section>


    <section class="review" id="review">

        <h1 class="heading"> recenzia <span>clienților</span> </h1>
        <div class="swiper-container review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <img src="/nicolae/img/pic-3.png" alt="">
                    <h3>Ungureanu Alex</h3>
                    <p>N-am fost niciodată mai fericită cu o vacanță decât atunci când am folosit acest site! Am găsit cele mai incredibile locuri de vacanță la prețuri excelente. Site-ul a fost ușor de navigat și am găsit informațiile necesare rapid. Recomand cu căldură acest site tuturor celor care caută aventuri minunate și oferte de neegalat!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="/nicolae/img/pic-4.png" alt="">
                    <h3>Coliba Andreea</h3>
                    <p>Site-ul acesta este un adevărat salvator pentru mine! Am fost în căutarea unui loc de vacanță deosebit și am găsit exact ceea ce căutam aici. Recenziile și imaginile au fost foarte utile în luarea deciziei. Am fost impresionat de serviciile excelente oferite și de modul în care toate detaliile au fost bine gestionate. Am avut o vacanță minunată datorită acestui site!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="/nicolae/img/pic-5.png" alt="">
                    <h3>Goreanu Max</h3>
                    <p>Nu pot să încetez să laud acest site! Am descoperit cele mai frumoase locuri de vacanță prin intermediul lor. Site-ul este foarte intuitiv, iar procesul de rezervare a fost ușor și rapid. Echipa din spatele site-ului a fost foarte receptivă și am primit răspunsuri rapide la întrebările mele. Rezervarea a fost o experiență fără stres și am avut o vacanță de neuitat!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>


    <section class="contact" id="contact">

        <h1 class="heading"> <span>Contactează-ne</span> pe noi </h1>
        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="Numele">
                <input type="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Numărul">
                <input type="text" placeholder="Subiect">
            </div>
            <textarea name="" placeholder="Mesajul dumneavoastră"id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Trimite mesajul" class="btn">
        </form>

    </section>

    <section class="blogs" id="blogs">
       
        <h1 class="heading"> Vlogurile <span>noastre</span> </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="/nicolae/img/v1.png" alt="">
                </div>
                <div class="content">
                    <h3>Explorează lumea acum, aventura te așteaptă!</h3>
                    <a href="#" class="btn">mai mult</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 1 Iunie, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> Facută de: Ana </a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/nicolae/img/v2.png" alt="">
                </div>
                <div class="content">
                    <h3>Explorează lumea acum, aventura te așteaptă!</h3>
                    <a href="#" class="btn">mai mult</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 25 Iulie, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> Facută de: Andreea </a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="/nicolae/img/v3.png" alt="">
                </div>
                <div class="content">
                    <h3>Explorează lumea acum, aventura te așteaptă!</h3>
                    <a href="#" class="btn">mai mult</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 14 August, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> Facută de: Alina </a>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>Ramurile noastre</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Moldova </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Russia </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Romînia </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Franța </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Germania </a>
            </div>
            <div class="box">
                <h3>Câteva link-uri</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> pachete </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> servicii </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> revizuire </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> contacte </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> bloguri </a>
            </div>
            <div class="box">
                <h3>Informații despre contacte</h3>
                <a href="#"> <i class="fas fa-phone"></i> +373-456-123 </a>
                <a href="#"> <i class="fas fa-phone"></i> +373-123-465 </a>
                <a href="#"> <i class="fas fa-user"></i> DreamEscape@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, indai -400104 </a>
            </div>
            <div class="box">
                <h3>Urmați-ne</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebok </a>
                <a href="#"><i class="fab fa-twitter"></i> twitter </a>
                <a href="#"><i class="fab fa-instagram"></i> instagram </a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"><i class="fab fa-pinterest"></i> pinterest </a>
            </div>
        </div>
        <div class="credit"> creat de <span>Boritschi Nicolae</span> | toate drepturile rezervate </div>

    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

</body>
</html>