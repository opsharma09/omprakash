<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "product-categories";
    require_once("include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--    categories header started.-->
    <div class="categories_header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="categories">
                        <h3>Kategorien</h3>
                        <div class="categoryNavLevel">
                            <a href="" class="activeCategory">Geschenke</a> | <a href="">Kaffee-Adventskalender</a>| <a href="">Kaffee &amp; Espresso</a> | <a href="">Zubehör</a> | <a href="">Erlebnisse</a> | <a href="">Gutscheine</a> | <a href="">Alle Produkte</a>
                        </div>
                        <div class="categoryNavLevel">
                            <a href="" class="activeCategory">Geschenkideen</a> | <a href="">Alle Produkte</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="search_box">
                        <h3>Suche</h3>
                        <form action="" class="search">
                            <div class="input-group">
                                <div class="input-group-prepend"><img src="images/search.svg" alt=""></div>
                                <input type="text" class="form-control" placeholder="Nach Produkten suchen...">
                                <div class="input-groud-prepend" style="display: none;"><button class="remove" type="button">&times;</button></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <h1 class="categoryTitle">Geschenkideen</h1>
                </div>
            </div>
        </div>
    </div>
    <!--    categories header ended.-->
    <!--    shop filters started.-->
    <div class="shop-filters">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Zeigt alle 9 Ergebnisse</p>
                    <form action="">
                        <select name="" id="">
                            <option value="menu_order" selected="selected">Standardsortierung</option>
                            <option value="popularity">Nach Beliebtheit sortiert</option>
                            <option value="rating">Nach Durchschnittsbewertung sortiert</option>
                            <option value="date">Sortieren nach neuesten</option>
                            <option value="price">Nach Preis sortiert: aufsteigend</option>
                            <option value="price-desc">Nach Preis sortiert: absteigend</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--    shop filters ended.-->
    <!--    product_wrapper started.-->
    <div class="product_wrapper">
        <div class="products text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="images/ClassicSet.png" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Probierpaket Classic</h4>
                                    <span class="price">11.30 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <div class="flavor_description">
                                        <table>
                                            <tbody>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="images/EspressoSet.png" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Probierpaket Espressoblends</h4>
                                    <span class="price">11.30 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <div class="flavor_description">
                                        <table>
                                            <tbody>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="images/3bdd6bb3895a743009ce66bf186eb7a-500x281.jpg" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Kaffee-Adventskalender</h4>
                                    <span class="price">59.90 &euro; - 79,90 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <div class="flavor_description">
                                        <table>
                                            <tbody>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="images/aap3316_edited_-_kopie.jpg" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Kaffeedose “Hannoversche Kaffeemanufaktur”</h4>
                                    <span class="price">4,90 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <div class="flavor_description">
                                        <table>
                                            <tbody>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="images/airscape-500x509.png" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Airscape Keramik</h4>
                                    <span class="price">35,90 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <div class="flavor_description">
                                        <table>
                                            <tbody>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="images/kaffeeatlas.png" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Der Kaffeeatlas</h4>
                                    <span class="price">29,90 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <div class="flavor_description">
                                        <table>
                                            <tbody>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="images/3-365.jpg" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Espressomaschinen – richtig bedienen</h4>
                                    <span class="price">14,90 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <div class="flavor_description">
                                        <table>
                                            <tbody>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="images/3-366.jpg" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Filterkaffee Handbuch</h4>
                                    <span class="price">14,90 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <div class="flavor_description">
                                        <table>
                                            <tbody>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="images/kaffeekunst.jpg" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Kaffeekunst – einfach selber machen – mit 450 farbigen Schritt-für-Schritt-Fotos</h4>
                                    <span class="price">9,99 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <div class="flavor_description">
                                        <table>
                                            <tbody>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    product_wrapper started.-->
    <!--footer started.-->
    <?php require_once("include/footer.php") ?>
    <script>
        $(document).ready(function() {
            $("form.search .form-control").focus(function() {
                $(this).parent().addClass("active");
            })
            $("form.search .form-control").focusout(function() {
                $(this).parent().removeClass("active");
            })

            $("form.search .form-control").on("keyup", function() {
                var val = $(this).val();
                console.log(val);
                if (val == "") {
                    $(this).next().css("display", "none");
                } else {
                    $(this).next().css("display", "");
                }
            })
        })

    </script>
</body>

</html>
