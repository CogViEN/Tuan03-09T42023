function kt(){
    let kt = true;
    let mail = document.getElementById("mail").value;
    let password = document.getElementById("password").value;
    let regex_email = /^[a-z0-9_]+@[a-z]+\.[a-z]+$/;
    let regex_pass =  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/;
    if(!regex_email.test(mail)){
        kt = false;
        document.getElementById("error_mail").innerHTML = "Your mail not valid";
    } 
    else{
        document.getElementById("error_mail").innerHTML = "";
    }
    if(!regex_pass.test(password)){
        kt = false;
        document.getElementById("error_password").innerHTML = "Your password not valid";
    } 
    else{
        document.getElementById("error_password").innerHTML = "";
    }
    return kt;
}