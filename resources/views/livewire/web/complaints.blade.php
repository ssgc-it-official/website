<div>
    <x-breadcrumb title="Complaints / Feedback" watermark="Complaints / Feedback"/>

    <div class="bread-crumb-large-area tmp-section-gapBottom pt--80 pt_md--40 pt_sm--40">
        <div class="container">
            <div class="row">
                <div class="container my-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            @if ($submitted)
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Your complaint has been submitted successfully. A copy has been sent to your email
                                    address.
                                    <button type="button" class="btn-close" wire:click="$set('submitted', false)"
                                            aria-label="Close"></button>
                                </div>
                            @endif

                            <form wire:submit="submit" novalidate>
                                <div class="row g-3">
                                    {{-- Customer Type --}}
                                    <div class="col-12">
                                        <label class="form-label fw-semibold d-block">Customer Type <span
                                                class="text-danger">*</span></label>
                                        @foreach (['domestic' => 'Domestic', 'commercial' => 'Commercial', 'industrial' => 'Industrial'] as $value => $label)
                                            <div class="form-check form-check-inline">
                                                <input
                                                    class="form-check-input @error('customer_type') is-invalid @enderror"
                                                    type="radio"
                                                    wire:model="customer_type"
                                                    id="type_{{ $value }}"
                                                    value="{{ $value }}"
                                                >
                                                <label class="form-check-label"
                                                       for="type_{{ $value }}">{{ $label }}</label>
                                            </div>
                                        @endforeach
                                        @error('customer_type')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row g-3 mt-5">
                                    {{-- Customer Number & Meter Number --}}
                                    <div class="col-md-6">
                                        <label for="customer_number" class="form-label">Customer Number <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="customer_number" wire:model="customer_number"
                                               class="form-inputs @error('customer_number') is-invalid @enderror">
                                        @error('customer_number')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="meter_number" class="form-label">Meter Number <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="meter_number" wire:model="meter_number"
                                               class="form-inputs @error('meter_number') is-invalid @enderror">
                                        @error('meter_number')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- Name & Designation --}}
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Full Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="name" wire:model="name"
                                               class="form-inputs @error('name') is-invalid @enderror">
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="designation" class="form-label">Designation</label>
                                        <input type="text" id="designation" wire:model="designation"
                                               class="form-inputs @error('designation') is-invalid @enderror">
                                        @error('designation')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- Company --}}
                                    <div class="col-12">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text" id="company" wire:model="company"
                                               class="form-inputs @error('company') is-invalid @enderror">
                                        @error('company')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- Address --}}
                                    <div class="col-12">
                                        <label for="address" class="form-label">Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="address" wire:model="address"
                                               class="form-inputs @error('address') is-invalid @enderror">
                                        @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- City, State, Post Code --}}
                                    <div class="col-md-5">
                                        <label for="city" class="form-label">City <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="city" wire:model="city"
                                               class="form-inputs @error('city') is-invalid @enderror">
                                        @error('city')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="state" class="form-label">State / Province <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="state" wire:model="state"
                                               class="form-inputs @error('state') is-invalid @enderror">
                                        @error('state')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <label for="post_code" class="form-label">Post Code</label>
                                        <input type="text" id="post_code" wire:model="post_code"
                                               class="form-inputs @error('post_code') is-invalid @enderror">
                                        @error('post_code')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- Email & Phone --}}
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address <span
                                                class="text-danger">*</span></label>
                                        <input type="email" id="email" wire:model="email"
                                               class="form-inputs @error('email') is-invalid @enderror">
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" id="phone" wire:model="phone"
                                               class="form-inputs @error('phone') is-invalid @enderror">
                                        @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- Message --}}
                                    <div class="col-12">
                                        <label for="message" class="form-label">Complaint Details <span
                                                class="text-danger">*</span></label>
                                        <textarea id="message" rows="4" wire:model="message"
                                                  class="form-inputs @error('message') is-invalid @enderror"></textarea>
                                        @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- Submit Button --}}
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary bg-gradient rounded py-2" style="font-size:1em" wire:loading.attr="disabled">
                                            <span wire:loading.remove wire:target="submit">Submit Complaint</span>
                                            <span wire:loading wire:target="submit">
                                <span class="spinner-border spinner-border-sm me-1" role="status"
                                      aria-hidden="true"></span>
                                Sending...
                            </span>
                                        </button>
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
