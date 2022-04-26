
// Hieronder bevind zich een methode voor het laten zien van een afbeelding. 
// De afbeelding word opgehaald van uit het bestand syteem van de computer.
    $(function () {
    $("input[name=file1]").previewimage({
        div: ".preview",
        imgwidth: 180,
        imgheight: 120
    });
     
});