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
        <h1 class="font-medium text-2xl">Products</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mt-5">
            <!--Here yung data tables tapos nasa left side siya-->
            <div class="lg:col-span-2 bg-white rounded-xl border border-gray-200 p-5">
                <h1 class="font-medium text-xl">Available Products</h1>
            </div>
            <!--Adding Products-->
            <div class="lg:col-span-1 bg-white rounded-xl border border-gray-200 p-5 max-h-[calc(100vh-10rem)] overflow-y-auto">
                <h1 class="font-medium text-xl mb-5">Add Products</h1>
                <form id="adding-products">
                    <div class="mb-6">
                        <label class="block mb-3 font-medium">Product Name</label>
                        <input type="text" id="product-name" name="product-name" required 
                            class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3">
                    </div>
                    <div class="mb-6">
                        <label class="block mb-3 font-medium">Category</label>
                        <select class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" name="category" id="category">
                            <option class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" value="washing-machine">Washing Machine</option>
                            <option class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" value="electric-fan">Electic Fan</option>
                            <option class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" value="microwave">Microwave</option>
                            <option class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" value="airconditioner">Air Conditioner</option>
                            <option class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" value="refrigerator">Refrigerator</option>
                            <option class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" value="television">Television</option>
                            <option class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" value="water-dispenser">Water Dispenser</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-3 font-medium">Product Description</label>
                        <input type="text" id="product-description" name="product-description" required 
                            class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3">
                            <p class="text-sm text-gray-400 mt-1">Need three product description.</p>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-3 font-medium">Price</label>
                        <input type="text" id="price" name="price" required 
                            class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3">
                    </div>
                    <div class="mb-6">
                        <label class="block mb-3 font-medium">Stock</label>
                        <input type="text" id="stock" name="stock" required 
                            class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3">
                    </div>
                   <div class="">
                        <label class="block mb-3 font-medium">Image</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 bg-neutral-secondary-medium border border-gray-200 border-dashed rounded-base cursor-pointer hover:bg-neutral-tertiary-medium">
                                <div class="flex flex-col items-center justify-center text-body pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h3a3 3 0 0 0 0-6h-.025a5.56 5.56 0 0 0 .025-.5A5.5 5.5 0 0 0 7.207 9.021C7.137 9.017 7.071 9 7 9a4 4 0 1 0 0 8h2.167M12 19v-9m0 0-2 2m2-2 2 2"/></svg>
                                    <p class="mb-2 text-sm"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>
                        <p class="text-sm text-gray-400 mt-1">Need four product images.</p>
                   </div>
                   <button class="w-full text-white font-medium p-3 bg-emerald-400 hover:bg-emerald-500 rounded-lg mt-4">Add Product</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../../../Public/js/owner/products.js"></script>
</div>
</body>
</html>