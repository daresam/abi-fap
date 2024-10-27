<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Abi Fapohunda</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100">
    {{-- Navigation --}}
    @include('livewire.layout.navigation')

    <main>
        <section class="relative">
            <img alt="Portrait of Dr. Abi Fapohunda" class="object-cover w-full h-96" height="1080"
                src="{{ asset('images/abi-fap-cover.png') }}" width="1920" />
            <div
                class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center text-white bg-black bg-opacity-50">
                <h1 class="text-4xl font-bold">
                    Dr. Abi Fapohunda
                </h1>
                <p class="mt-2 text-lg">
                    Scholar. Writer. Speaker.
                </p>
                <a class="px-6 py-2 mt-4 text-white bg-red-600 rounded-full hover:bg-red-700" href="#">
                    Schedule Consultation
                </a>
            </div>
        </section>
        <section class="py-12 bg-white">
            <div class="container px-4 mx-auto text-center">
                <h2 class="mb-6 text-2xl font-bold text-red-600">
                    SELECTED CLIENTS &amp; PARTNERS
                </h2>
                <div class="flex flex-wrap justify-center space-x-8">
                    <img alt="Logo 1" class="w-auto h-12 mb-4"
                        src="https://storage.googleapis.com/a1aa/image/uV1GJEYZ3nrRBFfeZsDT0r9Efj5fFFiv5Wie2FQJXFbZSsXdC.jpg" />
                    <img alt="Logo 2" class="w-auto h-12 mb-4"
                        src="https://storage.googleapis.com/a1aa/image/X7z3AWOIFGIYKBbxZ7WCPcfwjeQx6xdGala61dQYaSDUi9qTA.jpg" />
                    <img alt="Logo 3" class="w-auto h-12 mb-4"
                        src="https://storage.googleapis.com/a1aa/image/GvsmQiT1QLJgNBnOuDI7Hb1H96k7iBrMSuu4qFBpGKcjYv6E.jpg" />
                    <img alt="Logo 4" class="w-auto h-12 mb-4"
                        src="https://storage.googleapis.com/a1aa/image/kZXpcAkwa14hIJcqS1wTBjpaNgFn4HeYUQ7fbxtvjemiE7VnA.jpg" />
                    <img alt="Logo 5" class="w-auto h-12 mb-4"
                        src="https://storage.googleapis.com/a1aa/image/tY9DxlBjusbRLt70X00RomYcqxq5Aeluwr8f31QIDxhQi9qTA.jpg" />
                    <img alt="Logo 6" class="w-auto h-12 mb-4"
                        src="https://storage.googleapis.com/a1aa/image/KTJCVsRpSIoiJ93QNKlBT7ZIzDNRugf5l4P8GfbbZsXPi9qTA.jpg" />
                </div>
            </div>
        </section>
    </main>

    {{-- Footer --}}
    @include('livewire.layout.footer')
    @livewireScripts
</body>

</html>
