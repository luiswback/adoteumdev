<div
    x-data="splash()"
    x-init="initSplash()"
>
    <div x-ref="slidecontainer"
         class="absolute top-0 left-0 transform duration-1000 flex flex-col items-center justify-center min-h-screen w-full bg-gradient-to-tr from-primary-100 to-secondary-100">
        <div class="flex flex-col items-center justify-center space-y-3.5">
            <img class="w-15 h-15" src="{{asset('assets/mstile-144x144.png')}}" alt="">
            <span class="text-white text-xl">AdoteUm.Dev</span>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center min-h-screen w-full">
        <img x-ref="logo" class="w-15 h-15 transform scale-0 duration-1000"
             src="{{asset('assets/logo-adote-um-dev_v-doc.svg')}}" alt="">

    </div>
</div>

<script>
    function splash() {
        return {
            initSplash() {
                document.body.classList.add('overflow-hidden')
                this.animate(this.$refs.slidecontainer, ['left-full', 'skew-x-12'], 'add', 1000,
                    () => this.animate(this.$refs.slidecontainer, ['skew-x-12'], 'remove', 400,
                        () => this.animate(this.$refs.logo, ['scale-100'], 'add', 500)))
            },

            animate(element, classList, type, time, callback) {
                setTimeout(() => {
                    if (type === 'add') {
                        element.classList.add(...classList)
                    } else {
                        element.classList.remove(...classList)
                    }
                    if (callback) {
                        callback()
                    }
                }, time ?? 1000)
            }
        }
    }
</script>
