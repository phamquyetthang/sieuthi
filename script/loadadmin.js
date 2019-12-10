var loadadmin={}

loadadmin.loadNv =function(){
    $.ajax({
        url: 'model/addshowajax.php',
        type: 'post',
        data: { method: 'fetch'},
        success: function(data){
            $('.shownvajax').html(data);
        }
    });
    console.log("loadhis");
}
loadadmin.loadSp =function(){
    $.ajax({
        url: 'model/adshownv.php',
        type: 'post',
        data: { method: 'fetch'},
        success: function(data){
            $('.showspajax').html(data);
        }
    });
    console.log("loadhis");
}


loadadmin.interval = setInterval(loadadmin.loadNv, 5000);
loadadmin.loadNv();

loadadmin.interval = setInterval(loadadmin.loadSp, 5000);
loadadmin.loadSp();