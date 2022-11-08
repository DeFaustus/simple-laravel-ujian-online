            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(2) == '' ? 'active' : '' }}" aria-current="page"
                                href="/dashboard">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        @role('ADMIN')
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(2) == 'mapel' ? 'active' : '' }}"
                                    href="/dashboard/mapel">
                                    Data Mapel (Mata Pelajaran)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(2) == 'dataguru' ? 'active' : '' }}"
                                    href="/dashboard/dataguru">
                                    Data Guru
                                </a>
                            </li>
                        @endrole
                        @can('can guru')
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(2) == 'soal' ? 'active' : '' }}"
                                    href="/dashboard/soal">
                                    Soal
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </nav>
