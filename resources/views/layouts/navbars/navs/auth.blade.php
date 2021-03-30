<nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-transparent shadow">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}">
            Pelaporan Pengaduan Masyarakat
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-lg-auto">
                @hasanyrole('user')
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('pengaduan') }}">
                        <span>{{ __('Laporan') }}</a>
                    </a>
                </li>
                @endhasanyrole
                @hasanyrole('admin')
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('users-roles') }}">
                        <span >{{ __('User dan Role') }}</a>
                    </a>
                </li>
                @endhasanyrole
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>{{ auth()->user()->nama }}</span>
                        <i class="ni ni-bold-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">  
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>{{ __('My profile') }}</span>
                        </a>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="ni ni-user-run"></i>
                            <span>{{ __('Logout') }}</span>
                        </a>
                    </div>
                </li>
            </ul>
            
        </div>
    </div>
</nav>

