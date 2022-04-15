<!DOCTYPE html>
<html lang="en">

<head>
  <title>Project register - Project toevoegen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://rawgit.com/andrewng330/PreviewImage/master/preview.image.min.js"></script>
  <link rel="stylesheet" href="style-test-2.css">

  <!-- Load Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">

  <script>
    $(function () {
      $("input[name=file1]").previewimage({
        div: ".preview",
        imgwidth: 340,
        imgheight: 180
      });

    });
  </script>



</head>

<body> 

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centerd ">
      <div class="modal-content border-0 rounded shadow ">
 
       
      <div class="container-lg">  
        <div class="d-flex justify-content-center">
        <div class="modal-header mb-3 ">
          <h4 class="modal-title text-center" id="exampleModalLabel">Project verwijderen </h4>
        </div> 
          <div class="d-flex justify-content-end ml-4 mt-1"> 
        <button type="button" class="btn-close  " data-bs-dismiss="modal" aria-label="Close"></button> 
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
      <section class=" d-flex justify-content-center mx-auto mt-4">
        <h2>Project toevoegen</h2>
      </section>

      <div class="jumbotron shadow mb-5 bg-white rounded  mt-4  jumbo-grote">
        <div>
          <div class="row g-0 details">
            <div class="col col-12 py-4 px-5">

              <form>
              <div class="form-group mb-4">
                    <label class="invoer-naam label-categorie" for="Websitelink1">Projectnaam</label>
                    <input type="text" class="form-control" id="Websitelink1" placeholder="Vul een projectnaam in">
                  </div>


                <div class="form-group mb-4">
                  <label class="invoer-naam label-categorie" for="Projectdatum1">Project datum</label>
                  <input type="date" class="form-control" id="Projectdatum1">
                </div> 

                   <label class="invoer-naam label-categorie" for="Projectdatum1">Website link</label> 
                  <div class="input-group mb-3 ">   
                    <span class="input-group-text d-none d-md-block" id="basic-addon3">https://example.com/</span> 
                    <input type="text" class="form-control input-lengte" id="WebsiteLink" aria-describedby="basic-addon3">
                  </div>
 

                  <div class="form-group mb-4 ">
                    <label class="invoer-naam label-categorie " for="Omschrijving1">Omschrijving</label>
                    <textarea class="form-control omschrijf-text" id="Omschrijving1" placeholder="Vul een omschrijving in"
                      rows="3"></textarea>
                  </div>



                <div class="row d-flex justify-content-start  ">

                  <div class="col-3">
                    <h4 class="text-left">Diensten</h4>

                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                      <label class="form-check-label" for="flexSwitchCheckDefault">
                     Eventwebsite
                      </label>
                    </div>


                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                      <label class="form-check-label" for="flexSwitchCheckDefault">
                       Evenement platform
                      </label>
                    </div>

                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                      <label class="form-check-label" for="flexSwitchCheckDefault">
                  Online betaalmodule
                      </label>
                    </div>

                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                      <label class="form-check-label" for="flexSwitchCheckDefault">
                      Event app
                      </label>
                    </div>

                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                      <label class="form-check-label" for="flexSwitchCheckDefault">
                     Toegangscontrole
                      </label>
                    </div>


                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                      <label class="form-check-label" for="flexSwitchCheckDefault">
                       Hostesses
                      </label>
                    </div> 

                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                      <label class="form-check-label" for="flexSwitchCheckDefault">
                       Evaluatie
                      </label>
                    </div>

                      <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                      <label class="form-check-label" for="flexSwitchCheckDefault">
                       Fotoalbum
                      </label>
                    </div>

                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                      <label class="form-check-label" for="flexSwitchCheckDefault">
                       Abstractmodule
                      </label>
                    </div>


                  </div>

                  <div class="col-3">
                    <h4 class="text-left">Categorie</h4>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="actie" id="flexRadioDefault1 checked">
                      <label class="form-check-label label-categorie" for="flexRadioDefault0">
                        Evenement Registratie Platform
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="actie" id="flexRadioDefault1 checked">
                      <label class="form-check-label label-categorie " for="flexRadioDefault4">
                       Medisch Congres Platform
                      </label>
                    </div>
                    
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="actie" id="flexRadioDefault1 checked">
                      <label class="form-check-label label-categorie " for="flexRadioDefault5">
                      Hybride Event Platform
                      </label>
                    </div>
                
         
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="actie" id="flexRadioDefault1 checked">
                      <label class="form-check-label label-categorie " for="flexRadioDefault5">
                      Congres Online Platform
                      </label>
                    </div>
                  </div>
 
                  
                      <div class="col-3">
                    <h4 class="text-left">Jaartal</h4>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="actie" id="flexRadioDefault1 checked">
                      <label class="form-check-label label-categorie" for="flexRadioDefault1">
                        2019
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input " type="radio" name="actie" id="flexRadioDefault2">
                      <label class="form-check-label label-categorie" for="flexRadioDefault1">
                        2020
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input  " type="radio" name="actie" id="flexRadioDefault3">
                      <label class="form-check-label label-categorie" for="flexRadioDefault1">
                        2021
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input " type="radio" name="actie" id="flexRadioDefault4">
                      <label class="form-check-label label-categorie" for="flexRadioDefault1">
                        2022
                    </label>
                    </div>
                  </div>

                </div>

                     </div> 

                

                <div class="col-3 ">
                  <div class="mb-5">

                    <h4 class="text-schermafbeelding mt-3">Schermafbeeldingen </h4 >
                    <div class="preview"></div>

                    <form action="#" method="POST" enctype="multipart/form-data">
                      <label for="file-upload" class="custom-file-upload">
                        <i class="fa fa-cloud-upload"></i> Nieuwe schermafbeelding
                      </label>
                      <input type="file" id="file-upload" name="file1">  
                    </form>

                  </div>





                  <button type="submit" class="btn   opslaan-knop">Project toevoegen</button>
              </form>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>

</html>