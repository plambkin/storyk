

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>





<div id="root">

    <ul>
        <li v-for="name in names" v-text="name"></li>

    </ul>


    <input type="text" v-model="newName">

    <button  v-on:click="addName">Add Name</button>



</div>


<script>



    new Vue( {

        el:'#root',

        data: {
            names: ['Peter','John','Mary'],

            newName: '',
        },

        methods: {

            addName() {

                this.names.push(this.newName);

                this.newName = '';

            }
        }


    } )



</script>
