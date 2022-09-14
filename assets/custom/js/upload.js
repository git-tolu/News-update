$(function () {
    $("#blog").submit(function (e) {
        e.preventDefault();
        $("#blogBtn").html('<div class="spinner-border text-white mx-4"></div>');
        // $("#blogBtn").attr('disabled', 'true');
        $.ajax({
            type: "POST",
            url: "http://localhost/News-update/commands/upload/uploadInsert.php",
            processData: false,
            contentType: false,
            cache: false,
            data: new FormData(this),
            success: function (response) {
                console.log(response.message)
                $("#titleerr").text(response.titleerr + ' *');
                $("#authorerr").text(response.authorerr + ' *');
                $("#categoryerr").text(response.categoryerr + ' *');
                $("#coverimageerr").text(response.coverimageerr + ' *');
                $("#contenterr").text(response.contenterr + ' *');
            }
        });
    });
});
