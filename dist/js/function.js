var domain = "";

String.prototype.trim = function() {
    return this.replace(/^\s+|\s+$/g,"");
}

function SetDomain(comeDomain) {
    domain = comeDomain;
}


function YesNo() {
    if (confirm("確定儲存資料?\nConfirm to save?")) {
        return true;
    } else {
        return false;
    }
}

function AlertSuccess() {
    alert("資料已成功儲存\nData saved successful");
}


function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function passwordChanged() {
    var strength = document.getElementById('errorPassword');
    var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
    var enoughRegex = new RegExp("(?=.{6,}).*", "g");
    var pwd = document.getElementById("password");
    if (pwd.value.length==0) {
        strength.innerHTML = "<font style = 'color:red;'>密碼最少8個字母及數字 Password at least 8 characters and digits</font>";
    } else if (false == enoughRegex.test(pwd.value)) {
        strength.innerHTML = "<font style = 'color:red;'>請輸入更多字母或數字 Please input more characters or digits</font>";
    } else if (strongRegex.test(pwd.value)) {
        strength.innerHTML = '<span style="color:green">Strong!</span>';
    } else if (mediumRegex.test(pwd.value)) {
        strength.innerHTML = '<span style="color:orange">Medium!</span>';
    } else { 
        strength.innerHTML = '<span style="color:red">Weak!</span>';
    }
}

function isNumberKey(evt)
{
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
        return true;
    }
}

function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}	

function IsDecmial(input) {
	//var RE = new RegExp("/^{0,1}\d*\.{0,1}\d+$/");
	return input.match( /^(\d+\.?\d*|\.\d+)$/ );
	//return (RE.test(input));
}


function checkAxSizeForm() {
    var err = 0;
    err += GenericCheckInput("axsize", "text", "Please input valid AxSize");	
    if (err > 0) {
        return false;
    }
    return true;
}

function checkAxColorForm() {
    var err = 0;
    err += GenericCheckInput("axcolor", "text", "Please input valid AxColor");	
    if (err > 0) {
        return false;
    }
    return true;
}

function checkAxStyleForm() {
    var err = 0;
    err += GenericCheckInput("axstyle", "text", "Please input valid AxStyle");	
    if (err > 0) {
        return false;
    }
    return true;
}

function checkSearchNameForm() {
    var err = 0;
    err += GenericCheckInput("searchname", "text", "Please input valid Search Name");	
    if (err > 0) {
        return false;
    }
    return true;
}

function checkItemNameForm() {
    var err = 0;
    err += GenericCheckInput("itemname", "text", "Please input valid Item Name");	
    if (err > 0) {
        return false;
    }
    return true;
}

function checkDescriptionForm() {
    var err = 0;
    err += GenericCheckInput("description", "text", "Please input valid description");	
    if (err > 0) {
        return false;
    }
    return true;
}

function checkClassForm() {
    var err = 0;
    err += GenericCheckInput("class", "text", "Please input valid class");	
    if (err > 0) {
        return false;
    }
    return true;
}

function checkItemForm() {
    var err = 0;
    try
    {
        // err += GenericCheckInput("axconfiguration", "text", "Please select AXConfiguration");	
        err += GenericCheckInput("axsize", "select", "Please select AXSize");	
        err += GenericCheckInput("axcolor", "select", "Please select AXColor");	
        err += GenericCheckInput("axstyle", "select", "Please select AXStyle");	
        err += GenericCheckInput("searchname", "select", "Please select Search Name");	
        err += GenericCheckInput("itemname", "select", "Please select Item Name");	
        err += GenericCheckInput("description", "select", "Please select Description");	
        err += GenericCheckInput("class", "select", "Please select Class");	
        // err += GenericCheckInput("style", "text", "Please input Style");	
        // err += GenericCheckInput("size", "text", "Please input Size");	
        // err += GenericCheckInput("movement", "text", "Please input Movement");	
        // err += GenericCheckInput("componentcode", "text", "Please input Component code");	
        // err += GenericCheckInput("componentname", "text", "Please input Component name");	
        // err += GenericCheckInput("vendor", "text", "Please input Vendor");	
        // err += GenericCheckInput("physicalmarking", "text", "Please input Physical marking");	
        // err += GenericCheckInput("dimension", "text", "Please input Component code");	
        // err += GenericCheckInput("brand", "text", "Please input Brand");	
        // err += GenericCheckInput("watchstyle", "text", "Please input Watch style");	
        // err += GenericCheckInput("ecn", "text", "Please input ECN");	
        // err += GenericCheckInput("itemstatus", "text", "Please input Item status");	
    } catch (err) {
        console.log(err);
    }
    if (err == 0) {
        return true;
    }
    return false;
}

