//vars
const body = document.querySelector("body");
const inQuanty = document.querySelector("#input-quantity");
const cost = document.querySelector(".cost");
const btnTotal = document.querySelector("#btnTotal");
const perDiscount = document.querySelector("#catego");
const inResumen = document.querySelector("#input-resumen").value;
const inName = document.querySelector("#inName");
const inMail = document.querySelector("#inMail");
const inLastnm = document.querySelector("#inLastnm");
const btns = document.querySelectorAll(".btns");

//functions
function checkout() {
    let quantitySelected;
    let percent;
    let subtotalDiscount

    if(inName.validity.valueMissing){
        inName.reportValidity();
    }
    else if(inLastnm.validity.valueMissing){
        inLastnm.reportValidity();
    }
    else if(inMail.validity.valueMissing){
        inMail.reportValidity();
    }else if(inQuanty.validity.valueMissing){
        inQuanty.reportValidity();
    }

    if (inQuanty.value &&
        perDiscount.value){
        
        quantitySelected = inQuanty.value;
        percent = perDiscount.value;

        const subtotal = quantitySelected * cost.innerHTML;

        totalDiscount = subtotal*(percent/100);

        total = subtotal - totalDiscount;

        document.querySelector("#input-resumen").value = inResumen + total.toString();

        
    }
    
}

function preservColor(element) {
    element.style.background = "#ffc107";
}

//Logic
console.log(inResumen);
btnTotal.onclick = checkout;

btns.forEach(element => {
    console.log(element);
    element.onblur = preservColor(element);
});


