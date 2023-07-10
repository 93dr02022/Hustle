<div class="modal-backdrop bg-gray-500 bg-opacity-75 overflow-y-auto overflow-x-hidden fixed inset-0 z-[50] h-full items-end xs:items-center translate-y-full md:translate-y-0 md:translate-x-full transition-transform duration-300"
    :class="hidden ? '!translate-y-0 md:!translate-x-0' : ''" @click="closeRightModal">
    <div class="relative bg-white xs:max-w-[450px] mx-auto flex flex-col overflow-hidden my-0 max-h-full h-full mr-0">
        <div class="flex justify-between items-center py-4 px-4 border-b">
            {{ $title }}
        </div>

        <div class="overflow-y-auto relative p-4">
            {{ $slot }}
        </div>
    </div>
</div>
