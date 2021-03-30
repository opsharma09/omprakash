<footer>
    <div class="footer_upper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter">
                        <div class="row">
                            <div class="col">
                                <i class="fas fa-envelope-open-text"></i></div>
                            <div class="col-lg-5">
                                <div class="news_title text-center">
                                    <h3>Unser Kaffee Newsletter</h3>
                                    <p>Jetzt anmelden und einen 3 Euro Gutschein für unseren Onlineshop sichern.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1">
                                <div class="newsletter_form">
                                    <form action="">
                                        <div class="form-row">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Email Adresse eingeben">
                                                <div class="input-append"><button>Abonieren</button></div>
                                            </div>
                                            <ul>
                                                <li>Ich habe die Datenschutzerklärung gelesen und bin mit dieser einverstanden.</li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-nav text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <h3>Nutzerin</h3>
                    <ul class="foot_nav">
                        <?php if($this->session->userdata('user')){?><li><a href="<?=base_url('login/logout')?>">Ausloggen</a></li><?php }else{?><li><a href="<?=base_url('login')?>">Anmeldung</a></li><?php } ?>
                    </ul>
                    <h3>Über Uns</h3>
                    <ul class="foot_nav">
                        <li><a href="">- Unere Philosophi</a></li>
                        <li><a href="">- Unsere Location</a></li>
                        <li><a href="">- Rostphilosophie</a></li>
                        <li><a href="">- Unternehmensphilosophie</a></li>
                    </ul>
                    <h3>Zahlungsarten</h3>
                    <ul class="foot_nav">
                        <li><a href="">- Vorkasse</a></li>
                        <li><a href="">- UPaypal</a></li>
                        <li><a href="">- Sepa Lastschrift</a></li>
                        <li><a href="">- Kreditkarte</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h3>Social Media</h3>
                    <ul class="foot_nav">
                        <li><a href="">- Facebook</a></li>
                        <li><a href="">- Instagram</a></li>
                        <li><a href="">- Youtube</a></li>
                    </ul>
                    <h3>Wir versenden mit:</h3>
                    <ul class="foot_nav">
                        <li><a href="">- Unsere Philosophie</a></li>
                        <li><a href="">- Unsere Philosophie</a></li>
                        <li><a href="">- Unsere Philosophie</a></li>
                        <li><a href="">- Unsere Philosophie</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h3>Kaffee Kaufen</h3>
                    <ul class="foot_nav">
                        <li><a href="">- Kaffee Blends</a></li>
                        <li><a href="">- Bio Kaffees</a></li>
                        <li><a href="">- Sortenreine Kaffees</a></li>
                        <li><a href="">- Probierpaket</a></li>
                    </ul>
                    <h3>Espresso Kaufen</h3>
                    <ul class="foot_nav">
                        <li><a href="">- Espresso Blends</a></li>
                        <li><a href="">- UBio Espresso</a></li>
                        <li><a href="">- Probierpaket</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h3>Unsere Locations</h3>
                    <h6>Kleine Rösterei und Fachgeschäft</h6>
                    <p>- Montag - Freitag: 9:30 Uhr - 18 Uhr <br> Samstag: 9:30 Uhr - 14 Uhr <br>- Wunstorferstr. 33 <br> 30453 Hannover Limmer</p>
                    <h6>Große Rösterei und Werksverkauf</h6>
                    <p>- Samstag: 9:30 Uhr - 13 Uhr <br> (Besichtigungen auf Anfrage) - Dorfstraße 17 <br> 31303 Burgdorf OT Heeßel</p>
                    <h6>Kaffeebar &amp; Fachgeschäft</h6>
                    <p>- Montag - Samstag: 9:30 Uhr - 19:30 Uhr <br>- Ernst-August-Platz 5 <br>Niki-de-Saint-Phalle-Promenade <br>(Galeria „Choco &amp; Co".) <br>30159 Hannover</p>
                </div>
            </div>
        </div>
    </div>
    <div id="fancyFooterBottom">
        <a href="/impressum">Impressum</a>&nbsp;
        <a href="/agb">AGB</a>&nbsp;
        <a href="/datenschutz">Datenschutzerklärung</a>&nbsp;
        <a href="/widerrufsbelehrung">Widerrufsrecht</a>&nbsp;
        <a href="/versand">Versand</a>&nbsp;
        <a href="/kontakt">KONTAKT</a>&nbsp;
        | Copyright © Hannoversche Kaffeemanufaktur 2017-2020, alle Rechte vorbehalten
    </div>
</footer>
<!--footer ended.-->
<script src="<?= base_url() ?>public/js/custom.js"></script>
