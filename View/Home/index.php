<?php require '../Layouts/header.php'; ?>
<body>
    <!--Navbar to-->
    <header>
        <nav class="fixed top-0 z-50 w-full flex items-center justify-between px-8 lg:px-40 py-4 shadow-md bg-white" data-aos="fade-down" data-aos-duration="900">
            <h1 class="text-2xl font-bold text-sky-400" data-aos="fade-down" data-aos-duration="900" data-aos-delay="200">FixMart</h1>
            <div class="flex items-center gap-8 lg:gap-12">
                <a href="index.php" class="nav-link text-black hover:text-sky-400 transition duration-300 ease-in-out px-2" data-aos="fade-down" data-aos-duration="900" data-aos-delay="200">Home</a>
                <a href="#about" class="nav-link text-black hover:text-sky-400 transition duration-300 ease-in-out px-2" data-aos="fade-down" data-aos-duration="900" data-aos-delay="400" >About Us</a>
                <a href="#products" class="nav-link text-black hover:text-sky-400 transition duration-300 ease-in-out px-2" data-aos="fade-down" data-aos-duration="900" data-aos-delay="600">Products</a>
                <a href="#contact" class="nav-link text-black hover:text-sky-400 transition duration-300 ease-in-out px-2" data-aos="fade-down" data-aos-duration="900" data-aos-delay="900">Contact</a>
                <div class="flex items-center gap-4">
                <a href="../Auth/login.php" class="bg-sky-400  text-white px-10 py-3 rounded-md font-semibold hover:bg-sky-500 transition duration-300 ease-in-out" data-aos="fade-down" data-aos-duration="900" data-aos-delay="1100">Login</a>
            </div>
        </nav>
    </header>
    <main>
        <section id="hero-section" class="pt-20 pb-20 bg-white">
            <div class="relative w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-start h-auto lg:h-[80vh] px-8 lg:px-40 py-16 gap-8">
                    <div class="flex flex-col mt-12">
                        <h1 class="text-7xl font-bold text-black leading-tight" data-aos="fade-right" data-aos-duration="900" data-aos-delay="600">Upgrade Your Home with <span class="text-sky-400">Ease</span></h1>
                        <p class="mt-7 text-xl lg:text-xl text-gray-600" data-aos="fade-right" data-aos-duration="900" data-aos-delay="900">An easy-to-use online platform where users can browse and purchase home appliances, track orders, and conveniently request repair services in one integrated system.</p>
                        <a href="#products" class="bg-sky-400 text-white w-48 py-4 px-5 rounded-lg font-semibold hover:bg-sky-500 transition duration-300 ease-in-out text-center mt-10" data-aos="fade-right" data-aos-duration="900" data-aos-delay="1200">
                            Shop Now!
                        </a>
                        <div class="flex gap-3 mt-7">
                            <button type="button" class="flex items-center justify-center w-48 text-white bg-black h-14 rounded-lg" data-aos="fade-right" data-aos-duration="900" data-aos-delay="1300">
                                <div class="mr-3">
                                    <svg viewBox="0 0 384 512" width="30">
                                        <path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs">Download on the</div>
                                    <div class="-mt-1 font-sans text-xl font-semibold">App Store</div>
                                </div>
                            </button>
                            <button type="button" class="flex items-center justify-center w-48 text-white bg-black rounded-lg h-14" data-aos="fade-right" data-aos-duration="900" data-aos-delay="1500">
                                <div class="mr-3">
                                    <svg viewBox="30 336.7 120.9 129.2" width="30">
                                        <path fill="#FFD400" d="M119.2,421.2c15.3-8.4,27-14.8,28-15.3c3.2-1.7,6.5-6.2,0-9.7  c-2.1-1.1-13.4-7.3-28-15.3l-20.1,20.2L119.2,421.2z">
                                        </path>
                                        <path fill="#FF3333" d="M99.1,401.1l-64.2,64.7c1.5,0.2,3.2-0.2,5.2-1.3  c4.2-2.3,48.8-26.7,79.1-43.3L99.1,401.1L99.1,401.1z">
                                        </path>
                                        <path fill="#48FF48" d="M99.1,401.1l20.1-20.2c0,0-74.6-40.7-79.1-43.1  c-1.7-1-3.6-1.3-5.3-1L99.1,401.1z">
                                        </path>
                                        <path fill="#3BCCFF" d="M99.1,401.1l-64.3-64.3c-2.6,0.6-4.8,2.9-4.8,7.6  c0,7.5,0,107.5,0,113.8c0,4.3,1.7,7.4,4.9,7.7L99.1,401.1z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs">GET IT ON</div>
                                    <div class="-mt-1 font-sans text-xl font-semibold">Google Play</div>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="/Capstone Project/Public/pictures/iphone 15 copy.png" alt="" class="h-auto" data-aos="fade-left" data-aos-duration="900" data-aos-delay="1600">
                    </div>
                </div>
            </div>
        </section>

        <section class="centered-section py-20" id="why-us">
            <div class="px-8 lg:px-40">
                <div class="" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">
                    <p class="text-sky-400 font-semibold text-lg text-center mb-4">- OUR SERVICES</p>
                    <h1 class="font-bold text-5xl text-center">Why Choose Our Platform</h1>
                </div>
                <p class="text-lg text-gray-700 my-8 text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="900" data-aos-delay="600">
                We provide a simple, reliable, and all-in-one solution for purchasing home 
                appliances and requesting professional repair services.
                </p>

                <div class="flex gap-8 mt-12">
                <div class="bg-neutral-primary-soft block flex-1 p-10 border border-default rounded-base shadow-xs hover:shadow-lg hover:scale-105 transition duration-300 ease-in-out cursor-pointer" data-aos="fade-up" data-aos-duration="900" data-aos-delay="900">
                    <img src="/Capstone Project/Public/pictures/arrow_selector_tool_24dp_3B82F6_FILL0_wght400_GRAD0_opsz24.svg" alt="" class="w-12 h-12 mb-3 text-blue-600">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading">Easy & Convenient</h5>
                    </a>
                    <p class="mb-3 text-body text-gray-700">Browse appliances, place orders, and request repair services through a simple and user-friendly platform.</p>
                </div>
                <div class="bg-neutral-primary-soft block flex-1 p-10 border border-default rounded-base shadow-xs hover:shadow-lg hover:scale-105 transition duration-300 ease-in-out cursor-pointer" data-aos="fade-up" data-aos-duration="900" data-aos-delay="1200">
                    <img src="/Capstone Project/Public/pictures/shield_lock_24dp_22C55E_FILL0_wght400_GRAD0_opsz24.svg" alt="" class="w-12 h-12 mb-3 text-green-600">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading">Trusted Services</h5>
                    </a>
                    <p class="mb-3 text-body text-gray-700">We provide quality appliances and reliable repair services to ensure customer satisfaction and peace of mind.</p>
                </div>
                <div class="bg-neutral-primary-soft block flex-1 p-10 border border-default rounded-base shadow-xs hover:shadow-lg hover:scale-105 transition duration-300 ease-in-out cursor-pointer" data-aos="fade-up" data-aos-duration="900" data-aos-delay="1400">
                    <img src="/Capstone Project/Public/pictures/stacks_24dp_A855F7_FILL0_wght400_GRAD0_opsz24.svg" alt="" class="w-12 h-12 mb-3 text-purple-600">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading">All-in-One Solution</h5>
                    </a>
                    <p class="mb-3 text-body text-gray-700">Manage purchases, track orders, and schedule appliance repairs in one integrated system.</p>
                </div>
            </div>
            </div>
        </section>

        <section class="centered-section py-20 bg-gray-50" id="about">
            <div class="px-8 lg:px-40">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-16">
                    <div class="order-2 lg:order-1 flex items-center justify-center">
                        <img src="/Capstone Project/Public/pictures/About us pic.png" data-aos="fade-right" data-aos-duration="900" data-aos-delay="200" alt="About ClickCart" class="w-full h-auto rounded-lg">
                    </div>
                    <div class="order-1 lg:order-2 space-y-6">
                        <div class="" data-aos="fade-left" data-aos-duration="900" data-aos-delay="600">
                            <p class="text-sky-400 font-semibold text-lg">- ABOUT US</p>
                            <h2 class="text-5xl font-bold text-black mb-8 leading-snug">Your Trusted Platform for Appliances and Repair Service</h2>
                        </div>
                        <p class="text-lg text-gray-700 leading-relaxed" data-aos="fade-left" data-aos-duration="900" data-aos-delay="900"> 
                            FixMart is a modern e-commerce platform designed to make buying and maintaining 
                            home appliances simple, reliable, and convenient. Our system brings together appliance 
                            sales and repair services in one easy-to-use platform, helping customers find quality 
                            products and dependable technicians in just a few clicks.
                        </p>
                        <ul class="feature-list space-y-4 mt-7" data-aos="fade-left" data-aos-duration="900" data-aos-delay="1200">
                            <li class="flex items-start gap-3 text-lg"><span class="flex-shrink-0 mt-1"><img src="/Capstone Project/Public/pictures/check_circle_24dp_83A9E6_FILL0_wght400_GRAD0_opsz24.svg" alt="" class="w-6 h-6"></span><span>Online selling of various home appliances</span></li>
                            <li class="flex items-start gap-3 text-lg"><span class="flex-shrink-0 mt-1 text-lg"><img src="/Capstone Project/Public/pictures/check_circle_24dp_83A9E6_FILL0_wght400_GRAD0_opsz24.svg" alt="" class="w-6 h-6"></span><span>Easy browsing and searching of products</span></li>
                            <li class="flex items-start gap-3 text-lg"><span class="flex-shrink-0 mt-1"><img src="/Capstone Project/Public/pictures/check_circle_24dp_83A9E6_FILL0_wght400_GRAD0_opsz24.svg" alt="" class="w-6 h-6"></span><span>Appliance repair and maintenance services</span></li>
                        </ul>
                        <a href="" class="inline-flex items-center justify-center gap-2 bg-sky-400 text-white w-48 py-4 px-8 rounded-lg font-semibold hover:bg-sky-500 transition duration-300 ease-in-out mt-12"  data-aos="fade-left" data-aos-duration="900" data-aos-delay="1500">
                            Explore Now <img src="/Capstone Project/Public/pictures/arrow_right_alt_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.svg" alt="" class="w-5 h-5">
                        </a>
                   </div>
                </div>
            </div>
        </section>
        
        <section class="centered-section py-20" id="testimonials">
            <div class="px-8 lg:px-40">
                <div class="" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">
                    <p class="text-sky-400 font-semibold text-lg text-center mb-4">- TESTIMONIALS</p>
                    <h1 class="font-bold text-5xl text-center">What Our Customers Say</h1>
                </div>
                <p class="text-lg text-gray-700 my-8 text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="900" data-aos-delay="600">
                    Hear from our satisfied customers about their experience with FixMart
                </p>
                    <div class="carousel-container overflow-hidden">
                        <div class="carousel-track flex gap-6 transition-transform duration-500 ease-in-out">
                            <div class="carousel-item flex-shrink-0" style="width: calc((100% - 48px) / 3);" data-aos="fade-up" data-aos-duration="900" data-aos-delay="900">
                                <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm text-center">
                                    <blockquote class="mb-8">
                                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Very easy this was to integrate</h3>
                                        <p class="text-gray-600 text-lg">If you care for your time, I hands down would go with this."</p>
                                    </blockquote>
                                    <figcaption class="flex items-center justify-center gap-3">
                                        <img class="rounded-full w-12 h-12" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                                        <div class="text-left">
                                            <div class="text-base font-semibold text-gray-900">Bonnie Green</div>
                                            <div class="text-sm text-gray-600">Developer at Open AI</div>
                                        </div>
                                    </figcaption>
                                </div>
                            </div>

                            <div class="carousel-item flex-shrink-0" style="width: calc((100% - 48px) / 3);" data-aos="fade-up" data-aos-duration="900" data-aos-delay="1200">
                                <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm text-center">
                                    <blockquote class="mb-8">
                                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Solid foundation for any project</h3>
                                        <p class="text-gray-600 text-lg">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
                                    </blockquote>
                                    <figcaption class="flex items-center justify-center gap-3">
                                        <img class="rounded-full w-12 h-12" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                                        <div class="text-left">
                                            <div class="text-base font-semibold text-gray-900">Roberta Casas</div>
                                            <div class="text-sm text-gray-600">Lead designer at Dropbox</div>
                                        </div>
                                    </figcaption>
                                </div>
                            </div>

                            <div class="carousel-item flex-shrink-0" style="width: calc((100% - 48px) / 3);" data-aos="fade-up" data-aos-duration="900" data-aos-delay="1400">
                                <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm text-center">
                                    <blockquote class="mb-8">
                                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Mindblowing workflow</h3>
                                        <p class="text-gray-600 text-lg">Aesthetically, the well designed components are beautiful and will undoubtedly level up your app."</p>
                                    </blockquote>
                                    <figcaption class="flex items-center justify-center gap-3">
                                        <img class="rounded-full w-12 h-12" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                                        <div class="text-left">
                                            <div class="text-base font-semibold text-gray-900">Jese Leos</div>
                                            <div class="text-sm text-gray-600">Software Engineer at Facebook</div>
                                        </div>
                                    </figcaption>
                                </div>
                            </div>

                            <div class="carousel-item flex-shrink-0" style="width: calc((100% - 48px) / 3);" data-aos="fade-up" data-aos-duration="900" data-aos-delay="900">
                                <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm text-center">
                                    <blockquote class="mb-8">
                                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Efficient Collaborating</h3>
                                        <p class="text-gray-600 text-lg">You have many examples that can be used to create a fast prototype for your team."</p>
                                    </blockquote>
                                    <figcaption class="flex items-center justify-center gap-3">
                                        <img class="rounded-full w-12 h-12" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
                                        <div class="text-left">
                                            <div class="text-base font-semibold text-gray-900">Joseph McFall</div>
                                            <div class="text-sm text-gray-600">CTO at Google</div>
                                        </div>
                                    </figcaption>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer sm:footer-horizontal bg-base-200 text-base-content p-10">
            <aside>
                <h6 class="text-2xl font-bold text-sky-400">FixMart</h6>
                <p>Your trusted online shopping destination.<br/>Providing quality products since 2020.</p>
            </aside>
            <nav>
                <h6 class="footer-title">Services</h6>
                <a class="link link-hover">Branding</a>
                <a class="link link-hover">Design</a>
                <a class="link link-hover">Marketing</a>
                <a class="link link-hover">Advertisement</a>
            </nav>
            <nav>
                <h6 class="footer-title">Company</h6>
                <a class="link link-hover">About us</a>
                <a class="link link-hover">Contact</a>
                <a class="link link-hover">Jobs</a>
                <a class="link link-hover">Press kit</a>
            </nav>
            <nav>
                <h6 class="footer-title">Legal</h6>
                <a class="link link-hover">Terms of use</a>
                <a class="link link-hover">Privacy policy</a>
                <a class="link link-hover">Cookie policy</a>
            </nav>
        </footer>
    <script>
        AOS.init();
    </script>
    <script src="/Capstone Project/Public/js/style.js"></script>
</body>
</html>

