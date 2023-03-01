<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (auth()->user()->hasVerifiedEmail())
                        <p>{{ __("Welcome, ") }}{{ auth()->user()->name }}{{ __("!") }}</p>
                        <p>{{ __("Your email address is: ") }}{{ auth()->user()->email }}</p>
                        {{ __("You're logged in!") }}
                    @else
                        <p>{{ __("Your email address has not been verified.") }}</p>
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit">{{ __("Resend verification email") }}</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

