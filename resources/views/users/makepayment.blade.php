<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Essayzillas</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
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
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }

        /* Media query for desktop viewport */
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 250px;
            }
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
                <a href="{{url('/user/orders/pay')}}"><i class="fas fa-user-circle"></i> Payment</a>
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
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Order {{$order->id}}</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Item</th>
                                <th scope="col">Page(s)</th>
                                <th scope="col">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{$order->id}}</th>
                                <td>{{$order->order_type}}</td>
                                <td>{{$order->order_pages}}</td>
                                <td>{{$order->order_total}}</td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="float-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Pay
                            </button>
                            <a href="#" class="btn btn-danger delete-order" style="">Delete</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="font-size: small">
                    <div class="card-header">
                        <h5 class="card-title">Order Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4">Order Status</label>
                            <div class="col">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$order->order_status}}"
                                       style="padding-top: 0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4">Order Deadline</label>
                            <div class="col">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$order->order_deadline_date}}"
                                       style="padding-top: 0">
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4">Client Name</label>
                            <div class="col">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$order->user_email}}"
                                       style="padding-top: 0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4">Service</label>
                            <div class="col">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$order->order_type}}"
                                       style="padding-top: 0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pay with Paypal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{{ url("postPaymentWithpaypal") }}" >
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4">Order No.</label>
                            <div class="col">
                                <input type="text" readonly class="form-control-plaintext"
                                       id="orderid"
                                       name="orderid"
                                       value="{{$order->id}}"
                                   style="padding-top: 0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4">Service</label>
                            <div class="col">
                                <input type="text" readonly class="form-control-plaintext"
                                       id="service"
                                       name="service"
                                       value="{{$order->order_type}}"
                                   style="padding-top: 0">
                            </div>
                        </div>
                    <hr>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4">Pages</label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext"
                                   id="pages"
                                   name="pages"
                                   value="{{$order->order_pages}}"
                                   style="padding-top: 0">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4">Order Status</label>
                        <div class="col">
                            <input type="text" readonly class="form-control-plaintext"
                                   id="status"
                                   name="status"
                                   value="{{$order->order_status}}"
                                   style="padding-top: 0">
                        </div>
                    </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4">Total</label>
                            <div class="col">
                                <input type="text" readonly class="form-control-plaintext"
                                       id="total"
                                       name="total"
                                       value="{{$order->order_total}}"
                                       style="padding-top: 0">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div id="paypal-button-container"></div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script><!-- Popper.JS -->

<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_LIVE_CLIENT_ID') }}&currency=USD"></script>
<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({
        // Call your server to set up the transaction
        createOrder: function(data, actions) {
            return fetch('/api/paypal/order/create', {
                method: 'POST',
                body:JSON.stringify({
                    'course_id': "{{$order->id}}",
                    'user_id' : "{{auth()->user()->id}}",
                    'amount' : 0.01
                })
            }).then(function(res) {
                //res.json();
                return res.json();
            }).then(function(orderData) {
                console.log("this order data ",orderData);
                return orderData.id;
            });
        },

        // Call your server to finalize the transaction
        onApprove: function(data, actions) {
            return fetch('/api/paypal/order/capture' , {
                method: 'POST',
                body :JSON.stringify({
                    orderId : data.orderID,
                    payment_gateway_id: "{{$order->id}}",
                    user_id: "{{ auth()->user()->id }}",
                })
            }).then(function(res) {
                console.log("response is:" +res);
                return res.json();
            }).then(function(orderData) {

                var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                console.log("error"+orderData)

                if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                    return actions.restart(); // Recoverable state, per:
                    // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                }

                if (errorDetail) {
                    var msg = 'Sorry, your transaction could not be processed.';
                    if (errorDetail.description) msg += '\n\n' + errorDetail.description;
                    if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
                    return alert(msg); // Show a failure message (try to avoid alerts in production environments)
                }

                // Successful capture! For demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                // Replace the above to show a success message within this page, e.g.
                const element = document.getElementById('paypal-button-container');
                element.innerHTML = '';
                element.innerHTML = '<h3>Thank you for your payment!</h3>';

            });
        }

    }).render('#paypal-button-container');
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        let url = window.location.href;

        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
        $('body').on('click', '.delete-order', function () {

            let orderId =  {{$order->id}};
            console.log("my id"+orderId)
            let url = window.location.origin;
            let newurl = window.location.href;
            confirm("Are You sure want to delete !");

            $.ajax({
                type: "DELETE",
                data: { "_token": "{{ csrf_token() }}"},
                url: url+"/user/delete"+'/'+orderId,
                success: function (data) {
                    window.location.href = url +'/user/show/orders';

                    console.log(data)
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script>
</body>

</html>
