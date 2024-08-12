<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dr Abi Fapohunda</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre Franklin:wght@400&display=swap" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div
        class="w-full relative bg-white-3 overflow-hidden flex flex-col items-start justify-start gap-[0.043rem] leading-[normal] tracking-[normal]">
         @include('livewire.layout.navigation')
        <section
            class="self-stretch flex flex-row items-start justify-start relative max-w-full text-center text-[4rem] text-white font-desktop-links">
            <img class="h-[56.25rem] flex-1 relative max-w-full overflow-hidden object-cover" loading="lazy"
                alt="" src="{{ asset('images/gradient@2x.png') }}" />

            <div
                class="w-[53.563rem] !m-[0] absolute bottom-[18.875rem] left-[18.063rem] flex flex-col items-start justify-start p-[0.625rem] box-border max-w-full z-[1]">
                <div class="self-stretch flex flex-col items-center justify-start gap-[1.875rem]">
                    <h1
                        class="m-0 self-stretch relative text-inherit tracking-[-0.02em] font-bold font-inherit mq450:text-[2.375rem] mq975:text-[3.188rem]">
                        Dr. Abi Fapohunda
                    </h1>
                    <h2
                        class="m-0 self-stretch relative text-[1.5rem] leading-[150%] font-normal font-inherit text-white-2 mq450:text-[1.188rem] mq450:leading-[1.813rem]">
                        Scholar. Writer. Speaker.
                    </h2>
                    <button
                        class="cursor-pointer [border:none] py-[0.875rem] px-[1.375rem] bg-white shadow-[0px_1px_2px_rgba(0,_0,_0,_0.05)] rounded-lg flex flex-row items-center justify-center whitespace-nowrap hover:bg-gainsboro mq450:w-[calc(100%_-_40px)]">
                        <div
                            class="relative text-[1rem] tracking-[0.2em] leading-[150%] font-semibold font-desktop-links text-red text-left">
                            SCHEDULE CONSULTATION
                        </div>
                    </button>
                </div>
            </div>
        </section>
        <section
            class="self-stretch bg-white flex flex-col items-center justify-start pt-[5rem] px-[1.25rem] pb-[5.25rem] box-border gap-[2.5rem] max-w-full text-left text-[1.75rem] text-red font-desktop-links mq725:gap-[1.25rem]">
            <div class="w-[75.75rem] flex flex-row items-start justify-center max-w-full">
                <h1
                    class="m-0 relative text-inherit leading-[3.25rem] font-bold font-inherit mq450:text-[1.375rem] mq450:leading-[2.625rem]">
                    SELECTED CLIENTS & PARTNERS
                </h1>
            </div>
            <div
                class="w-[75.75rem] flex flex-row items-start justify-between gap-[1.25rem] max-w-full mq975:flex-wrap mq975:justify-center">
                <img class="self-stretch w-[4.375rem] relative max-h-full overflow-hidden shrink-0 min-h-[2.75rem]"
                    loading="lazy" alt="" src="{{ asset('images/logo.svg') }}" />

                <img class="h-[2.563rem] w-[2.5rem] relative overflow-hidden shrink-0" alt=""
                    src="{{ asset('images/logo-1.svg') }}" />

                <img class="h-[2.5rem] w-[6.25rem] relative overflow-hidden shrink-0" alt=""
                    src="{{ asset('images/logo-2.svg') }}" />

                <img class="h-[2.563rem] w-[11.625rem] relative overflow-hidden shrink-0" alt=""
                    src="{{ asset('images/logo-3.svg') }}" />

                <img class="h-[1.875rem] w-[4.875rem] relative overflow-hidden shrink-0" alt=""
                    src="{{ asset('images/logo-4.svg') }}" />

                <img class="h-[2.5rem] w-[13.625rem] relative overflow-hidden shrink-0" alt=""
                    src="{{ asset('images/logo-5.svg') }}" />

                <img class="h-[2.5rem] w-[2.5rem] relative overflow-hidden shrink-0" alt=""
                    src="{{ asset('images/logo-5.svg') }}" />
            </div>
        </section>
        <footer
            class="self-stretch bg-black flex flex-col items-start justify-start pt-[3.625rem] px-[0rem] pb-[3.137rem] box-border gap-[3.112rem] max-w-full text-left text-[0.688rem] text-red font-desktop-links mq450:pt-[2.375rem] mq450:pb-[2.063rem] mq450:box-border mq725:gap-[1.563rem]">
            <div
                class="self-stretch flex flex-row items-start justify-between py-[0rem] px-[10rem] gap-[1.25rem] mq725:pl-[2.5rem] mq725:pr-[2.5rem] mq725:box-border mq975:pl-[5rem] mq975:pr-[5rem] mq975:box-border mq1025:flex-wrap">
                <div class="w-[15rem] flex flex-col items-start justify-start gap-[0.875rem] text-[1.25rem]">
                    <h3
                        class="m-0 relative text-inherit leading-[150%] font-semibold font-inherit mq450:text-[1rem] mq450:leading-[1.5rem]">
                        DR. ABI FAPOHUNDA
                    </h3>
                    <div class="self-stretch relative text-[0.875rem] leading-[1.5rem] text-white-2">
                        Dr. Abi Fapohunda is an Associate Professor of Epidemiology at the
                        University of Pittsburgh School of images Health, specializing in
                        reproductive justice, maternal and child health, and health
                        equity.
                    </div>
                </div>
                <div class="flex flex-col items-start justify-start gap-[1.312rem]">
                    <b
                        class="relative tracking-[1.1px] leading-[1.063rem] uppercase inline-block min-w-[4.125rem]">COMPANY</b>
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
                    <b
                        class="relative tracking-[1.1px] leading-[1.063rem] uppercase inline-block min-w-[3.938rem]">Contact</b>
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
                    <b class="relative tracking-[1.1px] leading-[1.006rem] uppercase inline-block min-w-[6.063rem]">Keep
                        in touch</b>
                    <div class="flex flex-row items-start justify-start gap-[0.75rem]">
                        <div
                            class="h-[3rem] w-[3.125rem] rounded-781xl box-border flex flex-row items-start justify-start p-[1.062rem] border-[1px] border-solid border-white-3">
                            <img class="h-[0.875rem] w-[0.875rem] relative" alt="" src="{{ asset('images/vector-1.svg') }}" />
                        </div>
                        <div
                            class="h-[2.938rem] w-[3.125rem] rounded-781xl box-border flex flex-row items-start justify-start py-[1.062rem] px-[1rem] border-[1px] border-solid border-white-3">
                            <img class="h-[0.813rem] w-[1rem] relative" alt="" src="{{ asset('images/vector-2.svg') }}" />
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
                <div
                    class="w-[70rem] flex flex-col items-start justify-start gap-[2.187rem] max-w-full mq725:gap-[1.063rem]">
                    <div
                        class="self-stretch h-[0.063rem] relative box-border border-t-[1px] border-solid border-white-3">
                    </div>
                    <div
                        class="w-[68.875rem] flex flex-row items-start justify-center py-[0rem] px-[1.25rem] box-border max-w-full">
                        <div class="relative leading-[1.5rem] font-medium">
                            © 2024 All Rights Reserved | Dr. Abi Fapohunda
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @livewireScripts
</body>

</html>
