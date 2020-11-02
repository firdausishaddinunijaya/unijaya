<script type="text/javascript">
    btnCreate = (elem) => {
        confirmCreate(elem).then((result) => {
            let data = {
                'name': $("#name").val(),
                'email': $("#email").val(),
                'gender': $("#gender").val(),
                'status': $("#status").val()
            }

            if (result.value) {
                let datatable = $('#deviceDatatable')
                processCreation(elem, datatable, data)
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