@props(['href', 'icon', 'data_i18n', 'title', 'badge', 'badge_content'])
<li class="nav-item">
  <a href="{{ $href ?? '#' }}">

    @if (isset($icon))
      <i class="la la-{{ $icon }}"></i>
    @endif

    <span class="menu-title" data-i18n="{{ $data_i18n }}">{{ $title }}</span>
    @if (isset($badge))
      <span class="badge badge badge-{{ $badge }}  badge-pill float-right mr-2">{{ $badge_content ?? 0 }}</span>
    @endif
  </a>
  {{ $slot }}
</li>
