

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>


<div id="root">

    <input type="text" id="input" v-model="message">

    <p>The value of the message is @{{ message }}</p>


</div>


<script>



    new Vue( {

        el:'#root',

        data: {
            message: 'Hello World'
        }


    } )



</script>
