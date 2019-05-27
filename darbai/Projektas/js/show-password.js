function showPassword() {
    var x = document.getElementById("pwField");
    if (x.type === "password") {
        x.type = "text";
        } else {
	       x.type = "password";
        }
    }