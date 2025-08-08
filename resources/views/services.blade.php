@extends('layout.app')

@section('title','My Services')

@section('content')
    <!-- Breadcrumb -->
    <section class="section-breadcrumb mb-[50px] relative max-[991px]:mb-[40px] max-[767px]:mb-[35px] bg-[url('assets/img/breadcrumb/bg.jpg')] bg-cover bg-no-repeat bg-center relative bg-blend-overlay">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bix-breadcrumb mt-[100px] py-[80px] overflow-hidden">
                        <div class="breadcrumb-overlay w-full h-full absolute top-[0] bottom-[0] right-[0] left-[0] bg-[#0009] z-[0]"></div>
                        <div class="breadcrumb-contact flex flex-col justify-center items-center z-[12] relative">
                            <h4 class="mb-[8px] font-montserrat text-[32px] font-semibold text-[#fff] capitalize tracking-[0.03rem] leading-[1.2] max-[991px]:mb-[4px] max-[991px]:text-[28px] max-[575px]:mb-[0] max-[575px]:text-[22px]">services</h4>
                            <h5 class="cursor-default text-[#111a24] text-[1.25rem] leading-[1.2]">
                                <span class="px-[2px]">
                                    <a href="{{url('/')}}" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px]">Home</a>
                                </span>
                                <span class="px-[2px]">
                                    <i class="ri-arrow-right-s-line text-[14px] text-[#fff]"></i>
                                </span>
                                <span class="disable px-[2px] opacity-[0.7]">
                                    <a href="javascript:void(0)" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px] cursor-default">services</a>
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section-services py-[50px] max-[991px]:py-[40px] max-[767px]:py-[35px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="w-full px-[12px]">
                    <div class="bix-banner mb-[30px] flex justify-center text-center max-[1199px]:mb-[25px] max-[767px]:mb-[20px] aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <h4 class="font-montserrat text-[36px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] max-[1199px]:text-[32px] max-[767px]:text-[28px] max-[575px]:text-[24px]">Why Hire Me <br> For Your Next <span class="text-[#f41a4a]">Project</span></h4>
                    </div>
                    <div class="bix-banner-line mb-[110px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                        <span class="inner-border relative flex justify-center"></span>
                    </div>
                </div>
                @foreach ($services as $service)
                <div class="min-[1200px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                    <div class="bix-services mt-[30px] relative flex flex-col justify-center text-center rounded-[30px] bg-[{{$service->color}}]">
                        <div class="services-image mt-[-30px] flex justify-center relative">
                            <div class="inner-image mt-[-7px] p-[20px] relative bg-[#fff] rounded-[50%]">
                                <span class="ring h-[60px] w-[60px] m-auto border-[1px] border-solid border-[#111a24] absolute top-[8px] left-[8px] rounded-[50%] inline-block z-[5]"></span>
                                <img src="{{$service->logo}}" alt="services" class="h-[35px] w-[35px] relative z-[1]">
                            </div>
                        </div>
                        <div class="services-contact p-[30px]">
                            <h5 class="mb-[14px] font-montserrat text-[18px] text-[#111a24] font-semibold tracking-[0.03rem] leading-[1.2]"> {{$service->title}} </h5>
                            <p class="font-montserrat text-[14px] leading-[20px] text-[#111a24] tracking-[0.03rem]"> {{$service->description}} </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Faq -->
    <section class="section-faq py-[50px] max-[991px]:py-[40px] max-[767px]:py-[35px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="w-full px-[12px]">
                    <div class="bix-banner mb-[30px] flex justify-center text-center max-[1199px]:mb-[25px] max-[767px]:mb-[20px] aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <h4 class="font-montserrat text-[36px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] max-[1199px]:text-[32px] max-[767px]:text-[28px] max-[575px]:text-[24px]">Common <span class="text-[#f41a4a]">Inquiries</span></h4>
                    </div>
                    <div class="bix-banner-line mb-[110px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                        <span class="inner-border relative flex justify-center"></span>
                    </div>
                </div>
                <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]">
                    <div class="bix-faq" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="bix-accordion">
                            <div class="bix-accordion-item">
                                <h4 class="bix-accordion-header active-arrow relative mb-[20px] border-[1px] border-solid border-[#eae8ef] leading-[10px] rounded-[10px] bg-[#f7f5fb] text-[#111a24] font-medium text-[1rem] p-[1.25rem] tracking-[0.03rem]">
                                    What are the requirements to start working on this project?
                                </h4>
                                <div class="bix-accordion-body show rounded-[20px] mb-[20px] border-[1px] border-solid border-[#eae8ef] p-[1.25rem] font-montserrat text-[14px] font-normal leading-[26px] tracking-[0.02rem]">
                                    (1) Website logo with high resolution (2) Content of all pages with a word,
                                        PSD or Figma files (3) Business Email, Address, Working Hours, Phone number (4)
                                        Some example site or competitor links or what type of design you like.
                                </div>
                            </div>
                            <div class="bix-accordion-item">
                                <h4 class="bix-accordion-header relative mb-[20px] border-[1px] border-solid border-[#eae8ef] leading-[10px] rounded-[10px] bg-[#f7f5fb] text-[#111a24] font-medium text-[1rem] p-[1.25rem] tracking-[0.03rem]">
                                    What do you need to upload site?
                                </h4>
                                <div class="bix-accordion-body hidden rounded-[20px] mb-[20px] border-[1px] border-solid border-[#eae8ef] p-[1.25rem] font-montserrat text-[14px] font-normal leading-[26px] tracking-[0.02rem]">
                                    Domain & Hosting with Cpanel to upload static site.
                                </div>
                            </div>
                            <div class="bix-accordion-item">
                                <h4 class="bix-accordion-header relative mb-[20px] border-[1px] border-solid border-[#eae8ef] leading-[10px] rounded-[10px] bg-[#f7f5fb] text-[#111a24] font-medium text-[1rem] p-[1.25rem] tracking-[0.03rem]">
                                    Do you provide any support after the site is launched?
                                </h4>
                                <div class="bix-accordion-body hidden rounded-[20px] mb-[20px] border-[1px] border-solid border-[#eae8ef] p-[1.25rem] font-montserrat text-[14px] font-normal leading-[26px] tracking-[0.02rem]">
                                    Yes of course. I offer six months of FREE support and I love to have a
                                    long-term working relationship. 🙂
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]">
                    <div class="bix-faq" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="bix-accordion">
                            <div class="bix-accordion-item">
                                <h4 class="bix-accordion-header active-arrow relative mb-[20px] border-[1px] border-solid border-[#eae8ef] leading-[10px] rounded-[10px] bg-[#f7f5fb] text-[#111a24] font-medium text-[1rem] p-[1.25rem] tracking-[0.03rem]">
                                    What are the requirements to start working on this project?
                                </h4>
                                <div class="bix-accordion-body show rounded-[20px] mb-[20px] border-[1px] border-solid border-[#eae8ef] p-[1.25rem] font-montserrat text-[14px] font-normal leading-[26px] tracking-[0.02rem]">
                                    (1) Website logo with high resolution (2) Content of all pages with a word,
                                        PSD or Figma files (3) Business Email, Address, Working Hours, Phone number (4)
                                        Some example site or competitor links or what type of design you like.
                                </div>
                            </div>
                            <div class="bix-accordion-item">
                                <h4 class="bix-accordion-header relative mb-[20px] border-[1px] border-solid border-[#eae8ef] leading-[10px] rounded-[10px] bg-[#f7f5fb] text-[#111a24] font-medium text-[1rem] p-[1.25rem] tracking-[0.03rem]">
                                    What do you need to upload site?
                                </h4>
                                <div class="bix-accordion-body hidden rounded-[20px] mb-[20px] border-[1px] border-solid border-[#eae8ef] p-[1.25rem] font-montserrat text-[14px] font-normal leading-[26px] tracking-[0.02rem]">
                                    Domain & Hosting with Cpanel to upload static site.
                                </div>
                            </div>
                            <div class="bix-accordion-item">
                                <h4 class="bix-accordion-header relative mb-[20px] border-[1px] border-solid border-[#eae8ef] leading-[10px] rounded-[10px] bg-[#f7f5fb] text-[#111a24] font-medium text-[1rem] p-[1.25rem] tracking-[0.03rem]">
                                    Do you provide any support after the site is launched?
                                </h4>
                                <div class="bix-accordion-body hidden rounded-[20px] mb-[20px] border-[1px] border-solid border-[#eae8ef] p-[1.25rem] font-montserrat text-[14px] font-normal leading-[26px] tracking-[0.02rem]">
                                    Yes of course. I offer six months of FREE support and I love to have a
                                        long-term working relationship. 🙂
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
