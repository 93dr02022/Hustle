@props(['label', 'placeholder', 'model', 'options', 'isDefer', 'isAssociative', 'componentId', 'value', 'text', 'selected' => null, 'class' => null, 'show_option_insead' => false, 'showLabel' => true, 'keyuid' => null])

<div class="relative default-select2 {{ $errors->first($model) ? 'select2-custom-has-error' : '' }}">
    @if ($showLabel)
        <label
            class="text-[0.8125rem] font-medium block mb-2 {{ $errors->first($model) ? 'text-red-600 dark:text-red-500' : 'text-gray-700 dark:text-white' }}">{{ htmlspecialchars_decode($label) }}</label>
    @endif

    <select data-pharaonic="select2" data-component-id="{{ $componentId }}"
        wire:model{{ $isDefer ? '.defer' : '' }}="{{ $model }}" id="select2-id-{{ $model }}{{ $keyuid  }}"
        data-placeholder="{{ $placeholder }}" class="{{ $class ? $class : 'select2' }}" {{ $attributes }}
        data-dir="{{ config()->get('direction') }}" style="display: none" onload="this.style.display = 'block'">
        <option value=""></option>
        @foreach ($options as $key => $option)
            {{-- Check if type of array associative --}}
            @if (!$isAssociative)
                <option value="{{ $option[$value] }}"
                    {{ $selected && $selected === $option[$value] ? 'selected' : '' }}>{{ $option[$text] }}</option>
            @elseif ($show_option_insead)
                <option value="{{ $option }}" {{ $selected && $selected === $option ? 'selected' : '' }}>
                    {{ $option }}</option>
            @else
                <option value="{{ $key }}" {{ $selected && $selected === $key ? 'selected' : '' }}>
                    {{ $key }}</option>
            @endif
        @endforeach
    </select>
    @error($model)
        <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first($model) }}</p>
    @enderror

</div>

@pushOnce('styles')
    {{-- Select2 --}}
    <link href="{{ mix('css/select2.css') }}" rel="stylesheet" />
@endPushOnce

@pushOnce('scripts')
    {{-- jQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- Select2 --}}
    <script src="{{ mix('js/select2.js') }}"></script>

    {{-- Pharaonic select2 --}}
    <script src="{{ url('vendor/pharaonic/pharaonic.select2.min.js') }}"></script>
@endPushOnce
