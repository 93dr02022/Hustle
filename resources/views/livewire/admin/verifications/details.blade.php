<div class="w-full" x-data="window.AdminVerifyAlpine">

    {{-- Section title --}}
    <div class="px-4 md:px-5 py-4 md:py-5 bg-white border dark:bg-gray-700 rounded-tl-lg rounded-tr-lg mb-5">
        <div class="sm:flex items-center justify-between">
            <p class="text-sm font-bold leading-wide text-gray-800">
                {{ __('messages.t_verification_center') }}
            </p>
            <button class="btn-purple" id="verifyButton">Verify</button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-11 gap-4">
        <div
            class="md:col-span-7 order-2 md:order-1 grid grid-cols-2 gap-x-4 gap-y-5 border border-[#ececec] bg-white rounded-lg px-5 py-6 mb-6">
            <div class="text-sm text-black font-medium leading-loose">
                <dt class="text-sm font-bold text-gray-400">
                    verification
                </dt>
                <dd class="mt-1 text-[13px] font-medium text-gray-900">
                    @if ($verification->has_personal)
                        <span
                            class="inline-flex flex-grow-0 px-4 py-1 text-xs rounded-2xl font-semibold text-blue-500 bg-blue-50">
                            {{ __('messages.t_verified') }}
                        </span>
                    @endif
                    @if (!$verification->has_personal)
                        <span
                            class="inline-flex flex-grow-0 px-4 py-1 text-xs rounded-2xl font-semibold text-amber-500 bg-amber-50">
                            {{ __('messages.t_pending') }}
                        </span>
                    @endif
                </dd>
            </div>

            {{-- bvn  --}}
            <div class="text-sm text-black font-medium leading-loose">
                <dt class="text-sm font-bold text-gray-400">
                    User BVN
                </dt>
                <dd class="mt-1 text-[13px] font-medium text-gray-900">
                    @if ($verification->mask_bvn)
                        {{ $verification->mask_bvn }}
                    @else
                        --
                    @endif
                </dd>
            </div>

            {{-- business status --}}
            <div class="text-sm text-black font-medium leading-loose">
                <dt class="text-sm font-bold text-gray-400">
                    Business Status
                </dt>
                <dd class="mt-1 text-[13px] font-medium text-gray-900">
                    @if ($verification->business_verify_status == 'verified')
                        <span
                            class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-green-100 text-green-800">
                            {{ __('Verified') }}
                        </span>
                    @endif
                    @if ($verification->business_verify_status == 'pending')
                        <span
                            class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-yellow-100 text-yellow-800">
                            {{ __('Pending') }}
                        </span>
                    @endif
                    @if ($verification->business_verify_status == 'awaiting')
                        <span
                            class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-purple-100 text-purple-800">
                            {{ __('Awaiting') }}
                        </span>
                    @endif
                    @if ($verification->business_verify_status == 'declined')
                        <span class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-red-100 text-red-800">
                            {{ __('Declined') }}
                        </span>
                    @endif
                </dd>
            </div>

            {{-- business name --}}
            <div class="text-sm text-black font-medium leading-loose">
                <dt class="text-sm font-bold text-gray-400">
                    Business Name
                </dt>
                <dd class="mt-1 text-[13px] font-medium text-gray-900">
                    @if ($verification->business_name)
                        {{ $verification->business_name }}
                    @else
                        N/A
                    @endif
                </dd>
            </div>

            {{-- business email --}}
            <div class="text-sm text-black font-medium leading-loose">
                <dt class="text-sm font-bold text-gray-400">
                    Business email
                </dt>
                <dd class="mt-1 text-[13px] font-medium text-gray-900">
                    @if ($verification->business_email)
                        {{ $verification->business_email }}
                    @else
                        N/A
                    @endif
                </dd>
            </div>

            {{-- business phone --}}
            <div class="text-sm text-black font-medium leading-loose">
                <dt class="text-sm font-bold text-gray-400">
                    Business phone
                </dt>
                <dd class="mt-1 text-[13px] font-medium text-gray-900">
                    @if ($verification->business_phone)
                        {{ $verification->business_phone }}
                    @else
                        N/A
                    @endif
                </dd>
            </div>

            {{-- Registration number --}}
            <div class="text-sm text-black font-medium leading-loose">
                <dt class="text-sm font-bold text-gray-400">
                    Registration number
                </dt>
                <dd class="mt-1 text-[13px] font-medium text-gray-900">
                    @if ($verification->registration_number)
                        {{ $verification->registration_number }}
                    @else
                        N/A
                    @endif
                </dd>
            </div>

            {{-- Registration number --}}
            <div class="text-sm text-black font-medium leading-loose">
                <dt class="text-sm font-bold text-gray-400">
                    Registration number
                </dt>
                <dd class="mt-1 text-[13px] font-medium text-gray-900">
                    @if ($verification->registration_file)
                        <a href="{{ src($verification->registration_file) }}" class="btn-purple py-2 px-3 text-xs"
                            download>Download</a>
                    @else
                        N/A
                    @endif
                </dd>
            </div>
        </div>

        <div class="md:col-span-4 order-1 md:order-2">
            <div class="flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                <div class="flex-1 flex flex-col p-8">
                    <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full object-cover lazy"
                        src="{{ placeholder_img() }}" data-src="{{ src($verification->file_selfie) }}"
                        alt="{{ $verification->user->username }}">
                    <h3 class="mt-6 text-gray-900 text-sm font-medium">{{ $verification->user->username }}</h3>
                    <dl class="mt-1 flex-grow flex flex-col justify-between">
                        <dd class="mt-3">
                            @if ($verification->photo_status == 'verified')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-green-100 text-green-800">
                                    {{ __('Verified') }}
                                </span>
                            @endif
                            @if ($verification->photo_status == 'pending')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-yellow-100 text-yellow-800">
                                    {{ __('Pending') }}
                                </span>
                            @endif
                            @if ($verification->photo_status == 'awaiting')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-purple-100 text-purple-800">
                                    {{ __('Awaiting') }}
                                </span>
                            @endif
                            @if ($verification->photo_status == 'declined')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-red-100 text-red-800">
                                    {{ __('Declined') }}
                                </span>
                            @endif
                        </dd>
                    </dl>
                </div>
            </div>
        </div>

        {{-- Verification actions --}}
        <x-forms.modal placement="top" size="max-w-md" id="verifyModal" target="verifyButton" uid="verifyUserModal">
            <x-slot:title>
                <div>User Verifications</div>
                </x-slot>
                <x-slot:content>
                    <form wire:submit.prevent="verify">
                        <div class="grid grid-cols-1 gap-4 col-span-12 md:col-span-6">
                            <div class="">
                                <label class="block text-[0.8125rem] font-medium mb-1 tracking-wide">Business
                                    Verification</label>

                                <select class="form-ctr" wire:model.defer="bn_status" required>
                                    <option value=""></option>
                                    <option value="verified">Verify</option>
                                    <option value="declined">Decline</option>
                                </select>
                            </div>

                            <div class="">
                                <label class="block text-[0.8125rem] font-medium mb-1 tracking-wide">Photo
                                    Verification</label>

                                <select class="form-ctr" wire:model.defer="ph_status" required>
                                    <option value=""></option>
                                    <option value="verified">Verify</option>
                                    <option value="declined">Decline</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button class="btn-purple" wire:target="verify" wire:loading.attr="disabled"
                                modal-close="myModal">Proceed</button>
                        </div>
                    </form>
                    </x-slot>
        </x-forms.modal>
    </div>
</div>

@push('scripts')
    <script>
        function AdminVerifyAlpine() {
            return {

                updateAccount() {
                    if (!this.hasPassword) {
                        this.sendForm();
                        return
                    }

                    this.$refs.modalButton.click()
                },

                async sendForm() {
                    await @this.update()
                }
            }
        }

        window.AdminVerifyAlpine = AdminVerifyAlpine()
    </script>
@endpush
