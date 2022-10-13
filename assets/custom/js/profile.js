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
            $("#oldPassworderr").text(data.oldPassworderr + ' *');
            $("#newPassworderr").text(data.newPassworderr + ' *');
            $("#ConfPassworderr").text(data.ConfPassworderr + ' *');

        }

    });
    
    
});