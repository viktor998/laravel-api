const { default: Axios } = require('axios');

require('./bootstrap');

let app = new Vue({
    el: '#root',
    data:{
        search: '',
        users: [],
    },
    created(){
        Axios.get('http://localhost:8000/api/users').then((response) =>{
            this.users = response.data.response;
        });
        
    },

    computed: {
        filteredList() {
          return this.users.filter(user => {
            return user.name.toLowerCase().includes(this.search.toLowerCase())
          })
        }
      }
});
