<div class="w-full">

    
    

    
    <div class="px-4 mx-auto mb-16 max-w-7xl sm:px-6 md:px-12">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">

                <div class="flex-1 min-w-0">

                    
                    <h2
                        class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        <?php echo app('translator')->get('messages.t_quotes'); ?>
                    </h2>

                    
                    <div class="flex flex-col mt-3 sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                            
                            <li>
                                <div class="flex items-center">
                                    <a href="<?php echo e(url('/')); ?>"
                                        class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                        <?php echo app('translator')->get('messages.t_home'); ?>
                                    </a>
                                </div>
                            </li>

                            
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="<?php echo e(url('seller/home')); ?>"
                                        class="text-sm font-medium text-gray-700 ltr:ml-1 rtl:mr-1 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        <?php echo app('translator')->get('messages.t_my_dashboard'); ?>
                                    </a>
                                </div>
                            </li>

                            
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        <?php echo app('translator')->get('messages.t_quotes'); ?>
                                    </span>
                                </div>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="px-4 mx-auto space-y-2 max-w-7xl sm:px-6 md:px-12">
        <div x-data="window.SellerDashboardCreateQuote">
            <div class="max-w-3xl pt-5 mx-auto bg-white rounded shadow-md">
                <form x-on:submit.prevent="createQuotation">
                    <div
                        class="grid grid-cols-1 px-3 mt-5 sm:grid-cols-2 sm:px-5 gap-x-3 sm:gap-x-5 gap-y-4 sm:gap-y-8">
                        <div class="">
                            <label for="firstName" class="label-text">First Name</label>
                            <input type="text" x-model="form.first_name" placeholder="firstname" id="firstName"
                                class="form-ctr">
                        </div>

                        <div class="">
                            <label for="lastName" class="label-text">Last Name</label>
                            <input type="text" x-model="form.last_name" placeholder="lastName" id="lastName"
                                class="form-ctr">
                        </div>

                        <div class="">
                            <label for="email" class="label-text">Email</label>
                            <input type="email" x-model="form.email" placeholder="email" id="email"
                                class="form-ctr">
                        </div>

                        <div class="">
                            <label for="phonenumber" class="label-text">Phone Number</label>
                            <input type="tel" x-model="form.phone_number" placeholder="phonenumber" id="phonenumber"
                                class="form-ctr">
                        </div>
                    </div>

                    <div class="flex items-center justify-between m-3 mx-6 mt-4">
                        <div class="font-semibold text-md">Quote Items</div>
                        <div class="flex items-center">
                            <button type="button"class="btn-light" @click="addItem">Add Row</button>
                        </div>
                    </div>

                    <div class="flex flex-col w-full divide-y dark:divide-gray-700 border-y dark:border-gray-700">
                        <template x-for="(order, index) in form.items" :key="index">
                            <div
                                class="flex items-start gap-2 px-3 py-6 sm:px-6 odd:bg-gray-50 dark:odd:bg-black/20 even:bg-neutral-50 dark:even:bg-black/50">
                                <div class="text-sm" x-text="`${index + 1}.`"></div>
                                <div class="grid grid-cols-2 gap-y-2 gap-x-3 sm:gap-x-5 md:grid-cols-4">
                                    <div class="col-span-2 md:col-span-4">
                                        <div class="flex justify-between mb-1">
                                            <label class="mb-0 label-text">Item Description</label>
                                            <span class="text-sm text-red-600" x-show="index > 0"
                                                @click="removeItem(index)">Remove</span>
                                        </div>
                                        <input type="tel" placeholder="Description"
                                            x-model="form.items[index].description" class="form-ctr">
                                    </div>

                                    <div class="">
                                        <label class="label-text">Quantity</label>
                                        <input type="number" placeholder="Quantity" class="form-ctr">
                                    </div>

                                    <div class="">
                                        <label class="label-text">Price</label>
                                        <input type="number" placeholder="Price" class="form-ctr">
                                    </div>

                                    <div class="">
                                        <label class="label-text">Tax Rate</label>
                                        <input type="number" placeholder="Price" class="form-ctr">
                                    </div>

                                    <div class="">
                                        <label class="label-text">Discount</label>
                                        <input type="number" placeholder="Price" class="form-ctr">
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <div
                        class="flex items-center justify-end px-4 py-3 mt-5 text-right shadow bg-gray-50 dark:bg-black/50 sm:px-5 sm:rounded-bl-md sm:rounded-br-md">
                        <button type="submit" wire:loading.attr="disabled"
                            class="px-6 py-3 text-sm font-semibold tracking-wide text-white rounded-md bg-primary-600 enabled:hover:bg-primary-700 disabled:bg-zinc-200 disabled:text-zinc-500">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        function SellerDashboardCreateQuote() {
            return {
                form: {
                    first_name: "",
                    last_name: "",
                    email: "",
                    phone_number: "",
                    items: [{
                        description: "",
                        quantity: 0,
                        price: 0,
                        tax_rates: 0,
                        discount: 0,
                    }]
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

                createQuotation() {
                    window.livewire.find('<?php echo e($_instance->id); ?>').create(this.form)
                }
            }
        }
        window.SellerDashboardCreateQuote = SellerDashboardCreateQuote()
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\artisan\riverr\resources\views/livewire/main/seller/quotes/create.blade.php ENDPATH**/ ?>