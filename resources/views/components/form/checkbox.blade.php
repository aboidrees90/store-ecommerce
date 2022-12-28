@props(['label', 'name', 'value' => '1', 'type' => 'checkbox', 'placeholder' => '', 'showError' => true])

<input type="{{ $type }}" value="{{ $value }}" id="{{ $name }}" class="switchery" placeholder="{{ $placeholder }}" name="{{ $name }}" data-color="success">

@if (isset($label))
<label for="{{ $name }}">{{ $label }}</label>
@endif

@if ($showError)
@error($name)
<span class="text-danger">{{ $message }}</span>
@enderror
@endif
