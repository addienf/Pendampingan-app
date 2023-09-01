<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><img src="{{ asset('img\logodiskominfo.png') }}" alt="Card Kiri"></h3>
        </div>
        <ul class="list-unstyled components">
            <li>
                <div class="dashboard">
                    <i class="fa-solid fa-bars text-center d-flex align-center"></i><a
                        href="{{ url('list') }}">Dashboard</a>
                </div>
            </li>
            <li>
                <div class="pendampingan">
                    <i class="fa-solid fa-user-group text-center d-flex align-center"></i><a
                        href="{{ url('list') }}">Pendampingan</a>
                </div>
            </li>
            <li>
                <div class="tambah-user">
                    <i class="fa-solid fa-chart-simple text-center d-flex align-center"></i><a
                        href="{{ url('listUser') }}">Tambah User</a>
                </div>
            </li>
        </ul>
    </nav>
</div>
