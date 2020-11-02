<script type="text/javascript">
    $(document).ready(() => {
        let baseUrl = "https://gorest.co.in/public-api/users/{{ $id }}";

        $.get(baseUrl, function(response) {
            $("#name").val(response.data.name)
            $("#email").val(response.data.email)
            $("#gender").val(response.data.gender)
            $("#status").val(response.data.status)
        });
    });

    btnUpdate = (elem) => {
        confirmUpdate(elem).then((result) => {
            let data = {
                'name': $("#name").val(),
                'email': $("#email").val(),
                'gender': $("#gender").val(),
                'status': $("#status").val()
            }

            if (result.value) {
                let datatable = $('#userDatatable')
                processUpdation(elem, datatable, data, "{{ $id }}")
            } else {
                Swal.fire(
                    'Canceled',
                    'Process has been canceled',
                    'info'
                )
            }
        })
    }
</script>