<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon Portfolio - Présentation de mes projets">
    <title>Portfolio</title>

    <style>
        /* Styles CSS */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            overflow-x: hidden;
            scroll-behavior: smooth;
            /* Ajout du comportement de défilement fluide */
        }

        /* En-tête */
        header {
            background-color: #0c1033;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        h1 {
            color: #fff;
            text-align: center;
            animation: myAnimation 1s linear forwards;
        }

        @keyframes myAnimation {
            0% {
                transform: translateY(-10px);
                opacity: 0;
            }

            100% {
                transform: translateX(0px);
                opacity: 1;
            }
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            transition: transform 0.5s ease, color 0.5s ease;
        }

        nav ul li a:hover {
            transform: scale(5);
            color: burlywood;
        }

        /* Section "À propos" et compétences partageant le même fond vidéo */
        #about,
        #competences {
            position: relative;
            padding: 100px;
            color: white;
            height: 60vh;
            box-sizing: border-box;
        }

        #about video,
        #competences video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            opacity: 0.7;
        }

        #about h2,
        #about p,
        #competences h2 {
            z-index: 1;
            position: relative;
        }

        /* Flèche vers le bas (compétences) */
        .scroll-arrow {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 30px;
            color: white;
            cursor: pointer;
            animation: bounce 2s infinite;
            z-index: 2;
        }

        /* Flèche vers le haut (retour à propos) */
        .scroll-up-arrow {
            position: absolute;
            top: 20px;
            /* Placer la flèche vers le haut en haut de la section des compétences */
            left: 50%;
            transform: translateX(-50%);
            font-size: 30px;
            color: white;
            cursor: pointer;
            animation: bounce 2s infinite;
            /* Ajout de la même animation "bounce" */
            z-index: 2;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-15px);
            }

            60% {
                transform: translateY(-10px);
            }
        }

        /* bande basse */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 50px;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <h1>Mon Portfolio</h1>
        </div>
        <nav>
            <ul>
                <li><a href="accueil2.php">Accueil</a></li>
                <li><a href="projet1.php">Projets</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section "À propos" sur la page d'accueil -->
    <section id="about">
        <video autoplay muted loop>
            <source src="fond.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la balise vidéo.
        </video>
        <h2>À propos de moi</h2>
        <p>
        <h3>Bonjour, je suis étudiant en BTS SIO (Services Informatiques aux Organisations). J'ai une passion pour la
            gestion de données et le développement d'applications. Grâce à mes études et ayant d'ailleurs choisi
            l'option SLAM (Solutions Logiciels et Applications Métiers) j'ai acquis de bonnes compétences en
            programmation, en conception de bases de données et en développement web. Voici un aperçu de mes
            compétences.</h3>
        </p>

        <!-- Flèche pour afficher la section des compétences -->
        <div class="scroll-arrow" onclick="showCompetences()">
            &#x25BC; <!-- Flèche vers le bas -->
        </div>
    </section>

    <!-- Section compétences avec fond vidéo continu -->
    <section id="competences">
        <video autoplay muted loop>
            <source src="fond.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la balise vidéo.
        </video>
        <h2>Mes compétences</h2>
        <!-- Ajouter les logos, images ou icônes des compétences ici -->
        <img src="html.png" alt="HTML" style="width:100px;">
        <img src="css.png" alt="CSS" style="width:100px;">
        <img src="php.png" alt="PHP" style="width:100px;">
        <img src="java.png" alt="Java" style="width:100px;">
        <!-- Vous pouvez continuer à ajouter plus de compétences sous forme d'images -->

        <!-- Flèche pour revenir à la section "À propos" -->
        <div class="scroll-up-arrow" onclick="showAbout()">
            &#x25B2; <!-- Flèche vers le haut -->
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Mon Portfolio. Tous droits réservés.</p>
    </footer>

    <script>
        // Fonction JavaScript pour afficher la section "compétences" et cacher "à propos" avec défilement fluide
        function showCompetences() {
            document.getElementById('about').style.display = 'none'; // Cacher la section "à propos"
            document.getElementById('competences').style.display = 'block'; // Afficher la section "compétences"
            document.getElementById('competences').scrollIntoView({ behavior: 'smooth' }); // Défilement fluide vers compétences
        }

        // Fonction JavaScript pour afficher la section "à propos" et cacher "compétences" avec défilement fluide
        function showAbout() {
            document.getElementById('competences').style.display = 'none'; // Cacher la section "compétences"
            document.getElementById('about').style.display = 'block'; // Afficher la section "à propos"
            document.getElementById('about').scrollIntoView({ behavior: 'smooth' }); // Défilement fluide vers "à propos"
        }
    </script>
</body>

</html>