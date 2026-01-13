<?php require '../Layouts/header.php'; ?>
<body>
    <!--Navbar-->
    <header>
        <nav class="fixed top-0 z-50 w-full flex items-center justify-between px-8 lg:px-40 py-4 shadow-md bg-white">
            <h1 class="text-2xl font-bold text-emerald-500">FixMart</h1>
            <div class="flex items-center gap-8 lg:gap-12">
                <a href="../User/Home/index.php" class="nav-link text-black hover:text-emerald-500 transition duration-300 ease-in-out px-2">Home</a>
            </div>
        </nav>
    </header>
    <section class="min-h-screen flex justify-center items-center pt-20 pb-10 px-4">
         <div class="w-full max-w-md">
            <div class="bg-white px-8 py-20 rounded-lg border-2 border-gray-200 shadow-sm">
                <h1 class="text-center font-bold text-2xl mb-3">Create an account</h1>
                <p class="text-center mb-8 text-sm sm:text-base text-gray-600">Create an account to continue shopping</p>
                <form id="signupForm">
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div>
                            <label class="block mb-3 font-semibold">Firstname</label>
                            <input type="text" id="firstname" name="firstname" required 
                                class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3">
                        </div>
                        <div>
                            <label class="block mb-3 font-semibold">Lastname</label>
                            <input type="text" id="lastname" name="lastname" required 
                                class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Email</label>
                        <input type="email" id="email" name="email" required 
                            class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Password</label>
                        <input type="password" id="password" name="password" required 
                            class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3">
                    </div>

                    <div class="mb-5">
                        <input type="checkbox" class="mr-2">
                        <label for="rememberMe">I agree to the <span class="text-emerald-400">Terms of Service</span> and have read the <span class="text-emerald-400">Privacy Policy</span>.</label>
                    </div>

                    <div class="mb-6">
                        <button type="submit" 
                            class="w-full h-12 font-semibold bg-emerald-500 text-white rounded-lg hover:bg-emerald-600 transition duration-300">
                            Sign up
                        </button>
                    </div>
                </form>

                <div class="text-center mt-1">
                    <h1>Already have an Account? <a href="login.php" class="text-emerald-500">Sign in</a></h1>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
