$(function () {
    // $("#blog").submit(function (e) {
    //     e.preventDefault();
    //     $("#blogBtn").html('<div class="spinner-border text-white mx-4"></div>');
    //     // $("#blogBtn").attr('disabled', 'true');
    //     $.ajax({
    //         type: "POST",
    //         url: "http://localhost/News-update/commands/upload/uploadInsert.php",
    //         processData: false,
    //         contentType: false,
    //         cache: false,
    //         data: new FormData(this),
    //         success: function (response) {
    //             console.log(response);
    //             console.log(message.response)
    //             $("#titleerr").text(response.titleerr + ' *');
    //             $("#authorerr").text(response.authorerr + ' *');
    //             $("#categoryerr").text(response.categoryerr + ' *');
    //             $("#coverimageerr").text(response.coverimageerr + ' *');
    //             $("#contenterr").text(response.contenterr + ' *');
    //         }
    //     });
    // });

    // register api httprequest
    $("#blog").submit(function (e) {
        e.preventDefault();
        const request = new XMLHttpRequest();
        request.open("POST", "http://localhost/News-update/commands/upload/uploadInsert.php")
        var myForm = document.getElementById("blog");
        var formData = new FormData(myForm);
        request.send(formData)

        request.onload = () => {
            // console.log(request)
            data = JSON.parse(request.response);
            if (data.result) {
                Swal.fire(
                    'Upload',
                    'Upload Successfully',
                    'success'
                ).then(function () {
                    $("#addModal").modal('hide')
                    $("#blog")[0].reset();
                    table.ajax.reload()
                    // FetchUploads()
                    // FetchUploads()
                    // FetchUploads()
                })
            }

            if (data.titleerr) {
                $("#titleerr").text(data.titleerr + ' *');
                if (data.titleerr == 'undefined') {
                    $("#authorerr").text(' ');
                }
            } else {
                $("#titleerr").text(' ');
            }

            if (data.authorerr) {
                $("#authorerr").text(data.authorerr + ' *');
                if (data.authorerr == 'undefined') {
                    $("#authorerr").text(' ');
                }
            } else {
                $("#authorerr").text(' ');
            }

            if (data.categoryerr) {
                $("#categoryerr").text(data.categoryerr + ' *');
                if (data.categoryerr == 'undefined') {
                    $("#authorerr").text(' ');
                }
            } else {
                $("#categoryerr").text(' ');
            }

            if (data.coverimageerr) {
                $("#coverimageerr").text(data.coverimageerr + ' *');
                if (data.coverimageerr == 'undefined') {
                    $("#authorerr").text(' ');
                }
            } else {
                $("#coverimageerr").text(' ');
            }

            if (data.contenterr) {
                $("#contenterr").text(data.contenterr + ' *');
                if (data.contenterr == 'undefined') {
                    $("#authorerr").text(' ');
                }
            } else {
                $("#contenterr").text(' ');
            }
        }
    });

    var table = $('#responsive-datatable').DataTable({
        "bProcessing": true,
        // "bServerSide": true, 
        ajax: "http://localhost/News-update/commands/upload/uploadFetch.php",
        "columns": [
            { data: "id" },
            { data: "title" },
            { data: "author" },
            { data: "category" },
            { data: "uid" },
            { data: "coverimage" },
            { data: "content" },
            { data: "datecreated" }
        ]
    });

    // var request = new XMLHttpRequest();
    // request.open("POST", "http://localhost/News-update/commands/upload/uploadFetch.php");
    // request.send();
    // request.onload = () => {
    //     // console.log(request);
    //     data = request.response;
    //     if (request.status == 200) {
    //         // console.log(JSON.parse(request.response))
    //         console.log(data)
    //     } else {
    //         console.log(`error ${request.status} ${request.statusText}`)
    //     }
    // }
});
