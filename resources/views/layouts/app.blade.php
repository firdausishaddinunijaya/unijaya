<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Residence Management System">
    <meta name="keywords" content="Residence Management System">
    <meta name="author" content="Trackerhero Workforce">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Unijaya</title>
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('casa-logo.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/katex.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/monokai-sublime.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/quill.bubble.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/calendars/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/calendars/extensions/daygrid.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/calendars/extensions/timegrid.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/tether.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/shepherd-theme-default.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/calendars/fullcalendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/card-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-todo.css') }}">
    <!-- END Page Level CSS-->

    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END Custom CSS-->

    @stack('style')
</head>

<!-- <body class="vertical-layout vertical-content-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-content-menu" data-col="2-columns"> -->

<body class="vertical-layout vertical-menu-modern semi-dark-layout content-left-sidebar todo-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="semi-dark-layout">

    <!-- <div class="preloader"></div> -->

    <div id="baseAjaxModal"></div>

    @include('layouts.header')

    @include('layouts.nav')

    <style type="text/css">
        .preloader {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-image: url('app-assets/images/default.gif');
            background-repeat: no-repeat;
            background-color: #FFF;
            background-position: center;
        }

        body {

            background-color: #eee;
        }

        .pagination li:hover {
            cursor: pointer;
        }

        .btn-circle.btn-xl {
            width: 70px;
            height: 70px;
            padding: 10px 16px;
            border-radius: 35px;
            font-size: 24px;
            line-height: 1.33;
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            text-align: center;
            font-size: 12px;
            line-height: 1.42857;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0em 0em;
        }

        #name {
            text-transform: capitalize;
        }
    </style>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Home</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Home
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Column selectors with Export Options and print table -->
                @yield('content')
                <!-- Column selectors with Export Options and print table -->
            </div>
        </div>

    </div>
    @include('layouts.footer')

    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <div id="baseAjaxModal"></div>

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/shepherd.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/moment.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/calendar/extensions/daygrid.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/calendar/extensions/timegrid.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/calendar/extensions/interactions.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/app-chat.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('app-assets/js/scripts/extensions/toastr.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/app-todo.js') }}"></script>
    <!-- END: Page JS-->

    @stack('scripts')
</body>

