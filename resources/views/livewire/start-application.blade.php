<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <style>
        .gradient-button {
            background: linear-gradient(45deg, #4784ff, #1f5bce);
            border: none;
            border-radius: 14px;
            color: #ffffff;
            padding: 16px 40px;
            font-size: 50px;
            font-weight: 700;
            line-height: 54px;
            cursor: pointer;
            transition: background 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 55px;
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
            font-size: 20px;
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
            background-color: #2349a1;
            color: white;
            padding: 17px 20px;
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

            background: linear-gradient(45deg, #4784ff, #1f5bce);
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
            /* background-color: #add8e6; */
            background-color: #4784ff;
            color: #721c24;
            padding: 20px 20px;
            font-family: Arial, sans-serif;
            border: 1px solid #add8e6;
            border-radius: 20px;
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
            border: 1px solid #00809D;
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
            text-transform: uppercase;
            color: #adb5bd;
            /* Lighter gray */
            opacity: 0.8;
        }

        input.form-control[type="date"]:focus {
            border-color: #00809D;
            /* Optional: Border color on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Optional: Add focus shadow */
        }

        input.form-control[type="email"] {
            border-radius: 16px;
            border: 1px solid #00809D;
            /* Optional: Customize the border */
            padding: 5px 15px;
            /* Optional: Adjust padding for a better look */
            font-size: 18px;
            /* Optional: Adjust font size */
            outline: none;
            /* Remove focus outline */
            box-shadow: none;
            /* Optional: Remove default shadow */
            color: #adb5bd;
            /* Lighter gray */
            opacity: 0.8;
        }

        input.form-control[type="email"]:focus {
            border-color: #00809D;
            /* Optional: Border color on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Optional: Add focus shadow */
        }

        input.form-control[type="text"] {
            border-radius: 16px;
            border: 1px solid #00809D;
            /* Optional: Customize the border */
            padding: 5px 15px;
            /* Optional: Adjust padding for a better look */
            font-size: 18px;
            /* Optional: Adjust font size */
            outline: none;
            /* Remove focus outline */
            box-shadow: none;
            /* Optional: Remove default shadow */
            text-transform: capitalize;
            color: #adb5bd;
            /* Lighter gray */
            opacity: 0.8;
        }

        input.form-control[type="text"]:focus {
            border-color: #00809D;
            /* Optional: Border color on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Optional: Add focus shadow */
        }

        .option {
            color: #adb5bd;
            /* Lighter gray */
            opacity: 0.8;
        }

        .custom-card {
            border: 2px solid #000000;
            /* Default border color */
            border-radius: 16px;
            background-color: #f8f8f9;
            /* Default background */
            transition: all 0.3s ease-in-out;
            /* Smooth transition for hover and focus */
            cursor: pointer;
        }

        .custom-card:hover {
            border-color: #000000;
            /* Change border to black on hover */
            background-color: #f8f8f9;
            /* Change background to light blue on hover */
        }

        .custom-card:active {
            border-color: #000000;
            /* Change border to black on click */
            background-color: #f8f8f9;
            /* Change background to light blue on click */
        }

        .capitalize {
            font-weight: bold;
        }

        .add-another-traveler-button {
            background-color: #add8e6;
            color: blue;
            padding: 14px;
            width: 100%;
            border-radius: 16px;
        }

        /* Custom CSS for layout */
        .traveler-details {
            display: flex;
            /* Enables flex layout */
            justify-content: space-between;
            /* Pushes content to edges */
            align-items: center;
            /* Aligns vertically */
        }

        .remove-icon {
            margin-right: auto;
            /* Pushes the span to the far right */
        }

        .labels {
            color: rgb(66 102 113 / var(--tw-text-opacity));
            font-size: 0.95rem;
            font-weight: 500;
            line-height: 24px;
        }

        .small {
            font-size: 0.80rem;
        }
        .progtrckr2 {
            width: 100%;
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}

.progtrckr2 li {
    display: flex;
    align-items: center;
    position: relative;
    flex: 1;
    text-align: center;
}

/* Horizontal Line Between Steps */
.progtrckr2 li::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 40%;
    right: 5%;
    height: 2px;
    background-color: #cfd8dc; /* Default line color */
    z-index: -1;
}

.progtrckr2 li:first-child::before {
    left: 40%;
    right: 5%;
}

/* Bold Green Line for Done and Active Steps */
.progtrckr2 li.progtrckr-done2::before,
.progtrckr2 li.progtrckr-active::before {
    background-color: #0f4c5c; /* Green color */
    height: 4px; /* Bold line */
    top: 50%;
    transform: translateY(-50%);
}

/* Remove the line after the last step */
.progtrckr2 li:last-child::before {
    content: none; /* Remove the line */
}

/* Circle Styles */
.progtrckr2 .circle {
    width: 30px;
    height: 30px;
    border: 2px solid #0f4c5c; /* Circle border color */
    background-color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0f4c5c; /* Text inside circle */
    font-weight: bold;
    z-index: 1;
}

.progtrckr2 li.progtrckr-done2 .circle {
    background-color: #0f4c5c; /* Green color for completed steps */
    color: #fff;
}

.progtrckr2 li.progtrckr-active .circle {
    background-color: #fff; /* White background for active step */
    border: 2px solid #0f4c5c; /* Green border */
}

/* Step Labels */
.progtrckr2 .label {
    margin-left: 10px;
    color: #0f4c5c;
    font-size: 16px;
    font-weight: bold;
}


/* Responsive for Smaller Devices */
@media (max-width: 768px) {
    .progtrckr2 {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px; /* Space between steps vertically */
    }

    .progtrckr2 li {
        width: 100%; /* Steps take full width */
        position: relative;
        text-align: left; /* Align text to the left */
    }

    .progtrckr2 li::before {
        left: 0; /* Align the line */
        top: 100%; /* Line below the step */
        height: 2px; 
        right: 0;
    }

    /* Remove line after last step on small devices */
    .progtrckr2 li:last-child::before {
        content: none;
    }

    .progtrckr2 .circle {
        width: 25px;
        height: 25px;
    }

    .progtrckr2 .label {
        margin-left: 10px;
        font-size: 14px; /* Smaller text size for small devices */
    }
}

@media (min-width: 769px) {
    /* Ensures the layout reverts to horizontal flex on large screens */
    .progtrckr2 {
        flex-direction: row;
    }
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
                <div class="col-lg-7">

                    <div class="left-sidebar-checkout sticky">
                        <div class="checkout-detail-box">
                            <ul>
                                <li>
                                    <div class="checkout-box bg-white">
                                        <div class="checkout-title mb-4">
                                            <h4 style="font-size: 1.50rem;font-weight: 700;line-height: 28px;">Apply now for your Uganda Tourist eVisa</h4>
                                        </div>
                                        <div class="alert-banner">
                                            <div class="alert-content">
                                                <div class="alert-icon">
                                                    <img src="{{ asset('visa.png')}}" style="width:40px; height:40px;">
                                                </div>
                                                <div class="separator"></div> <!-- White space separator -->
                                                <div class="alert-text">
                                                    <span class="fw-bold">Visa required</span>
                                                    <p><small class="small">You need a visa to travel to Uganda if you have a passport from Canada.</small></p>
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
                                                                        <label class="labels">What is your nationality?</label>
                                                                        <select wire:model="nationality" class="form-select mt-1" style="border-radius:18px;" required>
                                                                            @foreach($countries as $country)
                                                                            <option value="{{ $country['code'] }}">{{ $country['name'] }} - {{ $country['code'] }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    @error('nationality') <small class="text-danger">{{ $message }}</small> @enderror
                                                                    <small class="small mt-3">Ensure you select the nationality of the passport you'll be traveling with.</small>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <label class="labels">Applying for</label>
                                                                        <select wire:model="visaType" class="form-select for-control mt-1" style="border-radius:18px;" required>
                                                                            <option>Select One</option>
                                                                            <option value="Uganda Tourist evisa-180 days, Single entry">Uganda Tourist evisa-180 days, Single entry</option>
                                                                            <option value="Uganda East Africa visa - 180 days, Multiple entry">Uganda East Africa visa - 180 days, Multiple entry</option>
                                                                        </select>
                                                                    </div>
                                                                    @error('visaType') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>
                                                                <div class="row mt-4">
                                                                    <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                                                                        <div class="row">
                                                                            <div class="col-xxl-7 col-lg-7 col-md-7 col-sm-12 mb-2 text-center text-lg-start mb-2">
                                                                                <i class="fa fa-star"></i> <strong>Trip Advisor</strong>
                                                                                <i class="fa fa-star bg-dark text-white p-1"></i>
                                                                                <i class="fa fa-star bg-dark text-white p-1"></i>
                                                                                <i class="fa fa-star bg-dark text-white p-1"></i>
                                                                                <i class="fa fa-star bg-dark text-white p-1"></i>
                                                                                <i class="fa fa-star bg-dark text-white p-1"></i> &nbsp; <i style="font-size:10px;">+ 50,000 Reviews</i>
                                                                            </div>
                                                                            <div class="col-xxl-5 col-lg-5 col-md-5 col-sm-12">
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
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    {{--@if (session('nationality') && session('visaType'))--}}
                    <div class="right-side-summery-box mt-5">
                        <div class="summery-box-2">
                            <div class="summery-header">
                                <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-8 col-8 col-lg-8 col-sm-8">
                                            <h3 style="font-size: 1.25rem;font-weight: 700;line-height: 28px;">Uganda Tourist eVisa </h3>
                                        </div>
                                        <div class="col-md-4 col-4 col-lg-4 col-sm-4" style="text-align:right;">
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
            <div class="container-fluid w-100">
                <div class="row">
                    <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                        <div class="order-detail mt-3 w-100">
                            <ol class="progtrckr2">
                                <li class="progtrckr-done2">
                                    <div class="circle">
                                        <span>&#10003;</span> <!-- Checkmark -->
                                    </div>
                                    <div class="label">Trip Details</div>
                                </li>
                                <li class="progtrckr-todo2">
                                    <div class="circle">2</div> <!-- Step number -->
                                    <div class="label">Your Info</div>
                                </li>
                                <li class="progtrckr-todo2">
                                    <div class="circle">3</div>
                                    <div class="label">Checkout</div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            @livewire('go-to-application-banner')
            <form wire:submit.prevent="AddInfo2">
                <div class="row g-sm-4 g-3">
                    <div class="col-lg-7">
                        <div class="left-sidebar-checkout">
                            <div class="checkout-detail-box">
                                <ul>
                                    <li>
                                        <div class="checkout-box bg-white">
                                            <div class="checkout-title">
                                                <h4 style="font-size: 1.50rem;font-weight: 700;line-height: 28px;">Your Trip Details</h4>
                                            </div>
                                            <div class="checkout-detail">
                                                <div class="row g-4">
                                                    <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                        <div>
                                                            <div class="row mt-3">
                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                    <label class="labels">When do you arrive in Uganda?</label>
                                                                    <input type="date" class="form-control mt-2" placeholder="DD/MM/YYYY" wire:model="arrival_date" required/>
                                                                </div>
                                                                @error('arrival_date') <small class="text-danger">{{ $message }}</small> @enderror
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                    <label class="labels">When do you leave in Uganda?</label>
                                                                    <input type="date" class="form-control mt-2" placeholder="DD/MM/YYYY" wire:model="departure_date" required/>
                                                                </div>
                                                                @error('departure_date') <small class="text-danger">{{ $message }}</small> @enderror
                                                            </div>
                                                            <div class="form-check custom-form-check custom-form-check-2 d-flex align-items-center mt-2">
                                                                <input class="form-check-input" style="border-radius:6px;" type="checkbox" wire:model="receive_updates" id="receive_updates" required>
                                                                <label class="form-check-label ms-2" for="receive_updates">

                                                                    I acknowledge that I need to provide a Yellow Fever Vaccination Card as part of the process, which must be issued at least 10 days after the vaccination date</label>
                                                                    @error('receive_updates') <small class="text-danger">{{ $message }}</small> @enderror
                                                            </div>

                                                            <div class="row mt-3">
                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                    <label class="labels">Email address</label>
                                                                    <input type="email" class="form-control mt-2" placeholder="johnsmith@gmail.com" wire:model="email" required/>
                                                                </div>
                                                                <small class="small mt-2">We use this to update you on your application..</small>
                                                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                                            </div>

                                                            <div class="form-check custom-form-check custom-form-check-2 d-flex align-items-center mt-2">
                                                                <input class="form-check-input" style="border-radius:6px;" type="checkbox" wire:model="receive_updates" id="receive_updates">
                                                                <label class="form-check-label ms-2" for="receive_updates">
                                                                    I want to receive Bar-Travel's updates, product launches and personalized offers. I can opt out anytime.</label>
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
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <div class="right-side-summery-box mt-5">
                            <div class="summery-box-2">
                                <div class="summery-header">
                                    <h3 style="font-size: 1.25rem;font-weight: 700;line-height: 28px;">Uganda Tourist eVisa </h3>
                                </div>
                                <ul class="summery-contain">
                                    <li>
                                        <h5>+ Government fees</h5>
                                        <h4 class="price">USD 200130.00</h4>
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
                        <p><i class="fa fa-user-plus mt-3"></i> <span style="font-weight:bold; font-size:16px;">Your info is safe with us!</span></p>
                        <small class="small mt-3">For more details see <a href="#!" style="color:blue; text-decoration:underline;">how we keep your data safe</a></small>
                        <p class="mt-4"><a href="#!" wire:click="goToPreviousStep" style="color:blue; font-size:18px; font-weight:bold;"> <i class="fa fa-arrow-left"> </i> Previous</a></p>
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
            <div class="row">
                <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                    <h2 class="fw-bold">Uganda Tourist eVisa • 180 days, Single entry</h2>
                </div>
            </div>
            <div class="container-fluid w-100">
                <div class="row">
                    <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                        <div class="order-detail mt-3 w-100">
                            <ol class="progtrckr2">
                                <li class="progtrckr-done2">
                                    <div class="circle">
                                        <span>&#10003;</span> <!-- Checkmark -->
                                    </div>
                                    <div class="label">Trip Details</div>
                                </li>
                                <li class="progtrckr-todo2">
                                    <div class="circle">2</div> <!-- Step number -->
                                    <div class="label">Your Info</div>
                                </li>
                                <li class="progtrckr-todo2">
                                    <div class="circle">3</div>
                                    <div class="label">Checkout</div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-sm-4 g-3">
                @livewire('go-to-application-banner')
                <form wire:submit.prevent="AddInfo3">
                    <div class="row g-sm-4 g-3">
                        <div class="col-lg-7">
                            <div class="left-sidebar-checkout">
                                <div class="checkout-detail-box">
                                    <ul>
                                        <li>
                                            <div class="checkout-box bg-white">
                                                <div class="checkout-title">
                                                    <h4 style="font-size: 1.50rem;font-weight: 700;line-height: 28px;">Your Personal Details</h4>
                                                </div>
                                                <p class="mb-4" style="font-size:18px;">This should match what's in your Passport</p>
                                                <div class="checkout-detail">
                                                    <div class="row g-4">
                                                        <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                            <div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label class="labels">First and middle name</label>
                                                                            <input type="text" class="form-control mt-2" placeholder="John William" wire:model="first_and_middle_name" required/>
                                                                        </div>
                                                                    </div>
                                                                    <small class="small mt-3">If you have a middle name, please include it.</small>
                                                                    @error('first_and_middle_name') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <label class="labels">Last Name</label>
                                                                        <input type="text" class="form-control mt-2" placeholder="Smith" wire:model="last_name" required/>
                                                                    </div>
                                                                    @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
                                                                </div>
                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                    <div class="row  mt-3">
                                                                        <label class="labels" for="days">Date of birth</label>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" id="days" name="days" wire:model="dob_day" required>
                                                                                <option value="">Day</option>
                                                                                @foreach($days as $day)
                                                                                <option value="{{ $day }}">{{ $day }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            @error('dob_day') <small class="text-danger">{{ $message }}</small> @enderror
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" wire:model="dob_month" required>
                                                                                <option value="" disabled>Month</option>
                                                                                @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                                                                <option value="{{ $month }}">{{ $month }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            @error('dob_month') <small class="text-danger">{{ $message }}</small> @enderror
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" placeholder="Year" wire:model="dob_year" required>
                                                                                <option>Year</option>
                                                                                @for ($year = date('Y'); $year >= 1900; $year--)
                                                                                <option value="{{ $year }}">{{ $year }}</option>
                                                                                @endfor
                                                                            </select>
                                                                            @error('dob_year') <small class="text-danger">{{ $message }}</small> @enderror
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

                                                <p class="mb-4" style="font-size:18px;">This should match what's in your Passport</p>

                                                <div class="checkout-detail">
                                                    <div class="row g-4">
                                                        <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                            <div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <label class="labels">First and middle name</label>
                                                                        <input type="text" class="form-control mt-2" placeholder="John William" wire:model="travelers.{{ $index }}.first_and_middle_name" />
                                                                    </div>
                                                                    <small class="small">If you have a middle name, please include it.</small>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <label class="labels">Last Name</label>
                                                                        <input type="text" class="form-control mt-2" placeholder="Smith" wire:model="travelers.{{ $index }}.last_name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                    <div class="row">
                                                                        <label class="labels mb-4">Date of birth</label>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" id="days" name="days" wire:model="dob_day">
                                                                                <option value="" disabled>Select Day</option>
                                                                                @foreach($days as $day)
                                                                                <option value="{{ $day }}">{{ $day }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" wire:model="dob_month">
                                                                                <option value="" disabled>Select Month</option>
                                                                                @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                                                                <option value="{{ $month }}">{{ $month }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4">
                                                                            <select class="form-select mt-2" placeholder="Year" wire:model="travelers.{{ $index }}.dob_year">
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
                                        <button class="btn add-another-traveler-button mt-4" type="button" wire:click="addTraveler"><i class="fa fa-plus-circle"></i> &nbsp; &nbsp; Add Another traveler</button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                            <div class="right-side-summery-box">
                                <div class="summery-box-2">
                                    <div class="summery-header">
                                        <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-8 col-8 col-lg-8 col-sm-8">
                                                    <h3 style="font-size: 1.25rem;font-weight: 700;line-height: 28px;">Uganda Tourist eVisa </h3>
                                                </div>
                                                <div class="col-md-4 col-4 col-lg-4 col-sm-4" style="text-align:right;">
                                                    <h6>{{ $travelerCount }} Traveler{{ $travelerCount > 1 ? 's' : '' }}</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <ul class="summery-contain">
                                        <li>
                                            <h5>+ Government fees</h5>
                                            <h4 class="price">USD 200130.00</h4>
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
                            <p><i class="fa fa-user-plus mt-3"></i> <span style="font-weight:bold; font-size:16px;">Your info is safe with us!</span></p>
                            <small class="small mt-3">For more details see <a href="#!" style="color:blue; text-decoration:underline;">how we keep your data safe</a></small>
                            <p class="mt-4"><a href="#!" wire:click="goToPreviousStep" style="color:blue; font-size:18px; font-weight:bold;"> <i class="fa fa-arrow-left"> </i> Previous</a></p>
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
        <div class="container-fluid w-100">
                <div class="row">
                    <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                        <div class="order-detail mt-3 w-100">
                            <ol class="progtrckr2">
                                <li class="progtrckr-done2">
                                    <div class="circle">
                                        <span>&#10003;</span> <!-- Checkmark -->
                                    </div>
                                    <div class="label">Trip Details</div>
                                </li>
                                <li class="progtrckr-done2">
                                    <div class="circle">2</div> <!-- Step number -->
                                    <div class="label">Your Info</div>
                                </li>
                                <li class="progtrckr-todo2">
                                    <div class="circle">3</div>
                                    <div class="label">Checkout</div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('go-to-application-banner')
            <div class="row g-sm-4 g-3">
                <form wire:submit.prevent="AddInfo4">
                    <div class="row g-sm-4 g-3">
                        <div class="col-lg-7">
                            <div class="left-sidebar-checkout">
                                <div class="checkout-detail-box">
                                    <ul>
                                        <li>
                                            <div class="checkout-box bg-white">
                                                <div class="checkout-title">
                                                    <h4 style="font-size: 1.50rem;font-weight: 700;line-height: 28px;">Your Passport Information</h4>
                                                </div>

                                                <div class="checkout-detail">
                                                    <div class="row g-4">
                                                        <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                            <div class="delivery-address-box">
                                                                <div>

                                                                    <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                                                                        <div>
                                                                            <div class="row mt-3">
                                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                                    <label class="labels">Nationality on passport</label>
                                                                                    <select class="form-select mt-2" id="days" name="days" wire:model="passport_nationality">
                                                                                        @foreach($countries as $country)
                                                                                        <option value="{{ $country['code'] }}">{{ $country['name'] }} - {{ $country['code'] }} </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                @error('passport_nationality') <small class="text-danger">{{ $message }}</small> @enderror
                                                                            </div>
                                                                            <div class="form-check custom-form-check custom-form-check-2 d-flex align-items-center mt-2">
                                                                                <input class="form-check-input" style="border-radius:6px;" type="checkbox" wire:model="skip_passport">
                                                                                <label class="form-check-label ms-2" for="desktop">
                                                                                    Skip entering passport information for now.
                                                                                </label>
                                                                            </div>

                                                                            <!-- Passport fields rendered only when skip_passport is false -->
                                                                            @if(!$skip_passport)
                                                                            <div class="row mt-3">
                                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                                    <label class="labels">Passport number</label>
                                                                                    <input type="text" class="form-control mt-2" placeholder="Smith" wire:model="passport_number" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mt-3">
                                                                                <div class="col-lg-12 col-sm-12 col-md-12">
                                                                                    <div class="row">
                                                                                        <label class="labels">Passport expiration</label>
                                                                                        <div class="col-lg-4 col-md-4">
                                                                                            <select class="form-select mt-2" id="days" name="days" placeholder="Day" wire:model="passport_expiry_date_day">
                                                                                                @foreach($days as $day)
                                                                                                <option value="{{ $day }}">{{ $day }}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4">
                                                                                            <select class="form-select mt-2" wire:model="passport_expiry_date_month" placeholder="Month">
                                                                                                @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                                                                                <option value="{{ $month }}">{{ $month }}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4">
                                                                                            <select class="form-select mt-2" placeholder="Year" wire:model="passport_expiry_date_year">
                                                                                                <option>Year</option>
                                                                                                @for ($year = date('Y'); $year >= 1900; $year--)
                                                                                                <option value="{{ $year }}">{{ $year }}</option>
                                                                                                @endfor
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @endif

                                                                            <div class="row mt-3">
                                                                                <div class="col-12  col-md-12 col-lg-12 col-sm-12">
                                                                                    <label class="labels">Country of birth</label>
                                                                                    <select class="form-select mt-2" placeholder="Country of Birth" wire:model="country_of_birth">
                                                                                        @foreach($countries as $country)
                                                                                        <option value="{{ $country['code'] }}">{{ $country['name'] }} - {{ $country['code'] }} </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    @error('country_of_birth') <small class="text-danger">{{ $message }}</small> @enderror
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
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                            <div class="right-side-summery-box mt-5">
                                <div class="summery-box-2">
                                    <div class="summery-header">
                                        <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-8 col-8 col-lg-8 col-sm-8">
                                                    <h3 style="font-size: 1.25rem;font-weight: 700;line-height: 28px;">Uganda Tourist eVisa</h3>
                                                </div>
                                                <div class="col-md-4 col-4 col-lg-4 col-sm-4" style="text-align:right;">
                                                    <h6>{{ $travelerCount }} Traveler{{ $travelerCount > 1 ? 's' : '' }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="summery-contain">
                                        <li>
                                            <h5>+ Government fees</h5>
                                            <h4 class="price">USD 200130.00</h4>
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
                            <p><i class="fa fa-user-plus mt-3"></i> <span style="font-weight:bold; font-size:16px;">Your info is safe with us!</span></p>
                            <small class="small mt-3">For more details see <a href="#!" style="color:blue; text-decoration:underline;">how we keep your data safe</a></small>
                            <p class="mt-4"><a href="#!" wire:click="goToPreviousStep" style="color:blue; font-size:18px; font-weight:bold;"> <i class="fa fa-arrow-left"> </i> Previous</a></p>
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
        <div class="container-fluid w-100">
                <div class="row">
                    <div class="col-12 col-xxl-12  col-md-12 col-lg-12 col-sm-12">
                        <div class="order-detail mt-3 w-100">
                            <ol class="progtrckr2">
                                <li class="progtrckr-done2">
                                    <div class="circle">
                                        <span>&#10003;</span> <!-- Checkmark -->
                                    </div>
                                    <div class="label">Trip Details</div>
                                </li>
                                <li class="progtrckr-done2">
                                    <div class="circle">2</div> <!-- Step number -->
                                    <div class="label">Your Info</div>
                                </li>
                                <li class="progtrckr-todo2">
                                    <div class="circle">3</div>
                                    <div class="label">Checkout</div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('go-to-application-banner')
            <div class="row g-sm-4 g-3">
                <form wire:submit.prevent="AddInfo5">
                    <div class="row g-sm-4 g-3">
                        <div class="col-lg-7 col-xxl-7 col-sm-12 col-md-7">

                            <div class="left-sidebar-checkout">
                                <div class="checkout-detail-box">
                                    <ul>
                                        <li>
                                            <div class="checkout-box bg-white">
                                                <div class="checkout-title">
                                                    <h4 style="font-size: 1.50rem;font-weight: 700;line-height: 28px;">Choose your processing time</h4>
                                                </div>


                                                <div class="checkout-detail">

                                                    <div class="row g-4">
                                                        <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                                                            <div class="delivery-address-box">
                                                                <div>
                                                                    <div class="col-12 col-xxl-12 col-md-12 col-lg-12 col-sm-12">
                                                                        <div class="row mt-3">
                                                                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                                                                <div class="card custom-card" style="height:102px;">
                                                                                    <div class="card-body">
                                                                                        <p class="mt-4">USD203,075.00 - Standard</p>
                                                                                        <p style="font-weight: bold; color: green">
                                                                                            9 day processing
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3">
                                                                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                                                                <div class="card custom-card" style="height:102px;">
                                                                                    <div class="card-body">
                                                                                        <p class="mt-4">USD300,726.00 - Rush</p>
                                                                                        <p style="font-weight: bold; color: green">
                                                                                            7 day processing
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3">
                                                                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                                                                <div class="card custom-card" style="height:102px;">
                                                                                    <div class="card-body">
                                                                                        <p class="mt-4">USD406,189.00 - Super Rush</p>
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
                        <div class="col-lg-1 col-xxl-1 col-sm-12 col-md-1"></div>
                        <div class="col-lg-4 col-xxl-4 col-sm-12 col-md-4">
                            <div class="right-side-summery-box mt-5">
                                <div class="summery-box-2">
                                    <div class="summery-header">
                                        <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-8 col-8 col-lg-8 col-sm-8">
                                                    <h3>Uganda Tourist eVisa</h3>
                                                </div>
                                                <div class="col-md-4 col-4 col-lg-4 col-sm-4" style="text-align:right;">
                                                    <h6>{{ $travelerCount }} Traveler{{ $travelerCount > 1 ? 's' : '' }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="summery-contain">
                                        <li>
                                            <h5>+ Government fees</h5>
                                            <h4 class="price">USD 200130.00</h4>
                                        </li>
                                        <li>
                                            <h5>+ Standard, 9 days</h5>
                                            <h4 class="price">USD 203075.00</h4>
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
                            <p><i class="fa fa-user-plus mt-3"></i> <span style="font-weight:bold; font-size:16px;">Your info is safe with us!</span></p>
                            <small class="small mt-3">For more details see <a href="#!" style="color:blue; text-decoration:underline;">how we keep your data safe</a></small>
                            <p class="mt-4"><a href="#!" wire:click="goToPreviousStep" style="color:blue; font-size:18px; font-weight:bold;"> <i class="fa fa-arrow-left"> </i> Previous</a></p>
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
                        <div class="col-xxl-7 col-lg-7 col-md-7 col-sm-12">
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
                                                        <div class="alert-icon" style="border-right: 0px;">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <div class="alert-text">
                                                            <span class="fw-bold">Finish your application now, and get it by Thursday, Dec 12, 2024</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="checkout-detail">
                                                    <div class="row g-4">
                                                        <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                                                            <div class="delivery-address-box">
                                                                <div>
                                                                    <div class="col-12 col-xxl-12 col-md-12 col-lg-12 col-sm-12">
                                                                        <div class="row mt-3">
                                                                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                                                                <div class="card custom-card" style="border:1px solid #E5E7EB; background:#fff;">
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6 col-lg-4 col-sm-4">
                                                                                                <span style="background-color:#add8e6; border-radius:50%; height:100px;  width:100px; display:flex; align-items:center; justify-content:center; margin-left:15px; margin-top:15px;">
                                                                                                    <img src="{{ asset('visa.png')}}"></span>
                                                                                            </div>
                                                                                            <div class="col-12 col-md-6 col-lg-6 col-sm-6">
                                                                                                <p>
                                                                                                <h4 style="font-weight:bold;">Uganda East Africa Visa</h4>
                                                                                                </p>
                                                                                                <p class="mt-3">Valid for: <span style="font-weight:bold;">180 days after arrival</span></p>
                                                                                                <p class="mt-3">Max stay: <span style="font-weight:bold;">90 days in total</span></p>
                                                                                                <p class="mt-3">Number of entries:<span style="font-weight:bold;">Multiple entry</span> </p>
                                                                                            </div>
                                                                                            <div class="col-12 col-md-6 col-lg-2 col-sm-2 text-end mt-3">
                                                                                                <button class="btn-primary btn-sm" style="padding:4px; border-radius:10px;">Standard</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <hr class="mb-4 mt-4">
                                                                                        <div class="row">
                                                                                            <p class="capitalize mb-3">travelers</p>
                                                                                            <p><i class="fa fa-user"></i> <span class="capitalize">Atim Esther</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-3">
                                                                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                                                                <div class="card custom-card" style="border:1px solid #E5E7EB; background:#fff;">
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-12 col-md-6 col-lg-6 col-sm-6 fw-bold mb-2">
                                                                                                <i class="fa fa-shield-virus text-warning"></i> &nbsp; Add denial protection <br>USD 58552.00
                                                                                            </div>
                                                                                            <div class="col-12 col-md-6 col-lg-6 col-sm-6 text-right mb-4">
                                                                                                <div class="form-check custom-form-check custom-form-check-2 d-flex justify-content-end align-items-center ms-auto">
                                                                                                    <input class="form-check-input" type="checkbox" id="">

                                                                                                </div>
                                                                                            </div>
                                                                                            <p><small class="small mt-5">Get a 100% refund on your order if your application is rejected by the government for any reason.</small></p>

                                                                                            <p class="text-center ,t-2"><a href="#!" style="color:blue;">Learn More</a></p>
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
                        <div class="col-lg-1 col-xxl-1 col-md-1 col-sm-12"></div>
                        <div class="col-lg-4 col-xxl-4 col-md-4 col-sm-12">
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
                                            <h4 class="price">USD 200130.00</h4>
                                        </li>
                                        <li>
                                            <h5>+ Standard, 9 days</h5>
                                            <h4 class="price">USD 203075.00</h4>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row mt-5 mb-4">
                                    <div class="right-side-summery-box">
                                        <div class="summery-box-2 border-0" style="background-color:#fff;">
                                            <ul class="summery-contain">
                                                <li>
                                                    <h5><span class="fw-bold">Total</span><br>
                                                        <small>For all travellers</small>
                                                    </h5>
                                                    <h4 class="price"><span class="fw-bold">USD 703047.00</span>
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
                                <p><i class="fa fa-user-plus mt-3"></i> <span style="font-weight:bold; font-size:16px;">Your info is safe with us!</span></p>
                                <small class="small mt-3">For more details see <a href="#!" style="color:blue; text-decoration:underline;">how we keep your data safe</a></small>
                                <p class="mt-4"><a href="#!" wire:click="goToPreviousStep" style="color:blue; font-size:18px; font-weight:bold;"> <i class="fa fa-arrow-left"> </i> Previous</a></p>
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
    <script>
        // Get the current date
        const now = new Date();
        const year = now.getFullYear();
        const month = now.getMonth(); // Month index (0 = January, 11 = December)

        // Get the number of days in the current month
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        // Populate the select dropdown
        const daysSelect = document.getElementById('days');
        for (let day = 1; day <= daysInMonth; day++) {
            const option = document.createElement('option');
            option.value = day;
            option.textContent = day;
            daysSelect.appendChild(option);
        }
    </script>
</div>