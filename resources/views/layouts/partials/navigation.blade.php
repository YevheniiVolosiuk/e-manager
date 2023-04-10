<nav class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
    <ul class="space-y-2">
        <li>
            <x-complex-nav-button variant="nav-link" :href="route('dashboard.index')" :active="request()->routeIs('dashboard.index')">
                <x-slot name="svgIcon">
                    <svg aria-hidden="true"
                         class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                         fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                </x-slot>
                {{ __('Dashboard') }}
            </x-complex-nav-button>
        </li>
        {{--        <li>--}}
        {{--            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">--}}
        {{--                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>--}}
        {{--                <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>--}}
        {{--                <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>--}}
        {{--            </a>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">--}}
        {{--                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>--}}
        {{--                <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>--}}
        {{--                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>--}}
        {{--            </a>--}}
        {{--        </li>--}}
        <li>
            <x-complex-nav-button type="button"
                                  aria-controls="dropdown-user-sidebar"  data-collapse-toggle="dropdown-user-sidebar">
                <svg aria-hidden="true"
                     class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Users</span>
                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </x-complex-nav-button>


            <ul id="dropdown-user-sidebar" class="hidden py-2 space-y-2">
                <li>
                    <x-complex-nav-button @class(['pl-8']) variant="nav-link" :href="route('users.index')" :active="request()->routeIs('users.index')">
                        Users List
                    </x-complex-nav-button>
                </li>
            </ul>
        </li>
        <li>
{{--            <button type="button"--}}
{{--                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"--}}
{{--                    aria-controls="dropdown-employee" data-collapse-toggle="dropdown-employee">--}}
{{--                <svg aria-hidden="true"--}}
{{--                     class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"--}}
{{--                          clip-rule="evenodd"></path>--}}
{{--                </svg>--}}
{{--                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Employees</span>--}}
{{--                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path fill-rule="evenodd"--}}
{{--                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"--}}
{{--                          clip-rule="evenodd"></path>--}}
{{--                </svg>--}}
{{--            </button>--}}
            <x-complex-nav-button type="button"
                    aria-controls="dropdown-employee"  data-collapse-toggle="dropdown-employee">
                <svg aria-hidden="true"
                     class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Employees</span>
                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </x-complex-nav-button>

            <ul id="dropdown-employee" class="hidden py-2 space-y-2">
                <li>
                    <x-complex-nav-button @class(['pl-8']) variant="nav-link" :href="route('employees.index')" :active="request()->routeIs('employees.index')">
                        Employee List
                    </x-complex-nav-button>
                </li>
            </ul>

        </li>
        <li>
            <x-complex-nav-button variant="nav-link" :href="route('departments.index')" :active="request()->routeIs('departments.index')">
                <x-slot name="svgIcon">
                    <svg aria-hidden="true"
                         class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                         fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                              clip-rule="evenodd"></path>
                    </svg>
                </x-slot>
                Departments
            </x-complex-nav-button>
        </li>
    </ul>
</nav>
