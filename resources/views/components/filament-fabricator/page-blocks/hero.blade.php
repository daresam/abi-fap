@aware(['title', 'content', 'buttons', 'image'])

<div class="px-4 py-4 md:py-8">
    <div class="mx-auto max-w-7xl">
        <section class="text-gray-600 body-font">
            <div class="container flex flex-col items-center px-5 py-24 mx-auto md:flex-row">
                <div
                    class="flex flex-col items-center mb-16 text-center lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0">
                    <h1 class="mb-4 text-3xl font-medium text-gray-900 title-font sm:text-4xl">
                        {{ $title }}

                    </h1>



                    {!! tiptap_converter()->asHTML($content) !!}
                    <div class="flex justify-center">
                        @foreach ($buttons as $button)
                            <button
                                class="inline-flex px-6 py-2 mr-4 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">{{ $button['button_text'] }}</button>
                        @endforeach
                    </div>
                </div>
                <div class="w-5/6 lg:max-w-lg lg:w-full md:w-1/2">
                    <x-curator-glider class="object-cover object-center rounded" :media="$image"
                        fallback="card_fallback" />
                </div>
            </div>
        </section>
    </div>
</div>
