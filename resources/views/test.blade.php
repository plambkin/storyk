<x-app-layout>
    <div class="flex">
        <h3 class="ml-6 font-extrabold"> Question</h3>
        <textarea class="ml-6 w-1/2 h-24 mr-5 mt-5" name="" id="" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aperiam consectetur culpa deleniti eius illo labore molestiae nobis omnis placeat porro quisquam ratione repudiandae sapiente similique soluta, tempore unde!</textarea>

        <div class="ml-20 mt-5">Badges here</div>
        <div class="ml-20 mt-5">Badges</div>
    </div>


    <div id="root" class="answer w-1/2 ">

        <h3 class="ml-6 mt-10 font-extrabold"> Your Answer</h3>
        <div class="flex ml-6 font-semibold justify-between">
            <div class="ml-32">
                <ul>
                    <li v-for="name in names" v-text="name"></li>

                </ul>


                <input type="text" v-model="newName">

                <button  v-on:click="addName">Add Name</button>
                Timer goes here
            </div>
            <div>Timer before deletion</div>
        </div>
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

    <div class="w-1/2 mt-5">

        <textarea class="ml-6 w-full" name="" id="" cols="5" rows="15"></textarea>
    </div>

    <div class="w-1/2 ml-5 mt-5 flex justify-between items-center">
        <div class="ml-10">
            <button
                type="button"
                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"

            <span class="ml-1">Again</span>
            </button>
        </div>
        <div class="mr-10">
            <button
                type="button"
                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
            >

                <span class="ml-1">submit</span>
            </button>
        </div>
    </div>


</x-app-layout>
