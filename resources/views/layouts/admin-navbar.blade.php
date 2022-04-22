<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 border-radius-xl z-index-sticky blur shadow-blur left-auto" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder mb-0"></h6>
       </nav>
       <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
         <a href="javascript:;" class="nav-link p-0 text-body">
           <div class="sidenav-toggler-inner">
             <i class="sidenav-toggler-line"></i>
             <i class="sidenav-toggler-line"></i>
             <i class="sidenav-toggler-line"></i>
           </div>
         </a>
       </div>
       <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav ms-md-auto pe-md-3 d-flex justify-content-end">
             <li class="nav-item d-xl-none ps-3 d-flex align-items-center" style="margin-right:10px;">
                 <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                   <div class="sidenav-toggler-inner">
                     <i class="sidenav-toggler-line"></i>
                     <i class="sidenav-toggler-line"></i>
                     <i class="sidenav-toggler-line"></i>
                   </div>
                 </a>
             </li>
             <li class="nav-item dropdown d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">{{ Auth::guard('admin')->user()->name }}</span>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                    {{-- <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="{{ route('admin.profile') }}">
                            <div class="d-flex py-1">
                                <div class="my-auto">
                                    <img src="{{ asset('backend/assets/img/marie.jpg') }}" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-sm font-weight-normal mb-1">
                                        <span class="font-weight-bold">Profile</span>
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </li> --}}
                    <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="{{ route('admin.changepass') }}">
                            <div class="d-flex py-1">
                                <div class="my-auto">
                                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                <path d="M1455 4954 c-287 -11 -446 -39 -568 -101 -196 -98 -350 -268 -428
                                        -467 -51 -132 -58 -208 -68 -736 -5 -267 -8 -486 -7 -487 0 -1 24 4 51 12 28
                                        7 154 18 280 25 127 6 231 13 231 13 1 1 7 207 13 457 12 509 13 515 83 595
                                        94 107 154 119 608 118 388 0 488 -9 568 -49 61 -32 120 -98 142 -162 8 -22
                                        15 -107 17 -209 l5 -173 286 0 285 0 -7 195 c-3 108 -13 227 -21 265 -68 322
                                        -313 579 -630 660 -117 30 -570 53 -840 44z" />
                                                <path d="M3334 4076 c-11 -8 -57 -93 -103 -190 -78 -165 -82 -177 -69 -203 7
                                        -15 26 -32 41 -37 53 -19 73 4 158 184 43 91 79 177 79 192 0 32 -34 68 -65
                                        68 -11 0 -30 -6 -41 -14z" />
                                                <path d="M3525 3658 c-93 -33 -176 -65 -184 -71 -23 -19 -32 -56 -19 -80 14
                                        -26 38 -46 57 -47 7 0 90 27 185 61 175 62 216 87 216 130 0 25 -43 69 -67 69
                                        -10 -1 -94 -28 -188 -62z" />
                                                <path d="M3344 3358 c-32 -15 -48 -55 -34 -88 9 -22 44 -43 182 -109 93 -44
                                        180 -81 192 -81 37 0 66 28 66 64 0 18 -6 39 -12 48 -12 15 -307 158 -353 171
                                        -11 3 -30 1 -41 -5z" />
                                                <path d="M1840 1390 c-18 -18 -20 -33 -20 -140 0 -72 -4 -120 -10 -120 -5 0
                                        -54 25 -107 55 -54 30 -105 55 -114 55 -32 0 -69 -40 -69 -74 0 -40 11 -50
                                        128 -119 l93 -54 -33 -20 c-18 -11 -65 -39 -104 -61 -40 -23 -74 -49 -78 -58
                                        -12 -30 -6 -71 12 -87 32 -29 76 -20 166 33 127 75 116 81 116 -63 0 -124 0
                                        -126 26 -146 34 -26 54 -26 88 0 26 20 26 22 26 146 0 144 -11 138 116 63 92
                                        -54 139 -63 167 -32 20 22 22 71 5 94 -7 9 -53 40 -103 68 -49 28 -93 55 -97
                                        58 -4 4 32 29 80 56 113 63 132 81 132 122 0 35 -37 74 -69 74 -9 0 -60 -25
                                        -113 -55 -53 -30 -101 -55 -107 -55 -7 0 -11 40 -11 120 0 107 -2 122 -20 140
                                        -11 11 -33 20 -50 20 -17 0 -39 -9 -50 -20z" />
                                                <path d="M2679 1391 c-23 -18 -24 -27 -27 -144 l-4 -124 -101 58 c-126 73
                                        -153 76 -183 17 -26 -51 -7 -77 107 -142 54 -32 99 -61 99 -64 0 -4 -42 -31
                                        -94 -60 -52 -29 -100 -60 -107 -68 -18 -22 -15 -71 6 -94 30 -33 71 -25 175
                                        34 l95 55 6 -117 c6 -131 10 -145 45 -161 37 -16 52 -14 79 14 24 23 25 30 25
                                        145 0 66 3 120 6 120 3 0 47 -25 99 -55 102 -60 142 -68 175 -35 22 22 26 67
                                        7 91 -7 9 -54 40 -105 69 -51 29 -94 56 -97 60 -2 4 35 29 83 56 103 57 132
                                        84 132 119 0 32 -41 75 -72 75 -13 -1 -68 -27 -123 -60 l-100 -59 -3 122 c-2
                                        108 -5 124 -24 144 -26 28 -68 30 -99 4z" />
                                                <path d="M3514 1389 c-16 -17 -20 -42 -24 -144 l-5 -123 -100 59 c-55 32 -110
                                        59 -123 59 -29 0 -72 -42 -72 -70 0 -39 19 -57 120 -115 55 -31 100 -60 100
                                        -64 0 -3 -41 -28 -91 -56 -128 -70 -151 -104 -108 -159 32 -40 69 -34 178 29
                                        51 30 95 55 97 55 2 0 4 -54 4 -119 0 -141 11 -165 75 -165 64 0 75 24 75 165
                                        0 65 2 119 4 119 3 0 47 -25 99 -55 123 -72 175 -72 193 1 10 38 -18 68 -115
                                        124 -50 28 -93 55 -96 60 -3 4 40 33 95 64 100 57 120 76 120 116 0 28 -43 70
                                        -72 70 -13 0 -68 -27 -123 -59 l-100 -59 -5 123 c-6 140 -17 165 -75 165 -20
                                        0 -39 -8 -51 -21z" />
                                                <path d="M4352 1387 c-19 -20 -22 -36 -24 -144 l-3 -121 -100 59 c-55 32 -110
                                        58 -123 59 -29 0 -72 -42 -72 -70 0 -39 19 -58 119 -116 55 -32 98 -61 95 -65
                                        -2 -4 -38 -26 -79 -49 -104 -57 -135 -85 -135 -121 0 -38 32 -69 71 -69 18 0
                                        67 21 125 55 53 30 97 55 100 55 2 0 4 -54 4 -120 0 -115 1 -122 25 -145 27
                                        -28 42 -30 79 -14 35 16 39 30 45 161 l6 118 95 -55 c104 -60 145 -68 175 -35
                                        21 23 24 72 6 94 -7 8 -55 39 -107 68 -52 29 -94 56 -94 60 0 3 45 32 99 64
                                        114 65 133 91 107 142 -30 59 -57 56 -183 -17 l-101 -58 -4 124 c-3 117 -4
                                        126 -27 144 -31 26 -73 24 -99 -4z" /> </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold">changes Password</span>
                                </h6>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <div class="d-flex py-1">
                               <div class="my-auto">
                                  <img src="{{ asset('backend/assets/img/logout.jpeg') }}" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                               </div>
                               <div class="d-flex flex-column justify-content-center">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                     <span class="font-weight-bold">Logout</span>
                                  </h6>
                               </div>
                            </div>
                        </a>
                    </li>
                </ul>
             </li>
          </ul>
       </div>
    </div>
