<?php require '../Layouts/header.php'; ?>
<body>
    <!--Navbar to-->
    <header>
        <nav class="fixed top-0 z-50 w-full flex items-center justify-between px-8 lg:px-40 py-4 shadow-md bg-white">
            <h1 class="text-2xl font-bold text-sky-400">FixMart</h1>
            <div class="flex items-center gap-8 lg:gap-12">
                <a href="../Home/index.php" class="nav-link text-black hover:text-sky-400 transition duration-300 ease-in-out px-2">Home</a>
            </div>
        </nav>
    </header>
    <section class="min-h-screen flex justify-center items-center pt-20 pb-10 px-4">
         <div id="app">
            <div class="w-full max-w-md" >
            <div class="bg-white px-8 py-20 rounded-lg border-2 border-gray-200 shadow-sm">
                <h1 class="text-center font-bold text-2xl mb-3">Sign in to your account</h1>
                <p class="text-center mb-8 text-sm sm:text-base text-gray-600">Fill in your credentials to access your account</p>
                    <form id="loginForm">
                        <div class="mb-6">
                            <label class="block mb-3 font-semibold">Email or Username</label>
                            <input   type="text" id="email" name="email" v-model="username" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-sky-500 px-4 py-3">
                        </div>
                        <div class="mb-6">
                            <label class="block mb-3 font-semibold">Password</label>
                            <input type="password" id="password" name="password" v-model="password" required class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-sky-500 px-4 py-3">
                            <div id="passwordError" class="mt-2 text-sm text-red-500 hidden">
                                <p class="font-semibold">Must be more than 8 characters, including</p>
                                <p id="numberCheck">At least one number</p>
                                <p id="lowercaseCheck">At least one lowercase letter</p>
                                <p id="uppercaseCheck">At least one uppercase letter</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-5 mb-7">
                            <div>
                                <input type="checkbox" id="rememberMe" class="mr-2">
                                <label for="rememberMe">Remember Me</label>
                            </div>
                        <div>
                            <a href="forget-password.php" class="text-sky-400 hover:text-sky-500">Forgot Password?</a>
                        </div>
                        </div>
                            <div class="mb-6">
                                <button type="submit" id="submit" @click.prevent="submit" class="w-full h-12 font-semibold bg-sky-400 text-white rounded-lg hover:bg-sky-500 transition duration-300">{{ message }}</button>
                            </div>
                    </form>
                    <div class="text-center mt-1">
                        <h1>Don't have an Account? <a href="register.php" class="text-sky-400">Sign up</a></h1>
                    </div>
                </div>
            </div>
         </div>
    </section>
</html>