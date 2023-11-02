<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @slot('title', 'Login')

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-gray"/>
            <x-password-input name="password"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center justify-end mt-4">
            <x-primary-button class="">
                {{ __('Sign in') }}
            </x-primary-button>

            @if (Route::has('password.request'))
                <a class="mt-3 underline text-sm no-underline border-b-2 border-merah-tua hover:border-red-500 px-1 font-semibold text-merah-tua hover:text-red-500 focus:outline-none"
                    href="{{ route('register') }}">
                    {{ __('Create Account') }}
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>
