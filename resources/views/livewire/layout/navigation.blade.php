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

<nav x-data="{ open: false }"
    class="box-border sticky top-0 flex items-center self-stretch justify-between max-w-full gap-5 px-20 py-5 text-lg bg-white shadow-md z-99 text-red font-desktop-links mq975:px-10">

    <!-- Primary Navigation Menu -->
    <div class="flex items-center">
        <!-- Logo -->
        <a href="/" wire:navigate class="text-3xl font-bold no-underline text-red">
            DR ABI FAPOHUNDA
        </a>
    </div>

    <!-- Navigation Links -->
    <div class="flex items-center max-w-full gap-5 text-sm text-black mq975:hidden">
        <div class="p-2.5">
            <a href="#" class="font-medium no-underline text-decoration-none text-red">Bio</a>
        </div>
        <div class="flex items-center p-2.5 gap-2.5 ">
            <a href="#" class="font-medium no-underline text-decoration-none text-red">Scholarships</a>
            <img class="h-[0.331rem] w-[0.575rem]" alt="Scholarship Icon"
                src="{{ asset('images/scholarship-icon.svg') }}" />
        </div>
        <div class="p-2.5">
            <a href="#" class="font-medium no-underline text-decoration-none text-red">Media</a>
        </div>
        <div class="p-2.5">
            <a href="#"
                class="font-medium no-underline text-decoration-none whitespace-nowrap text-red">Consulting &
                Inquiries</a>
        </div>
    </div>

    <!-- Social Links -->
    <div class="flex items-center gap-5 mq975:hidden">
        <a href="#" class="w-6 h-6"><img class="w-full h-full" loading="lazy" alt="Close"
                src="{{ asset('images/x.svg') }}" /></a>
        <a href="#" class="w-6 h-6"><img class="w-full h-full" loading="lazy" alt="LinkedIn"
                src="{{ asset('images/linkedin.svg') }}" /></a>
        <a href="#" class="w-6 h-6"><img class="w-full h-full" loading="lazy" alt="Instagram"
                src="{{ asset('images/ig.svg') }}" /></a>
    </div>

    <!-- Hamburger -->
    <div class="flex items-center cursor-pointer -me-2 mq975:hidden">
        <button @click="open = ! open"
            class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400">
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>


    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">

        <!-- Responsive Settings Options -->
        <div class="flex flex-col gap-5 p-2 pt-2 pb-3 mt-3 space-y-1">
<div class="p-2.5">
            <a href="#" class="font-medium no-underline text-decoration-none text-red">Bio</a>
        </div>
        <div class="flex items-center p-2.5 gap-2.5 ">
            <a href="#" class="font-medium no-underline text-decoration-none text-red">Scholarships</a>
            <img class="h-[0.331rem] w-[0.575rem]" alt="Scholarship Icon"
                src="{{ asset('images/scholarship-icon.svg') }}" />
        </div>
        <div class="p-2.5">
            <a href="#" class="font-medium no-underline text-decoration-none text-red">Media</a>
        </div>
        <div class="p-2.5">
            <a href="#"
                class="font-medium no-underline text-decoration-none whitespace-nowrap text-red">Consulting &
                Inquiries</a>
        </div>

        </div>
    </div>


</nav>
