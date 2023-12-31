$('.login_button').on('click', function() {

    $('#signupModal').modal('hide');
    $('#loginModal').modal('show');
});
$('.register_button').on('click', function() {

    $('#loginModal').modal('hide');
    $('#signupModal').modal(show);
});


$(document).ready(function() {

    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    $('#ajax-crud-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('ajax-crud-datatable') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'address', name: 'address' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action', orderable: false },
        ],
        order: [
            [0, 'desc']
        ]
    });

});

function signup() {

    $('#signupForm').trigger("reset");
    $('#signupModal').html("Register Form");
    $('#signup-modal').modal('show');
    $('#id').val('');

}

function login() {

    $('#loginForm').trigger("reset");
    $('#loginModal').html("Login Form");
    $('#login-modal').modal('show');
    $('#id').val('');

}



function editFunc(id) {

    $.ajax({
        type: "POST",
        url: "{{ url('edit-company') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res) {
            $('#CompanyModal').html("Edit Company");
            $('#company-modal').modal('show');
            $('#id').val(res.id);
            $('#name').val(res.name);
            $('#address').val(res.address);
            $('#email').val(res.email);
        }
    });
}

function deleteFunc(id) {
    if (confirm("Delete Record?") == true) {
        var id = id;

        // ajax
        $.ajax({
            type: "POST",
            url: "{{ url('delete-company') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res) {

                var oTable = $('#ajax-crud-datatable').dataTable();
                oTable.fnDraw(false);
            }
        });
    }
}

$('#CompanyForm').submit(function(e) {

    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        type: 'POST',
        url: "{{ url('store-company')}}",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: (data) => {
            $("#company-modal").modal('hide');
            var oTable = $('#ajax-crud-datatable').dataTable();
            oTable.fnDraw(false);
            $("#btn-save").html('Submit');
            $("#btn-save").attr("disabled", false);
        },
        error: function(data) {
            console.log(data);
        }
    });
});