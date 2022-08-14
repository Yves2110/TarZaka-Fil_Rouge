<style>
      @font-face {
        src: url('/../font/GRAM 01.ttf');
        font-family: "GRAM 01";}
.log{
     font-family: "GRAM 01";
     font-size: 3em !important;
}
.sidebar,.sidebar-brand-wrapper{
    background-color: #fcb46b!important;
}
.navbar,.content-wrapper,.dropdown-menu,.bg{
    background-image: linear-gradient(to right, #fcb46b, #fdc387, #fed1a3, #fddfc0, #fcedde) !important;
}
.menu-title: hover{
    color: white !important;
}
.menu-arrow,.mdi-dots-vertical{
    color: white !important;
}
.mdi-bell{
    color: #d36d08;
}
.trait{
    border: 6px solid #ffffff;
    border-radius: 2px;
    z-index: 1550;
}
.mdi-menu-down{
    color: #000000 !important;
}
.card{
    background-color: #f7f1f1 !important;
}
.bande{
    background-color: #d36d08 !important;
    height: 5em;
    width: 90%;
    border-radius: 4px !important;
    margin-left: 5em !important;
}
input{
        height:3em !important;
    background-color:rgb(235, 226, 226) !important;
    }
 </style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo text-bold text-light log" href="index.html">Tar'Zaka</a>
        {{-- <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                alt="logo" /></a> --}}
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic d-flex flex-wrap justify-content-center">
                    <div class="count-indicator my-4">
                        <img class="img-xm rounded-circle h-100 w-100 " src="{{ Auth::user()->photo }}" alt="">
                    </div>
                    <div class="profile-name text-dark">
                        <h5 class=" font-weight-normal">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h5>
                        <span class="ms-4">Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right  sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content text-light">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content text-light">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>

                </div>
            </div>
        </li>

        <li class="nav-item menu-items my-4">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-clipboard-account "></i>
                </span>
                <span class="menu-title text-dark">Gestion des secrétaire</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                         <a class="nav-link" href="pages/ui-features/buttons.html">
                            <span class="menu-icon">
                                <i class="mdi mdi-account-multiple-plus "></i>
                            </span>
                            <span class="menu-title text-light">Ajouté</span>
                        </a>
                        </li>
                    <li class="nav-item">
                         <a class="nav-link" href="pages/ui-features/dropdowns.html">
                            <span class="menu-icon">
                                <i class="mdi mdi-file-document-box "></i>
                            </span>
                            <span class="menu-title text-light">Liste</span>
                        </a>
                        </li>

                </ul>
            </div>
        </li>

        <li class="nav-item menu-items mb-5">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-ticket-account "></i>
                </span>
                <span class="menu-title text-dark">Factures</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/blank-page.html">
                            <span class="menu-icon">
                                <i class="mdi mdi-bell"></i>
                            </span>
                            <span class="menu-title text-light">Notifications</span>
                        </a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="pages/samples/error-500.html">
                            <span class="menu-icon">
                                <i class="mdi mdi-calendar-clock"></i>
                            </span>
                            <span class="menu-title text-light">Historique</span>

                        </a>
                        </li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link btn-danger text-light"
                href=" {{route('logout')}}  ">
                <span class="menu-icon">
                    <i class="mdi mdi-logout "></i>
                </span>
                <span class="menu-title">Déconnexion</span>
            </a>
        </li>
        {{-- <img src=" {{ asset('assets/images/TARZAKA.png') }}  " alt="" class="img-responsive img-fluid">  --}}
    </ul>
</nav>
<div class="trait"></div>

