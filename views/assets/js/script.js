//Validation formulaire newsletter côté navigateur
if(document.getElementById("submit") !== null){
    document.getElementById("submit").addEventListener("click", verifyField);
}

let fields = document.querySelectorAll("input[required]");
fields.forEach((field)=>{
    field.addEventListener("focus", ()=>{
        resetField(field);
    });
    field.addEventListener("blur", ()=>{
        validateField(field);
    });
});

function verifyField(event){
    let valid = true;
    fields.forEach((field)=>{
        resetField(field);
        if(!validateField(field)){
            valid = false;
        }
    });
}

function validateField(f){
    if(f.checkValidity()){
        return true;
    }
    else{
        let span = document.createElement("span");
        span.innerText = " " + f.validationMessage;
        span.setAttribute("class", "err");
        f.nextElementSibling.appendChild(span);
        return false;
    }
}

function resetField(f){
    let span = f.nextElementSibling.children;
    if(span[0] !== undefined){
        span[0].parentNode.removeChild(span[0]);
    }
}



var hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function() {
hamburger.classList.toggle("is-active");

});


function callValidation(){
if(hcaptcha.getResponse().length == 0){
    alert('Veuillez valider le hCAPTCHA');
    return false;
}
return true;
}