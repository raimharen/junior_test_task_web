/**
 * function for type swifter
 */
function product_choice() {
    //get user choice
    let userChoice = document.getElementById("type_choice").value;

    //whitelist
    const types = ['dvd', 'furniture', 'book'];

    //enable/disable selected element
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

form.addEventListener('submit', checkInputs);

function checkInputs(event) {
    const whiteListType = ['dvd', 'furniture', 'book'];
    const formData = new FormData(form);

    form.querySelector("*[id^='err-']").innerText = '';

    for (let [key, value] of formData.entries()) {
        //console.log(`${key}: ${value}`);
        if (key === "sku") {
            if (!value.length) {
                event.preventDefault();
                showSkuErrorMessage();
            }
        } else if (key === "name") {
            if (!value.length) {
                event.preventDefault();
                showNameErrorMessage();
            }
        } else if (key === "price") {
            if (!/^\d+[.]\d+$/.test(value)) {
                event.preventDefault();
                showPriceErrorMessage();
            }
        } else if (key === "type") {
            if (!whiteListType.includes(value)) {
                event.preventDefault();
                showTypeErrorMessage();
            }
        } else if (key === "specific") {
            if (!/^\d+x\d+x\d+$/.test(value)) {
                if (isNaN(value)) {
                    event.preventDefault();
                    showSpecificErrorMessage();
                }
            }
        }
    }
}

function showSkuErrorMessage() {
    form.querySelector('#err-sku').innerText = '*Please, provide the data of indicated type';
}
function showNameErrorMessage() {
    form.querySelector('#err-name').innerText = '*Please, provide the data of indicated type.';
}
function showPriceErrorMessage() {
    form.querySelector('#err-price').innerText = '*Price must be integer and N.N format.';
}
function showTypeErrorMessage() {
    form.querySelector('#err-type').innerText = '*Please, provide the data of indicated type.';
}
function showSpecificErrorMessage() {
    form.querySelector('#err-specific').innerText = '*Please, provide the data of indicated type';
}
