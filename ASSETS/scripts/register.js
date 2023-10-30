function mdp(){
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('passwordconfirm');
    var message = document.getElementById('error-nwl');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
 	
    if(password.value.length > 7)
    {
        password.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "character number ok!"
    }
    else
    {
        password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " plus de 8 charactére!"
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
        message.innerHTML = " le mot de passe ne coinside pas"
    }
}