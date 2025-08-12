@extends('layout.app')

@section('title','About Me')

@section('content')

<!-- Breadcrumb -->
    <section class="section-breadcrumb mb-[50px] relative max-[991px]:mb-[40px] max-[767px]:mb-[35px] bg-[url('assets/img/breadcrumb/bg.jpg')] bg-cover bg-no-repeat bg-center relative bg-blend-overlay">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bix-breadcrumb mt-[100px] py-[80px] overflow-hidden">
                        <div class="breadcrumb-overlay w-full h-full absolute top-[0] bottom-[0] right-[0] left-[0] bg-[#0009] z-[0]"></div>
                        <div class="breadcrumb-contact flex flex-col justify-center items-center z-[12] relative">
                            <h4 class="mb-[8px] font-montserrat text-[32px] font-semibold text-[#fff] capitalize tracking-[0.03rem] leading-[1.2] max-[991px]:mb-[4px] max-[991px]:text-[28px] max-[575px]:mb-[0] max-[575px]:text-[22px]">About</h4>
                            <h5 class="cursor-default text-[#111a24] text-[1.25rem] leading-[1.2]">
                                <span class="px-[2px]">
                                    <a href="{{url('/')}}" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px]">Home</a>
                                </span>
                                <span class="px-[2px]">
                                    <i class="ri-arrow-right-s-line text-[14px] text-[#fff]"></i>
                                </span>
                                <span class="disable px-[2px] opacity-[0.7]">
                                    <a href="javascript:void(0)" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px] cursor-default">About</a>
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="section-about relative py-[50px] max-[991px]:py-[40px] max-[767px]:py-[35px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]">
                    <div class="bix-aboutpage-img relative">
                        <div class="inner-img flex justify-center items-center">
                            <img src="assets/img/about/about-one.png" alt="about-one" class="w-[calc(100%-50px)] h-[calc(100%-50px)] rounded-[40%]">
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]">
                    <div class="bix-about-contact h-full flex flex-col justify-center">
                        <div class="bix-banner mb-[30px] max-[1199px]:mb-[25px] max-[767px]:mb-[20px] flex text-center justify-left">
                            <h4 class="font-montserrat text-[36px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] max-[1199px]:text-[32px] max-[767px]:text-[28px] max-[575px]:text-[24px]">About <span class="text-[#f41a4a]">Me</span></h4>
                        </div>
                        <h5 class="mb-[24px] font-montserrat text-[37px] font-bold text-[#fff] tracking-[0.08rem] opacity-[0.5] leading-[1.2] max-[1399px]:text-[28px] max-[1199px]:text-[28px]">“Creativity is the bridge between imagination and innovation.”</h5>
                        <p class="mb-[16px] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">I am a passionate creative developer and engineer who blends artistic vision with technical mastery to craft powerful and inspiring digital solutions. From sleek, responsive websites to intelligent data-driven applications, I transform ideas into engaging experiences that are both beautiful and functional. My expertise spans software engineering, data analysis, and modern web development, allowing me to deliver projects with precision, creativity, and impact. I believe every project should tell a story, solve real problems, and inspire its audience — and I bring this philosophy into everything I build. Always learning, always innovating, I stay at the cutting edge of technology to create work that not only meets expectations but exceeds them.</p>
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
            </div>
        </div>
    </section>

    <!-- Skill -->
    <section class="section-Skill py-[50px] max-[991px]:py-[40px] max-[767px]:py-[35px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]" id="progress">
                <div class="min-[992px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                    <div class="bix-skill bix-block-skill h-full block" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="skill-inner-box p-[20px] flex flex-col relative rounded-[100px] max-[420px]:rounded-[50px] bg-[#faf1c6]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                            <div class="skill-logo transition-all duration-[0.3s] ease-in-out flex justify-end absolute right-[60px] top-[-30px] z-[1] opacity-[0]">
                                <a href="javascript:void(0)" class="relative h-[30px] w-[30px] mx-[20px] border-[1px] border-solid border-[#111a24] bg-[#fff] rounded-[20px]">
                                    <img src="assets/img/about/logo-1.png" alt="about-logo-1" class="w-[28px] p-[5px]">
                                </a>
                                <a href="javascript:void(0)" class="relative h-[30px] w-[30px] mx-[20px] border-[1px] border-solid border-[#111a24] bg-[#fff] rounded-[20px]">
                                    <img src="assets/img/about/logo-2.png" alt="about-logo-2" class="w-[28px] p-[5px]">
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
                    </div>
                </div>
                <div class="min-[992px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                    <div class="bix-skill bix-block-skill" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                        <div class="skill-inner-box p-[20px] flex flex-col relative rounded-[100px] max-[420px]:rounded-[50px] bg-[#ffd5df]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
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
                    </div>
                </div>
                <div class="min-[992px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                    <div class="bix-skill bix-block-skill" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000">
                        <div class="skill-inner-box p-[20px] flex flex-col relative rounded-[100px] max-[420px]:rounded-[50px] bg-[#d5f5ff]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000">
                            <div class="skill-logo transition-all duration-[0.3s] ease-in-out flex justify-end absolute right-[60px] top-[-30px] z-[1] opacity-[0]">
                                <a href="javascript:void(0)" class="relative h-[30px] w-[30px] mx-[20px] border-[1px] border-solid border-[#111a24] bg-[#fff] rounded-[20px]">
                                    <img src="assets/img/about/logo-6.png" alt="about-logo-6" class="w-[28px] p-[5px]">
                                </a>
                                <a href="javascript:void(0)" class="relative h-[30px] w-[30px] mx-[20px] border-[1px] border-solid border-[#111a24] bg-[#fff] rounded-[20px]">
                                    <img src="assets/img/about/logo-7.png" alt="about-logo-7" class="w-[28px] p-[5px]">
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

    {{-- <!-- testimonials -->
    <section class="section-testimonials pt-[50px] pb-[100px] max-[991px]:pt-[40px] max-[991px]:pb-[80px] max-[767px]:pt-[35px] max-[767px]:pb-[70px]">
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
    </section> --}}

@endsection
