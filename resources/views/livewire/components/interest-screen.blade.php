<div class="flex flex-col min-h-screen items-center w-full p-4">
    <div class="flex flex-col items-center justify-center space-y-2">
        <img class="inline-block h-20 w-20 rounded-full ring-2 ring-white"
             src="{{$user['profile']['avatar']}}" alt="">
        <h2 class="text-base font-semibold text-gray-900">{{$user['name'] . ', complete seus interesses.'}}</h2>
    </div>
    <form class="w-full">
       <x-start-form :categories="$categories"/>
    </form>
</div>



