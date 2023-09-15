<div class="w-full" x-data="window.SellerDashboardQuoteSettings">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Heading --}}
    <div class="px-4 mx-auto mb-16 max-w-7xl sm:px-6 md:px-12">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">

                <div class="flex-1 min-w-0">

                    {{-- Section heading --}}
                    <h2
                        class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        @lang('messages.t_quotes')
                    </h2>

                    {{-- Breadcrumbs --}}
                    <div class="flex flex-col mt-3 sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                            {{-- Main home --}}
                            <li>
                                <div class="flex items-center">
                                    <a href="{{ url('/') }}"
                                        class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_home')
                                    </a>
                                </div>
                            </li>

                            {{-- Quotes --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ url('seller/quotes') }}"
                                        class="text-sm font-medium text-gray-700 ltr:ml-1 rtl:mr-1 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        Quotes
                                    </a>
                                </div>
                            </li>

                            {{-- Create Quote --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        {{ __('Settings') }}
                                    </span>
                                </div>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="px-4 mx-auto space-y-2 max-w-7xl sm:px-6 md:px-12">
        <div class="max-w-[800px] mx-auto bg-white border rounded-md">
            <form wire:submit.prevent="update">
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">
                    <div class="pb-10 pt-7 px-3 xs:px-5 md:px-12">

                        {{-- Section header --}}
                        <div class="mb-14">
                            <h2 class="text-sm leading-6 font-bold text-gray-900">{{ __('Quotation settings') }}
                            </h2>
                            <p class="mt-1 text-xs text-gray-500">{{ __('Change quotation settings') }}</p>
                        </div>

                        <div class="flex gap-x-4 text-sm mb-5">
                            <div class="h-20 w-20 bg-slate-300 rounded-md overflow-hidden">
                                <img :src="logoSrc" class="w-full h-full object-cover" alt="">
                            </div>
                            <div class="flex flex-col justify-center">
                                <label for="logo" class="btn-light">
                                    Select invoice logo
                                    <input type="file" id="logo" class="hidden" @change="handleLogo($event)"
                                        wire:model="logo">
                                </label>
                                @error('logo')
                                    <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first('logo') }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- Section content --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-8 gap-y-8 mb-6">
                            <x-forms.text-input :label="__('Store name')" :placeholder="__('Enter store name')" model="business_name" required
                                icon="cash-multiple" />

                            <x-forms.text-input :label="__('Quote email')" :placeholder="__('Enter quote email')" type="email" model="email"
                                icon="cash-multiple" required />

                            <x-forms.text-input :label="__('Quote contact')" :placeholder="__('Enter quote contact')" type="tel" model="contact"
                                icon="cash-multiple" required />

                            <x-forms.text-input :label="__('Address')" :placeholder="__('Enter store address')" model="address"
                                icon="cash-multiple" />
                        </div>

                    </div>

                    {{-- Actions --}}
                    <div class="py-4 px-4 flex justify-end sm:px-12 bg-gray-50 rounded-bl-lg rounded-br-lg">
                        {{-- <x-forms.button action="update-mod" text="{{ __('messages.t_update') }}" :block="false" /> --}}
                        <button wire:target="update" wire:loading.attr="disabled" class="btn-purple">
                            Update
                        </button>

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@push('styles')
    <style>
        .stat-shadow {
            box-shadow: 0 0.375rem 0.75rem rgba(140, 152, 164, .075);
        }

        .x-shadow {
            box-shadow: 0 12px 40px 8px rgba(140, 152, 164, 0.19) !important;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function SellerDashboardQuoteSettings() {
            return {
                copying: false,
                logoSrc: "{{ $settings->logo ? src($settings->logo) : placeholder_img() }}",

                init() {
                    if (/[\?&]rds=/.test(window.location.search)) {
                        this.toastMessage('You need to complete your quote settings before you can create a quote.');
                    }
                },

                toastMessage(message, type = "error") {
                    window.$wireui.notify({
                        title: type == 'success' ? 'Success' : 'Error occured',
                        description: message,
                        icon: type == 'success' ? 'success' : 'error'
                    });
                },

                toBase64(file, closure) {
                    const reader = new FileReader();
                    reader.readAsDataURL(file[0]);
                    reader.onload = () => {
                        closure(reader.result);
                    };
                },

                handleLogo(event) {
                    this.toBase64(event.target.files, (file) => this.logoSrc = file);
                },

                copy(text) {
                    navigator.clipboard.writeText(text)
                        .then(() => {
                            this.copying = true;
                            setTimeout(() => this.copying = false, 2000);
                        })
                        .catch((err) => {
                            this.copying = false;
                        });
                }
            }
        }
        window.SellerDashboardQuoteSettings = SellerDashboardQuoteSettings()
    </script>
@endpush
