function CheckData()
{
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var pwd = document.getElementById("pwd").value;
    var cpwd = document.getElementById("cpwd").value;
    var ph = document.getElementById("contact").value;
    var d = document.getElementById("date").value;
    var m = document.getElementById("month").value;
    var y = document.getElementById("year").value;
    var hobbies = document.getElementsByName("hobbies");
    var gender = document.getElementsByName("gender");
    var message ="";

    
    var namecheck = /^[A-za-z]{3,10}$/;
    var contactcheck = /^[6789]{1}[0-9]{9}$/;
    var pwdcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,10}$/;
    var emailcheck = /^[A-Za-z0-9.]{3,16}@[A-Za-z0-9]{3,8}[.]{1}[A-Za-z.]{2,5}$/;

    
    if(!namecheck.test(name))
    {
        message += "--Enter Valid Name\n";
    }

    if(!emailcheck.test(email))
    {
        message += "--Enter Valid Email\n";
    }
    if(!pwdcheck.test(pwd))
    {
        message += "--Enter Valid Password\n";
    }
    // if(cpwd=="")
    // {
    //     message += "--Enter Valid Confirm Password\n";
    // }
    
    if(pwd.length<8)
    {
        message += "--Password should be atleast 8 characters long\n";
    }
    if(cpwd!=pwd)
    {
        message += "--Password and Confirm Password doesn't match\n";
    }
    if(!(gender[0].checked || gender[1].checked))
    {
        message +="--Select Any Gender \n";
    }
  
    for(var i=0;i<hobbies.length; i++)
    {
        if(hobbies[i].checked);
        break;
    }
    // if(i==hobbies.length)
    // {
    //     message+= "--Select atleast one hobby \n";
    // }
    if(!(hobbies[0].checked || hobbies[1].checked || hobbies[2].checked))
    {
        message+= "--Select atleast one hobby \n";
    }
    if(d=="" || m=="" || y=="")
    {
        message +="--Enter Valid DOB \n";
    }
    if(!contactcheck.test(ph))
    {
        message += "--Enter Valid Contact No\n";
    }
    if(message)
    {
        alert(message);
        return false;
    }
}
