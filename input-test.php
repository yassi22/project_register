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
        <h2>Project toevoegen</h2>
      </section>

      <div class="jumbotron shadow mb-5 bg-white rounded  mt-4  jumbo-grote">
        <div>
          <div class="row g-0 details">
            <div class="col col-12 py-4 px-5">

              <form>
                <div class="form-floating form-container mb-4">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Vul hier de projectnaam in">
                  <label for="floatingInput">Projectnaam</label>
                </div>
 

                  <input type="date" id="projectdatum" name="projectdatum">

                <div class="form-floating form-container mb-4">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Vul hier de projectnaam in">
                  <label for="floatingInput">Projectdatum</label>
                </div>

                <div class="form-floating form-container mb-4">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Vul hier de projectnaam in">
                  <label for="floatingInput">Websitelink</label>
                </div> 
 

              
                <div class="form-floating form-container mb-4"> 
                <textarea class="form-control"    id="floatingInput" id="exampleFormControlTextarea1" placeholder="Vul hier je omschrijving in" rows="3"></textarea>
                  <label for="floatingInput">Omschrijving</label>
                </div>


                <div class="row d-flex justify-content-center  ">

                  <div class="col">
                    <h4 class="text-left">Diensten</h4>

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

                  </div>

                  <div class="col">
                    <h4 class="text-left">Categorie</h4>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1 checked">
                      <label class="form-check-label label-categorie" for="flexRadioDefault">
                        Medische evenement
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1 checked">
                      <label class="form-check-label label-categorie " for="flexRadioDefault1">
                        Hybride evenement
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1 checked">
                      <label class="form-check-label label-categorie " for="flexRadioDefault1">
                        Congress online evenement
                      </label>
                    </div>
                  </div>




                  <div class="col">
                    <h4 class="text-left">Jaartal</h4>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1 checked">
                      <label class="form-check-label label-categorie" for="flexRadioDefault1">
                        2017
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label label-categorie" for="flexRadioDefault1">
                        2018
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input  " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label label-categorie" for="flexRadioDefault1">
                        2019
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label label-categorie" for="flexRadioDefault1">
                        2020
                      </label>
                    </div>
                  </div>

                </div>


                <div class="col col-6  mb-5 ">
                  <div class="mb-5">

                    <p class="text-schermafbeelding">Schermafbeeldingen </p>
                    <div class="preview"></div>

                    <form action="#" method="POST" enctype="multipart/form-data">
                      <label for="file-upload" class="custom-file-upload">
                        <i class="fa fa-cloud-upload"></i> Nieuwe schermafbeelding
                      </label>
                      <input type="file" id="file-upload" name="file1"> <br><br>
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