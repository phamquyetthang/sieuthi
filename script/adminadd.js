$("#themnhanvien").click(
    function themnhanvien(){
        var tenuser=$("#tenuser").val();
        var tennhanvien=$('#tennhanvien').val();
        var sdtuser=$("#sdtuser").val();
        var startuser=$("#startuser").val();
        var posiuser=$("#posiuser").val();
        var pwuser=$('#pwuser').val();
        var emailuser=$("#emailuser").val();
        var finuser=$("#finuser").val();
        var salauser=$("#salauser").val();
        $.ajax({
            url: 'model/addnhanvien.php',
            type: 'post',
            data: {
                method: 'addnv',
                tenuser: tenuser,
                tennhanvien: tennhanvien,
                sdtuser: sdtuser,
                startuser: startuser,
                posiuser: posiuser,
                pwuser: pwuser,
                emailuser: emailuser,
                finuser: finuser,
                salauser: salauser,
            },
            success : function (result){
                $('#inputemp').html(result);
            }
        });
        console.log("themnhanvien");
    }
);
$("#themsanpham").click(
    function themnhanvien(){
        var tensp=$("#tensp").val();
        var giabansp=$('#giabansp').val();
        var giamgiasp=$("#giamgiasp").val();
        var motasp=$("#motasp").val();
        var amhsp=$("#amhsp").val();

        $.ajax({
            url: 'model/addsanpham.php',
            type: 'post',
            data: {
                method: 'addsp',
                tensp: tensp,
                giabansp: giabansp,
                giamgiasp: giamgiasp,
                motasp: motasp,
                amhsp: amhsp,
            },
            success : function (result){
                $('#inputpro').html(result);
            }
        });
        console.log("themsanpham");
    }
);