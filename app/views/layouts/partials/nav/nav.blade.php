<nav>
    <a href="{{ route('home') }}" class="logo"></a>
    <span class="phone"><i class="icon-phone"></i>828-259-9020</span>
    <ul>
        <li><a href="/#about">About</a></li>
        <li><a href="/#service">Services</a></li>
        <li>{{ link_to_route('work.index', 'Work') }}</li>
        <li><a href="/#contact">Contact</a></li>
        <li>{{ link_to_route('quotes.create', 'Quote') }}</li>
        <li>{{ link_to_route('uploads.create', 'Upload') }}</li>
    </ul>
    <button class="mobile-menu-button">
        <i class="fa fa-bars"></i>
    </button>
</nav>
