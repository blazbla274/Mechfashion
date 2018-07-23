async function obrot(size) { //size - ile kostek ma się obracać
    
    let byRotate = Math.floor(Math.random() * (6 - 1 + 1) + 1);; //ile ma się kostek obrucić przy wywołaniu (od 1 do 4)
    

    var memory = [0, 0, 0, 0];
    const actionList = ['bottom','top','front','back'];
    
    let cubeId;
    
    for (let i = 0; i < byRotate; i++) {
        
        cubeId = Math.floor(Math.random() * (size - 1 + 1) + 1); //losujemy id z zakresu od 1 do size
        
        //losujemy jedo z 4 zachować show: top bottom back front
        let action = Math.floor(Math.random() * (3 - 0 + 1) + 0);
        
        document.getElementById("cube"+cubeId).className = "cube show-"+actionList[action];
        
        await sleep(100);
    }
    
    setTimeout("obrot("+size+")", 3000);
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function cubeImageLoading() {
    
    const sites = ["front", "bottom", "top", "back"];
    
    for (let i = 1; i <= productQuantity; i++) { 
        
        for (let j = 0; j < 4; j++) {
         
           // $('#cube1 > .front').css("background-image","url(css/img/cube/1/img"+(j+1)+".png)");
            $('#cube'+i+' > .'+sites[j]).css("background-image","url(css/img/cube/"+i+"/img"+(j+1)+".jpg");
        }
    }
}
