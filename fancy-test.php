<!DOCTYPE html>
<html lang="en">

<head>
  <title>Project register - Project details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
    
  <!-- Fancy box usage link   -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>

  <!-- Load Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">
 
<!-- Fancy box usage script   -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  
  <style>

    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style> 

</head>

<body>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centerd ">
      <div class="modal-content border-0 rounded shadow ">
 
       
      <div class="container-lg">  
        <div class="d-flex justify-content-center">
        <div class="modal-header mb-3 ">
          <h5 class="modal-title text-center " id="exampleModalLabel">Project verwijderen </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> 
  </div>
  </div>


        <div class="container ">
          <div class="row mb-3">
            <div class="text-center">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Weet je zeker dat je het project wilt verwijderen? </h5>
              </div>
            </div>
            <div class="col-6 d-flex justify-content-end  ">
              <button type="button" class="btn btn-primary modal-knop-ja">Ja</button>
            </div>
            <div class="col-6 d-flex justify-content-start  ">
              <button type="button" class="btn btn-secondary modal-knop-nee" data-bs-dismiss="modal">Nee</button>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>


  <nav class="navbar navbar-expand-sm shadow p-3 mb-5 bg-white rounded ">
    <div class="container-fluid">
      <a href="overzicht-pagina.php">
        <img alt="logo" class="logo" src="img/logo-activo.jpg">
      </a>

      <div class="d-flex justify-content-between">
        <a href="overzicht-pagina.php" class="btn btn-lg knop d-flex justify-content-end" role="button">Terug naar
          overzicht</a>
        <a href="aanpas-pagina.php" class="btn btn-lg d-flex justify-content-end knop-aanpassen" role="button">Project
          aanpassen</a>
        <button class="btn btn-lg d-flex justify-content-end knop-verwijder" data-bs-toggle="modal"
          data-bs-target="#exampleModal" role="button">Project verwijderen</button>
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
                  <p>Hoek en Blok Personeelsevent</p>
                </li>
                <li>
                  <p class="text-secondary mb-0">Project datum</p>
                  <p>8-01-21</p>
                </li>
                <li>
                  <p class="text-secondary mb-0">Website links</p>
                  <a href=" https://hoekenblokpersoneelsevent2021.nl/"><p>https://hoekenblokpersoneelsevent2021.nl/</p></a>

                </li>
                <li>
                  <p class="text-secondary mb-0">Omschrijving</p>
                  <p>Op 8 oktober staan in de ochtend touringcars klaar die ons naar Ouddorp brengen waar we bij Natural
                    High allerlei leuke strandactiviteiten gaan doen. Na een dag met de zeewind in ons haar gaan we
                    genieten van een barbecue. Aan het einde van de dag gaan we naar Center Parcs Port Zélande, waar we
                    voordat we gaan slapen nog gezamenlijk een borrel kunnen drinken. </p>
                </li>
              </ul>
            </div>
            <div class="col col-6 py-4 px-5">
              <div class="mb-5">
              <div class="flex flex-wrap gap-5 justify-center max-w-3xl mx-auto px-6">
                        <!-- First gallery -->
                        <a data-fancybox="gallery-a" href="https://lipsum.app/id/60/1800x1200">
                            <img class="rounded" src="https://lipsum.app/id/60/300x200" />
                        </a>

                        <div style="display:none">
                            <a data-fancybox="gallery-a" href="https://lipsum.app/id/61/1800x1200">
                            <img class="rounded" src="https://lipsum.app/id/61/120x80" />
                            </a>
                            <a data-fancybox="gallery-a" href="https://lipsum.app/id/62/1800x1200">
                            <img class="rounded" src="https://lipsum.app/id/62/120x80" />
                            </a>
                            <a data-fancybox="gallery-a" href="https://lipsum.app/id/63/1800x1200">
                            <img class="rounded" src="https://lipsum.app/id/63/120x80" />
                            </a>
                            <a data-fancybox="gallery-a" href="https://lipsum.app/id/64/1800x1200">
                            <img class="rounded" src="https://lipsum.app/id/64/120x80" />
                            </a>
                        </div>


                        </div>

                <a class="btn  bnt-primary download-knop" role="button" href="#">Download schermafbeelding</a>
              </div>

              <h4>Diensten</h4>
              <ul class="details-list mb-4">
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