<x-app-layout>

    <!-- Hero Section -->
    <section class="py-16 text-white bg-gradient-to-r from-red-600 to-gray-800">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">
                Bio
            </h1>
            <p class="mt-4">
                Home &gt; Bio
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container px-4 py-8 mx-auto">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
            <div class="space-y-4">
                <h2 class="font-semibold text-red-600">
                    ABOUT ME
                </h2>
                <p class="text-justify text-gray-700 break-words">
                    Dr. Abi Fapohunda is an Assistant Professor at the University of Pittsburgh School of Public Health
                    and have conducted several studies among African Americans, Africans in the Diaspora and on the
                    African Continent. She is an epidemiologist and health educator with over 20 years’ experience of
                    running her consulting company and being in public health. She conducted needs assessments and
                    program evaluations on the effectiveness of numerous community-based initiatives related to health
                    disparities in both behavioral and physical health, including nutrition, smoking cessation,
                    HIV/AIDS, oral health and social service programs in Black communities.
                </p>
                <p class="text-justify text-gray-700 break-words">
                    The focus of her current research is exploring factors that contribute to a healthy community for
                    Black immigrants. Dr. Fapohunda is also conducting research abroad training healthcare practitioners
                    on cancer awareness. In February 2019, Lakeshore Cancer Center in Lagos, Nigeria and Dr. Fapohunda
                    completed training workshops on cancer awareness for healthcare practitioners. Currently funded by
                    the Rotary Global Grant, she and her team developed an eLearning training platform “Learn with
                    Lakeshore” to train healthcare practitioners on cancer awareness in Lagos, Nigeria. She is also a PI
                    on the Pittsburgh Transformations Project funded by the Pitt Momentum Award. This is a
                    multidisciplinary, collaborative study that addresses the historical and contemporary struggles of
                    underrepresented U.S. populations.
                </p>
            </div>
            <div>
                <img alt="Dr Abi Fapohunda" loading="lazy"
                    class="rounded-lg shadow-md" height="400" src="{{ asset('images/abi-fap.png') }}"
                    width="600" />
            </div>
        </div>

    </section>

    <!-- Call to Action -->
    <section class="py-16 text-white bg-gradient-to-r from-red-600 to-gray-800">
        <div class="container mx-auto text-center">
            <h2 class="mb-4 text-3xl font-bold">
                Have something in mind?
            </h2>
            <p class="mb-8">
                Lorem ipsum dolor sit amet consectetur. Nunc magna facilisi augue.
            </p>
            <a class="px-6 py-2 font-semibold text-red-600 bg-white rounded-full" href="#">
                CONTACT ME
            </a>
        </div>
    </section>

</x-app-layout>
