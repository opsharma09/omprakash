<?php $category = $this->db->query('select * from product_category')->result(); ?>
<div id="top_menu_wrapper">
    <div id="top_menu_right">
        <!-- <a>Hallo, <span>utkarsh.saxena!</span></a> -->
        <?php if($this->session->userdata('user')){?><a  id="header_account" href="<?=base_url()?>mein-account">Hallo, <span id="username_login"><?php $arr = explode("@", $this->session->userdata('user')->email_id, 2);echo $arr[0];  ?>!</span></a><?php }else{?><a href="<?=base_url('login/logout')?>">Einloggen</a> / <a href="<?=base_url('register')?>">Registrieren</a><?php } ?>
    </div>
    <div class="menu-topmenu-container">
        <ul id="menu-topmenu" class="menu">
            <li><a href="tel:+4951131010450">Tel. 0511 310 104 50</a></li>
            <li><a href=" ">kontakt</a></li>
        </ul>
    </div>
</div>
<header class="d-lg-block d-none">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 desktop">
                <div class="logo"><a href="<?=base_url()?>"><img src="<?=base_url()?>public/images/logo.svg" alt=""></a></div>
                <ul class="header">
                    <?php 
                    foreach ($category as $key => $cat) {
                        $subcategory=$this->Common->select_data('product_sub_category','*',array('category'=>$cat->id,'is_package'=>'N','is_country'=>'N','status'=>1));
                       if($key == 0){

                        ?>
                    <li class="menu">
                        <a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat->name)) ?>"><?=$cat->name?></a>
                        <div class="sub-menu menu_dropdown mega-menu">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li class="bold"><a href=" <?=base_url('kaffee-finder')?>">Kaffee Finder</a></li>
                                        <li><a href=" <?=base_url('kaffee-finder')?>">Meinen Lieblingskaffee finden</a></li>
                                        <li class="bold mt-2"><a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat->name)) ?>">Beliebte Kaffees</a></li>
                                        <?php foreach ($subcategory as $sub_key => $sub_cat) {
                                            $products=$this->Common->select_data('products','*',array('category'=>$cat->id,'subcategory' => $sub_cat['id']));
                                            ?>
                                            <li><a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat->name)).'/'.com_slugify($sub_cat['name']) ?>"><?=$sub_cat['name']?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul>    
                                        <li class="bold"><a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat->name)) ?>">Sortenreine Kaffees nach Region</a></li>
                                        <?php $subcategory=$this->Common->select_data('product_sub_category','*',array('category'=>$cat->id,'is_package'=>'N','is_country'=>'Y','status'=>1));
                                        foreach ($subcategory as $sub_key => $sub_cat) {
                                            ?>
                                        <li><a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat->name)).'/sortenreine_kaffees/'.com_slugify($sub_cat['e_name']) ?>"><?=$sub_cat['name']?></a></li>
                                        <?php } ?>
                                        <li class="bold"><a href="">Noch mehr Auswahl</a></li>
                                        <?php $subcategory=$this->Common->select_data('product_sub_category','*',array('category'=>$cat->id,'is_package'=>'Y','status'=>1));
                                        foreach ($subcategory as $sub_key => $sub_cat) {
                                            ?>
                                        <li><a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat->name)).'/'.com_slugify($sub_cat['name']) ?>"><?=$sub_cat['name']?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php }elseif($key == 1){?>
                        <li><a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat->name)) ?>"><?=$cat->name?></a>
                        <ul class="sub-menu menu_dropdown">
                            <li><a href=" <?=base_url('kaffee-finder')?>">Kaffee Finder</a></li>
                            <li><a href="<?=base_url('kaffee-finder')?>">Meinen Lieblingskaffee finden</a></li>
                            <li><a href="">Unsere Espressi</a></li>
                            <?php foreach ($subcategory as $sub_key => $sub_cat) {
                                $products=$this->Common->select_data('products','*',array('category'=>$cat->id,'subcategory' => $sub_cat['id']));
                                ?>
                            <li><a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat->name)).'/'.com_slugify($sub_cat['name']) ?>"><?=$sub_cat['name']?></a>
                                
                            </li>
                        <?php } ?>
                            <li><a href="">Noch mehr Auswahl</a></li>
                            <?php $subcategory=$this->Common->select_data('product_sub_category','*',array('category'=>$cat->id,'is_package'=>'Y'));
                            foreach ($subcategory as $sub_key => $sub_cat) {
                                ?>
                            <li><a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat->name)).'/'.com_slugify($sub_cat['name']) ?>"><?=$sub_cat['name']?></a>
                                
                            </li>
                        <?php } ?>
                        </ul>
                    </li>
                    <?php }elseif($key == 2){ ?>
                    <li><a href="<?= base_url('produkt-kategorie/'.com_slugify($cat->e_name)) ?>"><?=$cat->name?></a>
                        <ul class="sub-menu menu_dropdown">
                            <li class="margin-up"><a href="<?=base_url('produkt-kategorie/'.com_slugify($cat->e_name))?>">Unser Zubeh??r</a></li>
                        <?php if(!empty($subcategory)){ foreach ($subcategory as $ke => $mc) {?>
                            <li><a href="<?= base_url('produkt-kategorie/zubehoer/'.com_slugify($mc['e_name']))?>"><?=$mc['name']?></a></li>
                        <?php } } ?>
                        </ul>
                    </li>
                    <?php }} ?>
                    <li><a href="<?=base_url('produkt-kategorie/'.com_slugify('GESCHENKE'))?>">Geschenke</a>
                        <ul class="sub-menu menu_dropdown">
                            <li class="margin-up"><a href="<?=base_url('produkt-kategorie/geschenke')?>">Geschenkideen</a></li>
                            <li class="margin-up"><a href="<?=base_url('veranstaltungen')?>">Erlebnis-Gutscheine</a></li>
                            <li><a href="<?=base_url()?>baristakurs">Baristakurse</a></li>
                            <li><a href="<?=base_url()?>genussreise">Genussreisen</a></li>
                            <li class="margin-up"><a href="<?=base_url()?>produkt/gutschein/">Wertgutscheine</a></li>
                            <li><a href="<?=base_url()?>produkt/gutschein/10">10,00 ???</a></li>
                            <li><a href="<?=base_url()?>produkt/gutschein/15">15,00 ???</a></li>
                            <li><a href="<?=base_url()?>produkt/gutschein/20">20,00 ???</a></li>
                            <li><a href="<?=base_url()?>produkt/gutschein/50">50,00 ???</a></li>
                            <li><a href="<?=base_url()?>produkt/gutschein/100">100,00 ???</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url() ?>unsere-philosophie">Philosophie</a>
                        <ul class="sub-menu menu_dropdown">
                            <li class="margin-up"><a href="<?= base_url() ?>unsere-philosophie">Unsere Philosophie</a></li>
                            <li><a href="<?= base_url() ?>unsere-philosophie">Unternehmensphilosophie</a></li>
                            <li><a href="<?=base_url()?>roestung">R??stphilosophie</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url() ?>veranstaltungen">Veranstaltungen</a>
                        <ul class="sub-menu menu_dropdown">
                            <li class="margin-up"><a href="<?= base_url() ?>buchungstool">Buchen</a></li>
                            <li><a href="<?=base_url()?>baristakurs/#buchen">Baristakurse</a></li>
                            <li><a href="<?=base_url()?>genussreise/#buchen">Genussreisen</a></li>
                            <li class="margin-up"><a href="<?=base_url()?>veranstaltungen">Verschenken</a></li>
                            <li><a href="<?=base_url()?>baristakurs/#vouchersAnchor">Baristakurse</a></li>
                            <li><a href="<?=base_url()?>genussreise/#vouchersAnchor">Genussreisen</a></li>
                            <li class="margin-up"><a href="<?=base_url()?>veranstaltungen">Noch mehr Auswahl</a></li>
                            <li><a href="<?=base_url()?>veranstaltungen">Alle Veranstaltungen</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url() ?>home/blog">Blog</a></li>
                    <li><a href="<?= base_url() ?>home/firmenkunden">Firmenkunden</a>
                        <ul class="sub-menu menu_dropdown">
                            <li class="margin-up"><a href="<?= base_url() ?>home/firmenkunden">Infos f??r Firmenkunden</a></li>
                            <li><a href="<?= base_url() ?>home/firmenkunden">Allgemeine Infos</a></li>
                            <li><a href="<?=base_url()?>gastronomie">Speziell f??r die Gastronomie</a></li>
                            <li><a href="<?=base_url()?>schulungen">Schulungen</a></li>
                            <li><a href="<?=base_url()?>mehrwegsystem">Mehrwegsystem</a></li>
                            <li class="margin-up"><a href="">Direkt loslegen</a></li>
                            <li><a href="<?=base_url()?>mein-account">Anmelden</a></li>
                            <li><a href="<?=base_url()?>register">Registrieren</a></li>
                            <li><a href="<?=base_url()?>bestellformular">Bestellen</a></li>
                        </ul>
                    </li>
                    <?php if($this->session->userdata('user')){$cart_count =$this->Common->select_data('add_to_cart','sum(qty) as cart',array('user_id'=>$this->session->userdata('user')->user_id));
                    $event_count =$this->Common->select_data('event_booking','COUNT(id) as cart',array('user_id'=>$this->session->userdata('user')->user_id));
                    ?><li><a href="<?= base_url() ?>home/cart" style="color:white"><?php if($cart_count[0]['cart']||$event_count[0]['cart']){?><i class="fas fa-shopping-cart"><span style="font-size:15px;margin-bottom-3px">( <?=$cart_count[0]['cart']+$event_count[0]['cart']?> )</span></i></a><?php }else{?><a href="<?= base_url() ?>home/cart" style="color:white"><i class="fas fa-shopping-cart"></i></a></li>
                    <?php } } else{ ?>
                    <li><a href="<?= base_url() ?>home/cart" style="color:white"><i class="fas fa-shopping-cart"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</header>
<header class="d-lg-none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="mobile">
                    <div class="logo"><a href=""><img src="<?=base_url()?>public/images/logo.svg" alt=""></a></div>
                    <button class="nav_trigger" id="nav_trigger"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="left_sidebar d-lg-none">
    <div class="text-right border-0"><button class="close_nav" onclick="left_close()">&times;</button></div>
    <ul class="navigation">
        <li>
            <a href="">Kaffee</a>
            <button class="ul_open float-right" onclick="nav_open(this)"></button>
            <ul class="mob_dropdown">
                <li><a href="">Kaffee Finder</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Meinen Lieblingskaffee finden</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="mob_dropdown">
                <li><a href="">Beliebte Kaffees</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">kaffee Blends</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Melange Hanovera</a></li>
                                <li><a href="">Suave Melange</a></li>
                                <li><a href="">Asphalt Blend</a></li>
                                <li><a href="">Bio Melange ??quatorial</a></li>
                                <li><a href="">Leibniz Kaffee</a></li>
                                <li><a href="">Sophies feine R??stung</a></li>
                                <li><a href="">Bio Sch??mli</a></li>
                                <li><a href="">Aegidius Melange</a></li>
                                <li><a href="">96 Melange ???Alte Liebe???</a></li>
                                <li><a href="">Uli Stein Blend | Edition 1</a></li>
                                <li><a href="">Maries K??niglicher Hofkaffee</a></li>
                                <li><a href="">Recken Blend</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="mob_dropdown">
                        <li><a href="">Bio Kaffees</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Bio Arabica (entkoffeiniert)</a></li>
                                <li><a href="">Bio ??thiopien Sidamo</a></li>
                                <li><a href="">Bio Brasil</a></li>
                                <li><a href="">Bio Espresso Maestro</a></li>
                                <li><a href="">Bio Honduras</a></li>
                                <li><a href="">Bio Espresso India Verde</a></li>
                                <li><a href="">Bio Kolumbien</a></li>
                                <li><a href="">Bio Melange ??quatorial</a></li>
                                <li><a href="">Bio Mexico Santa Catarina</a></li>
                                <li><a href="">Bio Peru</a></li>
                                <li><a href="">Bio Sch??mli</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="mob_dropdown">
                        <li><a href="">Special Editions</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">96 Melange ???Alte Liebe???</a></li>
                                <li><a href="">Asphalt Blend</a></li>
                                <li><a href="">Leibniz Kaffee</a></li>
                                <li><a href="">Maries K??niglicher Hofkaffee</a></li>
                                <li><a href="">Sophies feine R??stung</a></li>
                                <li><a href="">Uli Stein Blend | Edition 1</a></li>
                                <li><a href="">Recken Blend</a></li>
                                <li><a href="">Vereinskaffee</a></li>
                                <li><a href="">Vereinskakao</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="mob_dropdown">
                        <li><a href="">Kaffee des Monats</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Juli 2020: Indonesia Kalossi Sulawesi Grade 1</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="mob_dropdown">
                <li><a href="">Sortenreine Kaffees nach Region</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Afrika</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Bio ??thiopien Sidamo</a></li>
                                <li><a href="">Ruanda Inzovu</a></li>
                                <li><a href="">Tanzania</a></li>
                            </ul>
                        </li>
                        <li><a href="">Amerika</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Bio Arabica (entkoffeiniert)</a></li>
                                <li><a href="">Bio Brasil</a></li>
                                <li><a href="">Brasil Santos</a></li>
                                <li><a href="">Brazil Fazenda Serrinha</a></li>
                                <li><a href="">Columbia Supremo</a></li>
                                <li><a href="">Costa Rica Tarazzu</a></li>
                                <li><a href="">Bio Honduras</a></li>
                                <li><a href="">Jamaica Blue Mountain</a></li>
                                <li><a href="">Bio Kolumbien</a></li>
                                <li><a href="">Nicaragua Maragogype</a></li>
                                <li><a href="">Bio Mexico Santa Catarina</a></li>
                                <li><a href="">Bio Peru</a></li>
                            </ul>
                        </li>
                        <li><a href="">Asien</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Indien Monsooned Malabar</a></li>
                                <li><a href="">Java Jampit</a></li>
                                <li><a href="">Pang Khon Thailand</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="mob_dropdown">
                <li><a href="">Noch mehr Auswahl</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Probierpakete</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Probierpaket Afrika</a></li>
                                <li><a href="">Probierpaket Asien</a></li>
                                <li><a href="">Probierpaket Bio-Kaffees</a></li>
                                <li><a href="">Probierpaket Classic</a></li>
                                <li><a href="">Probierpaket Espressoblends</a></li>
                                <li><a href="">Probierpaket Mein Hannover</a></li>
                                <li><a href="">Probierpaket Mittelamerika</a></li>
                                <li><a href="">Probierpaket S??damerika</a></li>
                            </ul>
                        </li>
                        <li><a href="">Drip-Bag Kaffee</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Drip Coffee Box: Allstars Selection</a></li>
                                <li><a href="">Drip Coffee Box: Bio Selection</a></li>
                                <li><a href="">Drip Coffee Box: Blend Selection</a></li>
                                <li><a href="">Drip Coffee Box: Sortenrein Selection</a></li>
                                <li><a href="">Drip Coffee Box: Bio Entkoff.</a></li>
                            </ul>
                        </li>
                        <li><a href="">Gutscheine</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Wertgutschein 10,00 ???</a></li>
                                <li><a href="">Wertgutschein 15,00 ???</a></li>
                                <li><a href="">Wertgutschein 20,00 ???</a></li>
                                <li><a href="">Wertgutschein 50,00 ???</a></li>
                                <li><a href="">Wertgutschein 100,00 ???</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="">Espresso</a>
            <button class="ul_open float-right" onclick="nav_open(this)"></button>
            <ul class="mob_dropdown">
                <li><a href="">Kaffee Finder</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Meinen Lieblingskaffee finden</a></li>
                    </ul>
                </li>
                <li><a href="">Unsere Espressi</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Espresso Blends</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">96 Espresso Campione</a></li>
                                <li><a href="">Espresso Arabica</a></li>
                                <li><a href="">Espresso Clemente</a></li>
                                <li><a href="">Espresso Classico</a></li>
                                <li><a href="">Espresso Furioso</a></li>
                                <li><a href="">K??nig Georg Espresso</a></li>
                                <li><a href="">Recken Espresso</a></li>
                                <li><a href="">Vereinsespresso</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="mob_dropdown">
                        <li><a href="">Bio Espresso</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Bio Espresso India Verde</a></li>
                                <li><a href="">Bio Espresso Maestro</a></li>
                                <li><a href="">Bio Robusta</a></li>
                                <li><a href="">Bio Espresso Supremo</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="">Noch mehr Auswahl</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Probierpakete</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Probierpaket Espressoblends</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="mob_dropdown">
                        <li><a href="">Gutscheine</a>
                            <button class="ul_open float-right" onclick="nav_open(this)"></button>
                            <ul class="mob_dropdown">
                                <li><a href="">Wertgutschein 10,00 ???</a></li>
                                <li><a href="">Wertgutschein 15,00 ???</a></li>
                                <li><a href="">Wertgutschein 20,00 ???</a></li>
                                <li><a href="">Wertgutschein 50,00 ???</a></li>
                                <li><a href="">Wertgutschein 100,00 ???</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="">Zubeh??r</a>
            <button class="ul_open float-right" onclick="nav_open(this)"></button>
            <ul class="mob_dropdown">
                <li><a href="">Unser Zubeh??r</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Wasserkocher &amp; Kaffeemaschinen</a></li>
                        <li><a href="">Handfilter</a></li>
                        <li><a href="">Manuelle Zubereiter</a></li>
                        <li><a href="">M??hlen</a></li>
                        <li><a href="">Espressozubeh??r</a></li>
                        <li><a href="">Geschirr</a></li>
                        <li><a href="">B??cher</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="">Geschenke</a>
            <button class="ul_open float-right" onclick="nav_open(this)"></button>
            <ul class="mob_dropdown">
                <li><a href="">Erlebnis-Gutscheine</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Baristakurse</a></li>
                        <li><a href="">Genussreisen</a></li>
                    </ul>
                </li>
                <li><a href="">Wertgutscheine</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">10,00 ???</a></li>
                        <li><a href="">15,00 ???</a></li>
                        <li><a href="">20,00 ???</a></li>
                        <li><a href="">50,00 ???</a></li>
                        <li><a href="">100,00 ???</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="">Philosophie</a>
            <button class="ul_open float-right" onclick="nav_open(this)"></button>
            <ul class="mob_dropdown">
                <li><a href="">Unsere Philosophie</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Unternehmensphilosophie</a></li>
                        <li><a href="">R??stphilosophie</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="">Veranstaltungen</a>
            <button class="ul_open float-right" onclick="nav_open(this)"></button>
            <ul class="mob_dropdown">
                <li><a href="">Buchen</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Baristakurse</a></li>
                        <li><a href="">Genussreisen</a></li>
                    </ul>
                </li>
                <li><a href="">Verschenken</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Baristakurse</a></li>
                        <li><a href="">Genussreisen</a></li>
                    </ul>
                </li>
                <li><a href="">Noch mehr Auswahl</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Alle Veranstaltungen</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="">Blog</a></li>
        <li><a href="">Firmenkunden</a>
            <button class="ul_open float-right" onclick="nav_open(this)"></button>
            <ul class="mob_dropdown">
                <li><a href="">Infos f??r Firmenkunden</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Allgemeine Infos</a></li>
                        <li><a href="">Speziell f??r die Gastronomie</a></li>
                        <li><a href="">Schulungen</a></li>
                        <li><a href="">Mehrwegsystem</a></li>
                    </ul>
                </li>
                <li><a href="">Direkt loslegen</a>
                    <button class="ul_open float-right" onclick="nav_open(this)"></button>
                    <ul class="mob_dropdown">
                        <li><a href="">Anmelden</a></li>
                        <li><a href="">Registrieren</a></li>
                        <li><a href="">Bestellen</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
