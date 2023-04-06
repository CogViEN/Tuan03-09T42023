function kt(){
    let regex_pass =  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/;
    let old_password = document.getElementById("old_password").value;
    let new_password = document.getElementById("new_password").value;
    let confirm_password = document.getElementById("confirm_new_password").value;
    let check = true;
    if(!regex_pass.test(old_password)){
        check = false;
        document.getElementById("error_old_password").innerHTML = "Your password not valid";
    } 
    else{
        document.getElementById("error_old_password").innerHTML = "";
    }
    if(!regex_pass.test(new_password)){
        check = false;
        document.getElementById("error_new_password").innerHTML = "Your password not valid";
    }
    else{
        document.getElementById("error_new_password").innerHTML = "";
    }
    if(new_password !== confirm_password){
        check = false;
        document.getElementById("error_confirm_new_password").innerHTML = "Your answer is not same the new password";
    }
    else{
        document.getElementById("error_confirm_new_password").innerHTML = "";
    }
    if(new_password === old_password){
        document.getElementById("error_new_password").innerHTML = "Your new password is same your old password";
    }
    return check;
}