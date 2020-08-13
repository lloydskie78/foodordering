$("#combo1").on("click", function() {
    $("#imageforCombo").attr("src", "assets/img/combo1-min.jpg");
    $(".foodTitle").text("Combo Meal 1");
});

$("#combo2").on("click", function() {
    $("#imageforCombo").attr("src", "assets/img/combo2-min.jpg");
    $(".foodTitle").text("Combo Meal 2");
});

$("#combo3").on("click", function() {
    $("#imageforCombo").attr("src", "assets/img/combo3-min.jpg");
    $(".foodTitle").text("Combo Meal 3");
});

$("#addOrder").on("click", function() {
    if ($(".foodTitle").text() === "Combo Meal 1") {
        alert("COmbo1");
    } else if ($(".foodTitle").text() === "Combo Meal 2") {
        alert("COmbo2");
    } else if ($(".foodTitle").text() === "Combo Meal 3") {
        alert("COmbo3");
    }
});
