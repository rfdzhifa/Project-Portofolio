<nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color: #4B4B4B">ecompos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{ $title === 'Home' ? 'active' : ''}}" aria-current="page" href="/" style="color: #4B4B4B">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ $title === 'About' ? 'active' : ''}}" href="/about" style="color: #4B4B4B">About</a>
                </li>
                <li class="nav-item">
                <!--<a class="nav-link {{ $title === 'Gallery' ? 'active' : ''}}" href="/gallery">Gallery</a>-->
                </li>
                <li class="nav-item">
                <a class="nav-link {{ $title === 'Contacts' ? 'active' : ''}}" href="{{route('contacts.create') }}" style="color: #4B4B4B">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('login')}}" style="color: #4B4B4B">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('register')}}" style="color: #4B4B4B">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>