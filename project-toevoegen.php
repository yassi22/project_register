<?php
require_once 'backend/autoloader.php';

$diensten = $dienstenIns->getDiensten();

$categorien =  $categorieIns->getCategorie();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project register - Project toevoegen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="JS/preview.image.min.js"></script>
    <link rel="stylesheet" href="css/style-test-2.css">

    <!-- Load Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <script>
        function previewImages() {

            var preview = document.querySelector('#preview');

            if (this.files) {
                [].forEach.call(this.files, readAndPreview);
            }

            function readAndPreview(file) {

                // Make sure `file.name` matches our extensions criteria
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                    return alert(file.name + " is not an image");
                } // else...

                var reader = new FileReader();

                reader.addEventListener("load", function() {
                    var image = new Image();
                    image.height = 100;
                    image.title = file.name;
                    image.src = this.result;
                    preview.appendChild(image);
                });

                reader.readAsDataURL(file);

            }

        }

        document.querySelector('#file-input').addEventListener("change", previewImages);
    </script>



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
            <a href="overzicht-projecten.php" class="d-none d-md-block">
                <img alt="logo" class="logo" src="img/logo-activo.jpg">
            </a>

            <div class="d-flex justify-content-between d-none d-md-block ">
                <a href="overzicht-projecten.php" class="btn knop justify-content-end   " role="button">Terug naar
                    overzicht</a>
                <button class="btn  x justify-content-end knop-verwijder  " data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">Project verwijderen</button>
            </div>

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

            <div class="d-flex flex-column">
                <a href="overzicht-projecten.php" class="btn btn-lg knop d-flex justify-content-center" role="button">Terug
                    naar
                    overzicht</a>
                 
                <button class="btn btn-lg d-flex justify-content-center knop-verwijder  " data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">Project verwijderen</button>
            </div>


        </div>
    </div>


    <div class="container-fluid">
        <div class="justify-content-center mb-3">
            <section class=" d-flex justify-content-center mx-auto mt-4">
                <h2>Project toevoegen</h2>
            </section>

            <div class="jumbotron shadow mb-5 bg-white rounded mt-4  jumbo-grote">
                <div>
                    <div class="row g-0 details">
                        <div class="col col-12 py-4 px-4">
                            <form method="POST" action="handler/projectVerwerk.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-10 col-md-8 col-lg-6">
                                        <div class="mb-3 ">
                                            <label for="projectnaam" id="projectnaam" class="form-label invoer-naam"> Projectnaam </label>
                                            <input type="text" class="form-control" name="projectnaam" required placeholder="Vul een projectnaam in">
                                        </div>

                                        <div class="mb-3">
                                            <div style="max-width: 145px;">
                                                <label for="datum" id="datum" class="form-label invoer-naam"> Projectdatum</label>
                                                <input type="date" class="form-control" name="datum" required>
                                            </div>
                                        </div>


                                        <label class="invoer-naam label-categorie" for="Projectdatum1">Website link</label>

                                        <div class="input-group mb-3 ">

                                            <span class="input-group-text" id="basic-addon3">https://</span>

                                            <input type="text" class="form-control input-lengte" name="websitelink" aria-describedby="basic-addon3" placeholder="Vul een website link in">
                                        </div>


                                        <div class="mb-3">
                                            <label for="omschrijving" id="omschrijving" class="form-label invoer-naam"> Omschrijving </label>
                                            <textarea class="form-control omschrijf-text" name="omschrijving" placeholder="Vul een omschrijving in" rows="3"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="klantnaam" id="klantnaam" class="form-label invoer-naam"> Klantnaam </label>
                                            <input type="text" class="form-control" name="klantnaam" required placeholder="Vul een klantnaam in">
                                        </div>

                                        <h2> Diensten </h2>

                                        <?php foreach ($diensten as $dienst) { ?>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="diensten[]" value="<?php echo $dienst->diensten_id; ?>">
                                                <label class="form-check-label" for="<?php echo $dienst->diensten_naam; ?>" id="<?php echo $dienst->dienst_id; ?>"><?php echo $dienst->diensten_naam; ?> </label>
                                            </div>
                                        <?php } ?> 
                                        <br> 
                                        <h2> Categorie </h2>
                                        <?php foreach ($categorien as $categorie) { ?>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="categorie[]" value="<?php echo $categorie->categorie_id; ?>">
                                                <label class="form-check-label" for="<?php echo $categorie->categorie_naam; ?>" id="<?php echo $categorie->categorie_id; ?>"><?php echo $categorie->categorie_naam; ?> </label>
                                            </div>
                                        <?php } ?> 
                                        <br>
                                        <div>
                                            Select Image Files to Upload:
                                            <input type="file" name="files[]" multiple>

                                            <br>
                                            <br>
                                        </div>
                                        <button type="submit" name="addProject" value="Add project" class="btn btn-primary">Toevoegen</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>

</html>