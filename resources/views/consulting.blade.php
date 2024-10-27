<x-app-layout>

    {{-- Breadcrumb Navigation --}}
    <section class="py-16 text-white bg-gradient-to-r from-red-600 to-gray-800">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">
                Consulting &amp; Inquiries
            </h1>
            <p class="mt-4">
                Home &gt; Consulting &amp; Inquiries
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container px-6 py-16 mx-auto">
        <div class="flex flex-col items-center space-y-8 lg:flex-row lg:items-start lg:space-y-0 lg:space-x-16">
            <div class="w-full lg:w-1/3">
                <img alt="Portrait of a woman in a white off-shoulder top" class="rounded-lg shadow-md" height="400"
                    src="https://storage.googleapis.com/a1aa/image/E0s9WOQsi0aTF1OS9WfKvGZ6O6sTSUkLbekzj0seGfgNV7rOB.jpg"
                    width="600" />
            </div>
            <div class="w-full lg:w-2/3">
                <p class="text-justify text-gray-700">
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
        </div>
        <div class="grid grid-cols-1 gap-16 mt-16 lg:grid-cols-2">
            <div>
                <h2 class="mb-4 text-xl font-bold text-red-600">
                    KEY NOTE TOPICS
                </h2>
                <ul class="space-y-2 text-gray-700 list-disc list-inside">
                    <li>
                        Integrating Arts-Based Approaches in Public Health
                    </li>
                    <li>
                        Community Participatory Approaches
                    </li>
                    <li>
                        Structural and Social Determinants of Health Equity
                    </li>
                    <li>
                        Institutional Equity
                    </li>
                    <li>
                        Public Health Critical Race Praxis
                    </li>
                    <li>
                        Birth and Reproductive Equity and Justice
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-4 text-xl font-bold text-red-600">
                    CONSULTING SERVICES
                </h2>
                <ul class="space-y-2 text-gray-700 list-disc list-inside">
                    <li>
                        Quantitative and Qualitative Research: Study Design, Data Collection, Analysis, Dissemination
                    </li>
                    <li>
                        Program Evaluation
                    </li>
                    <li>
                        Community Engagement for Research, Program Planning and Policy
                    </li>
                    <li>
                        Equity Assessment
                    </li>
                    <li>
                        Curriculum Development, Training and Capacity Building
                    </li>
                    <li>
                        Grant Writing and Funding Strategies
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-16 mt-16 lg:grid-cols-2">
            <div class="p-8 bg-white rounded-lg shadow-md">
                <form>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div>
                            <label class="block text-gray-700" for="first-name">
                                First Name
                            </label>
                            <input class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" id="first-name"
                                placeholder="Jane" type="text" />
                        </div>
                        <div>
                            <label class="block text-gray-700" for="last-name">
                                Last Name
                            </label>
                            <input class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" id="last-name"
                                placeholder="Jane" type="text" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
                        <div>
                            <label class="block text-gray-700" for="email">
                                Email
                            </label>
                            <input class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" id="email"
                                placeholder="Jane" type="email" />
                        </div>
                        <div>
                            <label class="block text-gray-700" for="phone">
                                Phone
                            </label>
                            <input class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" id="phone"
                                placeholder="Jane" type="tel" />
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block text-gray-700" for="message">
                            Message
                        </label>
                        <textarea class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" id="message"
                            placeholder="Type your message here" rows="4">
       </textarea>
                    </div>
                    <div class="mt-4">
                        <button
                            class="w-full px-4 py-2 text-red-600 transition border border-red-600 rounded-md hover:bg-red-600 hover:text-white"
                            type="submit">
                            SUBMIT
                        </button>
                    </div>
                </form>
            </div>
            <div>
                <img alt="Person working on a laptop with a cup of coffee and a tablet on the table"
                    class="rounded-lg shadow-md" height="400"
                    src="https://storage.googleapis.com/a1aa/image/vX5zBYQztHJdFBuVHSF5RWZ2ppeOlkrlr3oxJtJZSffrq9VnA.jpg"
                    width="600" />
            </div>
        </div>
    </main>




</x-app-layout>
