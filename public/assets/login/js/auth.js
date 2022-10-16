$(document).ready(function () {
    $('#formLogin').submit(function (e) {
        let email = $('#email');
        let password = $('#password');
        if (!email) {
            toastr.error('Email harus diisi!', 'ERROR')
            return false
        }
        if (!password) {
            toastr.error('Password harus diisi!', 'ERROR')
            return false
        }

        e.preventDefault()

        var formData = new FormData($("#formLogin")[0]);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: $('#formLogin').attr('action'),
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function () {
                $('#btnLogin').prop("disabled", true)
                $('#btnLogin').html("Harap tunggu ...")
            },
            success: function (data) {
                if (!data.success) {
                    toastr.error(data.message, 'ERROR')
                    $('#btnLogin').prop("disabled", false)
                    $('#btnLogin').html("MASUK")
                    return false
                } else {
                    var role = data.user.id_role
                    toastr.success('Login Berhasil', 'Success')
                    console.log(role);
                    if (role == 1) {
                        window.location.href = 'administrator'
                    } else if (role == 2) {
                        window.location.href = 'lecturer'
                    } else {
                        window.location.href = 'student'
                    }
                }
            }
        })
    })
})
