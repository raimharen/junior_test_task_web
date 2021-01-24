function delete_product() {
    const formData = new FormData;
    const checked = document.querySelectorAll("input[type='checkbox']:checked");
    if (checked.length === 0) {
        return;
    } else {
        checked.forEach(block => {
            formData.append('id', block.value);
        });
        let request = new XMLHttpRequest();
        request.open("POST", "/delete_item");
        request.send(formData);


        /*let xhr = new XMLHttpRequest();
        xhr.open("POST", "/delete_item", true);
        xhr.setRequestHeader('Content-Type', 'application/json;');
        xhr.onreadystatechange = function () {
            if (this.readyState != 4) return;
            console.log(this.status + " " + this.responseText);
        }
        xhr.send(JSON.stringify(jdata));*/
    }
}
