<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('products.index') }}" class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Products</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('information.index') }}" class="nav-link {{ Request::is('information*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Information</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('hows.index') }}" class="nav-link {{ Request::is('hows*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Hows</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('contacts.index') }}" class="nav-link {{ Request::is('contacts*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Contacts</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('abouts.index') }}" class="nav-link {{ Request::is('abouts*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Abouts</p>
    </a>
</li>
