<nav class="tm-primary-nav tm-section-active">
    <ul class="tm-primary-nav-list">
        <li class="{{ (request()->is('/')) ? 'menu-item current-menu-item' : 'menu-item' }}"><a href="/">Home</a>

        </li>
        <li class="{{ (request()->is('about-us')) ? 'menu-item current-menu-item' : 'menu-item' }}"><a href="/about-us">About</a>

        </li>
        <li class="{{ (request()->is('services')) ? 'menu-item current-menu-item' : 'menu-item' }}"><a href="/services">Services</a>

        </li>
        <!-- <li class="{{ (request()->is('projects')) ? 'menu-item current-menu-item' : 'menu-item' }}" class="menu-item"><a href="/partners">Partners</a>

        </li> -->
        <li class="{{ (request()->is('team')) ? 'menu-item current-menu-item' : 'menu-item' }}"><a href="/team">Team</a></li>


        <li class="{{ (request()->is('contact-us')) ? 'menu-item current-menu-item' : 'menu-item' }}"><a href="/contact-us">Contact Us</a>

        </li>
    </ul>
    <div class="tm-hero-search-btn">

    </div>

</nav>
`
