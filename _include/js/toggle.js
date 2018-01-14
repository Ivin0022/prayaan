window.onload = function() {
     
        document.getElementById("reg_content").style.display = 'none';
     
    };
function myFunction() {
    var x = document.getElementById("main_content");
   var y=document.getElementById("reg_content");
    if (x.style.display === "none") {
       y.style.display = "none";
        x.style.display = "block";

     }
     else {
       y.style.display = "block";
        x.style.display ="none";
    }
}