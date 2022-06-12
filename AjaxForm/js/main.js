const validateForm = () => {
    let ajax;
    let dni = document.querySelector('input[name="dni"]')
    let name = document.querySelector('input[name="name"]')
    let lastname = document.querySelector('input[name="lastname"]')
    let email = document.querySelector('input[name="email"]')
    let phone = document.querySelector('input[name="phone"]')
    
    if (dni.value.length != 9) {
        alert("ERROR: El DNI debe de tener 9 dígitos.")
        return false
    }
    if (name.value.length < 3) {
        alert("ERROR: El nombre no puede tener menos de 3 carácteres.")
        return false
    }
    if (lastname.value.length < 3) {
        alert("ERROR: El apellido no puede tener menos de 3 carácteres.")
        return false
    }
    if (!email.value.includes('@') || !email.value.includes('.')) {
        alert("ERROR: El correo electrónico debe de contener un '@' o un '.' por lo menos.")
        return false
    }
    if (phone.value.length != 9) {
        alert("ERROR: El teléfono debe de tener 9 dígitos.")
        return false
    }
    
    if (window.XMLHttpRequest) {
        ajax = new XMLHttpRequest()
    } else {
        ajax = new ActiveXObject("Microsoft.XMLHTTP")
    }
    
    ajax.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.querySelector('tbody').innerHTML = this.responseText;
        } else {
            document.querySelector('tbody').innerHTML = "loading";
        }
    }

    ajax.open("POST", `pages/users.php`)
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
    ajax.send(`dni=${dni.value}&name=${name.value}&lastname=${lastname.value}&email=${email.value}&phone=${phone.value}`)
}

const changeColor = () => {
    let color = document.querySelector('#change_color').value;
    document.querySelector('.form button').style.backgroundColor = `var(--${color})`
    document.querySelector('thead tr').style.backgroundColor = `var(--${color})`
    if (window.XMLHttpRequest) {
        ajax = new XMLHttpRequest()
    } else {
        ajax = new ActiveXObject("Microsoft.XMLHTTP")
    }
    
    ajax.onreadystatechange = function() {
        if (this.readyState === 4) {
            if (this.status != 200) {
                alert("ERROR")
            }
        }
    }
    ajax.open("GET", `pages/insertCookie.php?color=${color}`)
    ajax.send(null)
}