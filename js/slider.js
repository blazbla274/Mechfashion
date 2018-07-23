
var first = true;
var sliderWidth;
const quantityOfSlides = 6;
const speedFactor = 180; //współczynnik prędkości przewijania listy slajdów  

var statementOfTranslate = 0; //w pixelach
var beforCircleId = 1;
var sliderSemafor = 1;
var kolejka = 0;

var slideTime;

async function slider(site) {

    clearTimeout(slideTime);
    
    if(sliderSemafor == 1) {

        sliderSemafor = 0;

        let actualyPage = -1 * (statementOfTranslate - sliderWidth) / sliderWidth;
        let newPage = site;
        
        if (site == 'left') { //lewy przycisk
            
            if (statementOfTranslate > (-1 * (quantityOfSlides - 1) * sliderWidth)) { //sprawdzenie czy nie jesteśmy na krańcu listy
                
                let oldStatement = statementOfTranslate;
                statementOfTranslate -= sliderWidth;
                newPage = -1 * (statementOfTranslate - sliderWidth) / sliderWidth;
                setCirkle(actualyPage, newPage); // zmiana opacity kułek
                
                for (let i = oldStatement; i >= statementOfTranslate; i-=12) {

                    if(i < oldStatement - 500) {
                        i+=6;
                    }
                    if(i < oldStatement - 600) {
                        i+=1;
                    }
                    document.getElementById('sliderBox').style.transform = "translateX("+i+"px)";
                    await sleep(1);
                } 
                document.getElementById('sliderBox').style.transform = "translateX("+statementOfTranslate+"px)";
                
            } else { //przewinięcie na początek listy
                
                let oldStatement = statementOfTranslate;
                statementOfTranslate = 0;
                newPage = -1 * (statementOfTranslate - sliderWidth) / sliderWidth;
                setCirkle(actualyPage, newPage); // zmiana opacity kułek
                
                let distance = ((quantityOfSlides - 1) * sliderWidth)/speedFactor;
                
                 for (let i = oldStatement; i <= statementOfTranslate; i += distance) {

                    document.getElementById('sliderBox').style.transform = "translateX("+i+"px)";
                    await sleep(1);
                }
                document.getElementById('sliderBox').style.transform = "translateX("+statementOfTranslate+"px)";
                kolejka = 0;
                
            }
            
        } else if (site == 'right') { //prawy przycisk
            
            if (statementOfTranslate < 0) { //sprawdzneie czy nei jesteśmy na początku listy
                
                let oldStatement = statementOfTranslate;
                statementOfTranslate += sliderWidth;
                newPage = -1 * (statementOfTranslate - sliderWidth) / sliderWidth;
                setCirkle(actualyPage, newPage); // zmiana opacity kułek

                for (let i = oldStatement; i <= statementOfTranslate; i+=12) {

                    if(i > oldStatement + 500) {
                        i-=6;
                    }
                    if(i > oldStatement + 600) {
                        i-=3;
                    }
                    document.getElementById('sliderBox').style.transform = "translateX("+i+"px)";
                    await sleep(1);
                }
                
                document.getElementById('sliderBox').style.transform = "translateX("+statementOfTranslate+"px)";
                
            } else { //przewinięcie na początek listy
                
                let oldStatement = statementOfTranslate;
                statementOfTranslate = -1 * (quantityOfSlides - 1) * sliderWidth;
                newPage = -1 * (statementOfTranslate - sliderWidth) / sliderWidth;
                setCirkle(actualyPage, newPage); // zmiana opacity kułek
                
                let distance = ((quantityOfSlides - 1) * sliderWidth)/speedFactor;
                
                for (let i = oldStatement; i >= statementOfTranslate; i -= distance) {

                    document.getElementById('sliderBox').style.transform = "translateX("+i+"px)";
                    await sleep(1);
                }
                document.getElementById('sliderBox').style.transform = "translateX("+statementOfTranslate+"px)";
                kolejka = 0;
                
            }
        } else { //ktoś kliknął w kułko
            
            let positionToSet = -1 * (sliderWidth * site - sliderWidth);
            let distance = actualyPage - site;
            if(distance < 0) distance = -1 * distance;
            setCirkle(actualyPage, newPage); // zmiana opacity kułek
            
            distance = distance * speedFactor/17; // uwzględnienie współczynnika
            
            if (statementOfTranslate < positionToSet) { //gdy jesteśmy nad stroną do której przesuwamy
            
                for (let i = statementOfTranslate; i <= positionToSet; i += distance) {

                    document.getElementById('sliderBox').style.transform = "translateX("+i+"px)";
                    await sleep(1);
                } 
                statementOfTranslate = positionToSet;
                document.getElementById('sliderBox').style.transform = "translateX("+statementOfTranslate+"px)";
            
                
            } else if (statementOfTranslate > positionToSet) {

                for (let i = statementOfTranslate; i >= positionToSet; i -= distance) {

                    document.getElementById('sliderBox').style.transform = "translateX("+i+"px)";
                    await sleep(1);
                } 
                statementOfTranslate = positionToSet;
                document.getElementById('sliderBox').style.transform = "translateX("+statementOfTranslate+"px)";
            }
            
            kolejka = 0;
        }

        if (kolejka > 0) {

            kolejka--;
            setTimeout("slider('"+site+"')", 0);
        } 
        sliderSemafor = 1;
        
    } else {

        kolejka++;
    }
    
    sliderAutoSwitch();
}

function setCirkle(actualyPage, newPage) {
      
    document.getElementById('circle'+actualyPage).style.opacity = "0.5";
    document.getElementById('circle'+newPage).style.opacity = "1";
}

function sliderAutoSwitch() {
    
        
    if(parseInt(screen.height) < 560 || parseInt(screen.width) < 560) {
        
         sliderWidth = innerWidth;
    } else {
        
         sliderWidth = 800;
    }
    
    if(first) { //sprawdzeni czy nie przewinąć szybciej na początku
        
        first = false;
        slideTime = setTimeout("slider('left')", 1500);
    }
    slideTime = setTimeout("slider('left')", 5500);
    
}
