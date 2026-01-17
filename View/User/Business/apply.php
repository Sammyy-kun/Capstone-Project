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
         <div class="mx-auto px-8 lg:px-40 ">
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-8">
            <div class="grid grid-cols-5">
                <!--First Progress-->
                <div class="relative p-6 border-r border-gray-200">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div v-if="currentStep > 1" class="w-10 h-10 rounded-full bg-emerald-400 flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div v-else class="w-10 h-10 rounded-full border-2 bg-white flex items-center justify-center font-semibold text-sm"
                                 :class="currentStep === 1 ? 'border-emerald-400 text-emerald-400' : 'border-gray-300 text-gray-400'">
                                01
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-semibold text-sm" :class="currentStep >= 1 ? 'text-gray-900' : 'text-gray-500'">Owner Information</h3>
                            <p class="text-xs mt-1" :class="currentStep >= 1 ? 'text-gray-500' : 'text-gray-400'">Used to verify the business owner's identity</p>
                        </div>
                    </div>
                    <div v-if="currentStep === 1" class="absolute bottom-0 left-0 right-0 h-1 bg-emerald-400"></div>
                </div>

                <!--Second Progress-->
                <div class="relative p-6 border-r border-gray-200">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div v-if="currentStep > 2" class="w-10 h-10 rounded-full bg-emerald-400 flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div v-else class="w-10 h-10 rounded-full border-2 bg-white flex items-center justify-center font-semibold text-sm"
                                 :class="currentStep === 2 ? 'border-emerald-400 text-emerald-400' : 'border-gray-300 text-gray-400'">
                                02
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-semibold text-sm" :class="currentStep >= 2 ? 'text-gray-900' : 'text-gray-500'">Business Information</h3>
                            <p class="text-xs mt-1" :class="currentStep >= 2 ? 'text-gray-500' : 'text-gray-400'">Details about the business you want to register</p>
                        </div>
                    </div>
                    <div v-if="currentStep === 2" class="absolute bottom-0 left-0 right-0 h-1 bg-emerald-400"></div>
                </div>

                <!--Third Progress-->
                <div class="relative p-6 border-r border-gray-200">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div v-if="currentStep > 3" class="w-10 h-10 rounded-full bg-emerald-400 flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div v-else class="w-10 h-10 rounded-full border-2 bg-white flex items-center justify-center font-semibold text-sm"
                                 :class="currentStep === 3 ? 'border-emerald-400 text-emerald-400' : 'border-gray-300 text-gray-400'">
                                03
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-semibold text-sm" :class="currentStep >= 3 ? 'text-gray-900' : 'text-gray-500'">Products / Services Details</h3>
                            <p class="text-xs mt-1" :class="currentStep >= 3 ? 'text-gray-500' : 'text-gray-400'">Information about what you will offer on the platform</p>
                        </div>
                    </div>
                    <div v-if="currentStep === 3" class="absolute bottom-0 left-0 right-0 h-1 bg-emerald-400"></div>
                </div>

                <!--Fourth Progress-->
                <div class="relative p-6 border-r border-gray-200">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div v-if="currentStep > 4" class="w-10 h-10 rounded-full bg-emerald-400 flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div v-else class="w-10 h-10 rounded-full border-2 bg-white flex items-center justify-center font-semibold text-sm"
                                 :class="currentStep === 4 ? 'border-emerald-400 text-emerald-400' : 'border-gray-300 text-gray-400'">
                                04
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-semibold text-sm" :class="currentStep >= 4 ? 'text-gray-900' : 'text-gray-500'">Business Legitimacy</h3>
                            <p class="text-xs mt-1" :class="currentStep >= 4 ? 'text-gray-500' : 'text-gray-400'">Submitting documents helps speed up the approval process</p>
                        </div>
                    </div>
                    <div v-if="currentStep === 4" class="absolute bottom-0 left-0 right-0 h-1 bg-emerald-400"></div>
                </div>

                <!--Fifth Progress-->
                <div class="relative p-6">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div v-if="currentStep > 5" class="w-10 h-10 rounded-full bg-emerald-400 flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div v-else class="w-10 h-10 rounded-full border-2 bg-white flex items-center justify-center font-semibold text-sm"
                                 :class="currentStep === 5 ? 'border-emerald-400 text-emerald-400' : 'border-gray-300 text-gray-400'">
                                05
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-semibold text-sm" :class="currentStep >= 5 ? 'text-gray-900' : 'text-gray-500'">Platform Agreement</h3>
                            <p class="text-xs mt-1" :class="currentStep >= 5 ? 'text-gray-500' : 'text-gray-400'">Please review and confirm before submitting</p>
                        </div>
                    </div>
                    <div v-if="currentStep === 5" class="absolute bottom-0 left-0 right-0 h-1 bg-emerald-400"></div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm lg:h-150 border border-gray-200 p-8 max-h-[calc(100vh-10rem)] overflow-y-auto">
            <!--Owner Info-->
            <div class="" v-if="currentStep === 1">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Owner Information</h2>
                <form action="">
                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">First Name</label>
                        <input   type="text" id="fname" name="fname" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="Enter your first name">
                    </div>

                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Last Name</label>
                        <input   type="text" id="lname" name="lname" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="Enter your last name">
                    </div>

                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Email Address</label>
                        <input   type="email" id="email" name="email" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="example@email.com">
                    </div>

                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Mobile Number</label>
                        <input   type="text" id="mobile-no" name="mobile-no" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="09XX XXX XXXX">
                    </div>

                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Government ID</label>
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
                    </div>

                    <div class="">
                        <label class="block mb-3 font-semibold">Category</label>
                        <select class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" name="category" id="category">
                            <option class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" value="nationalID">National ID</option>
                            <option class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" value="driversLicense">Driver's License</option>
                            <option class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" value="passport">Passport</option>
                        </select>
                    </div>
                </form>
            </div>

            <!--Business Info-->
            <div class="" v-if="currentStep === 2">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Business Information</h2>
                <form action="">
                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Business Name</label>
                        <input   type="text" id="bname" name="bname" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="Enter your business name">
                    </div>

                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Business Type</label>
                        <select class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" name="category" id="category">
                            <option value="">Select Business Type</option>
                            <option value="ApplianceStore">Appliance Store</option>
                            <option value="ApplianceWithrepair">Appliance Repair & Sales</option>
                        </select>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Years in Operation</label>
                        <select class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" name="category" id="category">
                            <option value="">Select Years in Operation</option>
                            <option value="LessThanOneYear">Less than 1 year</option>
                            <option value="OneToThreeYears">1 - 3 years</option>
                            <option value="ThreeYearsPlus">3+ years</option>
                        </select>
                    </div>
                   
                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Business Address</label>
                        <input   type="text" id="businessAddress" name="businessAdd" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="Enter business address">
                    </div>

                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Business Mobile Number</label>
                        <input   type="text" id="businessNumber" name="businessAdd" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="09XX XXX XXXX">
                    </div>

                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Business Email</label>
                        <input   type="email" id="businessEmail" name="businessEmail" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="business@email.com">
                    </div>

                </form>
            </div>

            <!--Products / Services Details-->
            <div class="" v-if="currentStep === 3">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Products / Services Details</h2>
                <form action="">
                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Service Description</label>
                        <textarea rows="4" class="w-full rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="Describe your services..."></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Service Area</label>
                        <input type="text" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="e.g., Metro Manila">
                    </div>

                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Average Service Fee</label>
                        <input type="number" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="Enter amount">
                    </div>
                </form>
            </div>

            <!--Business Legitimacy-->
            <div class="" v-if="currentStep === 4">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Business Legitimacy</h2>
                <form action="">
                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">Business Permit</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="business-permit" class="flex flex-col items-center justify-center w-full h-64 bg-neutral-secondary-medium border border-gray-200 border-dashed rounded-base cursor-pointer hover:bg-neutral-tertiary-medium">
                                <div class="flex flex-col items-center justify-center text-body pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h3a3 3 0 0 0 0-6h-.025a5.56 5.56 0 0 0 .025-.5A5.5 5.5 0 0 0 7.207 9.021C7.137 9.017 7.071 9 7 9a4 4 0 1 0 0 8h2.167M12 19v-9m0 0-2 2m2-2 2 2"/></svg>
                                    <p class="mb-2 text-sm"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs">PDF, PNG, JPG (MAX. 5MB)</p>
                                </div>
                                <input id="business-permit" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block mb-3 font-semibold">DTI/SEC Registration</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dti-sec" class="flex flex-col items-center justify-center w-full h-64 bg-neutral-secondary-medium border border-gray-200 border-dashed rounded-base cursor-pointer hover:bg-neutral-tertiary-medium">
                                <div class="flex flex-col items-center justify-center text-body pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h3a3 3 0 0 0 0-6h-.025a5.56 5.56 0 0 0 .025-.5A5.5 5.5 0 0 0 7.207 9.021C7.137 9.017 7.071 9 7 9a4 4 0 1 0 0 8h2.167M12 19v-9m0 0-2 2m2-2 2 2"/></svg>
                                    <p class="mb-2 text-sm"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs">PDF, PNG, JPG (MAX. 5MB)</p>
                                </div>
                                <input id="dti-sec" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>

                    <div class="">
                        <label class="block mb-3 font-semibold">Tax Identification Number (TIN)</label>
                        <input type="text" class="w-full h-12 rounded-md border-2 border-gray-200 focus:outline-emerald-500 px-4 py-3" placeholder="Enter TIN">
                    </div>
                </form>
            </div>

            <!--Platform Agreement-->
            <div class="" v-if="currentStep === 5">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Platform Agreement</h2>
                <div class="mb-6">
                    <div class="border-2 border-gray-200 rounded-lg p-6 max-h-96 overflow-y-auto">
                        <h3 class="font-semibold text-lg mb-4">Terms and Conditions</h3>
                        <div class="space-y-4 text-sm text-gray-700">
                            <p>By registering on FixMart, you agree to the following terms and conditions:</p>
                            <p><strong>1. Service Provider Responsibilities:</strong> You agree to provide honest, professional, and quality services to customers. You are responsible for completing all assigned jobs in a timely manner.</p>
                            <p><strong>2. Payment Terms:</strong> FixMart will collect payments on your behalf and remit them according to the agreed schedule, minus applicable platform fees.</p>
                            <p><strong>3. Quality Standards:</strong> You must maintain a minimum rating of 3.5 stars. Failure to meet quality standards may result in suspension or removal from the platform.</p>
                            <p><strong>4. License and Permits:</strong> You certify that all licenses, permits, and certifications provided are valid and up to date.</p>
                            <p><strong>5. Data Privacy:</strong> Your information will be handled in accordance with our Privacy Policy and applicable data protection laws.</p>
                            <p><strong>6. Termination:</strong> Either party may terminate this agreement with 30 days' written notice.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <label class="flex items-center gap-3">
                        <input type="checkbox" class="flex-shrink-0 w-5 h-5 rounded border-gray-300 text-emerald-500 focus:ring-emerald-500">
                        <span class="text-sm text-gray-700">I have read and agree to the Terms and Conditions and Privacy Policy</span>
                    </label>
                </div>
                <div class="">
                    <label class="flex items-center gap-3">
                        <input type="checkbox" class="flex-shrink-0 w-5 h-5 rounded border-gray-300 text-emerald-500 focus:ring-emerald-500">
                        <span class="text-sm text-gray-700">I certify that all information provided is true and accurate</span>
                    </label>
                </div>
            </div>
        </div>

        <!--Buttons-->
         <div class="flex justify-end mt-5 gap-4">
            <button class="bg-gray-300 font-semibold w-48 py-4 px-5 rounded-lg text-black hover:bg-gray-400" @click="cancelBtn">Cancel</button>
            <button v-if="currentStep > 1" class="bg-gray-300 font-semibold w-48 py-4 px-5 rounded-lg text-black hover:bg-gray-400" @click="backBtn">Back</button>
            <button class="bg-emerald-500 font-semibold w-48 py-4 px-5 rounded-lg text-white hover:bg-emerald-600" @click="nextBtn">Next</button>
        </div>
    </div>
    </main>
    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="../../../Public/js/User/form.js"></script>
</body>
</html>