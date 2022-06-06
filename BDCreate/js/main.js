const validateForm = (e) => {
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
    
}