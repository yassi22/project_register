$(function () {
    $("input[name=file1]").previewimage({
        div: ".preview",
        imgwidth: 180,
        imgheight: 120
    });
    $("input[name=file2]").previewimage({
        div: ".preview2",
        imgwidth: 90,
        imgheight: 90
    });
});