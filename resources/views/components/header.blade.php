<div class="w-full max-w-[1440px] h-[32.33px] flex justify-between items-center mx-auto px-[100px] pt-8">
    <!-- LOGO -->
    <div class="flex items-center gap-[7px]">
        <div data-svg-wrapper class="relative">
            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_24293)">
                    <path d="M32.2891 17.3792H26.5139C21.4691 17.3792 17.3796 21.4687 17.3796 26.5134V32.2886C25.3417 31.6982 31.6987 25.3412 32.2891 17.3792Z" fill="#016C9E"/>
                    <path d="M14.9545 32.2886V26.5134C14.9545 21.4687 10.865 17.3792 5.82029 17.3792H0.0450439C0.6354 25.3412 6.99246 31.6982 14.9545 32.2886Z" fill="#016C9E"/>
                </g>
            </svg>
        </div>
        <div class="text-white text-2xl font-bold font-['Inter Tight'] leading-7">
            Shift.io
        </div>
    </div>

    <div class="flex items-center gap-12">
        <div class="text-white text-base font-medium font-['Switzer'] leading-snug">Category A</div>
        <div class="text-white text-base font-medium font-['Switzer'] leading-snug">Category B</div>
        <div class="text-white text-base font-medium font-['Switzer'] leading-snug">Category C</div>
        <div class="text-white text-base font-medium font-['Switzer'] leading-snug">Category D</div>
    </div>

    <div class="flex items-center gap-4">
        <flux:button
            x-on:click="$store.flux.toggle()"
            variant="subtle"
            aria-label="Alternar tema"
            class="transition-colors duration-300"
        >
            <div x-show="!$store.flux.dark" class="flex items-center">
                <flux:icon.sun class="text-yellow-500 size-6" />
            </div>
            <div x-show="$store.flux.dark" class="flex items-center">
                <flux:icon.moon class="text-white size-6" />
            </div>
        </flux:button>

        <div x-data="newsletter()">
            <button x-on:click="showModal = true" class="w-[114px] h-[40px] px-6 gap-2 rounded-full font-general-sans font-medium text-[14px] leading-[20px] text-black bg-white">
                Subscribe
            </button>

            <div x-show="showModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" style="display: none;">
                <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg w-96">
                    <h2 class="text-2xl font-bold mb-4 text-black dark:text-white">Inscreva-se na Newsletter</h2>
                    <input type="text" placeholder="Seu nome (opcional)" x-model="name" class="w-full border rounded p-2 mb-3" />
                    <input type="email" placeholder="Seu e-mail" x-model="email" class="w-full border rounded p-2 mb-3" />
                    <div class="flex justify-end">
                        <button x-on:click="closeModal" class="mr-2 px-4 py-2 border rounded">Cancelar</button>
                        <button x-on:click="subscribe" class="px-4 py-2 bg-blue-500 text-white rounded">
                            Inscrever
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div class="w-full flex justify-center">
    <div class="w-[1240px] h-[32.33px] flex justify-between items-center">
        <div class="flex items-center gap-[3px]">
            <img src="{{ asset('Logo.png') }}" alt="Logo" class="w-[50px] h-[32.33px] object-contain" />
            <div class="text-white font-bold font-['Inter Tight'] text-[24px] leading-[28.01px]">
                Shift.io
            </div>
        </div>

        <div class="flex items-center gap-12">
            <div class="text-white text-base font-medium font-['Switzer'] leading-snug">Category A</div>
            <div class="text-white text-base font-medium font-['Switzer'] leading-snug">Category B</div>
            <div class="text-white text-base font-medium font-['Switzer'] leading-snug">Category C</div>
            <div class="text-white text-base font-medium font-['Switzer'] leading-snug">Category D</div>
        </div>

        <div class="flex items-center gap-4">
            <!-- Botão de Alternância de Tema -->
--}}{{--            <flux:button--}}{{--
--}}{{--                x-on:click="$store.flux.toggle()"--}}{{--
--}}{{--                variant="subtle"--}}{{--
--}}{{--                aria-label="Alternar tema"--}}{{--
--}}{{--                class="transition-colors duration-300"--}}{{--
--}}{{--            >--}}{{--
--}}{{--                <div x-show="!$store.flux.dark" class="flex items-center">--}}{{--
--}}{{--                    <flux:icon.sun class="text-yellow-500 size-6" />--}}{{--
--}}{{--                </div>--}}{{--
--}}{{--                <div x-show="$store.flux.dark" class="flex items-center">--}}{{--
--}}{{--                    <flux:icon.moon class="text-white size-6" />--}}{{--
--}}{{--                </div>--}}{{--
--}}{{--            </flux:button>--}}{{--

            <flux:button
                x-on:click="$store.theme.toggle()"
                variant="subtle"
                aria-label="Alternar tema"
                class="transition-colors duration-300"
            >
                <div x-show="!$store.theme.dark" class="flex items-center">
                    <flux:icon.sun class="text-yellow-500 size-6" />
                </div>
                <div x-show="$store.theme.dark" class="flex items-center">
                    <flux:icon.moon class="text-white size-6" />
                </div>
            </flux:button>


            <div x-data="newsletter()">
                <button x-on:click="showModal = true" class="w-[114px] h-[40px] px-6 gap-2 rounded-full font-general-sans font-medium text-[14px] leading-[20px] text-black bg-white">
                    Subscribe
                </button>

            </div>
        </div>
    </div>
</div>--}}






<script>
    function newsletter() {
        return {
            showModal: false,
            email: '',
            name: '',
            subscribe() {
                // Verifica se o e-mail foi informado
                if (!this.email) {
                    alert('Por favor, informe seu e-mail.');
                    return;
                }
                // URL do endpoint de subscribe, renderizada pelo Blade
                let url = "{{ route('subscribe') }}";

                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        email: this.email,
                        name: this.name
                    })
                })
                    .then(response => {
                        return response.json().then(data => {
                            if (!response.ok) {
                                // Lança erro com a mensagem retornada pelo back-end (se houver)
                                throw new Error(data.message || 'Erro desconhecido');
                            }
                            return data;
                        });
                    })
                    .then(data => {
                        alert(data.message);
                        this.reset();
                    })
                    .catch(error => {
                        console.error('Erro:', error);
                        alert('Ocorreu um erro ao enviar o e-mail: ' + error.message);
                    });
            },
            closeModal() {
                this.reset();
            },
            reset() {
                this.email = '';
                this.name = '';
                this.showModal = false;
            }
        }
    }
</script>
