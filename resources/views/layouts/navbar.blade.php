<!-- Navbar Admin -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link user" href="#" role="button">
                <i class="fas fa-user user-auth"></i>
                {{ Auth::user()->name }}
            </a>

        </li>
    </ul>

    <!-- Right navbar links untuk memperbesar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
    <!-- Right navbar links untuk memperbesar -->
</nav>
<!-- Navbar Admin -->
