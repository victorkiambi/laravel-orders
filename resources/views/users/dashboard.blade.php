<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Essayzillas</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css" integrity="sha512-LT9fy1J8pE4Cy6ijbg96UkExgOjCqcxAC7xsnv+mLJxSvftGVmmc236jlPTZXPcBRQcVOWoK1IJhb1dAjtb4lQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">--}}
    <!-- Our Custom CSS -->
    <!-- Scrollbar Custom CSS -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <style>

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
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
            margin-bottom: 10px;
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
        .card{
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }
    </style>
</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Essayzillas</h3>
        </div>

        <ul class="list-unstyled components">

            <li class="active">
                <a href="{{url('/user')}}"><i class="fas fa-home"></i>  Home</a>

            </li>
            <li>
                <a href="{{url('/user/show/orders')}}"><i class="fas fa-shopping-cart"></i> Orders</a>
            </li>
            <li>
                <a href="{{url('/user/orders/pay')}}"><i class="fas fa-money-bill-wave"></i></i> Payment</a>

            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">


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
                    <ul class="nav navbar-nav ml-auto float-right">
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

        @if (Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ Session::get('success') }}</li>
                </ul>
            </div>
        @endif
        <h4>Create New Order</h4>
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" action="{{ url("user/create/order") }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="col-md-6">
                                <label for="select-pages" class="form-label">Service</label>
                                <select class="form-select" aria-label="Default select example" name="type">
                                    @foreach($services as $service)
                                        <option value="{{ $service->label }}" >{{ $service->label}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="select-pages" class="form-label">Pages</label>
                                <div class="pages" style="display: flex;align-items: stretch; position: relative">
                                    <button type="button" id="decrement" class="btn btn-light">-</button>
                                    <input  id="pages" type="number" class="form-control" name="pages" value="1"
                                            readonly required style="text-align: center">
                                    <button type="button" id="increment" class="btn btn-light">+</button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="select-pages" class="form-label">Words</label>
                                <input  id="words" type="text" class="form-control" name="words"
                                        readonly value="" required >
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Level</label>
                                <select class="form-select" aria-label="Default select example" name="level">
                                    @foreach($levels as $level)
                                        <option value="{{ $level->level }}" >{{ $level->level}}</option>
                                    @endforeach
                                </select>
                            </div>
                                <div class="col-md-3">
                                    <label for="date" class="form-label">Deadline</label>
                                    <input  id="date" type="date" class="form-control" name="deadline" required >
                                </div>
                                <div class="col-md-3">
                                    <label for="timepicker" class="form-label">Time</label>
                                    <input  id="" type="time" class="form-control" name="time" value="21:00" required >
                                </div>

                            <div class="col-6">
                                <label for="formFile" class="form-label">Upload File</label>
                                <input class="form-control" type="file" name="file" >
                            </div>
                            <div class="col-6">
                                <label for="format" class="form-label">Format</label>
                                <select class="form-select" aria-label="Default select example" name="format">
                                    <option selected>APA</option>
                                    <option value="MLA">MLA</option>
                                    <option value="CHICAGO">CHICAGO</option>
                            </select>
                            </div>
                            <div class="col-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Instructions</label>
                                <textarea class="form-control" name="instructions" rows="3"></textarea>
                            </div>
                            <div class="col-6">
                                <label for="total" class="form-label">Grand Total</label>
                                <input class="form-control is-valid" type="text" id="total"
                                       name="total" readonly value="$12.00" >

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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset("images/paypal.png")}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pay with Paypal</h5>
                        <p class="card-text">Making payments is easy via paypal</p>
{{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script><!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js" integrity="sha512-s5u/JBtkPg+Ff2WEr49/cJsod95UgLHbC00N/GglqdQuLnYhALncz8ZHiW/LxDRGduijLKzeYb7Aal9h3codZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/i18n/jquery-ui-timepicker-addon-i18n.min.js" integrity="sha512-t2ZIJH81Sh+SWSb4BuA9en4j6fwja+sYOEXbqoepD9lJ+efUGD94gSWqdmgQchGmPez2ojECq4Fm6bKMUAzIiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#timepicker').timepicker({
            controlType: 'select',
            oneLine: true,
            timeFormat: 'hh:mm tt'
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

        let pages = $('#pages').val();


        let words = pages * 275;
        $('#words').val(words + " words");

        $('#increment').on('click', function (){
         let oldValue = $('#pages').val();
         let newValue = parseFloat(oldValue) + 1;
         let newWords = newValue * 275;

         $('#words').val(newWords + " words");
         $('#pages').val(newValue);

         let grandTotal = newValue * 12;
         $('#total').val(`$${grandTotal}.00`);
        })

        $('#pages').on('keyup',function(e){

            let oldValue = $('#pages').val();
            console.log('this oldvalue' + oldValue)
            let newValue = parseFloat(oldValue) + 1;
            let newWords = newValue * 275;
            $('#words').val(newWords + " words");
            $('#pages').val(newValue);

            let grandTotal = newValue * 12.00;
            $('#total').val(`$${grandTotal}.00`)
        });
        $('#decrement').on('click',function(e){
            e.preventDefault();
            let quantity = parseInt($('#pages').val());

            if (quantity <= 0) {
                $('#pages').val(0);
                $('#words').val(0 + " words");
                $('#total').val(`$0.00`)
            }
            else {
                let oldValue = $('#pages').val();

                let newValue = parseFloat(oldValue) - 1;

                let newWords = newValue * 275;
                $('#words').val(newWords + " words");
                $('#pages').val(newValue);

                let grandTotal = newValue * 12.00;
                $('#total').val(`$${grandTotal}.00`)
            }


        });
    });
</script>
</body>
</html>
