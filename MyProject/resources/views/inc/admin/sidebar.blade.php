<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="../../../img/header128.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <h6 class="d-block">{{Auth::user()->name}}</h6>
        </div>
    </div>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>
                        Новини
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.courses')}}" class="nav-link">
                    <i class="nav-icon fas fa-graduation-cap"></i>
                    <p>
                        Курси
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.test')}}" class="nav-link">
                    <i class="nav-icon fas fa-question-circle"></i>
                    <p>
                        Тести
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.tasks')}}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Запитання
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.users')}}" class="nav-link">
                    <i class="nav-icon fas fa-user-circle"></i>
                    <p>
                        Користувачі
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.chart')}}" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Статистика
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
