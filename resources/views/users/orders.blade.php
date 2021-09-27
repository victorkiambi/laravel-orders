<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Essayzillas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />--}}

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <style>
        /*
 DEMO STYLE
*/

        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
            SIDEBAR STYLE
        ----------------------------------------------------- */

        .wrapper {
            display: flex;
            width: 100%;
        }

        #sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 999;
            background: #CD2122;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #CD2122;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #CD2122;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #CD2122;
            background: #fff;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #CD2122;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #CD2122;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #CD2122;
        }

        a.article,
        a.article:hover {
            background: #CD2122 !important;
            color: #fff !important;
        }

        /* ---------------------------------------------------
            CONTENT STYLE
        ----------------------------------------------------- */

        #content {
            width: calc(100% - 250px);
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
            position: absolute;
            top: 0;
            right: 0;
        }

        #content.active {
            width: 100%;
        }

        /* ---------------------------------------------------
            MEDIAQUERIES
        ----------------------------------------------------- */

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
            #content {
                width: 100%;
            }
            #content.active {
                width: calc(100% - 250px);
            }
            #sidebarCollapse span {
                display: none;
            }
        }
    </style>
</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Essayzilas</h3>
        </div>

        <ul class="list-unstyled components">

            <li class="active">
                <a href="{{url('/user')}}"><i class="fas fa-home"></i>  Home</a>

            </li>
            <li>
                <a href="{{url('/user/show/orders')}}"><i class="fas fa-shopping-cart"></i> Orders</a>
            </li>
            <li>
                <a href="#pageSubmenu"><i class="fas fa-user-circle"></i> Profile</a>

            </li>

        </ul>


    </nav>

    <!-- Page Content  -->
    <div id="content">
                @include('utilities.flash')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span></span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}

                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                            {{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                            {{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
                            {{--                                       onclick="event.preventDefault();--}}
                            {{--                                                     document.getElementById('logout-form').submit();">--}}
                            {{--                                        {{ __('Logout') }}--}}
                            {{--                                    </a>--}}

                            {{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                            {{--                                        @csrf--}}
                            {{--                                    </form>--}}
                            {{--                                </div>--}}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <table id="example" class="display nowrap" style="width:100%">
            <thead>
            <tr>
                <th>Id</th>
{{--                <th>Email</th>--}}
                <th>Service</th>
                <th>Level</th>
                <th>Status</th>
                <th>Words</th>
                <th>Deadline Date</th>
                <th>Deadline Time</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>

        <div id="edit-form" class="modal" aria-hidden="true">
{{--            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit-form">Edit Order</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3 needs-validation" action="{{ url("user/update") }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <input type="hidden" name="order_id" id="order_id" >
                                <div class="col-md-6">
                                    <label for="select-pages" class="form-label">Service</label>
                                    <select class="form-select" aria-label="Default select example" id="type" name="type">
                                        @foreach($services as $service)
                                            <option value="{{ $service->label }}" >{{ $service->label}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="select-pages" class="form-label">Pages</label>
                                    <select class="form-select" aria-label="Default select example" id="pages" name="pages">
                                        <option selected>1 Page 275 words</option>

                                        <option value="2 Pages 550 words">2 Pages 550 words</option>
                                        <option value="3 Pages 825 words">3 Pages 825 words</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Level</label>
                                    <select class="form-select" aria-label="Default select example" id="level" name="level">
                                        @foreach($levels as $level)
                                            <option value="{{ $level->level }}" >{{ $level->level}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Deadline</label>
                                    <input type="date" class="form-control" id="deadline" name="deadline" required >

                                </div>
                                <div class="col-md-12">
                                    <label for="formFile" class="form-label">Upload File</label>
                                    <input class="form-control" type="file" name="file" >
                                </div>
                                <div class="col-md-12">
                                    <label for="exampleFormControlTextarea1" class="form-label">Instructions</label>
                                    <textarea class="form-control" id="instructions" name="instructions" rows="3"></textarea>

                                </div>

                                {{--                                <div class="col-md-2">--}}
                                {{--                                    <label for="inputZip" class="form-label">Zip</label>--}}
                                {{--                                    <input type="text" class="form-control" id="inputZip">--}}
                                {{--                                </div>--}}
                                {{--                                <div class="col-12">--}}
                                {{--                                    <div class="form-check">--}}
                                {{--                                        <input class="form-check-input" type="checkbox" id="gridCheck">--}}
                                {{--                                        <label class="form-check-label" for="gridCheck">--}}
                                {{--                                            Check me out--}}
                                {{--                                        </label>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger">Submit Order</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                </div>
                            </form>
                        </div>
{{--                        <div class="modal-footer">--}}
{{--                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                            <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery CDN  -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script><!-- Popper.JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script><!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>--}}

<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let url = window.location.href;
        let table = $('#example').DataTable( {
            ajax: {
                processing: true,
                serverSide: true,
                url: url,
                method: "GET",
            },
            columns: [
                { data: "id", name:  "id"},
                // { data: "user_email", name: "user_id" },
                { data: "order_type", name: "order_type"},
                { data: "order_level", name: "order_level" },
                {data: "order_status", name:"order_status" },
                { data: "order_words", name: "order_pages" },
                { data: "order_deadline_date", name: "order_deadline_date" },
                { data: "order_deadline_time", name: "order_deadline_time" },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

        // $("#edit-form").modal();
        $('body').on('click', '.edit-product', function () {
            let orderId =  $(this).data('id');
            let url = window.location.origin;
            $.get(url+'/user/edit/'+ orderId , function (data) {
                // $('#title-error').hide();
                // $('#product_code-error').hide();
                // $('#description-error').hide();
                // $('#productCrudModal').html("Edit Product");
                $('#btn-save').val("edit-product");
                $('#edit-form').modal('show');
                $('#order_id').val(data.id);
                $('#instructions').val(data.order_instructions);
                $('#deadline').val(data.order_deadline);
                $('#level').val(data.order_level);
                $('#pages').val(data.order_pages);
                $('#type').val(data.order_type);

                console.log(data)
            })
        });
        $('body').on('click', '.delete-order', function () {

            let orderId =  $(this).data('id');
            let url = window.location.origin;
            let newurl = window.location.href;
            confirm("Are You sure want to delete !");

            $.ajax({
                type: "DELETE",
                data: { "_token": "{{ csrf_token() }}"},
                url: url+"/user/delete"+'/'+orderId,
                success: function (data) {
                    table.ajax.url(newurl).load();

                    console.log(data)
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });

        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
</body>

</html>
