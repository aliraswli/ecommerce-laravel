<div>
    @isset($label)
        <label for="{{ $name }}" class="block text-sm/6 font-medium text-gray-500 dark:text-gray-300">
            {{ $required ? '*' : '' }} {{ $label }}
        </label>
    @endisset

    <div class="mb-3">
        <input
            id="{{ $name }}"
            name="{{ $name }}"
            type="{{ $type ?? "text" }}"
            {{ $required ? 'required' : '' }}
            value="{{ old($name, $value ?? "") }}"
            placeholder="{{ $placeholder ?? "" }}"
            class="block w-full p-3 text-base outline dark:outline-none -outline-offset-1 placeholder:text-gray-400  sm:text-sm/6 transition-all text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400"
        />
    </div>

    @if(isset($errors))
        @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    @endif
</div>
