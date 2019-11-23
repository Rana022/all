$(document).ready(function(){
	$("#accordion"). accordion({
          collapsible:true,
          active: false,
          sidebar: false
     });
});



$(document).ready(function(){
     $('#html').barfiller({
          barColor:'#792500'
     });
     $('#css').barfiller({ barColor:'#792500'});
     $('#js').barfiller({ barColor:'#792500'});
     $('#jquery').barfiller({ barColor:'#792500'});
     $('#bootstrab').barfiller({ barColor:'#792500'});
     $('#php').barfiller({ barColor:'#792500'});
     $('#mysqli').barfiller({ barColor:'#792500'});
     $('#git').barfiller({ barColor:'#792500'});
 });

 $(document).ready(function(){
     $('#gallery-container').sGallery({
        fullScreenEnabled: true,
        click:true
      });
    });
