@extends('layout.app')

@section('title','Home')


@section('content')

    <!-- Hero -->
    <section class="section-hero h-[800px] mt-[100px] relative pb-[50px] pt-[100px] max-[991px]:h-auto max-[991px]:mt-[95px] max-[991px]:pb-[40px] max-[991px]:pt-[80px] max-[767px]:pb-[35px] max-[767px]:pt-[70px]" id="home">
        <div class="first-name top-[0] leading-none absolute font-montserrat text-[200px] font-black text-[#fff] opacity-[0.04] max-[991px]:text-[130px] max-[991px]:top-[30px] max-[575px]:text-[100px] max-[460px]:text-[70px]">Steph</div>
        <div class="last-name bottom-[0] right-[0] absolute font-montserrat text-[200px] font-black text-[#fff] opacity-[0.04] max-[991px]:bottom-[250px] max-[991px]:text-[130px] max-[575px]:text-[100px] max-[460px]:text-[70px]">Yapo</div>
        <div class="flex h-full flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                    <div class="bix-hero-img relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                        <div class="hero-inner-img relative">
                            <img src="assets/img/hero/hero.png" alt="hero" data-offset="30" class="hero-parallax w-[calc(100%-300px)] mt-auto mx-auto mb-[50px] block max-[1399px]:w-[calc(100%-260px)] max-[1199px]:w-[calc(100%-215px)] max-[991px]:w-[calc(100%-400px)] max-[767px]:w-[calc(100%-250px)] max-[575px]:w-[210px]">
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                    <div class="bix-hero-contact h-full flex flex-col justify-center relative max-[991px]:mt-[15px] max-[991px]:pb-[30px] max-[991px]:items-center max-[575px]:text-center">
                        <h4 class="mb-[8px] font-montserrat tracking-[0.03rem] leading-[1.2] text-[35px] font-bold text-[#f41a4a] max-[1399px]:text-[32px] max-[1199px]:text-[28px] max-[767px]:text-[24px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">Hi, I am</h4>
                        <h1 class="mb-[16px] text-[78px] text-[#111a24] font-bold relative tracking-[0.03rem] leading-[1.2] max-[1399px]:text-[70px] max-[1199px]:text-[52px] max-[767px]:text-[38px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700">Stephane Yapo</h1>
                        <p class="font-montserrat text-[27px] font-semibold text-[#111a24] leading-[26px] tracking-[0.03rem] max-[1399px]:text-[24px] max-[1199px]:text-[20px] max-[767px]:text-[18px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">I am a
                            <span class="mx-[5px] text-[#f41a4a]">Data Software Engineer</span>
                        </p>
                        <div class="bix-buttons m-[-10px] pt-[50px] flex flex-wrap relative max-[991px]:pt-[20px] max-[575px]:justify-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="900">
                            <a href="assets/Resume.pdf" download="Jean_Stephane_YAPO_Resume.pdf" class="bix-button m-[10px] transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] font-montserrat text-[14px] font-semibold leading-[1.2] capitalize bg-[#fff] text-[#111a24] border-[1px] border-solid border-[#111a24] rounded-[15px] hover:bg-[#f41a4a] hover:border-[#f41a4a] hover:text-[#fff]">Download CV</a>
                            <button type="button" class="modal-trigger bix-modal-toggle bix-button m-[10px] transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] font-montserrat text-[14px] font-semibold leading-[1.2] capitalize bg-[#fff] text-[#111a24] border-[1px] border-solid border-[#111a24] rounded-[15px] hover:bg-[#f41a4a] hover:border-[#f41a4a] hover:text-[#fff]">Hire Me <i class="ri-arrow-right-up-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="section-about relative py-[50px] max-[991px]:py-[40px] max-[767px]:py-[35px]">
        <div class="container flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-30px]">
                <div class="w-full px-[12px]">
                    <div class="bix-banner mb-[30px] flex justify-center text-center max-[1199px]:mb-[25px] max-[767px]:mb-[20px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <h4 class="font-montserrat text-[36px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] max-[1199px]:text-[32px] max-[767px]:text-[28px] max-[575px]:text-[24px]">About <span class="text-[#f41a4a]">Me</span></h4>
                    </div> 
                    <div class="bix-banner-line mb-[110px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                        <span class="inner-border relative flex justify-center"></span>
                    </div>
                </div>
                <div class="max-[1199px]:order-2 min-[1200px]:w-[33.33%] min-[992px]:w-[50%] w-full px-[12px] mb-[30px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                    <div class="bix-about-contact h-full flex flex-col justify-center">
                        <h5 class="mb-[24px] font-montserrat text-[37px] font-bold text-[#fff] tracking-[0.08rem] opacity-[0.5] leading-[1.2] max-[1399px]:text-[32px] max-[1199px]:text-[28px] max-[575px]:text-[28px] max-[420px]:text-[22px]">“Creativity is the bridge between imagination and innovation.”</h5>
                        <p class="mb-[16px] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">As a creative developer and engineer, I merge artistic vision with technical expertise to craft innovative solutions. My journey is driven by a passion for transforming ideas into impactful digital experiences.</p>
                        <div class="about-name">
                            <h6 class="mb-[0] font-montserrat text-[16px] text-[#111a24] font-bold tracking-[0.03rem] leading-[1.2]">Data Software Engineer</h6>
                            <p class="text-[14px] text-[#555] mb-[16px] font-montserrat font-normal leading-[26px] tracking-[0.03rem]">Jean Stephane Yapo</p>
                            <div class="inner-sign-items">
                                <img src="assets/img/about/sign.png" alt="sign" class="white-mode w-[120px] inline">
                                <img src="assets/img/about/sign-dark.png" alt="sign" class="dark-mode w-[120px] hidden">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-[1199px]:order-1 min-[1200px]:w-[33.33%] min-[992px]:w-[100%] w-full px-[12px] mb-[30px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                    <div class="bix-about-img border-[1px] border-solid border-[#111a24] p-[15px] rounded-[200px] relative max-[1199px]:max-w-fit max-[1199px]:m-auto">
                        <img src="assets/img/about/about-one.png" alt="about" class="w-full rounded-[200px]">
                        <div class="bix-rounded-circle z-[1] h-[130px] w-[130px] absolute bottom-[0] right-[0] bg-[#000000cc] rounded-[50%] max-[575px]:h-[120px] max-[575px]:w-[120px] max-[575px]:bottom-[20px] max-[575px]:right-[20px] max-[420px]:bottom-[0] max-[420px]:right-[0]">
                            <a href="{{ url('/about') }}" class="relative">
                                <svg viewBox="0 0 100 100" width="100" height="100" class="fill-current h-auto origin-center w-full">
                                    <defs>
                                        <path id="circle" d=" M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0"></path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#circle" class="text-[10px] text-[#fff] tracking-[1.3px]">About Me&nbsp; - About Me &nbsp;-&nbsp;About Me &nbsp;-
                                        </textPath>
                                    </text>
                                </svg>
                                <div class="inner-contact w-full h-full absolute top-[0] left-[0] right-[0] flex justify-center items-center">
                                    <i class="ri-arrow-right-up-line text-[30px] text-[#fff]"></i>
                                </div>
                            </a>
                        </div>
                        <div class="inner-item transition-all duration-[0.3s] ease-in-out h-full absolute top-[0] right-[-7px] flex flex-col justify-center z-[0] opacity-[0]">
                            <a class="box-inner my-[20px] relative" href="https://www.linkedin.com/in/jean-st%C3%A9phane-yapo-137a11219/">
                                <img src="assets/img/about/item-1.png" alt="item-1" class="w-[18px] h-[18px] relative z-[1] rounded-[0]">
                            </a>
                            <a class="box-inner my-[20px] relative" href="https://github.com/Stephane1335?tab=repositories">
                                <img src="assets/img/about/item-2.png" alt="item-2" class="white-mode w-[18px] h-[18px] relative z-[1] rounded-[0] inline">
                                <img src="assets/img/about/item-2-dark.png" alt="item-2-dark" class="dark-mode w-[18px] h-[18px] relative z-[1] rounded-[0] hidden">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="max-[1199px]:order-3 min-[1200px]:w-[33.33%] min-[992px]:w-[50%] w-full px-[12px]">
                    <div class="bix-skill h-full flex flex-col justify-center max-[1199px]:h-auto" id="progress">
                        <div class="skill-inner-box mb-[24px] p-[20px] flex flex-col relative rounded-[100px] max-[420px]:rounded-[50px] bg-[#faf1c6]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                            <div class="skill-logo transition-all duration-[0.3s] ease-in-out flex justify-end absolute right-[60px] top-[-30px] z-[1] opacity-[0]">
                                <a href="javascript:void(0)" class="relative h-[30px] w-[30px] mx-[20px] border-[1px] border-solid border-[#111a24] bg-[#fff] rounded-[20px]">
                                    <img src="assets/img/about/logo-1.png" alt="about-logo-1" class="w-[28px] p-[5px]">
                                </a>
                                <a href="javascript:void(0)" class="relative h-[30px] w-[30px] mx-[20px] border-[1px] border-solid border-[#111a24] bg-[#fff] rounded-[20px]">
                                    <img src="assets/img/about/logo-3.png" alt="about-logo-3" class="w-[28px] p-[5px]">
                                </a>
                            </div>
                            <div class="skill-contact inline-flex flex-wrap max-[420px]:flex-col">
                                <svg class="progress noselect w-[90px] h-full bg-transparent inline-block" data-progress="90" x="0px" y="0px" viewBox="0 0 80 80"> 
                                    <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                    <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                    <text class="value" x="50%" y="58%">0%</text>
                                </svg>
                                <div class="skill-box-contact w-[calc(100%-90px)] p-[10px] flex flex-col justify-center max-[420px]:w-full">
                                    <h4 class="font-montserrat text-[16px] font-semibold text-[#111a24] mb-[8px] tracking-[0.03rem] leading-[1.2]">Frontend <span class="text-[13px] font-medium text-[#111a24]">(Angular, React)</span></h4>
                                    <p class="font-montserrat text-[13px] leading-[22px] text-[#495461] overflow-hidden tracking-[0.03rem] text-ellipsis flex">Passionate about crafting responsive and dynamic user interfaces using modern frameworks like Angular and React. I turn complex ideas into sleek, interactive web experiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="skill-inner-box mb-[24px] p-[20px] flex flex-col relative rounded-[100px] max-[420px]:rounded-[50px] bg-[#ffd5df]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                            <div class="skill-logo transition-all duration-[0.3s] ease-in-out flex justify-end absolute right-[60px] top-[-30px] z-[1] opacity-[0]">
                                <a href="javascript:void(0)" class="relative h-[30px] w-[30px] mx-[20px] border-[1px] border-solid border-[#111a24] bg-[#fff] rounded-[20px]">
                                    <img src="assets/img/about/logo-4.png" alt="about-logo-4" class="w-[28px] p-[5px]">
                                </a>
                                <a href="javascript:void(0)" class="relative h-[30px] w-[30px] mx-[20px] border-[1px] border-solid border-[#111a24] bg-[#fff] rounded-[20px]">
                                    <img src="assets/img/about/logo-5.png" alt="about-logo-5" class="w-[28px] p-[5px]">
                                </a>
                            </div>
                            <div class="skill-contact inline-flex flex-wrap max-[420px]:flex-col">
                                <svg class="progress blue noselect w-[90px] h-full bg-transparent inline-block" data-progress="80" x="0px" y="0px" viewBox="0 0 80 80">
                                    <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                    <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                    <text class="value" x="50%" y="58%">0%</text>
                                </svg>
                                <div class="skill-box-contact w-[calc(100%-90px)] p-[10px] flex flex-col justify-center max-[420px]:w-full">
                                    <h4 class="font-montserrat text-[16px] font-semibold text-[#111a24] mb-[8px] tracking-[0.03rem] leading-[1.2]">Backend <span class="text-[13px] font-medium text-[#111a24]">(Php, Python)</span></h4>
                                    <p class="font-montserrat text-[13px] leading-[22px] text-[#495461] overflow-hidden tracking-[0.03rem] text-ellipsis flex">Skilled in building robust and scalable server-side applications with PHP and Python. I design secure APIs and backend systems that power seamless and efficient user experiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="skill-inner-box mb-[24px] p-[20px] flex flex-col relative rounded-[100px] max-[420px]:rounded-[50px] bg-[#d5f5ff]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000">
                            <div class="skill-logo transition-all duration-[0.3s] ease-in-out flex justify-end absolute right-[60px] top-[-30px] z-[1] opacity-[0]">
                                <a href="javascript:void(0)" class="relative h-[30px] w-[30px] mx-[20px] border-[1px] border-solid border-[#111a24] bg-[#fff] rounded-[20px]">
                                    <img src="assets/img/about/logo-5.png" alt="about-logo-6" class="w-[28px] p-[5px]">
                                </a>
                                <a href="javascript:void(0)" class="relative h-[30px] w-[30px] mx-[20px] border-[1px] border-solid border-[#111a24] bg-[#fff] rounded-[20px]">
                                    <img src="assets/img/about/logo-7.jpg" alt="about-logo-7" class="w-[28px] p-[5px]">
                                </a>
                            </div>
                            <div class="skill-contact inline-flex flex-wrap max-[420px]:flex-col">
                                <svg class="progress noselect w-[90px] h-full bg-transparent inline-block" data-progress="85" x="0px" y="0px" viewBox="0 0 80 80">
                                    <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                    <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                    <text class="value" x="50%" y="58%">0%</text>
                                </svg>
                                <div class="skill-box-contact w-[calc(100%-90px)] p-[10px] flex flex-col justify-center max-[420px]:w-full">
                                    <h4 class="font-montserrat text-[16px] font-semibold text-[#111a24] mb-[8px] tracking-[0.03rem] leading-[1.2]">Data Analytics <span class="text-[13px] font-medium text-[#111a24]">(Python, R)</span></h4>
                                    <p class="font-montserrat text-[13px] leading-[22px] text-[#495461] overflow-hidden tracking-[0.03rem] text-ellipsis flex">Experienced in extracting insights from complex datasets using Python and R. I transform raw data into actionable intelligence through data visualization, statistical modeling, and predictive analytics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievement -->
    <section class="section-achievement relative py-[50px] max-[991px]:py-[40px] max-[767px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bix-banner mb-[30px] flex justify-center text-center max-[1199px]:mb-[25px] max-[767px]:mb-[20px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <h4 class="font-montserrat text-[36px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] max-[1199px]:text-[32px] max-[767px]:text-[28px] max-[575px]:text-[24px]">What I <span class="text-[#f41a4a]">Achieve</span></h4>
                    </div>
                    <div class="bix-banner-line mb-[110px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                        <span class="inner-border relative flex justify-center"></span>
                    </div>
                </div>
                <div class="w-full px-[12px]">
                    <div class="bix-activity-tabs flex flex-col items-center">
                        <ul class="nav nav-tabs inline-flex flex-wrap justify-center items-center bg-[#fff] border-[1px] border-solid border-[#111a24] rounded-[25px] mb-[30px]" id="bix_activity" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                            <li class="nav-item m-[10px]">
                                <a href="#education" class="py-[5px] px-[15px] rounded-[15px] capitalize font-medium text-[16px] block">Education</a>
                            </li>
                            <li class="nav-item m-[10px]">
                                <a href="#experience" class="py-[5px] px-[15px] rounded-[15px] capitalize font-medium text-[16px] block">Experience</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-activity-pane" id="education">
                                <div class="flex flex-wrap w-full">
                                    <div class="w-full">
                                        <div class="bix-achievement relative flex w-full max-[767px]:flex-col">
                                            <div class="bix-achievement-inner bix-border-r w-[50%] pr-[30px] border-r-[0.5px] border-solid border-[#111a24] max-[767px]:w-full max-[767px]:flex max-[767px]:flex-col max-[767px]:border-[0] max-[767px]:p-[0]">
                                                @for ($i = 0; $i < $educations->count(); $i++)
                                                    @if ($i % 2 === 1)
                                                        <div class="bix-achievement-box left border-[1px] border-solid border-[#111a24] p-[30px] rounded-[30px] bg-[#f7f5fb] relative max-[767px]:mt-[12px] max-[767px]:mb-[24px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                                            <div class="achievement-year w-[100px] h-full absolute top-[0] flex items-center justify-center rotate-[270deg] z-[1] right-[-82px] max-[767px]:block max-[767px]:rotate-[0] max-[767px]:top-[-13px] max-[767px]:left-[45px]">
                                                                <span class="bg-[#111a24] text-[#fff] border-[1px] border-solid border-[#111a24] rounded-[10px] leading-[1] py-[3px] px-[10px] font-montserrat font-normal tracking-[0.02rem] text-[14px]"> {{$educations[$i]->start_year}} -{{ substr($educations[$i]->end_year, -2) }}</span>
                                                            </div>
                                                            <h4 class="mb-[8px] font-montserrat text-[18px] font-semibold leading-[26px] text-[#111a24] tracking-[0.03rem] max-[575px]:text-[16px] max-[575px]:leading-[25px]">{{ $educations[$i]->degree_name }} <span class="text-[15px] text-[#555]">- {{ $educations[$i]->school_name }} </span></h4>
                                                            <p class="overflow-hidden text-ellipsis flex m-[0] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]"> {{$educations[$i]->description}}</p>
                                                            <div class="flex items-center space-x-4">
                                                                <img class="h-auto max-w-xs" src="/assets/img/logo/verified.png" alt="image description">
                                                                <p class="text-gray-700">This degree has been officially verified by WES.<br>
                                                                    <a href="https://www.credly.com/badges/846cf822-0a70-4bdb-8009-e89537d6e7ff/public_url" target="_blank" class="text-blue-600 hover:underline">
                                                                        Click here to verify.
                                                                    </a>
                                                                </p>
                                                            </div>  
                                                        </div>                                                           
                                                    @endif
                                                @endfor
                                            </div>
                                            <div class="bix-achievement-inner bix-border-l w-[50%] pl-[30px] border-l-[0.5px] border-solid border-[#111a24] max-[767px]:w-full max-[767px]:flex max-[767px]:flex-col max-[767px]:border-[0] max-[767px]:p-[0] max-[767px]:mb-[-24px]">
                                                @for ($i = 0; $i < $educations->count(); $i++)
                                                    @if ($i % 2 === 0)
                                                        <div class="bix-achievement-box right border-[1px] border-solid border-[#111a24] mt-[150px] p-[30px] rounded-[30px] bg-[#f7f5fb] relative max-[767px]:mt-[12px] max-[767px]:mb-[24px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                                                            <div class="achievement-year w-[100px] h-full absolute top-[0] flex items-center justify-center rotate-[270deg] z-[1] left-[-82px] max-[767px]:block max-[767px]:rotate-[0] max-[767px]:top-[-13px] max-[767px]:left-[45px]">
                                                                <span class="bg-[#111a24] text-[#fff] border-[1px] border-solid border-[#111a24] rounded-[10px] leading-[1] py-[3px] px-[10px] font-montserrat font-normal tracking-[0.02rem] text-[14px]">{{$educations[$i]->start_year}} -{{ substr($educations[$i]->end_year, -2) }}</span>
                                                            </div>
                                                            <h4 class="mb-[8px] font-montserrat text-[18px] font-semibold leading-[26px] text-[#111a24] tracking-[0.03rem] max-[575px]:text-[16px] max-[575px]:leading-[25px]">{{ $educations[$i]->degree_name }} <span class="text-[15px] text-[#555]">- {{ $educations[$i]->school_name }}</span>
                                                            </h4>
                                                            <p class="overflow-hidden text-ellipsis flex m-[0] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">{{ $educations[$i]->description }}</p>
                                                            <div class="flex items-center space-x-4">
                                                                <img class="h-auto max-w-xs" src="/assets/img/logo/verified.png" alt="image description">
                                                                <p class="text-gray-700">This degree has been officially verified by WES.<br>
                                                                    <a href="https://www.credly.com/badges/846cf822-0a70-4bdb-8009-e89537d6e7ff/public_url" target="_blank" class="text-blue-600 hover:underline">
                                                                        Click here to verify.
                                                                    </a>
                                                                </p>
                                                            </div>  
                                                        </div>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-activity-pane" id="experience">
                                <div class="flex flex-wrap w-full">
                                    <div class="w-full px-[12px]">
                                        <div class="bix-achievement relative flex w-full max-[767px]:flex-col">
                                            <div class="bix-achievement-inner bix-border-r w-[50%] pr-[30px] border-r-[0.5px] border-solid border-[#111a24] max-[767px]:w-full max-[767px]:flex max-[767px]:flex-col max-[767px]:border-[0] max-[767px]:p-[0]">
                                                @for ($i = 0; $i < $experiences->count(); $i++)
                                                    @if ($i % 2 === 1)
                                                    <div class="bix-achievement-box left border-[1px] border-solid border-[#111a24] mt-[150px] border-[1px] border-solid border-[#111a24] p-[30px] rounded-[30px] bg-[#f7f5fb] relative max-[767px]:mt-[12px] max-[767px]:mb-[24px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                                        <div class="achievement-year w-[100px] h-full absolute top-[0] flex items-center justify-center rotate-[270deg] z-[1] right-[-82px] max-[767px]:block max-[767px]:rotate-[0] max-[767px]:top-[-13px] max-[767px]:left-[45px]">
                                                            <span class="bg-[#111a24] text-[#fff] border-[1px] border-solid border-[#111a24] rounded-[10px] leading-[1] py-[3px] px-[10px] font-montserrat font-normal tracking-[0.02rem] text-[14px]">{{$experiences[$i]->start_year}} -{{ substr($experiences[$i]->end_year, -2) }}</span>
                                                        </div>
                                                        <h4 class="mb-[8px] font-montserrat text-[18px] font-semibold leading-[26px] text-[#111a24] tracking-[0.03rem] max-[575px]:text-[16px] max-[575px]:leading-[25px]">{{ $experiences[$i]->company_name }} <span class="text-[15px] text-[#555]">- {{ $experiences[$i]->job_name }}</span></h4>
                                                        <p class="overflow-hidden text-ellipsis flex m-[0] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">{{ $experiences[$i]->description }}</p>
                                                    </div>
                                                    @endif
                                                @endfor
                                            </div>
                                            <div class="bix-achievement-inner bix-border-l w-[50%] pl-[30px] border-l-[0.5px] border-solid border-[#111a24] max-[767px]:w-full max-[767px]:flex max-[767px]:flex-col max-[767px]:border-[0] max-[767px]:p-[0] max-[767px]:mb-[-24px]">
                                                @for ($i = 0; $i < $experiences->count(); $i++)
                                                    @if ($i % 2 === 0)
                                                    <div class="bix-achievement-box right border-[1px] border-solid border-[#111a24] p-[30px] rounded-[30px] bg-[#f7f5fb] relative max-[767px]:mt-[12px] max-[767px]:mb-[24px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                                                        <div class="achievement-year w-[100px] h-full absolute top-[0] flex items-center justify-center rotate-[270deg] z-[1] left-[-82px] max-[767px]:block max-[767px]:rotate-[0] max-[767px]:top-[-13px] max-[767px]:left-[45px]">
                                                            <span class="bg-[#111a24] text-[#fff] border-[1px] border-solid border-[#111a24] rounded-[10px] leading-[1] py-[3px] px-[10px] font-montserrat font-normal tracking-[0.02rem] text-[14px]">{{$experiences[$i]->start_year}} -{{ substr($experiences[$i]->end_year, -2) }}</span>
                                                        </div>
                                                        <h4 class="mb-[8px] font-montserrat text-[18px] font-semibold leading-[26px] text-[#111a24] tracking-[0.03rem] max-[575px]:text-[16px] max-[575px]:leading-[25px]">{{ $experiences[$i]->company_name }}<span class="text-[15px] text-[#555]">- {{ $experiences[$i]->job_name }}</span>
                                                        </h4>
                                                        <p class="overflow-hidden text-ellipsis flex m-[0] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">{{ $experiences[$i]->description }}</p>
                                                    </div>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section-services relative py-[50px] max-[991px]:py-[40px] max-[767px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
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
                                <p class="font-montserrat text-[14px] leading-[20px] text-[#111a24] tracking-[0.03rem]">{{$service->description}}</p>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section class="section-projects py-[50px] max-[991px]:py-[40px] max-[767px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bix-banner mb-[30px] flex justify-center text-center max-[1199px]:mb-[25px] max-[767px]:mb-[20px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <h4 class="font-montserrat text-[36px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] max-[1199px]:text-[32px] max-[767px]:text-[28px] max-[575px]:text-[24px]">Featured <span class="text-[#f41a4a]">Projects</span></h4>
                    </div>
                    <div class="bix-banner-line mb-[110px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                        <span class="inner-border relative flex justify-center"></span>
                    </div>
                </div>
                <div class="w-full projects-content">
                    <div class="controls bix-projects-tabs px-[12px] flex flex-col items-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <ul id="filters" class="clearfix mb-[30px] p-[5px] flex justify-center flex-wrap bg-[#f7f5fb] items-center border-[1px] border-solid border-[#1b1c20] rounded-[25px]">
                            <li class="filter m-[5px] py-[5px] px-[15px] transition-all duration-[0.25s] ease-out border-[0] rounded-[15px] font-montserrat text-[14px] leading-[26px] tracking-[0.03rem] text-[#111a24] cursor-pointer active" data-filter="all">All</li>
                            @foreach ($type_projects as $type_project)
                                <li class="filter m-[5px] py-[5px] px-[15px] transition-all duration-[0.25s] ease-out border-[0] rounded-[15px] font-montserrat text-[14px] leading-[26px] tracking-[0.03rem] text-[#111a24] cursor-pointer" data-filter=".{{$type_project->name}}">{{$type_project->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="item-grid" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                        <div class="flex flex-wrap w-full mb-[-24px]">
                            @foreach ($projects as $project)
                            <div class="min-[1200px]:w-[33.33%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px] item @foreach ($project->typeproject as $type_project) {{$type_project->name}} @endforeach">
                                <div class="bix-project-card">
                                    <div class="project-image relative px-[30px] pb-[30px] overflow-hidden rounded-[30px] z-[1] max-[480px]:px-[20px] max-[480px]:pb-[20px]">
                                        <a href="assets/img/project/11.jpg" data-fancybox="gallery" class="flex rounded-[30px] overflow-hidden">
                                            <div class="overlay-project-card transition-all duration-[0.3s] ease-in-out opacity-[0] w-[calc(100%-60px)] h-[calc(100%-30px)] absolute top-[0] right-[30px] rounded-[30px] flex items-center justify-center bg-[#00000080] z-[45] overflow-hidden max-[480px]:p-[0] max-[480px]:w-[calc(100%-40px)] max-[480px]:h-[calc(100%-20px)] max-[480px]:top-[0] max-[480px]:bottom-[0] max-[480px]:right-[20px] max-[480px]:left-[20px]"></div>
                                            <img src="assets/img/project/1.jpg" alt="project-1" class="transition-all duration-[0.3s] ease-in-out w-full">
                                        </a>
                                    </div>
                                    <div class="project-contact pt-[170px] pb-[30px] px-[30px] mt-[-175px] relative z-[0] border-[1px] border-solid border-[#1b1c20] rounded-[30px] max-[480px]:pb-[20px] max-[480px]:px-[20px]">
                                        <h5 class="mb-[2px] text-[18px] text-[#111a24] tracking-[0.03rem] leading-[1.2] font-medium"><a href="single-project.html" class="transition-all duration-[0.3s] ease-in-out font-montserrat leading-[26px] tracking-[0.03rem] text-[18px] max-[1399px]:text-[17px] font-semibold text-[#111a24] hover:text-[#f41a4a]"> {{$project->title}} </a></h5>
                                        <span class="font-montserrat font-normal leading-[26px] tracking-[0.02rem] text-[14px] max-[1399px]:text-[14px] text-[#999]">@foreach ($project->typeproject as $type_project) {{$type_project->name}}, @endforeach </span>
                                        <p class="mt-[4px] font-montserrat text-[14px] font-normal tracking-[0.03rem] leading-[22px] text-[#495461]">{{ substr($project->description,0,100) }}...
                                            <a href="single-project.html" class="text-[#111a24] inline-flex font-medium font-montserrat text-[14px] leading-[26px] tracking-[0.03rem]">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hire -->
    <section class="section-hire my-[50px] max-[991px]:my-[40px] max-[767px]:my-[35px] py-[120px] bg-[url('assets/img/hire/bg.jpg')] bg-cover bg-center text-center relative z-[1] max-[767px]:py-[100px] max-[575px]:py-[80px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bix-hire-banner">
                        <div class="overlay w-full h-full absolute top-[0] bottom-[0] right-[0] left-[0] bg-[#000000cc] z-[-1]"></div>
                        <div class="bix-hire-contact m-auto max-w-[700px]">
                            <h2 class="mb-[16px] font-montserrat text-[35px] max-[1199px]:text-[32px] max-[767px]:text-[28px] max-[575px]:text-[24px] text-[#fff] font-bold tracking-[0.03rem] leading-[1.2]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">Transform Data <span>into Decisions</span></h2>
                            <h4 class="mb-[16px] font-montserrat text-[20px] max-[575px]:text-[18px] font-semibold text-[#fff] tracking-[0.03rem] leading-[1.2]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">Together</h4>
                            <p class="font-montserrat text-[15px] font-light text-[#fff] leading-[26px] tracking-[0.03rem]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">Need insights or scalable apps? I’m here to help. Let’s connect!</p>
                            <div class="inner-circle-items mt-[40px] flex justify-center items-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="bix-rounded-circle relative h-[150px] w-[150px] bg-[#fff] rounded-[50%] max-[575px]:w-[120px] max-[575px]:h-[120px]">
                                    <a href="javascript:void(0)" class="relative bix-modal-toggle" data-bs-toggle="modal" data-bs-target="#bid">
                                        <svg viewBox="0 0 100 100" width="100" height="100" class="h-full w-full">
                                            <defs>
                                                <path id="circle2" d=" M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0"></path>
                                            </defs>
                                            <text>
                                                <textPath xlink:href="#circle2" class="text-[#111a24] font-semibold text-[10px] tracking-[1.3px]">
                                                    Hire Me - Hire Me - Hire Me - Hire -
                                                </textPath>
                                            </text>
                                        </svg>
                                        <div class="inner-contact absolute top-[0] left-[0] right-[0] flex justify-center items-center h-full w-[0]">
                                            <i class="ri-arrow-right-up-line text-[#111a24] text-[30px] leading-[26px] font-normal tracking-[0.03rem]"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Testimonials -->
    <section class="section-testimonials relative py-[50px] max-[991px]:py-[40px] max-[767px]:py-[35px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bix-banner mb-[30px] flex justify-center text-center max-[1199px]:mb-[25px] max-[767px]:mb-[20px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <h4 class="font-montserrat text-[36px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] max-[1199px]:text-[32px] max-[767px]:text-[28px] max-[575px]:text-[24px]">Echoes of <span class="text-[#f41a4a]">Brilliance</span></h4>
                    </div>
                    <div class="bix-banner-line mb-[110px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                        <span class="inner-border relative flex justify-center"></span>
                    </div>
                </div>
                <div class="w-full px-[12px]">
                    <div class="bix-testimonials relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                        <img src="assets/img/testimonials/img-1.png" alt="testimonials-1" class="testimonials-img-1 z-[-1] h-[80px] w-[80px] absolute top-[0] left-[50px] rotate-[-12deg] blur-[3px] opacity-[0.8] max-[1399px]:h-[60px] max-[1399px]:w-[60px] max-[1399px]:left-[10px] max-[1199px]:hidden">
                        <img src="assets/img/testimonials/img-2.png" alt="testimonials-2" class="testimonials-img-2 z-[-1] h-[60px] w-[60px] absolute bottom-[0] left-[0] rounded-[15px] rotate-[10deg] max-[1399px]:h-[50px] max-[1399px]:w-[50px] max-[1199px]:hidden">
                        <img src="assets/img/testimonials/img-3.png" alt="testimonials-3" class="testimonials-img-3 z-[-1] h-[50px] w-[50px] absolute top-[0] right-[500px] rounded-[15px] rotate-[-10deg] blur-[3px] opacity-[0.8] max-[1399px]:right-auto max-[1399px]:top-[-100px] max-[991px]:right-auto max-[991px]:left-[0] max-[991px]:top-[-80px] max-[767px]:hidden">
                        <img src="assets/img/testimonials/img-4.png" alt="testimonials-4" class="testimonials-img-4 z-[-1] h-[60px] w-[60px] absolute top-[-100px] right-[250px] rounded-[15px] rotate-[10deg] max-[1399px]:top-[-120px] max-[1399px]:right-[200px] max-[991px]:right-auto max-[991px]:left-[100px] max-[767px]:right-auto max-[767px]:left-[0]">
                        <img src="assets/img/testimonials/img-5.png" alt="testimonials-5" class="testimonials-img-5 z-[-1] h-[70px] w-[70px] absolute top-[50px] right-[0] rounded-[15px] rotate-[5deg] max-[1399px]:h-[40px] max-[1399px]:w-[40px] max-[1399px]:top-[-70px] max-[991px]:top-[-130px]">
                        <img src="assets/img/testimonials/img-6.png" alt="testimonials-6" class="testimonials-img-6 z-[-1] h-[60px] w-[60px] absolute bottom-[0] right-[80px] rounded-[15px] rotate-[-15deg] blur-[3px] opacity-[0.8] max-[1399px]:h-[50px] max-[1399px]:w-[50px] max-[1399px]:right-[200px] max-[1399px]:bottom-[120px] max-[991px]:bottom-auto max-[991px]:top-[-20px] max-[991px]:right-[50px]">
                        <div class="inner-banner rotate-[270deg] absolute top-[0] left-[150px] bottom-[0] z-[-4] max-[1399px]:left-[90px] max-[1199px]:left-[10px] max-[991px]:hidden">
                            <h4 class="font-montserrat text-[42px] font-bold text-[#fff] opacity-[0.15] tracking-[0.03rem] leading-[1.2] max-[1399px]:text-[38px] max-[1199px]:text-[34px]">Testimonials</h4>
                        </div>
                        <div class="owl-carousel testimonials-slider z-[-1]">
                            <div class="bix-testimonials-inner max-w-[900px] m-auto max-[1399px]:max-w-[800px]">
                                <div class="flex flex-wrap w-full">
                                    <div class="min-[768px]:w-[33.33%] w-full px-[12px]">
                                        <div class="testimonials-image relative max-[767px]:w-full max-[767px]:mb-[20px] max-[767px]:flex max-[767px]:justify-center">
                                            <img src="assets/img/testimonials/1.jpg" alt="testimonials" class="w-full rounded-[20px] max-[767px]:max-w-[80px]">
                                        </div>
                                    </div>
                                    <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                        <div class="testimonials-contact h-full flex flex-col justify-end">
                                            <h4 class="mb-[8px] font-montserrat text-[20px] text-[#111a24] font-semibold leading-[1.2] tracking-[0.03rem] max-[767px]:mb-[4px] max-[767px]:text-[18px] max-[767px]:text-center">Isabella Bianchi</h4>
                                            <span class="font-montserrat font-normal text-[16px] leading-[26px] tracking-[0.02rem] text-[#999] max-[767px]:text-[14px] max-[767px]:text-center">(Manager)</span>
                                            <div class="inner-contact mt-[10px] border-[1px] border-solid border-[#111a24] p-[20px] bg-[#fff] rounded-[20px]">
                                                <p class="m-[0] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                    at sint eligendi possimus perspiciatis asperiores reiciendis hic amet alias
                                                    aut quaerat maiores blanditiis."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bix-testimonials-inner max-w-[900px] m-auto max-[1399px]:max-w-[800px]">
                                <div class="flex flex-wrap w-full">
                                    <div class="min-[768px]:w-[33.33%] w-full px-[12px]">
                                        <div class="testimonials-image relative max-[767px]:w-full max-[767px]:mb-[20px] max-[767px]:flex max-[767px]:justify-center">
                                            <img src="assets/img/testimonials/2.jpg" alt="testimonials" class="w-full rounded-[20px] max-[767px]:max-w-[80px]">
                                        </div>
                                    </div>
                                    <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                        <div class="testimonials-contact h-full flex flex-col justify-end">
                                            <h4 class="mb-[8px] font-montserrat text-[20px] text-[#111a24] font-semibold leading-[1.2] tracking-[0.03rem] max-[767px]:mb-[4px] max-[767px]:text-[18px] max-[767px]:text-center">Saddika Alard</h4>
                                            <span class="font-montserrat font-normal text-[16px] leading-[26px] tracking-[0.02rem] text-[#999] max-[767px]:text-[14px] max-[767px]:text-center">(Team Leader)</span>
                                            <div class="inner-contact mt-[10px] border-[1px] border-solid border-[#111a24] p-[20px] bg-[#fff] rounded-[20px]">
                                                <p class="m-[0] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                    at sint eligendi possimus perspiciatis asperiores reiciendis hic amet alias
                                                    aut quaerat maiores blanditiis."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bix-testimonials-inner max-w-[900px] m-auto max-[1399px]:max-w-[800px]">
                                <div class="flex flex-wrap w-full">
                                    <div class="min-[768px]:w-[33.33%] w-full px-[12px]">
                                        <div class="testimonials-image relative max-[767px]:w-full max-[767px]:mb-[20px] max-[767px]:flex max-[767px]:justify-center">
                                            <img src="assets/img/testimonials/3.jpg" alt="testimonials" class="w-full rounded-[20px] max-[767px]:max-w-[80px]">
                                        </div>
                                    </div>
                                    <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                        <div class="testimonials-contact h-full flex flex-col justify-end">
                                            <h4 class="mb-[8px] font-montserrat text-[20px] text-[#111a24] font-semibold leading-[1.2] tracking-[0.03rem] max-[767px]:mb-[4px] max-[767px]:text-[18px] max-[767px]:text-center">Stephen Smith</h4>
                                            <span class="font-montserrat font-normal text-[16px] leading-[26px] tracking-[0.02rem] text-[#999] max-[767px]:text-[14px] max-[767px]:text-center">(Co Founder)</span>
                                            <div class="inner-contact mt-[10px] border-[1px] border-solid border-[#111a24] p-[20px] bg-[#fff] rounded-[20px]">
                                                <p class="m-[0] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                    at sint eligendi possimus perspiciatis asperiores reiciendis hic amet alias
                                                    aut quaerat maiores blanditiis."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="section-blog pt-[50px] pb-[100px] max-[991px]:pt-[40px] max-[991px]:pb-[80px] max-[767px]:pt-[35px] max-[767px]:pb-[70px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bix-banner mb-[30px] flex justify-center text-center max-[1199px]:mb-[25px] max-[767px]:mb-[20px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <h4 class="font-montserrat text-[36px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] max-[1199px]:text-[32px] max-[767px]:text-[28px] max-[575px]:text-[24px]">Spotlight <span class="text-[#f41a4a]">Stories</span></h4>
                    </div>
                    <div class="bix-banner-line mb-[110px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                        <span class="inner-border relative flex justify-center"></span>
                    </div>
                </div>
                <div class="w-full px-[12px]">
                    <div class="owl-carousel bix-blog-wrap">
                        <div class="bix-blog-box mt-[53px] p-[20px] relative border-[1px] border-solid border-[#111a24] rounded-[30px] flex max-[1199px]:flex-col max-[1199px]:mt-[0] max-[767px]:max-w-[430px] max-[767px]:my-[0] max-[767px]:mx-auto" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                            <div class="blog-img mr-[10px] absolute w-[200px] top-[-54px] left-[20px] right-[20px] max-[1199px]:mr-[0] max-[1199px]:mb-[10px] max-[1199px]:relative max-[1199px]:w-auto max-[1199px]:top-[0] max-[1199px]:left-[0] max-[1199px]:right-[0]">
                                <img src="assets/img/blog/1.jpg" alt="blog-1" class="w-[200px] rounded-[30px] max-[1199px]:w-full">
                            </div>
                            <div class="blog-contact ml-[20px] pl-[200px] flex flex-col justify-center max-[1199px]:ml-[0] max-[1199px]:pl-[0]">
                                <span class="font-montserrat font-normal leading-[26px] tracking-[0.02rem] text-[13px] text-[#999]">Marketind</span>
                                <h4 class="mb-[8px] overflow-hidden text-ellipsis flex text-[calc(1.275rem+.3vw)] text-[#111a24] tracking-[0.03rem] leading-[1.2]"><a href="blog-detail.html" class="transition-all duration-[0.3s] ease-in-out font-montserrat text-[18px] leading-[26px] tracking-[0.03rem] font-semibold text-[#111a24] hover:text-[#f41a4a]">Marketing Guide 5 steps to Success</a></h4>
                                <p class="overflow-hidden text-ellipsis flex font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">Lorem ipsum dolor sit amet consectetur maiores doloremque
                                    explicabo neque pariatur officia voluptates aut illum!</p>
                            </div>
                        </div>
                        <div class="bix-blog-box mt-[53px] p-[20px] relative border-[1px] border-solid border-[#111a24] rounded-[30px] flex max-[1199px]:flex-col max-[1199px]:mt-[0] max-[767px]:max-w-[430px] max-[767px]:my-[0] max-[767px]:mx-auto" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                            <div class="blog-img mr-[10px] absolute w-[200px] top-[-54px] left-[20px] right-[20px] max-[1199px]:mr-[0] max-[1199px]:mb-[10px] max-[1199px]:relative max-[1199px]:w-auto max-[1199px]:top-[0] max-[1199px]:left-[0] max-[1199px]:right-[0]">
                                <img src="assets/img/blog/2.jpg" alt="blog-2" class="w-[200px] rounded-[30px] max-[1199px]:w-full">
                            </div>
                            <div class="blog-contact ml-[20px] pl-[200px] flex flex-col justify-center max-[1199px]:ml-[0] max-[1199px]:pl-[0]">
                                <span class="font-montserrat font-normal leading-[26px] tracking-[0.02rem] text-[13px] text-[#999]">Business</span>
                                <h4 class="mb-[8px] overflow-hidden text-ellipsis flex text-[calc(1.275rem+.3vw)] text-[#111a24] tracking-[0.03rem] leading-[1.2]"><a href="blog-detail.html" class="transition-all duration-[0.3s] ease-in-out font-montserrat text-[18px] leading-[26px] tracking-[0.03rem] font-semibold text-[#111a24] hover:text-[#f41a4a]">Best Way to solve Business deal.</a></h4>
                                <p class="overflow-hidden text-ellipsis flex font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">Lorem ipsum dolor sit amet consectetur maiores doloremque
                                    explicabo neque pariatur officia voluptates aut illum!</p>
                            </div>
                        </div>
                        <div class="bix-blog-box mt-[53px] p-[20px] relative border-[1px] border-solid border-[#111a24] rounded-[30px] flex max-[1199px]:flex-col max-[1199px]:mt-[0] max-[767px]:max-w-[430px] max-[767px]:my-[0] max-[767px]:mx-auto" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                            <div class="blog-img mr-[10px] absolute w-[200px] top-[-54px] left-[20px] right-[20px] max-[1199px]:mr-[0] max-[1199px]:mb-[10px] max-[1199px]:relative max-[1199px]:w-auto max-[1199px]:top-[0] max-[1199px]:left-[0] max-[1199px]:right-[0]">
                                <img src="assets/img/blog/3.jpg" alt="blog-3" class="w-[200px] rounded-[30px] max-[1199px]:w-full">
                            </div>
                            <div class="blog-contact ml-[20px] pl-[200px] flex flex-col justify-center max-[1199px]:ml-[0] max-[1199px]:pl-[0]">
                                <span class="font-montserrat font-normal leading-[26px] tracking-[0.02rem] text-[13px] text-[#999]">Knowledge</span>
                                <h4 class="mb-[8px] overflow-hidden text-ellipsis flex text-[calc(1.275rem+.3vw)] text-[#111a24] tracking-[0.03rem] leading-[1.2]"><a href="blog-detail.html" class="transition-all duration-[0.3s] ease-in-out font-montserrat text-[18px] leading-[26px] tracking-[0.03rem] font-semibold text-[#111a24] hover:text-[#f41a4a]">customer service stats know in 2019.</a></h4>
                                <p class="overflow-hidden text-ellipsis flex font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">Lorem ipsum dolor sit amet consectetur maiores doloremque
                                    explicabo neque pariatur officia voluptates aut illum!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



@endsection

