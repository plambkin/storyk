

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>





<div id="root">

<h1> @{{  reverseMessage }} </h1>



</div>


<script>



    new Vue( {

        el:'#root',

        data: {
            message: 'Hello World'
        },

        computed: {

            reverseMessage() {
                return this.message.split('').reverse().join('');
            }
        }


    } )



</script>
