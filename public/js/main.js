$(function() {
	var SliderModule = (function(){
        var pb = {};
        pb.el = $('#Slider');
        pb.items={
        	panel:pb.el.find('li')
        }

        var SliderInterval,
        currentSlider=0,
        nextSlider=1,
        lengthiSlider = pb.items.panel.length;

        //Intialize
        pb.init =function(settings) {
        	SliderInit();

        	//controles de slider
        	$('#Slider-controls').on('click','li', function(e){
        		var $this = $(this);
        		if (currentSlider !== $this.index()) {
        		changePanel($this.index());
        	   };
            });
        }
        var SliderInit = function(){
        	SliderInterval= setInterval(pb.starSlider, 3000);
        }
        pb.starSlider =function() {
        	var panels= pb.items.panel;
        	controls= $('#Slider-controls li');

        	if (nextSlider >= lengthiSlider) {
                 nextSlider =0;
                 currentSlider = lengthiSlider-1;
        	}
        	//Efectos
            controls.removeClass('active').eq(nextSlider).addClass('active');
            panels.eq(currentSlider).fadeOut('slow');
            panels.eq(nextSlider).fadeIn('slow');
            
            //actualizar datos
        	currentSlider = nextSlider;
        	nextSlider +=1;
        }
 
        	//funcion controles
            var changePanel= function(id){
            	clearInterval(SliderInterval);
            	var panels =pb.items.panel;
            	controls= $('#Slider-controls li');
            
            if (id <= lengthiSlider) {
            	id=0;
           }else if (id < 0) {
           	id=lengthiSlider-1;
           }
           //efectos
            controls.removeClass('active').eq(nextSlider).addClass('active');           
            panels.eq(currentSlider).fadeOut('slow');
            panels.eq(nextSlider).fadeIn('slow');
            
            currentSlider= id;
            nextSlider= id+1;
         
         SliderInit();
            }

      return pb;
	   }());
	   SliderModule.init();
});