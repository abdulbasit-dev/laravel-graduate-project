<ul class="nav flex-column pt-3 pt-md-0">
    {{-- <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link d-flex align-items-center" target="__blank">
            <span class="mt-1 ms-1 sidebar-text">
                Front-End Website
            </span>
        </a>
    </li> --}}
    <li class="nav-item">
        <a href="{{ route('admin.home') }}" class="nav-link d-flex align-items-center">

            <span class="mt-1 ms-1 sidebar-text">
                Dashboard
            </span>
        </a>
    </li>




    @role('student')
    <li class="nav-item {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
        <span class="nav-link d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#student_profile">
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
        <div class="multi-level collapse" role="list" id="student_profile" aria-expanded="false">
            <ul class="flex-column nav">
                <li class="nav-item {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.profile.show') }}">
                        <span class="sidebar-text">My Profile</span>
                    </a>
                </li>

                @php
                $user = auth()->user()->load('project');
                $projectExsist = false;
                if ($user->project) {
                $projectExsist = true;
                }
                @endphp

                @if ($projectExsist)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.profile.project') }}">
                        <span class="sidebar-text">My Project</span>
                    </a>
                </li>
                @endif

                @php
                $user = auth()->user()->load('idea');
                $ideaExsist = false;
                if ($user->idea) {
                $ideaExsist = true;
                }
                @endphp

                @if ($ideaExsist)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.profile.idea') }}">
                        <span class="sidebar-text">My Idea</span>
                    </a>
                </li>

                @endif
            </ul>
        </div>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
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

    <li class="nav-item {{ request()->routeIs('admin.ideas.') ? 'active' : '' }}">
        <a href="{{ route('admin.ideas.create') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Submit Idea') }}</span>
        </a>
    </li>
    @endrole


    @hasanyrole('council')
    {{-- profile --}}
    <li class="nav-item {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
        <span class="nav-link d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#admin_profile">
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
        <div class="multi-level collapse" role="list" id="admin_profile" aria-expanded="false">
            <ul class="flex-column nav">
                <li class="nav-item {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.profile.show') }}">
                        <span class="sidebar-text">My Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    {{-- projects --}}
    <li class="nav-item {{ request()->routeIs('admin.projects.index') ? 'active' : '' }}">
        <a href="{{ route('admin.projects.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Projects') }}</span>
        </a>
    </li>

    {{-- ideas --}}
    <li class="nav-item {{ request()->routeIs('admin.ideas.*') ? 'active' : '' }}">
        <a href="{{ route('admin.ideas.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Ideas') }}</span>
        </a>
    </li>

    {{-- posters --}}
    <li class="nav-item {{ request()->routeIs('admin.projects.poster') ? 'active' : '' }}">
        <a href="{{ route('admin.projects.poster') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Posters') }}</span>
        </a>
    </li>

    <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

    {{-- Project Announcements --}}
    <li class="nav-item {{ request()->routeIs('admin.project-announcements.*') ? 'active' : '' }}">
        <a href="{{ route('admin.project-announcements.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Committee Announcement') }}</span>
            {{-- <span class="sidebar-text text-sm">{{ __('Project Announcements') }}</span> --}}
        </a>
    </li>

    {{-- evalution forms --}}
    <li class="nav-item {{ request()->routeIs('admin.forms.index') ? 'active' : '' }}">
        <a href="{{ route('admin.forms.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Evalution Forms') }}</span>
        </a>
    </li>
    @endrole

    @hasanyrole('admin|manager|team|teacher')

    {{-- profile --}}
    <li class="nav-item {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
        <span class="nav-link d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#admin_profile">
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
        <div class="multi-level collapse" role="list" id="admin_profile" aria-expanded="false">
            <ul class="flex-column nav">
                <li class="nav-item {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.profile.show') }}">
                        <span class="sidebar-text">My Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    {{-- projects --}}
    <li class="nav-item {{ request()->routeIs('admin.projects.index') ? 'active' : '' }}">
        <a href="{{ route('admin.projects.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Projects') }}</span>
        </a>
    </li>

    {{-- ideas --}}
    <li class="nav-item {{ request()->routeIs('admin.ideas.*') ? 'active' : '' }}">
        <a href="{{ route('admin.ideas.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Ideas') }}</span>
        </a>
    </li>

    {{-- posters --}}
    <li class="nav-item {{ request()->routeIs('admin.projects.poster') ? 'active' : '' }}">
        <a href="{{ route('admin.projects.poster') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Posters') }}</span>
        </a>
    </li>

    {{-- upload settting --}}
    <li class="nav-item {{ request()->routeIs('admin.upload-setting') ? 'active' : '' }}">
        <a href="{{ route('admin.upload-setting') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Upload Setting') }}</span>
        </a>
    </li>

    {{-- 🚩 --}}
    {{-- grants project --}}
    {{-- <li class="nav-item {{ request()->routeIs('admin.grants.index') ? 'active' : '' }}">
        <a href="{{ route('admin.grants.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Grant Project') }}</span>
        </a>
    </li> --}}

    {{-- 🚩 --}}
    {{-- grants idea --}}
    {{-- <li class="nav-item {{ request()->routeIs('admin.grants.indexIdea') ? 'active' : '' }}">
        <a href="{{ route('admin.grants.indexIdea') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Grant Idea') }}</span>
        </a>
    </li> --}}

    <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

    {{-- Project Announcements --}}
    <li class="nav-item {{ request()->routeIs('admin.project-announcements.*') ? 'active' : '' }}">
        <a href="{{ route('admin.project-announcements.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                    </path>
                </svg>
            </span>
            {{-- <span class="sidebar-text text-sm">{{ __('Project Announcements') }}</span> --}}
            <span class="sidebar-text text-sm">{{ __('Committee Announcements') }}</span>
        </a>
    </li>

    {{-- evalution forms 🚩 --}}
    {{-- <li class="nav-item {{ request()->routeIs('admin.forms.*') ? 'active' : '' }}">
        <span class="nav-link d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#eval_forms">
            <span class="d-flex  align-items-center">
                <span class="sidebar-icon">
                    <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </span>
                <span class="sidebar-text">Evaluation Forms</span>
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
        <div class="multi-level collapse" role="list" id="eval_forms" aria-expanded="false">
            <ul class="flex-column nav">
                <li
                    class="nav-item {{ request()->routeIs('admin.forms.firstSeminar') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.forms.firstSeminar') }}">
                        <span class="sidebar-text">First Seminar</span>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('admin.forms.finalSeminar') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.forms.finalSeminar') }}">
                        <span class="sidebar-text">Final Seminar</span>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('admin.forms.finalSeminarSupervisor') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.forms.finalSeminarSupervisor') }}">
                        <span class="sidebar-text">Final Evaluation Supervisor</span>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('admin.forms.theoryExam') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.forms.theoryExam') }}">
                        <span class="sidebar-text">Theory Exam</span>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('admin.forms.finalEegree') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.forms.finalEegree') }}">
                        <span class="sidebar-text">Final Degree</span>
                    </a>
                </li>

            </ul>
        </div>
    </li> --}}


    {{-- evaluation forms --}}
    <li class="nav-item">
        <span class="nav-link d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#college_depts">
            <span class="d-flex  align-items-center">
                <span class="sidebar-icon">
                    <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                </span>
                <span class="sidebar-text">{{ __('Evaluation Forms') }}</span>
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
        <div class="multi-level collapse" role="list" id="college_depts" aria-expanded="false">
            <ul class="flex-column nav">
                <li class="nav-item {{ request()->routeIs('admin.forms.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.forms.index') }}">
                        <span class="sidebar-text">{{ __('Evaluation Forms') }}</span>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('admin.forms.uploaded-form') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.forms.uploaded-form') }}">
                        <span class="sidebar-text">{{ __('Uploaded Evaluation Forms') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    {{-- experts --}}
    <li class="nav-item {{ request()->routeIs('admin.experts.*') ? 'active' : '' }}">
        <a href="{{ route('admin.experts.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Expert System Info') }}</span>
        </a>
    </li>

    {{-- announcement --}}
    <li class="nav-item {{ request()->routeIs('admin.announcements.*') ? 'active' : '' }}">
        <a href="{{ route('admin.announcements.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Announcements') }}</span>
        </a>
    </li>

    {{-- college & department --}}
    <li class="nav-item">
        <span class="nav-link d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#college_depts">
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
        <div class="multi-level collapse" role="list" id="college_depts" aria-expanded="false">
            <ul class="flex-column nav">
                <li
                    class="nav-item {{ request()->routeIs('admin.colleges.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.colleges.index') }}">
                        <span class="sidebar-text">Collegs</span>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->routeIs('admin.departments.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.departments.index') }}">
                        <span class="sidebar-text">Departments</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

    {{-- Student --}}
    <li class="nav-item {{ request()->routeIs('admin.users.student') ? 'active' : '' }}">
        <a href="{{ route('admin.users.student') }}" class="nav-link">
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
            <span class="sidebar-text text-sm">{{ __('Students') }}</span>
        </a>
    </li>

    {{-- Student --}}
    <li class="nav-item {{ request()->routeIs('admin.users.teacher') ? 'active' : '' }}">
        <a href="{{ route('admin.users.teacher') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" class="w-6 h-6" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Teachers') }}</span>
        </a>
    </li>

    {{-- users --}}
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
            <span class="sidebar-text text-sm">{{ __('System Users') }}</span>
        </a>
    </li>

    <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

    {{-- Website Settings --}}
    <li class="nav-item ">
        <a class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Website Settings') }}</span>
        </a>
    </li>

    {{-- teams --}}
    <li class="nav-item {{ request()->routeIs('admin.teams.*') ? 'active' : '' }}">
        <a href="{{ route('admin.teams.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Teams') }}</span>
        </a>
    </li>

    {{-- banners --}}
    <li class="nav-item {{ request()->routeIs('admin.banners.*') ? 'active' : '' }}">
        <a href="{{ route('admin.banners.index') }}" class="nav-link">
            <span class="sidebar-icon ">
                <svg class="icon icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </span>
            <span class="sidebar-text text-sm">{{ __('Banners') }}</span>
        </a>
    </li>
    @endhasanyrole

</ul>