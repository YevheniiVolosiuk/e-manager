<x-app-layout>
    <x-slot name="pageHeading">
        <h2 class="lg:px-8 font-bold text-2xl lg:text-3xl text-gray-700 dark:text-white">
            {{--            {{ __('Employee') }}--}}
        </h2>
    </x-slot>
    @if(session('success'))
        <div>
            <div id="alert-border-3"
                 class="flex p-4 mt-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
                 role="alert">
                <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                          clip-rule="evenodd"></path>
                </svg>
                <div class="ml-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-3" aria-label="Close">
                    <span class="sr-only">{{ __('Dismiss') }}</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="flex items-center justify-between gap-y-3  pb-4 flex-wrap">
            <div>
                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                        class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">
                    <svg class="w-4 h-4 mr-2 text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                              clip-rule="evenodd"></path>
                    </svg>
                    {{ __('Last 30 days') }}
                    <svg class="w-3 h-3 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownRadio"
                     class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                     data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                     style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownRadioButton">
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-1" type="radio" value="" name="filter-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-1"
                                       class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ __('Last day') }}</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-2"
                                       class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ __('Last 7 days') }}</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-3" type="radio" value="" name="filter-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-3"
                                       class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ __('Last 30 days') }}</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-4" type="radio" value="" name="filter-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-4"
                                       class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ __('Last month') }}</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-5" type="radio" value="" name="filter-radio"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-5"
                                       class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ __('Last year') }}</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex gap-3 space-x-6 items-center flex-wrap justify-between">
                <label for="table-search" class="sr-only">Search</label>
                <form action="{{ route('employees.index')  }}" method="GET">
                    @csrf
                    <div class="relative">
                        <button type="submit" class="absolute inset-y-0 left-0 flex items-center pl-3 cursor-pointer">
                            <svg class="hover:scale-110 transition ease-out duration-300 w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <input type="text" id="table-search" name="search" value="{{ old('search') }}"
                               class=" w-80 block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="{{ __('Search for items') }}">
                    </div>
                </form>
                <div class="inline-flex items-center gap-x-1">
                    <a href="{{ route('employees.create') }}"
                       class=" text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[1.15rem] w-[1.15rem] mr-1" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                        {{ __('Add New') }}
                    </a>


                    <button type="button"
                            class="py-2 px-2.5 mr-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[1.15rem] w-[1.15rem] mr-1" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                  clip-rule="evenodd"/>
                        </svg>
                        {{ __('Export') }}
                    </button>
                </div>
            </div>

        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">{{ __('checkbox') }}</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Name') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Birth Date') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Hire Date') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Date of Addition') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Action') }}
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer"
                        onclick="window.location='{{ route('employees.show', $employee->id) }}'">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-{{ $employee->id }}" type="checkbox"
                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-{{ $employee->id }}"
                                       class="sr-only">{{ __('checkbox') }}</label>
                            </div>
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $employee->full_name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $employee->birth_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $employee->hire_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $employee->created_at }}
                        </td>
                        <td class="flex items-center px-6 py-3 space-x-3">
                            <a href="{{ route('employees.edit', $employee->id) }}"
                               class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-[1.15rem] w-[1.15rem] mr-1"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                                    <path fill-rule="evenodd"
                                          d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                          clip-rule="evenodd"/>
                                </svg>
                                {{ __('Edit') }}
                            </a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[1.15rem] w-[1.15rem] mr-1"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    {{ __('Delete') }}
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
                {!! $employees->withQueryString()->onEachSide(1)->links('pagination::tailwind-new') !!}
            </div>
        </div>
    </div>
    @section('scripts')
        <script type="text/javascript">
            console.log('it works')
        </script>
    @stop
</x-app-layout>





































