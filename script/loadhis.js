var loadhis={}

loadhis.loadHissale =function(){
    $.ajax({
        url: 'model/loadhissale.php',
        type: 'post',
        data: { method: 'fetch'},
        success: function(data){
            $('.his_s_ajax').html(data);
        }
    });
    console.log("loadhis");
}
loadhis.loadHisre =function(){
    $.ajax({
        url: 'model/loadhisre.php',
        type: 'post',
        data: { method: 'fetch'},
        success: function(data){
            $('.his_r_ajax').html(data);
        }
    });
    console.log("loadhis");
}


loadhis.interval = setInterval(loadhis.loadHissale, 5000);
loadhis.loadHissale();

loadhis.interval = setInterval(loadhis.loadHisre, 5000);
loadhis.loadHisre();