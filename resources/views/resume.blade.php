@extends('layout.app')

@section('title','Resume')

@section('content')

    <!-- Breadcrumb -->
    <section class="section-breadcrumb mb-[50px] relative max-[991px]:mb-[40px] max-[767px]:mb-[35px] bg-[url('assets/img/breadcrumb/bg.jpg')] bg-cover bg-no-repeat bg-center relative bg-blend-overlay">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bix-breadcrumb mt-[100px] py-[80px] overflow-hidden">
                        <div class="breadcrumb-overlay w-full h-full absolute top-[0] bottom-[0] right-[0] left-[0] bg-[#0009] z-[0]"></div>
                        <div class="breadcrumb-contact flex flex-col justify-center items-center z-[12] relative">
                            <h4 class="mb-[8px] font-montserrat text-[32px] font-semibold text-[#fff] capitalize tracking-[0.03rem] leading-[1.2] max-[991px]:mb-[4px] max-[991px]:text-[28px] max-[575px]:mb-[0] max-[575px]:text-[22px]">Resume</h4>
                            <h5 class="cursor-default text-[#111a24] text-[1.25rem] leading-[1.2]">
                                <span class="px-[2px]">
                                    <a href="{{url('/')}}" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px]">Home</a>
                                </span>
                                <span class="px-[2px]">
                                    <i class="ri-arrow-right-s-line text-[14px] text-[#fff]"></i>
                                </span>
                                <span class="disable px-[2px] opacity-[0.7]">
                                    <a href="javascript:void(0)" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px] cursor-default">Resume</a>
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resume -->
    <section class="section-resume pt-[50px] pb-[100px] max-[991px]:pt-[40px] max-[991px]:pb-[80px] max-[767px]:pt-[35px] max-[767px]:pb-[70px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="min-[992px]:w-[33.33%] w-full px-[12px]">
                    <div class="bix-resume-sidebar border-[1px] border-solid border-[#eae8ef] rounded-[20px] bg-[#f7f5fb] max-[991px]:hidden">
                        <div class="inner-img pt-[24px] px-[24px] max-[575px]:pt-[15px] max-[575px]:px-[15px]">
                            <img src="assets/img/about/about-one.png" alt="resume" class="w-full rounded-[20px]">
                        </div>
                        <div class="inner-contact border-b-[1px] border-solid border-[#eae8ef] p-[24px]">
                            <div class="resume-title mb-[12px]">
                                <h4 class="font-montserrat text-[17px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] tracking-[0.03rem]"><i class="ri-contacts-fill mr-[10px]"></i>Contact</h4>
                            </div>
                            <div class="resume-contact-info">
                                <ul class="m-[0] p-[0]">
                                    {{-- <li class="py-[5px]"><i class="ri-phone-line text-[15px] font-medium text-[#777] mr-[10px]"></i><a href="javascript:void(0)" class="text-[15px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.03rem]">+91 1234567890</a></li> --}}
                                    <li class="py-[5px]"><i class="ri-mail-open-line text-[15px] font-medium text-[#777] mr-[10px]"></i><a href="javascript:void(0)" class="text-[15px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.03rem]">jeanstephaneyapo@proton.me</a></li>
                                    <li class="py-[5px]"><i class="ri-link text-[15px] font-medium text-[#777] mr-[10px]"></i><a href="javascript:void(0)" class="text-[15px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.03rem]">www.jeanstephaneyapo.com</a></li>
                                    {{-- <li class="py-[5px]"><i class="ri-map-pin-line text-[15px] font-medium text-[#777] mr-[10px]"></i><a href="javascript:void(0)" class="text-[15px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.03rem]">987-A, Dudhivadar, Rajkot, Gujarat, Bharat - 360410.</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="inner-contact border-b-[1px] border-solid border-[#eae8ef] p-[24px]">
                            <div class="resume-title mb-[12px]">
                                <h4 class="font-montserrat text-[17px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] tracking-[0.03rem]"><i class="ri-book-3-line mr-[10px]"></i>Education</h4>
                            </div>
                            @foreach ($educations as $education)
                                <div class="resume-education-info mb-[12px]">
                                    <span class="font-montserrat leading-[26px] tracking-[0.02rem] text-[14px] font-medium text-[#777] flex justify-start"> {{$education->start_year}} - {{$education->end_year}} </span>
                                    <h4 class="mb-[6px] text-[16px] font-semibold leading-[24px] text-[#111a24] tracking-[0.03rem] font-montserrat">{{$education->degree_name}}</h4>
                                    <p class="text-[14px] leading-[24px] font-montserrat text-[#495461] font-normal tracking-[0.03rem]">{{substr($education->description,0,100)}}</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="inner-contact p-[24px]">
                            <div class="resume-title mb-[12px]">
                                <h4 class="font-montserrat text-[17px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] tracking-[0.03rem]"><i class="ri-settings-5-line mr-[10px]"></i>Skills</h4>
                            </div>
                            <div class="resume-contact-info">
                                <ul class="m-[0] p-[0]">
                                    <li class="py-[5px] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">HTML</li>
                                    <li class="py-[5px] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">Photoshop</li>
                                    <li class="py-[5px] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">Angular</li>
                                    <li class="py-[5px] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">Php</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[66.66%] w-full px-[12px]">
                    <div class="bix-resume-contact">
                        <div class="sub-heading mb-[24px] p-[30px] border-[1px] border-solid border-[#eae8ef] rounded-[20px] bg-[#f7f5fb] flex justify-center items-center text-center max-[991px]:justify-start max-[991px]:text-left max-[380px]:flex-col max-[380px]:text-center">
                            <div class="inner-img hidden max-[991px]:flex max-[991px]:mr-[15px] max-[380px]:mr-[0] max-[380px]:mb-[15px]">
                                <img src="assets/img/resume/resume.jpg" alt="resume" class="h-[70px] w-[70px] rounded-[20px]">
                            </div>
                            <div class="inner-heading">
                                <h4 class="mb-[4px] font-montserrat text-[26px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] max-[1399px]:text-[24px] max-[1199px]:mb-[0] max-[1199px]:text-[20px]">Jean Stephane Yapo</h4>
                                <span class="text-[14px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.02rem]">Data Software Engineer</span>
                            </div>
                        </div>
                        <div class="inner-resume-contact mb-[-24px]">
                            <div class="resume-about mb-[24px] p-[24px] border-[1px] border-solid border-[#eae8ef] rounded-[20px] bg-[#f7f5fb] max-[575px]:p-[15px]">
                                <div class="inner-title mb-[16px]">
                                    <h5 class="text-[20px] font-bold mb-[0] text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat max-[991px]:text-[18px]">About Me</h5>
                                </div>
                                <p class="text-[15px] mb-[0] font-montserrat text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">I am a passionate creative developer and engineer who blends artistic vision with technical mastery to craft powerful and inspiring digital solutions. From sleek, responsive websites to intelligent data-driven applications, I transform ideas into engaging experiences that are both beautiful and functional. My expertise spans software engineering, data analysis, and modern web development, allowing me to deliver projects with precision, creativity, and impact. I believe every project should tell a story, solve real problems, and inspire its audience — and I bring this philosophy into everything I build. Always learning, always innovating, I stay at the cutting edge of technology to create work that not only meets expectations but exceeds them.</p>
                            </div>
                            <div class="resume-experience mb-[24px] p-[24px] border-[1px] border-solid border-[#eae8ef] rounded-[20px] bg-[#f7f5fb] max-[575px]:p-[15px]">
                                <div class="inner-title mb-[16px]">
                                    <h5 class="text-[20px] font-bold mb-[0] text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat max-[991px]:text-[18px]">My Experience</h5>
                                </div>
                                @foreach ($experiences as $experience)
                                <div class="inner-experience mb-[8px] p-[20px] bg-[#fff] border-[1px] border-solid border-[#eae8ef] rounded-tl-[20px] rounded-tr-[20px]">
                                    <h5 class="mb-[8px] text-[16px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat max-[991px]:text-[15px]"> {{$experience->company_name}} </h5>
                                    <div class="experience-value mb-[15px] flex justify-between flex-wrap">
                                        <span class="text-[13px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.02rem]">- {{$experience->job_name}}</span>
                                        <span class="text-[13px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.02rem]">{{$experience->start_year}} - {{$experience->end_year}}</span>
                                    </div>
                                    <p class="text-[15px] font-montserrat mb-[0] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">{{$experience->description}}</p>
                                </div>
                                @endforeach
                            </div>
                            <div class="resume-project mb-[24px] p-[24px] border-[1px] border-solid border-[#eae8ef] rounded-[20px] bg-[#f7f5fb] max-[575px]:p-[15px]">
                                <div class="inner-title mb-[16px]">
                                    <h5 class="text-[20px] font-bold mb-[0] text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat max-[991px]:text-[18px]">My Projects</h5>
                                </div>
                                @foreach ($projects as $project)
                                <div class="inner-project mb-[8px] p-[20px] border-[1px] border-solid border-[#eae8ef] bg-[#fff] rounded-tl-[20px] rounded-tr-[20px]">
                                    <h5 class="text-[16px] font-bold text-[#111a24] leading-[26px] tracking-[0.03rem] font-montserrat"> {{$project->title}} </h5>
                                    <a href="{{$project->link}}" class="mb-[15px] text-[15px] font-normal text-[#777] flex font-montserrat leading-[26px] tracking-[0.03rem]">View Project</a>
                                    <p class="text-[15px] font-montserrat mb-[0] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">{{$project->description}}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection