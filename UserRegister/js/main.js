const verifyData = () => {
    const usernameField = document.getElementById('username').value;
    const passwordField = document.getElementById('password').value;

    if (usernameField.length < 3) {
        alert("ERROR: El nombre de usuario debe de tener por lo menos 3 caracteres.");
        return false;
    }
    if (passwordField.length < 6) {
        alert("ERROR: La contraseña debe de tener por lo menos 6 caracteres.");
        return false;
    }

    return true;
}