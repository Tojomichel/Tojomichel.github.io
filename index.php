<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon Portfolio - Présentation de mes projets">
    <title>Portfolio</title>

    <!-- Lien vers la feuille de style CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- En-tête de la page avec un logo et le menu de navigation -->
    <header>
        <div class="logo">
            <h1>Mon Portfolio</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#about">À propos</a></li>
                <li><a href="#projects">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section "À propos" pour te présenter -->
    <section id="about">
        <h2>À propos de moi</h2>
        <p>Bonjour, je suis étudiant en BTS SIO, ayant pris l'option SLAM j'ai pu </p>
    </section>

    <!-- Section des projets où les données sont incluses depuis un fichier PHP -->
    <section id="projects">
        <h2>Mes Projets</h2>
        <div class="projects-container">
            <?php
                // Inclusion du fichier contenant les données de projets
                include 'portfolio-data.php';

                // Boucle pour afficher chaque projet
                foreach ($projects as $project) {
                    echo "<div class='project'>";
                    echo "<h3>" . $project['title'] . "</h3>";
                    echo "<p>" . $project['description'] . "</p>";
                    echo "<a href='" . $project['link'] . "' target='_blank'>Voir le projet</a>";
                    echo "</div>";
                }
            ?>
        </div>
    </section>

    <!-- Section de contact avec un formulaire -->
    <section id="contact">
        <h2>Contactez-moi</h2>
        <form action="submit.php" method="POST">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </section>

    <!-- Footer de la page -->
    <footer>
        <p>&copy; 2024 Mon Portfolio. Tous droits réservés.</p>
    </footer>

    <!-- Lien vers le fichier JavaScript -->
    <script src="script.js"></script>
</body>
</html>
