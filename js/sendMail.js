function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

$(document).ready(function() {
    
    $("textarea").click(function() {
        $("form").animate({
            width: '35vw'
        }, 500);
    });
    
    //wysuwanie wiadomości o wysyłanym mailu 
    sendingRaportSwitch();
});

async function sendingRaportSwitch() {
    
    $(".sendingRaport").animate({
        height: '80px'   
    }, 700);
    
    await sleep(6000);
    
    $(".sendingRaport").animate({
        height: '0px'   
    }, 400);
}