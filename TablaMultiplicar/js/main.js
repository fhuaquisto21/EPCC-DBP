const setHeaderTable = () => {
    let thead = document.querySelector('table thead');
    let tr = document.createElement('tr');
    for (let i = 1; i <= 20; ++i) {
        let th = document.createElement('th');
        if (i === 1) {
            th.textContent = 'N';
        } else {
            th.textContent = `x${i}`;
        }
        tr.appendChild(th);
    }
    thead.appendChild(tr);
}

const addRow = () => {
    let form = document.querySelector('.form input');
    let valueForm = form.value;
    if (valueForm > 10) {
        alert('ERROR: El número no puede ser mayor que 10.');
        return;
    }
    let tbody = document.querySelector('table tbody');
    let tr = document.createElement('tr');
    for (let i = 1; i <= 20; ++i) {
        let th = document.createElement('th');
        th.textContent = `${valueForm * i}`;
        tr.appendChild(th);
    }
    tbody.appendChild(tr);
    form.value = '';
}

setHeaderTable()