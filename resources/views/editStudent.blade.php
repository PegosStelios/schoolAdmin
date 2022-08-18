@extends('layout')
@section('content')
    <div>
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                <div class="mb-4">
                    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                        Edit Student
                    </h1>
                </div>

                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                    <form method="POST" action="#">
                        <!-- Title -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Name
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="name" placeholder="180" value="{{ $student->name }}" />
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Last Name
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="lastName" placeholder="180" value="{{ $student->lastName }}" />
                        </div>


                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Age
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="lastName" placeholder="180" value="{{ $student->age }}" />
                        </div>


                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Email
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="lastName" placeholder="180" value="{{ $student->email }}" />
                        </div>


                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Telephone
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="lastName" placeholder="180" value="{{ $student->telephone }}" />
                        </div>


                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Address
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="lastName" placeholder="180"
                                value="{{ $student->address }}, {{ $student->city }}, {{ $student->zip }}" />
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Father
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="lastName" placeholder="180"
                                value="{{ $student->fatherName }} {{ $student->fatherLastName }}" />
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Current Semester
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="lastName" placeholder="180" value="{{ $student->semester }}" />
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Exam Status
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="lastName" placeholder="180" value="{{ $student->examResult }}" />
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Abcenses
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="lastName" placeholder="180" value="{{ $student->absence }}" />
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                GPA
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="lastName" placeholder="180" value="{{ $student->gpa }}" />
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700" for="title">
                                Subject
                            </label>

                            <input
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text" name="lastName" placeholder="180" value="{{ $student->subject }}" />
                        </div>

                        <div class="flex items-center justify-start mt-4 gap-x-2">
                            <button type="submit"
                                class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                Update
                            </button>
                            <button type="submit"
                                class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
