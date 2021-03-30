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
                     <h2>Dkaffeeatlas</h2>
                     <div class="productExcerpt">
                         <p>Ein Must have für alle, die mehr über Kaffee und seine Vielfalt wissen möchten - und wie man es daheim zum Barista bringen kann! Kaffee war nie besser und nie interessanter als heute! Die Sorten- und Verfahrensvielfalt ist größer denn je und aus unserem Alltag ist Kaffee nicht mehr wegzudenken. Längst ist er Genussmittel par excellence, über das der echte Kenner Bescheid wissen möchte: Wo liegen die Ursprünge des Kaffees und was genau unterscheidet guten von schlechtem Kaffee? Wie muss der Kaffee geröstet, wie gemahlen und mit welchem Wasser aufgebrüht werden, damit seine besten Eigenschaften zur Geltung kommen? Auf diese und viele weitere Fragen gibt Champion-Barista und Kaffeeröster James Hoffmann Antworten. Der Kaffeeatlas ist das erste Buch, das die Kaffeeproduktion in über 30 Ländern Afrikas, Asiens und Südamerikas porträtiert, umfassendes Kartenmaterial zeigt und außerhalb der Kaffeeindustrie bisher kaum bekannte Details vermittelt. Fast 70 Seiten widmen sich allen wichtigen Informationen und Erklärungen für die Umsetzung in die Praxis - so wird man auch daheim zum echten Barista!</p>
                     </div>
                 </div>
                 <div class="packshot">
                     <div class="packshotPosition position-static">
                         <img src="images/kaffeeatlas.png" alt="">
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
                         <label for="mahlgrad">Autor</label>
                         <select name="" id="mahlgrad" class="form-control">
                             <option value="" disabled selected>James Hoffmen</option>
                         </select>
                     </div>
                     <div class="col-12">
                         <div class="single_variable_wrap">
                             <div class="quantityWrapper">
                                 <label for="anzahl">Anzahl:</label>
                                 <input type="number" class="form-control" value="1" id="anzahl">
                             </div>
                             <div class="customPriceTag">
                                 <p>29,90 €</p>
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
     <!--accessoriesIntroSectionWrapper started.-->
    <div id="accessoriesIntroSectionWrapper">
        <div class="hasSimpleTextArea">
            <div id="accessoriesIntroSectionTopDecoration" style="	background-size: 100% 100%;	background-repeat: no-repeat;	background-image:url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTUuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj48c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIiB2aWV3Qm94PSIwIDAgMTAwIDMwIj48cGF0aCBkPSJNIDAgMCBMIDQ1IDI3IEMgNTAgMzAgNTAgMzAgNTUgMjcgTCAxMDAgMCBMIDAgMCBaIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBzdHJva2Utd2lkdGg9IjAiIC8+PC9zdmc+')"></div>
            <div class="spotlight"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4 m-auto">
                        <div class="content">
                            <h1>Kaffee war nie besser und nie interessanter als heute!</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--accessoriesIntroSectionWrapper ended.-->
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