</html>


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Authorization': "Bearer {{ config('app.gorest_api_token') }}",
            'Accept': "application/json",
            'Content-Type': "application/json"
        }
    });

    confirmDelete = (elem) => {
        return Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this data!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#fc0330',
            cancelButtonColor: '#999',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        })
    }

    confirmCreate = (elem) => {
        return Swal.fire({
            title: 'Are you sure?',
            text: 'Data will be stored in the database!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#038cfc',
            cancelButtonColor: '#999',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        })
    }

    confirmUpdate = (elem) => {
        return Swal.fire({
            title: 'Are you sure?',
            text: 'Data will be updated!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#fc0330',
            cancelButtonColor: '#999',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        })
    }

    getModalContent = (elem) => {
        $.get(elem.dataset.action, function(response) {
            $("#baseAjaxModal").html(response);
            $(baseAjaxModalContent).modal("show");
        });
    }

    processCreation = (elem, datatable, data) => {
        Swal.fire({
            title: 'Data is being processed. Please wait...',
            onOpen: function() {
                Swal.showLoading();
                $.ajax({
                    url: "https://gorest.co.in/public-api/users/",
                    data: JSON.stringify(data),
                    type: 'POST',
                    success: function(response) {
                        if (response.code == '201') {
                            Swal.fire({
                                icon: 'success',
                                title: "Successfully Insert New Data.",
                                showConfirmButton: true,
                            }).then(() => {
                                $(baseAjaxModalContent).modal("hide");
                                datatable.DataTable().ajax.reload()
                            });
                        } else if (response.code == '422') {
                            Swal.fire({
                                icon: 'error',
                                title: "Validation Error.",
                                text: response.data[0].field.charAt(0).toUpperCase() + response.data[0].field.slice(1) + " " + response.data[0].message,
                                showConfirmButton: true,
                            })
                        } else if (response.code == '404') {
                            Swal.fire({
                                icon: 'error',
                                title: "Resource Not Found.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '405') {
                            Swal.fire({
                                icon: 'error',
                                title: "Method Not Allowed.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '401') {
                            Swal.fire({
                                icon: 'error',
                                title: "Unauthenticated.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '400') {
                            Swal.fire({
                                icon: 'error',
                                title: "Bad Request.",
                                text: "Malformed JSON String.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '403') {
                            Swal.fire({
                                icon: 'error',
                                title: "User Has No Permission.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '429') {
                            Swal.fire({
                                icon: 'error',
                                title: "Too Many Requests.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '415') {
                            Swal.fire({
                                icon: 'error',
                                title: "Unsupported Media Type.",
                                showConfirmButton: true,
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Internal Server Error',
                                showConfirmButton: true,
                            })
                        }
                    },
                    fail: (response) => {
                        Swal.fire(
                            'Opps!',
                            'An error occurred, we are sorry for inconvenience.',
                            'danger'
                        )
                    }
                })
            }
        })
    }

    processUpdation = (elem, datatable, data, id) => {
        Swal.fire({
            title: 'Data is being processed. Please wait...',
            onOpen: function() {
                Swal.showLoading();
                $.ajax({
                    url: "https://gorest.co.in/public-api/users/" + id,
                    data: JSON.stringify(data),
                    type: 'PUT',
                    success: function(response) {
                        if (response.code == '200') {
                            Swal.fire({
                                icon: 'success',
                                title: "Successfully Update Data.",
                                showConfirmButton: true,
                            }).then(() => {
                                $(baseAjaxModalContent).modal("hide");
                                datatable.DataTable().ajax.reload()
                            });
                        } else if (response.code == '422') {
                            Swal.fire({
                                icon: 'error',
                                title: "Validation Error.",
                                text: response.data[0].field.charAt(0).toUpperCase() + response.data[0].field.slice(1) + " " + response.data[0].message,
                                showConfirmButton: true,
                            })
                        } else if (response.code == '404') {
                            Swal.fire({
                                icon: 'error',
                                title: "Resource Not Found.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '405') {
                            Swal.fire({
                                icon: 'error',
                                title: "Method Not Allowed.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '401') {
                            Swal.fire({
                                icon: 'error',
                                title: "Unauthenticated.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '400') {
                            Swal.fire({
                                icon: 'error',
                                title: "Bad Request.",
                                text: "Malformed JSON String.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '403') {
                            Swal.fire({
                                icon: 'error',
                                title: "User Has No Permission.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '429') {
                            Swal.fire({
                                icon: 'error',
                                title: "Too Many Requests.",
                                showConfirmButton: true,
                            })
                        } else if (response.code == '415') {
                            Swal.fire({
                                icon: 'error',
                                title: "Unsupported Media Type.",
                                showConfirmButton: true,
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Internal Server Error',
                                showConfirmButton: true,
                            })
                        }
                    },
                    fail: (response) => {
                        Swal.fire(
                            'Opps!',
                            'An error occurred, we are sorry for inconvenience.',
                            'danger'
                        )
                        failCallback()
                    }
                })
            }
        })
    }

    processDeletion = (elem, id, successCallback, failCallback) => {
        Swal.fire({
            title: 'Data is being processed. Please wait...',
            onOpen: function() {
                Swal.showLoading();
                confirmDelete(elem).then((choice) => {
                    if (choice.value) {
                        $.ajax({
                            url: "https://gorest.co.in/public-api/users/" + id,
                            type: 'DELETE',
                            success: function(response) {
                                if (response.code == '204') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Data Deleted',
                                        showConfirmButton: true,
                                    }).then(() => {
                                        $(elem).closest('table').DataTable().ajax.reload()
                                        successCallback()
                                    });
                                }
                            },
                            fail: (response) => {
                                Swal.fire(
                                    'Opps!',
                                    'An error occurred, we are sorry for inconvenience.',
                                    'danger'
                                )
                                failCallback()
                            }
                        })
                    } else {
                        Swal.fire(
                            'Canceled',
                            'Process has been canceled',
                            'info'
                        )
                    }
                })
            }
        })
    }
</script>