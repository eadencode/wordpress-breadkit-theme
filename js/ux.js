var $ = jQuery;

$(document).ready(function(){

var myWidth = $(document).width();
    
//GSAP TIMELINE FUNCTION
    function gsapAnimation(){
        
        if( myWidth >=800 ){
        }
        else if( myWidth <=800 && myWidth >=500 ){
        }
        else{
        }
    //END FUNCTION
    }
    
//SCROLL MAGIC FUNCTION
    
    function magicScroll(){
        
        //New Timeline Object
        var tl = new TimelineMax();
        
        //Scroll Magic Controller Object
        var $magic = new ScrollMagic.Controller();
        
        //TWEEN Object
        var scrollTween = [];
        
        //Build Scene
        var scene1 = new ScrollMagic.Scene({})
                                    .setTween()
                                    .addTo(magicScroll);
        
    }

});