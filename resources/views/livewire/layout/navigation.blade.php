<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {}; ?>

<header x-data="{ open: false }" class="bg-white shadow-md">
    <div class="container flex items-center justify-between px-6 py-4 mx-auto">

        <!-- Primary Navigation Menu -->
        <div class="text-lg font-bold text-red-600">
            <!-- Logo -->
            <a href="/" wire:navigate class="text-2xl font-bold no-underline">
                DR. ABI FAP
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="hidden space-x-6 md:flex">

            <x-nav-link :href="route('bio')" :active="request()->routeIs('bio')" wire:navigate>
                        {{ __('Bio') }}
            </x-nav-link>
            <x-nav-link :href="route('scholarship')" :active="request()->routeIs('scholarship')" wire:navigate>
                        {{ __('Scholarships') }}
            </x-nav-link>
            <x-nav-link :href="route('media')" :active="request()->routeIs('media')" wire:navigate>
                        {{ __('Media') }}
            </x-nav-link>
            <x-nav-link :href="route('consulting')" :active="request()->routeIs('consulting')" wire:navigate>
                        {{ __('Consulting & Inquiries') }}
            </x-nav-link>
        </nav>

        <!-- Social Links -->
        <div class="hidden space-x-4 md:flex">
            <a href="#" class="w-6 h-4">
                <img class="w-full h-full text-gray-800 hover:text-red-600" loading="lazy" alt="Twitter"
                    src="{{ asset('images/x.svg') }}" />
            </a>
            <a href="#" class="w-6 h-4">
                <img class="w-full h-full text-gray-800 hover:text-red-600" loading="lazy" alt="Twitter"
                    src="{{ asset('images/linkedin.svg') }}" />
            </a>
            <a href="#" class="w-6 h-4">
                <img class="w-full h-full text-gray-800 hover:text-red-600" loading="lazy" alt="Twitter"
                    src="{{ asset('images/ig.svg') }}" />
            </a>

        </div>


        <!-- Hamburger -->
        <div class="md:hidden">
            <button id="menu-btn" class="text-3xl text-gray-800 focus:outline-none">
                <i class="fas fa-bars">
                </i>
            </button>

        </div>

    </div>

    <!-- Responsive Navigation Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
        <nav class="px-6 py-4 space-y-4">
            <a class="block text-gray-800 hover:text-red-600" href="{{ route('bio') }}" wire:navigate>
                Bio
            </a>
            <a class="block text-gray-800 hover:text-red-600" href="{{ route('scholarship') }}" wire:navigate>
                Scholarships
            </a>
            <a class="block text-gray-800 hover:text-red-600" href="{{ route('media') }}" wire:navigate>
                Media
            </a>
            <a class="block text-gray-800 hover:text-red-600" href="{{ route('consulting') }}" wire:navigate>
                Consulting &amp; Inquiries
            </a>
            <div class="flex space-x-4">
                <a class="text-gray-800 hover:text-red-600" href="#">
                    <i class="fas fa-times">
                    </i>
                </a>
                <a class="text-gray-800 hover:text-red-600" href="#">
                    <i class="fab fa-instagram">
                    </i>
                </a>
                <a class="text-gray-800 hover:text-red-600" href="#">
                    <i class="fab fa-facebook">
                    </i>
                </a>
            </div>
        </nav>
    </div>
</header>
