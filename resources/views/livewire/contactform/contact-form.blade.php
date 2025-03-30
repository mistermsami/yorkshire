<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div> 
    @endif
    <form wire:submit.prevent="save" class="php-email-form" action="javascript:void(0);">
        <div class="row gy-4">

            <div class="col-md-6">
                <input type="text" wire:model="name" name="name" class="form-control" placeholder="Your Name" required="">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6 ">
                <input type="email" class="form-control" wire:model="email" name="email" placeholder="Your Email" required="">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div class="col-md-12">
                <input type="text" class="form-control" wire:model="subject" name="subject" placeholder="Subject" required="">
                @error('subject') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div class="col-md-12">
                <textarea class="form-control" name="message" wire:model="message" rows="6" placeholder="Message" required=""></textarea>
                @error('message') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <div class="text-center"><button class="btn btn-primary mt-3" type="submit"
                        style="border-radius: 5px">Send message
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </form>
</div>
