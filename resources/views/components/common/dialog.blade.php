@props(['toggleKey' => 'hidden', 'position' => null, 'sheetHeight' => 'h-[calc(80%-5rem)]', 'uid' => null])

<div class="modal-backdrop bg-zinc-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40 overflow-x-hidden xs:overflow-y-auto w-full h-full {{ $position }}" :class="{{ $toggleKey }} ? 'hidden' : 'flex'"
    @click="closeDialog">
    <div class="relative xs:p-4 w-full max-w-md mx-auto h-auto xs:top-[20%]">

        {{-- Modal content --}}
        <div class="fixed xs:relative {{ $sheetHeight }} xs:h-[initial] bottom-[0] bg-white rounded-t-xl xs:rounded-lg shadow dark:bg-zinc-800 w-full xs:w-[initial]">

            {{-- Modal header --}}
            @if ($title ?? null)
                <div class="flex justify-between items-center py-4 px-6 rounded-t border-b dark:border-zinc-600">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white">
                        {{ $title }}
                    </h3>
                    <button @click="dialogButton('{{ $uid }}')" type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm !p-1.5 inline-flex items-center dark:hover:bg-zinc-600 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endif

            {{-- Modal body --}}
            <div
                class="space-y-6 w-full overflow-y-auto xs:max-h-[calc(100vh-5rem)] max-h-[calc(100%-2rem)] scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-900 dark:scrollbar-track-zinc-600">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
