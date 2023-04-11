let products = (smallIMG)=>{
    let fullIMG = document.getElementById("imageBox");
    fullIMG.src = smallIMG.src;
}

//form

let labelFunc1 = (este)=>{
    let labelNames = document.getElementById("labelNames");
    if(este.value == " " || este.value == " "){
        labelNames.classList.toggle("active");
    }else{
        labelNames.classList.add("active");
    }
}

let labelFunc2 = (este)=>{
    let labelNumbers = document.getElementById("labelNumbers");
    if(este.value == " " || este.value == ""){
        labelNumbers.classList.toggle("active");
    }else{
        labelNumbers.classList.add("active");
    }
}

// let labelFunc3 = (este)=>{
//     let labelMail = document.getElementById("labelMail");
//     if(este.value == " " || este.value == ""){
//         labelMail.classList.toggle("active");
//     }
//     // else{
//     //     labelMail.classList.add("active");
//     // }
// }

let labelFunc4 = (este)=>{
    let labelPass = document.getElementById("labelPass");
    if(este.value == " " || este.value == ""){
        labelPass.classList.toggle("active");
    }else{
        labelPass.classList.add("active");
    }
}

let labelFunc5 = (este)=>{
    let labelPassConfirm = document.getElementById("labelPassConfirm");
    if(este.value == " " || este.value == ""){
        labelPassConfirm.classList.toggle("active");
    }else{
        labelPassConfirm.classList.add("active");
    }
}

let labelFunc6 = (este)=>{
    let labelPassConfirm = document.getElementById("label6");
    if(este.value == " " || este.value == ""){
        labelPassConfirm.classList.toggle("active");
    }else{
        labelPassConfirm.classList.add("active");
    }
}

let IconsFunctListOver = ()=>{
    let imgList = document.querySelector(".Lista-nav");
    imgList.src = "../resource/icons/bolsa-red.png";
}

let IconsFunctCarOver = ()=>{
    let imgCar = document.querySelector(".carrito-nav");
    imgCar.src = "../resource/icons/cart-solid-red.png";
}

let IconsFunctMenuOver = ()=>{
    let imgMenu = document.querySelector(".menu-nav");
    imgMenu.src = "../resource/icons/menu-alt-left-regular-red.png";
}

let IconsFunctDollarOver = ()=>{
    let imgDollar = document.querySelector(".dollar-nav");
    imgDollar.src = "../resource/icons/dollar-circle-solid-red.png";
}
let BuyM = setTimeout(function(){
    let divBuy = document.querySelector(".buymesenge");
    divBuy.classList.add("buybefore");
}, 5000);

let BuyM2 = setTimeout(function(){
    let divBuy = document.querySelector(".buymesenge");
    divBuy.classList.add("buybefore2");
}, 5900);

function Cambio() {
    window.location.assign("controlador carrito.php");
}
