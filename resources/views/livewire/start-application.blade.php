<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
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
                                                                <select class="form-select">
                                                                    <option></option>
                                                                    <option></option>
                                                                    <option></option>
                                                                    <option></option>
                                                                    <option></option>
                                                                </select>
                                                                <small>Ensure you select the nationality of the passport you'll be traveling with.</small>
                                                            </li>

                                                            <li>
                                                                <label>Applying for</label>
                                                                <select class="form-select">
                                                                    <option></option>
                                                                    <option></option>
                                                                    <option></option>
                                                                    <option></option>
                                                                    <option></option>
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
            <div class="right-side-summery-box">
                <div class="summery-box-2">
                    <div class="summery-header">
                        <h3>Uganda Tourist eVisa <span style="background-color:light-green; color:fff;">Most popular</span></h3>
                    </div>

                    <ul class="summery-contain">
                        <li>
                            <i data-feather="calendar"></i> &nbsp;
                            <h5>Valid for</h5>
                            <h4 class="price">180 days after arrival</h4>
                        </li>

                        <li>
                            <i data-feather="eye"></i> &nbsp;
                            <h5>Number of entries</h5>
                            <h4 class="price">Multiple entry</h4>
                        </li>
                        <li>
                            <i data-feather="clock"></i> &nbsp;
                            <h5>Max stay</h5>
                            <h4 class="price">90 days in total</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start of Step 1 -->
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
                                                                        <input type="date" class="form-control" placeholder="DD/MM/YYYY" />
                                                                    </li>

                                                                    <li>
                                                                        <label>When do you leave Uganda?</label>
                                                                        <input type="date" class="form-control" placeholder="DD/MM/YYYY" />
                                                                    </li>
                                                                    <li>
                                                                        <label>Email address</label>
                                                                        <input type="type" class="form-control" placeholder="johnsmith@gmail.com" />
                                                                        <small>We use this to create your iVisa account and send you updates about your application.</small>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                                            <input class="form-check-input" type="checkbox">
                                                                            <label class="form-check-label ms-2" for="desktop">
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
    <!-- End of Step 1 -->


     <!-- Start of Step 2 -->
     <section class="order-detail">
        <div class="container-fluid-l">
            <div class="row g-sm-4 g-3">
            <form wire:submit.prevent="AddInfo2">
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
                                                                        <input type="text" class="form-control" placeholder="John William" />
                                                                        <small>If you have a middle name, please include it.</small>
                                                                    </li>

                                                                    <li>
                                                                        <label>Last name</label>
                                                                        <input type="text" class="form-control" placeholder="Smith" />
                                                                    </li>
                                                                    <li>
                                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                                             <div class="row">
                                                                                  <label>Date of birth</label>
                                                                                  <div class="col-lg-4 col-md-4">
                                                                                    <select class="form-select mt-2" placeholder="Day">
                                                                                        <option >Day</option>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="4">4</option>
                                                                                        <option value="5">5</option>
                                                                                        <option value="6">6</option>
                                                                                    </select> 
                                                                                  </div>
                                                                                  <div class="col-lg-4 col-md-4">
                                                                                    <select class="form-select mt-2" placeholder="Month">
                                                                                        <option >Month</option>
                                                                                        <option value="January">January</option>
                                                                                        <option value="February">February</option>
                                                                                        <option value="March">March</option>
                                                                                        <option value="April">April</option>
                                                                                        <option value="May">May</option>
                                                                                        <option value="June">June</option>
                                                                                    </select>
                                                                                  </div>
                                                                                  <div class="col-lg-4 col-md-4">
                                                                                  <select class="form-select mt-2" placeholder="Year">
                                                                                        <option >Year</option>
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
                                    <h3>Uganda Tourist eVisa <span style="font-weight:lighter;"><h6>1 Traveler</h6></span></h3> 
                                      
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
    <!-- End of Step 2 -->


    <!-- Start of Step 3 -->
    <section class="order-detail">
        <div class="container-fluid-l">
            <div class="row g-sm-4 g-3">
            <form wire:submit.prevent="AddInfo2">
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
                                                                        <select class="form-select mt-2" placeholder="">
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
                                                                        <input type="text" class="form-control mt-2" placeholder="Smith" />
                                                                    </li>
                                                                    <li>
                                                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                                                             <div class="row">
                                                                                  <label>Passport expiration date</label>
                                                                                  <div class="col-lg-4 col-md-4">
                                                                                    <select class="form-select mt-2" placeholder="Day">
                                                                                        <option >Day</option>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="4">4</option>
                                                                                        <option value="5">5</option>
                                                                                        <option value="6">6</option>
                                                                                    </select> 
                                                                                  </div>
                                                                                  <div class="col-lg-4 col-md-4">
                                                                                    <select class="form-select mt-2" placeholder="Month">
                                                                                        <option >Month</option>
                                                                                        <option value="January">January</option>
                                                                                        <option value="February">February</option>
                                                                                        <option value="March">March</option>
                                                                                        <option value="April">April</option>
                                                                                        <option value="May">May</option>
                                                                                        <option value="June">June</option>
                                                                                    </select>
                                                                                  </div>
                                                                                  <div class="col-lg-4 col-md-4">
                                                                                  <select class="form-select mt-2" placeholder="Year">
                                                                                        <option >Year</option>
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
                                                                    <select class="form-select mt-2" placeholder="Day">
                                                                        <option >Day</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
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
                                    <h3>Uganda Tourist eVisa <span style="font-weight:lighter;"><h6>1 Traveler</h6></span></h3> 
                                      
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


</div>