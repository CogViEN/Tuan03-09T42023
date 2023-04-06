function check(){
    let check = true;
    let name = document.getElementById("name").value;
    let mail = document.getElementById("mail").value;
    let password = document.getElementById("password").value;
    if(name.length == 0) check = false;
    if(mail.length == 0) check = false;
    if(password.length == 0) check = false;
    let regex_name = /^[AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+ [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+(?: [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]*)*/;
    let regex_email = /^[a-z0-9_]+@[a-z]+\.[a-z]+$/;
    let regex_pass =  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/;
    if(!regex_name.test(name)){
        check = false;
        document.getElementById("error_name").innerHTML = "Your username not valid";
    } 
    else{
        document.getElementById("error_name").innerHTML = "";
    }
    if(!regex_email.test(mail)){
        check = false;
        document.getElementById("error_mail").innerHTML = "Your mail not valid";
    } 
    else{
        document.getElementById("error_mail").innerHTML = "";
    }
    if(!regex_pass.test(password)){
        check = false;
        document.getElementById("error_password").innerHTML = "Your password not valid";
    } 
    else{
        document.getElementById("error_password").innerHTML = "";
    }
    return check;
}

