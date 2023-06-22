<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu">
        <li class="mm-active">
            <a href="{{ url('admin') }}"><i class="ti-bar-chart"></i><span>Dashboard</span></a>
        </li>

        <li>
            <a href="{{ url('kasir') }}"><i class="ti-money"></i><span>Kasir</span></a>
        </li>

        <!-- <li>
            <a href="../page/invoice.html"><i class="ti-shopping-cart"></i><span>Invoice</span></a>
        </li> -->

        <li>
            <a href="javascript: void(0);"><i class="ti-shopping-cart"></i><span>Penyewaan</span><span
                    class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{ url('penyewaan-baru') }}"><i
                            class="ti-control-record"></i>Pesanan Baru</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('penyewaan') }}"><i
                            class="ti-control-record"></i>Berlangsung</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('riwayat') }}"><i
                            class="ti-control-record"></i>Riwayat</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ url('barang') }}"><i class="ti-view-list-alt"></i><span>Data Barang</span></a>
        </li>

        <li>
            <a href="{{ url('kategori') }}"><i class="ti-layers-alt"></i><span>Kategori</span></a>
        </li>

        <li>
            <a href="{{ url('user') }}"><i class="ti-user"></i><span>Manage User</span></a>
        </li>
    </ul>
</div>
