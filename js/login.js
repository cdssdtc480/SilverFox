window.onload = function(){
	document.getElementById("submit-login").onclick = function(){
		var username = document.getElementById("user-login").value;
		var pass = document.getElementById("pass-login").value;
		if (username == "silverfox" && pass =="silverfox2017"){
			window.open("user-profile.html")
		}
		else{
			alert("Incorrect username or password")
		}
	}
}