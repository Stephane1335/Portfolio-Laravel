        <!-- Loader -->
        <div class="bix-loader">
            <span class="loader"></span>
            <img src="assets/img/logo/logo.png" alt="">
        </div>

        <!-- Header -->
        <header class="bix-static transition-all duration-[0.3s] ease-in-out py-[30px] fixed top-[0] right-[0] left-[0] z-[20]">
            <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full">
                    <div class="w-full px-[12px]">
                        <nav class="navbar navbar-expand-lg bix-navbar transition-all duration-[0.3s] ease-in-out p-[15px] bg-[#f8f6fc] border-[1px] border-solid border-[#111a24] rounded-[30px] relative z-[3] flex items-center justify-between max-[992px]:flex-nowrap">
                            <!-- Header Logo Start -->
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="assets/img/logo/logo.png" alt="logo" class="bix-logo w-[90px] px-[15px] flex">
                                <img src="assets/img/logo/logo-dark.png" alt="logo" class="dark-logo w-[90px] px-[15px] hidden">
                            </a>
                            <!-- Header Logo End -->
                            <button class="navbar-toggler min-[992px]:hidden w-[40px] h-[40px] flex items-center justify-center rounded-[50%] text-[#111a24] border-[1px] border-solid border-[#111a24] text-[1.25rem] bg-transparent" type="button" title="navbar-toggler">
                                <i class="ri-menu-2-line"></i>
                            </button>
                            <div class="bix-main-menu flex relative justify-end max-[991px]:hidden" id="navbarSupportedContent">
                                <ul class="navbar-nav m-[0] pl-[0] flex flex-wrap min-[992px]:flex-row">
                                    <li class="nav-item transition-all duration-[0.3s] ease-in-out ml-[30px]">
                                        <a class="nav-link transition-all duration-[0.3s] ease-in-out font-montserrat tracking-[0.03rem] p-[0] text-[15px] font-medium leading-[40px] capitalize text-[#1b1c20] flex items-center relative hover:text-[#f41a4a]" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item transition-all duration-[0.3s] ease-in-out ml-[30px]">
                                        <a class="nav-link transition-all duration-[0.3s] ease-in-out font-montserrat tracking-[0.03rem] p-[0] text-[15px] font-medium leading-[40px] capitalize text-[#1b1c20] flex items-center relative hover:text-[#f41a4a]" href="{{url('/about')}}">About</a>
                                    </li>
                                    <li class="nav-item transition-all duration-[0.3s] ease-in-out ml-[30px]">
                                        <a class="nav-link transition-all duration-[0.3s] ease-in-out font-montserrat tracking-[0.03rem] p-[0] text-[15px] font-medium leading-[40px] capitalize text-[#1b1c20] flex items-center relative hover:text-[#f41a4a]" href="{{url('/projects')}}">projects</a>
                                    </li>
                                    <li class="nav-item transition-all duration-[0.3s] ease-in-out ml-[30px]">
                                        <a class="nav-link transition-all duration-[0.3s] ease-in-out font-montserrat tracking-[0.03rem] p-[0] text-[15px] font-medium leading-[40px] capitalize text-[#1b1c20] flex items-center relative hover:text-[#f41a4a]" href="{{url('/services')}}">Services</a>
                                    </li>
                                    <li class="nav-item transition-all duration-[0.3s] ease-in-out ml-[30px]">
                                        <a class="nav-link transition-all duration-[0.3s] ease-in-out font-montserrat tracking-[0.03rem] p-[0] text-[15px] font-medium leading-[40px] capitalize text-[#1b1c20] flex items-center relative hover:text-[#f41a4a]" href="{{url('/resume')}}">Resume</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- Mobile-menu -->
        <div class="bix-sidebar-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[42]"></div>
        <div id="in_mobile_menu" class="bix-side-cart bix-mobile-menu transition-all duration-[0.3s] ease-in-out w-[300px] h-full pt-[15px] px-[20px] pb-[20px] fixed top-[0] right-auto left-[0] bg-[#fff] translate-x-[-100%] flex flex-col z-[43] overflow-auto">
            <div class="bix-menu-title w-full pb-[20px] flex flex-wrap justify-between">
                <div class="menu-title flex items-center">
                    <h4 class="relative border-[0] font-montserrat text-[17px] font-semibold leading-[1] text-[#1b1c20] bg-transparent tracking-[0.03rem]">Menu</h4>
                </div>
                <button type="button" class="bix-close relative border-[0] text-[30px] leading-[1] text-[#ff0000] bg-transparent ">×</button>
            </div>
            <div class="bix-menu-inner">
                <div class="bix-menu-content">
                    <ul>
                        <li class="nav-item relative">
                            <a href="{{url('/')}}" class="nav-link mb-[12px] py-[8px] px-[16px] block capitalize text-[#777] border-[1px] border-solid border-[#eae8ef] rounded-[10px] font-montserrat leading-[26px] text-[14px] font-medium tracking-[0.03rem]">Home</a>
                        </li>
                        <li class="nav-item relative">
                            <a href="{{url('/about')}}" class="nav-link mb-[12px] py-[8px] px-[16px] block capitalize text-[#777] border-[1px] border-solid border-[#eae8ef] rounded-[10px] font-montserrat leading-[26px] text-[14px] font-medium tracking-[0.03rem]">About</a>
                        </li>
                        <li class="nav-item relative">
                            <a href="{{url('/projects')}}" class="nav-link mb-[12px] py-[8px] px-[16px] block capitalize text-[#777] border-[1px] border-solid border-[#eae8ef] rounded-[10px] font-montserrat leading-[26px] text-[14px] font-medium tracking-[0.03rem]">projects</a>
                        </li>
                        <li class="nav-item relative">
                            <a href="{{url('/services')}}" class="nav-link mb-[12px] py-[8px] px-[16px] block capitalize text-[#777] border-[1px] border-solid border-[#eae8ef] rounded-[10px] font-montserrat leading-[26px] text-[14px] font-medium tracking-[0.03rem]">Services</a>
                        </li>
                        <li class="nav-item relative">
                            <a href="{{url('/resume')}}" class="nav-link mb-[12px] py-[8px] px-[16px] block capitalize text-[#777] border-[1px] border-solid border-[#eae8ef] rounded-[10px] font-montserrat leading-[26px] text-[14px] font-medium tracking-[0.03rem]">Resume</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>