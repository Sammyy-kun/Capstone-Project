<?php require '../../Layouts/header.php'; ?>
<body class="overflow-hidden">
    <!--Navbar to-->
    <header>
        <nav class="fixed top-0 z-50 w-full flex items-center justify-between px-8 lg:px-40 py-4 bg-white" >
            <h1 class="text-2xl font-bold text-emerald-500" >FixMart</h1>
            <a href="../../User/Home/index.php" class="nav-link text-black hover:text-emerald-500 transition duration-300 ease-in-out px-2" >Home</a>
        </nav>
    </header>
    <main id="app" class="pt-20">
        <div class="mx-auto px-8 lg:px-40 py-10">
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-8">
            <div class="grid grid-cols-5">
                <!-- Step 1 - Completed -->
                <div class="relative p-4 border-r border-gray-200">
                    <div class="flex items-start gap-2">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 rounded-full bg-emerald-400 flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900">Owner Information</h3>
                            <p class="text-sm text-gray-500 mt-1">Used to verify the business owner's identity</p>
                        </div>
                    </div>
                </div>

                <div class="relative p-4 border-r border-gray-200">
                    <div class="flex items-start gap-2">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 rounded-full border-2 border-emerald-400 bg-white flex items-center justify-center text-emerald-400 font-semibold text-sm">
                                02
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900">Business Information</h3>
                            <p class="text-sm text-gray-500 mt-1">Details about the business you want to register</p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-emerald-400"></div>
                </div>

                <div class="relative p-4 border-r border-gray-200">
                    <div class="flex items-start gap-2">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 rounded-full border-2 border-gray-300 bg-white flex items-center justify-center text-gray-400 font-semibold text-sm">
                                03
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-500">Products / Services Details</h3>
                            <p class="text-sm text-gray-400 mt-1">Information about what you will offer on the platform</p>
                        </div>
                    </div>
                </div>
                <div class="relative p-4 border-r border-gray-200">
                    <div class="flex items-start gap-2">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 rounded-full border-2 border-gray-300 bg-white flex items-center justify-center text-gray-400 font-semibold text-sm">
                                04
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-500">Business Legitimacy</h3>
                            <p class="text-sm text-gray-400 mt-1">Submitting documents helps speed up the approval process</p>
                        </div>
                    </div>
                </div>
                <div class="relative p-4">
                    <div class="flex items-start gap-2">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 rounded-full border-2 border-gray-300 bg-white flex items-center justify-center text-gray-400 font-semibold text-sm">
                                05
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-500">Platform Agreement</h3>
                            <p class="text-sm text-gray-400 mt-1">Please review and confirm before submitting</p>
                        </div>
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