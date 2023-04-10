<x-app-layout>
    <x-slot name="pageHeading">
        <h2 class="lg:px-8 font-bold text-2xl lg:text-3xl text-gray-700 dark:text-white">
            {{ __('Employee Add New') }}
        </h2>
    </x-slot>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="w-full">
                            <label for="first_name"
                                   class=" @error('first_name') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror block mb-2 text-sm font-medium ">{{ __('First Name') }} </label>
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') ?? $employee->first_name }}"
                                   class="@error('first_name') is-invalid @else border border-gray-300 focus:border-primary-600 dark:border-gray-600 border @enderror bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus-primary-500 "
                                   placeholder="Adam">
                            @error('first_name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium"></span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label for="last_name"
                                   class=" @error('last_name') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror block mb-2 text-sm font-medium">{{ __('Last Name') }} </label>
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') ?? $employee->last_name }}"
                                   class="@error('last_name') is-invalid @else border border-gray-300 focus:border-primary-600 dark:border-gray-600 border @enderror bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus-primary-500 "
                                   placeholder="Lones">
                            @error('last_name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium"></span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="gender"
                                   class="@error('gender') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white block @enderror mb-2 text-sm font-medium ">{{ __('Gender') }}</label>
                            <select id="gender" name="gender"
                                    class=" @error('gender') is-invalid @else focus:border-primary-500 dark:border-gray-600 dark:focus:border-primary-500  @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500  block w-full p-2.5 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 ">
                                <option hidden>{{ __('Choose a gender') }}</option>
                                @foreach($genders as $gender)
                                    <option
                                        @selected((old('gender') ?? $employee->gender) == $gender->value) value="{{ $gender->value }}"> {{ firstUpperNextLower($gender->name) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('gender')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium"></span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <div class="col-span-6  md:col-span-3">
                                <label for="birthDate"
                                       class=" @error('birth_date') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white block @enderror block mb-2 text-sm font-medium">{{ __('Birth Date') }}</label>
                                <div class="relative ">
                                    <div
                                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input datepicker id="birthDate" type="text" name="birth_date"
                                           datepicker-format="{{ config('app.datepicker_format') }}"
                                           value="{{ old('birth_date') ?? $employee->birth_date  }}"
                                           class="@error('birth_date') is-invalid @else  border-gray-300 focus:border-blue-500 dark:border-gray-600 dark:focus:border-blue-500  @enderror bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500  block w-full pl-10 p-2.5 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 "
                                           placeholder="01/02/2023">
                                </div>
                                @error('birth_date')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium"></span> {{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div>
                            <div class="col-span-6  md:col-span-3">
                                <label for="hireDate"
                                       class="@error('hire_date') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white block @enderror block mb-2 text-sm font-medium">{{ __('Hire Date') }}</label>
                                <div class="relative ">
                                    <div
                                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input datepicker
                                           datepicker-format="{{ config('app.datepicker_format') }}"
                                           id="hireDate" type="text" name="hire_date" value="{{ old('hire_date') ?? $employee->hire_date }}"
                                           class="@error('hire_date') is-invalid @else  border-gray-300 focus:border-blue-500 dark:border-gray-600 dark:focus:border-blue-500  @enderror bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500  block w-full pl-10 p-2.5 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500  "
                                           placeholder="01/03/2023">
                                </div>
                                @error('hire_date')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium"></span> {{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end items-center">
                        <button type="submit"
                                class=" mt-4 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            {{ __('Confirm') }}
                        </button>
                        <a href="{{ route('employees.index') }}"
                           class=" mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            {{ __('Back') }}
                        </a>
                    </div>
                </form>
            </div>
        </section>
    </div>
</x-app-layout>


