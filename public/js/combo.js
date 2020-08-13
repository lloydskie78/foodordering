var CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");

$("#combo1").on("click", function() {
    var id = 7;
    $("#imageforCombo").attr("src", "assets/img/combo1-min.jpg");

    $.ajax({
        url: "/combo/" + id,
        type: "GET",
        success: function(response) {
            let item = JSON.parse(response);

            console.log(item);

            $(".foodTitle").text(item.name);
            $("#desc").text(item.description);
        },
        error: function(response) {
            console.log("error!");
            console.log(response);
        }
    });
});

$("#combo2").on("click", function() {
    var id = 8;
    $("#imageforCombo").attr("src", "assets/img/combo2-min.jpg");
    $.ajax({
        url: "/combo/" + id,
        type: "GET",
        success: function(response) {
            let item = JSON.parse(response);

            console.log(item);

            $(".foodTitle").text(item.name);
            $("#desc").text(item.description);
        },
        error: function(response) {
            console.log("error!");
            console.log(response);
        }
    });
});

$("#combo3").on("click", function() {
    var id = 9;
    $("#imageforCombo").attr("src", "assets/img/combo3-min.jpg");
    $.ajax({
        url: "/combo/" + id,
        type: "GET",
        success: function(response) {
            let item = JSON.parse(response);

            console.log(item);

            $(".foodTitle").text(item.name);
            $("#desc").text(item.description);
        },
        error: function(response) {
            console.log("error!");
            console.log(response);
        }
    });
});

$("#addOrder").on("click", function() {
    if ($(".foodTitle").text() === "Combo Meal 1") {
        alert("Combo1");
    } else if ($(".foodTitle").text() === "Combo Meal 2") {
        alert("Combo2");
    } else if ($(".foodTitle").text() === "Combo Meal 3") {
        alert("Combo3");
    }
});
