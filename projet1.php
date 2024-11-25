<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mes Projets">
    <title>Projets</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #6878c518;
            color: #333;
        }

        header {
            background-color: #0c1033;
            color: #fff;
            padding: 15px;
            text-align: center;
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

        .projects-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 50px;
        }

        .project {
            background-color: #fff;
            padding: 15px;
            margin: 10px;
            border: 1px solid #ddd;
            width: 30%;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        }

        #projects {
            padding: 100px;
        }

        #projects h2 {
            margin-left: 50px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 50px;
            position: relative;
            width: 100%;
            bottom: 0;
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

    <section id="projects">
        <h2>Mes Projets</h2>
        <div class="projects-container">
            <?php
            include 'projet.php'; // récupération des données dans projet.php
            
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

    <footer>
        <p>&copy; 2024 Mon Portfolio. Tous droits réservés.</p>
    </footer>
</body>

</html>