<nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
    <a class="navbar-brand" href="/">Todo App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Todo App</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto gx-2">
                    <li class="nav-item">
                        <a class="nav-link {{Request::is("/")?'active':''}}" aria-current="page" href="/">Home</a>
                    </li>
                    @auth()
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('notes')?'active':''}}" href="/notes">Notes</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('note/add')?'active':''}}" href="/note/add">Add Notes</a>
                        </li>
                    @endauth
                </ul>
                <ul class="navbar-nav ms-auto gap-2">
                @auth()
                    @if(auth()->user()->profile)
                        <li @class('me-2')>
                        <img
                            src="{{asset('storage/'.auth()->user()->profile)}}"
                            alt="profile"
                            style="height:2.5rem;width: 2.5rem;border-radius: 50%"
                        />
                    </li>
                        @endif
                        <li>
                            <x-form action='logout' method="POST">
                                <x-button type="submit" @class("btn btn-danger p-2 w-lg-100") btnName="Logout" />
                            </x-form>
                        </li>

                @endauth

                @guest

                    <li><a class="btn btn-primary p-2 w-lg-100" href="/login">Login</a></li>
                    <li><a class="btn btn-light p-2 ms-lg-4" href="/signup">Sign up</a></li>

                @endguest
                    <li><a class="btn btn-primary rounded-5 px-4 py-2 text-center ms-lg-2 " href="#subscribe_input">Subscribe</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
