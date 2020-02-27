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
                <li class="active">
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
                        <li class="active">
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
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
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
            <remove-order token="{{Session::get('accessToken')}}"></remove-order>
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
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
