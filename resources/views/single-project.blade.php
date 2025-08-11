@extends('layout.app')

@section('title','Project')
    
@section('content')
        <!-- Breadcrumb -->
        <section class="section-breadcrumb mb-[50px] relative max-[991px]:mb-[40px] max-[767px]:mb-[35px] bg-[url('assets/img/breadcrumb/bg.jpg')] bg-cover bg-no-repeat bg-center relative bg-blend-overlay">
            <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full">
                    <div class="w-full px-[12px]">
                        <div class="bix-breadcrumb mt-[100px] py-[80px] overflow-hidden">
                            <div class="breadcrumb-overlay w-full h-full absolute top-[0] bottom-[0] right-[0] left-[0] bg-[#0009] z-[0]"></div>
                            <div class="breadcrumb-contact flex flex-col justify-center items-center z-[12] relative">
                                <h4 class="mb-[8px] font-montserrat text-[32px] font-semibold text-[#fff] capitalize tracking-[0.03rem] leading-[1.2] max-[991px]:mb-[4px] max-[991px]:text-[28px] max-[575px]:mb-[0] max-[575px]:text-[22px]">Single Project</h4>
                                <h5 class="cursor-default text-[#111a24] text-[1.25rem] leading-[1.2]">
                                    <span class="px-[2px]">
                                        <a href="{{url('/')}}" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px]">Home</a>
                                    </span>
                                    <span class="px-[2px]">
                                        <i class="ri-arrow-right-s-line text-[14px] text-[#fff]"></i>
                                    </span>
                                    <span class="disable px-[2px] opacity-[0.7]">
                                        <a href="javascript:void(0)" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px] cursor-default">{{$project->title}}</a>
                                    </span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Single project -->
        <section class="section-single-projects pt-[50px] pb-[100px] max-[991px]:pt-[40px] max-[991px]:pb-[80px] max-[767px]:pt-[35px] max-[767px]:pb-[70px]">
            <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap mb-[-24px]">
                    <div class="min-[1200px]:w-[25%] min-[992px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                        <div class="bix-single-projects-sidebar border-[1px] border-solid border-[#eae8ef] bg-[#f7f5fb] rounded-[20px]">
                            <div class="bix-category p-[24px] border-b-[1px] border-solid border-[#eae8ef] max-[575px]:p-[15px]">
                                <div class="sub-title mb-[12px]">
                                    <h4 class="text-[20px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat max-[575px]:text-[18px]">Category</h4>
                                </div>
                                <div class="category-contact">
                                    @foreach ($project->typeproject as $typeproject)
                                    <p><a href="" class="transition-all duration-[0.3s] ease-in-out py-[5px] flex font-montserrat text-[14px] text-[#495461] leading-[26px] tracking-[0.03rem] hover:pl-[5px] hover:text-[#111a24]"> {{$typeproject->name}} </a></p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="bix-recent-post p-[24px] border-b-[1px] border-solid border-[#eae8ef] max-[575px]:p-[15px]">
                                <div class="bix-recent-card rounded-[20px]">
                                    <div class="recent-img">
                                        <img src="assets/img/project/3.jpg" alt="project-1" class="w-full rounded-[20px]">
                                    </div>
                                    <div class="recent-contact pt-[15px]">
                                        <span class="text-[14px] font-normal text-[#777] font-montserrat leading-[26px] tracking-[0.02rem]">Jean Stephane Yapo</span>
                                        <h4 class="mb-[8px] text-[15px]"><a href="single-project.html" class="text-[15px] font-semibold leading-[20px] text-[#111a24] font-montserrat tracking-[0.03rem]">{{$project->title}}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="bix-latest-gallery p-[24px] max-[575px]:p-[15px]">
                                <div class="sub-title mb-[12px]">
                                    <h4 class="text-[20px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat max-[575px]:text-[18px]">Latest Gallery</h4>
                                </div>
                                <div class="bix-gallery-card">
                                    @foreach ($project->images as $image)
                                    <a href="">
                                        <img src="{{$image->image_url}}" alt="1" class="w-full h-full rounded-tl-[20px]">
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="min-[1200px]:w-[75%] min-[992px]:w-[66.66%] w-full px-[12px] mb-[24px]">
                        <div class="bix-single-projects-contact">
                            <div class="flex flex-wrap mx-[-12px]">
                                <div class="min-[1200px]:w-[41.66%] w-full px-[12px] mb-[24px]">
                                    <div class="inner-projects-img mb-[24px] sticky top-[90px] max-[1199px]:m-[0]">
                                        <a href="">
                                            <img src="{{$project->cover}}" alt="project-2" class="w-full rounded-[20px]">
                                        </a>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                                    <div class="inner-projects-contact">
                                        <div class="sub-title mb-[12px]">
                                            <h4 class="text-[24px] font-semibold leading-[32px] text-[#111a24] tracking-[0.03rem] font-montserrat max-[1199px]:text-[22px] max-[991px]:text-[20px] max-[767px]:text-[20px] max-[767px]:leading-[28px] max-[575px]:text-[18px]">{{$project->title}}</h4>
                                        </div>
                                        <p class="mb-[16px] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">{{$project->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bix-product-details mt-[24px] mb-[24px]">
                                <div class="flex flex-wrap mx-[-12px] mb-[-24px]">
                                    <div class="min-[1200px]:w-[25%] min-[768px]:w-[50%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                        <a href="{{$project->link}}">
                                            <div class="bix-product-details-card transition-all duration-[0.3s] ease-in-out p-[30px] bg-[#f7f5fb] border-[1px] border-solid border-[#eae8ef] rounded-[20px] text-center hover:border-[#1b1c20]">
                                                <h4 class="text-[18px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat">See</h4>
                                                <p class="text-[14px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.03rem]">The Project</p>
                                            </div>
                                        </a>
                                    </div>
                                    {{-- <div class="min-[1200px]:w-[25%] min-[768px]:w-[50%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                        <div class="bix-product-details-card transition-all duration-[0.3s] ease-in-out p-[30px] bg-[#f7f5fb] border-[1px] border-solid border-[#eae8ef] rounded-[20px] text-center hover:border-[#1b1c20]">
                                            <h4 class="text-[18px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat">Time</h4>
                                            <p class="text-[14px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.03rem]">2 Months</p>
                                        </div>
                                    </div>
                                    <div class="min-[1200px]:w-[25%] min-[768px]:w-[50%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                        <div class="bix-product-details-card transition-all duration-[0.3s] ease-in-out p-[30px] bg-[#f7f5fb] border-[1px] border-solid border-[#eae8ef] rounded-[20px] text-center hover:border-[#1b1c20]">
                                            <h4 class="text-[18px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat">Published</h4>
                                            <p class="text-[14px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.03rem]"> 6 Feb 2024</p>
                                        </div>
                                    </div>
                                    <div class="min-[1200px]:w-[25%] min-[768px]:w-[50%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                        <div class="bix-product-details-card transition-all duration-[0.3s] ease-in-out p-[30px] bg-[#f7f5fb] border-[1px] border-solid border-[#eae8ef] rounded-[20px] text-center hover:border-[#1b1c20]">
                                            <h4 class="text-[18px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat">Price</h4>
                                            <p class="text-[14px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.03rem]">$8</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

