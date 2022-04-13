
var ProfileApp = new Vue({
    el:'.form-profile',
    data:{
        phone: '',
        show_password: false
    },
    methods:{
        valor(){
            alert('Clicou')
        },
        // ClickShow: function(event){
        //     if(event){
        //        this.show_password = true
        //     }
        //     this.show_password = false
        // }
    }
})