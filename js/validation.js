const error = document.getElementById('error');
const sku = document.getElementById("sku");
const names = document.getElementById("name");
const price = document.getElementById("price");
const size = document.getElementById("size");
const height = document.getElementById("height");
const width = document.getElementById("width");
const length = document.getElementById("length");
const weight = document.getElementById("weight");
const form = document.getElementById("product_form");
const hwl = document.getElementById("hwl");
const size_container = document.getElementById("size-container");
const weight_container = document.getElementById("weight-container");


    form.addEventListener('submit', (e) => {
        
        let messages = [];
        if (sku.value === '' || names.value ==="" || price.value === "") {
            messages.push("Please, submit required data")
        }
        if (size_container.classList.contains('show')){
            if (size.value === "") {
                messages.push("Please, submit required data for DVD");
            }
        }
        if (hwl.classList.contains('show')){
            if (width.value==="" || height.value===""|| length.value==="") {
                messages.push("Please, submit required data for furniture");
            }
        }
        if (weight_container.classList.contains('show')){
            if (weight.value === "") {
                messages.push("Please, submit required data for book");
            }
        }
        if (/\D/.test(price.value) || /\D/.test(size.value) || /\D/.test(height.value) || /\D/.test(width.value) || /\D/.test(length.value) || /\D/.test(weight.value)){
            messages.push("Please, provide the data of indicated type")
        }

        if(messages.length > 0) {
            e.preventDefault();
            error.innerText = messages.join(". \n");
        }
        
    })

