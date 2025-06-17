<div>
    {{-- @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}
    <form wire:submit.prevent="save">
    <div class="row gy-4">

        <div class="col-md-6">
            <input type="text" wire:model.lazy="name" class="form-control" placeholder="Your Name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-6">
            <input type="email" wire:model.lazy="email" class="form-control" placeholder="Your Email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-12">
            <input type="text" wire:model.lazy="subject" class="form-control" placeholder="Subject">
            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-12">
            <textarea class="form-control" wire:model.lazy="message" rows="6" placeholder="Message"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-12 text-center">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <button class="btn btn-primary mt-3" type="submit" style="border-radius: 5px">
                Send message <i class="bi bi-arrow-right"></i>
            </button>
        </div>

    </div>
</form>

</div>
