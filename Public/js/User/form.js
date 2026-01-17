const app = Vue.createApp({
    data(){
        return{
            currentStep: 1
        } 
    },
    methods:{
       nextBtn(){
            if(this.currentStep < 5) {
                this.currentStep++;
            }
       },

       backBtn(){
            if(this.currentStep > 1) {
                this.currentStep--;
            }
       },

       cancelBtn(){
            this.currentStep = 1;
       }
    }
})
app.mount('#app')