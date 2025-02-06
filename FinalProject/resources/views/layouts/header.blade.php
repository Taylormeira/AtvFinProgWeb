<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Navegação -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">Categoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/events">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/participants">Seus eventos</a>
                    </li>
                    @endauth
                </ul>

                <!-- Login e Logout -->
                <div class="d-flex align-items-center ms-auto">
                    <ul class="navbar-nav">
                        @auth
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <a class="nav-link" href="/logout"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Cadastre-se</a>
                        </li>
                        @endguest
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</header>