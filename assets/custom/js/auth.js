$(function () {

    // register api httprequest
    // $("#registerBTN").click(function (e) { 
    //     e.preventDefault();
    //     const request = new XMLHttpRequest();
    //     request.open("POST", "http://localhost/News-update/commands/Auth/register.php")
    //     var myForm = document.getElementById("register");
    //     var formData = new FormData(myForm);
    //     request.send(formData)

    //     request.onload = () => {
    //         // console.log(request)
    //         if (request.status === 200) {
    //             // data = JSON.parse(request.response);
    //             // console.log(data)
    //             console.log(JSON.parse(request.response))
    //             $("#newUserNameerr").text(' ');
    //             $("#newUserEmailerr").text(' ');
    //             $("#newUserPassworderr").text(' ');
    //             $("#newUserConfirmPassworderr").text(' ');

    //         } else {
    //             data = JSON.parse(request.response);
    //             console.log(data)

    //             // console.log(`error ${request.status}`)
    //             console.log(JSON.parse(request.response))
    //             $("#newUserNameerr").text(data.nameerr);
    //             $("#newUserEmailerr").text(data.emailerr);
    //             $("#newUserPassworderr").text(data.passworderr);
    //             $("#newUserConfirmPassworderr").text(data.confirmPassworderr);

    //         }
    //     }
    // });

    // jquery
    $("#registerBTN").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "http://localhost/News-update/commands/Auth/register.php",
            method: "POST",
            data: $("#register").serialize() + '&action=register',
            success: function (response) {
                console.log(response);
                $("#newUserNameerr").html(response.nameerr);
                $("#newUserEmailerr").html(response.emailerr);
                $("#newUserPassworderr").html(response.passworderr);
                $("#newUserConfirmPassworderr").html(response.confirmPassworderr);
                $("#newUserConfirmPassworderr").html(response.resulterr);
                if (response.result == "Successfull") {
                    Swal.fire({
                        icon: 'success',
                        title: "Register",
                        text: "Register in successful",
                    }).then(function(){
                        window.location = "dashboard"
                    })
                }

            }
        });
    });

    // jquery
    $("#loginBTN").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "http://localhost/News-update/commands/Auth/login.php",
            method: "POST",
            data: $("#login").serialize() + '&action=login',
            success: function (response) {
                console.log(response);
                $("#userEmailerr").html(response.emailerr);
                $("#userPassworderr").html(response.passworderr);
                $("#userPassworderr").html(response.loginerr);
                if (response.login == "Successful") {
                    Swal.fire({
                        icon: 'success',
                        title: "login",
                        text: "Login in successful",
                    }).then(function(){
                        window.location = "dashboard"
                    })
                }

            }
        });
    });
});