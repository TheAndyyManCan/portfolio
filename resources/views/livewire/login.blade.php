<div class="bg-gray-200 rounded-xl w-1/2 mx-auto">
    <form wire:submit="login" class="p-6">
        <x-form-input name="email" type="email" />
        @error('email')
            <div>
                <span>{{ $message }}</span>
            </div>
        @enderror
        <x-form-input name="password" type="password" />
        @error('password')
            <div>
                <span>{{ $message }}</span>
            </div>
        @enderror
        <x-submit-button class="mt-2 ml-4">Login</x-submit-button>
    </form>
</div>
