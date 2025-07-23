<div>
    {{-- <div class="container d-flex justify-content-center"> 
        <div class="col-md-10"> 
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form wire:submit.prevent="save" class="bg-white p-4 rounded shadow" action="javascript:void(0);">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" wire:model="name" class="form-control" id="name"
                            placeholder="Your Name" required>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" wire:model="email" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" wire:model="contact" name="contact" id="contact"
                            placeholder="Your Phone" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group mt-3">
                        <input type="date" name="date" wire:model="date" class="form-control"
                            id="date" placeholder="Appointment Date" required>
                    </div>
                    <div class="col-md-8 form-group mt-3">
                        <select name="appointment_type" required id="appointment_type" wire:model="appointment_type"
                            class="form-select" required="">
                            <option value="">Select Treatment</option>
                            <option value="Hair Transplant">Hair Transplant</option>
                            <option value="Face Treatment">Face Treatment</option>
                            <option value="Microneedling">Microneedling</option>
                            <option value="Laser Hair Removal">Laser Hair Removal</option>
                            <option value="HydraFacial">HydraFacial</option>
                            <option value="Tanning Bed">Tanning Bed</option>
                            <option value="PRP">PRP</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" wire:model="message" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                </div>
                <div class="text-center"><button class="btn btn-primary mt-3" type="submit">Make an Appointment
                        <i class="fas fa-calendar-check me-3"></i>
                    </button>
                </div>
            </form>
        </div>
    </div> --}}
    <div class="appointment-form-wrapper">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form wire:submit.prevent="save" class="appointment-form" action="javascript:void(0);" id="appointment">
            <div class="form-header">
                <h3 class="form-title">Book Your Consultation</h3>
            </div>

            <div class="form-row">
                <div class="form-group half-width">
                    <input type="text" placeholder="Your Name" name="name" wire:model="name" required>
                </div>
                <div class="form-group half-width">
                    <input type="email" placeholder="Your email" wire:model="email" name="email" required>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group half-width">
                    <input type="tel" placeholder="contact" wire:model="contact" name="contact" required>
                </div>
            </div>

            <div class="form-group">

                <select name="appointment_type" required id="appointment_type" wire:model="appointment_type" required>
                    <option value= "" selected>Select Service</option>
                    <option value="Hair Growth Treatments">Hair Growth Treatments</option>
                    <option value="Laser Hair Removal">Laser Hair Removal</option>
                    <option value="Vitamin Injections">Vitamin Injections</option>
                    <option value="HydraFacial">HydraFacial</option>
                    <option value="Teeth Whitening">Teeth Whitening</option>
                    <option value="IV Drips">IV Drips</option>
                    <option value="Skin Rejuvanation Treatments">Skin Rejuvanation Treatments</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group half-width">
                    <input type="date" placeholder="Date" name="date" wire:model="date" required>
                </div>
            </div>

            <button type="submit" class="submit-btn">
                <span class="btn-text">Book Now</span>
                <span class="btn-icon">→</span>
            </button>

            <p class="form-footer">Let’s connect! We’ll reach out within 24 hours</p>
        </form>
    </div>
</div>
