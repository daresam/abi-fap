@aware(['title', 'button_text'])
<div class="px-4 py-4 md:py-8">
    <div class="mx-auto max-w-7xl">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col items-start mx-auto lg:w-2/3 sm:flex-row sm:items-center">
                    <h1 class="flex-grow text-2xl font-medium text-gray-900 sm:pr-16 title-font">{{ $title }}</h1>

                    <button
                        class="flex-shrink-0 px-8 py-2 mt-10 text-lg text-white bg-red-500 border-0 rounded focus:outline-none hover:bg-red-600 sm:mt-0">{{ $buttonText }}</button>
                </div>
            </div>
        </section>
    </div>
</div>
