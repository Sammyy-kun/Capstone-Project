const app = Vue.createApp({
    data(){
        return{
             //Sidebar
            sidebarOpen: true,
            cartOpen: false,
            cart: [],
            user: {
                name: 'Van Keymel',
                image: '../../../Public/pictures/profile pic.jpg'
            },
            menuGroups: [
                {
                    title: 'Main',
                    isOpen: true,
                    items: [
                        { name: 'Dashboard', icon: 'dashboard', link: 'dashboard.php', }
                    ]
                },
                {
                    title: 'Shop',
                    isOpen: true,
                    items: [
                        { name: 'My Orders', icon: 'orders', link: 'order.php', active: true },
                        { name: 'Wishlist', icon: 'wishlist', link: '#' }
                    ]
                },
                {
                    title: 'Repair Services',
                    isOpen: true,
                    items: [
                        { name: 'Request Repair', icon: 'repair', link: '../Repair/create.php' },
                        { name: 'Repair History', icon: 'history', link: '../Repair/history.php' }
                    ]
                },
                {
                    title: 'Account',
                    isOpen: true,
                    items: [
                        { name: 'Profile', icon: 'profile', link: '#' },
                        { name: 'Security', icon: 'security', link: '#' }
                    ]
                },
                {
                    title: 'Other',
                    isOpen: true,
                    items: [
                        { name: 'Support', icon: 'support', link: '#' },
                        { name: 'Logout', icon: 'logout', link: '#' }
                    ]
                },


            ]
        }
    },
    computed: {
        cartItemCount() {
            return this.cart.reduce((total, item) => total + item.quantity, 0);
        },
        selectedItemCount() {
            return this.cart.filter(item => item.selected).reduce((total, item) => total + item.quantity, 0);
        },
        cartTotal() {
            return this.cart.filter(item => item.selected).reduce((total, item) => total + (item.price * item.quantity), 0);
        },
        allSelected() {
            return this.cart.length > 0 && this.cart.every(item => item.selected);
        }
    },
    methods:{
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen;
        },
        toggleCart() {
            this.cartOpen = !this.cartOpen;
        },
        removeFromCart(index) {
            this.cart.splice(index, 1);
        },
        updateQuantity(item, change) {
            const newQuantity = item.quantity + change;
            if (newQuantity > 0 && newQuantity <= item.stock) {
                item.quantity = newQuantity;
            }
        },
        clearCart() {
            if (confirm('Are you sure you want to clear your cart?')) {
                this.cart = [];
            }
        },
        toggleItemSelection(item) {
            item.selected = !item.selected;
        },
        toggleAllSelection() {
            const newState = !this.allSelected;
            this.cart.forEach(item => {
                item.selected = newState;
            });
        },
        proceedToCheckout() {
            const selectedItems = this.cart.filter(item => item.selected);
            if (selectedItems.length === 0) {
                alert('Please select at least one item to checkout');
                return;
            }
            // Here you can add checkout logic
            console.log('Proceeding to checkout with:', selectedItems);
            alert(`Proceeding to checkout with ${selectedItems.length} item(s)`);
        },
        toggleMenu(index) {
            this.menuGroups[index].isOpen = !this.menuGroups[index].isOpen;
        },
        handleImageError(event) {
            event.target.src = 'https://via.placeholder.com/300x300/f3f4f6/6b7280?text=No+Image';
        },
        getIcon(iconName) {
            const icons = {
                dashboard: 'M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17',
                orders: 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z',
                wishlist: 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                repair: 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065zM15 12a3 3 0 11-6 0 3 3 0 016 0z',
                history: 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                profile: 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                security: 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z',
                support: 'M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                logout: 'M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1'
            };
            return icons[iconName] || '';
        }
    }
})
app.mount('#app')