$(document).ready(function (){

    var CSRF_TOKEN = $('[name="csrf-token"]').attr('content');

    $('.delete').click(function () {
      let c = confirm('deleted')
        if(c){
            $url = $(this).next('[name=url]').val();
            $_id = $(this).prev('[name=_id]').val();

            $.ajax({
                url: '/backend/' + $url,
                type: 'POST',
                context: {element: $(this)},
                data: {_token: CSRF_TOKEN, id: $_id},
                dataType: 'JSON',
                success: function (data) {
                    if (data) {
                        alert("ays menun uni chalder duq cheq akox jnjel ayn ete uzum eq jnjel jnjeq childery naxapes")
                        // swal.fire(_swal.delete).then((result) => {
                        //     if (result.value) {
                        //
                        //         if ($('[name=removed]').val() == 0)
                        //             $('[name=removed]').val('1');
                        //         this.element.parent().submit();
                        //     }
                        // });
                    } else {
                        this.element.parent().submit();
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    })

    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('.nav-sidebar a').filter(function() {
        return this.href == url;
    }).addClass('active').parent().addClass('active');


});
