<!-- need to remove -->
<li class="nav-item text-bold">
    <a href="{{ route('home') }}" class="nav-link {{ Route::current()->getName() == 'home' ? 'active' : '' }} nav-m">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>

    <a href="{{ route('home') }}" class="nav-link nav-m">
    <i class="nav-icon  fas fa-address-card"></i>
        <p> À propos</p>
    </a>

    <a href="{{ route('home') }}" class="nav-link nav-m">
    <i class="nav-icon fas fa-briefcase-medical"></i>
        <p>Nos services</p>
    </a>

    <a href="{{ route('home') }}" class="nav-link nav-m">
    <i class="nav-icon fas fa-landmark"></i>
        <p>CGU</p>
    </a>

    <a href="{{ route('home') }}" class="nav-link nav-m">
    <i class="nav-icon  fas fa-user-shield"></i>
        <p>Confidentialité</p>
    </a>

    @if  (Auth::user()->profile == 'Admin' )
   
    <a href="{{ route('administrator') }}" class="nav-link nav-m   {{ Route::current()->getName() == 'administrator' ? 'active' : '' }}">
    <i class="nav-icon  fas fa-users-cog"></i>
        <p>Administration</p>
    </a>

    @endif

    <!-- <a href="{{ route('home') }}" class="nav-link nav-m">
    <i class="nav-icon fas fa-people-carry"></i>
        <p>Nous rejoindre</p>
    </a> -->

    <a href="{{ route('contact') }}" class="nav-link nav-m   {{ Route::current()->getName() == 'contact' ? 'active' : '' }}">
    <i class="nav-icon fas fa-phone"></i>
        <p>Contact</p>
    </a>

    <!-- <a href="{{ route('home') }}" class="nav-link nav-m">
    <i class="nav-icon fas fa-handshake"></i>
        <p>Partenaires</p>
    </a> -->

   
</li>
