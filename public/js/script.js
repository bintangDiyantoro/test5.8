$(function () {
    $('.list-group-item').on('click', function () {
        let id = $(this).val();
        $(location).attr('href', 'http://localhost:8000/students/' + id);
    });
    $('.btn-del').on('click', (e) => {
        e.preventDefault();

        const id = $('#id').val();
        const token = $('input[name=_token]').val();
        const name = $('#name').html().replace(": ", "");

        Swal.fire({
            title: 'Are you sure to delete ' + name + '?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: 'http://localhost:8000/students/' + id,
                    datatype: 'json',
                    type: 'post',
                    data: {
                        '_token': token,
                        '_method': 'DELETE',
                    },
                    success: function () {
                        $(location).attr('href', 'http://localhost:8000/deleted/' + name.replace(".", "%dot%"));
                    }
                });
            }
        })
    })
    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    const status = $('#status').val();
    if (status) {
        Swal.fire({
            type: 'success',
            title: 'Success!',
            text: status
        })
    }
});