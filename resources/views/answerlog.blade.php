<x-app-layout>
    @auth
        {{ csrf_field() }}


        @foreach($submissions as $submission)
            <div class="flex justify-between items-center mr-10">
                <h3 class="ml-6 text-xl font-semibold mt-2 md:mt-0"> Question</h3>
                <textarea
                    class="ml-6 w-1/2 h-40 mr-5 mt-5 hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer"
                    name="question" id="" cols="30" rows="20"> {{ $submission->question }} </textarea>


            </div>


            <div class="flex justify-between items-center">
                <h3 class="ml-6 text-xl font-semibold mt-2 md:mt-0"> Answer </h3>
                <textarea
                    class="ml-6 w-1/2 h-40 mr-5 mt-5 hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer"
                    name="question" id="" cols="30" rows="20"> {{ $submission->answer }} </textarea>

                <div class="text-xl font-semibold">Time</div>

                <div class="mr-10 text-xl">checkbox</div>

            </div>

            <div class="flex justify-between ml-10 mr-10 mt-10 mb-10">
                {{ $submissions->links() }}
            </div>
        @endforeach


    @endauth

</x-app-layout>
