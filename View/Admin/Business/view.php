<?php require '../../Layouts/header.php'; ?>
<div id="app">
    <!--Navbar-->
    <header>
       <nav class="fixed top-0 left-0 right-0 z-[60] w-full flex items-center justify-between px-6 lg:px-8 py-3 shadow-sm bg-white border-b border-gray-200" >
            <div class="flex items-center gap-4">
                <button @click="toggleSidebar" class="p-2 hover:bg-gray-100 rounded-lg transition">
                    <img src="../../../Public/pictures/menu.svg" alt="Menu" class="w-6 h-6">
                </button>
                <h1 class="text-xl font-semibold text-emerald-500">FixMart</h1>
            </div>
            
            <div class="flex items-center gap-4">
                <span class="text-sm text-gray-700">Hello, <span class="font-medium">{{ user.name }}</span></span>
                <button class="relative p-2 hover:bg-gray-100 rounded-lg transition">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                    <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
                <button class="flex items-center gap-2 hover:bg-gray-100 rounded-lg p-1 transition">
                    <img :src="user.image" alt="Profile" class="w-8 h-8 rounded-full object-cover">
                    <svg class="w-4 h-4 text-gray-600 hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <transition name="slide-in">
            <aside v-show="sidebarOpen" class="fixed left-0 top-[3.5rem] flex flex-col w-64 h-[calc(100vh-3.5rem)] px-4 py-6 overflow-y-auto bg-white border-r border-gray-200 z-50">
            <div class="flex flex-col justify-between flex-1">
                <nav>
                    <div v-for="(group, index) in menuGroups" :key="index" class="mb-4">
                        <button @click="toggleMenu(index)" class="w-full flex items-center justify-between px-4 py-2 text-md font-medium text-gray-600 hover:text-gray-700 transition-colors">
                            <span>{{ group.title }}</span>
                            <svg :class="{'rotate-180': group.isOpen}" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <transition name="slide-fade">
                            <div v-show="group.isOpen" class="mt-2 space-y-1">
                                <a v-for="item in group.items" :key="item.name" :href="item.link" 
                                   :class="item.active ? 'text-emerald-600 bg-emerald-50' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-700'"
                                   class="flex items-center px-4 py-2 text-sm transition-colors duration-300 transform rounded-md">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path :d="getIcon(item.icon)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="mx-4 font-medium">{{ item.name }}</span>
                                </a>
                            </div>
                        </transition>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <a :href="logoutLink.link" class="flex items-center px-4 py-2 text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-700 transition-colors duration-300 transform rounded-md">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path :d="getIcon(logoutLink.icon)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="mx-4 font-medium">{{ logoutLink.name }}</span>
                        </a>
                    </div>
                </nav>
            </div>
            </aside>
        </transition>
    </header>
    <main class="transition-all duration-300 ease-in-out mt-10 px-10 py-10" :class="{'lg:ml-64': sidebarOpen}">
        <a href="application.php" class="group flex items-center gap-2 text-sm font-normal text-lg text-gray-700 hover:text-emerald-600 transition-colors mb-5 block">
            <svg class="w-5 h-5 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Business Requests
        </a> 
        <div class="mt-5 bg-white border border-gray-200 rounded-lg p-10 lg:h-170 max-h-[calc(100vh-10rem)] overflow-y-auto">
            <h1 class="text-xl font-medium text-gray-900 mb-6">Application Summary</h1>
            
            <!--Owners Info-->
            <div class="border-t border-gray-200 pt-6">
                <h1 class="font-medium text-lg mb-4">Owners Information</h1>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Firstname</p>
                        <h1 class="text-md font-medium">{{ ownersInfo.firstname }}</h1>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Lastname</p>
                        <h1 class="text-md font-medium">{{ ownersInfo.lastname }}</h1>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Email Address</p>
                        <h1 class="text-md font-medium">{{ ownersInfo.email }}</h1>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Mobile Number</p>
                        <h1 class="text-md font-medium">{{ ownersInfo.mobileNo }}</h1>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Id Type</p>
                        <h1 class="text-md font-medium">{{ ownersInfo.idType }}</h1>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Government ID Number</p>
                        <h1 class="text-md font-medium">{{ ownersInfo.governmentId }}</h1>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Government ID Photo</p>
                        <img :src="ownersInfo.governmentIdImage" alt="Government ID" 
                             class="w-full max-w-md h-48 object-cover rounded-lg border border-gray-200 cursor-pointer hover:opacity-80 transition"
                             @click="openImageModal(ownersInfo.governmentIdImage)">
                    </div>
                </div>
            </div>
            <!--Business Info-->
            <div class="border-t border-gray-200 pt-6 mt-6">
                <h1 class="font-medium text-lg mb-4">Business Information</h1>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Business Name</p>
                        <h1 class="text-md font-medium">{{ businessInfo.businessName }}</h1>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Business Type</p>
                        <h1 class="text-md font-medium">{{ businessInfo.businessType }}</h1>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Business Email</p>
                        <h1 class="text-md font-medium">{{ businessInfo.businessEmail }}</h1>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Business Contact No</p>
                        <h1 class="text-md font-medium">{{ businessInfo.businessContactNo }}</h1>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Business Address</p>
                        <h1 class="text-md font-medium">{{ businessInfo.businessAddress }}</h1>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Business Description</p>
                        <h1 class="text-md font-medium">{{ businessInfo.businessDescription }}</h1>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Years in Operation</p>
                        <h1 class="text-md font-medium">{{ businessInfo.yearsInOperation }}</h1>
                    </div>
                </div>
            </div>

            <!--Product Services-->
            <div class="border-t border-gray-200 pt-6 mt-6">
                <h1 class="font-medium text-lg mb-4">Product/Services</h1>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Service Description</p>
                        <h1 class="text-md font-medium">{{ productServices.serviceDescription }}</h1>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Service Area</p>
                        <h1 class="text-md font-medium">{{ productServices.serviceArea }}</h1>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Average Service Fee</p>
                        <h1 class="text-md font-medium">{{ productServices.averageServiceFee }}</h1>
                    </div>
                </div>
            </div>

            <!--Business Legitimacy-->
            <div class="border-t border-gray-200 pt-6 mt-6">
                <h1 class="font-medium text-lg mb-4">Business Legitimacy</h1>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Business Permit Number</p>
                        <h1 class="text-md font-medium">{{ businessLegitimacy.businessPermit }}</h1>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-2">DTI Registration Number</p>
                        <h1 class="text-md font-medium">{{ businessLegitimacy.dtiRegistration }}</h1>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Tax Identification Number</p>
                        <h1 class="text-md font-medium">{{ businessLegitimacy.taxIndetificationNumber }}</h1>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:mt-5">
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Business Permit Photo</p>
                        <img :src="businessLegitimacy.businessPermitImage" alt="Business Permit" 
                             class="w-full h-48 object-cover rounded-lg border border-gray-200 cursor-pointer hover:opacity-80 transition"
                             @click="openImageModal(businessLegitimacy.businessPermitImage)">
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-2">DTI Registration Photo</p>
                        <img :src="businessLegitimacy.dtiRegistrationImage" alt="DTI Registration" 
                             class="w-full h-48 object-cover rounded-lg border border-gray-200 cursor-pointer hover:opacity-80 transition"
                             @click="openImageModal(businessLegitimacy.dtiRegistrationImage)">
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 mb-2">Tax Identification Photo</p>
                        <img :src="businessLegitimacy.taxIdetificationImage" alt="DTI Registration" 
                             class="w-full h-48 object-cover rounded-lg border border-gray-200 cursor-pointer hover:opacity-80 transition"
                             @click="openImageModal(businessLegitimacy.taxIdetificationImage)">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end mt-5 gap-4">
            <button class="bg-emerald-500 font-semibold w-48 py-4 px-5 rounded-lg text-white hover:bg-emerald-600" @click="nextBtn">Accept</button>
        </div>

        <!-- Image Modal -->
        <div v-if="showImageModal" @click="closeImageModal" 
             class="fixed inset-0 bg-black bg-opacity-75 z-[70] flex items-center justify-center p-4">
            <div class="relative max-w-4xl max-h-full">
                <button @click="closeImageModal" class="absolute -top-10 right-0 text-white hover:text-gray-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <img :src="currentImage" alt="Document" class="max-w-full max-h-[90vh] rounded-lg">
            </div>
        </div>
    </main>
    <script src="../../../Public/js/Admin/view.js"></script>
</div>
</div>
</body>
</html>