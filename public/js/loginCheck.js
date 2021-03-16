function checkUser() {
    var username = document.getElementById("username").value;
    document.getElementById("user_tip").innerHTML = "";
    if (username == "") {
        document.getElementById("user_tip").innerHTML = "请输入用户名！";
        return false;
    }
    return true;
}

function checkPwd() {
    var password = document.getElementById("password").value;
    document.getElementById("user_tip").innerHTML = "";
    if (password == "") {
        document.getElementById("pwd_tip").innerHTML = "请输入密码！";
        return false;
    }
    return true;
}

function checkAll() {
    if (checkUser() && checkPwd()) {
        return true;
    }
    else
        return false;
}