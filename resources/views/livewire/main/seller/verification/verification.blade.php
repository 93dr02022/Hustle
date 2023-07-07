<div class="w-full" x-data="nYpPIEgUauhEVLt">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Heading --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">

                <div class="min-w-0 flex-1">

                    {{-- Section heading --}}
                    <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        @lang('Verification Center')
                    </h2>

                    {{-- Breadcrumbs --}}
                    <div class="mt-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
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
                                        class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_my_dashboard')
                                    </a>
                                </div>
                            </li>

                            {{-- Verifications --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('Verification')
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
    <div class="max-w-[1000px] mx-auto px-4 sm:px-6 md:px-12">
        <main class="rounded-lg bg-white dark:bg-zinc-800 shadow-sm border border-gray-200 dark:border-zinc-800">
            {{-- Form --}}
            <div class="py-6 px-4 sm:p-6 lg:pb-8 h-[calc(100%-80px)]">

                {{-- Section header --}}
                <div class="mb-14">
                    <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">{{ __('messages.t_verification_center') }}</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">{{ __('messages.t_verification_center_subtitle') }}</p>
                </div>

                {{-- Check if user has a verification before or not --}}
                @if ($verification)
                    {{-- Verification status --}}
                    <div class="flex items-center justify-between py-2">
                        <dt class="text-sm font-medium text-gray-500">{{ __('Verification info') }}</dt>
                        <button class="btn-purple text-[13px] font-normal px-3">Update banking</button>
                    </div>
                    <div class="bg-gray-100 border border-gray-200 rounded-md py-5 px-3">
                        <dl class="grid grid-cols-1 gap-y-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">{{ __('messages.t_verification_status') }}</dt>
                                @if ($verification->status === 'pending')
                                    <dd class="mt-1 text-xs font-semibold text-amber-600">{{ __('messages.t_verification_pending') }}</dd>
                                @elseif ($verification->status === 'verified')
                                    <dd class="mt-1 text-xs font-semibold text-green-400">{{ __('messages.t_account_verified') }}</dd>
                                @elseif ($verification->status === 'declined')
                                    <dd class="mt-1 text-xs font-semibold text-red-400">{{ __('messages.t_verification_declined') }}</dd>
                                @endif
                            </div>
                            <div class="sm:col-span-1">

                                {{-- Verified --}}
                                @if ($verification->status === 'verified')
                                    <dt class="text-sm font-medium text-gray-500">{{ __('messages.t_verified_at') }}</dt>
                                    <dd class="mt-1 text-xs text-gray-500">{{ format_date($verification->verified_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}</dd>
                                @endif

                                {{-- Pending --}}
                                @if ($verification->status === 'pending')
                                    <dt class="text-sm font-medium text-gray-500">{{ __('messages.t_verification_date') }}</dt>
                                    <dd class="mt-1 text-xs text-gray-500">{{ format_date($verification->created_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}</dd>
                                @endif

                                {{-- Declined --}}
                                @if ($verification->status === 'declined')
                                    <dt class="text-sm font-medium text-gray-500">{{ __('messages.t_declined_at') }}</dt>
                                    <dd class="mt-1 text-xs text-gray-500">{{ format_date($verification->declined_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}</dd>
                                @endif

                            </div>
                        </dl>
                    </div>

                    {{-- Verification files --}}
                    <div class="sm:col-span-2 mt-6">
                        <dt class="text-xs font-medium text-gray-500">{{ __('messages.t_verification_documents') }}</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">

                                {{-- Selfie photo --}}
                                <li class="ltr:pl-3 rtl:pr-3 ltr:pr-4 rtl:pl-4 py-4 flex items-center justify-between text-sm">
                                    <div class="w-0 flex-1 flex items-center">
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="ltr:ml-2 rtl:mr-2 flex-1 w-0 truncate text-xs"> <span class="font-semibold">{{ __('Selfie Photo Verification') }}</span> </span>
                                    </div>
                                    <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0">
                                        <a href="{{ url('storage/' . $verification->file_selfie) }}" target="_blank" class="font-medium text-primary-600 hover:text-primary-600 text-xs">
                                            {{ __('messages.t_download') }} </a>
                                    </div>
                                </li>
                            </ul>
                        </dd>
                    </div>
                @else
                    {{-- Choose verification document type --}}
                    @if ($currentStep === 1)
                        {{-- Message --}}
                        <div class="bg-yellow-50 ltr:border-l-4 rtl:border-r-4 border-yellow-400 py-7 px-4 mb-7">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ltr:ml-3 rtl:mr-3">
                                    <p class="text-sm text-yellow-700">
                                        In Compliance with our regulator we do not store your BVN information we are only using it to verify your information.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- bnv verification and account details --}}
                        <div class="grid md:grid-cols-2 md:gap-x-8 gap-y-8 mb-6">
                            <x-forms.text-input label="{{ __('BVN Number') }}" placeholder="{{ __('12345678910') }}" model="bvn" type="tel" icon="at" />

                            <x-forms.text-input label="{{ __('Account Number') }}" placeholder="{{ __('1234567890') }}" model="accountNumber" type="tel" icon="at" />


                            <div class="w-full" wire:ignore>
                                <x-forms.select2 :label="__('Select Your bank')" :placeholder="__('Select Bank')" model="bank" :options="$banks" :isDefer="true" :isAssociative="false" :componentId="$this->id" value="code"
                                    text="name" />
                            </div>

                            <x-forms.text-input label="{{ __('First name') }}" placeholder="{{ __('first name') }}" model="first_name" type="tel" icon="at" readonly />

                            <x-forms.text-input label="{{ __('Last name') }}" placeholder="{{ __('Last name') }}" model="last_name" type="tel" icon="at" class="disabled:bg-slate-300"
                                readonly />
                        </div>

                        {{-- Selfie --}}
                    @elseif ($currentStep === 2)
                        {{-- Message --}}
                        <div class="bg-yellow-50 ltr:border-l-4 rtl:border-r-4 border-yellow-400 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ltr:ml-3 rtl:mr-3">
                                    <p class="text-sm text-yellow-700">{{ __('messages.t_verification_selfie_page_msg') }}</p>
                                </div>
                            </div>
                        </div>

                        {{-- Container/Results --}}
                        <div class="grid grid-cols-2 gap-4" wire:ignore>

                            {{-- Camera container --}}
                            <div class="flex items-center justify-center border-dashed border-2 border-gray-200 dark:border-zinc-700 mt-8 mb-4">
                                <div id="webcamjs-container"></div>
                            </div>

                            {{-- Image taken --}}
                            <div class="flex items-center justify-center border-dashed border-2 border-gray-200 dark:border-zinc-700 mt-8 mb-4">
                                <div id="webcamjs-results"></div>
                            </div>

                        </div>

                        {{-- Take Snapshot --}}
                        <div>
                            <button type="button"
                                class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded text-sm px-5 py-2.5 text-center inline-flex items-center ltr:mr-2 rtl:ml-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                x-on:click="snapshot">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ltr:mr-2 rtl:ml-2 ltr:-ml-1 rtl:-mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-xs font-semibold">{{ __('messages.t_take_a_snapshot') }}</span>
                            </button>
                        </div>

                        {{-- Initialize WebCamJS --}}
                        <script>
                            Webcam.set({
                                width: 490,
                                height: 350,
                                image_format: 'jpeg',
                                jpeg_quality: 100
                            });
                            Webcam.attach('#webcamjs-container');
                        </script>
                    @endif


                @endif

            </div>

            {{-- Actions --}}
            @if (!$verification)
                <div class="bg-gray-50 dark:bg-zinc-700 h-20 flex justify-between">

                    {{-- Back --}}
                    <div>
                        @if ($currentStep !== 1)
                            <div class="py-4 px-4 flex justify-end sm:px-6">
                                <x-forms.button action="back" text="{{ __('messages.t_back') }}" block="0" active="text-gray-900 bg-gray-100 hover:bg-gray-200" />
                            </div>
                        @endif
                    </div>

                    {{-- Next --}}
                    <div x-cloak>
                        {{-- Set document type --}}
                        @if ($currentStep === 1)
                            <div class="py-4 px-4 flex justify-end sm:px-6">
                                <x-forms.button action="verify" text="{{ __('messages.t_next_step') }}" block="0" x-ref="stepOneButton" />
                            </div>
                        @endif

                        {{-- Finish --}}
                        @if ($currentStep === 2)
                            <div class="py-4 px-4 flex justify-end sm:px-6">
                                <x-forms.button action="finish" text="{{ __('messages.t_finish') }}" block="0" />
                            </div>
                        @endif
                    </div>

                </div>
            @elseif ($verification && $verification->status === 'declined')
                <div class="py-4 px-4 flex justify-end sm:px-6 bg-gray-50 dark:bg-zinc-700">
                    <x-forms.button action="sendFilesAgain" text="{{ __('messages.t_send_files_again') }}" block="0" />
                </div>
            @endif
        </main>
    </div>

</div>

@push('styles')
    {{-- Include WebcamJS Plugin --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
@endpush

@push('scripts')
    {{-- AlpineJS --}}
    <script>
        function nYpPIEgUauhEVLt() {
            return {

                counter: 0,
                selectedBank: null,

                preview: {
                    front: null,
                    back: null
                },

                init() {
                    let button = this.$refs.stepOneButton
                    let accountInput = document.querySelector('#text-input-component-id-accountNumber');
                    if (button) {
                        button.disabled = true;

                        accountInput.addEventListener('input', (e) => {
                            if (event.target.value.length !== 10 || !this.selectedBank) {
                                button.disabled = true;
                            } else {
                                button.disabled = false;
                            }
                        })

                        $('#select2-id-bank').on('select2:select', function(e) {
                            this.selectedBank = e.params.data

                            if (e.params.data && accountInput.value.length == 10) {
                                button.disabled = false;
                            }
                        });
                    }
                },

                setFrontSide(e) {
                    const source = e.target.files[0];
                    this.preview.front = source.name
                },

                setBackSide(e) {
                    const source = e.target.files[0];
                    this.preview.back = source.name
                },

                dataURLtoFile(dataurl, filename) {

                    var arr = dataurl.split(','),
                        mime = arr[0].match(/:(.*?);/)[1],
                        bstr = atob(arr[1]),
                        n = bstr.length,
                        u8arr = new Uint8Array(n);

                    while (n--) {
                        u8arr[n] = bstr.charCodeAt(n);
                    }

                    return new File([u8arr], filename, {
                        type: mime
                    });
                },

                snapshot() {
                    if (this.counter > 5) {
                        window.$wireui.notify({
                            title: "{{ __('messages.t_error') }}",
                            description: "{{ __('messages.t_unable_to_take_more_selfies') }}",
                            icon: 'error'
                        });
                        return;
                    }
                    const _this = this;
                    Webcam.snap(function(data_uri) {
                        const file = _this.dataURLtoFile(data_uri, 'selfie.jpg');

                        // Upload a file:
                        @this.upload('selfie', file)

                        document.getElementById('webcamjs-results').innerHTML = '<img src="' + data_uri + '"/>';
                    });

                    this.counter += 1;
                }

            }
        }
        window.nYpPIEgUauhEVLt = nYpPIEgUauhEVLt()
    </script>
@endpush
