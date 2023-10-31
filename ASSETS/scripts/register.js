function mdp(){
    var password = document.getElementById('password');
    var passwordconfirm = document.getElementById('passwordconfirm');
    var message = document.getElementById('error-nwl');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    var midcolor = "#ff8c00";
 	var reg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!()@#$%^&*]).{8,}$/
    
     if (password.value.match(reg)) {
        password.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        console.log('DEBUG')
    }
     
    else if(password.value.length > 7)
    {
        password.style.backgroundColor = midcolor;
        message.style.color = midcolor;
        message.innerHTML = "stp fait un effort !"
    }
    
    else{
        password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " plus de 8 caractère!"
        return;
    }
  

    if(password.value == passwordconfirm.value)
    {
        passwordconfirm.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "ok!"
    }
	else
    {
        passwordconfirm.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " le mot de passe ne correspond pas"
    }
}