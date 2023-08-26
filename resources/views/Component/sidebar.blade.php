<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Diskominfo Jabar</h3>
        </div>
        <ul class="list-unstyled components">
            <p>Dummy Heading</p>
            <li class="active">
                <a>Dashboard</a>
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
                        href="{{ url('register') }}">Tambah User</a>
                </div>
            </li>
        </ul>
        <ul class="list-unstyled CTAs">
            <li>
                <a class="btn btn-primary" href="logout" role="button">Logout</a>
            </li>
        </ul>
    </nav>
</div>
