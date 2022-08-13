$(function () {
    
    // register api httprequest
    // const request = new XMLHttpRequest();
    // request.open("POST", "http://localhost/News-update/commands/Auth/register.php")
    // request.send()
    // request.onload = ()=>{
    //     console.log(request)
    //     if (request.status === 200) {
    //         console.log(JSON.parse(request.response))
    //     } else {
    //         console.log( `error ${request.status}`)
    //     }
    // }

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
    $("#registerBTN").click(function (e) { 
        e.preventDefault();
        $.ajax({
            Headers : {
                contentType: "application/json",
                AccessControlAllowOrigin: "*"

            },
            url: "http://localhost/News-update/commands/Auth/register.php",
            type: "POST",
            data: $("#register").serialize() ,
            dataType: "json",
            success: function (response) {
                // data = JSON.parse(response)
                console.log(response)
            }
        });
    });
});