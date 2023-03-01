<div>
    <select name="{{ $name }}" id="{{ $name }}-select" class="block mt-1 w-full rounded" data-control="select2" data-hide-search="true">
        @foreach($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
</div>