@props(['href', 'title', 'icon', 'data_i18n'])
<li class="{{ Request::fullUrlIs($href) ? 'active' : '' }}">
  <a class="menu-item" href="{{ $href }}" data-i18n="{{ $data_i18n ?? '' }}">

    @if (isset($icon))
      <i class="la la-{{ $icon }}"></i>
    @endif

    {{ $title }}
  </a>
  {{ $slot }}
</li>
