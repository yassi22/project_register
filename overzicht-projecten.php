<?php
require_once 'backend/autoloader.php';








/* 
       Voor het sorteren van projecten word er gebruikt gemaakt 
       van de $_GET methode op de geselecteerde methode op te halen  
       van uit de URL
      */

if (isset($_GET['order'])) {

  $var1 = $_GET['order'];
}



/* 
     Dit stuk van de code laat zien op welk onderdeel gesorteerd is aan de hand van een Switch statement.
      */
$status = "Resultaten";


/* 
    Hier onder wordt bepaald of de variabele var1 wel gezet is door middel van een isset in een if statement.
    Daarna wordt er nagekeken of de varaiabel wel gevuld is door middel van een if statement.
    Dan wordt er door de Switch statement heen gelopen om te kijken welke sorteer optie geselecteerd is.
    En de juiste projecten ophaalt.

      */

if (isset($var1)) {
  switch ($var1) {
    case "mostViews":
      $status = "Meest bekeken";
      $projects = $projectIns->getPopulairProjects();
      break;
    case "sortAlpha":
      $status = "Alphabetische volgorde";
      $projects = $projectIns->getAlphaProjects();
      break;
    case "sortRecent":
      $status = "Recent toegevoegd";
      $projects = $projectIns->getRecentProjects();
      break;
    default:
      $projects = $projectIns->getAllProjects();
  }
} else {
  $projects = $projectIns->getAllProjects();
}
 

if (isset($_POST['Filter'])) {

  $jaartal = $_POST['jaartaal'];

  $dienst = $_POST['dienst'];

  $categorie = $_POST['Categorie'];
 
  $projecten = $projectIns->getFilterProject($jaartal, $dienst, $categorie); 

  var_dump($projecten); 

} else {
  $projecten = $projectIns->getAllProjects();
} 
   

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Project register - overzicht</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">


  <!-- Load Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <script>
    function Search(item) {
      var collection = document.getElementsByClassName("titel");
      // var collectie = document.getElementByIdByClassName("card-body");
      for (i = 0; i < collection.length; i++) {
        if (((collection[i].innerHTML).toLowerCase()).indexOf(item) > -1) {
          collection[i].closest(".col").classList.add('d-flex');
          collection[i].closest(".col").classList.remove('d-none');
        } else {
          collection[i].closest(".col").classList.remove('d-flex');
          collection[i].closest(".col").classList.add('d-none');
        }
      }
    }
  </script>

</head>

