<div>
    <div
        class="flex flex-col items-center justify-center min-h-screen w-full bg-gradient-to-tr from-primary-100 to-secondary-100">

        <div class="flex flex-1 flex-col items-center justify-end space-x-2 text-3xl px-10">

            <div class="flex flex-row items-center justify-center space-x-2 text-3xl p-4 mb-24">
                <img class="w-12 h-12" src="{{asset('assets/mstile-144x144.png')}}" alt="">
                <span class="text-white font-bold">AdoteUm.Dev</span>
            </div>

            <p class="text-center text-white text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusantium atque beatae consectetur corporis
                deleniti deserunt, dignissimos eveniet neque nisi odio optio perspiciatis provident quidem quo
                repellendus saepe temporibus ullam vero?
            </p>
            <button wire:click="loginWithGithub"
                class="flex flex-row items-center justify-center space-x-2 bg-white p-4 text-grey-100 mt-8 w-full text-sm rounded-full font-bold transform duration-150 active:scale-90">

                <img src="{{asset('assets/github-mark.svg')}}" alt="" height="25" width="25">
                <span>Entrar como Desenvolvedor</span>
            </button>
            <button wire:click="loginWithGoogle"
                class="flex flex-row items-center justify-center space-x-2 bg-white p-4 text-grey-100 mt-4 w-full text-sm rounded-full mb-8 font-bold transform duration-150 active:scale-90">
                <img src="{{asset('assets/logo-google.png')}}" alt="" height="25" width="25">
                <span>Entrar como Recrutador</span>
            </button>
        </div>
    </div>
</div>
