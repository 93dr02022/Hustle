<div class="w-full" x-data="SellerWithdrawalSettings">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Heading --}}
    <div class="px-4 mx-auto mb-16 max-w-7xl sm:px-6 md:px-12">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">

                <div class="flex-1 min-w-0">

                    {{-- Section heading --}}
                    <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        @lang('messages.t_withdrawal_settings')
                    </h2>

                    {{-- Breadcrumbs --}}
                    <div class="flex flex-col mt-3 sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                            {{-- Main home --}}
                            <li>
                                <div class="flex items-center">
                                    <a href="{{ url('/') }}" class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_home')
                                    </a>
                                </div>
                            </li>

                            {{-- My dashboard --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ url('seller/home') }}"
                                        class="text-sm font-medium text-gray-700 ltr:ml-1 rtl:mr-1 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_my_dashboard')
                                    </a>
                                </div>
                            </li>

                            {{-- Payouts --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_payouts')
                                    </span>
                                </div>
                            </li>

                        </ol>
                    </div>

                </div>

                {{-- Actions --}}
                <div class="flex justify-between mt-5 lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">

                    {{-- Make withdrawal --}}
                    <span class="block lg:ltr:ml-3 lg:rtl:pr-3">
                        <a href="{{ url('seller/withdrawals/create') }}"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-500 rounded-sm shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-600 hover:bg-gray-50 dark:hover:bg-zinc-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-primary-600 dark:focus:ring-offset-zinc-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500 ltr:mr-2 rtl:ml-2 dark:text-zinc-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            {{ __('messages.t_make_withdrawal') }}
                        </a>
                    </span>

                    {{-- Payouts History --}}
                    <span class="block lg:ltr:ml-3 lg:rtl:pr-3">
                        <a href="{{ url('seller/withdrawals') }}"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-500 rounded-sm shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-600 hover:bg-gray-50 dark:hover:bg-zinc-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-primary-600 dark:focus:ring-offset-zinc-500">
                            <svg class="w-5 h-5 text-gray-500 ltr:mr-2 rtl:ml-2 dark:text-zinc-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            {{ __('messages.t_payouts_history') }}
                        </a>
                    </span>

                </div>

            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-12">
        <main class="px-4 xs:px-6 py-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-zinc-800 dark:border-zinc-800 sm:py-12 sm:px-10">
            {{-- Account type selection --}}
            <div class="flex mb-7">
                <ul class="list-none flex flex-nowrap items-center bg-[#F8FAFD] p-1 rounded">
                    <li class="flex items-center">
                        <button @click="accountType = 'personal'" :class="{ 'active': accountType == 'personal' }"
                            class="rounded text-sm px-4 py-2.5 [&.active]:bg-[#3B5EF7] bg-transparent [&.active]:shadow-md [&.active]:text-white">
                            Personal
                        </button>
                    </li>
                    <li class="flex items-center">
                        <button @click="accountType = 'business'" :class="{ 'active': accountType == 'business' }"
                            class="rounded text-sm px-4 py-2.5 [&.active]:bg-[#3B5EF7] bg-transparent [&.active]:shadow-md [&.active]:text-white">
                            Business
                        </button>
                    </li>
                </ul>
            </div>

            {{-- personal account --}}
            <form x-show="accountType == 'personal'" x-cloak wire:submit.prevent="updatePersonal" class="grid grid-cols-1 md:grid-cols-2 md:gap-x-6 gap-y-5">

                {{-- Bank name --}}
                <x-forms.text-input :label="__('Account Number')" placeholder="" model="personalAccountNumber" required
                    svg_icon='<svg class="w-5 h-5 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M894 462c30.9 0 43.8-39.7 18.7-58L530.8 126.2a31.81 31.81 0 0 0-37.6 0L111.3 404c-25.1 18.2-12.2 58 18.8 58H192v374h-72c-4.4 0-8 3.6-8 8v52c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-52c0-4.4-3.6-8-8-8h-72V462h62zM381 836H264V462h117v374zm189 0H453V462h117v374zm190 0H642V462h118v374z"></path></svg>' />

                {{-- Bank account Number --}}
                <div class="w-full" wire:ignore>
                    <x-forms.select2 :label="__('Select Your bank')" :placeholder="__('Select Bank')" model="personalBank" :options="$banks" :isDefer="true" :isAssociative="false" :componentId="$this->id" value="code" :selected="$personalBank"
                        text="name" />
                </div>

                {{-- account name --}}
                <x-forms.text-input :label="__('Account Name')" placeholder="" model="personalAccountName" readonly
                    svg_icon='<svg class="w-5 h-5 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M894 462c30.9 0 43.8-39.7 18.7-58L530.8 126.2a31.81 31.81 0 0 0-37.6 0L111.3 404c-25.1 18.2-12.2 58 18.8 58H192v374h-72c-4.4 0-8 3.6-8 8v52c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-52c0-4.4-3.6-8-8-8h-72V462h62zM381 836H264V462h117v374zm189 0H453V462h117v374zm190 0H642V462h118v374z"></path></svg>' />

                {{-- submit button --}}
                <div class="col-span-2">
                    <x-forms.button action="updatePersonal" :text="__('Update Account')" :block="true" type="submit" />
                </div>
            </form>

            {{-- business account --}}
            <form x-show="accountType == 'business'" x-cloak wire:submit.prevent="update" class="grid grid-cols-1 md:grid-cols-2 md:gap-x-6 gap-y-5">

                {{-- Bank name --}}
                <x-forms.text-input :label="__('Account Number')" placeholder="" model="businessAccountNumber" required
                    svg_icon='<svg class="w-5 h-5 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M894 462c30.9 0 43.8-39.7 18.7-58L530.8 126.2a31.81 31.81 0 0 0-37.6 0L111.3 404c-25.1 18.2-12.2 58 18.8 58H192v374h-72c-4.4 0-8 3.6-8 8v52c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-52c0-4.4-3.6-8-8-8h-72V462h62zM381 836H264V462h117v374zm189 0H453V462h117v374zm190 0H642V462h118v374z"></path></svg>' />

                {{-- Bank account Number --}}
                <div class="w-full" wire:ignore>
                    <x-forms.select2 :label="__('Select Your bank')" :placeholder="__('Select Bank')" model="businessBank" :options="$banks" :isDefer="true" :isAssociative="false" :componentId="$this->id" value="code"
                        :selected="$businessBank" text="name" />
                </div>

                {{-- account name --}}
                <x-forms.text-input :label="__('Account Name')" placeholder="" model="businessAccountName" readonly
                    svg_icon='<svg class="w-5 h-5 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M894 462c30.9 0 43.8-39.7 18.7-58L530.8 126.2a31.81 31.81 0 0 0-37.6 0L111.3 404c-25.1 18.2-12.2 58 18.8 58H192v374h-72c-4.4 0-8 3.6-8 8v52c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-52c0-4.4-3.6-8-8-8h-72V462h62zM381 836H264V462h117v374zm189 0H453V462h117v374zm190 0H642V462h118v374z"></path></svg>' />

                {{-- submit button --}}
                <div class="col-span-2">
                    <x-forms.button action="update" :text="__('Update Account')" :block="true" type="submit" />
                </div>
            </form>
        </main>
    </div>

</div>

@push('scripts')
    {{-- AlpineJS --}}
    <script>
        function SellerWithdrawalSettings() {
            return {
                accountType: 'personal',

                submitBusiness() {

                }
            }
        }

        window.SellerWithdrawalSettings = SellerWithdrawalSettings()
    </script>
@endpush
