<div class="w-full" x-data="SellerVerification">

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
    <div class="px-4 sm:px-6 md:px-12">
        <main class="rounded-lg bg-white dark:bg-zinc-800 shadow-sm border border-gray-200 dark:border-zinc-800">
            {{-- Form --}}
            <div class="py-6 px-4 sm:p-6 lg:pb-8 h-[calc(100%-80px)]">

                {{-- Section header --}}
                <div class="mb-9">
                    <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">{{ __('messages.t_verification_center') }}</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">{{ __('messages.t_verification_center_subtitle') }}</p>
                </div>

                {{-- personal verification --}}
                <div @if (!$verification->has_personal) @click="startVerify('personal')" @endif
                    class="py-4 lg:py-5 rounded cursor-pointer border card-shadow px-3 sm:px-4 flex items-start sm:items-center gap-x-3 mb-5">
                    <div class="bg-white grid place-items-center flex-shrink-0 shadow rounded p-2">
                        <svg width="18" height="18" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.00008 0.75C8.99887 0.75 11.4167 3.16787 11.4167 6.16667C11.4167 9.16546 8.99887 11.5833 6.00008 11.5833C3.00129 11.5833 0.583414 9.16546 0.583414 6.16667C0.583414 3.16787 3.00129 0.75 6.00008 0.75ZM6.00008 7.25C6.40829 7.25 6.738 6.92029 6.738 6.51208C6.738 6.41787 6.7223 6.33937 6.6909 6.26087L7.68003 5.27174L7.24042 4.83213L6.25129 5.82126C6.17279 5.78986 6.09428 5.77415 6.00008 5.77415C5.59187 5.77415 5.26216 6.10387 5.26216 6.51208C5.26216 6.92029 5.59187 7.25 6.00008 7.25ZM2.46747 6.08816C2.46747 4.1256 4.03752 2.61836 6.00008 2.61836C7.96264 2.61836 9.53269 4.1256 9.53269 6.08816H10.1607C10.1607 3.78019 8.30805 1.99034 6.00008 1.99034C3.69211 1.99034 1.83945 3.78019 1.83945 6.08816H2.46747Z"
                                fill="#48D38A"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col grow">
                        <h3 class="text-sm sm:text-[18px] font-medium text-primary-600">Personal Verification</h3>
                        <small class="text-gray-400 text-[12px] xs:text-sm">This is required in other to get store verification badge.</small>
                        <div class="">
                            @if ($verification->has_personal)
                                <span
                                    class="inline-flex flex-grow-0 items-center px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-green-100 text-green-800 dark:bg-transparent dark:text-green-400">
                                    {{ __('Verified') }}
                                </span>
                            @endif
                            @if (!$verification->has_personal)
                                <span
                                    class="inline-flex flex-grow-0 items-center px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-yellow-100 text-yellow-800 dark:bg-transparent dark:text-amber-400">
                                    {{ __('Pending') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <svg width="12" height="17" class="flex-shrink-0 hidden xs:block" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 12.5825L1.51406 14L9 7V7V7L1.51406 0L0 1.4175L5.96719 7L0 12.5825Z" fill="#CACACA"></path>
                    </svg>
                </div>

                {{-- business verification --}}
                <div @click="startVerify('business')" class="py-4 lg:py-5 rounded cursor-pointer border card-shadow px-3 sm:px-4 flex items-start sm:items-center gap-x-3 mb-5">
                    <div class="bg-white grid place-items-center flex-shrink-0 shadow rounded p-2">
                        <svg width="18" height="18" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.24861 0.882324H1.98149C1.61132 0.881782 1.25604 1.00195 0.993821 1.21638C0.7316 1.43082 0.583914 1.72196 0.583252 2.02577V9.73478C0.593801 10.361 1.20615 10.868 1.96901 10.8823H9.18494C9.55511 10.8829 9.91039 10.7627 10.1726 10.5483C10.4348 10.3338 10.5825 10.0427 10.5832 9.73888V2.00015C10.5868 1.70667 10.4483 1.42402 10.198 1.21438C9.94772 1.00475 9.60621 0.8853 9.24861 0.882324ZM2.12134 3.35714C2.12134 3.15639 2.28408 2.99365 2.48483 2.99365H8.68092C8.88167 2.99365 9.04442 3.15639 9.04442 3.35714C9.04442 3.55789 8.88167 3.72064 8.68092 3.72064H2.48483C2.28408 3.72064 2.12134 3.55789 2.12134 3.35714ZM2.48513 4.85205C2.28438 4.85205 2.12164 5.01479 2.12164 5.21554C2.12164 5.41629 2.28438 5.57903 2.48513 5.57903H6.37354C6.57429 5.57903 6.73703 5.41629 6.73703 5.21554C6.73703 5.01479 6.57429 4.85205 6.37354 4.85205H2.48513Z"
                                fill="#48D38A"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col grow">
                        <h3 class="text-sm sm:text-[18px] font-medium text-primary-600">Business Verification</h3>
                        <small class="text-gray-400 text-[12px] xs:text-sm">business verification makes you eligible for other store benefits.</small>
                        <div class="">
                            @if ($verification->business_verify_status == 'verified')
                                <span
                                    class="inline-flex flex-grow-0 items-center px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-green-100 text-green-800 dark:bg-transparent dark:text-green-400">
                                    {{ __('Verified') }}
                                </span>
                            @endif
                            @if ($verification->business_verify_status == 'pending')
                                <span
                                    class="inline-flex flex-grow-0 items-center px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-yellow-100 text-yellow-800 dark:bg-transparent dark:text-amber-400">
                                    {{ __('Pending') }}
                                </span>
                            @endif
                            @if ($verification->business_verify_status == 'awaiting')
                                <span
                                    class="inline-flex flex-grow-0 items-center px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-purple-100 text-purple-800 dark:bg-transparent dark:text-purple-400">
                                    {{ __('Awaiting') }}
                                </span>
                            @endif
                            @if ($verification->business_verify_status == 'declined')
                                <span
                                    class="inline-flex flex-grow-0 items-center px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-red-100 text-red-800 dark:bg-transparent dark:text-red-400">
                                    {{ __('Declined') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <svg width="12" height="17" class="flex-shrink-0 hidden xs:block" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 12.5825L1.51406 14L9 7V7V7L1.51406 0L0 1.4175L5.96719 7L0 12.5825Z" fill="#CACACA"></path>
                    </svg>
                </div>

                {{-- photo verification --}}
                <div @if ($verification->photo_status == 'pending' || $verification->photo_status == 'declined') @click="startVerify('photo')" @endif
                    class="py-4 lg:py-5 rounded cursor-pointer border card-shadow px-3 sm:px-4 flex items-start sm:items-center gap-x-3 mb-5">
                    <div class="bg-white grid place-items-center flex-shrink-0 shadow rounded p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ffb14a" class="text-[#ffb14a]" viewBox="0 0 16 16">
                            <path
                                d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                        </svg>
                    </div>
                    <div class="flex flex-col grow">
                        <h3 class="text-sm sm:text-[18px] font-medium text-primary-600">Photo Verification</h3>
                        <small class="text-gray-400 text-[12px] xs:text-sm">This is required in other to get store verification badge.</small>
                        <div class="">
                            @if ($verification->photo_status == 'verified')
                                <span
                                    class="inline-flex flex-grow-0 items-center px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-green-100 text-green-800 dark:bg-transparent dark:text-green-400">
                                    {{ __('Verified') }}
                                </span>
                            @endif
                            @if ($verification->photo_status == 'pending')
                                <span
                                    class="inline-flex flex-grow-0 items-center px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-yellow-100 text-yellow-800 dark:bg-transparent dark:text-amber-400">
                                    {{ __('Pending') }}
                                </span>
                            @endif
                            @if ($verification->photo_status == 'awaiting')
                                <span
                                    class="inline-flex flex-grow-0 items-center px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-purple-100 text-purple-800 dark:bg-transparent dark:text-purple-400">
                                    {{ __('Awaiting') }}
                                </span>
                            @endif
                            @if ($verification->photo_status == 'declined')
                                <span
                                    class="inline-flex flex-grow-0 items-center px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-red-100 text-red-800 dark:bg-transparent dark:text-red-400">
                                    {{ __('Declined') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <svg width="12" height="17" class="flex-shrink-0 hidden xs:block" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 12.5825L1.51406 14L9 7V7V7L1.51406 0L0 1.4175L5.96719 7L0 12.5825Z" fill="#CACACA"></path>
                    </svg>
                </div>
            </div>



            {{-- selected verification sections --}}
            <x-forms.right-modal x-cloak>
                <x-slot name="title">
                    <div class="capitalize"><span x-text="selectedVerification"></span> Verification</div>
                    <x-forms.close-button action="closeModal"></x-forms.close-button>
                </x-slot>

                <div class="">
                    {{-- Personal verification form --}}
                    <div x-show="selectedVerification == 'personal'">
                        <form wire:submit.prevent>
                            <div class="grid md:grid-cols-2 gap-4 mb-6">
                                <x-forms.text-input label="{{ __('BVN Number') }}" placeholder="{{ __('12345678910') }}" model="bvn" type="tel" icon="at" required />

                                <x-forms.text-input label="{{ __('Account Number') }}" placeholder="{{ __('1234567890') }}" model="accountNumber" type="tel" icon="at" required />

                                <div class="w-full" wire:ignore>
                                    <x-forms.select2 :label="__('Select Your bank')" :placeholder="__('Select Bank')" model="bank" :options="$banks" :isDefer="true" :isAssociative="false" :componentId="$this->id" value="code"
                                        text="name" required />
                                </div>

                                <x-forms.text-input label="{{ __('First name') }}" placeholder="{{ __('first name') }}" model="first_name" type="tel" icon="at" readonly required />

                                <x-forms.text-input label="{{ __('Last name') }}" placeholder="{{ __('Last name') }}" model="last_name" type="tel" icon="at"
                                    class="disabled:bg-slate-300" readonly required />
                            </div>
                            <div class="border-t my-3 pt-3 flex justify-end">
                                <button type="submit" wire:click="personalVerify" wire:loading.attr="disabled" wire:target="personalVerify" class="btn-purple">Submit</button>
                            </div>
                        </form>
                    </div>


                    {{-- business verification form --}}
                    <div x-show="selectedVerification == 'business'">
                        <form @submit.prevent="submitBusiness">
                            <div class="grid md:grid-cols-2 gap-4 mb-6">
                                <x-forms.text-input label="{{ __('Business Name') }}" placeholder="{{ __('shola store') }}" x-model="bizForm.business_name" type="text" icon="at"
                                    required />

                                <x-forms.text-input label="{{ __('Business email') }}" placeholder="{{ __('sholastore@gmail.com') }}" x-model="bizForm.business_email" type="email"
                                    icon="at" required />

                                <x-forms.text-input label="{{ __('Business phone') }}" placeholder="{{ __('1234567890') }}" x-model="bizForm.business_phone" type="tel" icon="at"
                                    required />

                                <x-forms.text-input label="{{ __('RC Number') }}" placeholder="{{ __('5252584425') }}" x-model="bizForm.registration_number" type="text" icon="at"
                                    required />

                                <div class="col-span-2 border-2 border-dashed rounded-md px-3 py-4 mb-4 mt-5">
                                    <label for="bizfile" class="block text-[0.8125rem] mb-2 font-medium tracking-wide text-gray-700 dark:text-white">CAC/BN
                                        Certificate</label>
                                    <input type="file" id="bizfile"
                                        class="block w-full text-[13px] text-gray-900 bg-transparent border dark:text-gray-300 rounded-md cursor-pointer focus:outline-none dark:dark:border-zinc-500 border-gray-300 file:!bg-slate-100 file:!text-slate-500 file:hover:!bg-slate-200 dark:border-zinc-600 dark:bg-transparent dark:file:!bg-zinc-700 dark:file:!text-zinc-200"
                                        accept="image/jpg,image/jpeg,image/png" @change="bizForm.registration_file = $event.target.files[0]" required>
                                </div>

                            </div>
                            <div class="border-t my-3 pt-3 flex justify-end">
                                <button type="submit" wire:loading.attr="disabled" wire:target="businessVerify" class="btn-purple">Submit</button>
                            </div>
                        </form>
                    </div>


                    {{-- photo verification form --}}
                    @if ($verification->photo_status == 'pending' || $verification->photo_status == 'declined')
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
                            <div class="">
                                <div class="flex justify-center border-dashed border-2 border-gray-200 dark:border-zinc-700 mt-8 mb-4">
                                    <div id="webcamjs-container"></div>
                                </div>
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

                        {{-- upload photo --}}
                        <div class="border-t my-3 pt-3 flex justify-end">
                            <button @click="upload()" :disabled="selfie.length <= 0" wire:loading.attr="disabled" wire:target="photoVerify" class="btn-purple">Submit</button>
                        </div>
                    @endif
                </div>
            </x-forms.right-modal>

        </main>
    </div>

</div>

@push('styles')
    {{-- Include WebcamJS Plugin --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>

    <style>
        .card-shadow {
            box-shadow: rgba(0, 0, 0, 0.06) 0px 0px 25px;
        }

        #webcamjs-container video {
            height: unset !important;
        }

        #webcamjs-container {
            height: unset !important;
        }
    </style>
@endpush

@push('scripts')
    {{-- AlpineJS --}}
    <script>
        function SellerVerification() {
            return {
                counter: 0,
                hidden: false,
                selectedBank: null,
                selectedVerification: 'personal',
                selfie: "",

                bizForm: {
                    business_name: "",
                    business_email: "",
                    business_phone: "",
                    registration_file: "",
                    registration_number: ""
                },

                preview: {
                    front: null,
                    back: null
                },

                init() {
                    // let button = this.$refs.stepOneButton
                    // let accountInput = document.querySelector('#text-input-component-id-accountNumber');
                    // if (button) {
                    //     button.disabled = true;

                    //     accountInput.addEventListener('input', (e) => {
                    //         if (event.target.value.length !== 10 || !this.selectedBank) {
                    //             button.disabled = true;
                    //         } else {
                    //             button.disabled = false;
                    //         }
                    //     })

                    //     $('#select2-id-bank').on('select2:select', function(e) {
                    //         this.selectedBank = e.params.data

                    //         if (e.params.data && accountInput.value.length == 10) {
                    //             button.disabled = false;
                    //         }
                    //     });
                    // }
                },

                startVerify(type) {
                    this.selectedVerification = type
                    this.hidden = true;
                    if (type == 'photo') {
                        Webcam.set({
                            width: 490,
                            height: 350,
                            image_format: 'jpeg',
                            jpeg_quality: 100
                        });
                        Webcam.attach('#webcamjs-container');
                    }
                },

                closeRightModal(event) {
                    if (event.target.classList.contains('modal-backdrop')) {
                        this.hidden = false
                    }
                },

                closeModal() {
                    this.hidden = false
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
                        _this.selfie = data_uri

                        document.getElementById('webcamjs-results').innerHTML = '<img src="' + data_uri + '"/>';
                    });

                    this.counter += 1;
                },

                upload() {
                    const file = this.dataURLtoFile(this.selfie, 'selfie.jpg');
                    console.log(file);
                    @this.photoVerify(this.selfie)
                },

                submitBusiness() {
                    @this.businessVerify(this.bizForm)
                }

            }
        }

        window.SellerVerification = SellerVerification()
    </script>
@endpush
