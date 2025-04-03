<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="stepper d-flex justify-content-between">
        <div class="step active">Step 1</div>
        <div class="step">Step 2</div>
        <div class="step">Step 3</div>
    </div>
    <form wire:submit.prevent="save" class="php-email-form" action="javascript:void(0);">
        <!-- Step 1: User Details -->
        <div class="step-content active">
            <div class="row gy-4">
                <div class="col-md-6">
                    <input type="text" wire:model="name" name="name" class="form-control" placeholder="Your Name"
                        required>
                </div>
                <div class="col-md-6">
                    <input type="tel" class="form-control" name="contact" wire:model="contact"
                        placeholder="Phone Number" required>
                </div>
                <div class="col-md-12">
                    <input type="email" wire:model="email" class="form-control" name="email" placeholder="Email"
                        required>
                </div>
                <div class="col-md-12">
                    <select name="branch" wire:model="branch" class="form-select" required>
                        <option value="">Preferred Clinic*</option>
                        <option value="London">London</option>
                        <option value="Leeds">Leeds</option>
                        <option value="Manchester">Manchester</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <select name="contact_type" wire:model="contact_type" class="form-select" required>
                        <option value="">Preferred Contact Method</option>
                        <option value="0">Mobile</option>
                        <option value="1">Email</option>
                    </select>
                </div>
            </div>
            <button type="button" class="btn btn-primary next-step primartbtn">Next</button>
        </div>

        <!-- Step 2: Date Selection -->
        <div class="step-content">
            <h3>Select a Date</h3>
            {{-- <input type="date" name="appointment_date" class="form-control active" required> --}}

            <div class="row gy-4">
                <div class="col-md-6">
                    <select id="month-selector" wire:model="month" name="month" class="form-select">
                        <option value="">Select Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select id="year-selector" wire:model="year" name="year" class="form-select">
                        <option value="">Select Year</option>
                        <option value="2025" selected>2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <div id="custom-calendar" class="calendar-container form-control"></div>
                    <input type="hidden" name="day" wire:model="day" required id="day" value="">
                </div>
            </div>

            {{-- <input type="text" id="calendar" class="form-control" placeholder="Pick a Date" required> --}}
            <button type="button" class="btn btn-secondary prev-step previousbtn">Previous</button>
            <button type="button" class="btn btn-primary next-step primartbtn">Next</button>
        </div>

        <!-- Step 3: Time Selection -->
        <div class="step-content">
            <h3>Select a Time</h3>
            {{-- <input type="time" name="appointment_time" class="form-control" required> --}}
            <div class="col-md-12">
                <select wire:model="time" name="time" class="form-select" required>
                    <option value="">Preferred Time*</option>
                    <option value="9:00am">9:00 am</option>
                    <option value="10:00am">10: 00 am</option>
                    <option value="11:00am">11:00 am</option>
                    <option value="11:00am">11:00 am</option>
                    <option value="12:00pm">12:00 pm</option>
                    <option value="01:00pm">01:00 pm</option>
                    <option value="02:00pm">02:00 pm</option>
                    <option value="03:00pm">03:00 pm</option>
                    <option value="04:00pm">04:00 pm</option>
                    <option value="05:00pm">05:00 pm</option>
                    <option value="06:00pm">06:00 pm</option>
                </select>
            </div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
            <button type="button" class="btn btn-secondary prev-step previousbtn">Previous</button>
            <button type="submit" class="btn btn-success primartbtn">Submit</button>
        </div>
    </form>
    <!-- End Contact Form -->

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $(document).ready(function() {
            let currentStep = 0;
            const steps = $(".step-content");
            const indicators = $(".step");

            function showStep(index) {
                steps.removeClass("active");
                indicators.removeClass("active");
                $(steps[index]).addClass("active");
                $(indicators[index]).addClass("active");
            }

            function validateStep(index) {
                let isValid = true;
                $(steps[index]).find("input[required], select[required]").each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("is-invalid");
                        isValid = false;
                    } else {
                        $(this).removeClass("is-invalid");
                    }
                });
                return isValid;
            }

            $(".next-step").click(function() {
                if (validateStep(currentStep) && currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            });

            $(".prev-step").click(function() {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });
            // Livewire Event Listener to Reset Stepper
            Livewire.on("resetStepper", () => {
                currentStep = 0; // Reset to Step 1
                showStep(currentStep);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                layoutMode: 'fitRows',
                filter: '.Doctor1' // Show only Category 1 by default
            });

            $('.filter-button').on('click', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });

                // Remove active class and add it to the clicked button
                $('.filter-button').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
    {{-- date picker --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const calendarContainer = document.getElementById("custom-calendar");
            const monthSelector = document.getElementById("month-selector");
            const yearSelector = document.getElementById("year-selector");
            let selectedDate = null;

            function generateCalendar() {
                calendarContainer.innerHTML = ""; // Clear previous dates 
                $("#day").val(""); /* clear the day */
                const month = parseInt(monthSelector.value);
                const year = parseInt(yearSelector.value);
                const daysInMonth = new Date(year, month, 0).getDate();

                for (let day = 1; day <= daysInMonth; day++) {
                    let dayBox = document.createElement("div");
                    dayBox.classList.add("day-box");
                    dayBox.textContent = day;

                    dayBox.addEventListener("click", function() {
                        if (selectedDate) {
                            selectedDate.classList.remove("selected");
                            $("#day").val("");
                        }
                        selectedDate = dayBox;
                        document.getElementById("day").value = day;
                        document.getElementById("day").dispatchEvent(new Event(
                        'input')); // Notify Livewire 
                        selectedDate.classList.add("selected");
                    });
                    calendarContainer.appendChild(dayBox);

                }
            }

            monthSelector.addEventListener("change", generateCalendar);
            yearSelector.addEventListener("change", generateCalendar);
            generateCalendar(); // Initial load
        });
    </script>
</div>
