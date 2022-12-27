@props(['label', 'value' => '', 'type' => 'text', 'placeholder' => '', 'name', 'showError' => true])

@if (isset($label))
  <label for="{{ $name }}">{{ $label }}</label>
@endif

<input type="{{ $type }}" value="{{ $value }}" id="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}"
  name="{{ $name }}">

@if ($showError)
  @error($name)
    <span class="text-danger">{{ $message }}</span>
  @enderror
@endif
