$(function(){
    // ServletActionContext.getResponse().setHeader("Access-Control-Allow-Origin", "*");
    $lunboImgWidth=$('body').width();
    $('.lunbo-li img').height($lunboImgWidth*0.4+'px');
    console.log( $('.lunbo-li img').height());
    
});
