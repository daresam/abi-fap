<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Abi Fap</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre Franklin:wght@400&display=swap" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    {{-- Navigation --}}
    @include('livewire.layout.navigation')

    <div
        class="w-full relative bg-white-3 overflow-hidden flex flex-col  justify-start gap-[0.043rem] leading-[normal] tracking-[normal]">

        {{-- Hero Section --}}
        <section id="hero"
            class="flex flex-col md:flex-row items-center justify-center relative max-w-full text-center text-[2rem] md:text-[4rem] text-white font-desktop-links">
            <img class="w-full h-[30rem] md:h-[56.25rem] object-cover opacity-4 " loading="lazy" alt="Hero Background"
                src="{{ asset('images/abi-fap-cover.png') }}" />

            <div
                class="absolute bottom-8 md:bottom-[18.875rem] left-4 md:left-[10.063rem]  w-full md:w-auto flex flex-col items-center md:items-start justify-start p-4 box-border z-10">
                <div class="w-full  flex flex-col items-center md:items-center justify-center gap-6 md:gap-[1.875rem] ">
                    <h1 class="text-[1.375rem] md:text-[3.188rem] lg:text-[3rem] font-bold tracking-[-0.02em]">
                        Dr. Abi Fapohunda
                    </h1>
                    <h2
                        class="text-[2rem] md:text-[2.5rem]  leading-[1.813rem] md:leading-[150%] font-bold  text-white-2">
                        Scholar. Writer. Speaker.
                    </h2>
                    <button
                        class="cursor-pointer border-none  py-3 px-6 bg-white shadow-sm rounded-lg flex items-center justify-center text-[1rem] tracking-[0.2em] leading-[150%] font-semibold text-red hover:bg-gainsboro w-full md:w-auto">
                        SCHEDULE CONSULTATION
                    </button>
                </div>
            </div>
        </section>

        {{-- PARTNERS Section --}}
        <section
            class="self-stretch bg-white flex flex-col items-center justify-center pt-[5rem] px-[1.25rem] pb-[5.25rem] box-border gap-[2.5rem] max-w-full text-left text-[1.75rem] text-red font-desktop-links mq725:gap-[1.25rem]">
            <div class="w-[75.75rem] flex flex-row  justify-center max-w-full">
                <h1
                    class="m-0 relative text-inherit leading-[3.25rem] font-bold font-inherit mq450:text-[1.375rem] mq450:leading-[2.625rem]">
                    SELECTED CLIENTS & PARTNERS
                </h1>
            </div>
            <div
                class="w-[75.75rem] flex flex-row  justify-between gap-[1.25rem] max-w-full mq975:flex-wrap mq975:justify-center">
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



    </div>

    
    {{-- Footer --}}
    @include('livewire.layout.footer')
    @livewireScripts
</body>

</html>
