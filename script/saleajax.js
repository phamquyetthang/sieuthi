var sale={}


$("#thanhtoan").click(
     sale.fetchBill= function(){
        var ipmsp=$("#ipmsp").val();
        var ipsl=$("#ipsl").val();
        $.ajax({
            url : 'model/saleajax.php',
            type : "post",
            dataType:"text",
            data : { method: 'adddb',
            ipmsp: ipmsp,
            ipsl: ipsl,
            },
            success : function (result){
                $('#saleajax').html(result);
            }
        });
    }
); 
$("#taohoadon").click(
    function throwBill(){
        var ipmsp=$("#ipmsp").val();
        var ipsl=$("#ipsl").val();
        var tkd=$("#tkd").val();
            $.ajax({
                url: 'model/saleajax.php',
                type: 'post',
                data: { method: 'check',
                    ipmsp: ipmsp,
                    ipsl: ipsl,
                    tkd:tkd,
                    },
                    success : function (result){
                        $('#saleajax').html(result);
                    }
            });
        console.log(ipmsp);
    }
);
// chat.entry= $('.chat .entry');
// chat.entry.bind('keydown', function(e){
//     if(e.keyCode === 13 && e.shiftKey=== false){
//         //throw message
//         chat.throwMessage($(this).val());
//         e.preventDefault();
//     }
// });

// sale.interval = setInterval(fetchBill, 2000);