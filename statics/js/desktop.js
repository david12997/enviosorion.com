$('.carousel').carousel({
    interval: 3500
});

setInterval(()=>{

    if(window.screen.width <= 800){
    
        window.location.href= 'mobile.php';
        
    }
    
},1000)
