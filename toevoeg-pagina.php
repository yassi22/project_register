<!DOCTYPE html>
<html lang="en">

<head>
  <title>Project register - Project toevoegen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">

  <!-- Load Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">

  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
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
        <h2>Project Toevoegen</h2>
      </section>

      <div class="jumbotron shadow mb-5 bg-white rounded  mt-4  jumbo-grote">
        <div>
          <div class="row g-0 details">
            <div class="col col-6 py-4 px-5">

              <form>
                <div class="form-group mb-4">
                  <label class="invoer-naam" for="Projectnaam">Project naam</label>
                  <input type="text" class="form-control" id="Projectnaam1"  
                    placeholder="Voer een projectnaam in">

                </div> 

                <div class="form-group mb-4">
                  <label class="invoer-naam" for="Projectdatum1">Project datum</label>
                  <input type="date" class="form-control" id="Projectdatum1">

                </div> 
                
                <div class="form-group mb-4">
                  <label class="invoer-naam" for="Websitelink1">Website Link</label>
                  <input type="text" class="form-control" id="Websitelink1"  
                    placeholder="Voer een website link in">

                </div> 

                <div class="form-group mb-4">
                  <label class="invoer-naam" for="Omschrijving1">Omschrijving</label>
                  <textarea class="form-control" id="Omschrijving1" rows="3"></textarea>
                </div>


                <button type="submit" class="btn btn-primary opslaan-knop">Wijzigingen opslaan</button>
              </form>

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

                <a class="btn btn-primary" href="#">Download schermafbeelding</a>
              </div>

            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>