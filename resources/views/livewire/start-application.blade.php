<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <style>
        .gradient-button {
            background: linear-gradient(45deg, #25CBD6, #00EE8A);
            border: none;
            border-radius: 14px;
            color: white;
            padding: 15px 30px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            height: 45px;
            /* Set a fixed height */
            min-width: 180px;
            /* Ensure consistent width */
        }

        .gradient-button:hover {
            background: white;
            color: black;
            border: 2px solid #000000;
        }

        .btn-sm {
            padding: 10px 12px;
            font-size: 16px;
        }

        /* Medium Button */
        .btn-md {
            padding: 10px 16px;
            font-size: 14px;
        }

        /* Change button background to blue when loading */
        .gradient-button:disabled,
        .gradient-button[wire\:loading] {
            background: #b6b6b6 !important;
            color: white !important;
            border-color: #b6b6b6;
            cursor: not-allowed;
        }

        /* Ensure spinner size doesn’t affect button dimensions */
        .gradient-button i.fa-spinner {
            margin-right: 10px;
            /* Add space between spinner and text */
            font-size: 16px;
            /* Adjust spinner size */
            visibility: hidden;
            /* Default hidden */
        }

        /* Show spinner when loading */
        .gradient-button span[wire\:loading] i.fa-spinner {
            visibility: visible;
        }

        /* Banner container */
        .banner {
            background-color: #000000;
            color: white;
            padding: 10px 20px;
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: Arial, sans-serif;
            position: relative;
        }

        /* Banner content wrapper */
        .banner-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        /* Banner text styling */
        .banner-text p {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }

        /* Action buttons container */
        .banner-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        /* Call-to-action button */
        .cta-button {

            background: linear-gradient(45deg, #25CBD6, #00EE8A);
            border: none;
            color: white;
            border-radius: 10px;
            padding: 6px 12px;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 35px;
            /* Set a fixed height */
            min-width: 180px;
            /* Ensure consistent width */
        }

        .cta-button:hover {
            background: #000000;
            color: #fff;
            border: 2px solid #fff;
        }

        /* Close button styling */
        .close-button {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
            padding: 0 10px;
        }

        .close-button:hover {
            color: #ffe6e6;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .banner-content {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }

            .banner-actions {
                justify-content: center;
            }
        }

        /* Main alert banner container */
        .alert-banner {
            background-color: #add8e6;
            color: #721c24;
            padding: 3px 20px;
            font-family: Arial, sans-serif;
            border: 1px solid #add8e6;
            border-radius: 5px;
            width: 100%;
            margin: 20px 0;
        }

        /* Flex container for alert icon and text */
        .alert-content {
            display: flex;
            align-items: center;
            width: 100%;
            height: 100%;
            /* Ensure the height fills the banner */
        }

        /* Icon styling */
        .alert-icon i {
            font-size: 24px;
            color: #721c24;
        }

        /* White space separator to visually divide the icon and text */
        .alert-icon {
            padding-right: 15px;
            /* Creates space between icon and separator */
            border-right: 4px solid white;
            /* Increased separator line thickness */
            margin-right: 15px;
            /* Adds space to the right of the icon */
            height: 100%;
            /* Ensure separator takes full height of alert */
            display: flex;
            align-items: center;
            /* Vertically center the separator */
        }

        /* Text styling */
        .alert-text p {
            margin: 0;
            font-size: 16px;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .alert-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .alert-icon {
                padding-right: 0;
                border-right: none;
                margin-right: 0;
            }
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .alert-content {
                flex-direction: row;
                /* Keep the icon and text in a row */
                align-items: center;
                /* Vertically align content */
            }

            .alert-icon {
                padding-right: 15px;
                /* Keep spacing consistent */
                border-right: 4px solid white;
                /* Ensure separator stays intact */
                margin-right: 15px;
            }

            .alert-text p {
                font-size: 14px;
                /* Slightly reduce font size for smaller screens */
            }
        }

        @media (min-width: 992px) {

            /* Applies only to large devices (≥992px) */
            .left-sidebar-checkout {
                position: relative;
                /* Keeps the element in view as the user scrolls */
                /* Adjust the offset from the top of the viewport */
                height: auto;
                /* Ensures the height adapts to content */
            }
        }

        input.form-control[type="date"] {
            border-radius: 16px;
            border: 1px solid #ccc;
            /* Optional: Customize the border */
            padding: 10px 15px;
            /* Optional: Adjust padding for a better look */
            font-size: 14px;
            /* Optional: Adjust font size */
            outline: none;
            /* Remove focus outline */
            box-shadow: none;
            /* Optional: Remove default shadow */
            width: 100%;
        }

        input.form-control[type="date"]:focus {
            border-color: #007bff;
            /* Optional: Border color on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Optional: Add focus shadow */
        }

        input.form-control[type="email"] {
            border-radius: 16px;
            border: 1px solid #ccc;
            /* Optional: Customize the border */
            padding: 10px 15px;
            /* Optional: Adjust padding for a better look */
            font-size: 14px;
            /* Optional: Adjust font size */
            outline: none;
            /* Remove focus outline */
            box-shadow: none;
            /* Optional: Remove default shadow */
        }

        input.form-control[type="email"]:focus {
            border-color: #007bff;
            /* Optional: Border color on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Optional: Add focus shadow */
        }

        input.form-control[type="text"] {
            border-radius: 16px;
            border: 1px solid #ccc;
            /* Optional: Customize the border */
            padding: 10px 15px;
            /* Optional: Adjust padding for a better look */
            font-size: 14px;
            /* Optional: Adjust font size */
            outline: none;
            /* Remove focus outline */
            box-shadow: none;
            /* Optional: Remove default shadow */
        }

        input.form-control[type="text"]:focus {
            border-color: #007bff;
            /* Optional: Border color on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Optional: Add focus shadow */
        }

        .custom-card {
            border: 2px solid #DBE2E9;
            /* Default border color */
            border-radius: 16px;
            background-color: white;
            /* Default background */
            transition: all 0.3s ease-in-out;
            /* Smooth transition for hover and focus */
            cursor: pointer;
        }

        .custom-card:hover {
            border-color: #000000;
            /* Change border to black on hover */
            background-color: #DBE2E9;
            /* Change background to light blue on hover */
        }

        .custom-card:active {
            border-color: #000000;
            /* Change border to black on click */
            background-color: #DBE2E9;
            /* Change background to light blue on click */
        }
        .capitalize {
            font-weight: bold;
        }
        .add-another-traveler-button {
            background-color: #add8e6;
            color: #000000;
            padding: 8px;
            width: 100%;
            border-radius: 16px;
        }
        /* Custom CSS for layout */
        .traveler-details {
            display: flex; /* Enables flex layout */
            justify-content: space-between; /* Pushes content to edges */
            align-items: center; /* Aligns vertically */
        }

        .remove-icon {
            margin-right: auto; /* Pushes the span to the far right */
        }
    </style>
    <!-- Start of Step 1 -->
    @if ($currentStep == 1)
    <section class="checkout-section-2 section-lg-space order-detail">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="banner">
                    <div class="banner-content">
                        <div class="banner-text">
                            <p>You’ve already started an order.</p>
                        </div>
                        <div class="banner-actions">
                            <button class="cta-button">Go to application</button>
                            <button class="close-button" onclick="closeBanner()">✕</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="left-sidebar-checkout sticky">
                        <div class="checkout-detail-box">
                            <ul>
                                <li>
                                    <div class="checkout-box bg-white">
                                        <div class="checkout-title">
                                            <h4>Apply now for your Uganda Tourist eVisa</h4>
                                        </div>
                                        <hr class="mb-4">
                                        <div class="alert-banner">
                                            <div class="alert-content">
                                                <div class="alert-icon">
                                                    <img src="{{ asset('visa.png')}}" style="width:50px; height:60px;">
                                                </div>
                                                <div class="separator"></div> <!-- White space separator -->
                                                <div class="alert-text">
                                                    <span class="fw-bold">Visa required</span>
                                                    <p>You need a visa to travel to Uganda if you have a passport from Canada.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="row g-4">
                                                <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                    <div class="delivery-address-box">
                                                        <form wire:submit.prevent="AddInfo">
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <label>What is your nationality?</label>
                                                                        <select wire:model="nationality" class="form-select">
                                                                            <option>Select Country</option>
                                                                            <option value="Uganda">Uganda - UG</option>
                                                                            <option value="Kenya">Kenya - KE</option>
                                                                            <option value="Rwanda">Rwanda -Rw</option>
                                                                            <option value="Congo">Congo- DRC</option>
                                                                        </select>
                                                                        <small>Ensure you select the nationality of the passport you'll be traveling with.</small>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <label>Applying for</label>
                                                                        <select wire:model="visaType" class="form-select for-control mt-1">
                                                                            <option>Select One</option>
                                                                            <option value="Uganda Tourist evisa-180 days, Single entry">Uganda Tourist evisa-180 days, Single entry</option>
                                                                            <option value="Uganda East Africa visa - 180 days, Multiple entry">Uganda East Africa visa - 180 days, Multiple entry</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4">
                                                                    <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="row">
                                                                            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-12 mb-2 text-center text-lg-start mb-2">
                                                                                <i class="fa fa-star"></i> <strong>Trust Pilot</strong>
                                                                                <i class="fa fa-star bg-dark text-white p-1"></i>
                                                                                <i class="fa fa-star bg-dark text-white p-1"></i>
                                                                                <i class="fa fa-star bg-dark text-white p-1"></i>
                                                                                <i class="fa fa-star bg-dark text-white p-1"></i>
                                                                                <i class="fa fa-star bg-dark text-white p-1"></i> &nbsp; + 50,000 Reviews
                                                                            </div>
                                                                            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-12">
                                                                                <!-- Ensure button spans full width on smaller devices -->
                                                                                <button href="#" class="gradient-button btn-sm w-100" type="submit" wire:loading.attr="disabled">
                                                                                    <span wire:loading wire:target="AddInfo">
                                                                                        <i class="fa fa-spinner fa-spin"></i>
                                                                                    </span>
                                                                                    <span wire:loading.remove wire:target="AddInfo">Start your application</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    {{--@if (session('nationality') && session('visaType'))--}}
                    <div class="right-side-summery-box">
                        <div class="summery-box-2">
                            <div class="summery-header">
                                <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                                    <div class="row">
                                    
                                        <div class="col-md-6 col-6 col-lg-6 col-sm-6">
                                           <h3>Uganda Tourist eVisa </h3>
                                        </div>
                                        <div class="col-md-6 col-6 col-lg-6 col-sm-6" style="text-align:right;">
                                           <span style="background-color:#b0c4de; padding:3px; border-radius:10px; color:fff;font-size:12px;text-align:right;">Most popular</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="summery-contain">
                                <li>
                                    <i data-feather="calendar"></i> &nbsp;
                                    <h5>Valid for</h5>
                                    <h4 class="price">{{ session('nationality') }}</h4>
                                </li>
                                <li>
                                    <i data-feather="eye"></i> &nbsp;
                                    <h5>Number of entries</h5>
                                    <h4 class="price">{{ session('visaType') }}</h4>
                                </li>
                                <li>
                                    <i data-feather="clock"></i> &nbsp;
                                    <h5>Max stay</h5>
                                    <h4 class="price">90 days in total</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{--@endif--}}
                </div>
                {{--<button wire:click="forgetSessionData" class="btn btn-danger">Forget Session</button>--}}
            </div>
        </div>
    </section>
    <!--End of step 1 -->
    @elseif ($currentStep == 2)
    <!-- Start of Step 2 -->
    <section class="checkout-section-2 section-lg-space order-detail">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                    <h2 class="fw-bold">Uganda Tourist eVisa • 180 days, Single entry</h2>
                </div>
            </div>
            <div class="row g-sm-4 g-3 mt-3">
                <div class="col-12 overflow-hidden">
                    <ol class="progtrckr">
                        <li class="progtrckr-done ">
                            <h5>Trip Details</h5>
                        </li>
                        <li class="progtrckr-todo">
                            <h5>Your Info</h5>
                        </li>
                        <li class="progtrckr-todo">
                            <h5>Checkout</h5>
                        </li>
                    </ol>
                </div>
            </div>
            @livewire('go-to-application-banner')
            <form wire:submit.prevent="AddInfo2">
                <div class="row g-sm-4 g-3">
                    <div class="col-lg-8">
                        <div class="left-sidebar-checkout">
                            <div class="checkout-detail-box">
                                <ul>
                                    <li>
                                        <div class="checkout-box bg-white">
                                            <div class="checkout-title">
                                                <h4>Your Trip Details</h4>
                                            </div>
                                            <hr>
                                            <div class="checkout-detail">
                                                <div class="row g-4">
                                                    <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                        <div>
                                                            <div class="row mt-3">
                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                    <label>When do you arrive in Uganda?</label>
                                                                    <input type="date" class="form-control mt-2" placeholder="DD/MM/YYYY" wire:model="departure_date" />
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                    <label>When do you arrive in Uganda?</label>
                                                                    <input type="date" class="form-control mt-2" placeholder="DD/MM/YYYY" wire:model="arrival_date" />
                                                                </div>
                                                                <div class="form-check custom-form-check custom-form-check-2 d-flex align-items-center mt-2">
                                                                    <input class="form-check-input" type="checkbox" wire:model="receive_updates" id="receive_updates">
                                                                    <label class="form-check-label ms-2" for="receive_updates">
                                                                                I acknowledge that I need to provide a Yellow Fever Vaccination Card as part of the process, which must be issued at least 10 days after the vaccination date.
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="row mt-3">
                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                    <label>Email address</label>
                                                                    <input type="email" class="form-control" placeholder="johnsmith@gmail.com" wire:model="email" />
                                                                    <small>We use this to create your iVisa account and send you updates about your application.</small>
                                                                </div>
                                                            </div>

                                                            <div class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                                <input class="form-check-input" type="checkbox" wire:model="receive_updates" id="receive_updates">
                                                                <label class="form-check-label ms-2" for="receive_updates">
                                                                    I want to receive iVisa's updates, product launches and personalized offers. I can opt out anytime.</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right-side-summery-box">
                            <div class="summery-box-2">
                                <div class="summery-header">
                                    <h3>Uganda Tourist eVisa</h3>
                                </div>
                                <ul class="summery-contain">
                                    <li>
                                        <h5>+ Government fees</h5>
                                        <h4 class="price">USh 200130.00</h4>
                                    </li>
                                </ul>
                            </div>
                            <p>{{ session('arrival_date') }}</p>
                            <p>{{ session('departure_date') }}</p>
                            <p>{{ session('updates_text') }}</p>
                        </div>
                        <div class="row mt-3">
                            <div class="right-side-summery-box">
                                <div class="summery-box-2 border-0" style="background-color:#fff;">
                                    <ul class="summery-contain">
                                        <li>
                                            <h5><span class="fw-bold">Total</span><br>
                                                <small>For all travellers</small>
                                            </h5>
                                            <h4 class="price"><span class="fw-bold">Calculated at checkout</span><br>
                                                <small>(Includes taxes and fees)</small>
                                            </h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                            <button href="#" class="gradient-button btn-sm w-100" type="submit">
                                <span wire:loading wire:target="AddInfo2">
                                    <i class="fa fa-spinner fa-spin"></i>
                                </span>
                                <span wire:loading.remove wire:target="AddInfo2">Save and continue</span>
                            </button>
                        </div>
                        <p><i class="fa fa-user-plus mt-3"></i> <span class="fw-bold">Your info is safe with us!</span></p>
                        <small>For more details see <a href="#!">how we keep your data safe</a></small>
                        <p><a href="#!" wire:click="goToPreviousStep"> <i class="fa fa-arrow-left"> </i> Previous</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--End of Step 2-->
    @elseif ($currentStep == 3)
    <!-- Start of Step 3 -->
    <section class="checkout-section-2 section-lg-space order-detail">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xxl-12 overflow-hidden">
                    <ol class="progtrckr">
                        <li class="progtrckr-done">
                            <h5>Trip Details</h5>
                        </li>
                        <li class="progtrckr-todo">
                            <h5>Your Info</h5>
                        </li>
                        <li class="progtrckr-todo">
                            <h5>Checkout</h5>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row g-sm-4 g-3">
                @livewire('go-to-application-banner')
                <form wire:submit.prevent="AddInfo3">
                    <div class="row g-sm-4 g-3">
                        <div class="col-lg-8">
                            <div class="left-sidebar-checkout">
                                <div class="checkout-detail-box">
                                    <ul>
                                        <li>
                                            <div class="checkout-box bg-white">
                                                <div class="checkout-title">
                                                    <h4>Your Personal Details</h4>
                                                </div>
                                                <p class="mb-2">Your Personal Details</p>
                                                <hr class="mb-4">
                                                <div class="checkout-detail">
                                                    <div class="row g-4">
                                                        <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                            <div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <label>First and middle name</label>
                                                                        <input type="text" class="form-control" placeholder="John William" wire:model="first_and_middle_name" />
                                                                        <small>If you have a middle name, please include it.</small>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <label>Last Name</label>
                                                                        <input type="text" class="form-control" placeholder="John William" wire:model="last_name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                    <div class="row">
                                                                        <label>Date of birth</label>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" placeholder="Day" wire:model="dob_day">
                                                                                <option>Day</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" placeholder="Month" wire:model="dob_month">
                                                                                <option>Month</option>
                                                                                <option value="January">January</option>
                                                                                <option value="February">February</option>
                                                                                <option value="March">March</option>
                                                                                <option value="April">April</option>
                                                                                <option value="May">May</option>
                                                                                <option value="June">June</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" placeholder="Year" wire:model="dob_year">
                                                                                <option>Year</option>
                                                                                <option value="2024">2024</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2022">2022</option>
                                                                                <option value="2021">2021</option>
                                                                                <option value="2020">2020</option>
                                                                                <option value="2019">2019</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>
                                        @foreach ($travelers as $index => $traveler)
                                        <li>
                                            <div class="checkout-box bg-white mt-2">
                                                <div class="checkout-title">
                                                    <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-6 col-6 col-lg-6 col-sm-6">
                                                               <h4>Traveler #{{ $loop->iteration + 1 }} Personal Details </h4>
                                                            </div>
                                                            <div class="col-md-6 col-6 col-lg-6 col-sm-6" style="text-align:right;">
                                                               <span wire:click="removeTraveler({{ $index }})" style="cursor: pointer; text-align:right;"><i class="fa fa-trash"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-2">These should match what's in your passport.</p>
                                                <hr class="mb-4">
                                                <div class="checkout-detail">
                                                    <div class="row g-4">
                                                        <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                            <div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <label>First and middle name</label>
                                                                        <input type="text" class="form-control" placeholder="John William" wire:model="travelers.{{ $index }}.first_and_middle_name" />
                                                                        <small>If you have a middle name, please include it.</small>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <label>Last Name</label>
                                                                        <input type="text" class="form-control" placeholder="John William"  wire:model="travelers.{{ $index }}.last_name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                    <div class="row">
                                                                        <label>Date of birth</label>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" placeholder="Day" wire:model="travelers.{{ $index }}.dob_day">
                                                                                <option>Day</option>
                                                                                @for ($day = 1; $day <= 31; $day++)
                                                                                    <option value="{{ $day }}">{{ $day }}</option>
                                                                                @endfor
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" placeholder="Month"  wire:model="travelers.{{ $index }}.dob_month">
                                                                                <option>Month</option>
                                                                                @foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                                                                    <option value="{{ $month }}">{{ $month }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" placeholder="Year"  wire:model="travelers.{{ $index }}.dob_year">
                                                                                <option>Year</option>
                                                                                @for ($year = date('Y'); $year >= 1900; $year--)
                                                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                                                @endfor
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>
                                        @endforeach
                                        <button class="btn add-another-traveler-button mt-4"  type="button"  wire:click="addTraveler"><i class="fa fa-plus-circle"></i> Add Another traveler</button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="right-side-summery-box">
                                <div class="summery-box-2">
                                    <div class="summery-header">
                                        <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-6 col-6 col-lg-6 col-sm-6">
                                                    <h3>Uganda Tourist eVisa</h3>
                                                </div>
                                                <div class="col-md-6 col-6 col-lg-6 col-sm-6" style="text-align:right;">
                                                     <h6>{{ $travelerCount }} Traveler{{ $travelerCount > 1 ? 's' : '' }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="summery-contain">
                                        <li>
                                            <h5>+ Government fees</h5>
                                            <h4 class="price">USh 200130.00</h4>
                                        </li>
                                    </ul>
                                    <p>{{ session('last_name') }}{{ session('first_and_middle_name') }}</p>
                                    <p>{{ session('dob_day') }}/{{ session('dob_month') }}/{{ session('dob_year') }}</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="right-side-summery-box">
                                    <div class="summery-box-2 border-0" style="background-color:#fff;">
                                        <ul class="summery-contain">
                                            <li>
                                                <h5><span class="fw-bold">Total</span><br>
                                                    <small>For all travellers</small>
                                                </h5>
                                                <h4 class="price"><span class="fw-bold">Calculated at checkout</span><br>
                                                    <small>(Includes taxes and fees)</small>
                                                </h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                                <button href="#" class="gradient-button btn-sm w-100" type="submit">
                                    <span wire:loading wire:target="AddInfo2">
                                        <i class="fa fa-spinner fa-spin"></i>
                                    </span>
                                    <span wire:loading.remove wire:target="AddInfo2">Save and continue</span>
                                </button>
                            </div>
                            <p><i class="fa fa-user-plus mt-3"></i> <span class="fw-bold">Your info is safe with us!</span></p>
                            <small>For more details see <a href="#!">how we keep your data safe</a></small>
                            <p><a href="#!" wire:click="goToPreviousStep"> <i class="fa fa-arrow-left"> </i> Previous</a></p>
                        </div>
                    </div>
                </form>
            </div>
    </section>
    <!-- End of Step 3 -->
    @elseif ($currentStep == 4)
    <!-- Start of Step 4 -->
    <section class="checkout-section-2 section-lg-space order-detail">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xxl-12 overflow-hidden">
                    <ol class="progtrckr">
                        <li class="progtrckr-done">
                            <h5>Trip Details</h5>
                        </li>
                        <li class="progtrckr-todo">
                            <h5>Your Info</h5>
                        </li>
                        <li class="progtrckr-todo">
                            <h5>Checkout</h5>
                        </li>
                    </ol>
                </div>
            </div>
            @livewire('go-to-application-banner')
            <div class="row g-sm-4 g-3">
                <form wire:submit.prevent="AddInfo4">
                    <div class="row g-sm-4 g-3">
                        <div class="col-lg-8">
                            <div class="left-sidebar-checkout">
                                <div class="checkout-detail-box">
                                    <ul>
                                        <li>
                                            <div class="checkout-box bg-white">
                                                <div class="checkout-title">
                                                    <h4>Your Passport Information</h4>
                                                </div>
                                                <hr class="mb-4">
                                                <div class="checkout-detail">
                                                    <div class="row g-4">
                                                        <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                            <div class="delivery-address-box">
                                                                <div>

                                                                    <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <div>
                                                                            <div class="row mt-3">
                                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                                    <label>Nationality on passport</label>
                                                                                    <select class="form-select mt-2" placeholder="" wire:model="passport_nationality">
                                                                                        <option>Select Country</option>
                                                                                        <option value="Greece -GR">Greece -GR</option>
                                                                                        <option value="February">February</option>
                                                                                        <option value="March">March</option>
                                                                                        <option value="April">April</option>
                                                                                        <option value="May">May</option>
                                                                                        <option value="June">June</option>
                                                                                    </select>
                                                                                    <div class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                                                        <input class="form-check-input" type="checkbox">
                                                                                        <label class="form-check-label ms-2" for="desktop">
                                                                                            Skip entering passport information for now
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-3">
                                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                                    <label>Passport number</label>
                                                                                    <input type="text" class="form-control mt-2" placeholder="Smith" wire:model="passport_number" />

                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-3">
                                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-4 col-md-4">
                                                                                            <label>Passport expiration Day</label>
                                                                                            <select class="form-select mt-2" placeholder="Day" wire:model="passport_expiry_date_day">
                                                                                                <option>Day</option>
                                                                                                <option value="1">1</option>
                                                                                                <option value="2">2</option>
                                                                                                <option value="3">3</option>
                                                                                                <option value="4">4</option>
                                                                                                <option value="5">5</option>
                                                                                                <option value="6">6</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4">
                                                                                            <label>Passport expiration Month</label>
                                                                                            <select class="form-select mt-2" placeholder="Month" wire:model="passport_expiry_date_month">
                                                                                                <option>Month</option>
                                                                                                <option value="January">January</option>
                                                                                                <option value="February">February</option>
                                                                                                <option value="March">March</option>
                                                                                                <option value="April">April</option>
                                                                                                <option value="May">May</option>
                                                                                                <option value="June">June</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4">
                                                                                            <label>Passport expiration Year</label>
                                                                                            <select class="form-select mt-2" placeholder="Year" wire:model="passport_expiry_date_year">
                                                                                                <option>Year</option>
                                                                                                <option value="2024">2024</option>
                                                                                                <option value="2023">2023</option>
                                                                                                <option value="2022">2022</option>
                                                                                                <option value="2021">2021</option>
                                                                                                <option value="2020">2020</option>
                                                                                                <option value="2019">2019</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-3">
                                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                                    <label>Country of birth</label>
                                                                                    <select class="form-select mt-2" placeholder="Country of Birth" wire:model="country_of_birth">
                                                                                        <option>Country Of Birth</option>
                                                                                        <option value="Uganda">Uganda - UG</option>
                                                                                        <option value="Kenya">Kenya - KE</option>
                                                                                        <option value="Rwanda">Rwanda - RW</option>
                                                                                        <option value="South Sudan">South Sudan - SS</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="right-side-summery-box">
                                <div class="summery-box-2">
                                    <div class="summery-header">
                                        <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-6 col-6 col-lg-6 col-sm-6">
                                                    <h3>Uganda Tourist eVisa</h3>
                                                </div>
                                                <div class="col-md-6 col-6 col-lg-6 col-sm-6" style="text-align:right;">
                                                     <h6>{{ $travelerCount }} Traveler{{ $travelerCount > 1 ? 's' : '' }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="summery-contain">
                                        <li>
                                            <h5>+ Government fees</h5>
                                            <h4 class="price">USh 200130.00</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="right-side-summery-box">
                                    <div class="summery-box-2 border-0" style="background-color:#fff;">
                                        <ul class="summery-contain">
                                            <li>
                                                <h5><span class="fw-bold">Total</span><br>
                                                    <small>For all travellers</small>
                                                </h5>
                                                <h4 class="price"><span class="fw-bold">Calculated at checkout</span><br>
                                                    <small>(Includes taxes and fees)</small>
                                                </h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                                <button href="#" class="gradient-button btn-sm w-100" type="submit">
                                    <span wire:loading wire:target="AddInfo4">
                                        <i class="fa fa-spinner fa-spin"></i>
                                    </span>
                                    <span wire:loading.remove wire:target="AddInfo4">Save and continue</span>
                                </button>
                            </div>
                            <p><i class="fa fa-user-plus mt-3"></i> <span class="fw-bold">Your info is safe with us!</span></p>
                            <small>For more details see <a href="#!">how we keep your data safe</a></small>
                            <p><a href="#!" wire:click="goToPreviousStep"> <i class="fa fa-arrow-left"> </i> Previous</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End of Step 4 -->
    @elseif ($currentStep == 5)
    <!-- Start of Step 5 -->
    <section class="checkout-section-2 section-lg-space order-detail">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 col-xxl-12 overflow-hidden">
                    <ol class="progtrckr">
                        <li class="progtrckr-done">
                            <h5>Trip Details</h5>
                        </li>
                        <li class="progtrckr-done">
                            <h5>Your Info</h5>
                        </li>
                        <li class="progtrckr-todo">
                            <h5>Checkout</h5>
                        </li>
                    </ol>
                </div>
            </div>
            @livewire('go-to-application-banner')
            <div class="row g-sm-4 g-3">
                <form wire:submit.prevent="AddInfo5">
                    <div class="row g-sm-4 g-3">
                        <div class="col-lg-8">
                            
                            <div class="left-sidebar-checkout">
                                <div class="checkout-detail-box">
                                    <ul>
                                        <li>
                                            <div class="checkout-box bg-white">
                                                <div class="checkout-title">
                                                    <h2>Processing Time & Fee</h2>
                                                </div>
                                                <hr class="mb-4" />
                                                <div class="checkout-detail">
                                                    
                                                    <div class="row g-4">
                                                        <div class="col-xxl-6 col-lg-12 col-md-6">
                                                            <div class="delivery-address-box">
                                                                <h3 style="font-weight: 600; font-size: 20px">
                                                                    Choose your processing time
                                                                </h3>
                                                                <div>
                                                                    <div class="col-12 col-xxl-12 col-md-12 col-lg-12 col-sm-12">
                                                                        <div class="row mt-3">
                                                                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                                                                <div class="card custom-card" >
                                                                                    <div class="card-body">
                                                                                        <p>USh203,075.00 - Standard</p>
                                                                                        <p style="font-weight: bold; color: green">
                                                                                            9 day processing
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3">
                                                                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                                                                <div class="card custom-card">
                                                                                    <div class="card-body">
                                                                                        <p>USh300,726.00 - Rush</p>
                                                                                        <p style="font-weight: bold; color: green">
                                                                                            7 day processing
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3">
                                                                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                                                                <div class="card custom-card">
                                                                                    <div class="card-body">
                                                                                        <p>USh406,189.00 - Super Rush</p>
                                                                                        <p style="font-weight: bold; color: green">
                                                                                            5 day processing
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="right-side-summery-box">
                                <div class="summery-box-2">
                                    <div class="summery-header">
                                        <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-6 col-6 col-lg-6 col-sm-6">
                                                    <h3>Uganda Tourist eVisa</h3>
                                                </div>
                                                <div class="col-md-6 col-6 col-lg-6 col-sm-6" style="text-align:right;">
                                                     <h6>{{ $travelerCount }} Traveler{{ $travelerCount > 1 ? 's' : '' }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="summery-contain">
                                        <li>
                                            <h5>+ Government fees</h5>
                                            <h4 class="price">USh 200130.00</h4>
                                        </li>
                                        <li>
                                            <h5>+ Standard, 9 days</h5>
                                            <h4 class="price">USh 203075.00</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="right-side-summery-box">
                                    <div class="summery-box-2 border-0" style="background-color:#fff;">
                                        <ul class="summery-contain">
                                            <li>
                                                <h5><span class="fw-bold">Total</span><br>
                                                    <small>For all travellers</small>
                                                </h5>
                                                <h4 class="price"><span class="fw-bold">Calculated at checkout</span><br>
                                                    <small>(Includes taxes and fees)</small>
                                                </h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                                <button href="#" class="gradient-button btn-sm w-100" type="button" wire:click="AddInfo5">
                                    <span wire:loading wire:target="AddInfo5">
                                        <i class="fa fa-spinner fa-spin"></i>
                                    </span>
                                    <span wire:loading.remove wire:target="AddInfo5">Save and continue</span>
                                </button>
                            </div>
                                <p><i class="fa fa-user-plus mt-3"></i> <span class="fw-bold">Your info is safe with us!</span></p>
                                <small>For more details see <a href="#!">how we keep your data safe</a></small>
                                <p><a href="#!" wire:click="goToPreviousStep"> <i class="fa fa-arrow-left"> </i> Previous</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End of step 5-->
    @elseif ($currentStep == 6)
    <!--Start of step 6 -->
    <section class="checkout-section-2 section-lg-space order-detail">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <form wire:submit.prevent="AddInfo6">
                    <div class="row g-sm-4 g-3">
                        <div class="col-lg-8">
                            <div class="left-sidebar-checkout">
                                <div class="checkout-detail-box">
                                    <ul>
                                        <li>
                                            <div class="checkout-box bg-white">
                                                <div class="checkout-title mb-4">
                                                    <h2>Review your order</h2>
                                                </div>
                                                <div class="alert-banner">
                                                        <div class="alert-content">
                                                            <div class="alert-icon">
                                                                <img src="{{ asset('visa.png')}}" style="width:50px; height:60px;">
                                                            </div>
                                                            <div class="separator"></div> <!-- White space separator -->
                                                            <div class="alert-text">
                                                                <span class="fw-bold">Finish your application now, and get it by Thursday, Dec 12, 2024</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="checkout-detail">
                                                    <div class="row g-4">
                                                        <div class="col-xxl-6 col-lg-12 col-md-6">
                                                            <div class="delivery-address-box">
                                                                <div>
                                                                    <div class="col-12 col-xxl-12 col-md-12 col-lg-12 col-sm-12">
                                                                        <div class="row mt-3">
                                                                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                                                                <div class="card custom-card">
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-12 col-md-6 col-lg-4 col-sm-4">
                                                                                                  <span style="background-color:#add8e6;border-radius:50%; height:100px;width:100px; display:inline-block;"><img src="{{ asset('visa.png')}}"></span>
                                                                                            </div>
                                                                                            <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                                                                                                  <p><h2>Uganda East Africa Visa</h2></p>
                                                                                                  <p class="mt-3">Valid for: 180 days after arrival</p>
                                                                                                  <p class="mt-3">Max stay: 90 days in total</p>
                                                                                                  <p class="mt-3">Number of entries: Multiple entry</p>
                                                                                            </div>
                                                                                            <div class="col-12 col-md-6 col-lg-2 col-sm-2 text-end mt-3">
                                                                                                  <button class="btn-primary btn-sm" style="padding:4px; border-radius:10px;">Rush</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <hr class="mb-4 mt-4">
                                                                                        <div class="row">
                                                                                            <p class="capitalize mb-3">travelers</p>
                                                                                            <p ><i class="fa fa-user"></i> <span class="capitalize">Atim Esther</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3">
                                                                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                                                                <div class="card custom-card">
                                                                                    <div class="card-body">
                                                                                    <div class="row">
                                                                                            <div class="col-12 col-md-6 col-lg-6 col-sm-6 fw-bold">
                                                                                               <i class="fa fa-shield-virus"></i> &nbsp; Add denial protection <br>UGX USh58552.00
                                                                                            </div>
                                                                                            <div class="col-12 col-md-6 col-lg-6 col-sm-6 text-right">
                                                                                                <div class="form-check custom-form-check custom-form-check-2 d-flex justify-content-end align-items-center ms-auto">
                                                                                                    <input class="form-check-input" type="checkbox"  id="">
                                                                                                
                                                                                                </div>
                                                                                            </div>
                                                                                            <p><small>Get a 100% refund on your order if your application is rejected by the government for any reason.</small></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="right-side-summery-box mb-5">
                                <div class="summery-box-2">
                                    <div class="summery-header">
                                        <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-6 col-6 col-lg-6 col-sm-6">
                                                    <h3>Uganda Tourist eVisa</h3>
                                                </div>
                                                <div class="col-md-6 col-6 col-lg-6 col-sm-6" style="text-align:right;">
                                                     <h6>{{ $travelerCount }} Traveler{{ $travelerCount > 1 ? 's' : '' }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="summery-contain">
                                        <li>
                                            <h5>+ Government fees</h5>
                                            <h4 class="price">USh 200130.00</h4>
                                        </li>
                                        <li>
                                            <h5>+ Standard, 9 days</h5>
                                            <h4 class="price">USh 203075.00</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p></p>
                            <div class="row mt-4 mb-4">
                                <div class="right-side-summery-box">
                                    <div class="summery-box-2 border-0" style="background-color:#fff;">
                                        <ul class="summery-contain">
                                            <li>
                                                <h5><span class="fw-bold">Total</span><br>
                                                    <small>For all travellers</small>
                                                </h5>
                                                <h4 class="price"><span class="fw-bold">UGX USh703047.00</span>
                                                </h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                                <button href="#" class="gradient-button btn-sm w-100" type="button" onclick="Livewire.dispatch('openModal', { component: 'add-payment' })">
                                    <span wire:loading wire:target="AddInfo6">
                                        <i class="fa fa-spinner fa-spin"></i>
                                    </span>
                                    <span wire:loading.remove wire:target="AddInfo6">Continue to Payment</span>
                                </button>
                            </div>
                            <p><i class="fa fa-user-plus mt-3"></i> <span class="fw-bold">Your info is safe with us!</span></p>
                            <small>For more details see <a href="#!">how we keep your data safe</a></small>
                            <p><a href="#!" wire:click="goToPreviousStep"> <i class="fa fa-arrow-left"> </i> Previous</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End of step 6 -->
    @endif

    <script>
        function closeBanner() {
            document.querySelector('.banner').style.display = 'none';
        }
    </script>
</div>