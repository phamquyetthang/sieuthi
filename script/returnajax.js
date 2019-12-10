$("#kiemtradh").click(
    function returnhh(){
        var madonhang=$("#madonhang").val();
        var sldonhang=$("#sldonhang").val();
        $.ajax({
            url: 'model/returnajax.php',
            type: 'post',
            data: {
                reme: 'checkbill',
                madonhang: madonhang,
                sldonhang: sldonhang,
            },
            success : function (result){
                $('#infohoantra').html(result);
            }
        });
        console.log("check trả hàng");
    }
);

$("#thuchienrt").click(
    function returnhh(){
        var madonhang=$("#madonhang").val();
        var sldonhang=$('#sldonhang').val();
        var lydo=$("#lydotra").val();
        $.ajax({
            url: 'model/returnajax.php',
            type: 'post',
            data: {
                reme: 'addreturn',
                madonhang: madonhang,
                sldonhang: sldonhang,
                lydo: lydo,
            },
            success : function (result){
                $('#infohoantra').html(result);
            }
        });
        console.log("đã trả trả hàng");
    }
);



function openReturn(tabreturn){
    var x = document.getElementsByClassName("returntabcon");
    for(var i=0; i<x.length; i++){
        x[i].style.display ="none";
    }
    console.log("opreturn");
    document.getElementById(tabreturn).style.display="block";
 }
