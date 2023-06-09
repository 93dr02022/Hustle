<main class="w-full" x-data="window.MainAccountSettingsAlpine">
    <div class="sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                {{-- Sidebar --}}
                <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside>

                {{-- Section content --}}
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">

                    {{-- Form --}}
                    <div class="py-6 px-4 sm:p-6 lg:pb-8 h-[calc(100%-80px)]">

                        {{-- Section header --}}
                        <div class="mb-14">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">{{ __('messages.t_account_settings') }}</h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">{{ __('messages.t_account_settings_subtitle') }}</p>
                        </div>
                        
                        {{-- Section content --}}
                        <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-8">

                            {{-- Username --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input 
                                    label="{{ __('messages.t_username') }}" 
                                    placeholder="{{ __('messages.t_enter_username') }}" 
                                    model="username"
                                    icon="account" />
                            </div>

                            {{-- E-mail address --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input 
                                    label="{{ __('messages.t_email_address') }}" 
                                    placeholder="{{ __('messages.t_enter_email_address') }}" 
                                    model="email"
                                    type="email"
                                    icon="at" />
                            </div>

                            {{-- Firstname --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input 
                                    label="{{ __('First name') }}" 
                                    placeholder="{{ __('Enter first name') }}" 
                                    model="firstname"
                                    icon="account" />
                            </div>

                            {{-- Lastname --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input 
                                    label="{{ __('Last name') }}" 
                                    placeholder="{{ __('Enter last name') }}" 
                                    model="lastname"
                                    icon="account" />
                            </div>
                        </div>

                        {{-- Contact information  --}}
                        <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100 border-b mb-10 py-3">
                            {{ __('Contact Information') }}
                        </h2>

                        <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">
                            {{-- Country --}}
                            <div class="col-span-12 md:col-span-6">
                                <div class="w-full" wire:ignore>
                                    <x-forms.select2
                                        :label="__('messages.t_country')"
                                        :placeholder="__('messages.t_choose_country')"
                                        model="country"
                                        :options="$countries"
                                        :isDefer="false"
                                        :isAssociative="false"
                                        :componentId="$this->id"
                                        value="id"
                                        text="name" />
                                </div>
                            </div>

                            {{-- States --}}
                            <div class="col-span-12 md:col-span-6">
                                <div class="w-full">
                                    <label class="text-[0.8125rem] font-medium block mb-2 {{ $errors->first('state') ? 'text-red-600 dark:text-red-500' : 'text-gray-700 dark:text-white' }}">States</label>
                                    <select wire:model="state" class="form-ctr py-3.5">
                                        @foreach ($states as $state)
                                            <option value="{{ $state['id'] }}">{{ $state['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- City --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input 
                                    label="{{ __('City') }}" 
                                    placeholder="{{ __('city') }}" 
                                    model="city"
                                    icon="account" />
                            </div>

                            {{-- Post code --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input 
                                    label="{{ __('Postcode') }}" 
                                    placeholder="{{ __('postcode') }}" 
                                    model="postcode"
                                    icon="account" />
                            </div>

                            {{-- Address --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input 
                                    label="{{ __('Address') }}" 
                                    placeholder="{{ __('Address') }}" 
                                    model="address"
                                    icon="account" />
                            </div>

                            {{-- Local Governemt --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input 
                                    label="{{ __('local Government zone') }}" 
                                    placeholder="{{ __('local Government zone') }}" 
                                    model="localGovernmentZone"
                                    icon="account" />
                            </div>
                        </div>
                    </div>


                    {{-- Actions --}}
                    <div class="py-4 px-4 flex justify-end sm:px-6 bg-gray-50 dark:bg-zinc-700">
                        <x-forms.button @click="updateAccount" action="update" :usewire="false" text="{{ __('messages.t_update') }}"  />
                        <button class="hidden" id="updateAccountSubmitButton" x-ref="modalButton"></button>
                    </div>                    

                </div>

                {{-- Password confirmation button --}}
                <x-forms.modal placement="top" size="max-w-md" id="cofirmModal" target="updateAccountSubmitButton" uid="confirmPasswordForUpdate">
                    <x-slot:title>
                        <div>Enter Passsword to continue</div>
                    </x-slot>

                    <form @submit.prevent="sendForm">
                        <x-slot:content>
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input 
                                    label="{{ __('Password') }}" 
                                    placeholder="{{ __('Enter Password') }}" 
                                    model="password"
                                    current-password
                                    type="password"
                                    required
                                    icon="key" />
                            </div>
                        </x-slot>

                        <x-slot:footer>
                            <div>
                                <button class="btn-purple" @click="sendForm" modal-close="myModal">Proceed</button>
                            </div>
                        </x-slot>
                    </form>
                </x-forms.modal>
            </div>
        </div>
    </div>
</main>

@push('scripts')
    <script>
        function MainAccountSettingsAlpine() {
            return {
                hasPassword: {{ auth()->user()->password ? true : false }},

                updateAccount() {
                    if(!this.hasPassword) {
                        this.sendForm();
                        return
                    }

                    this.$refs.modalButton.click()
                },

                async sendForm() {
                    window.confirmPasswordForUpdate.close()
                    await @this.update()
                }
            }
        }

        window.MainAccountSettingsAlpine = MainAccountSettingsAlpine()
    </script>
@endpush