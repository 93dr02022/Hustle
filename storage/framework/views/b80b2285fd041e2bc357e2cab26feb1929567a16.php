<div class="w-full">

    
    

    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">

                <div class="min-w-0 flex-1">

                    
                    <h2
                        class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        <?php echo app('translator')->get('messages.t_quotes'); ?>
                    </h2>

                    
                    <div class="mt-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
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
                                        class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
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

    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 space-y-2">
        <div x-data="window.SellerDashboardCreateQuote">
            <div class="max-w-3xl mx-auto bg-white rounded shadow-md pt-5">
                <form x-on:submit.prevent="createQuotation">
                    <div class="grid grid-cols-2 gap-x-5 gap-y-8 px-5">
                        <div class="">
                            <label for="company" class="label-text">Company</label>
                            <input type="text" x-model="form.company" id="company" class="form-ctr">
                        </div>
                    </div>

                    <div
                        class="mt-5 flex items-center justify-end px-4 py-3 bg-gray-50 dark:bg-black/50 text-right sm:px-5 shadow sm:rounded-bl-md sm:rounded-br-md">
                        
                        <button type="submit" wire:loading.attr="disabled"
                            class="bg-primary-600 enabled:hover:bg-primary-700 text-white py-3 px-6 rounded-md text-sm font-semibold tracking-wide disabled:bg-zinc-200 disabled:text-zinc-500">Save</button>
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
                    company: "this is a demo content"
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