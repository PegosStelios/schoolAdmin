@extends('layout')
@section('content')
    <!-- component -->
    <div class="antialiased w-full h-screen bg-sky-500 text-gray-400 font-inter p-10">
        <div class="container px-4 mx-auto">
            <div>
                <div id="title" class="text-center my-10">
                    <h1 class="font-bold text-4xl text-white">Your School</h1>
                    <p class="text-light text-gray-500 text-xl">
                        Available Options
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-evenly gap-10 pt-10 bg-sky-500">
                    <div id="choices"
                        class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in">
                        <div id="title" class="w-full py-5 border-b border-gray-800">
                            <h2 class="font-bold text-3xl text-white">Students</h2>
                        </div>
                        <div id="content" class="">
                            <div id="icon" class="my-5">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-12 w-12 mx-auto fill-stroke text-indigo-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div id="contain" class="leading-8 mb-10 text-lg font-light">
                                <div id="choose" class="w-full mt-10 px-6">
                                    <a href="/students/students"
                                        class="w-full block bg-gray-900 font-medium text-xl py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-indigo-600 hover:text-white">Open</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="choices"
                        class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in">
                        <div id="title" class="w-full py-5 border-b border-gray-800">
                            <h2 class="font-bold text-3xl text-white">Teachers</h2>
                        </div>
                        <div id="content" class="">
                            <div id="icon" class="my-5">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-12 w-12 mx-auto fill-stroke text-indigo-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <div id="contain" class="leading-8 mb-10 text-lg font-light">
                                <div id="choose" class="w-full mt-10 px-6">
                                    <a href="#"
                                        class="w-full block bg-gray-900 font-medium text-xl py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-indigo-600 hover:text-white">Open</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="choices"
                        class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in">
                        <div id="title" class="w-full py-5 border-b border-gray-800">
                            <h2 class="font-bold text-3xl text-white">Subjects</h2>
                        </div>
                        <div id="content" class="">
                            <div id="icon" class="my-5">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-12 w-12 mx-auto fill-stroke text-indigo-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <div id="contain" class="leading-8 mb-10 text-lg font-light">
                                <div id="choose" class="w-full mt-10 px-6">
                                    <a href="#"
                                        class="w-full block bg-gray-900 font-medium text-xl py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-indigo-600 hover:text-white">Open</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
