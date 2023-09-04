var count = true;
function view() {
    var text = document.getElementById("viewPassword");
    if (count == true) {
        text.className = "fas fa-eye-slash viewPassword";
        document.getElementById("password").type="text";
        count=false;
    } else {
        text.className = "fas fa-eye viewPassword";
        document.getElementById("password").type="password";
        count = true;
    }
}