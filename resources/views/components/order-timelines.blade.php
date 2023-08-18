<div class="col-span-12 p-4 mt-2 bg-white border border-gray-200 rounded-lg shadow-sm md:col-span-4 dark:border-zinc-700 dark:bg-zinc-800">
    <h1 class="font-bold">Order Timeline</h1>

    <ol class="relative border-l border-gray-200 dark:border-gray-700">
        @foreach ($orderItem->orderTimelines as $timeline)
        <li class="mb-10 ml-4">
            <div
                class="absolute -left-1.5 mt-1.5 h-3 w-3 rounded-full border border-white bg-gray-200 dark:border-gray-900 dark:bg-gray-700">
            </div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                {{ format_date($timeline->created_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}</time>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{$timeline->name}}</h3>
            <p class="mb-4 text-[13px] text-gray-500 dark:text-gray-400">
                 {{$timeline->description}}
            </p>
        </li>
        @endforeach

    </ol>

</div>
