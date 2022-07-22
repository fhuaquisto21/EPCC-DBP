const getMult = () => {
    const valueInput = parseInt(document.querySelector('input[type="number"').value);
    if (valueInput <= 10) {
        const headTable = document.createElement('tr');
        for (let i = 0; i < 20; ++i) {
            let th;
            if (i === 0) {
                th = document.createElement('th');
                th.textContent = valueInput;
            } else {
                th = document.createElement('th');
                th.textContent = `${valueInput * (i + 1)}`;
            }
            headTable.appendChild(th);
        }
        document.querySelector('tbody').appendChild(headTable);
        document.querySelector('input[type="number"').value = '';
        return;
    }
    alert("ERROR: El número no puede ser mayor que 10.");
}

const headTable = document.createElement('tr');
for (let i = 0; i < 20; ++i) {
    let th;
    if (i === 0) {
        th = document.createElement('th');
        th.textContent = 'N';
    } else {
        th = document.createElement('th');
        th.textContent = `x${i + 1}`;
    }
    headTable.appendChild(th);
}
document.querySelector('thead').appendChild(headTable);