<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
     <form wire:submit.prevent="sendInquiry"  id="contactForm">
                      <h2>I want to trade my Wrecked car</h2>
                      <ul>
                        <li><input type="text" required  wire:model="name" class="form-control  @error('name') border border-danger @enderror" placeholder="Your Name*"  data-error="Please enter your name">

                                <div class="help-block with-errors">
                                    @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                        </li>
                        <li><input type="tel"  wire:model="phone_no" class="form-control @error('phone_no') border border-danger @enderror" placeholder="Phone No" required>
                                   <div class="help-block with-errors">
                                    @error('phone_no') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                        </li>
                        <li><input type="text"  wire:model="vehicle_no" class="form-control @error('vehicle_no') border border-danger @enderror" placeholder="Vehicle No " required>
                        <div class="help-block with-errors">
                                    @error('vehicle_no') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                        </li>
                        <li><input type="file" class="form-control" placeholder="Upload Car Image "></li>
                        <li><button type="submit" class="btn">SUBMIT NOW</button></li>
                      </ul>
    </form>
</div>