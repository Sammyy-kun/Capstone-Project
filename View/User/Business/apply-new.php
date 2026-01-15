<?php require '../../Layouts/header.php'; ?>
<body class="bg-gray-50">
    <!--Navbar to-->
    <header>
        <nav class="fixed top-0 z-50 w-full flex items-center justify-between px-8 lg:px-40 py-4 bg-white" >
            <h1 class="text-2xl font-bold text-emerald-500" >FixMart</h1>
            <a href="../../User/Home/index.php" class="nav-link text-black hover:text-emerald-500 transition duration-300 ease-in-out px-2" >Home</a>
        </nav>
    </header>
    <main id="app" class="pt-20">
        <div class="max-w-6xl mx-auto px-4 py-10">
            <!-- Progress Bar with Connecting Line -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-8 p-8">
                <div class="relative">
                    <!-- Background Line (gray) -->
                    <div class="absolute top-6 left-0 right-0 h-0.5 bg-gray-200" style="z-index: 0;"></div>
                    <!-- Progress Line (green) - adjust width based on current step -->
                    <div class="absolute top-6 left-0 h-0.5 bg-emerald-400" style="z-index: 0; width: 20%;"></div>
                    
                    <div class="relative grid grid-cols-5 gap-4" style="z-index: 1;">
                        <!-- Step 1 - Completed -->
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-full bg-emerald-400 flex items-center justify-center text-white mb-3 relative">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900 text-center text-sm">Owner Information</h3>
                            <p class="text-xs text-gray-500 text-center mt-1">Used to verify the business owner's identity</p>
                        </div>

                        <!-- Step 2 - Active -->
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-full border-2 border-emerald-400 bg-white flex items-center justify-center text-emerald-400 font-semibold mb-3 relative">
                                02
                            </div>
                            <h3 class="font-semibold text-gray-900 text-center text-sm">Business Information</h3>
                            <p class="text-xs text-gray-500 text-center mt-1">Details about the business you want to register</p>
                        </div>

                        <!-- Step 3 - Upcoming -->
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-full border-2 border-gray-300 bg-white flex items-center justify-center text-gray-400 font-semibold mb-3 relative">
                                03
                            </div>
                            <h3 class="font-semibold text-gray-500 text-center text-sm">Products / Services Details</h3>
                            <p class="text-xs text-gray-400 text-center mt-1">Information about what you will offer on the platform</p>
                        </div>

                        <!-- Step 4 - Upcoming -->
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-full border-2 border-gray-300 bg-white flex items-center justify-center text-gray-400 font-semibold mb-3 relative">
                                04
                            </div>
                            <h3 class="font-semibold text-gray-500 text-center text-sm">Business Legitimacy (Optional but Recommended)</h3>
                            <p class="text-xs text-gray-400 text-center mt-1">Submitting documents helps speed up the approval process</p>
                        </div>

                        <!-- Step 5 - Upcoming -->
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-full border-2 border-gray-300 bg-white flex items-center justify-center text-gray-400 font-semibold mb-3 relative">
                                05
                            </div>
                            <h3 class="font-semibold text-gray-500 text-center text-sm">Platform Agreement</h3>
                            <p class="text-xs text-gray-400 text-center mt-1">Please review and confirm before submitting</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Application Form</h2>
                <!-- Your form content goes here -->
            </div>
        </div>
    </main>
</body>
</html>
