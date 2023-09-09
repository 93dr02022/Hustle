<main class="w-full" x-data="window.AccountReferral">
    <div class="sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow overflow-hidden">
            <div
                class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                {{-- Sidebar --}}
                <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside>

                {{-- Section content --}}
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">
                    {{-- Breadcrumbs --}}
                    <div class="my-1 p-5 ml-2 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
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

                            {{-- setting --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('Referral')
                                    </span>
                                </div>
                            </li>

                        </ol>
                    </div>
                    {{-- Form --}}
                    <div class="w-full">

                        {{-- Section header --}}
                        <div class="mb-4 pt-5 px-4 sm:p-4">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">
                                Referral</h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                                Earning from referral</p>
                        </div>

                        {{-- Session messages --}}
                        @if (session()->has('error'))
                            <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-3 mx-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3 flex items-center">
                                        <p class="text-xs font-bold tracking-wide text-red-700">
                                            {{ session()->get('error') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div
                            class="bg-white px-4 dark:bg-zinc-800 overflow-y-auto border !border-t-0 !border-b-0 dark:border-zinc-600">
                            <div
                                class="bg-slate-100 grid grid-cols-1 rounded-md overflow-hidden h-full max-h-[200px] mb-7">
                                <div class="grid grid-cols-11 gap-x-3 md:grid-cols-11 md:gap-x-14 px-4 sm:px-6 lg:px-8">
                                    <div class="col-span-6">
                                        <div
                                            class="capitalize flex flex-col border-l-[3px] xs:border-l-[5px] border-[#F18522] pl-2 xs:pl-4 mt-8 xs:mt-10 md:mt-14">
                                            <div
                                                class="text-base font-bold leading-6 text-[#1D46F5] sm:font-fold sm:text-2xl">
                                                Refer a friend
                                            </div>
                                            <div
                                                class="text-base font-bold leading-6 text-[#1D46F5] sm:font-fold sm:text-2xl">
                                                and get a cash reward.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-5">
                                        <img src="/img/general/referral.png" class="object-contain" alt="">
                                    </div>
                                </div>
                            </div>


                            <div class="text-base font-medium mb-2">Copy Your Referral link</div>
                            <div class="relative max-w-md">
                                <input class="form-ctr block pl-4 py-4 pr-[75px] read-only:bg-slate-100"
                                    value="https://correcthustle.com/auth/register?refer={{ auth()->user()->referral_code }}" readonly />
                                <div class="flex absolute inset-y-0 right-0 items-center pl-4 pointer-events-auto">
                                    <button @click="copy('')"
                                        class="bg-[#1D46F5] m-[5px] text-white text-sm rounded py-3 px-5">Copy</button>
                                </div>
                            </div>

                            {{-- social media sharing links --}}
                            <div class="flex items-center flex-wrap gap-x-4 xs:gap-x-7 mt-5 mb-12">
                                {{-- Facebook --}}
                                <div class="flex flex-col items-center justify-center">
                                    <a href="`https://www.facebook.com/share.php?u=https://correcthustle.com/quotations/${selectedQuote.quote.reference}/payment&t=Quotation`"
                                        target="_blank"
                                        class="flex justify-center items-center h-10 w-10 border border-transparent rounded-full bg-[#3b5998] focus:outline-none focus:ring-0 mx-auto">
                                        <svg class="h-4 w-4 fill-white" version="1.1" viewBox="0 0 512 512"
                                            width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path
                                                d="M374.244,285.825l14.105,-91.961l-88.233,0l0,-59.677c0,-25.159 12.325,-49.682 51.845,-49.682l40.116,0l0,-78.291c0,0 -36.407,-6.214 -71.213,-6.214c-72.67,0 -120.165,44.042 -120.165,123.775l0,70.089l-80.777,0l0,91.961l80.777,0l0,222.31c16.197,2.541 32.798,3.865 49.709,3.865c16.911,0 33.511,-1.324 49.708,-3.865l0,-222.31l74.128,0Z" />
                                        </svg>
                                    </a>
                                    <span
                                        class="capitalize font-normal text-xs text-gray-500 mt-2 tracking-widest">{{ __('messages.t_facebook') }}</span>
                                </div>

                                {{-- Twitter --}}
                                <div class="flex flex-col items-center justify-center">
                                    <a href="`https://twitter.com/intent/tweet?text=Quotation%20-%20https://correcthustle.com/quotations/${selectedQuote.quote.reference}/payment%20`"
                                        target="_blank"
                                        class="flex justify-center items-center h-10 w-10 border border-transparent rounded-full bg-[#1da1f2] focus:outline-none focus:ring-0 mx-auto">
                                        <svg class="h-4 w-4 fill-white" version="1.1" viewBox="0 0 512 512"
                                            width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path
                                                d="M161.014,464.013c193.208,0 298.885,-160.071 298.885,-298.885c0,-4.546 0,-9.072 -0.307,-13.578c20.558,-14.871 38.305,-33.282 52.408,-54.374c-19.171,8.495 -39.51,14.065 -60.334,16.527c21.924,-13.124 38.343,-33.782 46.182,-58.102c-20.619,12.235 -43.18,20.859 -66.703,25.498c-19.862,-21.121 -47.602,-33.112 -76.593,-33.112c-57.682,0 -105.145,47.464 -105.145,105.144c0,8.002 0.914,15.979 2.722,23.773c-84.418,-4.231 -163.18,-44.161 -216.494,-109.752c-27.724,47.726 -13.379,109.576 32.522,140.226c-16.715,-0.495 -33.071,-5.005 -47.677,-13.148l0,1.331c0.014,49.814 35.447,93.111 84.275,102.974c-15.464,4.217 -31.693,4.833 -47.431,1.802c13.727,42.685 53.311,72.108 98.14,72.95c-37.19,29.227 -83.157,45.103 -130.458,45.056c-8.358,-0.016 -16.708,-0.522 -25.006,-1.516c48.034,30.825 103.94,47.18 161.014,47.104"
                                                style="fill-rule:nonzero;" />
                                        </svg>
                                    </a>
                                    <span
                                        class="capitalize font-normal text-xs text-gray-500 mt-2 tracking-widest">{{ __('messages.t_twitter') }}</span>
                                </div>

                                {{-- Linkedin --}}
                                <div class="flex flex-col items-center justify-center">
                                    <a href="`https://www.linkedin.com/shareArticle?mini=true&url=https://correcthustle.com/quotations/${selectedQuote.quote.reference}/payment&title=Quotation&summary=Quotation`"
                                        target="_blank"
                                        class="flex justify-center items-center h-10 w-10 border border-transparent rounded-full bg-[#0a66c2] focus:outline-none focus:ring-0 mx-auto">
                                        <svg class="h-4 w-4 fill-white" version="1.1" viewBox="0 0 512 512"
                                            width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path
                                                d="M473.305,-1.353c20.88,0 37.885,16.533 37.885,36.926l0,438.251c0,20.393 -17.005,36.954 -37.885,36.954l-436.459,0c-20.839,0 -37.773,-16.561 -37.773,-36.954l0,-438.251c0,-20.393 16.934,-36.926 37.773,-36.926l436.459,0Zm-37.829,436.389l0,-134.034c0,-65.822 -14.212,-116.427 -91.12,-116.427c-36.955,0 -61.739,20.263 -71.867,39.476l-1.04,0l0,-33.411l-72.811,0l0,244.396l75.866,0l0,-120.878c0,-31.883 6.031,-62.773 45.554,-62.773c38.981,0 39.468,36.461 39.468,64.802l0,118.849l75.95,0Zm-284.489,-244.396l-76.034,0l0,244.396l76.034,0l0,-244.396Zm-37.997,-121.489c-24.395,0 -44.066,19.735 -44.066,44.047c0,24.318 19.671,44.052 44.066,44.052c24.299,0 44.026,-19.734 44.026,-44.052c0,-24.312 -19.727,-44.047 -44.026,-44.047Z"
                                                style="fill-rule:nonzero;" />
                                        </svg>
                                    </a>
                                    <span
                                        class="capitalize font-normal text-xs text-gray-500 mt-2 tracking-widest">{{ __('messages.t_linkedin') }}</span>
                                </div>

                                {{-- Whatsapp --}}
                                <div class="flex flex-col items-center justify-center">
                                    <a href="`https://api.whatsapp.com/send?text=Quotation%20https://correcthustle.com/quotations/${selectedQuote.quote.reference}/payment`"
                                        target="_blank"
                                        class="flex justify-center items-center h-10 w-10 border border-transparent rounded-full bg-[#25d366] focus:outline-none focus:ring-0 mx-auto">
                                        <svg class="h-4 w-4 fill-white" version="1.1" viewBox="0 0 512 512"
                                            width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path
                                                d="M373.295,307.064c-6.37,-3.188 -37.687,-18.596 -43.526,-20.724c-5.838,-2.126 -10.084,-3.187 -14.331,3.188c-4.246,6.376 -16.454,20.725 -20.17,24.976c-3.715,4.251 -7.431,4.785 -13.8,1.594c-6.37,-3.187 -26.895,-9.913 -51.225,-31.616c-18.935,-16.89 -31.72,-37.749 -35.435,-44.126c-3.716,-6.377 -0.397,-9.824 2.792,-13c2.867,-2.854 6.371,-7.44 9.555,-11.16c3.186,-3.718 4.247,-6.377 6.37,-10.626c2.123,-4.252 1.062,-7.971 -0.532,-11.159c-1.591,-3.188 -14.33,-34.542 -19.638,-47.298c-5.171,-12.419 -10.422,-10.737 -14.332,-10.934c-3.711,-0.184 -7.963,-0.223 -12.208,-0.223c-4.246,0 -11.148,1.594 -16.987,7.969c-5.838,6.377 -22.293,21.789 -22.293,53.14c0,31.355 22.824,61.642 26.009,65.894c3.185,4.252 44.916,68.59 108.816,96.181c15.196,6.564 27.062,10.483 36.312,13.418c15.259,4.849 29.145,4.165 40.121,2.524c12.238,-1.827 37.686,-15.408 42.995,-30.286c5.307,-14.882 5.307,-27.635 3.715,-30.292c-1.592,-2.657 -5.838,-4.251 -12.208,-7.44m-116.224,158.693l-0.086,0c-38.022,-0.015 -75.313,-10.23 -107.845,-29.535l-7.738,-4.592l-80.194,21.037l21.405,-78.19l-5.037,-8.017c-21.211,-33.735 -32.414,-72.726 -32.397,-112.763c0.047,-116.825 95.1,-211.87 211.976,-211.87c56.595,0.019 109.795,22.088 149.801,62.139c40.005,40.05 62.023,93.286 62.001,149.902c-0.048,116.834 -95.1,211.889 -211.886,211.889m180.332,-392.224c-48.131,-48.186 -112.138,-74.735 -180.335,-74.763c-140.514,0 -254.875,114.354 -254.932,254.911c-0.018,44.932 11.72,88.786 34.03,127.448l-36.166,132.102l135.141,-35.45c37.236,20.31 79.159,31.015 121.826,31.029l0.105,0c140.499,0 254.87,-114.366 254.928,-254.925c0.026,-68.117 -26.467,-132.166 -74.597,-180.352"
                                                id="WhatsApp-Logo" />
                                        </svg>
                                    </a>
                                    <span
                                        class="capitalize font-normal text-xs text-gray-500 mt-2 tracking-widest">{{ __('messages.t_whatsapp') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

@push('scripts')
    <script>
        function AccountReferral() {
            return {
                copying: false,
                isCopied: false,

                copy(text) {
                    navigator.clipboard.writeText(text)
                        .then(() => {
                            this.toastMessage('Referral link copied', 'success')
                        })
                }

                toastMessage(message, type = "error") {
                    window.$wireui.notify({
                        title: type == 'success' ? 'Success' : 'Error occured',
                        description: message,
                        icon: type == 'success' ? 'success' : 'error'
                    });
                }
            }
        }

        window.AccountReferral = AccountReferral()
    </script>
@endpush
