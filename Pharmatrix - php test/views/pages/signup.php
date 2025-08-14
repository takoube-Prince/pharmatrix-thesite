<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../public/assets/css/signup.css">
    <link rel="stylesheet" href="../../public/assets/css/fontawesome.css">
</head>
<body>
    <div class="content">
        <div class="container">
            <form action="" method="post">
                <div class="logo">
                    <img src="../../public/assets/images/pharmatrix_form.jpg" alt="">
                </div>
                <div class="ins">
                    <a href="/signup">Inscription</a>
                </div>
                <div id="identity" class="same">
                    <div id="div_prenom" class="mini">
                        <i class="fas fa-user"></i>
                        <input type="text" name="prenom" id="prenom" placeholder="PRENOM">
                    </div>
                    <div id="div_nom" class="mini">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nom" id="nom" placeholder="NOM">
                    </div>
                </div>
                <div id="email" class="same_2">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="ADDRESS EMAIL">
                </div>
                <div id="coordinates" class="same">
                    <div id="tel" class="mini">
                        <i class="fas fa-phone"></i>
                        <input type="number" name="phone" id="phone" placeholder="Tel">
                    </div>
                    <div id="gps" class="mini">
                        <i class="fas fa-location-dot"></i>
                        <input type="text" name="location" id="location" placeholder="Votre localisation">
                    </div>
                </div>
                <div id="password" class="same_2">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="password" id="password" placeholder="MOT DE PASSE">
                </div>
                <div id="sub">
                    <input type="submit" value="S'inscrire">
                </div><br>
                <div class="deja_compte">
                    <p><span>Vous avez deja un compte?</span><a id="aut" href="/login">Connexion</a>
                </div>
                <p class="retrouve">Retrouvez nous sur</p><br><br><br>
                <div class="reseaux">
                    <i class="fab fa-google"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </form>
            <div class="image">
                <img src="../../public/assets/images/doctor-pharm.jpg" alt="">
            </div>
        </div>
    </div>
</body>
</html>