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
                Consulting & Inquiries
            </h1>
            <h2
                class="m-0 w-[52.313rem] relative text-[1.5rem] leading-[150%] font-normal font-inherit text-white-2 flex items-center justify-center max-w-full z-[1] mq450:text-[1.188rem] mq450:leading-[1.813rem]">
                Home &gt; Consulting & Inquiries
            </h2>

        </div>
    </section>

    {{-- Section 1  --}}
    <section
        class="self-stretch flex flex-row items-start justify-start pt-[0rem] px-[5rem] pb-[3.75rem] box-border max-w-full text-left text-[1rem] text-black font-desktop-links mq825:pl-[2.5rem] mq825:pr-[2.5rem] mq825:pb-[2.438rem] mq825:box-border">
        <div
            class="flex-1 flex flex-row items-start justify-start gap-[2.187rem] max-w-full mq825:gap-[1.063rem] mq1425:flex-wrap">
            <img class="h-[31.25rem] flex-1 relative rounded-xl max-w-full overflow-hidden object-cover min-w-[29.75rem] mq825:min-w-full"
                alt="" src="{{ asset('images/gradient-12@2x.png') }}" />

            <div
                class="w-[32.063rem] flex flex-col items-start justify-start pt-[5.312rem] px-[0rem] pb-[0rem] box-border min-w-[32.063rem] max-w-full mq825:pt-[3.438rem] mq825:box-border mq825:min-w-full mq1425:flex-1">
                <div class="self-stretch h-[25rem] relative leading-[1.875rem] inline-block shrink-0">
                    Dr. Dara D. Méndez is a nationally recognized researcher, writer
                    and speaker. She has 20+ years of multi-disciplinary public health
                    experience at the intersections of structural and social
                    determinants of health equity, reproductive justice, maternal and
                    child health and epidemiology. In addition to being a professor,
                    she has served in leadership roles with the Black Equity
                    Coalition, the Pennsylvania Maternal Mortality Committee, and as
                    Health Equity Editor for Block Chronicles. Dr. Méndez has helped
                    leaders and organizations develop and implement strategies,
                    initiatives and research to promote health equity and justice.
                </div>
            </div>
        </div>
    </section>
    {{-- Section 2  --}}

    <section
        class="self-stretch bg-white flex flex-row flex-wrap items-start justify-start py-[2.5rem] px-[5rem] box-border gap-[2rem] max-w-full text-left text-[1.75rem] text-red font-desktop-links mq825:gap-[1rem] mq825:py-[1.625rem] mq825:px-[2.5rem] mq825:box-border">
        <div
            class="flex-1 flex flex-col items-start justify-start gap-[1.25rem] min-w-[25.375rem] max-w-full mq825:min-w-full">
            <div class="self-stretch flex flex-row items-start justify-center py-[0rem] px-[1.25rem]">
                <h1
                    class="m-0 relative text-inherit leading-[3.25rem] font-bold font-inherit mq450:text-[1.375rem] mq450:leading-[2.625rem]">
                    KEY NOTE TOPICS
                </h1>
            </div>
            <h2
                class="m-0 self-stretch relative text-[1.5rem] leading-[150%] font-normal font-inherit text-black mq450:text-[1.188rem] mq450:leading-[1.813rem]">
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li class="my-[undefined] mx-[undefined]">
                        Integrating Arts-Based Approaches in Public Health
                    </li>
                </ul>
                <p class="m-0">​​</p>
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li class="my-[undefined] mx-[undefined]">
                        Community Participatory Approaches
                    </li>
                </ul>
                <p class="m-0">​</p>
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li class="my-[undefined] mx-[undefined]">
                        Structural and Social Determinants of Health Equity
                    </li>
                </ul>
                <p class="m-0">​</p>
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li class="my-[undefined] mx-[undefined]">
                        Institutional Equity
                    </li>
                </ul>
                <p class="m-0">​</p>
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li class="my-[undefined] mx-[undefined]">
                        Public Health Critical Race Praxis
                    </li>
                </ul>
                <p class="m-0">​​</p>
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li>Birth and Reproductive Equity and Justice</li>
                </ul>
            </h2>
        </div>
        <div
            class="flex-1 flex flex-col items-start justify-start gap-[1.25rem] min-w-[25.375rem] max-w-full mq825:min-w-full">
            <div class="self-stretch flex flex-row items-start justify-center py-[0rem] px-[1.25rem]">
                <h1
                    class="m-0 relative text-inherit leading-[3.25rem] font-bold font-inherit mq450:text-[1.375rem] mq450:leading-[2.625rem]">
                    CONSULTING SERVICES
                </h1>
            </div>
            <h2
                class="m-0 self-stretch relative text-[1.5rem] leading-[150%] font-normal font-inherit text-black mq450:text-[1.188rem] mq450:leading-[1.813rem]">
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li class="my-[undefined] mx-[undefined]">
                        Quantitative and Qualitative Research: Study Design, Data
                        Collection, Analysis, Dissemination
                    </li>
                </ul>
                <p class="m-0">​​</p>
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li class="my-[undefined] mx-[undefined]">Program Evaluation</li>
                </ul>
                <p class="m-0">​​</p>
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li class="my-[undefined] mx-[undefined]">
                        Community Engagement for Research, Program Planning and Policy
                    </li>
                </ul>
                <p class="m-0">​​</p>
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li class="my-[undefined] mx-[undefined]">Equity Assessment</li>
                </ul>
                <p class="m-0">​​</p>
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li class="my-[undefined] mx-[undefined]">
                        Curriculum Development, Training and Capacity Building
                    </li>
                </ul>
                <p class="m-0">​​</p>
                <ul class="m-0 font-inherit text-inherit pl-[1.333rem]">
                    <li>Grant Writing and Funding Strategies</li>
                </ul>
            </h2>
        </div>
    </section>

    {{-- Section 3  --}}

    <section
        class="self-stretch flex flex-row items-center justify-between p-[5rem] box-border max-w-full gap-[1.25rem] lg:flex-wrap mq450:flex-wrap mq450:pt-[2.125rem] mq450:pb-[2.125rem] mq450:box-border mq825:flex-wrap mq825:pt-[3.25rem] mq825:pb-[3.25rem] mq825:box-border mq1425:flex-wrap mq1425:pl-[2.5rem] mq1425:pr-[2.5rem] mq1425:box-border">
        <form
            class="m-0 w-[39rem] shadow-[0px_4px_12px_2px_rgba(27,_27,_27,_0.15)] rounded-3xs bg-white flex flex-row flex-wrap items-start justify-start py-[2.5rem] pl-[2.5rem] pr-[4rem] box-border gap-x-[2.5rem] gap-y-[1.25rem] min-h-[31.188rem] max-w-full lg:min-h-[auto] mq450:min-h-[auto] mq825:min-h-[auto] mq1425:pr-[2rem] mq1425:box-border mq1425:min-h-[auto]">
            <div class="w-[15.625rem] flex flex-col items-start justify-start gap-[0.5rem]">
                <b class="self-stretch relative text-[1.125rem] font-desktop-links text-black text-left">First Name</b>
                <div
                    class="self-stretch rounded-lg bg-white-3 border-white-2 border-[1px] border-solid flex flex-row items-center justify-start py-[0.562rem] px-[1rem]">
                    <div
                        class="w-[2.625rem] relative text-[0.813rem] leading-[1.875rem] font-desktop-links text-gray-200 text-left inline-block shrink-0">
                        Jane
                    </div>
                </div>
            </div>
            <div
                class="h-[5rem] w-[15.625rem] flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[0rem] box-border gap-[0.5rem]">
                <b class="self-stretch relative text-[1.125rem] font-desktop-links text-black text-left">Last Name</b>
                <div
                    class="self-stretch rounded-lg bg-white-3 border-white-2 border-[1px] border-solid flex flex-row items-center justify-start py-[0.562rem] px-[1rem]">
                    <div
                        class="w-[2.625rem] relative text-[0.813rem] leading-[1.875rem] font-desktop-links text-gray-200 text-left inline-block shrink-0">
                        Jane
                    </div>
                </div>
            </div>
            <div
                class="h-[5rem] w-[15.625rem] flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[0rem] box-border gap-[0.5rem]">
                <b class="self-stretch relative text-[1.125rem] font-desktop-links text-black text-left">Email</b>
                <div
                    class="self-stretch rounded-lg bg-white-3 border-white-2 border-[1px] border-solid flex flex-row items-center justify-start py-[0.562rem] px-[1rem]">
                    <div
                        class="w-[2.625rem] relative text-[0.813rem] leading-[1.875rem] font-desktop-links text-gray-200 text-left inline-block shrink-0">
                        Jane
                    </div>
                </div>
            </div>
            <div
                class="h-[5rem] w-[15.625rem] flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[0rem] box-border gap-[0.5rem]">
                <b class="self-stretch relative text-[1.125rem] font-desktop-links text-black text-left">Phone</b>
                <div
                    class="self-stretch rounded-lg bg-white-3 border-white-2 border-[1px] border-solid flex flex-row items-center justify-start py-[0.562rem] px-[1rem]">
                    <div
                        class="w-[2.625rem] relative text-[0.813rem] leading-[1.875rem] font-desktop-links text-gray-200 text-left flex items-center shrink-0">
                        Jane
                    </div>
                </div>
            </div>
            <div
                class="h-[5rem] w-[32.5rem] flex flex-col items-start justify-start pt-[0rem] px-[0rem] pb-[0rem] box-border gap-[0.5rem] max-w-full">
                <b class="self-stretch relative text-[1.125rem] font-desktop-links text-black text-left">Message</b>
                <div
                    class="self-stretch rounded-lg bg-white-3 border-white-2 border-[1px] border-solid flex flex-row items-center justify-start py-[0.75rem] px-[1rem]">
                    <input
                        class="w-[10.563rem] [border:none] [outline:none] font-desktop-links text-[0.813rem] bg-[transparent] h-[1.5rem] relative leading-[1.875rem] text-gray-200 text-left flex items-center p-0"
                        placeholder="Type your message here" type="text" />
                </div>
            </div>
            <button
                class="cursor-pointer border-red border-[1px] border-solid py-[0.75rem] px-[1.25rem] bg-[transparent] w-[32.5rem] [filter:drop-shadow(0px_1px_2px_rgba(0,_0,_0,_0.05))] rounded-lg box-border flex flex-row items-center justify-center max-w-full hover:bg-indianred-200 hover:border-indianred-100 hover:border-[1px] hover:border-solid hover:box-border">
                <div
                    class="relative text-[1rem] tracking-[0.2em] leading-[150%] font-semibold font-desktop-links text-black text-left inline-block min-w-[4.938rem]">
                    SUBMIT
                </div>
            </button>
        </form>
        <img class="w-[39rem] relative rounded-xl max-h-full object-cover max-w-full" alt=""
            src="{{ asset('images/gradient-21@2x.png') }}" />
    </section>





</x-app-layout>
