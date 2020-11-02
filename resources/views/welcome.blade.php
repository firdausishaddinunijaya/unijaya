@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List of Users</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    @include('layouts.alert')
                    <table id="userDatatable" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

<script type="text/javascript">
    $(document).ready(function () {
        $('#userDatatable').DataTable({
            'scrollCollapse': true,
            'pagingType': 'full_numbers',
            'serverSide': true,
            'processing': true,
            'ordering': false,
            dom: '<"row"<"col-md-12"B>><"row"<"col-md-3"l><"col-md-6"><"col-md-3"f>>t<"row"<"col-md-6"i><"col-md-6"p>>',
            buttons: [{
                    text: 'Create',
                    attr:  {
                        "data-action": '{{ route("users.create") }}',
                        "onClick": "getModalContent(this)",
                    }
                },
                'excel', 'pdf'
            ],
            ajax: {
                url: 'https://gorest.co.in/public-api/users',
                method: 'GET',
                dataType: 'json',
                dataSrc: "data",
                headers: { 
                    'Authorization': "{{ config('gorest_api_token') }}",
                    'Accept': "application/json",
                    'Content-Type': "application/json"
                },
            },
            columns: [
                { "data" : "name" },
                { "data" : "email" }
            ],
            columnDefs: [{
                "targets": 2,
                "data": 'id',
                "render": function(id, type, full, meta) {
                    let showUrl = "{{ route('users.show', 'data-id') }}";
                    let editUrl = "{{ route('users.edit', 'data-id') }}";
                    let deleteUrl = "{{ route('users.destroy', 'data-id') }}";

                    showUrl = showUrl.replace('data-id', id);
                    editUrl = editUrl.replace('data-id', id);
                    deleteUrl = deleteUrl.replace('data-id', id);

                    return '<div class="form-group">' +
                    '<div class="btn-group" role="group">' +
                    '<button type="button" data-action="' + showUrl + '" class="btn btn-icon btn-outline-info mt-1" onClick="getModalContent(this)"><i class="fa fa-search"></i></button>' +
                    '<button type="button" data-action="' + editUrl + '" class="btn btn-icon btn-outline-warning mt-1" onClick="getModalContent(this)"><i class="fa fa-edit"></i></button>' +
                    '<button type="button" data-action="' + deleteUrl + '" class="btn btn-icon btn-outline-danger mt-1" onClick="btnDelete(this, ' + id + ')"><i class="fa fa-trash"></i></button>' +
                    '</div>' +
                    '</div>'
                }
            }]
        });

        btnDelete = (elem, id) => {
            processDeletion(elem, id)
        }

    });
</script>

@endpush