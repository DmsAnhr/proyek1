<header class="header">
    <a href="#" class="nav-btn">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <div class="top-panel">
        <div class="container">
            <div class="top-panel-cover">
                <ul class="header-cont">
                    <li>
                        <a href="tel:+912345687">
                            <i class="fa fa-phone"></i>0851-0396-5552 (Office)​​
                        </a>
                    </li>
                    <li>
                        <a href="mailto:Info@Ciliwungcamp.Com">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            Info@Ciliwungcamp.Com
                        </a>
                    </li>
                    <!-- <li>
                                    <a href="index.html" class="logo"><img src="assets/img/new.png" alt="logo"></a>
                                </li> -->
                </ul>
                <ul class="icon-right-list">
                    <!-- <li><a class="header-like" href="#"><i class="fa fa-heart"
                                        aria-hidden="true"></i><span>6</span></a>
                            </li> -->
                    <li><a class="header-user" href="{{url('/logout')}}"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}</a></li>
                    <li><a class="header-cart" href="#"><i class="fa fa-shopping-cart"
                                aria-hidden="true"></i><span>6</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="container">
            <a href="{{url('/')}}" class="logo"><img src="{{ asset('assets/user/img/new.png') }}" alt="logo"></a>
            <nav class="nav-menu">
                <ul class="nav-list">
                    <!-- <li><a href="#">Home</a></li> -->
                    <!-- <li><a href="services.html">Services</a></li> -->
                    <li><a href="{{url('about')}}">About</a></li>
                    <li class="dropdown">
                        <a href="#">Produk <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul>
                            <li><a href="{{url('shop')}}">Rental</a></li>
                            <li><a href="{{url('shop')}}">Outbond</a></li>
                            <li><a href="{{url('404')}}">Tour</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('shop')}}">rental</a></li>
                    <li><a href="{{url('gallery')}}">Galeri</a></li>
                    <li><a href="{{url('news')}}">Berita</a></li>
                    <!-- <li class="dropdown">
                                    <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="404.html">Page error 404</a></li>
                                    </ul>
                                </li> -->
                    <li><a href="{{url('contact')}}">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>