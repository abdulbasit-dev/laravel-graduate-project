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
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
                </span>
                <span class="sidebar-text">Profile</span>
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
                <li class="nav-item {{ request()->routeIs('admin.colleges.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.colleges.index') }}">
                        <span class="sidebar-text">My Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.departments.index') }}">
                        <span class="sidebar-text">My Project</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.projects.index') ? 'active' : '' }}">
        <a href="{{ route('admin.projects.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Projects') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
        <a href="{{ route('admin.users.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Users') }}</span>
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

  

   

    <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

    <li class="nav-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
        <a href="{{ route('admin.users.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Banner') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
        <a href="{{ route('admin.users.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Teams') }}</span>
        </a>
    </li>


</ul>