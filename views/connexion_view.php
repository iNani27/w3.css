<body>
    <div id="container">
        <div class="row">
            <div class="col-sm-12">
                <header>
                    <h1 class="text-right"><span class="text-uppercase">Web Dev</span><br /><span class="small">Productions 2014-2016 </span>&copy;Isabelle Nani</span></h1>
                </header>
            </div>
        </div>
        <div class="row">

            <form class="col-md-12 well" action="" method="POST" name="connexion">
                <h2 class="text-center">
                    <span class="glyphicon glyphicon-off"></span>
                    <br /> Connection 
                </h2>

                <?php
                // si erreur on l'affiche
                if (isset($erreur)) {
                    echo "<div class='btn btn-info btn-block'>$erreur";
                    echo " or go to home page <a href='index.php' class='w3-btn w3-round-xxlarge w3-theme w3-hover-theme'>HOME</a></div>";
                }
                ?>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa  fa-sign-in fa-fw"></i>
                    </span>
                    <input class="form-control" name="lelogin" type="text" placeholder="Login" />
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-key fa-fw"></i>
                    </span>
                    <input class="form-control" name="lepass" type="password" placeholder="Password" />
                </div>
                <div class="input-group btn btn-block"> 
                    <input type="submit" value="Connection" />
                </div>

            </form>
        </div>
    </div>

</body>
</html>


