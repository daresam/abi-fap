<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="top-0 left-0 right-0 w-full pt-2 sm:sticky bg-gradient-to-b from-black/90 to-black/0">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="/" wire:navigate>
                        <span class="text-3xl font-bold text-red-700 w-50 h-50">DR ABI FAPOHUNDA</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 md:flex">
                    <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Bio') }}
                    </x-nav-link>
                    <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Scholarship') }}
                    </x-nav-link>
                    <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Media') }}
                    </x-nav-link>
                    <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Consultinng & Inquiries') }}
                    </x-nav-link>
                </div>

                {{-- Actions --}}

                <div class="items-center hidden ml-auto gap-9 lg:flex">

                    <button class="text-xl font-bold text-white">
                        Language
                    </button>

                    <a class="flex items-center justify-center px-5 py-2 my-auto font-bold bg-white rounded-xl"
                        href="{{ route('login') }}">
                        Login
                    </a>


                </div>
            </div>


            <!-- Hamburger -->
            <div class="flex items-center -me-2 md:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">

        <!-- Responsive Settings Options -->
        <div class="flex flex-col gap-5 p-2 pt-2 pb-3 mt-3 space-y-1">
            <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                wire:navigate>
                {{ __('Bio') }}
            </x-nav-link>
            <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                wire:navigate>
                {{ __('Scholarship') }}
            </x-nav-link>
            <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                wire:navigate>
                {{ __('Media') }}
            </x-nav-link>
            <x-nav-link class="text-xl font-bold text-white hover:text-white/95" :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                wire:navigate>
                {{ __('Consultinng & Inquiries') }}
            </x-nav-link>

        </div>
    </div>
</nav>
