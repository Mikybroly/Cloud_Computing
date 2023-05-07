$(document).ready(function () {
    $("#btn").click(function () {
        var email=$("#email").val();
        var password=$("#password").val();
        $.ajax({
            type: "POST",
            url: "../auth/login.php",
            data: {"email": email,"password": password},
            success: function(response) {
                var jsonData = JSON.parse(response);
                console.log(jsonData);
                if(jsonData['id'].localeCompare("200")==0){
                    sessionStorage.setItem("logged","true");
                    window.location.replace("../home.html");
                }else{
                    console.log(jsonData['message']);
                    sessionStorage.setItem("logged","false");
                }
            },
        });
    })
});