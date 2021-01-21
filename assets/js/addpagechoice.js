function product_choice() {
    //get user choice
    let userChoice = document.getElementById("type_choice").value;
    //console.log(userChoice);

    //accepted types
    const types = ['dvd', 'furniture', 'book']

    //enable selected element
    if (types.includes(userChoice)) {
        types.forEach(disabled);
        document.getElementById(userChoice).disabled = false;
        document.getElementById(`${userChoice}_block`).style.display = "";
    } else {
        types.forEach(disabled);
    }

}
//set disabled and display=none for all elements
function disabled($item) {
    document.getElementById($item).disabled = true;
    document.getElementById($item).value = "";
    document.getElementById(`${$item}_block`).style.display = "none";
}

//check if data correct

const form = document.querySelector("#save");
//let form = document.querySelector('#save');
form.addEventListener('submit', checkInputs);
const formData = new FormData(form);

function checkInputs(event) {
    //form.querySelector('#err-*').innerText = '';
    //event.preventDefault();
    const whiteListType = ['dvd', 'furniture', 'book'];


    //const formData = new FormData(document.querySelector("form"));
    for (let [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
        if (key === 'sku') {
            if (value.lenght > 0) {
                event.preventDefault();
                showSkuErrorMessage();
            }
        } else if (key === "name") {
            if (value.lenght > 0) {
                event.preventDefault();
                showNameErrorMessage();
            }
        } else if (key === "price") {
            if (!/^\d+[.,]\d+$/.test(value)) {
                event.preventDefault();
                showPriceErrorMessage();
            }
        } else if (key === "type") {
            if (!whiteListType.includes(value)) {
                event.preventDefault();
                showTypeErrorMessage();
            }
        } else if (key === "furniture") {
            if (!/\d+x\d+x\d+/.test(value)) {
                event.preventDefault();
                showSpecificErrorMessage();
            }
        } else if (key === 'dvd' || key === 'book') {
            if (!/^[0-9]+$/.test(value)) {
                event.preventDefault();
                showSpecificErrorMessage();
            }
        }
    }
}
console.log(formData.entries());
/*const form = event.target;
const skuInput = form.querySelector('[name=sku]').value;
const nameInput = form.querySelector('[name=name]').value;
const priceInput = form.querySelector('[name=price]').value;
const typeInput = form.querySelector('[name=type]').value;
const specificInput = form.querySelector('[name=specific[]]');

console.log(skuInput);
console.log(nameInput);
console.log(priceInput);
console.log(typeInput);
console.log(specificInput);*/


function showSkuErrorMessage() {
    form.querySelector('#err-sku').innerText = '*Please, provide the data of indicated type';
}
function showNameErrorMessage() {
    form.querySelector('#err-name').innerText = '*Please, provide the data of indicated type.';
}
function showPriceErrorMessage() {
    form.querySelector('#err-price').innerText = '*Price must be integer.';
}
function showTypeErrorMessage() {
    form.querySelector('#err-type').innerText = '*Please, provide the data of indicated type.';
}
function showSpecificErrorMessage() {
    form.querySelector('#err-specific').innerText = '*Please, provide the data of indicated type';
}

