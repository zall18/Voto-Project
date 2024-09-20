<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link">
            <!--begin::Brand Image--> <img src="{{ asset('LogoAsset/Logo Voto.png') }}" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text-->
            <!--end::Brand Link-->
    </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> <a href="/dashboard" class="nav-link active"> <i
                            class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                {{-- <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Widgets
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="./widgets/small-box.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Small Box</p>
                            </a> </li>
                        <li class="nav-item"> <a href="./widgets/info-box.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>info Box</p>
                            </a> </li>
                        <li class="nav-item"> <a href="./widgets/cards.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Cards</p>
                            </a> </li>
                    </ul>
                </li> --}}

                {{-- <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-pencil-square"></i>
                        <p>
                            Forms
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="./forms/general.html" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>General Elements</p>
                            </a> </li>
                    </ul>
                </li> --}}
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-table"></i>
                        <p>
                            Control
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="/user/userControl" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>User Control</p>
                            </a> </li>
                        <li class="nav-item"> <a href="/product/productControl" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Product Control</p>
                            </a> </li>
                        <li class="nav-item"> <a href="/order/orderControl" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Order Control</p>
                            </a> </li>
                        <li class="nav-item"> <a href="/category/categoryControl" class="nav-link"> <i
                                    class="nav-icon bi bi-circle"></i>
                                <p>Category Control</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i
                            class="nav-icon bi bi-box-arrow-in-right"></i>
                        <p>
                            Auth
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="/logout" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Logout</p>
                            </a> </li>
                    </ul>
                </li>


            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar-->
