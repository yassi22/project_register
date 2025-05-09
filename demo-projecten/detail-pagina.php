<!DOCTYPE html>
<html lang="en">

<head>
  <title>Project register - Project details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">

  <!-- Load Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">

 
</head>

<body>

  <nav class="navbar navbar-expand-sm shadow p-3 mb-5 bg-white rounded ">
    <div class="container-fluid">
      <a href="overzicht-pagina.php">
        <img alt="logo" class="logo" src="img/logo-activo.jpg">
      </a>

      <div class="d-flex justify-content-between">
        <a href="overzicht-pagina.php" class="btn btn-lg knop d-flex justify-content-end" role="button">Terug naar
          overzicht</a>
        <a href="overzicht-pagina.php" class="btn btn-lg d-flex justify-content-end knop-aanpassen"
          role="button">Project aanpassen</a>
        <a href="overzicht-pagina.php" class="btn btn-lg d-flex justify-content-end knop-verwijder"
          role="button">Project verwijderen</a>
      </div>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="justify-content-center">
      <section class=" d-flex  justify-content-center mx-auto">
        <h2>Project details</h2>
      </section>

      <div class="jumbotron shadow mb-5 bg-white rounded  mt-4  jumbo-grote">
        <div>
          <div class="row g-0 details">
            <div class="col col-6 py-4 px-5">
              <ul class="ps-0">
                <li>
                  <p class="text-secondary mb-0">Project naam</p>
                  <p>Lorem ipsum dolor sit amet,</p>
                </li>
                <li>
                  <p class="text-secondary mb-0">Project datum</p>
                  <p>1-04-22</p>
                </li>
                <li>
                  <p class="text-secondary mb-0">Website link</p>
                  <p>https://www.google.com/</p>
                </li>
                <li>
                  <p class="text-secondary mb-0">Omschrijving</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue, tellus at tincidunt
                    suscipit, diam odio venenatis ligula, scelerisque ultricies magna leo nec arcu. Quisque fringilla
                    vestibulum arcu, nec ornare elit sagittis quis. Phasellus leo dolor, consectetur et ullamcorper at,
                    suscipit sed felis. Praesent blandit fringilla luctus.</p>
                </li>
              </ul>
            </div>
            <div class="col col-6 py-4 px-5">
              <div class="mb-5">
                <div id="carouselExampleControls" class="carousel carousel-detail mb-2 slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item  rounded-3 active">
                      <img src="img/DDDonline.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item  rounded-3">
                      <img src="img/twinning.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item  rounded-3">
                      <img src="img/bleckmann-logo.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>

                <a class="btn  bnt-primary download-knop" role="button" href="#">Download schermafbeelding</a>
              </div>

              <h4>Diensten</h4>
              <ul class="details-list mb-4">
                <li>Online betaalmodule</li>
                <li>Congress online</li>
                <li>Event App</li>
                <li>Badges</li>
                <li>Uitnodigingstraject</li>
              </ul>

              <h4>Categorie</h4>
              <p>Congres Online evenementen</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>