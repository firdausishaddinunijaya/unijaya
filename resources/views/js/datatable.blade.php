<script type="text/javascript">
    let baseUrl = "{{ route('device.index') }}";
    let createUrl = "{{ route('device.create') }}";

    $(document).ready(function () {
        $('#deviceDatatable').DataTable({
            // 'scrollX': true,
            // 'scrollY': '500px',
            'scrollCollapse': true,
            'pagingType': 'full_numbers',
            'serverSide': true,
            'processing': true,
            'ordering': false,
            dom: '<"row"<"col-md-12"B>><"row"<"col-md-3"l><"col-md-6"><"col-md-3"f>>t<"row"<"col-md-6"i><"col-md-6"p>>',
            buttons: [{
                    text: 'Create',
                    attr:  {
                        "data-action": createUrl,
                        "onClick": "getModalContent(this)",
                    }
                },
                'excel', 'pdf', 'colvis'
            ],
            ajax: {
                url: baseUrl,
                method: 'GET',
                dataType: 'json',
                dataSrc: "data",
            },
            columns: [
                { "data" : "created_at" },
                { "data" : "deleted_at" },
                { "data" : "device_name" },
                { "data" : "id" },
                { "data" : "lat" },
                { "data" : "lng" },
                { "data" : "phone_number" },
                { "data" : "updated_at" },

            ],
            columnDefs: [{
                "targets": 8,
                "data": 'id',
                "render": function(id, type, full, meta) {
                    let showUrl = "{{ route('device.show', 'data-id') }}";
                    let editUrl = "{{ route('device.edit', 'data-id') }}";
                    let deleteUrl = "{{ route('device.destroy', 'data-id') }}";

                    showUrl = showUrl.replace('data-id', id);
                    editUrl = editUrl.replace('data-id', id);
                    deleteUrl = deleteUrl.replace('data-id', id);

                    return '<div class="form-group">' +
                    '<div class="btn-group" role="group">' +
                    '<button type="button" data-action="' + showUrl + '" class="btn btn-icon btn-outline-info mt-1" onClick="getModalContent(this)"><i class="fa fa-search"></i></button>' +
                    '<button type="button" data-action="' + editUrl + '" class="btn btn-icon btn-outline-primary mt-1" onClick="getModalContent(this)"><i class="fa fa-edit"></i></button>' +
                    '<button type="button" data-action="' + deleteUrl + '" class="btn btn-icon btn-outline-danger mt-1" onClick="btnDelete(this)"><i class="fa fa-trash"></i></button>' +
                    '</div>' +
                    '</div>'
                }
            }]
        });

        btnDelete = (elem) => {
            processDeletion(elem)
        }

    });
</script>
