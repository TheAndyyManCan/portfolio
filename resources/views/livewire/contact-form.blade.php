<div class="lg:flex lg:pt-32 lg:px-32 px-8">
    <div class="lg:w-1/2 w-full text-center text-2xl m-auto">
        So far {{ $count }} people have messaged me<br /><br />
        Maybe they were offering me a job!<br /><br />
        Better get in there quick!<br /><br />
    </div>
    <div class="bg-dark-300 text-dark-600 rounded-xl lg:w-1/2 w-full lg:mx-32">
        @if(!$messageSent)
            <form wire:submit="store" class="p-8">
                <x-form-input name="name" />
                    @error('name')
                        <div class="ml-4 text-red-800 text-xs">
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                <x-form-input name="email" type="email" />
                    @error('email')
                        <div class="ml-4 text-red-800 text-xs">
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                <x-form-input name="subject" />
                    @error('subject')
                        <div class="ml-4 text-red-800 text-xs">
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                <x-form-input name="message" type="textarea" />
                    @error('message')
                        <div class="ml-4 text-red-800 text-xs">
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                <x-submit-button class="ml-4 mt-2">Submit</x-submit-button>
            </form>
        @else
            <div class="text-center p-32">
                Your message has been sent! I will get back to you as soon as possible!
            </div>
        @endif
    </div>
</div>
