<x-app-layout>
    @auth
        <form method="post" action="/add/">
            {{ csrf_field() }}
            <div class="flex ml-5">
                <h3 class="ml-6 text-2xl font-semibold mt-2 md:mt-0"> Question</h3>
                <textarea
                    class="ml-6 w-1/2 h-40 mr-5 mt-5 hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer"
                    name="question" id="" cols="30" rows="20"> {{ $question ?? '' }} </textarea>

                <livewire:add-tuition :tuition="$tuition" />
            </div>


            <div id="root" class="flex-none">
                <div class="answer w-1/2 mt-8 ml-5 ">

                    <h3 class="ml-6 mt-10 text-xl font-semibold mt-2 md:mt-0"> Your Answer</h3>
                    <div class="flex ml-6 font-semibold justify-between mt-5">
                        <div class="ml-32 text-xl font-semibold">
                            @{{ countDown }} Secs to complete exercise ...
                        </div>
                        <div class="text-xl font-semibold">@{{ Math.floor(countBeforeDeletion/10) }} Secs before
                            deletion...
                        </div>
                    </div>
                </div>


                <div class="w-1/2 mt-5 ml-5">

            <textarea v-on:keyup="inActiveTimer"
                      class="ml-6 w-full hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer"
                      v-model="myAnswer" id="" name="answer" cols="5" rows="15"></textarea>
                </div>

                <div class="w-1/2 ml-5 mt-5 flex justify-between items-center">
                    <div class="ml-10">
                        <button
                            type="button" @click="setupMyTimer"
                            class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                        >Start

                            <span v-if="firstTime" class="ml-1 w-10"></span>
                            <span v-else class="ml-1"> Again </span>

                        </button>
                    </div>
                    <div class="mr-10">
                        <button type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                            <span class="ml-1">Submit</span>
                        </button>

                    </div>
                </div>
            </div>
        </form>
    @endauth
    <script>
        new Vue({

            el: '#root',

            data: {

                countDown: 100,
                firstTime: true,
                timeBetweenStrokes: 0,
                countBeforeDeletion: 100,
                weAreActive: false,
                keyGapTimerActive: false,
                myAnswer: '',

            },

            methods: {

                setupMyTimer() {
                    this.weAreActive = true
                    this.countDownTimer()
                },

                countDownTimer() {
                    if (this.countDown > 0 && this.weAreActive == true) {
                        setTimeout(() => {
                            this.countDown -= 1
                            this.countDownTimer()
                        }, 1000)
                    } else
                        this.countDown = 0;

                },

                stopTimer() {
                    this.weAreActive = false
                },


                tester() {
                    alert('key pressed')
                },

                inActiveTimer() {
                    this.keyGapTimerActive = !(this.keyGapTimerActive)
                    this.timeBetweenStrokes = 0
                    if (this.weAreActive != false && this.keyGapTimerActive != false) {
                        setTimeout(() => {
                            this.timeBetweenStrokes += 1
                            this.anotherFunction()
                        }, 100)

                    }


                },

                anotherFunction() {
                    if (this.timeBetweenStrokes > 30 && this.countBeforeDeletion > 0) {
                        this.countBeforeDeletion -= 1
                        setTimeout(() => {
                            this.secondPart()
                        }, 100)

                    } else if (this.countBeforeDeletion <= 0) {
                        this.weAreActive = false
                        this.firstTime = false
                        this.myAnswer = ''
                    } else
                        this.secondPart()

                },

                secondPart() {
                    if (this.weAreActive != false && this.keyGapTimerActive != false) {
                        setTimeout(() => {
                            this.timeBetweenStrokes += 1
                            this.anotherFunction()
                        }, 100)

                    }

                },

            }


        })

    </script>

</x-app-layout>
