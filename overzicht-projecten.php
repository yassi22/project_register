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



// If statment wat nog gebruikt kan worden
//if (isset($var1) && $var1) {
//    $projects = $postIns->getPopulairPosts();
// } if(isset($var1) && $var1){ 
//    $projects = $postIns->getAlphaPost(); 
//   } if(isset($var1) && $var1) { 
//     $projects = $postIns->getRecentPost(); 
//  } else { 
//    $projects = $postIns->getAllPost();
//   }



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
      <form>

        <h3 class="fs-6">Jaartal</h3>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">2019</label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">2020</label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> 2021 </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> 2022 </label>
        </div>
        <hr>

        <h3 class="fs-6">Diensten</h3>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">Eventwebsite</label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">Evenement platform</label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Online betaalmodule </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Event app </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Toegangscontrole </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Lanyards </label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Hostesses </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Evaluatie </label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Fotoalbum </label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Abstractmodule </label>
        </div>

        <hr>

        <h3 class="fs-6">Categorie</h3>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">Evenement Registratie Platform</label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Medisch Congres Platform</label>
        </div>


        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Hybride Event Platform </label>
        </div>

        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"> Congres Online Platform </label>
        </div>


        <button type="button" class="btn mt-4 text-center resultaat-knop" type="submit">Toon resultaten</button>
      </form>
    </div>
  </div>



  <div class="container">

    <div class="row">
      <div class="col-md-3  d-none d-md-block">
        <h2>Criteria</h2>
        <form>

          <h3 class="fs-6">Jaartal</h3>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">2019</label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">2020</label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> 2021 </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> 2022 </label>
          </div>
          <hr>

          <h3 class="fs-6">Diensten</h3>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Eventwebsite</label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Evenement platform</label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Online betaalmodule </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Event app </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Toegangscontrole </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Lanyards </label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Hostesses </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Evaluatie </label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Fotoalbum </label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Abstractmodule </label>
          </div>

          <hr>

          <h3 class="fs-6">Categorie</h3>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Evenement Registratie Platform</label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Medisch Congres Platform</label>
          </div>


          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Hybride Event Platform </label>
          </div>

          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault"> Congres Online Platform </label>
          </div>


          <button type="button" class="btn mt-4 text-center resultaat-knop" type="submit">Toon resultaten</button>
        </form>


        <div class="col-sm-6 verplaats" style="display: none;">
          <h2>Criteria</h2>
          <h5 class="text-center">Jaartal</h5>

          <ul style->
            <div class="form-check  form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> 2017 </li>
              </label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li class="text-center"> 2018 </li>
              </label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> 2019 </li>
              </label>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> 2020 </li>
              </label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> 2021 </li>
              </label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> 2022 </li>
              </label>
            </div>

          </ul>

          <hr>


          <h5 class="text-center">Diensten</h5>
          <ul>

            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> Online betaal module </li>
              </label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> Badges </li>
              </label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> E-tickets </li>
              </label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> Uitnodigingstraject </li>
              </label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> Congres online </li>
              </label>
            </div>


            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> Helpdesk </li>
              </label>
            </div>


          </ul>

          <hr>

          <h5 class="text-center">Categorie</h5>
          <ul>

            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> Medische evenementen </li>
              </label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> Hybride evenementen </li>
              </label>
            </div>


            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
              <label class="form-check-label" for="flexSwitchCheckDefault">
                <li> Congress online evenementen </li>
              </label>

            </div>
            <button type="button" class="btn mt-4 text-center resultaat-knop " type="submit">Resultaat</button>
          </ul>


        </div>
      </div>


      <div class="col-md-9">
        <section class="d-md-flex align-items-center justify-content-between ">
          <h2>Projecten</h2>
          <form method="GET" action="handler/projectVerwerk.php">
            <input class="form-control zoek" type="text" name="search" placeholder="Zoekopdracht">
            <button type="submit" name="searchProject" value="submit" class="btn zoekknop">Zoeken</button>
          </form>

        </section>
        <section class="d-md-flex align-items-center   justify-content-between mt-2">
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