<div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
        <!-- Footer Content -->
        <div class="footer-nav position-relative">
            <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                <li
                    class="{{ Route::is((auth()->user()->role == 'siswa' ? 'home' : auth()->user()->role == 'guru') ? 'dashboard' : 'dashboard-kurikulum') ? 'active' : '' }}">
                    <a
                        href="{{ route((auth()->user()->role == 'siswa' ? 'home' : auth()->user()->role == 'guru') ? 'dashboard' : 'dashboard-kurikulum') }}">
                        <i class="bi bi-house"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a target="_blank"
                        href="https://shopee.co.id/Buku-SMK-Kurikulum-Merdeka-PENGELASAN-FCAW-(Teknik-Pengelasan)-i.586476697.23776239059">
                        <i class="bi bi-shop"></i>
                        <span>Shop</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://smkn2dumai.sch.id/">
                        <i class="bi bi-chat-dots"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="{{ Route::is('status') ? 'active' : '' }}">
                    <a href="{{ route('status') }}">
                        <i class="bi bi-person-badge"></i>
                        <span>Status</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="bi bi-gear"></i>
                        <span>logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
