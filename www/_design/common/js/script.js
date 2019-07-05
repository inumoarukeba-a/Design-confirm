jQuery(function ($) {
  var url = window.location.href;
  var filename = url.match(".+/(.+?)\.[a-z]+([\?#;].*)?$")[1];
  var w = $(window);
  var wW, wH,imgW;
  
  function adjust() {
    wW = w.width();
    wH = w.height();
    
    if(imgW > wW){
      $('#main').css({
        'width':'100%',
        'marginLeft':'0',
        'left':"0",
      }).find("img").css("width","100%");
    }else{
      $('#main').css({
        'width':imgW,
        "left":"",
        'marginLeft':Number(-imgW/2)
      }).find("img").css("width","");
    }
  }
  
  
  $("#main").html("<img src='img/"+filename+".jpg'>").find("img").on("load",function(){
    imgW = $('#main img').width();
    adjust()
  });
  
  
  var resizeTimer = false;
   $(window).resize(function () {
    if (resizeTimer !== false) {
      clearTimeout(resizeTimer);
    }
    resizeTimer = setTimeout(function () {
    adjust();
    }, 200);

  });
  
});