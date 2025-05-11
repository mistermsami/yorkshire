{{-- Hydra-fecial Appointment Page --}}
<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form wire:submit.prevent="save" class="bg-white p-4 rounded shadow" action="javascript:void(0);">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" wire:model="name" name="name"
                            placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" wire:model="email" name="email"
                            placeholder="Your Email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="number" class="form-control" wire:model="contact" name="contact"
                            placeholder="Your Contact number" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="date" class="form-control" wire:model.live="date" date="date"
                            placeholder="mm/dd/yyy" step="" required id="hourOnly">
                    </div>
                    <div class="col-md-6 mb-3">
                        <select id="customTime" class="form-control" wire:model="time" required name="time">
                            <option value="">Select Time</option>
                            @foreach (['10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00'] as $slot)
                                <option value="{{ $slot }}"
                                    {{ in_array($slot, $bookedTimes) ? 'disabled' : '' }}>
                                    {{ $slot }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <select class="form-select" wire:model="appointment_type" name="appointment_type"
                            id="appointmentSelect">
                            <option selected>Select Treatment</option>
                            <option value="Signature HydraFacial">Signature HydraFacial</option>
                            <option value="Advance Face detox facial">Advance Face detox facial</option>
                            <option>Platinum HydraFacial ($249)</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" wire:model="message" name="message" rows="3"
                        placeholder="Any special requests or concerns?"></textarea>
                </div>
                <button type="submit" class="btn hydrafacial-btn-primary w-100">Request
                    Appointment</button>
            </form>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
