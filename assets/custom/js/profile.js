$(function () {
    // $("#passwordUpdate").submit(function (e) {
    //     e.preventDefault();
    //     const request = new XMLHttpRequest();
    //     request.open("POST", "http://localhost/News-update/commands/profile/passwordUpdate.php");
    //     var myForm = document.getElementById("passwordUpdate");
    //     var formData = new FormData(myForm);
    //     request.send(formData)
    //     request.onload = () => {
    //         data = JSON.parse(request.response);
    //         console.log(data);
    //         if (data.oldPassworderr) {
    //             $("#oldPassworderr").text(data.oldPassworderr + ' *');
    //             if (data.oldPassworderr == 'undefined') {
    //                 $("#oldPassworderr").text(' ');
    //             }
    //         } else {
    //             $("#oldPassworderr").text(' ');
    //         }
    //         if (data.newPassworderr) {
    //             $("#newPassworderr").text(data.newPassworderr + ' *');
    //             if (data.newPassworderr == 'undefined') {
    //                 $("#newPassworderr").text(' ');
    //             }
    //         } else {
    //             $("#newPassworderr").text(' ');
    //         }
    //         if (data.ConfPassworderr) {
    //             $("#ConfPassworderr").text(data.ConfPassworderr + ' *');
    //             if (data.ConfPassworderr == 'undefined') {
    //                 $("#ConfPassworderr").text(' ');
    //             }
    //         } else {
    //             $("#ConfPassworderr").text(' ');
    //         }

    //         if (data.result == 'successful') {
    //             Swal.fire(
    //                 'Password Update',
    //                 'Password Updated Successfully',
    //                 'success'
    //             ).then(function () {
    //             })

    //         } else if(data.result == 'Something went wrong'){
    //             Swal.fire(
    //                 'Password Update',
    //                 data.result,
    //                 'error'
    //             ).then(function () {
    //             })
    //         }


    //     }

    // });
    $("#passwordUpdate").submit(function (e) {
        e.preventDefault();
        var myForm = document.getElementById("passwordUpdate");
        $.ajax({
            processData: false,
            cache: false,
            contentType: false,
            url: "http://localhost/News-update/commands/profile/passwordUpdate.php",
            method: "POST",
            data: new FormData(myForm),
            success: function (response) {
                console.log(response);
                if (response.oldPassworderr) {
                    $("#oldPassworderr").text(response.oldPassworderr + ' *');
                }
                if (response.newPassworderr) {
                    $("#newPassworderr").text(response.newPassworderr + ' *');
                }
                if (response.ConfPassworderr) {
                    $("#ConfPassworderr").text(response.ConfPassworderr + ' *');
                }
                if (response.result == 'successful') {
                    Swal.fire(
                        'Password Update',
                        'Password Updated Successfully',
                        'success'
                    ).then(function () {
                    })

                } else if(response.result == 'Something went wrong'){
                    Swal.fire(
                        'Password Update',
                        response.result,
                        'error'
                    ).then(function () {
                    })
                }
    
            }
        });
    
    });

    $('#profilepic').change(function (e) { 
        e.preventDefault();
        var myForm = document.getElementById("profilePicForm");
        $.ajax({
            processData: false,
            cache: false,
            contentType: false,
            type: "POST",
            url: "http://localhost/News-update/commands/profile/profilePicUpdate.php",
            data: new FormData(myForm),
            dataType: "json",
            success: function (response) {
                if (response.result) {
                    location.reload()
                } else {
                    console.log(response)
                }
            }
        });
    });



});