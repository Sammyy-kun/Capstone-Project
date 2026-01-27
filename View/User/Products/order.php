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
                <button @click="toggleCart" class="relative p-2 hover:bg-gray-100 rounded-lg transition">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span v-if="cartItemCount > 0" class="absolute -top-1 -right-1 bg-emerald-500 text-white text-xs w-5 h-5 rounded-full flex items-center justify-center font-medium">{{ cartItemCount }}</span>
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
                </nav>
            </div>
            </aside>
        </transition>

        <!-- Cart Sidebar -->
        <transition name="slide-in-right">
            <aside v-show="cartOpen" class="fixed right-0 top-[3.5rem] flex flex-col w-96 h-[calc(100vh-3.5rem)] bg-white border-l border-gray-200 z-50 shadow-xl">
                <div class="flex items-center justify-between p-4 border-b border-gray-200">
                    <div class="flex items-center gap-3">
                        <input v-if="cart.length > 0" type="checkbox" :checked="allSelected" @change="toggleAllSelection" class="w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500 cursor-pointer">
                        <h2 class="text-lg font-semibold text-gray-900">Shopping Cart ({{ cartItemCount }})</h2>
                    </div>
                    <button @click="toggleCart" class="p-2 hover:bg-gray-100 rounded-lg transition">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div v-if="cart.length === 0" class="flex-1 flex flex-col items-center justify-center p-6 text-center">
                    <svg class="w-20 h-20 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Your cart is empty</h3>
                    <p class="text-sm text-gray-500">Add items to your cart to continue shopping</p>
                </div>

                <div v-else class="flex-1 overflow-y-auto p-4 space-y-4">
                    <div v-for="(item, index) in cart" :key="item.id" class="flex gap-3 bg-gray-50 rounded-lg p-3" :class="{'opacity-50': !item.selected}">
                        <input type="checkbox" v-model="item.selected" class="mt-1 w-4 h-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500 cursor-pointer">
                        <img :src="item.image" :alt="item.name" class="w-20 h-20 object-contain rounded-lg bg-white">
                        <div class="flex-1 flex flex-col">
                            <h3 class="font-medium text-gray-900 text-sm mb-1">{{ item.name }}</h3>
                            <p class="text-emerald-600 font-bold text-sm mb-2">₱{{ item.price.toLocaleString() }}</p>
                            <div class="flex items-center gap-2 mt-auto">
                                <button @click="updateQuantity(item, -1)" class="w-7 h-7 flex items-center justify-center bg-white border border-gray-300 rounded hover:bg-gray-100 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                    </svg>
                                </button>
                                <span class="w-8 text-center text-sm font-medium">{{ item.quantity }}</span>
                                <button @click="updateQuantity(item, 1)" class="w-7 h-7 flex items-center justify-center bg-white border border-gray-300 rounded hover:bg-gray-100 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <button @click="removeFromCart(index)" class="p-1 h-fit hover:bg-gray-200 rounded transition">
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div v-if="cart.length > 0" class="border-t border-gray-200 p-4 space-y-4">
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm text-gray-600">
                            <span>Selected Items:</span>
                            <span class="font-medium">{{ selectedItemCount }} / {{ cartItemCount }}</span>
                        </div>
                        <div class="flex items-center justify-between text-lg font-bold">
                            <span class="text-gray-900">Total:</span>
                            <span class="text-emerald-600">₱{{ cartTotal.toLocaleString() }}</span>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <button @click="proceedToCheckout" :disabled="cartTotal === 0" :class="cartTotal === 0 ? 'bg-gray-300 cursor-not-allowed' : 'bg-emerald-500 hover:bg-emerald-600'" class="w-full text-white py-3 rounded-lg font-medium transition-colors duration-200">
                            Checkout Selected (₱{{ cartTotal.toLocaleString() }})
                        </button>
                        <button @click="clearCart" class="w-full bg-white hover:bg-gray-50 border border-gray-300 text-gray-700 py-2 rounded-lg font-medium transition-colors duration-200">
                            Clear Cart
                        </button>
                    </div>
                </div>
            </aside>
        </transition>
    </header>
    <main class="transition-all duration-300 ease-in-out mt-10 px-10 py-10" :class="{'lg:ml-64': sidebarOpen}">
        <h1 class="font-medium text-2xl">Orders</h1>
        <div class="mt-8">
        </div>  
    </main>
    <script src="../../../Public/js/User/order.js"></script>
</div>
</body>
</html>