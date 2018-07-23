var burgerStatement = 0;
var preloads = []; //preloaded images
var mobile = false;

$(document).ready(function(){
    
    if(parseInt(screen.height) < 560 || parseInt(screen.width) < 560) {
        
        mobile = true;
        mobileChanges();
    }
    
    //to co musi się wydażyć przy załadowaniu strony
    $('.burgerNav').animate({
       height: 'toggle'
    }, 1);
    preloadImages();
    loadPrice();
    cubeImageLoading();
    sliderAutoSwitch();
    //obsługa zdażeń na burgerze
    
    $('.burger').click(burgerSlideAnimation);   
    $(".cube").click(function() {
        
        if(burgerStatement == 0) {
            
            $('.burger').prop( "checked", true );
            burgerSlideAnimation();
        }
    });
    
    //przyblizenie obrazka
    var picture = document.getElementById('picture');
    
    var move = function (ev) {
    
        picture.style.backgroundSize = "auto 290%";
        var pictureBounding = this.getBoundingClientRect(),
            x = ev.clientX - pictureBounding.left,
            y = ev.clientY - pictureBounding.top,
            pictureSize = parseInt(window.getComputedStyle(picture).height);
     
        x = x*1.8;
        y = y*1.8;
        var translateCSS = "translateX(" + x + "px) translateY(" + y + "px)";
        
        picture.style.backgroundPosition = -x+"px " + -y+"px";
    };
    
    var leave = function () {
        
        picture.style.backgroundSize = "100% auto";
        picture.style.backgroundPosition = "0px 0px";
    };
    
    picture.addEventListener('mousemove', move); 
    picture.addEventListener('mouseleave', leave); 
    
    //zmiany na wersję mobilną
    
});

function mobileChanges() {
    
    $(".burgerBelt").css({
        "position": "fixed", 
        "top":      "0px", 
        "height":   "140px",
        "width":    "100%",
        "border-bottom": "1px solid #7a9ccb"
    });
    
    $(".burgerBody").css({
      "transform": "translateX(3px)"
    });
            
    $(".burger").css({
        "top": "42%"
    });
    
    $('.burgerContainer').css({
        "position": "relative",
        "margin-top": "120px",
        "border-bottom": "none"
    });
    
    $('.burgerNav > a, .burgerLeftNav > a').css({
        "font-size": "18px",
        "margin-right": "20px"
    });
    
    $('.burgerLeftNav > a:first-child').css("margin-right", "50px");
    
    //zmiana w slajderze
    $('.sliderContainer').css({
        "width": "1000px",
        "height": "600px"
    });
    $('.sliderThem').css({
        "width": "1000px"
    });
    
    $('.sliderScreen').css({
        "width": "1000px",
        "height": "100%",
        "margin-top": "0px"
    });
    $(".galeryBox").css("transform", "translate("+$(".galeryBox").css("width")+", 30px)");
    $(".galeryBox > div").css("opacity", "1");
    //kostki
    
    $(".cubeContainer").css({
        "width": "100vw"
    });
    $(".container").css({
        "width": "50vw",
        "height": "50vw",
        "margin": "170px"
    });
    $(".cube .front").css({
        "transform": "rotateX(0deg) translateZ(25vw)",
    });
    $(".cube .back").css({
        "transform": "rotateX(180deg) translateZ(25vw)",
    });
    $(".cube .right").css({
        "transform": "rotateY(90deg) translateZ(25vw)",
    });
    $(".cube .left").css({
        "transform": "rotateY(-90deg) translateZ(25vw)",
    });
    $(".cube .top").css({
        "transform": "rotateX(90deg) translateZ(25vw)",
    });
    $(".cube .bottom").css({
        "transform": "rotateX(-90deg) translateZ(25vw)",
    });
    //footer
    $('.footer > .socialMedia > div').css({
        "width": "110px",
        "height": "110px",
        "background-size": "cover",
        "margin": "10px"
    });
    $('.footer > .socialMedia').css({
        "width": "390px",
    });
    $('.footer > .socialMedia').css({
        "transform": "translate(2px, 30px)"
    });
    $('.footer > a').css({
        "font-size": "26px",
            "width": "80%"
    });
    //opis
    $('.logoImg').css({
        "height": "150px",
        "margin-top": "20px"
                      
    });
    $('.aboutUs > span').css({
        "font-size": "30px",
        "line-height": "33px",
        "text-shadow": "0px 0px 15px rgba(150, 150, 150, 0.35)",
        "color": "#121111"
    });
}
    
//zmiana zakładek
    
function switchBurger(witch) {
    
    if(burgerStatement == 0) {
            
        $('.burger').prop( "checked", true );
        burgerSlideAnimation();
    }
    
    if(burgerStatement == 0) burgerSlideAnimation();
        
    for (let i = 1; i <= 6; i++) {
            
         if(i != witch) {
             
             document.getElementById('burgerBox'+i).style.display = "none";
         }
     }

     document.getElementById('burgerBox'+witch).style.display = "block";
}

function burgerSlideAnimation() { //odpowiedzialne za wysuwanie
    
    $('.burgerNav').animate({
        height: 'toggle'
    },900);
        
    $('.burgerBody').slideToggle(1000, function(){  
    });
    
    if(burgerStatement == 0){burgerStatement = 1;}else{burgerStatement = 0;}//zapamiętuje stan rozwinięcia burgera
    
    if(mobile)
        $('html, body').animate({ scrollTop: 0 }, 1000);
}

//zmiana zakłądek w Size/Zip

function switchSize(witch) {
    
    for (let i = 1; i <= 6; i++) {
            
        if(i != witch) {document.getElementById('size'+i).style.display = "none";}
    }

     document.getElementById('size'+witch).style.display = "block";
}

function switchZip(witch) {
 
    for (let i = 1; i <= 3; i++) {
            
        if(i != witch) {document.getElementById('zip'+i).style.display = "none";}
    }

     document.getElementById('zip'+witch).style.display = "block";
    
}

async function preloadImages() {
    
    for (let i = 1; i <= productQuantity; i++) { 
        
        for (let j = 1; j <= 4; j++) {
         
            preloads[preloads.length] = new Image();
            preloads[preloads.length - 1].src = "css/img/galery/"+i+"/img"+j+".jpg";
        }
    }
} 
