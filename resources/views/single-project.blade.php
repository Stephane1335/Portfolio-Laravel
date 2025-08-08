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
                                        <a href="index.html" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px]">Home</a>
                                    </span>
                                    <span class="px-[2px]">
                                        <i class="ri-arrow-right-s-line text-[14px] text-[#fff]"></i>
                                    </span>
                                    <span class="disable px-[2px] opacity-[0.7]">
                                        <a href="javascript:void(0)" class="font-montserrat leading-[26px] tracking-[0.03rem] text-[15px] font-normal text-[#fff] max-[575px]:text-[14px] cursor-default">Single Project</a>
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
                                    <p><a href="single-project.html" class="transition-all duration-[0.3s] ease-in-out py-[5px] flex font-montserrat text-[14px] text-[#495461] leading-[26px] tracking-[0.03rem] hover:pl-[5px] hover:text-[#111a24]">eCommerce Template</a></p>
                                    <p><a href="single-project.html" class="transition-all duration-[0.3s] ease-in-out py-[5px] flex font-montserrat text-[14px] text-[#495461] leading-[26px] tracking-[0.03rem] hover:pl-[5px] hover:text-[#111a24]">Admin Template</a></p>
                                    <p><a href="single-project.html" class="transition-all duration-[0.3s] ease-in-out py-[5px] flex font-montserrat text-[14px] text-[#495461] leading-[26px] tracking-[0.03rem] hover:pl-[5px] hover:text-[#111a24]">Hotel & Tours Template</a></p>
                                    <p><a href="single-project.html" class="transition-all duration-[0.3s] ease-in-out py-[5px] flex font-montserrat text-[14px] text-[#495461] leading-[26px] tracking-[0.03rem] hover:pl-[5px] hover:text-[#111a24]">Real Estate Template</a></p>
                                    <p><a href="single-project.html" class="transition-all duration-[0.3s] ease-in-out py-[5px] flex font-montserrat text-[14px] text-[#495461] leading-[26px] tracking-[0.03rem] hover:pl-[5px] hover:text-[#111a24]">Consultancy & Agency</a></p>
                                    <p><a href="single-project.html" class="transition-all duration-[0.3s] ease-in-out py-[5px] flex font-montserrat text-[14px] text-[#495461] leading-[26px] tracking-[0.03rem] hover:pl-[5px] hover:text-[#111a24]">Agriculture & Farming</a></p>
                                </div>
                            </div>
                            <div class="bix-recent-post p-[24px] border-b-[1px] border-solid border-[#eae8ef] max-[575px]:p-[15px]">
                                <div class="bix-recent-card rounded-[20px]">
                                    <div class="recent-img">
                                        <img src="assets/img/project/3.jpg" alt="project-1" class="w-full rounded-[20px]">
                                    </div>
                                    <div class="recent-contact pt-[15px]">
                                        <span class="text-[14px] font-normal text-[#777] font-montserrat leading-[26px] tracking-[0.02rem]">Admin</span>
                                        <h4 class="mb-[8px] text-[15px]"><a href="single-project.html" class="text-[15px] font-semibold leading-[20px] text-[#111a24] font-montserrat tracking-[0.03rem]">Mini material - Admin Template</a></h4>
                                        <p class="text-[13px] leading-[20px] font-montserrat text-[#495461] font-normal tracking-[0.03rem]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, illum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bix-latest-gallery p-[24px] max-[575px]:p-[15px]">
                                <div class="sub-title mb-[12px]">
                                    <h4 class="text-[20px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat max-[575px]:text-[18px]">Latest Gallery</h4>
                                </div>
                                <div class="bix-gallery-card">
                                    <a href="single-project.html">
                                        <img src="assets/img/project/1.jpg" alt="1" class="w-full h-full rounded-tl-[20px]">
                                    </a>
                                    <a href="single-project.html">
                                        <img src="assets/img/project/2.jpg" alt="2" class="w-full h-full">
                                    </a>
                                    <a href="single-project.html">
                                        <img src="assets/img/project/3.jpg" alt="3" class="w-full h-full rounded-tr-[20px]">
                                    </a>
                                    <a href="single-project.html">
                                        <img src="assets/img/project/4.jpg" alt="1" class="w-full h-full rounded-bl-[20px]">
                                    </a>
                                    <a href="single-project.html">
                                        <img src="assets/img/project/5.jpg" alt="2" class="w-full h-full">
                                    </a>
                                    <a href="single-project.html">
                                        <img src="assets/img/project/6.jpg" alt="3" class="w-full h-full rounded-br-[20px]">
                                    </a>
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
                                            <img src="assets/img/project/2.jpg" alt="project-2" class="w-full rounded-[20px]">
                                        </a>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                                    <div class="inner-projects-contact">
                                        <div class="sub-title mb-[12px]">
                                            <h4 class="text-[24px] font-semibold leading-[32px] text-[#111a24] tracking-[0.03rem] font-montserrat max-[1199px]:text-[22px] max-[991px]:text-[20px] max-[767px]:text-[20px] max-[767px]:leading-[28px] max-[575px]:text-[18px]">Wildstone - Multipurpose eCommerce + Admin HTML Template</h4>
                                        </div>
                                        <p class="mb-[16px] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum accusantium non,
                                            dolores, laudantium molestiae animi ad nesciunt perspiciatis explicabo earum
                                            corrupti numquam totam, beatae cupiditate ratione doloremque impedit minima
                                            facere!</p>
                                        <div class="inner-contact">
                                            <h4 class="mb-[8px] text-[18px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat max-[767px]:text-[18px] max-[575px]:text-[16px]">Why Choose Wildstone</h4>
                                            <ul class="list-disc pl-[2rem] mb-[0]">
                                                <li class="text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">Multipurpose Marketplace</li>
                                                <li class="text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">Buy One Time & Get Free Updates Lifetime.</li>
                                                <li class="text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">100% Responsive</li>
                                                <li class="text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">Free Admin Dashboard (26 Pages)</li>
                                                <li class="text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">Regular Update ( Coming soon RTL)</li>
                                                <li class="text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">Latest: Bootstrap 5</li>
                                                <li class="text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">Top notch support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="m-[0] font-montserrat text-[14px] text-[#495461] leading-[26px] tracking-[0.03rem] font-normal">Wildstone is best ecommerce html template. Template has full of feature and tools for your
                                online market products. Well structure coding and attractive UI/UX experience with easy to
                                customize and 24/7 support. Wildstone use multipurpose selling products like beverages,
                                vegetables, fruits, ice creams, herbs, juice, cold drinks, sausages, soft drinks, cookies.
                            </p>
                            <div class="bix-product-details mt-[24px] mb-[24px]">
                                <div class="flex flex-wrap mx-[-12px] mb-[-24px]">
                                    <div class="min-[1200px]:w-[25%] min-[768px]:w-[50%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                        <div class="bix-product-details-card transition-all duration-[0.3s] ease-in-out p-[30px] bg-[#f7f5fb] border-[1px] border-solid border-[#eae8ef] rounded-[20px] text-center hover:border-[#1b1c20]">
                                            <h4 class="text-[18px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat">Sales</h4>
                                            <p class="text-[14px] font-medium text-[#777] font-montserrat leading-[26px] tracking-[0.03rem]">2500+</p>
                                        </div>
                                    </div>
                                    <div class="min-[1200px]:w-[25%] min-[768px]:w-[50%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
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
                                    </div>
                                </div>
                            </div>
                            <div class="bix-products-tabs mt-[50px]">
                                <ul class="nav nav-tabs inline-flex flex-wrap justify-center items-center bg-[#fff] border-[1px] border-solid border-[#111a24] rounded-[25px] mb-[24px]" id="bix_activity" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                    <li class="nav-item m-[10px]">
                                        <a href="#details" class="py-[5px] px-[15px] rounded-[15px] capitalize font-medium text-[16px] block">Details</a>
                                    </li>
                                    <li class="nav-item m-[10px]">
                                        <a href="#reviews" class="py-[5px] px-[15px] rounded-[15px] capitalize font-medium text-[16px] block">Reviews</a>
                                    </li>
                                    <li class="nav-item m-[10px]">
                                        <a href="#comment" class="py-[5px] px-[15px] rounded-[15px] capitalize font-medium text-[16px] block">Comment</a>
                                    </li>
                                </ul>
                                <div class="tab-content border-[1px] border-solid border-[#eae8ef] rounded-[20px] p-[20px] max-[575px]:p-[15px]" id="myTabContent" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700">
                                    <div class="tab-activity-pane" id="details">
                                        <div class="products-tabs-details">
                                            <p class="mb-[16px] font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">Wildstone is best eCommerce html template. Template has full of feature and
                                                tools for your online market products. Well structure coding and attractive
                                                UI/UX experience with easy to customize and 24/7 support. Wildstone use
                                                multipurpose selling products like beverages, vegetables, fruits, ice
                                                creams, herbs, juice, cold drinks, sausages, soft drinks, cookies.</p>
                                            <div class="inner-contact">
                                                <h4 class="mb-[8px] text-[18px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2] font-montserrat">Features</h4>
                                                <ul class="list-disc pl-[2rem] mb-[0]">
                                                    <li class="py-[5px] text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">HTML 5 | CSS 3 | Bootstrap 5</li>
                                                    <li class="py-[5px] text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">W3c validate markup</li>
                                                    <li class="py-[5px] text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">Unique | Clean & Modern Design</li>
                                                    <li class="py-[5px] text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">Fully Responsive (Tested on Multiple Devices)</li>
                                                    <li class="py-[5px] text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">All Browsers Compatibility</li>
                                                    <li class="py-[5px] text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">Well Documentation</li>
                                                    <li class="py-[5px] text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">Easy To Customize</li>
                                                    <li class="py-[5px] text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">Friendly Customer support & Free Updates</li>
                                                    <li class="py-[5px] text-[14px] font-medium font-montserrat text-[#495461] leading-[26px] tracking-[0.03rem]">And Much More...</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-activity-pane" id="reviews">
                                        <div class="bix-client">
                                            <div class="inner-details mb-[24px] p-[15px] flex border-[1px] border-solid border-[#eae8ef] rounded-[20px] max-[767px]:flex-col">
                                                <div class="side-image">
                                                    <img src="assets/img/testimonials/1.jpg" alt="1" class="w-[100px] max-w-[100px] rounded-l-[20px] max-[767px]:rounded-bl-[0] max-[767px]:max-w-full max-[767px]:w-full max-[767px]:rounded-tr-[20px]">
                                                </div>
                                                <div class="client-details flex flex-col justify-center pl-[15px] max-[767px]:pl-[0] max-[767px]:pt-[15px]">
                                                    <h5 class="font-montserrat mb-[10px] text-[17px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2]">Isabella Bianchi</h5>
                                                    <p class="overflow-hidden text-ellipsis leading-[22px] font-montserrat text-[14px] text-[#495461] font-normal tracking-[0.03rem]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit aut
                                                        voluptates omnis laudantium deleniti repellat facere, iste
                                                        repudiandae consequatur possimus, quae ducimus provident.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="inner-details mb-[24px] p-[15px] flex border-[1px] border-solid border-[#eae8ef] rounded-[20px] max-[767px]:flex-col">
                                                <div class="side-image">
                                                    <img src="assets/img/testimonials/2.jpg" alt="2" class="w-[100px] max-w-[100px] rounded-l-[20px] max-[767px]:rounded-bl-[0] max-[767px]:max-w-full max-[767px]:w-full max-[767px]:rounded-tr-[20px]">
                                                </div>
                                                <div class="client-details flex flex-col justify-center pl-[15px] max-[767px]:pl-[0] max-[767px]:pt-[15px]">
                                                    <h5 class="font-montserrat mb-[10px] text-[17px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2]">Saddika Alard</h5>
                                                    <p class="overflow-hidden text-ellipsis leading-[22px] font-montserrat text-[14px] text-[#495461] font-normal tracking-[0.03rem]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit aut
                                                        voluptates omnis laudantium deleniti repellat facere, iste
                                                        repudiandae consequatur possimus, quae ducimus provident.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bix-reviews-details">
                                            <div class="main-title mb-[16px]">
                                                <h4 class="font-montserrat text-[18px] font-bold text-[#111a24] mb-[24px] tracking-[0.03rem] leading-[1.2]">Add a Reviews</h4>
                                            </div>
                                            <div class="bix-input mb-[12px]">
                                                <input name="your-name" placeholder="Name" type="text" class="w-full h-[50px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[30px]">
                                            </div>
                                            <div class="bix-input mb-[12px]">
                                                <input name="your-email" placeholder="Email*" type="email" class="w-full h-[50px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[30px]">
                                            </div>
                                            <div class="bix-input mb-[12px]">
                                                <textarea name="your-comment" placeholder="Enter Your Comment" class="w-full h-[150px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[30px]"></textarea>
                                            </div>
                                            <div class="bix-review-buttons">
                                                <button type="submit" class="bix-button transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] font-montserrat text-[14px] font-semibold leading-[1.2] capitalize bg-[#fff] text-[#111a24] border-[1px] border-solid border-[#111a24] rounded-[15px] hover:bg-[#f41a4a] hover:border-[#f41a4a] hover:text-[#fff]" value="Submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-activity-pane" id="comment">
                                        <div class="bix-client">
                                            <div class="inner-details mb-[24px] p-[15px] flex border-[1px] border-solid border-[#eae8ef] rounded-[20px] max-[767px]:flex-col">
                                                <div class="side-image">
                                                    <img src="assets/img/testimonials/1.jpg" alt="1" class="w-[100px] max-w-[100px] rounded-l-[20px] max-[767px]:rounded-bl-[0] max-[767px]:max-w-full max-[767px]:w-full max-[767px]:rounded-tr-[20px]">
                                                </div>
                                                <div class="client-details flex flex-col justify-center pl-[15px] max-[767px]:pl-[0] max-[767px]:pt-[15px]">
                                                    <h5 class="font-montserrat mb-[10px] text-[17px] font-semibold text-[#111a24] tracking-[0.03rem] leading-[1.2]">Isabella Bianchi</h5>
                                                    <p class="overflow-hidden text-ellipsis leading-[22px] font-montserrat text-[14px] text-[#495461] font-normal tracking-[0.03rem]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit aut
                                                        voluptates omnis laudantium deleniti repellat facere, iste
                                                        repudiandae consequatur possimus, quae ducimus provident.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bix-reviews-details">
                                            <div class="bix-input mb-[12px]">
                                                <textarea name="your-comment" placeholder="Enter Your Comment" class="w-full h-[150px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[30px]"></textarea>
                                            </div>
                                            <div class="bix-review-buttons">
                                                <button type="submit" class="bix-button transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] font-montserrat text-[14px] font-semibold leading-[1.2] capitalize bg-[#fff] text-[#111a24] border-[1px] border-solid border-[#111a24] rounded-[15px] hover:bg-[#f41a4a] hover:border-[#f41a4a] hover:text-[#fff]" value="Submit">Submit</button>
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
@endsection

