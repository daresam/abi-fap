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
                Media
            </h1>
            <h2
                class="m-0 w-[52.313rem] relative text-[1.5rem] leading-[150%] font-normal font-inherit text-white-2 flex items-center justify-center max-w-full z-[1] mq450:text-[1.188rem] mq450:leading-[1.813rem]">
                Home &gt; Media
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
        class="self-stretch flex flex-row items-start justify-end pt-[0rem] pb-[3.75rem] pl-[5rem] pr-[4.937rem] box-border max-w-full text-left text-[0.688rem] text-black font-desktop-links lg:pb-[2.438rem] lg:box-border mq750:pl-[2.5rem] mq750:pr-[2.438rem] mq750:pb-[1.563rem] mq750:box-border">
        <div class="flex-1 flex flex-col items-end justify-start gap-[2.062rem] max-w-full mq750:gap-[1rem]">
            <div
                class="self-stretch flex flex-row flex-wrap items-start justify-start gap-x-[2.062rem] gap-y-[1.937rem] min-h-[82.875rem] max-w-full mq750:gap-[0.938rem]">
                <div
                    class="w-[25.313rem] rounded-t-none rounded-b-3xs bg-white flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[1.625rem] box-border gap-[2.5rem] max-w-full text-red mq450:gap-[1.25rem]">
                    <img class="self-stretch h-[18.75rem] relative rounded-t-3xs rounded-b-none max-w-full overflow-hidden shrink-0 object-cover"
                        loading="lazy" alt="" src="{{ asset('images/img1@2x.png') }}" />

                    <div
                        class="self-stretch flex flex-row items-start justify-start py-[0rem] px-[2.437rem] box-border max-w-full">
                        <b
                            class="h-[3.375rem] flex-1 relative tracking-[1.1px] leading-[1.006rem] uppercase inline-block max-w-full">Featured
                            in WQED Documentary on Health Equity in SW
                            Pennsylvania</b>
                    </div>
                </div>
                <div
                    class="w-[25.313rem] rounded-t-none rounded-b-3xs flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[1.937rem] box-border gap-[2.5rem] max-w-full mq450:gap-[1.25rem]">
                    <img class="self-stretch h-[18.75rem] relative rounded-t-3xs rounded-b-none max-w-full overflow-hidden shrink-0 object-cover"
                        alt="" src="{{ asset('images/img-11@2x.png') }}" />

                    <div
                        class="self-stretch flex flex-row items-start justify-start py-[0rem] px-[2.437rem] box-border max-w-full">
                        <b
                            class="flex-1 relative tracking-[1.1px] leading-[1.006rem] uppercase inline-block max-w-full">As
                            people travel to Pittsburgh from out-of-state for
                            abortions, Black patients could be left out</b>
                    </div>
                </div>
                <div
                    class="w-[25.313rem] rounded-t-none rounded-b-3xs flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[1.625rem] box-border gap-[2.5rem] max-w-full mq450:gap-[1.25rem]">
                    <img class="self-stretch h-[18.75rem] relative rounded-t-3xs rounded-b-none max-w-full overflow-hidden shrink-0 object-cover"
                        alt="" src="{{ asset('images/img-21@2x.png') }}" />

                    <div
                        class="self-stretch flex flex-row items-start justify-start py-[0rem] px-[2.437rem] box-border max-w-full">
                        <a
                            class="[text-decoration:none] h-[3.375rem] flex-1 relative tracking-[1.1px] leading-[1.006rem] uppercase font-bold text-[inherit] inline-block max-w-full">Masks
                            and Much More</a>
                    </div>
                </div>
                <div
                    class="w-[25.313rem] rounded-t-none rounded-b-3xs flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[1.625rem] box-border gap-[2.5rem] max-w-full mq450:gap-[1.25rem]">
                    <img class="self-stretch h-[18.75rem] relative rounded-t-3xs rounded-b-none max-w-full overflow-hidden shrink-0 object-cover"
                        alt="" src="{{ asset('images/img-3@2x.png') }}" />

                    <div
                        class="self-stretch flex flex-row items-start justify-start py-[0rem] px-[2.437rem] box-border max-w-full">
                        <b
                            class="h-[3.375rem] flex-1 relative tracking-[1.1px] leading-[1.006rem] uppercase inline-block max-w-full">Featured
                            in WQED Documentary on Health Equity in SW
                            Pennsylvania</b>
                    </div>
                </div>
                <div
                    class="w-[25.313rem] rounded-t-none rounded-b-3xs flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[1.937rem] box-border gap-[2.5rem] max-w-full mq450:gap-[1.25rem]">
                    <img class="self-stretch h-[18.75rem] relative rounded-t-3xs rounded-b-none max-w-full overflow-hidden shrink-0 object-cover"
                        alt="" src="{{ asset('images/img-4@2x.png') }}" />

                    <div
                        class="self-stretch flex flex-row items-start justify-start py-[0rem] px-[2.437rem] box-border max-w-full">
                        <b
                            class="flex-1 relative tracking-[1.1px] leading-[1.006rem] uppercase inline-block max-w-full">As
                            people travel to Pittsburgh from out-of-state for
                            abortions, Black patients could be left out</b>
                    </div>
                </div>
                <div
                    class="w-[25.313rem] rounded-t-none rounded-b-3xs flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[1.625rem] box-border gap-[2.5rem] max-w-full mq450:gap-[1.25rem]">
                    <img class="self-stretch h-[18.75rem] relative rounded-t-3xs rounded-b-none max-w-full overflow-hidden shrink-0 object-cover"
                        alt="" src="{{ asset('images/img-5@2x.png') }}" />

                    <div
                        class="self-stretch flex flex-row items-start justify-start py-[0rem] px-[2.437rem] box-border max-w-full">
                        <a
                            class="[text-decoration:none] h-[3.375rem] flex-1 relative tracking-[1.1px] leading-[1.006rem] uppercase font-bold text-[inherit] inline-block max-w-full">Masks
                            and Much More</a>
                    </div>
                </div>
                <div
                    class="w-[25.313rem] rounded-t-none rounded-b-3xs flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[1.625rem] box-border gap-[2.5rem] max-w-full mq450:gap-[1.25rem]">
                    <img class="self-stretch h-[18.75rem] relative rounded-t-3xs rounded-b-none max-w-full overflow-hidden shrink-0 object-cover"
                        alt="" src="{{ asset('images/img-6@2x.png') }}" />

                    <div
                        class="self-stretch flex flex-row items-start justify-start py-[0rem] px-[2.437rem] box-border max-w-full">
                        <b
                            class="h-[3.375rem] flex-1 relative tracking-[1.1px] leading-[1.006rem] uppercase inline-block max-w-full">Featured
                            in WQED Documentary on Health Equity in SW
                            Pennsylvania</b>
                    </div>
                </div>
                <div
                    class="w-[25.313rem] rounded-t-none rounded-b-3xs flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[1.937rem] box-border gap-[2.5rem] max-w-full mq450:gap-[1.25rem]">
                    <img class="self-stretch h-[18.75rem] relative rounded-t-3xs rounded-b-none max-w-full overflow-hidden shrink-0 object-cover"
                        alt="" src="{{ asset('images/img-7@2x.png') }}" />

                    <div
                        class="self-stretch flex flex-row items-start justify-start py-[0rem] px-[2.437rem] box-border max-w-full">
                        <b
                            class="flex-1 relative tracking-[1.1px] leading-[1.006rem] uppercase inline-block max-w-full">As
                            people travel to Pittsburgh from out-of-state for
                            abortions, Black patients could be left out</b>
                    </div>
                </div>
                <div
                    class="w-[25.313rem] rounded-t-none rounded-b-3xs flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[1.625rem] box-border gap-[2.5rem] max-w-full mq450:gap-[1.25rem]">
                    <img class="self-stretch h-[18.75rem] relative rounded-t-3xs rounded-b-none max-w-full overflow-hidden shrink-0 object-cover"
                        alt="" src="{{ asset('images/img-8@2x.png') }}" />

                    <div
                        class="self-stretch flex flex-row items-start justify-start py-[0rem] px-[2.437rem] box-border max-w-full">
                        <a
                            class="[text-decoration:none] h-[3.375rem] flex-1 relative tracking-[1.1px] leading-[1.006rem] uppercase font-bold text-[inherit] inline-block max-w-full">Masks
                            and Much More</a>
                    </div>
                </div>
            </div>
            <div
                class="w-[78.5rem] flex flex-row items-start justify-center py-[0rem] px-[1.25rem] box-border max-w-full">
                <button
                    class="cursor-pointer border-red border-[1px] border-solid py-[0.75rem] px-[1.312rem] bg-[transparent] [filter:drop-shadow(0px_1px_2px_rgba(0,_0,_0,_0.05))] rounded-lg flex flex-row items-start justify-start whitespace-nowrap hover:bg-indianred-200 hover:border-indianred-100 hover:border-[1px] hover:border-solid hover:box-border">
                    <div
                        class="relative text-[1rem] tracking-[0.2em] leading-[150%] font-semibold font-desktop-links text-black text-left inline-block min-w-[7.625rem]">
                        LOAD MORE
                    </div>
                </button>
            </div>
        </div>
    </section>


    {{-- Section 2 --}}

    <section
        class="self-stretch flex flex-col items-start justify-start max-w-full text-center text-[4rem] text-white font-desktop-links">
        <div
            class="self-stretch flex flex-row items-start justify-center pt-[1.312rem] px-[1.25rem] pb-[2.187rem] box-border relative max-w-full">
            <img class="h-full w-full absolute !m-[0] top-[0rem] right-[0rem] bottom-[0rem] left-[0rem] max-w-full overflow-hidden max-h-full object-cover"
                alt="" src="{{ asset('images/gradient-1@2x.png') }}" />

            <div class="w-[53.563rem] flex flex-col items-start justify-start p-[0.625rem] box-border max-w-full z-[1]">
                <div class="self-stretch flex flex-col items-center justify-start gap-[1.25rem]">
                    <h1
                        class="m-0 self-stretch relative text-inherit tracking-[-0.02em] font-bold font-inherit mq450:text-[2.375rem] mq975:text-[3.188rem]">
                        Have something in mind?
                    </h1>
                    <h2
                        class="m-0 self-stretch relative text-[1.5rem] leading-[150%] font-normal font-inherit text-white-2 mq450:text-[1.188rem] mq450:leading-[1.813rem]">
                        Lorem ipsum dolor sit amet consectetur. Nunc magna facilisi
                        augue.
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
        </div>
    </section>





</x-app-layout>
