function inputEmail() {
    var checkBox = document.getElementById("inputEmailCheckbox");
    var input = document.getElementById("inputEmailInput");
    if (checkBox.checked == true) {
        input.style.display = "block";
    } else {
        input.style.display = "none";
    }
}