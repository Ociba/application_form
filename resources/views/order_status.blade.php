<!-- resources/views/order/status.blade.php -->


<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assets/images/favicon/1.png')}}" type="image/x-icon">
    <title>Visa Application Form</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
        <link href="{{ asset('fontawesome-free-6.6.0-web/css/all.min.css')}}" rel="stylesheet"> 
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css')}}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bulk-style.css')}}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    @livewireStyles
    <link href="{{ asset('modal/css/tailwind.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
   
    <!-- Header End -->

    

    <div class="container">
        <h2>Transaction Status</h2>
        
        @if (isset($transactionStatus) && $transactionStatus)
    <ul class="list-group">
        <li class="list-group-item"><strong>Payment Method:</strong> {{ $transactionStatus['payment_method'] }}</li>
        <li class="list-group-item"><strong>Amount:</strong> {{ $transactionStatus['amount'] }}</li>
        <li class="list-group-item"><strong>Created Date:</strong> {{ $transactionStatus['created_date'] }}</li>
        <li class="list-group-item"><strong>Confirmation Code:</strong> {{ $transactionStatus['confirmation_code'] }}</li>
        <li class="list-group-item"><strong>Payment Status:</strong> {{ $transactionStatus['payment_status_description'] }}</li>
        <!-- Add other fields here -->
    </ul>
@elseif (isset($error))
    <p class="alert alert-danger">{{ $error }}</p>
@else
    <p class="alert alert-danger">Transaction status is not available.</p>
@endif

    </div>

   
    <!-- Footer Section Start -->
    <footer class="section-t-space">
        <div class="container-fluid-lg">
            <div class="sub-footer section-small-space">
                <div class="reserve">
                    <h6 class="text-content">©2022  All rights reserved</h6>
                </div>

                <div class="payment">
                    <img src="{{ asset('assets/images/payment/1.png')}}" class="blur-up lazyload" alt="">
                </div>

                <div class="social-link">
                    <h6 class="text-content">Stay connected :</h6>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://in.pinterest.com/" target="_blank">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

   

    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>

    <!-- jquery ui-->
    <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>

    <!-- Lord-icon Js -->
    <script src="{{ asset('assets/js/lusqsztk.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap-notify.min.js')}}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('assets/js/feather/feather.min.js')}}"></script>
    <script src="{{ asset('assets/js/feather/feather-icon.js')}}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('assets/js/lazysizes.min.js')}}"></script>

    <!-- Delivery Option js -->
    <script src="{{ asset('assets/js/delivery-option.js')}}"></script>

    <!-- Slick js-->
    <script src="{{ asset('assets/js/slick/slick.js')}}"></script>
    <script src="{{ asset('assets/js/slick/custom_slick.js')}}"></script>

    <!-- Quantity js -->
    <script src="{{ asset('assets/js/quantity.js')}}"></script>

    <!-- script js -->
    <script src="{{ asset('assets/js/script.js')}}"></script>

    <!-- theme setting js -->
    <script src="{{ asset('assets/js/theme-setting.js')}}"></script>

    @livewireScripts
    @livewire('wire-elements-modal')
    <script defer src="{{ asset('modal/css/cdn3.js')}}"></script>
    
 
</body>

</html>
