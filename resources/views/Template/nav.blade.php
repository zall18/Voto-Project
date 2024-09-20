<div class="py-1 bg-black">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-phone2"></span></div>
                        <span class="text">+62 878-9336-4214</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-paper-plane"></span></div>
                        <span class="text">votocameral@gmail.com</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Voto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ $title == 'home' ? 'active' : '' }}"><a href="/home" class="nav-link">Home</a>
                </li>
                <li class="nav-item"><a href="/shop" class="nav-link">Shop</a></li>
                <li class="nav-item {{ $title == 'about' ? 'active' : '' }}"><a href="about.html"
                        class="nav-link">About</a></li>
                <li class="nav-item {{ $title == 'profile' ? 'active' : '' }}"><a href="/me"
                        class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="/logoutCustomer" class="nav-link">Logout</a></li>
                @if (Session::get('role') == 'admin')
                    <li class="nav-item"><a href="/loginAdmin" class="nav-link">Dashboard</a></li>
                @endif
                <li class="nav-item cta cta-colored {{ $title == 'cart' ? 'active' : '' }}"><a href="/cart"
                        class="nav-link"><span class="icon-shopping_cart"></span>[{{ $cartCount }}]</a></li>

            </ul>
        </div>
    </div>
</nav>
