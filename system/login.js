function validateForm() {
    var username = document.getElementById("value");
    var password = document.getElementById("password").value;
    
    // username is empty
    if (username === "") {
        alert("Please enter your username");
        return false;
    }
    
    // Check if password is empty
    if (password === "") {
        alert("Please enter your password");
 //Additional validation rules can be added here
    
    return true;
}
}