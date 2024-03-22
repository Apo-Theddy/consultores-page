<div class="flex flex-col gap-1">
    @foreach ($filters as $filter)
        <div class="flex items-center mt-3">
            <input id="{{ $filter }}" type="radio" value="{{ $filter }}" name="default-radio"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
            <label for="{{ $filter }}" class="ms-2 text-sm">{{ $filter }}</label>
        </div>
    @endforeach
</div>
