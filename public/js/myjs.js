$(document).ready(function(){
    // alert('ok');
    $('.btnAdd').on('click',function(){
        var btn=$(this);
        var id=btn.data('id');
        // alert(id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/AddItem",
            data: { productID: id, quantity: 1 },
            type: "POST",
            dataType: "Json",
            success: function (data) {
                alert("Thêm thành công");
                $('"#' + id + '"').css("display", "block");

                
            },
            error: function (err) {
                alert("Có lỗi xảy ra " + err.statusText);
            }
        });
    })
})