<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project register - overzicht</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
  <link rel="stylesheet" href="style.css">
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
      
       
      <a href="overzicht-pagina.php" class="btn btn-lg knop d-flex justify-content-end" role="button">Nieuw project toevoegen</a>
 
     
  </div>
</nav> 

 

 
<div class="container-fluid  "> 
  
  <div class="row"> 
    <div class="col-md-3 d-flex justify-content-end margin-right-2">
    <div class="col-sm-6 verplaats">
      <h2>Filteren</h2> 
      <h5 class="text-center">Jaartal</h5> 
      <ul> 
      
       
<div class="form-check  form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault">    <li> 2017  </li> </label>
</div> 
 
       <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault">   <li class="text-center"> 2018 </li> </label>
</div> 

      <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault">   <li> 2019 </li> </label>
</div>  
      <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault">    <li> 2020  </li></label>
</div> 

       <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault">    <li> 2021  </li></label>
</div>  

        <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault">    <li> 2022 </li></label>
</div> 
 
      </ul>   

      <hr>  

     
    <h5 class="text-center">Diensten</h5>
      <ul> 
   
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault"><li> Online betaal module </li> </label>
</div> 

  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault">   <li> Badges </li> </label>
</div> 

    <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault"> <li> E-tickets </li> </label>
</div>  

  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault"> <li> Uitnodigingstrajcet </li> </label>
</div> 

    <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault"> <li> Congress online </li> </label>
</div>  

    
    <div class="form-check form-switch">  
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" /> 
  <label class="form-check-label" for="flexSwitchCheckDefault">  <li> Helpdesk </li> </label>
</div>  
 

      </ul> 
 
<hr> 

      <h5 class="text-center">Categorie</h5>
      <ul> 
  
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault"> <li> Medische eventen  </li> </label>
</div> 

    <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault">   <li> Hybride eventen </li> </label>
</div> 

 
   <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault"> <li> Congress online eventen </li> </label> 

</div>  
<button type="button" class="btn zoekknop mt-4 text-center " type="submit">Resultaat</button>
  </ul>    
  

    </div> 
</div>
 
 
  <div class="col-md-8"> 
    <div class="float-right verplaats-cards">   
    <h2 class="mt-8">Projecten</h2>   
 
    <div class="zoek-verplaats">
    <form class=" d-flex justify-content-end"> 
    <input class="form-control zoek mr-sm-2 w-0" type="text" placeholder="Search"> 
    <button class="btn my-2 my-sm-0 zoekknop " type="submit">Search</button>
  </form> 
</div>

<div>
    <div class="card-group m-2 ">
  <div class="card p-2 m-2 shadow p-3 mb-5 bg-white rounded">
    <img src="img/ns-voorbeeld.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title titel">DDD Online</h5> 
     <p class="card-text omschrijf"> Datum 1-04-2022 </p> 
      <a href="#" class="btn knopdetail">Meer details</a>
    </div>
  </div>
  
  <div class="card p-2 m-2 shadow p-3 mb-5 bg-white rounded">
    <img src="img/DDDonline.jpg"  class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title titel">DDD Online</h5>
     <p class="card-text omschrijf"> Datum 1-04-2022 </p> 
      <a href="#" class="btn knopdetail">Meer details</a>
      
    </div>
  </div>
  <div class="card p-2 m-2 shadow p-3 mb-5 bg-white rounded">
    <img src="img/DDDonline.jpg"  class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title titel">DDD Online</h5> 
     <p class="card-text omschrijf"> Datum 1-04-2022 </p> 
      <a href="#" class="btn knopdetail">Meer details</a>
      
    </div>
  </div>
</div> 

<div class="card-group m-2 ">
  <div class="card p-2 m-2 shadow p-3 mb-5 bg-white rounded">
    <img src="img/DDDonline.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title titel">DDD Online</h5> 
     <p class="card-text omschrijf"> Datum 1-04-2022 </p> 
      <a href="#" class="btn knopdetail">Meer details</a>
       
    </div>
  </div>
  
  <div class="card p-2 m-2 shadow p-3 mb-5 bg-white rounded">
    <img src="img/DDDonline.jpg"  class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title titel">DDD Online</h5> 
     <p class="card-text omschrijf"> Datum 1-04-2022 </p> 
      <a href="#" class="btn knopdetail">Meer details</a>
       
    </div>
  </div>
  <div class="card p-2 m-2 shadow p-3 mb-5 bg-white rounded">
    <img src="img/DDDonline.jpg"  class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title titel">DDD Online</h5> 
     <p class="card-text omschrijf"> Datum 1-04-2022 </p> 
      <a href="#" class="btn knopdetail">Meer details</a>
      
    </div>
  </div>
</div>
     
 
</div>

 
</div>
</div> 
</div>

</body> 

</html>
