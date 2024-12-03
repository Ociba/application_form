<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <!-- Start of Step 1 -->
    @if ($currentStep == 1)
    <section class="checkout-section-2 section-b-space order-detail">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-lg-8">
                    <div class="left-sidebar-checkout">
                        <div class="checkout-detail-box">
                            <ul>
                                <li>
                                    <div class="checkout-box bg-white">
                                        <div class="checkout-title">
                                            <h4>Apply now for your Uganda Tourist eVisa</h4>
                                        </div>
                                        <hr>
                                        <div class="checkout-detail">
                                            <div class="row g-4">
                                                <div class="col-xxl-6 col-lg-12 col-md-6">
                                                    <div class="delivery-address-box">
                                                        <div>
                                                            <form wire:submit.prevent="AddInfo">
                                                                <ul class="delivery-address-detail">
                                                                    <li>
                                                                        <label>What is your nationality?</label>
                                                                        <select wire:model="nationality" class="form-select">
                                                                            <option>Select Country</option>
                                                                            <option value="Uganda">Uganda - UG</option>
                                                                            <option value="Kenya">Kenya - KE</option>
                                                                            <option value="Rwanda">Rwanda -Rw</option>
                                                                            <option value="Congo">Congo- DRC</option>
                                                                        </select>
                                                                        <small>Ensure you select the nationality of the passport you'll be traveling with.</small>
                                                                    </li>
                                                                    <li>
                                                                        <label>Applying for</label>
                                                                        <select wire:model="visaType" class="form-select">
                                                                            <option>Select One</option>
                                                                            <option value="Uganda Tourist evisa-180 days, Single entry">Uganda Tourist evisa-180 days, Single entry</option>
                                                                            <option value="Uganda East Africa visa - 180 days, Multiple entry">Uganda East Africa visa - 180 days, Multiple entry</option>
                                                                        </select>
                                                                    </li>
                                                                    <li>
                                                                        <button href="#" class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold" type="submit">
                                                                        <span wire:loading wire:target="AddInfo">
                                                                        <i class="fa fa-spinner fa-spin"></i>
                                                                        </span>
                                                                        <span wire:loading.remove wire:target="AddInfo">Start your appllication</span>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </form>
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
                    @if (session('nationality') && session('visaType'))
                    <div class="right-side-summery-box">
                        <div class="summery-box-2">
                            <div class="summery-header">
                                <h3>Uganda Tourist eVisa <span style="background-color:light-green; color:fff;">Most popular</span></h3>
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
                    @endif
                </div>
                <button wire:click="forgetSessionData" class="btn btn-danger">Forget Session</button>
            </div>
        </div>
    </section>
    <!--End of step 1 -->
    @elseif ($currentStep == 2)
    <!-- Start of Step 2 -->
    <section class="order-detail">
        <div class="row g-sm-4 g-3">
            <div class="col-12 overflow-hidden">
                <ol class="progtrckr">
                    <li class="progtrckr-done">
                        <h5>1</h5>
                    </li>
                    <li class="progtrckr-todo">
                        <h5>2</h5>
                    </li>
                    <li class="progtrckr-todo">
                        <h5>3</h5>
                    </li>
                </ol>
            </div>
        </div>
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
                                                <div class="col-xxl-6 col-lg-12 col-md-6">
                                                    <div class="delivery-address-box">
                                                        <div>
                                                            <ul class="delivery-address-detail">
                                                                <li>
                                                                    <label>When do you arrive in Uganda?</label>
                                                                    <input type="date" class="form-control" placeholder="DD/MM/YYYY" wire:model="arrival_date" />
                                                                </li>
                                                                <li>
                                                                    <label>When do you leave Uganda?</label>
                                                                    <input type="date" class="form-control" placeholder="DD/MM/YYYY" wire:model="departure_date" />
                                                                </li>
                                                                <li>
                                                                    <label>Email address</label>
                                                                    <input type="type" class="form-control" placeholder="johnsmith@gmail.com" wire:model="email" />
                                                                    <small>We use this to create your iVisa account and send you updates about your application.</small>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                                        <input class="form-check-input" type="checkbox" wire:model="receive_updates" id="receive_updates">
                                                                        <label class="form-check-label ms-2" for="receive_updates">
                                                                        I want to receive iVisa's updates, product launches and personalized offers. I can opt out anytime.</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                </li>
                                                            </ul>
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
                            <div class="summery-box-2" style="background-color:#fff;">
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
                    <button href="#" class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold" type="submit">
                    <span wire:loading wire:target="AddInfo2">
                    <i class="fa fa-spinner fa-spin"></i>
                    </span>
                    <span wire:loading.remove wire:target="AddInfo2">Save and continue</span>
                    </button>
                    <p><i class="fa fa-user-plus mt-3"></i> <span class="fw-bold">Your info is safe with us!</span></p>
                    <small>For more details see <a href="#!">how we keep your data safe</a></small>
                    <p><a href=""> <i class="fa fa-arrow-left"> </i> Previous</a></p>
                </div>
            </div>
        </form>
    </section>
    <!--End of Step 2-->
    @elseif ($currentStep == 3)
    <!-- Start of Step 3 -->
    <section class="order-detail">
        <div class="container-fluid-l">
        <div class="row g-sm-4 g-3">
            <div class="col-12 overflow-hidden">
                <ol class="progtrckr">
                    <li class="progtrckr-done">
                        <h5>1</h5>
                    </li>
                    <li class="progtrckr-done">
                        <h5>2</h5>
                    </li>
                    <li class="progtrckr-todo">
                        <h5>3</h5>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row g-sm-4 g-3">
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
                                                    <div class="col-xxl-6 col-lg-12 col-md-6">
                                                        <div class="delivery-address-box">
                                                            <div>
                                                                <ul class="delivery-address-detail">
                                                                    <li>
                                                                        <label>First and middle name</label>
                                                                        <input type="text" class="form-control" placeholder="John William" wire:model="first_and_middle_name" />
                                                                        <small>If you have a middle name, please include it.</small>
                                                                    </li>
                                                                    <li>
                                                                        <label>Last name</label>
                                                                        <input type="text" class="form-control" placeholder="Smith" wire:model="last_name" />
                                                                    </li>
                                                                    <li>
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
                                                                    </li>
                                                                </ul>
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
                                    <h3>
                                        Uganda Tourist eVisa
                                        <span style="font-weight:lighter;">
                                            <h6>1 Traveler</h6>
                                        </span>
                                    </h3>
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
                                <div class="summery-box-2" style="background-color:#fff;">
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
                        <button href="#" class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold" type="submit">
                        <span wire:loading wire:target="AddInfo2">
                        <i class="fa fa-spinner fa-spin"></i>
                        </span>
                        <span wire:loading.remove wire:target="AddInfo2">Save and continue</span>
                        </button>
                        <p><i class="fa fa-user-plus mt-3"></i> <span class="fw-bold">Your info is safe with us!</span></p>
                        <small>For more details see <a href="#!">how we keep your data safe</a></small>
                        <p><a href=""> <i class="fa fa-arrow-left"> </i> Previous</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End of Step 3 -->
    @elseif ($currentStep == 4)
    <!-- Start of Step 4 -->
    <section class="order-detail">
        <div class="container-fluid-l">
            <div class="row g-sm-4 g-3">
                <div class="col-12 overflow-hidden">
                    <ol class="progtrckr">
                        <li class="progtrckr-done">
                            <h5>1</h5>
                        </li>
                        <li class="progtrckr-done">
                            <h5>2</h5>
                        </li>
                        <li class="progtrckr-done">
                            <h5>3</h5>
                        </li>
                        <li class="progtrckr-todo">
                            <h5>4</h5>
                        </li>
                    </ol>
                </div>
            </div>
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
                                                        <div class="col-xxl-6 col-lg-12 col-md-6">
                                                            <div class="delivery-address-box">
                                                                <div>
                                                                    <ul class="delivery-address-detail">
                                                                        <li>
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
                                                                        </li>
                                                                        <li>
                                                                            <div class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                                                <input class="form-check-input" type="checkbox">
                                                                                <label class="form-check-label ms-2" for="desktop">
                                                                                Skip entering passport information for now
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <label>Passport number</label>
                                                                            <input type="text" class="form-control mt-2" placeholder="Smith" wire:model="passport_number" />
                                                                        </li>
                                                                        <li>
                                                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                                                <div class="row">
                                                                                    <label>Passport expiration date</label>
                                                                                    <div class="col-lg-4 col-md-4">
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
                                                                        </li>
                                                                        <li>
                                                                            <label>Country of birth</label>
                                                                            <select class="form-select mt-2" placeholder="Country of Birth" wire:model="country_of_birth">
                                                                                <option>Country Of Birth</option>
                                                                                <option value="Uganda">Uganda - UG</option>
                                                                                <option value="Kenya">Kenya - KE</option>
                                                                                <option value="Rwanda">Rwanda - RW</option>
                                                                                <option value="South Sudan">South Sudan - SS</option>
                                                                            </select>
                                                                        </li>
                                                                    </ul>
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
                                        <h3>
                                            Uganda Tourist eVisa
                                            <span style="font-weight:lighter;">
                                                <h6>1 Traveler</h6>
                                            </span>
                                        </h3>
                                    </div>
                                    <ul class="summery-contain">
                                        <li>
                                            <h5>+ Government fees</h5>
                                            <h4 class="price">USh 200130.00</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="right-side-summery-box">
                                    <div class="summery-box-2" style="background-color:#fff;">
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
                            <button href="#" class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold" type="submit">
                            <span wire:loading wire:target="AddInfo4">
                            <i class="fa fa-spinner fa-spin"></i>
                            </span>
                            <span wire:loading.remove wire:target="AddInfo4">Save and continue</span>
                            </button>
                            <p><i class="fa fa-user-plus mt-3"></i> <span class="fw-bold">Your info is safe with us!</span></p>
                            <small>For more details see <a href="#!">how we keep your data safe</a></small>
                            <p><a href=""> <i class="fa fa-arrow-left"> </i> Previous</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End of Step 4 -->
    @elseif ($currentStep == 5)
    <p>Next Stage</p>
    @endif
</div>