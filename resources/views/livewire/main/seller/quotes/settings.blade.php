<div class="w-full" x-data="window.SellerDashboardQuoteSettings">

    {{-- Loading --}}
    {{-- <x-forms.loading /> --}}

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
                                        {{ __('Quote view') }}
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
        <div class="max-w-[800px] mx-auto">
           
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
        function SellerDashboardQuoteInfo() {
            return {
                successful: false,
                quote: {},
                total: 0,
                copying: false,

                toastMessage(message, type = "error") {
                    window.$wireui.notify({
                        title: type == 'success' ? 'Success' : 'Error occured',
                        description: message,
                        icon: type == 'success' ? 'success' : 'error'
                    });
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
