

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>


<div id="root">

    <input type="text" v-model="counter">

<h1>The counter is now @{{ counter }}</h1>


    <button v-on:click="stopCounter()">Stop Counter</button>

    <button v-on:click="startCounter()">Start Counter</button>




</div>


<script>



    new Vue( {

        el:'#root',

        data: {
                counter: 45
        },

        methods: {

            startCounter() {
                this.count--;
            },

            stopCounter() {
                alert('stop pressed');
            }
        }


    } )



</script>
