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
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />

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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title fs-4" id="exampleModalLabel">Project verwijderen</h2>
            <button type="button" class="btn-close  " data-bs-dismiss="modal" aria-label="Close"></button> 
          </div>
          <div class="modal-body text-center">
            <p class="mb-0">Weet je zeker dat je het project wilt verwijderen?</p>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-primary modal-knop-ja">Ja</button>
            <button type="button" class="btn btn-secondary modal-knop-nee" data-bs-dismiss="modal">Nee</button>
          </div>
        </div>
      </div>
    </div>


  <nav class="navbar navbar-expand-sm shadow  bg-white rounded ">
    <div class="container-fluid">
      <a href="overzicht-pagina.php" class="d-none d-md-block">
        <img alt="logo" class="logo" src="img/logo-activo.jpg">
      </a>

      <div class="d-flex justify-content-between d-none d-md-block ">
        <a href="overzicht-pagina.php" class="btn knop justify-content-end   " role="button">Terug naar
          overzicht</a>
        <a href="aanpas-pagina.php" class="btn   justify-content-end    knop-aanpassen" role="button">Project
          aanpassen</a>
          <button class="btn  x justify-content-end knop-verwijder  " data-bs-toggle="modal"
          data-bs-target="#exampleModal" role="button">Project verwijderen</button>
      </div>

      <button class="btn btn-link  d-sm-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <svg width="51" height="42" viewBox="0 0 51 42" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="51" height="9.33333" rx="4.66667" fill="#4B96D0"/>
          <rect y="32.6667" width="51" height="9.33333" rx="4.66667" fill="#057494"/>
          <rect y="16.3333" width="51" height="9.33333" rx="4.66667" fill="#F48424"/>
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
    
  <div class="d-flex flex-column">
        <a href="overzicht-pagina.php" class="btn btn-lg knop d-flex justify-content-center" role="button">Terug naar
          overzicht</a>
        <a href="aanpas-pagina.php" class="btn btn-lg d-flex justify-content-center knop-aanpassen" role="button">Project
          aanpassen</a>
          <button class="btn btn-lg d-flex justify-content-center knop-verwijder  " data-bs-toggle="modal"
          data-bs-target="#exampleModal" role="button">Project verwijderen</button>
      </div>

 
  </div>
</div>
  





  <div class="container-fluid">
    <div class="justify-content-center">
      <section class=" d-flex mt-4  justify-content-center mx-auto">
        <h2>Project details</h2>
      </section>

      <div class="jumbotron shadow mb-5 bg-white rounded  mt-4 jumbotron-detail">
        <div>
          <div class="row g-0 details">
            <div class="col col-md-6 col-sm-6 py-4 px-4">
              <ul class="ps-0">
                <li>
                  <p class="text-secondary mb-0">Project naam</p>
                  <p>Hoek en Blok Personeelsevent</p>
                </li>
                <li>
                  <p class="text-secondary mb-0">Project datum</p>
                  <p>8-01-2021</p>
                </li>
                <li>
                  <p class="text-secondary mb-0">Website link</p>
                  <a href=" https://hoekenblokpersoneelsevent2021.nl/" target="_blank" ><p>https://hoekenblokpersoneelsevent2021.nl/</p></a>

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

            <div class="col col-md-6 col-sm-6  py-4 px-5">
            <div class=" d-flex p-2">   

                    <div class="col-sm-4 m-2 ml-2 "> 
                    <a
                    data-fancybox="gallery"
                    data-src="img/Hoek-Blok-logo.png"
                    data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code"
                    >
                    <img src="img/Hoek-Blok-logo.png" class="rounded plaatje-grote" />
                    </a>
                    </div>  

                    <div class="col-sm-4 m-2">
                    <a data-fancybox="gallery" data-src="img/H-K-1.png">
                    <img src="img/H-K-1.png"  class="rounded plaatje-grote" />
                    </a>
                    </div > 

                    <div class="col-sm-4 m-2">
                    <a data-fancybox="gallery"  data-src="img/H-K-2.png">
                    <img src=" img/H-K-2.png"  class="rounded plaatje-grote" />
                    </a>
                    </div> 

                    </div> 


                    <div class="mb-2">
                      <a class="btn mt-2  bnt-primary download-knop" role="button"  href="#">Download schermafbeelding</a>
                    </div> 



              <h4>Diensten</h4>
              <ul class="details-list mb-4">
                <li>Eventwebsite</li>
                <li>Toegangscontrole</li> 
                <li>Badges</li>
                <li>Lanyards</li>
                <li>Hostesses</li>
              </ul>

              <h4>Categorie</h4>
              <p> Congres Online Platform    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>