function product_choice() {
    //get user choice
    let userChoice = document.getElementById("type_choice").value;
    console.log(userChoice);

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
    document.getElementById(`${$item}_block`).style.display = "none";
}
