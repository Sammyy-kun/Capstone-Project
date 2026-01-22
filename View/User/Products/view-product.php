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
            <aside v-show="sidebarOpen" class="fixed left-0 top-[3.5rem] flex flex-col w-64 h-[calc(100vh-3.5rem)] px-4 py-8 overflow-y-auto bg-white border-r border-gray-200 shadow-lg z-50">
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
                                   :class="item.active ? 'text-gray-700 bg-gray-100' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-700'"
                                   class="flex items-center px-4 py-2 text-sm transition-colors duration-300 transform rounded-md">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path :d="getIcon(item.icon)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="mx-4 font-medium">{{ item.name }}</span>
                                </a>
                            </div>
                        </transition>
                    </div>
                </nav>
            </div>
            </aside>
        </transition>
    </header>
    <main class="transition-all duration-300 ease-in-out mt-10 px-10 py-10" :class="{'lg:ml-64': sidebarOpen}">
        <div class="mt-8">
           <a href="dashboard.php" class="group flex items-center gap-2 text-sm font-normal text-lg text-gray-700 hover:text-emerald-600 transition-colors mb-5 block">
                <svg class="w-5 h-5 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
               Back to Product List
            </a> 
           
           <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 bg-white rounded-xl border border-gray-200 p-5">
                <div class="space-y-4">
                    <div class="bg-gray-50 rounded-xl p-8 flex items-center justify-center" >
                        <img class="w-full h-96 object-contain" :src="product.image" alt="">
                    </div>
                    <div class="flex gap-4">
                        <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-center flex-1 cursor-pointer hover:border-2 hover:border-emerald-500 transition">
                            <img class="w-20 h-20 object-contain" :src="product.image" alt="">
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-center flex-1 cursor-pointer hover:border-2 hover:border-emerald-500 transition">
                            <img class="w-20 h-20 object-contain" :src="product.image" alt="">
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-center flex-1 cursor-pointer hover:border-2 hover:border-emerald-500 transition">
                            <img class="w-20 h-20 object-contain" :src="product.image"alt="">
                        </div>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <div>
                        <span class="text-xs font-semibold text-emerald-600 uppercase tracking-wide">New Arrival</span>
                        <h1 class="text-3xl font-bold text-gray-900 mt-2">{{ product.name }}</h1>
                        <div class="flex items-center gap-2 mt-3">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                <svg class="w-5 h-5 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            </div>
                            <span class="text-sm font-semibold text-gray-700">(4.5)</span>
                            <span class="text-sm text-gray-500">623 reviews</span>
                            <span class="text-sm text-gray-500">1,919 Sold</span>
                        </div>
                    </div>
                    
                    <div>
                        <p class="text-3xl font-bold text-emerald-600">₱ {{ product.price.toLocaleString() }}</p>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 mb-3">Available Colors</h3>
                        <div class="flex gap-2">
                            <button class="w-8 h-8 rounded-full bg-black border-2 border-gray-300 hover:border-emerald-500"></button>
                            <button class="w-8 h-8 rounded-full bg-gray-700 border-2 border-gray-300 hover:border-emerald-500"></button>
                            <button class="w-8 h-8 rounded-full bg-blue-900 border-2 border-gray-300 hover:border-emerald-500"></button>
                            <button class="w-8 h-8 rounded-full bg-red-800 border-2 border-gray-300 hover:border-emerald-500"></button>
                        </div>
                    </div>
                    
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-sm font-semibold text-gray-900">Quantity</h3>
                            <p class="text-sm text-gray-600">Stock: <span class="font-semibold text-emerald-600">{{ product.stock }} units</span></p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex items-center border-2 border-gray-300 rounded-lg">
                                <button class="px-4 py-2 hover:bg-gray-100 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                    </svg>
                                </button>
                                <input type="number" value="1" min="1" max="12" class="w-16 text-center border-x-2 border-gray-300 py-2 focus:outline-none">
                                <button class="px-4 py-2 hover:bg-gray-100 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 mb-3">Description:</h3>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li v-for="(feature, index) in product.features" :key="index">• {{ feature }}</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900 mb-3">Shipping Information</h3>
                        <div class="grid grid-cols-3 gap-4 text-sm">
                            <div>
                                <p class="text-gray-500 mb-1">Delivery</p>
                                <p class="font-medium">{{ product.shipping.delivery }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500 mb-1">Payment Method</p>
                                <p class="font-medium">{{ product.shipping.paymentMethod }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500 mb-1">Arrive</p>
                                <p class="font-medium">{{ product.shipping.arriveDate }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex gap-4 pt-4">
                        <button class="flex-1 bg-white border-2 border-emerald-500 text-emerald-600 py-3 px-6 rounded-lg font-semibold hover:bg-emerald-50 transition flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Add to Cart
                        </button>
                        <button class="flex-1 bg-emerald-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-emerald-600 transition">
                            Buy Now
                        </button>
                    </div>
                </div>
           </div>
        </div>
    </main>
    <script src="../../../Public/js/User/view-product.js"></script>
</div>
</body>
</html>