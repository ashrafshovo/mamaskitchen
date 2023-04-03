<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Mama's Kitchen</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                {{-- <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                </li> --}}

            

                <li>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown">
                            
                            {{ Auth::user()->name }}
                            <span class="caret" style="color: #555"></span>
                        </a>
                        <ul class="dropdown-menu" style="margin-top: 50px;margin-right: 10px;">
                            <li>
                                <a href="{{ route('admin.profile') }}">
                                    <i class="material-icons">account_circle</i>
                                    Profile
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('admin.profile.settings') }}">
                                   <i class="material-icons">settings</i>
                                    Settings
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="material-icons">exit_to_app</i>
                                    <p class="hidden-lg hidden-md">Logout</p>
                                    <form id="logout-form" method="post" action="{{ route('logout') }}" style="display:none;">
                                        @csrf
                                    </form> Logout
                                </a>
                            </li>
                        </ul>
                    </div> 
                </li>
            </ul>
        </div>
    </div>
</nav>
