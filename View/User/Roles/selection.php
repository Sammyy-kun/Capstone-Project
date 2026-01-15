<?php require '../../Layouts/header.php'; ?>
<body class="overflow-hidden">
    <!--Navbar to-->
     <header>
        <nav class="fixed top-0 z-50 w-full flex items-center justify-between px-8 lg:px-40 py-4 bg-white" >
            <h1 class="text-2xl font-bold text-emerald-500" >FixMart</h1>
            <a href="../../User/Home/index.php" class="nav-link text-black hover:text-emerald-500 transition duration-300 ease-in-out px-2" >Home</a>
        </nav>
    </header>
    <main id="app" class="min-h-screen flex flex-col items-center justify-center px-8 lg:px-40 pt-20">
        <div class="text-center mb-10">
            <h1 class="font-bold text-4xl lg:text-5xl mb-6 leading-tight">How are you planning to use <span class="text-emerald-500">FixMart</span></h1>
            <p class="text-base lg:text-lg text-gray-700 my-2 text-center max-w-3xl mx-auto leading-relaxed">
                Help us understand how you plan to use FixMart so we<br>
                can tailor the experience for you.
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12 w-full max-w-7xl mx-auto">
            <div class="text-center lg:cols-span-1 bg-white rounded-xl border border-gray-200 p-7 hover:border-emerald-500 hover:border-2 transition-all duration-300 ease-in-out hover:shadow-lg transform hover:scale-105">
                <img class="w-20 h-20 justify-self-center m-5" src="../../../Public/pictures/shops.png" alt="">
                <h1 class="font-semibold mb-4 text-3xl">Sell on FixMart</h1>
                <p class="text-gray-700 text-md">
                    Apply to sell your appliances, manage orders, 
                    and grow your business on FixMart.
                </p>
                <a href="../../Auth/Owner/register.php" class="inline-block text-white bg-emerald-500 hover:bg-emerald-600 font-semibold text-md mt-5 rounded-lg p-4 transition duration-300 ease-in-out">Apply as a Seller</a>
            </div>
             <div class="text-center lg:cols-span-1 bg-white rounded-xl border border-gray-200 p-7 hover:border-emerald-500 hover:border-2 transition-all duration-300 ease-in-out hover:shadow-lg transform hover:scale-105">
                <img class="w-20 h-20 justify-self-center m-5" src="../../../Public/pictures/repair.png" alt="">
                <h1 class="font-semibold mb-4 text-3xl">Repair Appliances</h1>
                <p class="text-gray-700 text-md">
                   Get fast and reliable appliance repair services 
                   from trusted professionals.
                </p>
                <a href="../../Auth/User/register.php" class="inline-block text-white bg-emerald-500 hover:bg-emerald-600 font-semibold text-md mt-5 rounded-lg p-4 transition duration-300 ease-in-out">Book a Repair</a>
            </div>
            <div class="text-center lg:cols-span-1 bg-white rounded-xl border border-gray-200 p-7 hover:border-emerald-500 hover:border-2 transition-all duration-300 ease-in-out hover:shadow-lg transform hover:scale-105">
                <img class="w-20 h-20 justify-self-center m-5" src="../../../Public/pictures/shopping-cart.png" alt="">
                <h1 class="font-semibold mb-4 text-3xl">Buy Appliances</h1>
                <p class="text-gray-700 text-md">
                   Buy appliances from trusted stores with easy 
                   ordering and reliable delivery.
                </p>
                <a href="../../Auth/User/register.php" class="inline-block text-white bg-emerald-500 hover:bg-emerald-600 font-semibold text-md mt-5 rounded-lg p-4 transition duration-300 ease-in-out">Start Shopping</a>
            </div>
        </div>
    </main>
</body>
</html>