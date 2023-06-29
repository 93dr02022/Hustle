<div class="w-full">

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

                            {{-- My dashboard --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ url('seller/home') }}"
                                        class="text-sm font-medium text-gray-700 ltr:ml-1 rtl:mr-1 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_my_dashboard')
                                    </a>
                                </div>
                            </li>

                            {{-- quotes --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_quotes')
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
        <div x-data="window.SellerDashboardEditQuote">
            @if ($canUpdate)
                <div class="max-w-3xl pt-5 mx-auto bg-white rounded shadow-md">
                    <form x-on:submit.prevent="update">
                        <div
                            class="grid grid-cols-1 px-3 mt-5 sm:grid-cols-2 sm:px-5 gap-x-3 sm:gap-x-5 gap-y-4 sm:gap-y-8">
                            <div class="">
                                <label for="firstName" class="label-text">First Name</label>
                                <input type="text" x-model="form.first_name" placeholder="firstname" id="firstName"
                                    class="form-ctr" required>
                                <span class="text-sm text-red-600" x-text="errors['first_name']"></span>
                            </div>

                            <div class="">
                                <label for="lastName" class="label-text">Last Name</label>
                                <input type="text" x-model="form.last_name" placeholder="lastName" id="lastName"
                                    class="form-ctr" required>
                                <span class="text-sm text-red-600" x-text="errors['last_name']"></span>
                            </div>

                            <div class="">
                                <label for="email" class="label-text">Email</label>
                                <input type="email" x-model="form.email" placeholder="email" id="email"
                                    class="form-ctr" required>
                                <span class="text-sm text-red-600" x-text="errors['email']"></span>
                            </div>

                            <div class="">
                                <label for="phonenumber" class="label-text">Phone Number</label>
                                <input type="tel" x-model="form.phone_number" placeholder="phonenumber"
                                    id="phonenumber" class="form-ctr" required>
                                <span class="text-sm text-red-600" x-text="errors['phone_number']"></span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between m-3 mx-6 mt-4">
                            <div class="font-semibold text-md">Quote Items</div>
                            <div class="flex items-center">
                                <button type="button" class="btn-light" @click="addItem">Add Row</button>
                            </div>
                        </div>

                        <div class="flex flex-col w-full divide-y dark:divide-gray-700 border-y dark:border-gray-700">
                            <span x-text="errors['items.0.description']"></span>
                            <template x-for="(order, index) in form.items" :key="index">
                                <div
                                    class="px-3 py-6 sm:px-6 odd:bg-gray-50 dark:odd:bg-black/20 even:bg-neutral-50 dark:even:bg-black/50">
                                    <div class="grid grid-cols-2 gap-y-2 gap-x-3 sm:gap-x-5 md:grid-cols-3">
                                        <div class="col-span-2 md:col-span-3">
                                            <div class="flex justify-between mb-1">
                                                <label class="mb-0 label-text"><span x-text="`${index + 1}.`"></span>
                                                    Item Description</label>
                                                <span class="text-sm text-red-600" x-show="index > 0"
                                                    @click="removeItem(index)">Remove</span>
                                            </div>
                                            <input type="tel" placeholder="Description"
                                                x-model="form.items[index].description" class="form-ctr" required>
                                        </div>

                                        <div class="">
                                            <label class="label-text">Quantity</label>
                                            <input type="number" placeholder="Quantity"
                                                x-model="form.items[index].quantity" class="form-ctr" min="1"
                                                required>
                                        </div>

                                        <div class="">
                                            <label class="label-text">Price</label>
                                            <input type="number" placeholder="Price"
                                                x-model="form.items[index].price" @input="sumTotal(index)"
                                                class="form-ctr" min="100" max="1000000" required>
                                        </div>

                                        <div class="">
                                            <label class="label-text">Discount</label>
                                            <input type="number" placeholder="Price"
                                                x-model="form.items[index].discount" @input="sumTotal(index)"
                                                class="form-ctr">
                                        </div>
                                    </div>
                                    <span class="text-sm text-red-600"
                                        x-text="errors[`items.${index}.description`]?.[0]"></span>
                                </div>
                            </template>
                        </div>

                        <div
                            class="flex items-start justify-end w-full p-6 odd:bg-gray-50 dark:odd:bg-black/20 even:bg-neutral-50 dark:even:bg-black/50 gap-y-2 gap-x-8">
                            <div>
                                <div class="h-6 text-right">Total :</div>
                            </div>
                            <div>
                                <div class="h-6 font-bold text-right" x-text="total"></div>
                            </div>
                        </div>

                        <div class="divide-y dark:divide-gray-700 border-y dark:border-gray-700">
                            <div class="grid grid-cols-2 gap-3 px-3 py-6 sm:gap-5 sm:px-6">
                                <div class="">
                                    <label class="label-text">Expiry Date</label>
                                    <input type="date" x-model="form.expires_at" class="form-ctr"
                                        min="{{ $expiration }}" required>
                                </div>

                                <div class="">
                                    <label class="label-text">Payment Method</label>
                                    <select class="form-ctr" x-model="form.payment_method" required>
                                        <option value="paystack">Paystack Payment</option>
                                        <option value="cash">Cash Payment</option>
                                    </select>
                                </div>

                                {{-- cash payment acknowlegement --}}
                                <div x-show="form.payment_method == 'cash'"
                                    class="col-span-2 bg-gray-100 border flex items-center gap-x-3  rounded py-5 px-3"
                                    x-cloak>
                                    <input id="checkbox-input" type="checkbox"
                                        class="focus:ring-primary-600 h-4 w-4 text-primary-600 border-gray-300 rounded"
                                        checked disabled>
                                    <label for="" class="text-sm text-gray-900">
                                        This is to affirm you have received cash payment from the quote recipient.
                                        Note this is a one time action and store commission will be deducted from your
                                        wallet.
                                    </label>
                                </div>

                                <div class="col-span-2">
                                    <label class="label-text">Note</label>
                                    <textarea type="number" rows="3" x-model="form.note" class="form-ctr"></textarea>
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex items-center justify-end px-4 py-3 text-right shadow bg-gray-50 dark:bg-black/50 sm:px-5 sm:rounded-bl-md sm:rounded-br-md">
                            <button type="submit" wire:loading.attr="disabled" wire:target="update"
                                class="btn-purple">Proceed</button>
                        </div>
                    </form>
                </div>
            @endif

            {{-- Quote can be updated --}}
            @if (!$canUpdate)
                <div class="max-w-xl py-5 mx-auto bg-white rounded shadow-md">
                    <div class="flex-shrink-0 flex justify-center">
                        <div class="inline-flex h-28 w-28 rounded-full bg-red-100 p-6 items-center justify-center">
                            <x-icons.card-icon width="50" height="50"></x-icons.card-icon>
                        </div>
                    </div>
                    <div class="text-base text-center my-5">You cant update quotation with payment record</div>
                    <div class="flex justify-center gap-x-4">
                        <a href="/seller/home" class="btn-light">Dashboard</a>
                        <a href="/seller/quotes" class="btn-purple">Quotations</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function SellerDashboardEditQuote() {
            return {
                errors: @json($errors),
                form: @json($quotation),

                quote: {},
                total: {{ $quotation->total }},
                copying: false,
                tax: @json($commission),

                sumTotal(index) {
                    this.total = this.form.items.reduce((acc, item) => {
                        return Number(acc) + Number(item.price);
                    }, 0).toFixed(2);

                    const totalDiscount = this.form.items.reduce((acc, item) => {
                        return Number(acc) + Number(item.discount);
                    }, 0).toFixed(2);

                    this.total = (this.total - totalDiscount).toFixed(2)

                    this.checkDiscount(index)
                },

                checkDiscount(index) {
                    let quote = this.form.items[index]
                    if (parseFloat(quote.discount) > parseFloat(quote.price)) {
                        this.toastMessage('You cant input a discount amount greater than the quote taxed amount.')
                        this.form.items[index].discount = 0
                        this.form.items[index].price = 0
                    }
                },

                addItem() {
                    this.form.items.push({
                        description: "",
                        quantity: 0,
                        price: 0,
                        tax_rates: 0,
                        discount: 0,
                    })
                },

                removeItem(index) {
                    this.forms.items.splice(index, 1)
                },

                async update() {
                    let res = await @this.update(this.form);
                    if (res?.errors) {
                        this.errors = res.errors
                        return;
                    }
                },

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
        window.SellerDashboardEditQuote = SellerDashboardEditQuote()
    </script>
@endpush
