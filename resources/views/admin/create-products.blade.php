<!doctype html>
<html lang="en">
<head>
    <title>Orders API Docs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="p-4 pt-5">
            <a href="#" class="img logo rounded-circle mb-5"
               style="background-image: url({{asset('img/logo.jpeg')}});">
            </a>
            <ul class="list-unstyled components mb-5">
                <li class="menu-toggle">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        Orders
                    </a>
                    <ul class="collapse list-unstyled show" id="homeSubmenu">
                        <li>
                            <a href="/dashboard/orders">Get Orders</a>
                        </li>
                        <li>
                            <a href="/dashboard/orders/create">Create Order</a>
                        </li>
                        <li>
                            <a href="/dashboard/orders/update">Update Order</a>
                        </li>
                        <li>
                            <a href="/dashboard/orders/remove">Delete Order</a>
                        </li>
                        <li>
                            <router-link
                                to="/about"
                                v-slot="{ href, route, navigate, isActive, isExactActive }">

                            </router-link>
                        </li>
                    </ul>
                </li>
                <li class="menu-toggle active">
                    <a href="#productSubmenu" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle collapsed">
                        Products
                    </a>
                    <ul class="collapse list-unstyled show" id="productSubmenu">
                        <li>
                            <a href="/dashboard/products">Get Products</a>
                        </li>
                        <li class="active">
                            <a href="/dashboard/products/create">Create Product</a>
                        </li>
                        <li>
                            <a href="/dashboard/products/update">Update Product</a>
                        </li>
                        <li>
                            <a href="/dashboard/products/remove">Delete Product</a>
                        </li>
                        <li>
                            <router-link
                                to="/about"
                                v-slot="{ href, route, navigate, isActive, isExactActive }">

                            </router-link>
                        </li>
                    </ul>
                </li>
                <li class="menu-toggle">
                    <a href="#supplierSubmenu" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle collapsed">
                        Suppliers
                    </a>
                    <ul class="collapse list-unstyled" id="supplierSubmenu">
                        <li>
                            <a href="/dashboard/suppliers">Get Suppliers</a>
                        </li>
                        <li>
                            <a href="/dashboard/suppliers/create">Create Supplier</a>
                        </li>
                        <li>
                            <a href="/dashboard/suppliers/update">Update Supplier</a>
                        </li>
                        <li>
                            <a href="/dashboard/suppliers/remove">Delete Supplier</a>
                        </li>
                        <li>
                            <router-link
                                to="/about"
                                v-slot="{ href, route, navigate, isActive, isExactActive }">

                            </router-link>
                        </li>
                    </ul>
                </li>
                <li class="menu-toggle">
                    <a href="#orderDetailSubmenu" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle collapsed">
                        Order Details
                    </a>
                    <ul class="collapse list-unstyled" id="orderDetailSubmenu">
                        <li>
                            <a href="/dashboard/order_details">Get Orders Details</a>
                        </li>
                        <li class="active">
                            <a href="/dashboard/order_details/create">Create Order Detail</a>
                        </li>
                        <li>
                            <a href="/dashboard/order_details/update">Update Order Detail</a>
                        </li>
                        <li>
                            <a href="/dashboard/order_details/remove">Delete Order Detail</a>
                        </li>
                        <li>
                            <router-link
                                to="/about"
                                v-slot="{ href, route, navigate, isActive, isExactActive }">

                            </router-link>
                        </li>
                    </ul>
                </li>
                <li class="menu-toggle">
                    <a href="#supplierProductSubmenu" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle collapsed">
                        Supplier Products
                    </a>
                    <ul class="collapse list-unstyled" id="supplierProductSubmenu">
                        <li>
                            <a href="/dashboard/supplier_products">Get Supplier Products</a>
                        </li>
                        <li class="active">
                            <a href="/dashboard/supplier_products/create">Create Supplier Product</a>
                        </li>
                        <li>
                            <a href="/dashboard/supplier_products/update">Update Supplier Product</a>
                        </li>
                        <li>
                            <a href="/dashboard/supplier_products/remove">Delete Supplier Product</a>
                        </li>
                        <li>
                            <router-link
                                to="/about"
                                v-slot="{ href, route, navigate, isActive, isExactActive }">

                            </router-link>
                        </li>
                    </ul>
                </li>
                <hr>
                API KEY
                <li title="Click to Copy Your API KEY">
                    <input type="text" class="form-control" id="api_key" value="{{Session::get('accessToken')}}"
                           disabled>
                    <button class="btn btn-primary mt-1" onclick="copyAPIKey()">Copy Key</button>
                </li>
            </ul>

        </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
        <div id="app">
            <create-product token="{{Session::get('accessToken')}}"></create-product>
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
{{--<script src="{{asset('js/main.js')}}"></script>--}}
<script>
    $(document).ready(function () {
        $('.menu-toggle').on('click', function () {
            $('.menu-toggle').removeClass('active');
            $(this).addClass('active');
            $('.collapse').removeClass('show');
        });
    });

    function copyAPIKey() {
        /* Get the text field */
        var copyText = document.getElementById("api_key");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied! " + copyText.value);
    }
</script>
</body>
</html>
