<?php
include_once 'view/inc/meta.php';
?>

<body class="w3-light-grey w3-content" style="max-width:1600px">
    <h1>ICI index.php root</h1>

    <?php
    include_once 'view/inc/nav.php';
    ?>       

    <!-- Overlay effect when opening sidenav on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        <header class="w3-container">
            <img src="view/img/isabelleNaniSqR.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity">
            <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
            <h1 class="w3-animate-opacity w3-font-3 w3-text-teal w3-lobster font-effect-brick-sign"><b>Mon portfolio</b></h1>
            <div class="w3-section w3-bottombar w3-padding-16">
                <span>Filter:  </span> 
                <button class="w3-btn">ALL</button>
                <button class="w3-btn w3-white"><i class="fa fa-code"></i>  Development </button>
                <button class="w3-btn w3-white w3-hide-small"><i class="fa fa-diamond"></i>  Design</button>
                <button class="w3-btn w3-white w3-hide-small"><i class="fa fa-map-pin"></i>  Art</button>
            </div>
        </header>

        <!-- First Photo Grid-->
        <div class="w3-row-padding">
            <?php
            for ($i = 1; $i <= 3; $i++) {
                include 'view/inc/project.php';
            }
            ?> 

        </div>

        <!-- Second Photo Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/index.html" target="_blank">
                    <img src="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/images/other/maison-future-arbre.jpg" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Site statique | pré-formation Web developer @<a target="_blank" href="http://www.cf2m.be/formation-webdeveloper.htm"><img width="11%" src="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/images/logo_cf2m_small_reflect.png" alt="CF2m"></a></b></p>
                    <p>Dans ce premier site - <em>à l'ancienne</em> - vous trouverez: des articles tels que "Lettre à mon cerveau", des interviews d'entreprises web, ... </p>
                    <p><a class="w3-btn w3-margin w3-right" target="blank" href="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/index.html" alt=""><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/index.html" target="_blank">
                    <img src="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/images/other/maison-future-arbre.jpg" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Site statique | pré-formation Web developer @<a target="_blank" href="http://www.cf2m.be/formation-webdeveloper.htm"><img width="11%" src="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/images/logo_cf2m_small_reflect.png" alt="CF2m"></a></b></p>
                    <p>Dans ce premier site - <em>à l'ancienne</em> - vous trouverez: des articles tels que "Lettre à mon cerveau", des interviews d'entreprises web, ... </p>
                    <p><a class="w3-btn w3-margin w3-right" target="blank" href="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/index.html" alt=""><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <a href="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/index.html" target="_blank">
                    <img src="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/images/other/maison-future-arbre.jpg" alt="Site statique" style="width:100%" class="w3-hover-opacity">
                </a>
                <div class="w3-container w3-white">
                    <p><b>Site statique | pré-formation Web developer @<a target="_blank" href="http://www.cf2m.be/formation-webdeveloper.htm"><img width="11%" src="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/images/logo_cf2m_small_reflect.png" alt="CF2m"></a></b></p>
                    <p>Dans ce premier site - <em>à l'ancienne</em> - vous trouverez: des articles tels que "Lettre à mon cerveau", des interviews d'entreprises web, ... </p>
                    <p><a class="w3-btn w3-margin w3-right" target="blank" href="http://stagiaires.cf2m.be/web2015/isabelle/prefo2014/index.html" alt=""><i class="w3-tiny fa fa-ellipsis-h"> </i> par ici</a></p>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="w3-center w3-padding-jumbo">
            <ul class="w3-pagination">
                <li><a class="w3-black" href="#">1</a></li>
                <li><a class="w3-hover-black" href="#">2</a></li>
                <li><a class="w3-hover-black" href="#">3</a></li>
                <li><a class="w3-hover-black" href="#">4</a></li>
                <li><a class="w3-hover-black" href="#">»</a></li>
            </ul>
        </div>

        <!-- Footer -->
        <?php 
        include_once 'view/inc/footer.php'; 
        ?>

        <!-- End page content -->
    </div>

    <script>
        // Script to open and close sidenav
        function w3_open() {
            document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
            document.getElementsByClassName("w3-overlay")[0].style.display = "block";
        }

        function w3_close() {
            document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
            document.getElementsByClassName("w3-overlay")[0].style.display = "none";
        }
    </script>

</body>
</html>
