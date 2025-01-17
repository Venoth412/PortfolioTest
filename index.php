<?php
$message_sent = ""; // Initialize the variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $to = "venothrajasekaran13@gmail.com";
    $subject = "Prise de contact via mon site internet";
    $message = "Message : " . htmlspecialchars($_POST['message']) . "\r\n" . "Nom : " . htmlspecialchars($_POST['name']);
    $headers = "From: " . $from . "\r\n";  // En-tête correctement formaté

    // Envoie de l'email
    if (filter_var($from, FILTER_VALIDATE_EMAIL)) {
        $mail_success = mail($to, $subject, $message, $headers);

        // Vérifie si l'email a été envoyé avec succès
        if ($mail_success) {
            $message_sent = "<p style='margin-bottom:8px; color:black;'>L'email a été envoyé.</p>";
        } else {
            $message_sent = "<p style='margin-bottom:8px; color:black;'>Erreur lors de l'envoi de l'email.</p>";
        }
    } else {
        $message_sent = "<p style='margin-bottom:8px; color:black;'>Adresse email invalide.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
    
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma Page</title>
  <link rel="stylesheet" href="styles.css">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- quicksand font -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <!-- <nav>
            <ul class="menu">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#formation">Formation</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#stages">Stages</a></li>
                <li><a href="#veille-technologique">Veille technologique</a></li>
                <li><a href="#certifications">Certifications</a></li>
                <li><a href="#contact">Formulaire de contact</a></li>
            </ul>
        </nav> -->
        <nav class="shadow navbar navbar-expand-md navbar-pink" aria-label="Fourth navbar example">
          <div class="container-fluid">
            <a class="navbar-brand"><strong>Portfolio de Venoth RAJASEKARAN</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
              aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarsExample04">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#accueil">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#formation">Formation</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">Expériences</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#competences">Compétences</a></li>
                    <li><a class="dropdown-item" href="#projets">Projets</a></li>
                    <li><a class="dropdown-item" href="#stages">Stages</a></li>
                    <li><a class="dropdown-item" href="#veille-technologique">Veille technologique</a></li>
                    <li><a class="dropdown-item" href="#certifications">Certifications</a></li>
                    <li><a class="dropdown-item" href="#contact">Formulaire de contact</a></li>
                  </ul>
                </li>
              </ul>
        
            </div>
          </div>
        </nav>        

  </header>
  <main>
    <section id="accueil">
      <div class="accueil-content">
        <div class="text">
          <h1>Accueil</h1>
          <p>Je me présente :</p>
          <p>Je m'appelle RAJASEKARAN Venoth, j'ai 19 ans. Je suis actuellement en 2ème année de BTS SIO (Services
            Informatiques Aux Organisations) Options SISR (Solutions d'Infrastructure, Systèmes et Réseaux) au Lycée Du
            Parc Des Loges. Je souhaite devenir ingénieur informatique en
            développement, réseau et système ou en cybersécurité. Pour ma part, je suis quelqu'un de sérieux et
            respectueux, je suis une personne rigoureuse,
            disciplinée, méthodique, créative et qui aime travailler en équipe. Pour plus d'informations, retrouvé mon
            CV et ma lettre de motivation ci dessous.</p>
        </div>
        <img src="Images/portrait_rond.png" alt="image" class="accueil-image">
      </div>
    </section>
    <section id="formation">
      <h1>Formation</h1>
      <p>
        <strong>BTS Services Informatiques aux Organisations (SIO)</strong><br>
        <em>Lycée Du Parc Des Loges</em><br>
        <br>
        Le BTS Services Informatiques aux Organisations (SIO) est un diplôme national de l'enseignement supérieur qui se
        prépare en deux ans après le baccalauréat. Cette formation est conçu pour former des techniciens supérieurs
        capables de répondre aux besoins en informatique des entreprises et des administrations.
        <br><br>
        <strong>Objectifs du BTS SIO</strong><br>
        Le BTS SIO vise à former des spécialistes des services informatiques en entreprise. Les titulaires de ce diplôme
        sont préparés à concevoir, mettre en œuvre et gérer des solutions informatiques répondant aux besoins des
        organisations, qu'il s'agisse de gestion de réseaux ou de développement de logiciels.
        <br><br>
        <strong>Les Deux Options du BTS SIO</strong><br>
      <ul>
        <li><strong>Option Solutions d’Infrastructure, Systèmes et Réseaux (SISR) :</strong>
          <ul>
            <li>Administration des systèmes et réseaux.</li>
            <li>Sécurité des systèmes d'information.</li>
            <li>Maintenance des infrastructures.</li>
          </ul>
        </li>
        <li><strong>Option Solutions Logicielles et Applications Métiers (SLAM) :</strong>
          <ul>
            <li>Développement d'applications informatiques.</li>
            <li>Gestion de bases de données.</li>
            <li>Conception et maintenance de logiciels.</li>
          </ul>
        </li>
      </ul>
      <br>
      <strong>Matières Enseignées</strong><br>
      Le programme est réparti sur deux ans et inclut des enseignements techniques et généraux :
      <ul>
        <li><strong>Enseignements Techniques :</strong>
          <ul>
            <li>Conception et maintenance de solutions informatiques.</li>
            <li>Administration des réseaux.</li>
            <li>Développement d’applications.</li>
            <li>Sécurité informatique.</li>
            <li>Gestion de projet.</li>
          </ul>
        </li>
        <li><strong>Enseignements Généraux :</strong>
          <ul>
            <li>Mathématiques appliquées.</li>
            <li>Anglais professionnel.</li>
            <li>Culture générale et expression.</li>
            <li>Économie et gestion des entreprises.</li>
          </ul>
        </li>
      </ul>
      <br>
      <strong>Compétences Développées</strong><br>
      Les étudiants acquièrent des compétences variées telles que :
      <ul>
        <li>L'analyse des besoins des utilisateurs.</li>
        <li>La conception et le développement de logiciels.</li>
        <li>La gestion et la sécurisation des réseaux informatiques.</li>
        <li>La maintenance et le support technique des systèmes d’information.</li>
      </ul>
      <br>
      <strong>Référentiel de Formation</strong><br>
      Le référentiel de formation du BTS SIO est structuré en unités d'enseignement (UE) et couvre les deux années de
      scolarité :
      <ul>
        <li><strong>Première Année :</strong>
          <ul>
            <li>Culture générale et expression</li>
            <li>Anglais</li>
            <li>Mathématiques pour l'informatique</li>
            <li>Méthodes et techniques informatiques</li>
            <li>Environnement économique, juridique et managérial</li>
          </ul>
        </li>
        <li><strong>Deuxième Année :</strong>
          <ul>
            <li>Projet personnalisé encadré</li>
            <li>Conception et maintenance de solutions informatiques</li>
            <li>Mise en œuvre et maintenance de solutions informatiques</li>
            <li>Communication professionnelle</li>
          </ul>
        </li>
      </ul>
      <br>
      <strong>Stages et Projets</strong><br>
      <p> Les étudiants effectuent des stages en entreprise pour mettre en pratique leurs compétences et acquérir une
        expérience professionnelle concrète. Un projet de fin d'études permet également de démontrer leur capacité à
        gérer un projet complet.</p>
      <br><br>
      <strong>Mon Option : SISR (Solutions d’Infrastructure, Systèmes et Réseaux)</strong><br>
      <p>J'ai choisi l'option SISR, qui se concentre sur l'administration des systèmes et réseaux ainsi que sur la
        sécurité des systèmes d'information. Cette option m'a permis de me spécialiser dans :</p>
      <ul>
        <li>La gestion et la sécurisation des réseaux informatiques.</li>
        <li>La maintenance et le support technique des systèmes d’information.</li>
        <li>La sécurité des infrastructures informatiques.</li>
        <li>La supervision et l'administration des systèmes.</li>
      </ul>
      <br>
      <div class="btn-container">
        <button class="button">
          <a href="Dcuments PDF/Venoth CV BTS-SIO 1.pdf">
            Voici mon CV</a>
        </button>
      </div>
      </p>
    </section>
    <section id="competences">
      <h1>Compétences</h1>
      <p>Voici les compétences informatiques :</p>
      <div class="competence-category">
        <h2>Réseau</h2>
        <ul>
            <li>
                <img src="Images/OS.png" alt="Linux" class="competence-icon"> OS (Linux, Windows, Android, IOS)
            </li>
            <li>
                <img src="Images/Virtualisation.png" alt="Virtualisation" class="competence-icon"> Virtualisation (Protocole réseau, Adressage / Routage)
            </li>
        </ul>
    </div>
    <div class="competence-category">
        <h2>Développement</h2>
        <ul>
            <li>
                <img src="Images/HTML.png" alt="HTML" class="competence-icon"> HTML
            </li>
            <li>
                <img src="Images/CSS.png" alt="CSS" class="competence-icon"> CSS
            </li>
            <li>
              <img src="Images/XML.png"alt="XML" class="competence-icon"> XML
          </li>
            <li>
                <img src="Images/JavaScript.png" alt="JavaScript" class="competence-icon"> JavaScript
            </li>
            <li>
                <img src="Images/PHP.png" alt="PHP" class="competence-icon"> PHP
            </li>
            <li>
                <img src="Images/Java.png" alt="Java" class="competence-icon"> Java
            </li>
            <li>
                <img src="Images/Pythons.png" alt="Python" class="competence-icon"> Python
            </li>
        </ul>
    </div>
    <div class="competence-category">
        <h2>Bases de données</h2>
        <ul>
            <li>
                <img src="Images/MySQL.png" alt="MySQL" class="competence-icon"> MySQL (SQL)
            </li>
        </ul>
    </div>
    </section>
    <section id="projets">
      <h1>Projets</h1>
      <p>Présentation de mes projets :</p>
      <div class="project-category">
        <h2>1ère année de BTS SIO</h2>
        <p>Vous trouverez ci - dessous le site vitrine et le site marchande que j'ai réalisé en 1ère année de BTS SIO :</p>
        <div class="projects">
          <a href="Projet avec Venoth-20240622T102528Z-001/Projet avec Venoth/Présentation.html">
            <img src="Images/SiteVitrine.png" alt="Projet 1 - Site Vitrine">
          </a>
          <a href="Venoth Site Web/Présentation.html">
            <img src="Images/SiteMarchande.png" alt="Projet 2 - Site Marchande">
          </a>
          <!-- Ajoute plus de projets ici -->
        </div>
      </div>
    
      <div class="project-category">
        <h2>2ème année de BTS SIO</h2>
        <div class="projects">
          <a href="lien_vers_projet1_2eme_annee.html">
            <img src="image_projet1_2eme_annee.jpg" alt="Projet 1 - 2ème année">
          </a>
          <a href="lien_vers_projet2_2eme_annee.html">
            <img src="image_projet2_2eme_annee.jpg" alt="Projet 2 - 2ème année">
          </a>
          <!-- Ajoute plus de projets ici -->
        </div>
      </div>
    
      <div class="project-category">
        <h2>Stage chez 10MentionWeb</h2>
        <div class="projects">
          <a href="lien_vers_projet1_stage.html">
            <img src="image_projet1_stage.jpg" alt="Projet 1 - Stage">
          </a>
          <a href="lien_vers_projet2_stage.html">
            <img src="image_projet2_stage.jpg" alt="Projet 2 - Stage">
          </a>
          <!-- Ajoute plus de projets ici -->
        </div>
      </div>
    </section>
    <section id="stages">
      <h1>Stages</h1>
      <div class="stage">
        <h2>Stage du 13 Mai 2024 au 29 Juin 2024 chez 10MentionWeb Formation</h2>
        <img src="Images/10MentionWeb.png" alt="Logos">
        <p><strong>Thème :</strong> Support au développement d’outils informatiques et pédagogiques pour les projets mis en place par le nouveau pôle</p>
        <p><strong>Objectifs du stage :</strong></p>
        <ul>
            <li>Aider à la documentation des projets développés en interne.</li>
            <li>Contribuer au développement et aux tests de bases de données.</li>
            <li>Participer à la conception de bases de données et à la création d'exercices HTML/CSS/JavaScript.</li>
        </ul>
        <p><strong>Réalisations :</strong></p>
        <ul>
            <li>Documentation détaillée des projets en cours.</li>
            <li>Implémentation et test de bases de données pour les nouvelles formations.</li>
            <li>Conception et développement d'exercices interactifs utilisant HTML, CSS et JavaScript.</li>
        </ul>
        <p>10MentionWeb Formation a lancé en mars 2024 un nouveau pôle dédié à la création de ressources e-learning, au développement de nouvelles formations et à l'évolution de la plateforme Declick via leur LMS interne.</p>
        <p>Le stage a permis de soutenir ces initiatives en apportant une contribution significative au développement des outils pédagogiques et informatiques nécessaires à ces projets innovants.</p>
        <p>Télécharger mon rapport de stage de ma 1ère année de BTS SIO :</p>
        <div class="center-container">
          <a href="Dcuments PDF/L_attestation de suivie ANSSI.pdf" target="_blank" class="download-link">
            <button class="Btn">
              <svg class="svgIcon" viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
              </svg>
              <span class="icon2"></span>
              <span class="tooltip">Télécharger</span>
            </button>
          </a>
        </div>         
    </div>
    </section>
    <section id="veille-technologique">
      <h1>Veille technologique</h1>
      <p>Articles et recherches en veille technologique.</p>
    </section>
    <section id="certifications">
      <h1>Certifications</h1>
      <p>Liste de mes certifications :</p>
    <div class="certification-category">
        <ul>
            <li>
                <a href="Dcuments PDF/L_attestation de suivie ANSSI.pdf" target="_blank">
                    <img src="Images/SecNumAcadémie.png" alt="SecNumAcadémie" class="certification-icon">
                </a>
                SecNumAcadémie (ANSSI)
            </li>
            <li>
                <a href="path/to/AtelierRGPD.pdf" target="_blank">
                    <img src="Images/L'Atelier RGPD.webp" alt="Atelier RGPD" class="certification-icon">
                </a>
                Atelier RGPD
            </li>
            <li>
                <a href="path/to/CISCO.pdf" target="_blank">
                    <img src="Images/CISCO.png" alt="CISCO" class="certification-icon">
                </a>
                Certifications CISCO
            </li>
            <li>
                <a href="path/to/OpenClassrooms.pdf" target="_blank">
                    <img src="Images/OpenClassroom.png" alt="OpenClassrooms" class="certification-icon">
                </a>
                Certifications OpenClassrooms
            </li>
        </ul>
    </div>
    </section>
    <section id="contact">
      <h1>Formulaire de contact</h1>
      <?php echo $message_sent ?>
      <form class="w-20 mx-auto form-contact">
        <label for="name">Nom :</label>
        <input class="form-control mb-3" type="text" id="name" name="name"><br>
        <label for="email">Email :</label>
        <input class="form-control mb-3" type="email" id="email" name="email"><br>
        <label for="message">Message : </label>
        <textarea class="form-control mb-3" id="message" name="message"></textarea><br>
        <input class="btn btn-primary rounded-pill px-3" type="submit" value="Envoyer">
      </form>
    </section>
  </main>
  <footer style="background-color: #ff3366; color: white; padding: 20px 0;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; flex-wrap: wrap;">
        <!-- Section Contact -->
        <div style="flex: 1; min-width: 200px; padding: 10px;">
            <h3 style="border-bottom: 1px solid white; padding-bottom: 10px;">Contact</h3>
            <p1><a href="mailto:venothrajasekaran13@gmail.com" class="email-information">Email : venothrajasekaran13@gmail.com</a></p1>
        </div>
        <!-- Section Liens Utiles -->
        <div style="flex: 1; min-width: 200px; padding: 10px;">
            <h3 style="border-bottom: 1px solid white; padding-bottom: 10px;">Liens Utiles</h3>
            <ul style="list-style: none; padding: 0;">
                <li><a href="#accueil" style="color: white; text-decoration: none;">Accueil</a></li>
                <li><a href="#accueil" style="color: white; text-decoration: none;">À propos</a></li>
            </ul>
        </div>
        <!-- Section Réseaux Sociaux -->
        <div style="flex: 1; min-width: 200px; padding: 10px;">
            <h3 style="border-bottom: 1px solid white; padding-bottom: 10px;">Suivez-moi</h3>
            <div>
                <a href="https://www.linkedin.com/in/venoth-rajasekaran-684b60291/" style="color: white; margin-right: 10px; text-decoration: none;">LinkedIn</a>

            </div>
        </div>
    </div>
    <div style="text-align: center; border-top: 1px solid white; padding-top: 10px; margin-top: 20px;">
        &copy; 2024 Venoth RAJASEKARN. Tous droits réservés.
    </div>
</footer>
  <!-- script bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>