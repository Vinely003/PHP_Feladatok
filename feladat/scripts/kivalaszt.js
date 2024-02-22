$(document).ready(function () {
    $("#varosForm").hide();
    $("#varosTabla").hide();

    $.ajax({
        type: "GET",
        url: "./modules/megye.php",
        dataType: "html",
        success: function (data) {
            $("#megyeSelect").html(data);
        }
    });

    $("#megyeSelect").change(function () {
        var megyeId = $(this).val();
        $.ajax({
            type: "POST",
            url: "./modules/varos.php",
            data: { megyeId: megyeId },
            success: function (data) {
                $("#varosTabla").html(data);
                $("#varosTabla").show();
                $("#varosForm").show();
                $("#varosTabla").find(".gombok").hide();
            }
        });
    });

    $("#varosForm").submit(function (e) {
        e.preventDefault();
        var megyeId = $("#megyeSelect").val();
        var ujVaros = $("#ujVaros").val();
        $.ajax({
            type: "POST",
            url: "./modules/ujvaros.php",
            data: { megyeId: megyeId, ujVaros: ujVaros },
            success: function (data) {
                $("#varosTabla").html(data);
                $("#ujVaros").val("");
            }
        });
    });

    $("#varosTabla").on("click", ".torles", function () {
        var varosid = $(this).data("varosid");
        var $sor = $(this).closest("tr");
        $.ajax({
            type: "POST",
            url: "./modules/torol.php",
            data: { varosid: varosid },
            success: function (data) {
                if (data == "sikeres") {
                    $sor.remove();
                }
            }
        });
    });

    $("#varosTabla").on("click", ".modositas", function () {
        var $ujVarosNevElem = $(this).closest("tr").find(".ujVarosNev");
        var varosid = $ujVarosNevElem.data("varosid");
        var ujVarosNev = $ujVarosNevElem.val();
        $.ajax({
            type: "POST",
            url: "./modules/modosit.php",
            data: { varosid: varosid, ujVarosNev: ujVarosNev },
            success: function (data) {
                $("#varosTabla").find(".gombok").hide();
            }
        });
    });

    $("#varosTabla").on("click", "#varos", function () {
        $("#varosTabla").find(".gombok").show();
    });

    $("#varosTabla").on("click", ".megse", function () {
        var $sor = $(this).closest("tr");
        var eredetiVarosNev = $sor.find(".ujVarosNev").attr("data-nev");
        $sor.find(".ujVarosNev").val(eredetiVarosNev);
        $("#varosTabla").find(".gombok").hide();
    });
});