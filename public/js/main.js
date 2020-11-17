var slidenumber =0;
slidefun();
function navbarfun()
{
    var x = document.getElementById("navid");
    if (x.className === "nav") {
        x.className = "nav responsive";
    }
    else{
        x.className = "nav";
    }
}
function slidefun()
{
    var x = document.getElementsByClassName("slide");
    for (var i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slidenumber++;
    if (slidenumber> x.length)
    {
        slidenumber = 1;
    }
    x[slidenumber-1].style.display = "block";
    setTimeout(slidefun,4000)
}
function onSubmit(token) {
    document.getElementById("signinform").submit();
}

$(document).ready(function () {
    $(".recaptchaForm").on('submit',function(event){
        alert("jj");
        var recaptcha = $("#g-recaptcha-response").val();
        if(recaptcha === "")
        {
            event.preventDefault();
            alert("error");
        }
        event.preventDefault();
        $.post("url", {
            "secret": "6Lev2OIZAAAAAGk6927moK5eIFIPwSKbOz3c6pYC",
            "response":recaptcha
        },
            function (response) {
                console.log(response);
            }
        );
    });
});


function rec()
{
    var recaptcha = $(".g-recaptcha-response").val();
    if(recaptcha === "")
    {
        $('.recaptchaForm').submit(function (evt) {
            evt.preventDefault();
        });
        alert("check recaptcha");
    }

}
