$(function () {
    $("#passwordUpdate").submit(function (e) {
        e.preventDefault();
        const request = new XMLHttpRequest();
        request.open("POST", "http://localhost/News-update/commands/profile/passwordUpdate.php");
        var myForm = document.getElementById("passwordUpdate");
        var formData = new FormData(myForm);
        request.send(formData)
        request.onload = () => {
            data = JSON.parse(request.response);
            console.log(data);
            if (data.oldPassworderr) {
                $("#oldPassworderr").text(data.oldPassworderr + ' *');
                if (data.oldPassworderr == 'undefined') {
                    $("#oldPassworderr").text(' ');
                }
            } else {
                $("#oldPassworderr").text(' ');
            }
            if (data.newPassworderr) {
                $("#newPassworderr").text(data.newPassworderr + ' *');
                if (data.newPassworderr == 'undefined') {
                    $("#newPassworderr").text(' ');
                }
            } else {
                $("#newPassworderr").text(' ');
            }
            if (data.ConfPassworderr) {
                $("#ConfPassworderr").text(data.ConfPassworderr + ' *');
                if (data.ConfPassworderr == 'undefined') {
                    $("#ConfPassworderr").text(' ');
                }
            } else {
                $("#ConfPassworderr").text(' ');
            }

            if (data.result == 'successful') {
                Swal.fire(
                    'Password Update',
                    'Password Updated Successfully',
                    'success'
                ).then(function () {
                })

            } else if(data.result == 'Something went wrong'){
                Swal.fire(
                    'Password Update',
                    data.result,
                    'error'
                ).then(function () {
                })
            }


        }

    });


});