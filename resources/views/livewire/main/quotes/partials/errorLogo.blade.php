 {{-- Icon --}}
 <div class="h-28 w-28 border-2 border-gray-100 dark:border-zinc-600 bg-gray-50 dark:bg-zinc-700 rounded-full flex items-center justify-center mx-auto">
     <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 24 24" class="mx-auto h-9 w-9 text-gray-400 dark:text-gray-300" style="color: rgb(99, 102, 241);">
         <path fill="currentColor" fill-rule="evenodd"
             d="M15.314 2a2 2 0 0 1 1.414.586l4.686 4.686A2 2 0 0 1 22 8.686v6.628a2 2 0 0 1-.586 1.414l-4.686 4.686a2 2 0 0 1-1.414.586H8.686a2 2 0 0 1-1.414-.586l-4.686-4.686A2 2 0 0 1 2 15.314V8.686a2 2 0 0 1 .586-1.414l4.686-4.686A2 2 0 0 1 8.686 2h6.628Z" class="duoicon-secondary-layer"
             opacity=".3"></path>
         <path fill="currentColor" fill-rule="evenodd" d="M12 6a1 1 0 0 0-.993.883L11 7v6a1 1 0 0 0 1.993.117L13 13V7a1 1 0 0 0-1-1Zm0 9a1 1 0 1 0 0 2 1 1 0 0 0 0-2Z" class="duoicon-primary-layer"></path>
     </svg>
 </div>

 {{-- Texts --}}
 <h2 class="mt-4 text-base font-bold text-gray-700 dark:text-gray-100">{{ __('messages.t_checkout') }}</h2>
 <div class="flex items-center justify-center text-green-400 hover:text-green-500 mt-1">
     <svg class="h-5 w-5 ltr:mr-1 rtl:ml-1" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M17 10h-1v-2c0-2.205-1.794-4-4-4s-4 1.795-4 4v2h-1c-1.103 0-2 .896-2 2v7c0 1.104.897 2 2 2h10c1.103 0 2-.896 2-2v-7c0-1.104-.897-2-2-2zm-5 8.299c-.719 0-1.3-.58-1.3-1.299s.581-1.301 1.3-1.301 1.3.582 1.3 1.301-.581 1.299-1.3 1.299zm2-7.299h-4v-3c0-1.104.897-2 2-2s2 .896 2 2v3z">
         </path>
     </svg>
     <p class="text-sm">Sorry your payment completed with error</p>
 </div>