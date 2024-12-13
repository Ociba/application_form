<div>

    <div class="row">
        <div class="card">
        
            <div class="card-body">
                <h5>Card Confirmation</h5>
                <form  class="mt-4" wire:submit.prevent="">
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <input type="text" wire:model="category" class="form-control" placeholder="Card number" />
                            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" wire:model="category" class="form-control" placeholder="MM/YY" />
                            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" wire:model="category" class="form-control" placeholder="CW" />
                            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3 col-lg-12">
                            <input type="text" wire:model="category" class="form-control" placeholder="Cardholder name" />
                            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3 col-lg-12">
                            <input type="text" wire:model="category" class="form-control" placeholder="Pay USD 605396.00" readonly />
                            @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-lg-12">
                            <p class="text-muted">
                                <small class="fw-bold">
                                    By submitting payment, I acknowledge that I have read and accept the iVisa
                                    <a href="#!" style="text-decoration: underline;">Terms of Service, Privacy Policy, and Refund Policy</a>.
                                </small>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>