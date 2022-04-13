<!DOCTYPE html>
<html lang="en">

<head>
  <title>Project register - Project details</title>
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
 
  <!-- Fancy box usage link   -->
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
 

     
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

      <div class="jumbotron shadow mb-5 bg-white rounded  mt-4  jumbotron-detail">
        <div>
          <div class="row g-0 details">
            <div class="col col-6 py-4 px-5">
              <ul class="ps-0">
                <li>
                  <p class="text-secondary mb-0">Project naam</p>
                  <p>ECSJ 2022 Leiden</p>
                </li>
                <li>
                  <p class="text-secondary mb-0">Project datum</p>
                  <p>07-10-22</p>
                </li>
                <li>  
                  <p class="text-secondary mb-0">Website links</p>
                  <a href="https://ecsj2022tickets.eu/"><p>https://ecsj2022tickets.eu/</p></a>
                </li>
                <li>
                  <p class="text-secondary mb-0">Omschrijving</p>
                  <p>The European Conference of Science Journalism is a conference for professional science journalists
                    and related professions. In addition, it is a moment in time to meet each other in real life, if
                    that is possible, and to continue discussing the profession of science journalist.</p>
                </li>
              </ul>
            </div>
            <div class="col col-6 py-4 px-5">
            <div class=" d-flex p-2">   

              <div class="col-sm-4 m-2 ml-2"> 
              <a
              data-fancybox="gallery"
              data-src="img/ECSJ-1.png"
              data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code" >
              <img src="img/ECSJ-1.png" class="rounded plaatje-grote" />
              </a>
              </div>  

              <div class="col-sm-4 m-2">
              <a data-fancybox="gallery" data-src="img/ECSJ-2.png">
              <img src="img/ECSJ-2.png"  class="rounded plaatje-grote" />
              </a>
              </div > 

              <div class="col-sm-4 m-2">
              <a data-fancybox="gallery"  data-src="img/ECSJ-3.png">
              <img src=" img/ECSJ-3.png"  class="rounded plaatje-grote" />
              </a>
              </div> 

              </div> 


                <div class="mb-2">
                  <a class="btn mt-2  bnt-primary download-knop" role="button" href="#">Download schermafbeelding</a>
                </div> 


              <h4>Diensten</h4>
              <ul class="details-list mb-4">
                <li>Congress online</li>
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
</body>

</html>