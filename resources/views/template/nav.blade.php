<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a href="" class="navbar-brand text-white">CRUD</a>
        <div class="navbar nav">
            <a href="/" class="nav-link text-white">Home</a>
            @auth
                <a href="/admin" class="nav-link text-white">Dashboard</a>
                <a href="/logout" class="nav-link text-white">Logout</a>
            @endauth
            @guest
                <a href="/login" class="nav-link text-white">Login</a>
            @endguest
        </div>
    </div>
</nav>
