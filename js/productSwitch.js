//tablica z nazwami

const nameTable = [""];
nameTable.push("All black");
nameTable.push("Nautilus");
nameTable.push("Godspeed");
nameTable.push("Serika");
nameTable.push("Carbon");
nameTable.push("Nautilus (canvas)");
nameTable.push("Pulse (canvas)");
nameTable.push("Laser (canvas)");

//zmiana przycisku i ustalanie ceny 
var model;
var size;
var zip;
const sizePriceTable = [27,28,28,29,29,30,9]; //odpowiednio za rozmiary 
const zipPriceTable = [0,0,0];
var priceStatement = 0;
var productQuantity = 8;

function productSwitch(id) {
    
    model = id;
    switchBurger(1);
    loadPPButton();
    loadGalery(id);
    loadName(id);
    if(mobile)
        $('html, body').animate({ scrollTop: 0 }, 1000);
}


function loadPrice() {
    
    size = 1;
    zip = 1;
    model = 1;
    
    $('#customizationButton1').css("background-color","#6aa6d4");
    $('#customizationButton8').css("background-color","#6aa6d4");
    
    document.getElementById('priceBox').innerText = sizePriceTable[0] + zipPriceTable[0] + "$";
    loadPPButton();
    loadGalery(1);
}

function loadGalery (id) { //ładuje dany zestaw dla danego produktu
    
    document.getElementById("picture").style.backgroundImage = "url(css/img/galery/"+id+"/img1.jpg)";
    
    for(let i = 1; i <= 4; i++) {
        
        document.getElementById("miniImg"+i).style.backgroundImage = "url(css/img/galery/"+id+"/img"+i+".jpg)";
    }
}

function loadImg (id) { //ładuje dane zjęcie  

    document.getElementById("picture").style.backgroundImage = "url(css/img/galery/"+model+"/img"+id+".jpg)";
}

function loadName (id) { //ładuje nazwę
    
    $(".burgerBuyBox > h1").text(nameTable[id]);
}

function loadPPButton() {
    
    let buttonCode;
    let optionZip;
    let optionSize;
    
    switch (model) {
            
        case 1:    buttonCode = "J7JA55WKYSRAU";
            break;
        case 2:    buttonCode = "FV3SGPEDQNRPL";
            break;
        case 3:    buttonCode = "RTJGW9C8RQT78";
            break;
        case 4:    buttonCode = "DVRDS9G6LLHTJ";
            break;
        case 5:    buttonCode = "DZVNE9RG9FKNA";
            break;
        case 6:    buttonCode = "RFWSD73RDXESW";
            break;
        case 7:    buttonCode = "84PR6LLFLCL48";
            break;
        case 8:    buttonCode = "ZKM6EYX5T2HDS";
            break;
        default:   buttonCode = "";
    }
    
    switch (size) {
            
        case 1:    optionSize = "40%";   
            break;
        case 2:    optionSize = "60%";
            break;
        case 3:    optionSize = "65%";
            break;
        case 4:    optionSize = "75%";
            break;
        case 5:    optionSize = "TKL";
            break;
        case 6:    optionSize = "Fullsize";
            break;
        default:    optionSize = "";
    }
    
    switch (zip) {
            
        case 1:    optionZip = "Velcro";   
            break;
        case 2:    optionZip = "Magnetic flap";
            break;
        case 3:    optionZip = "Cord lock";
            break;
        default:    optionZip = "";
    }
    
    document.getElementById('PPcode').value = buttonCode;
    document.getElementById('PPsize').value = optionSize;
    document.getElementById('PPzipType').value = optionZip;
}

function price(idOfButton,what, type) {
    
    //obsługa przycisków
    
    if(what == "size") { 
        
        $('.row1 > button').css("background-color","#f7fbff");
    } else {
        
        $('.row2 > button').css("background-color","#f7fbff");
    }
    $('#customizationButton'+idOfButton).css("background-color","#6aa6d4");
    
    priceStatement = 0;
    
    if(what == 'size') {size = type;}
    if(what == 'zip') {zip = type;}
    
    switch (zip) {
        case 1: priceStatement += zipPriceTable[0];
            break;
        case 2: priceStatement += zipPriceTable[1];
            break;
        case 3: priceStatement += zipPriceTable[2];
            break;
                }
    
    switch (size) {
        case 1: priceStatement += sizePriceTable[0];
            break;
        case 2: priceStatement += sizePriceTable[1];
            break;
        case 3: priceStatement += sizePriceTable[2];
            break;
        case 4: priceStatement += sizePriceTable[3];
            break;
        case 5: priceStatement += sizePriceTable[4];
            break;
        case 6: priceStatement += sizePriceTable[5];
            break;
               }
    
    document.getElementById('priceBox').innerText = priceStatement+"$";
    loadPPButton();

}