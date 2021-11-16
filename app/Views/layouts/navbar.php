<nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-body rounded">
    <div class="container-fluid">
        <a class="navbar-brand ps-5" href="#"><img src="/img/logo.jpeg" alt="" style="height: 50px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Barang
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/barang">Barang</a></li>
                        <li><a class="dropdown-item" href="#">Barang Masuk</a></li>
                        <li><a class="dropdown-item" href="/barang-keluar">Barang Keluar</a></li>
                        <li><a class="dropdown-item" href="#">Stok</a></li>
                        <li><a class="dropdown-item" href="#">Pinjam Barang</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        User
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">User</a></li>
                        <li><a class="dropdown-item" href="#">Level User</a></li>
                        <li><a class="dropdown-item" href="#">Supplier</a></li>
                        <li><a class="dropdown-item" href="#">Sumber Dana</a></li>
                        <li><a class="dropdown-item" href="#">Lokasi</a></li>
                    </ul>
                </li>
            </ul>
            <a href="/logout" class="logout text-dark pe-5">
                Logout
            </a>
        </div>
    </div>
</nav>