<x-app-layout>
    <div class="flex">
        <h3 class="ml-6 font-extrabold"> Question</h3>
        <textarea class="ml-6 w-1/2 h-24 mr-5 mt-5" name="" id="" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aperiam consectetur culpa deleniti eius illo labore molestiae nobis omnis placeat porro quisquam ratione repudiandae sapiente similique soluta, tempore unde!</textarea>

        <div class="ml-20 mt-5">Badges here</div>
        <div class="ml-20 mt-5">Badges</div>
    </div>

    <div id="root" class="flex-none">
        <div class="answer w-1/2 ">

            <h3 class="ml-6 mt-10 font-extrabold"> Your Answer</h3>
            <div class="flex ml-6 font-semibold justify-between">
                <div class="ml-32">
                    @{{ countDown }} Secs to complete exercise ...
                </div>
                <div>@{{ Math.floor(countBeforeDeletion/10)  }} before deletion...</div>
            </div>
        </div>


        <div class="w-1/2 mt-5">

            <textarea v-on:keyup="inActiveTimer" class="ml-6 w-full" name="" id="" cols="5" rows="15"></textarea>
        </div>

        <div class="w-1/2 ml-5 mt-5 flex justify-between items-center">
            <div class="ml-10">
                <button
                    type="button" @click="countDownTimer"
                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                >

                    <span class="ml-1"> Again </span>
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
    </div>

    <script>
        new Vue( {

            el:'#root',

            data: {

                countDown: 100,
                timeBetweenStrokes: 0,
                countBeforeDeletion: 300,
                weAreActive: false,
                keyGapTimerActive: false,

            },

            methods: {

                countDownTimer() {
                    this.weAreActive = true
                    if (this.countDown > 0) {
                        setTimeout(() => {
                            this.countDown -= 1
                            this.countDownTimer()
                        }, 1000)
                    }
                    else
                        this.countDown = 0;

                },


                tester() {
                    alert('key pressed')
                },

                inActiveTimer() {
                    this.keyGapTimerActive = !(this.keyGapTimerActive)
                    this.timeBetweenStrokes = 0
                    if (this.weAreActive != false && this.keyGapTimerActive != false ) {
                        setTimeout(() => {
                            this.timeBetweenStrokes += 1
                            this.anotherFunction()
                        }, 100)

                    }


                },

                anotherFunction() {
                    if (this.timeBetweenStrokes>30 && this.countBeforeDeletion>0) {
                        this.countBeforeDeletion -= 1
                        setTimeout(() => {
                            this.secondPart()
                        }, 100)

                    }
                    else
                        this.secondPart()

                },

                secondPart() {
                    if (this.weAreActive != false && this.keyGapTimerActive != false ) {
                        setTimeout(() => {
                            this.timeBetweenStrokes += 1
                            this.anotherFunction()
                        }, 100)

                    }

                },

            }


        } )

    </script>

</x-app-layout>
