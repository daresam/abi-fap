<x-app-layout>

    {{-- Breadcrumb Navigation --}}
    <section
        class="self-stretch flex flex-col items-start justify-start gap-[0.125rem] max-w-full text-center text-[4rem] text-white font-desktop-links">
        <div
            class="self-stretch flex flex-col items-center justify-start pt-[1.937rem] px-[1.25rem] pb-[3.25rem]  relative gap-[0.625rem] max-w-full">
            <img class="w-full h-full absolute !m-[0] top-[0rem] right-[0rem] bottom-[0rem] left-[0rem] max-w-full overflow-hidden max-h-full object-cover"
                loading="lazy" alt="" src="images/section-gradient.png" />

            <h1
                class="m-0 w-[52.313rem] relative text-inherit tracking-[-0.02em] font-bold font-inherit flex items-center justify-center max-w-full z-[1] mq450:text-[2.375rem] mq975:text-[3.188rem]">
                Bio
            </h1>
            <h2
                class="m-0 w-[52.313rem] relative text-[1.5rem] leading-[150%] font-normal font-inherit text-white-2 flex items-center justify-center max-w-full z-[1] mq450:text-[1.188rem] mq450:leading-[1.813rem]">
                Home &gt; Bio
            </h2>

        </div>
    </section>

    {{-- Section 1  --}}

    <section
        class="self-stretch flex flex-row items-start justify-start pt-[2rem] px-[5rem] pb-[3.75rem] box-border mb-5  max-w-full text-left text-[1rem] text-black font-desktop-links mq825:pl-[2.5rem] mq825:pr-[2.5rem] mq825:pb-[2.438rem] mq825:box-border">
        <div
            class="flex-1 flex flex-row items-start justify-start gap-[2.187rem] max-w-full mq825:gap-[1.063rem] mq1425:flex-wrap">
            <img class=" flex-1 relative rounded-xl max-w-full overflow-hidden object-cover min-w-[29.75rem] mq825:min-w-full"
                alt="" src="{{ asset('images/abi-fap.png') }}" />

            <div
                class="w-[32.063rem] flex flex-col items-start justify-start pt-[0.312rem] px-[0rem] pb-[0rem] box-border min-w-[32.063rem] max-w-full mq825:pt-[3.438rem] mq825:box-border mq825:min-w-full mq1425:flex-1">
                <a
                    class="[text-decoration:none] relative text-[2rem] tracking-[1.1px] leading-[1.063rem] uppercase  font-bold text-red inline-block min-w-[4.588rem]">About
                    Me</a>
                <div class="self-stretch  md:h-[25rem] relative leading-[1.875rem] pt-[1.312rem] inline-block shrink-0 text-justify">
                    Dr. Abi Fapohunda is an Assistant Professor at the University of Pittsburgh School of Public Health
                    and have conducted several studies among African Americans, Africans in the Diaspora and on the
                    African Continent. She is an epidemiologist and health educator with over 20 years’ experience of
                    running her consulting company and being in public health. She conducted needs assessments and
                    program evaluations on the effectiveness of numerous community-based initiatives related to health
                    disparities in both behavioral and physical health, including nutrition, smoking cessation,
                    HIV/AIDS, oral health and social service programs in Black communities.
                </div>
                <div class="self-stretch md:h-[20rem] relative leading-[1.875rem] inline-block shrink-0 text-justify">
                    The focus of her current research is exploring factors that contribute to a healthy community for
                    Black immigrants. Dr. Fapohunda is also conducting research abroad training healthcare practitioners
                    on cancer awareness. In February 2019, Lakeshore Cancer Center in Lagos, Nigeria and Dr. Fapohunda
                    completed training workshops on cancer awareness for healthcare practitioners. Currently funded by
                    the Rotary Global Grant, she and her team developed an eLearning training platform “Learn with
                    Lakeshore” to train healthcare practitioners on cancer awareness in Lagos, Nigeria. She is also a PI
                    on the Pittsburgh Transformations Project funded by the Pitt Momentum Award. This is a
                    multidisciplinary, collaborative study that addresses the historical and contemporary struggles of
                    underrepresented U.S. populations.
                </div>
            </div>
        </div>
    </section>

    {{-- Section 2 --}}
    <section
        class="self-stretch flex flex-col items-start justify-start max-w-full text-center text-[4rem] text-white font-desktop-links">
        <div
            class="self-stretch flex flex-row items-start justify-center pt-[1.312rem] px-[1.25rem] pb-[2.187rem]  relative max-w-full">
            <img class="h-full w-full absolute !m-[0] top-[0rem] right-[0rem] bottom-[0rem] left-[0rem] max-w-full overflow-hidden max-h-full object-cover"
                alt="" src="images/gradient-1@2x.png" />

            <div class="w-[53.563rem] flex flex-col items-start justify-start p-[0.625rem]  max-w-full z-[1]">
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
