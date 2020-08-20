<script>
    function RenderCart(response){
        $('#chang-item-cart').empty;
        $('#chang-item-cart').html(response);
        var quanty = $('#getQuanty').val();
        $('#Quanty').html(quanty);
        // location.reload();
    }

    function AddCart(id){
        $.ajax({
            type: "GET",
            url: "add-cart/"+id,
            success: function (response) {
                RenderCart(response);
                alertify.set('notifier','position', 'bottom-left');
                alertify.success('Đã thêm vào giỏ hàng');
            }
        });
    }

    $("#chang-item-cart").on("click",".ti-close", function () {
        $.ajax({
            type: "GET",
            url: "delete-cart/"+$(this).data("id"),
            success: function (response) {
                RenderCart(response);
                alertify.set('notifier','position', 'bottom-left');
                alertify.success('Đã xóa khỏi giỏ hàng');
            }
        });
    })

</script>
