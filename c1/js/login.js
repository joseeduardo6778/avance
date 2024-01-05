var attempt=3;
function validate(){
    var usuar=document.getElementsById("usuar").value;
    var password=document.getElementsById("Password").value;
    if(usuar=="Admin" && password=="Icam4567@"){
        alert("Ingreso exitoso");
        window.location="./index.php";
        return false;
    } else{
        attempt--;
    }
    alert("Te queda " +attempt+" intentos mas")
    
    if(attempt==0){
        document.getElementById("usuar").disable=true;
        document.getElementById("password").disable=true;
        document.getElementById("sumbit").disable=true;
    }
}