function checkItemBatchForm() {
    var err = 0;
    try {
        err += GenericCheckInput("batchfile", "file", "Please select excel");
    } catch (err) {
        console.log(err);
    }
    if (err == 0) {
        return true;
    }
    return false;
}

function GenericCheckInput(id, type, msg) {
    var err = 0;

    if (type == "file") {
        if (document.getElementById(id).files.length == 0) {
            err = 1;
        }
    } else if (type == "text") {
        if (document.getElementById(id).value.trim() == "") {
            err = 1;
        }
    } else if (type == "integer") {
        if (document.getElementById(id).value.trim() == "") {
            err = 1;
        } else if (!isNumber(document.getElementById(id).value)) {
            err = 1;
        }
    } else if (type == "decimal") {
        if (document.getElementById(id).value.trim() == "") {
            err = 1;
        } else if (!isNumber(document.getElementById(id).value) &&  !IsDecmial(document.getElementById(id).value)) {
            err = 1;
        }
    } else if (type == "select") {
        var selectDropDown = document.getElementById(id);
        if (selectDropDown.options[selectDropDown.selectedIndex].value == 0 || selectDropDown.options[selectDropDown.selectedIndex].value == "") {
            err = 1;
        }
    } else if (type == "checkboxList") {
        var checkboxList = document.getElementsByName(id);
        var checkboxListValue = 0;
        for (var i = 0, length = checkboxList.length; i < length; i++) {
            if (checkboxList[i].checked) {
                checkboxListValue = checkboxList[i].value;
                break;
            }
        }
        if (checkboxListValue == 0) {
            err = 1;
        }
    } else if (type == "email") {
        if (document.getElementById(id).value == "") {
            err = 1;
        } else if (!validateEmail(document.getElementById(id).value)) {
            err = 1;
        }
    } else if (type == "phone") {
        if (document.getElementById(id).value == "") {
            err = 1;
        } else if (document.getElementById(id).value.length < 8) {
            err = 1;
        }
    }

    if (err == 0) {
        SetInnerHtml(id + 'Error', '');
        return 0;
    } else {
        SetInnerHtml(id + 'Error', '<font class = "error">' + msg + '</font>');
        return 1;
    }
}

function SetInnerHtml(id, msg) {
    document.getElementById(id).innerHTML = msg;
}

function compare(type, id) {
    if (document.getElementById("left_" + type + id ).value != document.getElementById("right_" + type + id ).value) {
        
        var td = document.getElementById(type + id).getElementsByTagName("td");
        for (i = 0; i < td.length; i++) {
            td[i].style.borderColor = "red";
            td[i].style.borderWidth = "1px";
            td[i].style.borderStyle = "solid";
        }
    } else {
        var row = document.getElementById( type + id );
        row.parentNode.removeChild(row);
    }
}

function GetMessage(userId) {
    var html = "";
    $.ajax( {
        type: "POST",
        url: domain  + "api/getMessage/" + userId + "/",
        dataType: "json",
        success: function (response) {
            document.getElementById("msgCount").innerHTML = response.length;
            for(var i = 0; i < response.length; i++) {
                html += "<li><div><em class=\"fa fa-user\"></em>" + response[i].message + "</li><li class=\"divider\"></li>";
            }
            document.getElementById("msgContent").innerHTML = html;
        }, 
        error: function (jqXHR, exception) {
        }
    });
}


function TestData() {
    document.getElementById("axsize").selectedIndex = 1;
    document.getElementById("axcolor").selectedIndex = 1;
    document.getElementById("axstyle").selectedIndex = 1;
    document.getElementById("searchname").selectedIndex = 1;
    document.getElementById("itemname").selectedIndex = 1;
    document.getElementById("description").selectedIndex = 1;
    document.getElementById("class").selectedIndex = 1;
}