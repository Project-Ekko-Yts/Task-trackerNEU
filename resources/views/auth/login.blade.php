<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<body  class="bg-[#f9f9ff] text-[#1e1e2f] font-['Inter'] dark:bg-[#1e1e2f] dark:text-[#f9f9ff]">
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <!-- Email Address -->
        
            <h2 class="text-center font-inter" style="color: #f9f9ff;">
                Welcome back! Enter your credentials to continue.
            </h2>
            <br>

            <x-input-label for="email" :value="__('Email')" />
            <x-text-input 
                id="email" 
                class="block mt-1 w-full" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autofocus 
                autocomplete="username" 
                placeholder="Enter your email"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input 
                id="password" 
                class="block mt-1 w-full"
                type="password"
                name="password"
                required 
                autocomplete="current-password" 
                placeholder="Enter your password"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Log In Button -->
        <div class="mt-4 flex justify-center">
            <x-primary-button class="flex justify-center w-1/4 ml-4 px-4 py-2 bg-gradient-to-r from-[#7f56d9] to-[#805ad5] text-white rounded-md font-bolder text-sm hover:from-[#805ad5] hover:to-[#9f7aea]">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" 
                    name="remember"
                >
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            <div>
                <span class="text-sm text-gray-600 dark:text-gray-400">
                    Don't have an account?
                </span>
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                    Sign Up
                </a>
            </div>
        </div>
    </form>
</body>

</x-guest-layout>
