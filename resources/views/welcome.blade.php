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

    

    <!-- Checkout section Start -->
            @livewire('start-application')
    <!-- Checkout section End -->

    {{--<div class="container">
        <h2>Submit Order Request</h2>
        <form method="POST" action="{{ route('submit.order') }}">
            @csrf

            <!-- Order ID -->
            <div class="form-group">
                <label for="id">Order ID</label>
                <input type="text" name="id" id="id" class="form-control" required>
            </div>

            <!-- Currency -->
            <div class="form-group">
                <label for="currency">Currency</label>
                <select name="currency" id="currency" class="form-control" required>
                    <option value="KES">KES</option>
                    <option value="USD">USD</option>
                    <!-- Add other currencies as needed -->
                </select>
            </div>

            <!-- Amount -->
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control" required step="0.01">
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
            </div>

            <!-- Callback URL -->
            <div class="form-group">
                <label for="callback_url">Callback URL</label>
                <input type="url" name="callback_url" id="callback_url" class="form-control" required>
            </div>

            <!-- Redirect Mode -->
            <div class="form-group">
                <label for="redirect_mode">Redirect Mode</label>
                <select name="redirect_mode" id="redirect_mode" class="form-control">
                    <option value="POST">POST</option>
                    <option value="GET">GET</option>
                </select>
            </div>

            <!-- Notification ID -->
            <div class="form-group">
                <label for="notification_id">Notification ID</label>
                <input type="text" name="notification_id" id="notification_id" class="form-control" value="{{ old('notification_id', $ipnId) }}" required>
            </div>

            <!-- Branch -->
            <div class="form-group">
                <label for="branch">Branch</label>
                <input type="text" name="branch" id="branch" class="form-control">
            </div>

            <!-- Billing Address -->
            <h4>Billing Address</h4>

            <div class="form-group">
                <label for="billing_address.email_address">Email Address</label>
                <input type="email" name="billing_address[email_address]" id="billing_address.email_address" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="billing_address.phone_number">Phone Number</label>
                <input type="tel" name="billing_address[phone_number]" id="billing_address.phone_number" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="billing_address.country_code">Country Code</label>
                <input type="text" name="billing_address[country_code]" id="billing_address.country_code" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="billing_address.first_name">First Name</label>
                <input type="text" name="billing_address[first_name]" id="billing_address.first_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="billing_address.middle_name">Middle Name</label>
                <input type="text" name="billing_address[middle_name]" id="billing_address.middle_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="billing_address.last_name">Last Name</label>
                <input type="text" name="billing_address[last_name]" id="billing_address.last_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="billing_address.line_1">Address Line 1</label>
                <input type="text" name="billing_address[line_1]" id="billing_address.line_1" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="billing_address.line_2">Address Line 2</label>
                <input type="text" name="billing_address[line_2]" id="billing_address.line_2" class="form-control">
            </div>

            <div class="form-group">
                <label for="billing_address.city">City</label>
                <input type="text" name="billing_address[city]" id="billing_address.city" class="form-control">
            </div>

            <div class="form-group">
                <label for="billing_address.state">State</label>
                <input type="text" name="billing_address[state]" id="billing_address.state" class="form-control">
            </div>

            <div class="form-group">
                <label for="billing_address.postal_code">Postal Code</label>
                <input type="text" name="billing_address[postal_code]" id="billing_address.postal_code" class="form-control">
            </div>

            <div class="form-group">
                <label for="billing_address.zip_code">Zip Code</label>
                <input type="text" name="billing_address[zip_code]" id="billing_address.zip_code" class="form-control">
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit Order</button>
            </div>
        </form>
    </div>--}}

   
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
    
 <script>
    // Submit the order and handle the response
    fetch('https://cybqa.pesapal.com/pesapalv3/api/Transactions/GetTransactionStatus?orderTrackingId={orderTrackingId}', {
        method: 'GET',
        // Include necessary request data (if any)
        body: JSON.stringify({
            // Your order data here
        }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Extract order_tracking_id from the response data
                const orderTrackingId = data.data.order_tracking_id;

                // Construct the URL to your Laravel route using the order_tracking_id
                const orderStatusUrl = `/order-status/${orderTrackingId}`;

                // Redirect to the order status page
                window.location.href = orderStatusUrl;
            } else {
                // Handle order submission failure
                console.error('Order submission failed:', data.message);
            }
        })
        .catch(error => {
            // Handle error during the order submission
            console.error('Error submitting order:', error);
        });


 </script>
</body>

</html>