</nav>

{{-- <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky blur shadow-blur left-auto" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
             <li class="breadcrumb-item text-sm">
                <a class="opacity-3 text-dark" href="javascript:;">
                   <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>shop </title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                         <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                               <g transform="translate(0.000000, 148.000000)">
                                  <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                  <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                               </g>
                            </g>
                         </g>
                      </g>
                   </svg>
                </a>
             </li>
             <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
             <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Default</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Default</h6>
       </nav>
       <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
          <a href="javascript:;" class="nav-link text-body p-0">
             <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
             </div>
          </a>
       </div>
       <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
             <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Type here..." onfocus="focused(this)" onfocusout="defocused(this)">
             </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
             <li class="nav-item d-flex align-items-center">
                <a href="../../pages/authentication/signin/illustration.html" class="nav-link text-body font-weight-bold px-0" target="_blank">
                <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                <span class="d-sm-inline d-none">Sign In</span>
                </a>
             </li>
             <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                   <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                   </div>
                </a>
             </li>
             <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" aria-hidden="true"></i>
                </a>
             </li>
             <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                   <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                         <div class="d-flex py-1">
                            <div class="my-auto">
                               <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 " alt="user image">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                               <h6 class="text-sm font-weight-normal mb-1">
                                  <span class="font-weight-bold">New message</span> from Laur
                               </h6>
                               <p class="text-xs text-secondary mb-0">
                                  <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                  13 minutes ago
                               </p>
                            </div>
                         </div>
                      </a>
                   </li>
                   <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                         <div class="d-flex py-1">
                            <div class="my-auto">
                               <img src="../../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                               <h6 class="text-sm font-weight-normal mb-1">
                                  <span class="font-weight-bold">New album</span> by Travis Scott
                               </h6>
                               <p class="text-xs text-secondary mb-0">
                                  <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                  1 day
                               </p>
                            </div>
                         </div>
                      </a>
                   </li>
                   <li>
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                         <div class="d-flex py-1">
                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                               <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <title>credit-card</title>
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                     <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                           <g transform="translate(453.000000, 454.000000)">
                                              <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                              <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                           </g>
                                        </g>
                                     </g>
                                  </g>
                               </svg>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                               <h6 class="text-sm font-weight-normal mb-1">
                                  Payment successfully completed
                               </h6>
                               <p class="text-xs text-secondary mb-0">
                                  <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                  2 days
                               </p>
                            </div>
                         </div>
                      </a>
                   </li>
                </ul>
             </li>
          </ul>
       </div>
    </div>
 </nav> --}}
