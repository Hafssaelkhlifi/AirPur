<!DOCTYPE html>
<html lang="en">
<head>
<link
      rel="icon"
      type="image/png"
      sizes="42x42"
      href="img/S.png"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expériences Humaines</title>
    <!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<!-- fontawesom -->
<script src="https://kit.fontawesome.com/2f83272a97.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<style>
    /* Style pour les blocs d'expérience */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-image: url('img/aff.jpg'); /* Remplacez 'chemin/vers/votre/image.jpg' par le chemin de votre image */
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #f8f8f8; /* Couleur de secours */
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    h2 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 2.5rem;
        color: #444;
    }

    .experience {
        display: flex;
        flex-direction: column;
        margin-bottom: 30px;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9); /* Fond blanc semi-transparent pour améliorer la lisibilité */
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .experience:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .experience h5 {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 15px;
        color: #333;
    }

    .experience p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #555;
    }

    .experience-item:not(:last-child) {
        border-bottom: 1px solid #eee;
        padding-bottom: 20px;
        margin-bottom: 30px;
    }
</style>


</head>

<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="
    top: 0px;
">
        <div class="container">
            <a class="navbar-brand" href="#" style="margin-right: 400px;padding-left: 70px;">AirPur</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="
    padding-right: 0px;
    padding-left: 150px;
">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#exp">Expérience</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <div id="exp" class="container">
    <h2 style="padding-top: 150px;">Récits de Vie : Partages Inspirants</h2>
        <div class="experience">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "testimonialsdb";
            
            // Créer une connexion à la base de données
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Vérifier la connexion
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Récupérer les témoignages depuis la base de données
            $sql = "SELECT fullName, email, message FROM testimonials";
            $result = $conn->query($sql);
            
            // Afficher les témoignages s'ils existent
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="experience-item">';
                    echo '<h5>' . $row['fullName'] . '</h5>';
                    echo '<p>' . $row['email'] . '</p>';
                    echo '<p>' . $row['message'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "Aucun témoignage trouvé.";
            }
            
            // Fermer la connexion à la base de données
            $conn->close();
            ?>
        </div>
    </div>

   
</body>
<footer class="footer text-white">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
        <p>© 2023 Hafssa. Tous droits réservés.</p>
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a href="https://www.facebook.com/VotrePageFacebook" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.instagram.com/VotrePageInstagram" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script src="scr.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
