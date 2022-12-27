<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

      <x-menu.nav-item href="#" icon="home" data_i18n="nav.add_on_drag_drop.main" title="الرئيسية" />

      <x-menu.nav-item href="#" icon="language" data_i18n="nav.dash.main" title="لغات الموقع" badge="info" badge_content="5">
        <x-menu.content>
          <x-menu.item href="" data_i18n="nav.dash.ecommerce" title="عرض الكل" />
          <x-menu.item href="" data_i18n="nav.dash.crypto" title="أضافة لغة جديده" />
        </x-menu.content>
      </x-menu.nav-item>
      <x-menu.nav-item href="#" icon="group" data_i18n="nav.dash.main" title="الاقسام الرئيسيه" badge="danger" badge_content="5">
        <x-menu.content>
          <x-menu.item href="" data_i18n="nav.dash.ecommerce" title="عرض الكل" />
          <x-menu.item href="" data_i18n="nav.dash.crypto" title="أضافة قسم جديد" />
        </x-menu.content>
      </x-menu.nav-item>

      <x-menu.nav-item href="#" icon="male" data_i18n="nav.dash.main" title="الاقسام الفرعية" badge="danger" badge_content="400">
        <x-menu.content>
          <x-menu.item href="" data_i18n="nav.dash.ecommerce" title="عرض الكل" />
          <x-menu.item href="" data_i18n="nav.dash.crypto" title="أضافة قسم فرعي جديد" />
        </x-menu.content>
      </x-menu.nav-item>

      <x-menu.nav-item href="#" icon="male" data_i18n="nav.dash.main" title="المتاجر" badge="success" badge_content="10">
        <x-menu.content>
          <x-menu.item href="" data_i18n="nav.dash.ecommerce" title="عرض الكل" />
          <x-menu.item href="" data_i18n="nav.dash.crypto" title="أضافة متجر" />
        </x-menu.content>
      </x-menu.nav-item>

      <x-menu.nav-item href="#" icon="male" data_i18n="nav.dash.main" title="الطلاب" badge="warning" badge_content="10">
        <x-menu.content>
          <x-menu.item href="" data_i18n="nav.dash.ecommerce" title="عرض الكل" />
          <x-menu.item href="" data_i18n="nav.dash.crypto" title="أضافة طالب" />
        </x-menu.content>
      </x-menu.nav-item>

      <x-menu.nav-item href="#" icon="male" data_i18n="nav.dash.main" title="تذاكر المراسلات" badge="danger" badge_content="0">
        <x-menu.content>
          <x-menu.item href="" data_i18n="nav.dash.ecommerce" title="تذاكر الطلاب" />
        </x-menu.content>
      </x-menu.nav-item>

      <x-menu.nav-item href="#" icon="gear" data_i18n="nav.templates.main" title="{{ __('admin/sidebar.settings') }}">
        <x-menu.content>
          <x-menu.item href="#" icon="truck" title="{{ __('admin/sidebar.shipping methods') }}" data_i18n="nav.templates.vert.main">
            <x-menu.content>
              <x-menu.item href="{{ route('shipping.method.edit', 'free') }}" title="{{ __('admin/sidebar.free shipping') }}" />
              <x-menu.item href="{{ route('shipping.method.edit', 'local') }}" title="{{ __('admin/sidebar.local shipping') }}" />
              <x-menu.item href="{{ route('shipping.method.edit', 'outer') }}" title="{{ __('admin/sidebar.outer shipping') }}" />
            </x-menu.content>
          </x-menu.item>

          <x-menu.item href="#" icon="money" title="{{ __('admin/sidebar.payment methods') }}"
            data_i18n="nav.templates.horz.main" />

        </x-menu.content>
      </x-menu.nav-item>



      <li class=" nav-item"><a href="#"><i class="television"></i><span class="menu-title"
            data-i18n="nav.templates.main">Templates</span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main">Vertical</a>
            <ul class="menu-content">
              <li><a class="menu-item" href="../vertical-menu-template" data-i18n="nav.templates.vert.classic_menu">Classic Menu</a>
              </li>
              <li><a class="menu-item" href="../vertical-modern-menu-template">Modern Menu</a>
              </li>
              <li><a class="menu-item" href="../vertical-compact-menu-template" data-i18n="nav.templates.vert.compact_menu">Compact
                  Menu</a>
              </li>
              <li><a class="menu-item" href="../vertical-content-menu-template" data-i18n="nav.templates.vert.content_menu">Content
                  Menu</a>
              </li>
              <li><a class="menu-item" href="../vertical-overlay-menu-template" data-i18n="nav.templates.vert.overlay_menu">Overlay
                  Menu</a>
              </li>
            </ul>
          </li>
          <li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main">Horizontal</a>
            <ul class="menu-content">
              <li><a class="menu-item" href="../horizontal-menu-template" data-i18n="nav.templates.horz.classic">Classic</a>
              </li>
              <li><a class="menu-item" href="../horizontal-menu-template-nav" data-i18n="nav.templates.horz.top_icon">Full Width</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