{{--    <!-- Default Modal -->--}}
{{--    <div id="add-new-employee-modal" tabindex="-1"--}}
{{--         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">--}}
{{--        <div class="relative w-full h-full max-w-lg md:h-auto">--}}
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            <!-- Modal content -->--}}
{{--            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">--}}
{{--                <form id="addNewEmployeeForm" action="{{ route('employees.store') }}" method="POST">--}}
{{--                    @csrf--}}
{{--                    <!-- Modal header -->--}}
{{--                    <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">--}}
{{--                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">--}}
{{--                            {{ __('Add new employee') }}--}}
{{--                        </h3>--}}
{{--                        <button type="button"--}}
{{--                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"--}}
{{--                                data-modal-hide="add-new-employee-modal">--}}
{{--                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path fill-rule="evenodd"--}}
{{--                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"--}}
{{--                                      clip-rule="evenodd"></path>--}}
{{--                            </svg>--}}
{{--                            <span class="sr-only">{{ __('Close modal') }}</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <!-- Modal body -->--}}
{{--                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">--}}
{{--                        <div class="px-6 py-6 lg:px-8">--}}

{{--                            <div class="grid gap-6 grid-cols-6">--}}
{{--                                <div class="col-span-6  md:col-span-3">--}}
{{--                                    <label for="firstName"--}}
{{--                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('First Name') }}</label>--}}
{{--                                    <input type="text" name="first_name" id="firstName" placeholder="Moris"--}}
{{--                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">--}}
{{--                                </div>--}}
{{--                                <div class="col-span-6  md:col-span-3">--}}
{{--                                    <label for="lastName"--}}
{{--                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Last Name') }}</label>--}}
{{--                                    <input type="text" name="last_name" id="lastName" placeholder="Rozen"--}}
{{--                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">--}}
{{--                                </div>--}}
{{--                                <div class="col-span-6  md:col-span-3">--}}
{{--                                    <label for="birthDate"--}}
{{--                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Birth Date') }}</label>--}}
{{--                                    <div class="relative ">--}}
{{--                                        <div--}}
{{--                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">--}}
{{--                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"--}}
{{--                                                 fill="currentColor" viewBox="0 0 20 20"--}}
{{--                                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                <path fill-rule="evenodd"--}}
{{--                                                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"--}}
{{--                                                      clip-rule="evenodd"></path>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <input datepicker id="birthDate" type="text" name="birth_date"--}}
{{--                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                                               placeholder="{{ __('Select date') }}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-span-6  md:col-span-3">--}}
{{--                                    <label for="gender"--}}
{{--                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Select Gender') }}</label>--}}
{{--                                    <select id="gender" name="gender"--}}
{{--                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">--}}
{{--                                        <option hidden>Choose a gender</option>--}}
{{--                                        @foreach($genders as $gender)--}}
{{--                                            <option value="{{ $gender->value }}"> {{ firstUpperNextLower($gender->name) }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}

{{--                                </div>--}}
{{--                                <div class="col-span-6  md:col-span-3">--}}
{{--                                    <label for="hireDate"--}}
{{--                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Hire Date') }}</label>--}}
{{--                                    <div class="relative ">--}}
{{--                                        <div--}}
{{--                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">--}}
{{--                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"--}}
{{--                                                 fill="currentColor" viewBox="0 0 20 20"--}}
{{--                                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                <path fill-rule="evenodd"--}}
{{--                                                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"--}}
{{--                                                      clip-rule="evenodd"></path>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <input datepicker datepicker-format="{{ config('app.date_format_front') }}"--}}
{{--                                               id="hireDate" type="text" name="hire_date"--}}
{{--                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                                               placeholder="{{ __('Select date') }}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Modal footer -->--}}
{{--                    <div--}}
{{--                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">--}}
{{--                        <button type="submit"--}}
{{--                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
{{--                            {{ __('Add employee') }}--}}
{{--                        </button>a--}}
{{--                        <button data-modal-hide="add-new-employee-modal" type="button"--}}
{{--                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">--}}
{{--                            {{ __('Decline') }}--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
