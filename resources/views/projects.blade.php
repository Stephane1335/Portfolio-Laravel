@extends('layout.app')

@section('title','My Projects')

@section('content')

    <!-- Breadcrumb -->
    <section class="section-breadcrumb mb-[50px] relative max-[991px]:mb-[40px] max-[767px]:mb-[35px] bg-[url('assets/img/breadcrumb/bg.jpg')] bg-cover bg-no-repeat bg-center relative bg-blend-overlay">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bix-breadcrumb mt-[100px] py-[80px] overflow-hidden">
                        <div class="breadcrumb-overlay w-full h-full absolute top-[0] bottom-[0] right-[0] left-[0] bg-[#0009] z-[0]"></div>
                        <div class="breadcrumb-contact flex flex-col justify-center items-center z-[12] relative">
                            <h4 class="mb-[8px] font-montserrat text-[32px] font-semibold text-[#fff] capitalize tracking-[0.03rem] leading-[1.2] max-[991px]:mb-[4px] max-[991px]:text-[28px] max-[575px]:mb-[0] max-[575px]:text-[22px]">Projects</h4>
                            <h5 class="cursor-default text-[#111a24] text-[1.25rem] leading-[1.2]">
                                <span class="px-[2px]">
                                    <a href="{{url('/')}}" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px]">Home</a>
                                </span>
                                <span class="px-[2px]">
                                    <i class="ri-arrow-right-s-line text-[14px] text-[#fff]"></i>
                                </span>
                                <span class="disable px-[2px] opacity-[0.7]">
                                    <a href="javascript:void(0)" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px] cursor-default">Projects</a>
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
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
    <section class="section-hire mt-[50px] max-[991px]:mt-[40px] max-[767px]:mt-[35px] py-[120px] bg-[url('assets/img/hire/bg.jpg')] bg-cover bg-center text-center relative z-[1] max-[767px]:py-[100px] max-[575px]:py-[80px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bix-hire-banner">
                        <div class="overlay w-full h-full absolute top-[0] bottom-[0] right-[0] left-[0] bg-[#000000cc] z-[-1]"></div>
                        <div class="bix-hire-contact m-auto max-w-[700px]">
                            <h2 class="mb-[16px] font-montserrat text-[35px] max-[1199px]:text-[32px] max-[767px]:text-[28px] max-[575px]:text-[24px] text-[#fff] font-bold tracking-[0.03rem] leading-[1.2]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">Transform Data <span> into Decisions</span></h2>
                            <h4 class="mb-[16px] font-montserrat text-[20px] max-[575px]:text-[18px] font-semibold text-[#fff] tracking-[0.03rem] leading-[1.2]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">Together</h4>
                            <p class="font-montserrat text-[15px] font-light text-[#fff] leading-[26px] tracking-[0.03rem]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">Need insights or scalable apps? I’m here to help. Let’s connect!</p>
                            <div class="inner-circle-items mt-[40px] flex justify-center items-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="bix-rounded-circle relative h-[150px] w-[150px] bg-[#fff] rounded-[50%] max-[575px]:w-[120px] max-[575px]:h-[120px]">
                                    <a href="javascript:void(0)" class="bix-modal-toggle modal-trigger relative" data-bs-toggle="modal" data-bs-target="#bid">
                                        <svg viewBox="0 0 100 100" width="100" height="100" class="h-full w-full">
                                            <defs>
                                                <path id="circle" d=" M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0"></path>
                                            </defs>
                                            <text>
                                                <textPath xlink:href="#circle" class="text-[#111a24] font-semibold text-[10px] tracking-[1.3px]">
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

@endsection