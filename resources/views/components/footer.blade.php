    <!-- Footer -->
    <footer class="bg-[#f7f5fb] py-[10px]">
        <div class="flex flex-wrap justify-between items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bix-footer-contact flex justify-between max-[480px]:flex-col max-[480px]:justify-center max-[480px]:text-center">
                        <p class="font-montserrat text-[15px] font-medium text-[#777] leading-[30px] tracking-[0.03rem] m-[0] max-[480px]:mb-[8px]">&copy; <span id="copyright_year"></span> <a href="javascript:void(0)" class="font-semibold">Jean Stephane Yapo</a>, All Rights Reserved.</p>
                        <div class="logo-links flex justify-center">
                            <a href="https://www.linkedin.com/in/jean-st%C3%A9phane-yapo-137a11219/" class="h-[30px] w-[30px] mx-[5px] relative flex flex-wrap items-center justify-center border-[1px] border-solid border-[#111a24] rounded-[20px] hover:bg-[#111a24]">
                                <i class="ri-linkedin-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#111a24]"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Tab to top -->
    <a href="#Top" class="back-to-top result-placeholder hidden w-[38px] h-[38px] fixed right-[15px] bottom-[15px] z-[10] rounded-[20px] cursor-pointer bg-[#fff] text-[#f41a4a] border-[1px] border-solid border-[#f41a4a] text-center text-[22px] leading-[1.6]">
        <i class="ri-arrow-up-line text-[20px]"></i>
        <div class="back-to-top-wrap active-progress">
            <svg viewBox="-1 -1 102 102" class="w-[36px] h-[36px] fixed right-[16px] bottom-[16px]">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" class="fill-transparent stroke-[#f41a4a] stroke-[5px]"></path>
            </svg>
        </div>
    </a>

    <!-- Modal -->
    <div class="bix-modal-overlay w-full h-screen hidden fixed top-0 left-0 z-[50] bg-[#00000080] blur-[2px]"></div>
    <div class="bix-modal max-[575px]:w-full fixed top-[45%] max-[767px]:top-[50%] left-[50%] z-[51] max-[767px]:w-full hidden max-[767px]:max-h-full">
        <div class="bix-modal-dialog h-full my-[0%] transition-transform duration-[0.3s] ease-out mx-auto max-w-[500px] w-[500px] max-[575px]:max-w-full max-[575px]:w-full p-[0.5rem]">
            <div class="modal-content p-[20px] bg-[#fff] rounded-[30px] relative overflow-hidden">
                <div class="modal-body">
                    <div class="bix-contact-tabs">
                        <ul class="nav nav-tabs mb-[24px] inline-flex justify-center items-center bg-[#fff] border-[1px] border-solid border-[#111a24] rounded-[25px]" id="contact_tabs" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                            <li class="nav-item m-[10px]">
                                <a href="#freelancer" class="py-[5px] px-[15px] rounded-[15px] capitalize font-medium text-[16px] block">Freelancer</a>
                            </li>
                            <li class="nav-item m-[10px]">
                                <a href="#job" class="py-[5px] px-[15px] rounded-[15px] capitalize font-medium text-[16px] block">Job</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-contact-pane" id="freelancer">
                                <div class="w-full">
                                    <form id="contact-form">
                                        <div class="form-group mb-[12px]">
                                            <input type="text" name="Name" placeholder="Name" class="w-full h-[50px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[20px]">
                                        </div>
                                        <div class="form-group mb-[12px]">
                                            <input type="email" name="Email" placeholder="Email" class="w-full h-[50px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[20px]">
                                        </div>
                                        <div class="form-group mb-[12px]">
                                            <select class="form-select w-full h-[50px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[20px]" aria-label="Select Method">
                                                <option selected>Fixed Rate</option>
                                                <option value="1">Hourly Rate</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-[12px]">
                                            <input name="text" placeholder="Offer ex $1900" type="email" class="w-full h-[50px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[20px]">
                                        </div>
                                        <div class="form-group mb-[12px]">
                                            <textarea name="your-comment" placeholder="Offer Letter" class="w-full h-auto p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[20px]"></textarea>
                                        </div>
                                        <div class="bix-review-buttons">
                                            <button type="submit" class="bix-button transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] font-montserrat text-[14px] font-semibold leading-[1.2] capitalize bg-[#fff] text-[#111a24] border-[1px] border-solid border-[#111a24] rounded-[15px] hover:bg-[#f41a4a] hover:border-[#f41a4a] hover:text-[#fff]" value="Submit">Submit</button>
                                            <button type="button" class="bix-button bix-close-modal transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] font-montserrat text-[14px] font-semibold leading-[1.2] capitalize bg-[#fff] text-[#111a24] border-[1px] border-solid border-[#111a24] rounded-[15px] hover:bg-[#f41a4a] hover:border-[#f41a4a] hover:text-[#fff]">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-contact-pane" id="job">
                                <div class="w-full">
                                    <form>
                                        <div class="form-group mb-[12px]">
                                            <input type="text" name="Name" placeholder="Name" class="w-full h-[50px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[20px]">
                                        </div>
                                        <div class="form-group mb-[12px]">
                                            <input type="email" name="Email" placeholder="Email" class="w-full h-[50px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[20px]">
                                        </div>
                                        <div class="form-group mb-[12px]">
                                            <select class="form-select w-full h-[50px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[20px]" aria-label="Select Method">
                                                <option selected="">Virtual Job</option>
                                                <option value="1">Office Job</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-[12px]">
                                            <input name="text" placeholder="Offer Salary ex $1500/Mo" type="email" class="w-full h-[50px] p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[20px]">
                                        </div>
                                        <div class="form-group mb-[12px]">
                                            <textarea name="your-comment" placeholder="Offer Letter" class="w-full h-auto p-[15px] border-[1px] border-solid border-[#eae8ef] outline-[0] rounded-[20px]"></textarea>
                                        </div>
                                        <div class="bix-review-buttons">
                                            <button type="submit" class="bix-button transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] font-montserrat text-[14px] font-semibold leading-[1.2] capitalize bg-[#fff] text-[#111a24] border-[1px] border-solid border-[#111a24] rounded-[15px] hover:bg-[#f41a4a] hover:border-[#f41a4a] hover:text-[#fff]" value="Submit">Submit</button>
                                            <button type="button" class="bix-button bix-close-modal transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] font-montserrat text-[14px] font-semibold leading-[1.2] capitalize bg-[#fff] text-[#111a24] border-[1px] border-solid border-[#111a24] rounded-[15px] hover:bg-[#f41a4a] hover:border-[#f41a4a] hover:text-[#fff]">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature tools -->
    <div class="bix-tools-sidebar-overlay w-full h-screen hidden fixed top-0 left-0 z-[41] bg-[#00000080] blur-[2px]"></div>
    <div class="bix-tools-sidebar w-[300px] h-screen fixed right-[0] top-[0] bg-[#fff] z-[42] transition-all duration-[0.3s] ease translate-x-[300px]">
        <a href="javascript:void(0)" class="bix-tools-sidebar-toggle in-out absolute top-[45%] right-[302px] w-[40px] h-[40px] bg-[#1d253199] transition-all ease-in duration-[0.3s] flex items-center justify-center text-[25px] z-[-1] rounded-[5px]">
            <i class="ri-settings-3-line text-[#fff]"></i>
        </a>
        <div class="bix-bar-title mb-[15px] p-[15px] flex flex-row justify-between items-center border-b-[1px] border-solid border-[#eae8ef]">
            <h6 class="m-[0] font-montserrat text-[17px] font-bold text-[#111a24] tracking-[0.03rem] leading-[1.2]">Tools</h6>
            <a href="javascript:void(0)" class="close-tools text-[#ff0000] text-[17px]"><i class="ri-close-line"></i></a>
        </div>
        <div class="bix-tools-detail h-[calc(100vh-72px)] pb-[15px] px-[15px] overflow-auto">
            <div class="bix-tools-block">
                <h3 class="font-montserrat my-[15px] text-[14px] font-medium text-[#111a24] tracking-[0.03rem] leading-[1.2]">Select Color</h3>
                <ul class="bix-color m-[0] p-[0]">
                    <li class="color-primary inline-block h-[35px] w-[35px] m-[6px] rounded-[5px] cursor-pointer align-middle relative bg-[#f41a4a] active-variant"></li>
                    <li class="color-1 inline-block h-[35px] w-[35px] m-[6px] rounded-[5px] cursor-pointer align-middle relative bg-[#7b18d5]"></li>
                    <li class="color-2 inline-block h-[35px] w-[35px] m-[6px] rounded-[5px] cursor-pointer align-middle relative bg-[#5f6af5]"></li>
                    <li class="color-3 inline-block h-[35px] w-[35px] m-[6px] rounded-[5px] cursor-pointer align-middle relative bg-[#f5885f]"></li>
                    <li class="color-4 inline-block h-[35px] w-[35px] m-[6px] rounded-[5px] cursor-pointer align-middle relative bg-[#32dbe2]"></li>
                    <li class="color-5 inline-block h-[35px] w-[35px] m-[6px] rounded-[5px] cursor-pointer align-middle relative bg-[#3f51b5]"></li>
                    <li class="color-6 inline-block h-[35px] w-[35px] m-[6px] rounded-[5px] cursor-pointer align-middle relative bg-[#f44336]"></li>
                    <li class="color-7 inline-block h-[35px] w-[35px] m-[6px] rounded-[5px] cursor-pointer align-middle relative bg-[#ed578a]"></li>
                    <li class="color-8 inline-block h-[35px] w-[35px] m-[6px] rounded-[5px] cursor-pointer align-middle relative bg-[#607d8b]"></li>
                    <li class="color-9 inline-block h-[35px] w-[35px] m-[6px] rounded-[5px] cursor-pointer align-middle relative bg-[#5caf90]"></li>
                </ul>
            </div>
            <div class="bix-tools-block">
                <h3 class="font-montserrat my-[15px] text-[14px] font-medium text-[#111a24] tracking-[0.03rem] leading-[1.2]">Modes</h3>
                <div class="bix-tools-rtl m-[0] p-[0] flex flex-wrap flex-row justify-between">
                    <div class="mode-primary bix-tools-item mode w-[125px] mb-[10px] text-center active-mode ltr" data-bix-mode-tool="ltr">
                        <img src="assets/img/tools/ltr.png" alt="ltr" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eae8ef] hover:border-[#f41a4a]">
                        <p class="m-[0] capitalize font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">LTR</p>
                    </div>
                    <div class="mode-primary bix-tools-item mode w-[125px] mb-[10px] text-center rtl" data-bix-mode-tool="rtl">
                        <img src="assets/img/tools/rtl.png" alt="rtl" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eae8ef] hover:border-[#f41a4a]">
                        <p class="m-[0] capitalize font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">RTL</p>
                    </div>
                </div>
            </div>
            <div class="bix-tools-block">
                <h3 class="font-montserrat my-[15px] text-[14px] font-medium text-[#111a24] tracking-[0.03rem] leading-[1.2]">Dark Modes</h3>
                <div class="bix-tools-dark m-[0] p-[0] flex flex-wrap flex-row justify-between">
                    <div class="mode-primary bix-tools-item mode w-[125px] mb-[10px] text-center active-dark-mode light" data-bix-mode-tool="light">
                        <img src="assets/img/tools/light.png" alt="light" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eae8ef] hover:border-[#f41a4a]">
                        <p class="m-[0] capitalize font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">Light</p>
                    </div>
                    <div class="bix-tools-item w-[125px] mb-[10px] text-center mode dark" data-bix-mode-tool="dark">
                        <img src="assets/img/tools/dark.png" alt="dark" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eae8ef] hover:border-[#f41a4a]">
                        <p class="m-[0] capitalize font-montserrat text-[14px] text-[#495461] font-normal leading-[26px] tracking-[0.03rem]">Dark</p>
                    </div>
                </div>
            </div>
        </div>
    </div>