<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #eeee;">
                    <a class="navbar-brand" href="{{ url('/') }}"><i class="fab fa-cloudversify fa-3x"></i>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-10">
                            <!-- ============= -->
                            <li class="nav-item dropdown">
                            <a class="add-button1 text-white nav-link " data-toggle="dropdown"
                                    href=""><i class="fa fa-plus-circle"></i>
                                    {{__('ui.categories') }} 
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('annoucements.all') }}">
                                     Todas las categorías</a>
                                    @foreach( $categories as $category )

                                    <a class="dropdown-item" href="{{ route('public.announcements.category', 
                                     [ 'name' => $category->name, 'id' =>$category->id] )}}">{{ $category->name }}</a>
                                    @endforeach

                                </div>
                            </li>
                            <!-- ============= -->

                            <li class="nav-item active">
                                <a class="nav-link text-white add-button" href="{{ route('announcement.new') }}">
                                    <i class="fa fa-plus-circle"></i> {{__('ui.newannouncement') }}</a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link login-button" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link login-button" href="{{ route('register') }}">
                                    {{__('ui.register') }}</a>
                            </li>
                            @endif
                            @else
                            @if (Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('revisor.home') }}">
                                    Área revisor
                                    <span class="badge badge-pill badge-warning">
                                        {{\App\Announcement::ToBeRevisionedCount()}}
                                    </span>
                                </a>
                            </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest

                            <li class="nav-item">
                                @include('layouts._locale', ['lang' => 'es', 'nation' => 'es'])
                            </li>

                            <li class="nav-item">
                                @include('layouts._locale', ['lang' => 'it', 'nation' => 'it'])
                            </li>

                            <li class="nav-item">
                                @include('layouts._locale', ['lang' => 'gb', 'nation' => 'gb'])
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
