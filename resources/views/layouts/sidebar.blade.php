<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{url('/')}}">Arenzha</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{url('/')}}">CN</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="disable">
          <a href="{{url('/dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Main</li>
        <li class="{{ request()->is('/') ? 'active' : '' }}">
          <a href="{{url('/')}}" class="nav-link" target="_blank"><i class="fas fa-home"></i><span>Website</span></a>
        </li>
        <li class="{{ request()->is('produk-layanan') ? 'active' : '' }}">
          <a href="{{url('/produk-layanan')}}" class="nav-link"><i class="fas fa-box"></i><span>Products</span></a>
        </li>
        <li class="{{ request()->is('client') ? 'active' : '' }}">
          <a href="{{url('/client')}}" class="nav-link"><i class="fas fa-users"></i><span>Client</span></a>
        </li>
        <li class="{{ request()->is('service') ? 'active' : '' }}">
          <a href="{{url('/service')}}" class="nav-link"><i class="fas fa-users"></i><span>Services</span></a>
        </li>
        <li class="{{ request()->is('message') ? 'active' : '' }}">
          <a href="{{url('/message')}}" class="nav-link"><i class="fas fa-comment"></i><span>Message</span></a>
        </li>
        <!-- <li>
          <a href="{{url('/settings')}}" class="nav-link"><i class="fas fa-cogs"></i><span>Settings</span></a>
        </li> -->
      </ul>
    </aside>
</div>
