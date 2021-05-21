<div>
    <div x-data="app()" x-cloak>
        <div class="max-w-3xl mx-auto px-4 py-10">

            <div x-show.transition="step === 'complete'">
                <div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
                    <div>
                        <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" /></svg>

                        <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Registration
                            Success</h2>

                        <div class="text-gray-600 mb-8">
                            Thank you. We have sent you an email to demo@demo.test. Please click the
                            link in the message to activate your account.
                        </div>

                        <button @click="step = 1"
                            class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Back
                            to home</button>
                    </div>
                </div>
            </div>

            <div x-show.transition="step != 'complete'">
                {{-- Top Navigation --}}
                <div class="border-b-2 py-4">
                    <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
                        x-text="`Step: ${step} of 3`"></div>
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex-1">
                            <div x-show="step === 1">
                                <div class="text-lg font-bold text-gray-700 leading-tight">Recherche Propriétaire
                                </div>
                            </div>

                            <div x-show="step === 2">
                                <div class="text-lg font-bold text-gray-700 leading-tight">Choisir Propriété
                                </div>
                            </div>

                            <div x-show="step === 3">
                                <div class="text-lg font-bold text-gray-700 leading-tight">Confirmation</div>
                            </div>
                        </div>

                        <div class="flex items-center md:w-64">
                            <div class="w-full bg-white rounded-full mr-2">
                                <div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white"
                                    :style="'width: '+ parseInt(step / 3 * 100) +'%'"></div>
                            </div>
                            <div class="text-xs w-10 text-gray-600" x-text="parseInt(step / 3 * 100) +'%'"></div>
                        </div>
                    </div>
                </div>
                {{-- /Top Navigation --}}

                {{-- <!-- Step Content --> --}}
                <div class="py-10">
                    {{-- First Step --}}
                    <div x-show.transition.in="step === 1">
                        <div x-show="doneChoisir == false">
                            @livewire('citoyens.search')
                        </div>
                        <div x-show="doneChoisir">
                            <button @click="doneChoisir = false" wire:click="reset_proprietaire">back</button>
                            @livewire('citoyens.card', ['citoyen_id' => $id_proprietaire], key($id_proprietaire))
                        </div>
                    </div>

                    {{-- /First Step --}}

                    {{-- Second Step --}}

                    <div x-show.transition.in="step === 2">
                        @isset($id_proprietaire)
                        @livewire('proprietes.choisir', ['id_proprietaire' => $id_proprietaire], key($id_proprietaire))
                        @endisset

                    </div>

                    {{-- /Second Step --}}
                    {{-- Third Step --}}

                    <div x-show.transition.in="step === 3">

                        {{-- @livewire('operations.confirmer', ['user' => $user], key($user->id)) --}}

                    </div>

                    {{-- /Third Step --}}

                </div>
                {{-- <!-- / Step Content --> --}}
            </div>
        </div>

        {{-- <!-- Bottom Navigation --> --}}
        <div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md" x-show="step != 'complete'">
            <div class="max-w-3xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="w-1/2">
                        <button x-show="step > 1" @click="step--"
                            class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Previous</button>
                    </div>

                    <div class="w-1/2 text-right">
                        <button x-show="step == 1" @click="step++" x-bind:disabled="!doneChoisir"
                            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium disabled:opacity-50">
                            Next
                        </button>
                        <button x-show="step == 2" @click="step++"
                            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                            Next
                        </button>

                        <button @click="step = 'complete'" x-show="step === 3"
                            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Complete</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc --> --}}
    </div>



    <script>
        function app() {
            return {
                step: 1,
                doneChoisir: false,
                passwordStrengthText: '',
                togglePassword: false,
                password: '',
                gender: 'Male',

                checkPasswordStrength() {
                    var strongRegex = new RegExp(
                        "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                    var mediumRegex = new RegExp(
                        "^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})"
                    );

                    let value = this.password;

                    if (strongRegex.test(value)) {
                        this.passwordStrengthText = "Strong password";
                    } else if (mediumRegex.test(value)) {
                        this.passwordStrengthText = "Could be stronger";
                    } else {
                        this.passwordStrengthText = "Too weak";
                    }
                }
            }
        }

    </script>
</div>
