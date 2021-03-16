function checkUser() {
    var username = document.getElementById("in_username").value;
    document.getElementById("username").innerHTML = "";
    var reg = /^[a-zA-Z][a-zA-Z0-9]{3,15}$/;
    if (reg.test(username) == false) {
        document.getElementById("username").innerHTML = "用户名格式不正确！";
        return false;
    }
    document.getElementById("username").innerHTML = "用户名可用!";
    return true;
}

function checkPwd() {
    var mmpwd = document.getElementById("pwd").value;
    document.getElementById("passwords").innerHTML = "";
    var reg = /^[a-zA-Z0-9]{6,16}$/;
    if (reg.test(mmpwd) == false) {
        document.getElementById("passwords").innerHTML = "用户密码格式错误!";
        return false;
    }
    document.getElementById("passwords").innerHTML = "密码可用!";
    return true;
}

function checkRepwd() {
    var Repwd = document.getElementById("repwd").value;
    var mmpwd = document.getElementById("pwd").value;
    document.getElementById("repasswords").innerHTML = "";
    if (mmpwd != Repwd) {
        document.getElementById("repasswords").innerHTML = "密码不一致!";
        return false;
    }
    document.getElementById("repasswords").innerHTML = "密码一致!";
    return true;
}

function checkMobile() {
    var mobile = document.getElementById("mobile").value;
    document.getElementById("telephone").innerHTML = "";
    var reg = /^1\d{10}$/;
    if (reg.test(mobile) == false) {
        document.getElementById("telephone").innerHTML = "手机号输入错误，请重新输入！";
        return false;
    }
    document.getElementById("telephone").innerHTML = "手机可用！";
    return true;
}

function checkEmail() {
    var email = document.getElementById("email").value;
    document.getElementById("email_prompt").innerHTML = "";
    var reg = /^\w+@\w+\.\w+[(com)|(cn)]$/;
    if (reg.test(email) == false) {
        document.getElementById("email_prompt").innerHTML = "格式不正确，例如hutu@qq.com";
        return false;
    }
    document.getElementById("email_prompt").innerHTML = "邮箱可用!";
    return true;
}

function checkAll() {
    if (checkUser() && checkPwd() && checkRepwd() && checkEmail() && checkMobile() == ture) {
        return true;
    }
    else
        return false;
}

function registerAll() {
    if (checkUser() && checkPwd() && checkRepwd() == ture) {
        return true;
    }
    else
        return false;
}
