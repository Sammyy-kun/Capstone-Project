const app = Vue.createApp({
    data(){
        return{
           hero: {
                heading: 'Upgrade Your Home with ',
                headingHighlight: 'Ease',
                description: 'An easy-to-use online platform where users can browse and purchase home appliances, track orders, and conveniently request repair services in one integrated system.',
                image: '../../Public/pictures/iphone 15 copy.png',
                ctaText: 'Shop Now!',
                ctaLink: '#products'
           },
           whyUs:{
                title: '- OUR SERVICES',
                heading: 'Why Choose Our Platform',
                subHeading: 'We provide a simple, reliable, and all-in-one solution for purchasing home appliances and requesting professional repair services.',
                cards: [
                    {
                        id: 1,
                        icon: '../../Public/pictures/arrow_selector_tool_24dp_3B82F6_FILL0_wght400_GRAD0_opsz24.svg',
                        title: 'Easy & Convenient',
                        description: 'Browse appliances, place orders, and request repair services through a simple and user-friendly platform.'
                    },
                    {
                        id: 2,
                        icon: '../../Public/pictures/shield_lock_24dp_22C55E_FILL0_wght400_GRAD0_opsz24.svg',
                        title: 'Trusted Services',
                        description: 'We provide quality appliances and reliable repair services to ensure customer satisfaction and peace of mind.'
                    },
                    {
                        id: 3,
                        icon: '../../Public/pictures/stacks_24dp_A855F7_FILL0_wght400_GRAD0_opsz24.svg',
                        title: 'All-in-One Solution',
                        description: 'Manage purchases, track orders, and schedule appliance repairs in one integrated system.'
                    }
                ]
           },
           about: {
                title: '- ABOUT US',
                heading: 'Your Trusted Platform for Appliances and Repair Service',
                description: 'FixMart is a modern e-commerce platform designed to make buying and maintaining home appliances simple, reliable, and convenient. Our system brings together appliance sales and repair services in one easy-to-use platform, helping customers find quality products and dependable technicians in just a few clicks.',
                image: '../../Public/pictures/About us pic.png',
                features: [
                    'Online selling of various home appliances',
                    'Easy browsing and searching of products',
                    'Appliance repair and maintenance services'
                ],
                checkIcon: '../../Public/pictures/check_circle_24dp_83A9E6_FILL0_wght400_GRAD0_opsz24.svg',
                ctaText: 'Explore Now',
                arrowIcon: '../../Public/pictures/arrow_right_alt_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.svg'
           },
           testimonials: {
                title: '- TESTIMONIALS',
                heading: 'What Our Customers Say',
                subHeading: 'Hear from our satisfied customers about their experience with FixMart',
                items: [
                    {
                        id: 1,
                        title: 'Very easy this was to integrate',
                        quote: 'If you care for your time, I hands down would go with this.',
                        name: 'Bonnie Green',
                        position: 'Developer at Open AI',
                        avatar: 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png'
                    },
                    {
                        id: 2,
                        title: 'Solid foundation for any project',
                        quote: 'Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!',
                        name: 'Roberta Casas',
                        position: 'Lead designer at Dropbox',
                        avatar: 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png'
                    },
                    {
                        id: 3,
                        title: 'Mindblowing workflow',
                        quote: 'Aesthetically, the well designed components are beautiful and will undoubtedly level up your app.',
                        name: 'Jese Leos',
                        position: 'Software Engineer at Facebook',
                        avatar: 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png'
                    },
                    {
                        id: 4,
                        title: 'Efficient Collaborating',
                        quote: 'You have many examples that can be used to create a fast prototype for your team.',
                        name: 'Joseph McFall',
                        position: 'CTO at Google',
                        avatar: 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'
                    }
                ]
           }
        }
    }
})
app.mount("#app")