$(function () {

    // register api httprequest
    $("#registerBTN").click(function (e) { 
        e.preventDefault();
        const request = new XMLHttpRequest();
        request.open("POST", "http://localhost/News-update/commands/Auth/register.php")
        var myForm = document.getElementById("register");
        var formData = new FormData(myForm);
        request.send(formData)

        request.onload = () => {
            // console.log(request)
            if (request.status === 200) {
                // data = JSON.parse(request.response);
                // console.log(data)
                console.log(JSON.parse(request.response))
                $("#newUserNameerr").text(' ');
                $("#newUserEmailerr").text(' ');
                $("#newUserPassworderr").text(' ');
                $("#newUserConfirmPassworderr").text(' ');

            } else {
                data = JSON.parse(request.response);
                console.log(data)

                // console.log(`error ${request.status}`)
                console.log(JSON.parse(request.response))
                $("#newUserNameerr").text(data.nameerr);
                $("#newUserEmailerr").text(data.emailerr);
                $("#newUserPassworderr").text(data.passworderr);
                $("#newUserConfirmPassworderr").text(data.confirmPassworderr);

            }
        }
    });

    // fetch api
    // fetch("http://localhost/News-update/commands/Auth/register.php").then(
    //     response=>{
    //        return response.json()
    //     }
    // ).then(json=>{
    //     console.log(json)
    // })
    // async method
    // async function getUsers(){
    //     let response = await fetch("http://localhost/News-update/commands/Auth/register.php")
    //     let data = await response.json() 
    //     return data
    // }

    // getUsers().then(response=>{
    //     console.log(response)
    // })

    // axios- third party javascript library

    // jquery
    // $("#registerBTN").click(function (e) {
    //     e.preventDefault();
    //     $.ajax({
    //         url: "http://localhost/News-update/commands/Auth/register.php",
    //         method: "POST",
    //         data: $("#register").serialize() + '&action=register',
    //         success: function (response) {
    //             data = JSON.parse(response)
    //             console.log(response)
    //             $("#newUserNameerr").html(data.nameerr);
    //             $("#newUserEmailerr").html(data.emailerr);
    //             $("#newUserPassworderr").html(data.passworderr);
    //             $("#newUserConfirmPassworderr").html(data.confirmPassworderr);

    //         }
    //     });
    // });
});