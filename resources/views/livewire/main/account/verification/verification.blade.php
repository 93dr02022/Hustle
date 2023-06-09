<main class="w-full" x-data="window.nYpPIEgUauhEVLt">

    {{-- Please wait dialog --}}
    <div class="fixed top-0 left-0 z-50 bg-black dark:bg-gray-400/50 w-full h-full opacity-80" wire:loading>
        <div class="w-full h-full flex items-center justify-center">
            <div role="status">
                <svg aria-hidden="true" class="mx-auto w-12 h-12 text-gray-500 dark:text-gray-400 animate-spin fill-white dark:fill-primary-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
                <span class="text-xs font-medium tracking-wider text-white dark:text-gray-500 mt-4 block">{{ __('messages.t_please_wait_dots') }}</span>
            </div>
        </div>
    </div>

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
                                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                                </svg>
                                                <span class="ltr:ml-2 rtl:mr-2 flex-1 w-0 truncate text-xs"> <span class="font-semibold">{{ __('Selfie Photo Verification') }}</span> </span>
                                            </div>
                                            <div class="ltr:ml-4 rtl:mr-4 flex-shrink-0">
                                                <a href="{{ url('storage/' . $verification->file_selfie ) }}" target="_blank" class="font-medium text-primary-600 hover:text-primary-600 text-xs"> {{ __('messages.t_download') }} </a>
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
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
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
                                    <x-forms.text-input 
                                    label="{{ __('BVN Number') }}" 
                                    placeholder="{{ __('12345678910') }}" 
                                    model="bvn"
                                    type="tel"
                                    icon="at" />

                                    <x-forms.text-input 
                                    label="{{ __('Account Number') }}" 
                                    placeholder="{{ __('1234567890') }}" 
                                    model="accountNumber"
                                    type="tel"
                                    icon="at" />


                                    <div class="w-full" wire:ignore>
                                        <x-forms.select2
                                            :label="__('Select Your bank')"
                                            :placeholder="__('Select Bank')"
                                            model="bank"
                                            :options="$banks"
                                            :isDefer="true"
                                            :isAssociative="false"
                                            :componentId="$this->id"
                                            value="code"
                                            text="name" />
                                    </div>

                                    <x-forms.text-input 
                                    label="{{ __('First name') }}" 
                                    placeholder="{{ __('first name') }}" 
                                    model="first_name"
                                    type="tel"
                                    icon="at"
                                    readonly />

                                    <x-forms.text-input 
                                    label="{{ __('Last name') }}" 
                                    placeholder="{{ __('Last name') }}" 
                                    model="last_name"
                                    type="tel"
                                    icon="at"
                                    class="disabled:bg-slate-300"
                                    readonly />
                                </div>

                            {{-- Selfie --}}
                            @elseif ($currentStep === 2)

                                {{-- Message --}}
                                <div class="bg-yellow-50 ltr:border-l-4 rtl:border-r-4 border-yellow-400 p-4">
                                    <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
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
                                    <button type="button" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded text-sm px-5 py-2.5 text-center inline-flex items-center ltr:mr-2 rtl:ml-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" x-on:click="snapshot">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ltr:mr-2 rtl:ml-2 ltr:-ml-1 rtl:-mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="text-xs font-semibold">{{ __('messages.t_take_a_snapshot') }}</span>
                                    </button>
                                </div>

                                {{-- Initialize WebCamJS --}}
                                <script>
                                    Webcam.set({
                                        width       : 490,
                                        height      : 350,
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
                                        <x-forms.button 
                                            action="back" 
                                            text="{{ __('messages.t_back') }}" 
                                            block="0" 
                                            active="text-gray-900 bg-gray-100 hover:bg-gray-200" />
                                    </div>
                                @endif
                            </div>

                            {{-- Next --}}
                            <div>
                                {{-- Set document type --}}
                                @if ($currentStep === 1)
                                    <div class="py-4 px-4 flex justify-end sm:px-6">
                                        <x-forms.button action="verify" text="{{ __('messages.t_next_step') }}" block="0" />
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

                </div>

            </div>
        </div>
    </div>
</main>

{{-- Include in Header --}}
@push('styles')
    
    {{-- Include WebcamJS Plugin --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>

@endpush

{{-- @pushOnce('styles')
    <link href="{{ mix('css/select2.css') }}" rel="stylesheet" />
@endPushOnce

@pushOnce('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ mix('js/select2.js') }}"></script>
    <script src="{{ url('vendor/pharaonic/pharaonic.select2.min.js') }}"></script>
@endPushOnce --}}

{{-- Include in Footer --}}
@push('scripts')

    {{-- AlpineJS --}}
    <script>
        function nYpPIEgUauhEVLt() {
            return {

                counter: 0,

                preview: {
                    front: null,
                    back : null
                },

                setFrontSide(e) {
                    const source       = e.target.files[0];
                    this.preview.front = source.name
                },

                setBackSide(e) {
                    const source       = e.target.files[0];
                    this.preview.back = source.name
                },

                dataURLtoFile(dataurl, filename) {
 
                    var arr = dataurl.split(','),
                        mime = arr[0].match(/:(.*?);/)[1],
                        bstr = atob(arr[1]), 
                        n = bstr.length, 
                        u8arr = new Uint8Array(n);
                        
                    while(n--){
                        u8arr[n] = bstr.charCodeAt(n);
                    }
                    
                    return new File([u8arr], filename, {type:mime});
                },

                snapshot() {
                    if (this.counter > 5) {
                        window.$wireui.notify({
                            title      : "{{ __('messages.t_error') }}",
                            description: "{{ __('messages.t_unable_to_take_more_selfies') }}",
                            icon       : 'error'
                        });
                        return;
                    }
                    const _this = this;
                    Webcam.snap( function(data_uri) {
                        const file = _this.dataURLtoFile(data_uri, 'selfie.jpg');

                        // Upload a file:
                        @this.upload('selfie', file)

                        document.getElementById('webcamjs-results').innerHTML = '<img src="'+data_uri+'"/>';
                    } );

                    this.counter += 1;
                }

            }
        }
        window.nYpPIEgUauhEVLt = nYpPIEgUauhEVLt()
    </script>

@endpush