<body>

  <nav class="navbar navbar-expand-sm shadow p-3 mb-5 bg-white rounded ">
    <div class="container-fluid">
      <a href="overzicht-projecten.php" class="d-none d-md-block">
        <img alt="logo" class="logo" src="img/logo-activo.jpg">
      </a>

      <a href="project-toevoegen.php" class="btn btn-lg knop d-flex justify-content-end  d-none d-md-block" role="button">Project toevoegen</a>

      <button class="btn btn-link  d-sm-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <svg width="51" height="42" viewBox="0 0 51 42" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="51" height="9.33333" rx="4.66667" fill="#4B96D0" />
          <rect y="32.6667" width="51" height="9.33333" rx="4.66667" fill="#057494" />
          <rect y="16.3333" width="51" height="9.33333" rx="4.66667" fill="#F48424" />
        </svg>
      </button>
    </div>
  </nav>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">
        <img alt="logo" class="logo" src="img/logo-activo.jpg">
      </h5>

      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
      <a href="project-toevoegen.php" class="btn btn-lg knop d-flex mb-4 justify-content-center" role="button">Project
        toevoegen</a>

      <h2>Criteria</h2>
      <form action="overzicht-projecten.php" method="POST">

        <h3 class="fs-6">Jaartal</h3>
        <div class="form-check form-switch">
          <input class="form-check-input" name="jaartaal" value="2019" type="checkbox">
          <label class="form-check-label" for="flexSwitchCheckDefault">2019</label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="jaartaal" value="2020">
          <label class="form-check-label" for="flexSwitchCheckDefault">2020</label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="jaartaal" value="2021">
          <label class="form-check-label" for="flexSwitchCheckDefault"> 2021 </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="jaartaal" value="2022">
          <label class="form-check-label" for="flexSwitchCheckDefault"> 2022 </label>
        </div>
        <hr>

        <h3 class="fs-6">Diensten</h3>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="dienst" value="10">
          <label class="form-check-label" for="flexSwitchCheckDefault">Eventwebsite</label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="dienst" value="9">
          <label class="form-check-label" for="flexSwitchCheckDefault">Evenement platform</label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="dienst" value="8">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Online betaalmodule </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="dienst" value="7">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Event app </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="dienst" value="6">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Toegangscontrole </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="dienst" value="1">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Lanyards </label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="dienst" value="4">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Hostesses </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="dienst" value="3">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Evaluatie </label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="dienst" value="2">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Fotoalbum </label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="dienst" value="5">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Abstractmodule </label>
        </div>

        <hr>

        <h3 class="fs-6">Categorie</h3>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="Categorie" value="1">
          <label class="form-check-label" for="flexSwitchCheckDefault">Evenement Registratie Platform</label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="Categorie" value="2">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Medisch Congres Platform</label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="Categorie" value="4">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Hybride Event Platform </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="Categorie" value="3">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Congres Online Platform </label>
        </div>


        <button type="button" class="btn mt-4 text-center resultaat-knop" type="submit" value="submit">Toon resultaten</button>

      </form>

    </div>
  </div>



  <div class="container">

    <div class="row">
      <div class="col-md-3  d-none d-md-block">
        <h2>Criteria</h2>
        <form action="#" method="POST">

          <h3 class="fs-6">Jaartal</h3>
          <div class="form-check form-switch">
            <input class="form-check-input" name="jaartaal" value="2019" type="checkbox">
            <label class="form-check-label" for="flexSwitchCheckDefault">2019</label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="jaartaal" value="2020">
            <label class="form-check-label" for="flexSwitchCheckDefault">2020</label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="jaartaal" value="2021">
            <label class="form-check-label" for="flexSwitchCheckDefault"> 2021 </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="jaartaal" value="2022">
            <label class="form-check-label" for="flexSwitchCheckDefault"> 2022 </label>
          </div>
          <hr>

          <h3 class="fs-6">Diensten</h3>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Eventwebsite" value="10">
            <label class="form-check-label" for="flexSwitchCheckDefault">Eventwebsite</label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Evenement platform" value="9">
            <label class="form-check-label" for="flexSwitchCheckDefault">Evenement platform</label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Online betaalmodule" value="8">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Online betaalmodule </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Event app" value="7">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Event app </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Toegangscontrole" value="6">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Toegangscontrole </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Lanyards" value="1">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Lanyards </label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Hostesses" value="4">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Hostesses </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Evaluatie" value="3">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Evaluatie </label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Fotoalbum" value="2">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Fotoalbum </label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Abstractmodule" value="5">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Abstractmodule </label>
          </div>

          <hr>

          <h3 class="fs-6">Categorie</h3>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Evenement Registratie Platform" value="1">
            <label class="form-check-label" for="flexSwitchCheckDefault">Evenement Registratie Platform</label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Medisch Congres Platform" value="2">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Medisch Congres Platform</label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Hybride Event Platform" value="4">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Hybride Event Platform </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="Congres Online Platfor" value="3">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Congres Online Platform </label>
          </div>


          <button type="submit" class="btn mt-4 text-center resultaat-knop" name="Filter" value="filter">Toon resultaten</button>

        </form>
  
      </div>


      <div class="col-md-9">
        <section class="d-md-flex align-items-center justify-content-between ">
          <h2>Projecten</h2>
          <input type="text" class="form-control zoek" id="searchBar" oninput="Search((this.value).toLowerCase())" placeholder="ZoekOpdracht">


        </section>
        <section class="d-md-flex align-items-center  justify-content-between mt-2">
          <h4> <?php echo $status; ?> </h4>
          <div class="dropdown">

            <button class="btn btn-secondary dropdown-toggle  resultaat-knop " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Sorteren
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="overzicht-projecten.php?order=mostViews">Meest bekeken</a></li>
              <li><a class="dropdown-item" href="overzicht-projecten.php?order=sortAlpha">Alfabetische volgorde </a>
              </li>
              <li><a class="dropdown-item" href="overzicht-projecten.php?order=sortRecent">Recent toegevoegd</a></li>
              <li><a class="dropdown-item" href="overzicht-projecten.php">Default</a></li>
            </ul>



          </div>



        </section>


        <div class="row mt-1 mb-4 row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

          <?php foreach ($projects as $project) { ?>

            <div class="col d-flex align-items-stretch">
              <div class="card shadow bg-white rounded  w-100">
                <div class="card-body project-card">
                  <div class="ratio ratio-16x9 mb-1">
                    <img src="img/Hoek-Blok-logo.png" alt="Schermafbeelding Hoek en Blok Personeelsevent">
                  </div>
                  <p class="card-text mb-1 mt-1 omschrijf"><?php echo $project->datum; ?></p>
                  <h3 class="card-title mb-4 fs-5 titel"><?php echo $project->projectnaam; ?></h3>

                  <a href="project.php?id=<?php echo $project->project_id ?>" class="btn knopdetail"> Meer detail </a>

                </div>
              </div>
            </div>


          <?php } ?>
        </div>

      </div>
    </div>
  </div>
</body>

</html>