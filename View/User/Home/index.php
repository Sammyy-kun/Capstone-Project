<?php require '../../Layouts/header.php'; ?>
<body>
    <!--Navbar to-->
    <header>
        <nav class="fixed top-0 z-50 w-full flex items-center justify-between px-8 lg:px-40 py-4 shadow-md bg-white" data-aos="fade-down" data-aos-duration="900">
            <h1 class="text-2xl font-bold text-emerald-500" data-aos="fade-down" data-aos-duration="900" data-aos-delay="200">FixMart</h1>
            <div class="flex items-center gap-8 lg:gap-12">
                <a href="index.php" class="nav-link text-black hover:text-emerald-500 transition duration-300 ease-in-out px-2" data-aos="fade-down" data-aos-duration="900" data-aos-delay="200">Home</a>
                <a href="#about" class="nav-link text-black hover:text-emerald-500 transition duration-300 ease-in-out px-2" data-aos="fade-down" data-aos-duration="900" data-aos-delay="400" >About Us</a>
                <a href="#products" class="nav-link text-black hover:text-emerald-500 transition duration-300 ease-in-out px-2" data-aos="fade-down" data-aos-duration="900" data-aos-delay="600">Products</a>
                <a href="#contact" class="nav-link text-black hover:text-emerald-500 transition duration-300 ease-in-out px-2" data-aos="fade-down" data-aos-duration="900" data-aos-delay="900">Contact</a>
                <div class="flex items-center gap-4">
                <a href="../../Auth/login.php" class="bg-emerald-500  text-white px-10 py-3 rounded-md font-semibold hover:bg-emerald-600 transition duration-300 ease-in-out" data-aos="fade-down" data-aos-duration="900" data-aos-delay="1100">Login</a>
            </div>
        </nav>
    </header>
    <main id="app">
        <section id="hero-section" class="pt-20 pb-20 bg-white">
            <div class="relative w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-start h-auto lg:h-[80vh] px-8 lg:px-40 py-16 gap-8">
                    <div class="flex flex-col mt-12">
                        <h1 class="text-7xl font-bold text-black leading-tight" data-aos="fade-right" data-aos-duration="900" data-aos-delay="600">{{ hero.heading }}<span class="text-emerald-600">{{ hero.headingHighlight }}</span></h1>
                        <p class="mt-7 text-xl lg:text-xl text-gray-600" data-aos="fade-right" data-aos-duration="900" data-aos-delay="900">{{ hero.description }}</p>
                        <a :href="hero.ctaLink" class="bg-emerald-600 text-white w-48 py-4 px-5 rounded-lg font-semibold hover:bg-emerald-700 transition duration-300 ease-in-out text-center mt-10" data-aos="fade-right" data-aos-duration="900" data-aos-delay="1200">
                            {{ hero.ctaText }}
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
                        <img :src="hero.image" alt="" class="h-auto" data-aos="fade-left" data-aos-duration="900" data-aos-delay="1600">
                    </div>
                </div>
            </div>
        </section>

        <section class="centered-section min-h-screen flex items-center justify-center" id="why-us">
            <div class="px-8 lg:px-40 w-full">
                <div class="" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">
                    <p class="text-emerald-500 font-semibold text-lg text-center mb-4">{{  whyUs.title }}</p>
                    <h1 class="font-bold text-5xl text-center">{{ whyUs.heading }}</h1>
                </div>
                <p class="text-lg text-gray-700 my-8 text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="900" data-aos-delay="600"> {{ whyUs.subHeading }}</p>

                <div class="flex gap-8 mt-12">
                    <div v-for="(card, index) in whyUs.cards" :key="card.id" class="bg-neutral-primary-soft block flex-1 p-10 border border-default rounded-base shadow-xs" data-aos="fade-up" data-aos-duration="900" :data-aos-delay="900 + (index * 300)">
                        <img :src="card.icon" alt="" class="w-12 h-12 mb-3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading">{{ card.title }}</h5>
                        </a>
                        <p class="mb-3 text-body text-gray-700">{{ card.description }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="centered-section min-h-screen flex items-center justify-center" id="about">
            <div class="px-8 lg:px-40 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-16">
                    <div class="order-2 lg:order-1 flex items-center justify-center">
                        <img :src="about.image" data-aos="fade-right" data-aos-duration="900" data-aos-delay="200" alt="About ClickCart" class="w-full h-auto rounded-lg">
                    </div>
                    <div class="order-1 lg:order-2 space-y-6">
                        <div class="" data-aos="fade-left" data-aos-duration="900" data-aos-delay="600">
                            <p class="text-emerald-500 font-semibold text-lg">{{ about.title }}</p>
                            <h2 class="text-5xl font-bold text-black mb-8 leading-snug">{{ about.heading }}</h2>
                        </div>
                        <p class="text-lg text-gray-700 leading-relaxed" data-aos="fade-left" data-aos-duration="900" data-aos-delay="900"> 
                            {{ about.description }}
                        </p>
                        <ul class="feature-list space-y-4 mt-7" data-aos="fade-left" data-aos-duration="900" data-aos-delay="1200">
                            <li v-for="(feature, index) in about.features" :key="index" class="flex items-start gap-3 text-lg">
                                <span class="flex-shrink-0 mt-1"><img :src="about.checkIcon" alt="" class="w-6 h-6"></span>
                                <span>{{ feature }}</span>
                            </li>
                        </ul>
                        <a href="" class="inline-flex items-center justify-center gap-2 bg-emerald-500 text-white w-48 py-4 px-8 rounded-lg font-semibold hover:bg-emerald-600 transition duration-300 ease-in-out mt-12"  data-aos="fade-left" data-aos-duration="900" data-aos-delay="1500">
                            {{ about.ctaText }} <img :src="about.arrowIcon" alt="" class="w-5 h-5">
                        </a>
                   </div>
                </div>
            </div>
        </section>

         <section class="centered-section min-h-screen flex items-center justify-center" id="products">
            <div class="px-8 lg:px-40 w-full">
                <div class="">
                    <p class="text-emerald-500 font-semibold text-lg text-center mb-4" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">{{  products.title }}</p>
                    <h1 class="font-bold text-5xl text-center"data-aos="fade-up" data-aos-duration="900" data-aos-delay="600">{{ products.heading }}</h1>
                </div>
                <p class="text-lg text-gray-700 my-8 text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="900" data-aos-delay="900"> {{ products.subHeading }}</p>
                
                <div class="flex flex-wrap items-center justify-center gap-12 lg:gap-16 mt-16" data-aos="fade-up" data-aos-duration="900" data-aos-delay="1200">
                    <div v-for="(brand, index) in products.brands" :key="brand.id" class="flex items-center justify-center grayscale hover:grayscale-0 transition duration-300 opacity-70 hover:opacity-100">
                        <img :src="brand.logo" :alt="brand.name" class="h-12 lg:h-16 w-auto object-contain">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-5 mt-20">
                    <div v-for="(item, index) in products.items" :key="item.id" class="bg-white p-5 border border-gray-200 rounded-lg shadow-sm flex flex-col" data-aos="fade-up" data-aos-duration="900" data-aos-delay="1250">
                        <div class="flex items-center justify-center mb-4 h-36">
                            <img :src="item.image" :alt="item.name" class="max-w-full max-h-full object-contain">
                        </div>
                        <p class="text-xs text-emerald-500 font-semibold mb-1">{{ item.category }}</p>
                        <h3 class="text-base font-semibold text-gray-900 mb-2">{{ item.name }}</h3>
                        <p class="text-xs text-gray-600 mb-3 line-clamp-2">{{ item.description }}</p>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="text-xl font-bold text-emerald-600">{{ item.price }}</span>
                            <button class="bg-emerald-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-emerald-600 transition duration-300">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="centered-section min-h-screen flex items-center justify-center" id="testimonials">
            <div class="px-8 lg:px-40 w-full mt-40 mb-15">
                <div class="" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">
                    <p class="text-emerald-500 font-semibold text-lg text-center mb-4">{{ testimonials.title }}</p>
                    <h1 class="font-bold text-5xl text-center">{{ testimonials.heading }}</h1>
                </div>
                <p class="text-lg text-gray-700 my-8 text-center max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="900" data-aos-delay="600">
                    {{ testimonials.subHeading }}
                </p>
                    <div class="carousel-container overflow-hidden">
                        <div class="carousel-track flex gap-6 transition-transform duration-500 ease-in-out">
                            <div v-for="(item, index) in testimonials.items" :key="item.id" class="carousel-item flex-shrink-0" style="width: calc((100% - 48px) / 3);" data-aos="fade-up" data-aos-duration="900" :data-aos-delay="900 + (index * 300)">
                                <div class="bg-white p-10 rounded-lg border border-gray-200 shadow-sm">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ item.title }}</h3>
                                    <p class="text-gray-600 text-base mb-8 leading-relaxed">{{ item.quote }}</p>
                                    <div class="flex items-center gap-3">
                                        <img class="rounded-full w-12 h-12" :src="item.avatar" alt="profile picture">
                                        <div class="text-left">
                                            <div class="text-base font-semibold text-gray-900">{{ item.name }}</div>
                                            <div class="text-sm text-gray-600">{{ item.position }}</div>
                                        </div>
                                    </figcaption>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl shadow-2xl p-12 lg:p-16 mt-16 bg-emerald-600" data-aos="fade-up" data-aos-duration="900" data-aos-delay="800">
                        <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                            <div class="text-white max-w-2xl">
                                <p class="text-sm font-semibold mb-3 opacity-90">GET STARTED</p>
                                <h2 class="text-4xl lg:text-5xl font-bold mb-4">{{ cta.heading }}</h2>
                                <p class="text-lg opacity-90">{{ cta.description }}</p>
                            </div>
                            <div class="flex gap-4 flex-shrink-0">
                                <a :href="cta.primaryBtnLink" class="bg-white text-emerald-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-lg">{{ cta.primaryBtnText }}</a>
                                <a :href="cta.secondaryBtnLink" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-emerald-800 transition duration-300">{{ cta.secondaryBtnText }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer sm:footer-horizontal bg-gray-50 text-base-content p-10">
            <aside>
                <h6 class="text-2xl font-bold text-gray-700">FixMart</h6>
                <p>Your trusted online shopping destination.<br/>Providing quality products since 2020.</p>
            </aside>
            <nav>
                <h6 class="footer-title">Services</h6>
                <a class="link link-hover">Branding</a>
                <a class="link link-hover">Design</a>
                <a class="link link-hover ">Marketing</a>
                <a class="link link-hover ">Advertisement</a>
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
    <script src="../../../Public/js/User/landing-page.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>

