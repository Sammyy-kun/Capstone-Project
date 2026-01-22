const app = Vue.createApp({
    data(){
        return{
            sidebarOpen: true,
            user: {
                name: 'Admin',
                image: '../../../Public/pictures/profile pic.jpg'
            },
            menuGroups: [
                {
                    title: 'Main',
                    isOpen: true,
                    items: [
                        { name: 'Dashboard', icon: 'dashboard', link:'../Dashboard/dashboard.php', active: false }
                    ]
                },
                {
                    title: 'Users',
                    isOpen: true,
                    items: [
                        { name: 'Users', icon: 'users', link: '../Accounts/users.php', active: false },
                        { name: 'Owners', icon: 'owners', link: '../Accounts/owners.php', active: false }
                    ]
                },
                {
                    title: 'Business',
                    isOpen: true,
                    items: [
                        { name: 'Business Request', icon: 'business', link: '../Business/application.php', active: true }
                    ]
                },
                {
                    title: 'System',
                    isOpen: true,
                    items: [
                        { name: 'Reports', icon: 'reports', link: '#', active: false },
                        { name: 'Settings', icon: 'settings', link: '#', active: false },
                        { name: 'Logs', icon: 'logs', link: '../Logs/logs.php', active: false }
                    ]
                }
            ],
            logoutLink: { name: 'Logout', icon: 'logout', link: '../../Auth/logout.php' },

            ownersInfo:{
                firstname: 'Van Keymel',
                lastname: 'Paelma',
                email: 'vankeymelpaelma@email.com',
                mobileNo: '+63 912 345 6789',
                idType: 'PWD ID',
                governmentId: 'PWD-2024-12345',
                governmentIdImage: '../../../Public/pictures/Philippine_generic_PWD_ID_sample.svg'
            },
            businessInfo:{
                businessName: 'FixMart Services',
                businessType: 'Repair Shop',
                businessAddress: '123 Main Street, Quezon City, Metro Manila',
                businessEmail: 'info@fixmartservices.com',
                businessContactNo: '+63 2 8123 4567',
                businessDescription: 'Professional repair services for electronics and appliances',
                yearsInOperation: '5 years'
            },
            productServices:{
                serviceDescription: 'Electronics repair, appliance maintenance, and installation services',
                serviceArea: 'Metro Manila and nearby provinces',
                averageServiceFee: '₱500 - ₱2,000'
            },
            businessLegitimacy:{
                businessPermit: 'BP-2021-12345',
                businessPermitImage: '../../../Public/pictures/BFAR-Certificate-of-Registration-x1.webp',
                dtiRegistration: 'DTI-NCR-2021-98765',
                dtiRegistrationImage: '../../../Public/pictures/Sample-DTI-Permit.webp',
                taxIndetificationNumber: '123-456-789-000',
                taxIdetificationImage: '../../../Public/pictures/tin-id-card-sample.webp'
            },
            showImageModal: false,
            currentImage: ''
        }
    },
    methods: {
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen;
        },
        toggleMenu(index) {
            this.menuGroups[index].isOpen = !this.menuGroups[index].isOpen;
        },
        getIcon(iconName) {
            const icons = {
                dashboard: 'M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17',
                users: 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
                owners: 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                business: 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                reports: 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                settings: 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z',
                logs: 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                logout: 'M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1'
            };
            return icons[iconName] || '';
        },
        openImageModal(imageSrc) {
            this.currentImage = imageSrc;
            this.showImageModal = true;
        },
        closeImageModal() {
            this.showImageModal = false;
            this.currentImage = '';
        }
    }
})
app.mount('#app')