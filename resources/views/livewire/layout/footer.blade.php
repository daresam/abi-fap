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

<footer
    class="self-stretch bg-black flex flex-col items-start justify-start pt-[3.625rem] px-[0rem] pb-[3.137rem] box-border gap-[3.112rem] max-w-full text-left text-[0.688rem] text-red font-desktop-links mq450:pt-[2.375rem] mq450:pb-[2.063rem] mq450:box-border mq750:gap-[1.563rem]">
    <div
        class="self-stretch flex flex-row items-start justify-between py-[0rem] px-[10rem] gap-[1.25rem] mq750:pl-[2.5rem] mq750:pr-[2.5rem] mq750:box-border mq1050:flex-wrap mq1050:justify-center mq1050:pl-[5rem] mq1050:pr-[5rem] mq1050:box-border">
        <div class="w-[15rem] flex flex-col items-start justify-start gap-[0.875rem] text-[1.25rem]">
            <h3
                class="m-0 relative text-inherit leading-[150%] font-semibold font-inherit mq450:text-[1rem] mq450:leading-[1.5rem]">
                DR. ABI FAPOHUNDA
            </h3>
            <div class="self-stretch relative text-[0.875rem] leading-[1.5rem] text-white-2">
                Dr. Abi Fapohunda is an Associate Professor of Epidemiology at the
                University of Pittsburgh School of Public Health, specializing in
                reproductive justice, maternal and child health, and health
                equity.
            </div>
        </div>
        <div class="flex flex-col items-start justify-start gap-[1.312rem]">
            <b class="relative tracking-[1.1px] leading-[1.063rem] uppercase inline-block min-w-[4.125rem]">COMPANY</b>
            <div class="flex flex-col items-center justify-center gap-[0.625rem] text-[0.875rem] text-white-2">
                <div class="relative leading-[1.5rem] inline-block min-w-[5.938rem]">
                    Privacy Policy
                </div>
                <div class="relative leading-[1.5rem] inline-block min-w-[5.938rem]">
                    Privacy Policy
                </div>
                <div class="relative leading-[1.5rem] inline-block min-w-[5.938rem]">
                    Privacy Policy
                </div>
                <div class="relative leading-[1.5rem] inline-block min-w-[5.938rem]">
                    Privacy Policy
                </div>
            </div>
        </div>
        <div class="flex flex-col items-start justify-start gap-[1.25rem]">
            <b class="relative tracking-[1.1px] leading-[1.063rem] uppercase inline-block min-w-[3.938rem]">Contact</b>
            <div class="flex flex-col items-start justify-start gap-[0.625rem] text-[0.875rem] text-white">
                <div class="relative leading-[1.5rem]">
                    <p class="m-0">21 Valentin Paterson</p>
                    <p class="m-0">Road 24, US</p>
                </div>
                <div class="relative leading-[1.5rem] inline-block min-w-[6.625rem] whitespace-nowrap">
                    info@mail.com
                </div>
                <div class="relative leading-[1.5rem] inline-block min-w-[6.125rem]">
                    (123) 567 8901
                </div>
            </div>
        </div>
        <div class="flex flex-col items-start justify-start gap-[1.312rem]">
            <b class="relative tracking-[1.1px] leading-[1.006rem] uppercase inline-block min-w-[6.063rem]">Keep in
                touch</b>
            <div class="flex flex-row items-start justify-start gap-[0.75rem]">
                <div
                    class="h-[3rem] w-[3.125rem] rounded-781xl box-border flex flex-row items-start justify-start p-[1.062rem] border-[1px] border-solid border-white-3">
                    <img class="h-[0.875rem] w-[0.875rem] relative" alt=""
                        src="{{ asset('images/vector-1.svg') }}" />
                </div>
                <div
                    class="h-[2.938rem] w-[3.125rem] rounded-781xl box-border flex flex-row items-start justify-start py-[1.062rem] px-[1rem] border-[1px] border-solid border-white-3">
                    <img class="h-[0.813rem] w-[1rem] relative" alt=""
                        src="{{ asset('images/vector-2.svg') }}" />
                </div>
                <div
                    class="h-[3rem] w-[3.125rem] rounded-781xl box-border flex flex-row items-start justify-start p-[1.062rem] border-[1px] border-solid border-white-3">
                    <img class="h-[0.875rem] w-[0.875rem] relative" alt=""
                        src="{{ asset('images/vector-3.svg') }}" />
                </div>
            </div>
        </div>
    </div>
    <div
        class="self-stretch flex flex-row items-start justify-center py-[0rem] px-[1.25rem] box-border max-w-full text-right text-[0.875rem] text-white-2">
        <div class="w-[70rem] flex flex-col items-start justify-start gap-[2.187rem] max-w-full mq750:gap-[1.063rem]">
            <div class="self-stretch h-[0.063rem] relative box-border border-t-[1px] border-solid border-white-3"></div>
            <div
                class="w-[68.875rem] flex flex-row items-start justify-center py-[0rem] px-[1.25rem] box-border max-w-full">
                <div class="relative leading-[1.5rem] font-medium">
                    © 2024 All Rights Reserved | Dara D. Méndez
                </div>
            </div>
        </div>
    </div>
</footer>
