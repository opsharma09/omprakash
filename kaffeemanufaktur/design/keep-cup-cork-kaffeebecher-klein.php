 <!DOCTYPE html>
 <html lang="de-DE">

 <head>
     <?php 
    $title = "Koffee.com";
    $style_name = "product";
    require_once("include/head.php")?>
 </head>

 <body>
     <!--header started.-->
     <?php require_once("include/header.php") ?>
     <!--header ended.-->
     <div class="header_gap"></div>
     <!--singleProductCoffeeIntroSection started.-->
     <div id="singleProductCoffeeIntroSection" class="singleProductIntroSection">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-4 text-center order-md-last order-lg-first">
                     <h2>Keep Cup Cork Kaffeebecher (klein)</h2>
                     <div class="productExcerpt">
                         <p>KeepCups' Mission ist es, die Verwendung von wiederverwendbaren Trinkbechern zu fördern. Die Cafébesitzerin Abigail Forsyth beobachtete die großen Mengen Abfall, die durch die Kaffee-to-Go Becher aus Pappe entstanden und entwickelte zusammen mit ihrem Bruder stylische und nachhaltig produzierte Coffee-To-Go-Becher. Hergestellt aus ausgehärtetem Natronkalkglas, hat die KeepCup Brew Cork Edition zusätzlich ein natürliches Korkband. Das Korkband wird in Portugal aus Abfällen der Produktion von Weinkorken hergestellt. KeepCups Glas-Trinkbecher gehören zu Lilli Greens persönlichen Favoriten, denn durch das hochwertige Material hat man ein positives Trinkgefühl. <br> <br> Der KeepCup läßt sich zwar verschließen, ist aber nicht auslaufsicher und sollte deshalb stets aufrecht transportiert werden. Es handelt sich nicht um einen Thermobecher, dennoch hält der KeepCup Dein Heißgetränk länger warm als ein herkömmlicher Pappbecher. Glas, Band und Deckel sind spülmaschinengeeignet. Alle Materialien sind zu 100% recycelbar und vegan.</p>
                     </div>
                 </div>
                 <div class="packshot">
                     <div class="packshotPosition position-static">
                         <img src="images/keepKupSmall.png" alt="">
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--singleProductCoffeeIntroSection ended.-->
     <!--helperBox started.-->
     <div id="helperBox">
         <div class="buylabel">
             <div class="buyLabelInner">BESTELLEN</div>
         </div>
         <div class="product_selector_inner">
             <form action="">
                 <div class="form-row">
<!--
                   <div class="col-12 back">
                        <label for="menge">Variante</label>
                        <select name="" id="menge" class="form-control">
                            <option value="" disabled selected>Bechar mit Deckal</option>
                            <option value="">0,9 Liter</option>
                        </select>
                    </div>
-->
                     <div class="col-12 back">
                         <label for="mahlgrad">Füllmenge</label>
                         <select name="" id="mahlgrad" class="form-control">
                             <option value="" disabled selected>227ml</option>
                         </select>
                     </div>
                     <div class="col-12">
                         <div class="single_variable_wrap">
                             <div class="quantityWrapper">
                                 <label for="anzahl">Anzahl:</label>
                                 <input type="number" class="form-control" value="1" id="anzahl">
                             </div>
                             <div class="customPriceTag">
                                 <p>20,90 €</p>
                             </div>
                             <div class="customAddToCartButtonWrapper">
                                 <button class="btn"><span class="fa fa-shopping-cart"></span> In den Warenkorb</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </form>
             <div class="payment-gateway text-center">
                 <div class="payment d-inline-block">
                     <img src="images/paypal-min.svg" alt="">
                     <img src="images/paypal.svg" alt="">
                 </div>
             </div>
         </div>
     </div>
     <!--helperBox ended.-->
     <!--footer started.-->
     <?php require_once("include/footer.php") ?>
     <script>
         if ($(window).width() >= 992) {
             function form_open() {
                 var single_bottom = document.querySelector("#singleProductCoffeeIntroSection").getBoundingClientRect().top;
                 var hover;
                 if ($("#helperBox:hover").length != 0) {
                     hover = "yes";
                 } else {
                     hover = "no";
                 }
                 var x = $(this).scrollTop();
                 if (single_bottom <= -100 && hover == "no") {
                     var width = $("#helperBox").width() - $("#helperBox .buylabel").width();
                     $("#helperBox").css("transform", "translate(" + width + "px, calc(-50% + 65px))")
                 } else {
                     $("#helperBox").css("transform", "")
                 }
             }
             form_open();
             $(window).scroll(form_open);
             $(window).resize(form_open);
             $("#helperBox").mouseover(function() {
                 $(this).css("transform", "")
             })
             $("#helperBox").mouseout(function() {
                 var width = $("#helperBox").width() - $("#helperBox .buylabel").width();
                 $(this).css("transform", "translate(" + width + "px, calc(-50% + 65px))")
             })
         }

         if ($(window).width() >= 992) {
             $(window).scroll(function() {
                 var x = $(window).scrollTop();
                 var height = $(window).height();
                 if (x > $("#product_fixed").offset().top - height + 110) {
                     if ($(".packshotPosition").length > 0) {
                         var top = $(".packshotPosition img").offset().top - 26 + "px";
                     }
                     $(".packshotPosition").css("top", top);
                     $(".packshotPosition").addClass("packshotPositionBottom").removeClass("packshotPosition");;
                 } else {
                     $(".packshotPositionBottom").css("position", "").css("top", "")
                     $(".packshotPositionBottom").addClass("packshotPosition").removeClass("packshotPositionBottom");;
                 }
             })
         }

     </script>
 </body>

 </html>
