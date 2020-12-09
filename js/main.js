/**
 * Validate all fields.
 */
 function validation() {

    var nombre = $("#txtnombre").val();
    var apellido = $("#txtnombre").val();

    if (nombre == "" || apellido == "") {

        $("#txtnombre").attr("placeholder", "Ingrese un nombre");
        $("#txtnombre").addClass("val");
        $("#txtapellido").attr("placeholder", "Ingrese un apellido");
        $("#txtapellido").addClass("val");

        return true;
    }

}

/**
 * Cleans inputs fields
 */
function LimpiarCampos() {
    $("#txtnombre").val("");
    $("#txtapellido").val("");
}


/**
 *  Click button sendDatos call validation and make ajax requests
 */
$("#sendDatos").click(function () {

    if (validation()) {

        validation();

    } else {


        var nombre = $("#txtnombre").val();
        var apellido = $("#txtapellido").val();

        $.ajax({
            method: "POST",
            url: "userProcess.php",
            data: {
                txtapellido: apellido,
                txtnombre: nombre,
            },
            success: function (response) {
                $(".toast").toast("show");
                $('time.timeago').attr("datetime", iso8601(new Date()));
                console.log($("time.timeago").timeago());
                $("#toastMen").html(response);
                actualizarPag();
            },
            error: function (rest) {
                $("#toastMen").html(rest);
            }
        });

        LimpiarCampos();

    }


});