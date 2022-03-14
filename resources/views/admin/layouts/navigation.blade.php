<ul class="nav flex-column pt-3 pt-md-0">
    <li class="nav-item">
        <a href="{{ route('admin.home') }}" class="nav-link d-flex align-items-center">

            <span class="mt-1 ms-1 sidebar-text">
                Student Graduation Projects
            </span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
        <a href="{{ route('admin.projects.create') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Upload Project') }}</span>
        </a>
    </li>

    <li class="nav-item">
        <span class="nav-link d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#submenu-app">
            <span class="d-flex  align-items-center">
                <span class="sidebar-icon">
                    <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z">
                        </path>
                    </svg>
                </span>
                <span class="sidebar-text">College & Department</span>
            </span>
            <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </span>
        </span>
        <div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">
            <ul class="flex-column nav">
                <li
                    class="nav-item {{ request()->routeIs('admin.colleges.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.colleges.index') }}">
                        <span class="sidebar-text">Collegs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.departments.index') }}">
                        <span class="sidebar-text">Departments</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>


    <li class="nav-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
        <a href="{{ route('admin.users.index') }}" class="nav-link">
            <span class="sidebar-icon ">

            </span>
            <span class="sidebar-text text-sm">{{ __('Users') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
        <a href="{{ route('admin.users.index') }}" class="nav-link">
            <span class="sidebar-icon ">
    
            </span>
            <span class="sidebar-text text-sm">{{ __('Banner') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
        <a href="{{ route('admin.users.index') }}" class="nav-link">
            <span class="sidebar-icon ">
    
            </span>
            <span class="sidebar-text text-sm">{{ __('Teams') }}</span>
        </a>
    </li>


</ul>