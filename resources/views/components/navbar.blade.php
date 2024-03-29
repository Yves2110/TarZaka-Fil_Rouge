<nav class="navbar p-0 fixed-top d-flex flex-row">

    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        {{-- <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control" placeholder="Recherche">
                </form>
            </li>
        </ul> --}}

        <ul class="navbar-nav justify-content-center ms-5 text-dark font-weight-bolder">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=" {{route('bailleurs.index')}} ">
                <span class="menu-icon">
                    <i class="mdi mdi-account-key"></i>
                </span><span> Bailleurs</span>

            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{route('maisons.index')}} ">
                <span class="menu-icon">
                    <i class="mdi mdi-home"></i>
                </span><span>Maisons</span>

            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{route('locataires')}} ">
                <span class="menu-icon">
                    <i class="mdi mdi-account-star"></i>
                </span><span>Locataires</span>

            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{route('Paiements')}} ">
                <span class="menu-icon">
                    <i class="mdi mdi-cash-multiple"></i>
                </span><span>Paiements</span>

            </a>
            </li>
          </ul>

        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile text-dark">
                        <img class="img-xs rounded-circle" src="{{ Auth::user()->photo }}" alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0">Profile</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Paramètre</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item"  href=" {{ route('logout') }} ">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-logout text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Déconnexion</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">Infos compte</p>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>
