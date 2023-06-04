 {{-- Icon --}}
 <div class="h-28 w-28 border-2 border-gray-100 dark:border-zinc-600 bg-gray-50 dark:bg-zinc-700 rounded-full flex items-center justify-center mx-auto">
    <svg class="mx-auto h-9 w-9 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <g>
            <path fill="none" d="M0 0h24v24H0z"></path>
            <path d="M6.5 2h11a1 1 0 0 1 .8.4L21 6v15a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6l2.7-3.6a1 1 0 0 1 .8-.4zm12 4L17 4H7L5.5 6h13zM9 10H7v2a5 5 0 0 0 10 0v-2h-2v2a3 3 0 0 1-6 0v-2z">
            </path>
        </g>
    </svg>
</div>

{{-- Texts --}}
<h2 class="mt-4 text-base font-bold text-gray-700 dark:text-gray-100">{{ __('messages.t_checkout') }}</h2>
<div class="flex items-center justify-center text-green-400 hover:text-green-500 mt-1">
    <svg class="h-5 w-5 ltr:mr-1 rtl:ml-1" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path
            d="M17 10h-1v-2c0-2.205-1.794-4-4-4s-4 1.795-4 4v2h-1c-1.103 0-2 .896-2 2v7c0 1.104.897 2 2 2h10c1.103 0 2-.896 2-2v-7c0-1.104-.897-2-2-2zm-5 8.299c-.719 0-1.3-.58-1.3-1.299s.581-1.301 1.3-1.301 1.3.582 1.3 1.301-.581 1.299-1.3 1.299zm2-7.299h-4v-3c0-1.104.897-2 2-2s2 .896 2 2v3z">
        </path>
    </svg>
    <p class="text-sm">{{ __('messages.t_ur_transaction_is_secure') }}</p>
</div>