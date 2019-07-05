jQuery(function ($) {
    //QRコード
    $(".qr").each(function(){
        console.log($(this));
        var file = $(this).attr("href");
        $(this).before("<img src='qr/make_qr.php?url="+ file +"'>")
    })
  
});

