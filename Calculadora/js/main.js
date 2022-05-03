let n1 = document.getElementById('n1');
let n2 = document.getElementById('n2');
let n3 = document.getElementById('n3');
let n4 = document.getElementById('n4');
let n5 = document.getElementById('n5');
let n6 = document.getElementById('n6');
let n7 = document.getElementById('n7');
let n8 = document.getElementById('n8');
let n9 = document.getElementById('n9');
let n0 = document.getElementById('n0');

let result = ''
let operation = ''

let mult = document.getElementById('mult');
let sum = document.getElementById('sum');
let rest = document.getElementById('rest');
let div = document.getElementById('div');
let equal = document.getElementById('equal');
let ce = document.getElementById('ce');

let resultElem = document.getElementById('result');

function getResult(res, ope) {
    let splitRes = res.split(ope);
    let resultElem = document.getElementById('result');

    switch (ope) {
        case '+':
            resultElem.textContent = parseInt(splitRes[0]) + parseInt(splitRes[1]);
            return parseInt(splitRes[0]) + parseInt(splitRes[1]);
            break;
        case '-':
            resultElem.textContent = parseInt(splitRes[0]) - parseInt(splitRes[1]);
            return parseInt(splitRes[0]) - parseInt(splitRes[1]);
            break;
        case '*':
            resultElem.textContent = parseInt(splitRes[0]) * parseInt(splitRes[1]);
            return parseInt(splitRes[0]) * parseInt(splitRes[1]);
            break;
        case '/':
            resultElem.textContent = parseInt(splitRes[0]) / parseInt(splitRes[1]);
            return parseInt(splitRes[0]) / parseInt(splitRes[1]);
            break;
        default:
            break;
    }
}

n1.addEventListener('click', () => {
    result += '1'
    resultElem.textContent = result;
})
n2.addEventListener('click', () => {
    result += '2'
    resultElem.textContent = result;
})
n3.addEventListener('click', () => {
    result += '3'
    resultElem.textContent = result;
})
n4.addEventListener('click', () => {
    result += '4'
    resultElem.textContent = result;
})
n5.addEventListener('click', () => {
    result += '5'
    resultElem.textContent = result;
})
n6.addEventListener('click', () => {
    result += '6'
    resultElem.textContent = result;
})
n7.addEventListener('click', () => {
    result += '7'
    resultElem.textContent = result;
})
n8.addEventListener('click', () => {
    result += '8'
    resultElem.textContent = result;
})
n9.addEventListener('click', () => {
    result += '9'
    resultElem.textContent = result;
})
n0.addEventListener('click', () => {
    result += '0'
    resultElem.textContent = result;
})

mult.addEventListener('click', () => {
    if (operation === '') {
        result += '*'
        operation = '*'
    } else {
        result = getResult(result, operation);
        result += '*'
        operation = '*'
    }
    resultElem.textContent = result;
})
div.addEventListener('click', () => {
    if (operation === '') {
        result += '/'
        operation = '/'
    } else {
        result = getResult(result, operation);
        result += '/'
        operation = '/'
    }
    resultElem.textContent = result;
})
sum.addEventListener('click', () => {
    if (operation === '') {
        result += '+'
        operation = '+'
    } else {
        result = getResult(result, operation);
        result += '+'
        operation = '+'
    }
    resultElem.textContent = result;
})
rest.addEventListener('click', () => {
    if (operation === '') {
        result += '-'
        operation = '-'
    } else {
        result = getResult(result, operation);
        result += '-'
        operation = '-'
    }
    resultElem.textContent = result;
})
equal.addEventListener('click', () => {
    result = getResult(result, operation)
    resultElem.textContent = result;
    operation = ''
})
ce.addEventListener('click', () => {
    result = '';
    operation = '';
    resultElem.textContent = '0';
})