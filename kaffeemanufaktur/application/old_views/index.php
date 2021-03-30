    <!DOCTYPE html>
    <html lang="de-DE">

    <head>
        <?php 
        $title = "Koffee.com";
        $style_name = "index";
        require_once("public/include/head.php")?>
    </head>

    <body>
        <!--header started.-->
        <?php require_once("public/include/header.php") ?>
        <!--header ended.-->
        <?php require_once $page_name.'.php'; ?>
        <!--footer started.-->
        <?php require_once("public/include/footer.php") ?>
        <script>
            $(window).scroll(function() {
                if ($(window).scrollTop() > 5) {
                    $(".lazy-back").each(function() {
                        var background = $(this).attr("data-back-src");
                        $(this).css("background-image", "url(" + background + ")");
                        console.log(background);
                    })
                }
            })

        </script>
    </body>

    </html>
