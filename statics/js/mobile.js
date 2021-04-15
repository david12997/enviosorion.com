$('.carousel').carousel({
    interval: 3500
});

setInterval(()=>{

    if(window.outerWidth > 800){
    
        window.location.href= 'web.php';
        
    }
    
},1000);

