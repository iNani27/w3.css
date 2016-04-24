<?php
include_once 'view/inc/meta.php';
?>

<body class="w3-light-grey w3-content" style="max-width:1600px">
    

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
        <footer class="w3-container w3-padding-32 w3-white">
            <div class="w3-row-padding">
                <div class="w3-third">
                    <h3>FOOTER</h3>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
                </div>

                <div class="w3-third">
                    <h3>BLOG POSTS</h3>
                    <ul class="w3-ul w3-hoverable">
                        <li class="w3-padding-16">
                            <img src="img_workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Lorem</span><br>
                            <span>Sed mattis nunc</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="img_gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Ipsum</span><br>
                            <span>Praes tinci sed</span>
                        </li> 
                    </ul>
                </div>

                <div class="w3-third">
                    <h3>POPULAR TAGS</h3>
                    <p>
                        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">London</span>
                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">DIY</span>
                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Family</span>
                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Shopping</span>
                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Games</span>
                    </p>
                </div>

            </div>
        </footer>

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
