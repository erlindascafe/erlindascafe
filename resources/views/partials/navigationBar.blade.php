<nav class="navbar navbar-expand-lg w-100 fixed-top p-3">
    <div class="container-fluid">
        <h2 class="navbar-brand d-flex align-items-center" href="{{ route('home.page') }}">
            <!--<img src="images/coffee-beans.png" class="navbar-brand-image img-fluid" alt="Barista Cafe Template">-->
            Erlinda's Cafe
        </h2>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.page') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about.page') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu.page') }}">Our Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reviews.page') }}">Reviews</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.page') }}">Contact</a>
                </li>

            </ul>

            <div class="ms-lg-3">
                <a class="btn custom-btn custom-border-btn" href="{{ route('franchise.page') }}">
                    Franchise
                    <i class="bi-arrow-up-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
