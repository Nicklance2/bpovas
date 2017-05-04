<div class="front-end-navbar navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="css/images/logo-s.png"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/about">Place Order</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right auth-link">
                @if(!auth()->check())
                    <li><a class="bg-success" href="/login">LOGIN</a></li>
                @endif
                @if(!auth()->guest())
                    <li><a class="bg-success" href="/admin">My Account</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->

    </div>
</div>