var ID = 0;

const getID = () => ++ID;

const verifyInputs = (form) => {
    const { name, lastname, email, birtplace } = form;
    let end = {
        success: true,
        message: ''
    }

    if (name.value.trim().length < 3 && lastname.value.trim().length < 3 && email.value.trim().length < 3 && birtplace.value.trim().length < 3) {
        end.success = false;
        end.message = 'Los campos: Nomnbre, Apellido, Correo electrónico y Lugar de nacimiento debe de tener al menos 3 carácteres.'
        return end;
    }
    if (!email.value.trim().includes('@') && !email.value.trim().includes('.')) {
        end.success = false;
        end.message = 'El campo: Correo electrónico debe de contener al menos un "@" y un ".".'
        return end;
    }
    if (birtplace.value.trim() != 'Arequipa' && birtplace.value.trim() != 'Lima' && birtplace.value.trim() != 'Otros') {
        end.success = false;
        end.message = 'El campo: Lugar de nacimiento solo puede tener 3 valores: "Arequipa", "Lima" y "Otros".'
        return end;
    }
    return end;
}

const submitUser = () => {
    let form = {
        name: document.getElementById('name'),
        lastname: document.getElementById('lastname'),
        email: document.getElementById('email'),
        birtplace: document.getElementById('birtplace'),
    }
    for (const item of Object.entries(form)) {
        console.log(item)
    }
    const verify = verifyInputs(form);
    if (!verify.success) {
        alert(verify.message);
        return;
    }
    const id = getID();
    let tbody = document.querySelector('tbody');
    let tr = document.createElement('tr');
    tr.setAttribute('id', id);
    let thID = document.createElement('th');
    thID.textContent = id;
    tr.appendChild(thID);
    for (const data of Object.entries(form)) {
        let th = document.createElement('th');
        th.textContent = data[1].value.trim();
        tr.appendChild(th);
    }
    let thDELETE = document.createElement('th');
    let btnDELETE = document.createElement('button');
    btnDELETE.setAttribute('onclick', `deleteRow(${id})`);
    btnDELETE.textContent = 'Eliminar'
    thDELETE.appendChild(btnDELETE);
    tr.appendChild(thDELETE);
    tbody.appendChild(tr);
    for (const data of Object.entries(form)) {
        data[1].value = '';
    }
}

const deleteRow = (id) => {
    document.getElementById(id).remove();
}