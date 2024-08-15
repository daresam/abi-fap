<x-app-layout>
    {{-- Breadcrumb Navigation --}}
    <section
        class="self-stretch flex flex-row items-start justify-start pt-[0rem] px-[0rem] pb-[3.75rem] box-border max-w-full text-center text-[4rem] text-white font-desktop-links">
        <div
            class="flex-1 flex flex-col items-center justify-start pt-[1.937rem] px-[1.25rem] pb-[3.25rem] box-border relative gap-[0.625rem] max-w-full">
            <img class="w-full h-full absolute !m-[0] top-[0rem] right-[0rem] bottom-[0rem] left-[0rem] max-w-full overflow-hidden max-h-full object-cover"
                loading="lazy" alt="" src="{{ asset('images/gradient1@2x.png') }}" />

            <h1
                class="m-0 w-[52.313rem] relative text-inherit tracking-[-0.02em] font-bold font-inherit flex items-center justify-center max-w-full z-[1] mq450:text-[2.375rem] mq1000:text-[3.188rem]">
                Scholarships
            </h1>
            <h2
                class="m-0 w-[52.313rem] relative text-[1.5rem] leading-[150%] font-normal font-inherit text-white-2 flex items-center justify-center max-w-full z-[1] mq450:text-[1.188rem] mq450:leading-[1.813rem]">
                Home &gt; Scholarships
            </h2>
            <div
                class="w-[19.875rem] shadow-[0px_1px_2px_rgba(0,_0,_0,_0.05)] rounded-lg bg-white hidden flex-row items-center justify-center py-[0.875rem] px-[1.312rem] box-border whitespace-nowrap z-[3] text-left text-[1rem] text-black">
                <div class="h-[1.5rem] flex-1 relative tracking-[0.2em] leading-[150%] font-semibold flex items-center">
                    SCHEDULE CONSULTATION
                </div>
            </div>
        </div>
    </section>

    {{-- Section 1 --}}
    <section
        class="self-stretch flex flex-row items-start justify-start pt-[0rem] pb-[3.75rem] pl-[5rem] pr-[5.062rem] box-border max-w-full text-left text-[2.875rem] text-red font-desktop-links mq725:pl-[2.5rem] mq725:pr-[2.5rem] mq725:pb-[2.438rem] mq725:box-border">
        <div class="flex-1 flex flex-col items-end justify-start gap-[3.437rem] max-w-full mq725:gap-[1.688rem]">
            <div
                class="self-stretch flex flex-row items-start justify-center py-[0rem] pl-[1.312rem] pr-[1.25rem] box-border max-w-full">
                <div class="w-[37.5rem] flex flex-col items-start justify-start gap-[0.625rem] max-w-full">
                    <div
                        class="self-stretch flex flex-row items-start justify-center py-[0rem] pl-[1.312rem] pr-[1.25rem] box-border max-w-full">
                        <h1
                            class="m-0 w-[25.313rem] relative text-inherit leading-[3.25rem] font-bold font-inherit flex items-center shrink-0 max-w-full mq450:text-[1.75rem] mq450:leading-[1.938rem] mq1000:text-[2.313rem] mq1000:leading-[2.625rem]">
                            Section Heading
                        </h1>
                    </div>
                    <h2
                        class="m-0 self-stretch relative text-[1.5rem] leading-[150%] font-normal font-inherit text-gray-100 text-center mq450:text-[1.188rem] mq450:leading-[1.813rem]">
                        Lorem ipsum dolor sit amet consectetur.
                    </h2>
                </div>
            </div>
            <div
                class="self-stretch flex flex-col items-end justify-start gap-[1.25rem] max-w-full text-[1rem] text-black">

                {{-- Scholarship Cards  --}}
                <div
                    class="self-stretch grid flex-row items-start justify-start gap-[2rem] max-w-full grid-cols-[repeat(3,_minmax(304px,_1fr))] mq725:gap-[1rem] mq725:grid-cols-[minmax(304px,_1fr)] mq1050:justify-center mq1050:grid-cols-[repeat(2,_minmax(304px,_526px))]">
                    {{-- Scholarship Cards 1 --}}
                    <div
                        class="flex flex-col items-center justify-start pt-[0rem] px-[0rem] pb-[3.75rem] box-border gap-[0.562rem] max-w-full text-gray-200 mq450:pb-[2.438rem] mq450:box-border">
                        <div
                            class="self-stretch h-[15.063rem] flex flex-col items-center justify-start pt-[0rem] px-[0rem] pb-[0rem] box-border relative">
                            <img class="relative self-stretch flex-1 object-cover max-w-full max-h-full overflow-hidden"
                                alt="" src="{{ asset('images/img2@2x.png') }}" />

                            <div
                                class="w-[16.938rem] md:w-[22.938rem] !m-[0] absolute top-[11.938rem] left-[1.125rem] shadow-[0px_4px_12px_2px_rgba(27,_27,_27,_0.15)] rounded bg-white overflow-hidden flex flex-col items-start justify-start p-[1.5rem] box-border z-[1]">
                                <div class="self-stretch flex flex-row items-center justify-between gap-[1.25rem]">
                                    <input
                                        class="w-[8.125rem] [border:none] [outline:none] font-semibold font-desktop-links text-[1rem] bg-[transparent] h-[1.5rem] relative tracking-[0.2em] leading-[150%] text-black text-left flex items-center p-0"
                                        placeholder="RESEARCH" type="text" />

                                    <img class="h-[1.119rem] w-[0.644rem] relative object-contain" alt=""
                                        src="{{ asset('images/vector-11.svg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="w-[22.813rem] relative leading-[1.875rem] flex items-center max-w-full">
                            Lorem ipsum dolor sit amet consectetur. Morbi quis amet arcu
                            aliquam. Neque id duis nunc non.
                        </div>
                    </div>

                     {{-- Scholarship Cards 2  --}}
                    <div
                        class="flex flex-col items-center justify-start pt-[0rem] px-[0rem] pb-[3.75rem] box-border gap-[0.562rem] max-w-full text-gray-200 mq450:pb-[2.438rem] mq450:box-border">
                        <div
                            class="self-stretch h-[15.063rem] flex flex-col items-center justify-start pt-[0rem] px-[0rem] pb-[0rem] box-border relative">
                            <img class="relative self-stretch flex-1 object-cover max-w-full max-h-full overflow-hidden"
                                alt="" src="{{ asset('images/img2@2x.png') }}" />

                            <div
                                class="w-[16.938rem] md:w-[22.938rem] !m-[0] absolute top-[11.938rem] left-[1.125rem] shadow-[0px_4px_12px_2px_rgba(27,_27,_27,_0.15)] rounded bg-white overflow-hidden flex flex-col items-start justify-start p-[1.5rem] box-border z-[1]">
                                <div class="self-stretch flex flex-row items-center justify-between gap-[1.25rem]">
                                    <input
                                        class="w-[8.125rem] [border:none] [outline:none] font-semibold font-desktop-links text-[1rem] bg-[transparent] h-[1.5rem] relative tracking-[0.2em] leading-[150%] text-black text-left flex items-center p-0"
                                        placeholder="INSTRUCTION" type="text" />

                                    <img class="h-[1.119rem] w-[0.644rem] relative object-contain" alt=""
                                        src="{{ asset('images/vector-11.svg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="w-[22.813rem] relative leading-[1.875rem] flex items-center max-w-full">
                            Lorem ipsum dolor sit amet consectetur. Morbi quis amet arcu
                            aliquam. Neque id duis nunc non.
                        </div>
                    </div>

                     {{-- Scholarship Cards 3  --}}
                    <div
                        class="flex flex-col items-center justify-start pt-[0rem] px-[0rem] pb-[3.75rem] box-border gap-[0.562rem] max-w-full text-gray-200 mq450:pb-[2.438rem] mq450:box-border">
                        <div
                            class="self-stretch h-[15.063rem] flex flex-col items-center justify-start pt-[0rem] px-[0rem] pb-[0rem] box-border relative">
                            <img class="relative self-stretch flex-1 object-cover max-w-full max-h-full overflow-hidden"
                                alt="" src="{{ asset('images/img2@2x.png') }}" />

                            <div
                                class="w-[16.938rem] md:w-[22.938rem] !m-[0] absolute top-[11.938rem] left-[1.125rem] shadow-[0px_4px_12px_2px_rgba(27,_27,_27,_0.15)] rounded bg-white overflow-hidden flex flex-col items-start justify-start p-[1.5rem] box-border z-[1]">
                                <div class="self-stretch flex flex-row items-center justify-between gap-[1.25rem]">
                                    <input
                                        class="w-[8.125rem] [border:none] [outline:none] font-semibold font-desktop-links text-[1rem] bg-[transparent] h-[1.5rem] relative tracking-[0.2em] leading-[150%] text-black text-left flex items-center p-0"
                                        placeholder="PRACTICE" type="text" />

                                    <img class="h-[1.119rem] w-[0.644rem] relative object-contain" alt=""
                                        src="{{ asset('images/vector-11.svg') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="w-[22.813rem] relative leading-[1.875rem] flex items-center max-w-full">
                            Lorem ipsum dolor sit amet consectetur. Morbi quis amet arcu
                            aliquam. Neque id duis nunc non.
                        </div>
                    </div>

                </div>

                {{-- Card Caurosel --}}
                <div class="self-stretch flex flex-row items-start justify-center py-[0rem] pl-[1.375rem] pr-[1.25rem]">
                    <div class="flex flex-row items-start justify-start gap-[1rem]">
                        <div class="h-[0.375rem] w-[0.938rem] relative rounded-61xl bg-red"></div>
                        <div class="h-[0.375rem] w-[0.375rem] relative rounded-61xl bg-black"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Section 2 --}}
    <section
        class="self-stretch flex flex-row items-start justify-center pt-[1.312rem] px-[1.25rem] pb-[2.187rem] box-border relative max-w-full text-center text-[4rem] text-white font-desktop-links">
        <img class="h-full w-full absolute !m-[0] top-[0rem] right-[0rem] bottom-[0rem] left-[0rem] max-w-full overflow-hidden max-h-full object-cover"
            alt="" src="{{ asset('images/gradient-1@2x.png') }}" />

        <div class="w-[53.563rem] flex flex-col items-start justify-start p-[0.625rem] box-border max-w-full z-[1]">
            <div class="self-stretch flex flex-col items-center justify-start gap-[1.25rem]">
                <h1
                    class="m-0 self-stretch relative text-inherit tracking-[-0.02em] font-bold font-inherit mq450:text-[2.375rem] mq1000:text-[3.188rem]">
                    Have something in mind?
                </h1>
                <h2
                    class="m-0 self-stretch relative text-[1.5rem] leading-[150%] font-normal font-inherit text-white-2 mq450:text-[1.188rem] mq450:leading-[1.813rem]">
                    Lorem ipsum dolor sit amet consectetur. Nunc magna facilisi augue.
                </h2>
                <button
                    class="cursor-pointer [border:none] py-[0.875rem] px-[1.375rem] bg-white shadow-[0px_1px_2px_rgba(0,_0,_0,_0.05)] rounded-lg flex flex-row items-center justify-center whitespace-nowrap hover:bg-gainsboro">
                    <div
                        class="relative text-[1rem] tracking-[0.2em] leading-[150%] font-semibold font-desktop-links text-red text-left">
                        CONTACT ME
                    </div>
                </button>
            </div>
        </div>
    </section>

</x-app-layout>
