<div>
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <img src="{{ asset('admin/assets/img') }}/logo.png" height="30" width="30">
          <a href="{{route('admin.dashboard')}}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Starter Kit</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="{{route('admin.dashboard')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>
          <!-- Tables -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div data-i18n="Account Settings">Tables</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ route('admin.table.datatable') }}" class="menu-link">
                  <div data-i18n="Account">Data Table</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- File Manager --->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-file-blank"></i>
              <div data-i18n="Account Settings">File Manager</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ env('APP_URL') }}/admin/filemanager" class="menu-link">
                  <div data-i18n="Account">File Manager</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('file-manager.custom-input') }}" class="menu-link">
                  <div data-i18n="Account">Custom Input</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Role and permissions --->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user"></i>
              <div data-i18n="Account Settings">Roles & Permissions</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ route('role.list') }}" class="menu-link">
                  <div data-i18n="Account">Roles</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('permission.list') }}" class="menu-link">
                  <div data-i18n="Account">Permissions</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('user.list') }}" class="menu-link">
                  <div data-i18n="Account">Users</div>
                </a>
              </li>
            </ul>
          </li>
          {{-- Pages --}}
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div data-i18n="Account Settings">Pages</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ route('page.create') }}" class="menu-link">
                  <div data-i18n="Account">New</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
</div>