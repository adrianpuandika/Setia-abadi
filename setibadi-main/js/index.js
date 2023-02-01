function cek_login(){
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;

	if(username == 'KH' && password == 'KH'){
		window.location.href = 'admin.html';
	}else{
		alert('Username atau Password tidak sesuai !!');
		window.location.reload();
	}
}

function cek_register(){
	var password1 = document.getElementById('password1').value;
	var password2 = document.getElementById('password2').value;

	if(password1 == password2){
		alert('Registrasi berhasil !');
		window.location.href = 'login.html';
	}else{
		alert('Password dan Konfirmasi password berbeda, mohon disesuaikan !');
	}
}