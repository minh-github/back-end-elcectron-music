<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Day Admin Template: Tailwind Toolbox</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <!--Replace with your tailwind.css once created-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"
        integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body x-data="{ openModalAddSong: false, openModalAddCategory: false }" class="bg-gray-100 font-sans leading-normal tracking-normal">
    @include('components.alert')
    {{-- <nav id="header" class="fixed top-0 z-10 w-full bg-white shadow">
        <div class="container mx-auto mt-0 flex w-full flex-wrap items-center pt-3 pb-3 md:pb-0">
            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-base font-bold text-gray-900 no-underline hover:no-underline xl:text-xl" href="#">
                    <i class="fas fa-sun pr-3 text-pink-600"></i> Admin Day Mode
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="relative float-right inline-block flex">
                    <div class="relative text-sm">
                        <button id="userButton" class="mr-3 flex items-center focus:outline-none">
                            <img class="mr-4 h-8 w-8 rounded-full" src="http://i.pravatar.cc/300" alt="Avatar of User">
                            <span class="hidden md:inline-block">Hi, User </span>
                            <svg class="h-2 pl-2" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink"
                                enable-background="new 0 0 129 129">
                                <g>
                                    <path
                                        d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu"
                            class="invisible absolute top-0 right-0 z-30 mt-2 mt-12 min-w-full overflow-auto rounded bg-white shadow-md">
                            <ul class="list-reset">
                                <li><a href="#"
                                        class="block px-4 py-2 text-gray-900 no-underline hover:bg-gray-400 hover:no-underline">My
                                        account</a></li>
                                <li><a href="#"
                                        class="block px-4 py-2 text-gray-900 no-underline hover:bg-gray-400 hover:no-underline">Notifications</a>
                                </li>
                                <li>
                                    <hr class="mx-2 border-t border-gray-400">
                                </li>
                                <li><a href="#"
                                        class="block px-4 py-2 text-gray-900 no-underline hover:bg-gray-400 hover:no-underline">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block pr-4 lg:hidden">
                        <button id="nav-toggle"
                            class="flex appearance-none items-center rounded border border-gray-600 px-3 py-2 text-gray-500 hover:border-teal-500 hover:text-gray-900 focus:outline-none">
                            <svg class="h-3 w-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="z-20 mt-2 hidden w-full flex-grow bg-white lg:mt-0 lg:block lg:flex lg:w-auto lg:items-center"
                id="nav-content">
                <ul class="list-reset flex-1 items-center px-4 md:px-0 lg:flex">
                    <li class="my-2 mr-6 md:my-0">
                        <a href="#"
                            class="block border-b-2 border-orange-600 py-1 pl-1 align-middle text-pink-600 no-underline hover:border-orange-600 hover:text-gray-900 md:py-3">
                            <i class="fas fa-home fa-fw mr-3 text-pink-600"></i><span
                                class="pb-1 text-sm md:pb-0">Home</span>
                        </a>
                    </li>
                    <li class="my-2 mr-6 md:my-0">
                        <a href="#"
                            class="block border-b-2 border-white py-1 pl-1 align-middle text-gray-500 no-underline hover:border-pink-500 hover:text-gray-900 md:py-3">
                            <i class="fas fa-tasks fa-fw mr-3"></i><span class="pb-1 text-sm md:pb-0">Tasks</span>
                        </a>
                    </li>
                    <li class="my-2 mr-6 md:my-0">
                        <a href="#"
                            class="block border-b-2 border-white py-1 pl-1 align-middle text-gray-500 no-underline hover:border-purple-500 hover:text-gray-900 md:py-3">
                            <i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-1 text-sm md:pb-0">Messages</span>
                        </a>
                    </li>
                    <li class="my-2 mr-6 md:my-0">
                        <a href="#"
                            class="block border-b-2 border-white py-1 pl-1 align-middle text-gray-500 no-underline hover:border-green-500 hover:text-gray-900 md:py-3">
                            <i class="fas fa-chart-area fa-fw mr-3"></i><span
                                class="pb-1 text-sm md:pb-0">Analytics</span>
                        </a>
                    </li>
                    <li class="my-2 mr-6 md:my-0">
                        <a href="#"
                            class="block border-b-2 border-white py-1 pl-1 align-middle text-gray-500 no-underline hover:border-red-500 hover:text-gray-900 md:py-3">
                            <i class="fa fa-wallet fa-fw mr-3"></i><span class="pb-1 text-sm md:pb-0">Payments</span>
                        </a>
                    </li>
                </ul>

                <div class="pull-right relative pl-4 pr-4 md:pr-0">
                    <input type="search" placeholder="Search"
                        class="w-full appearance-none rounded border bg-gray-100 py-1 px-2 pl-10 text-sm leading-normal text-gray-800 transition focus:border-gray-700 focus:outline-none">
                    <div class="search-icon absolute" style="top: 0.375rem;left: 1.75rem;">
                        <svg class="pointer-events-none h-4 w-4 fill-current text-gray-800"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                            </path>
                        </svg>
                    </div>
                </div>

            </div>

        </div>
    </nav> --}}
    <!--Container-->
    <div class="container mx-auto min-h-screen w-full pt-20">

        <div class="mb-16 w-full px-4 leading-normal text-gray-800 md:mt-8 md:px-0">

            <!--Console Content-->

            <div class="flex flex-wrap">
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="rounded border bg-white p-2 shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded bg-green-600 p-3"><i
                                        class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h3 class="text-2xl font-bold uppercase text-gray-500"> {{ $allSongs->count() }} bài
                                    hát</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="rounded border bg-white p-2 shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded bg-pink-600 p-3"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <div class="flex-1 text-right md:text-center">
                                    <h3 class="text-2xl font-bold uppercase text-gray-500"> {{ $allArtists->count() }}
                                        nghệ s ĩ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div class="rounded border bg-white p-2 shadow">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded bg-yellow-600 p-3"><i
                                        class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <div class="flex-1 text-right md:text-center">
                                    <h3 class="text-2xl font-bold uppercase text-gray-500">
                                        {{ $allCategories->count() }} thể loại</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                {{-- add new data --}}
                <div x-on:click="openModalAddSong=true"
                    class="w-full cursor-pointer p-3 transition hover:scale-105 hover:opacity-90 active:scale-100 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div
                        class="flex h-[78px] items-center justify-center rounded border bg-[#f65214] p-2 text-2xl font-bold uppercase text-white shadow">
                        <div>thêm bài hát</div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div x-on:click="openModalAddCategory=true"
                    class="w-full cursor-pointer p-3 transition hover:scale-105 hover:opacity-90 active:scale-100 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div
                        class="flex h-[78px] items-center justify-center rounded border bg-[#00a1f1] p-2 text-2xl font-bold uppercase text-white shadow">
                        <div>thêm danh mục</div>
                    </div>
                </div>
            </div>
            <!--Divider-->
            <hr class="my-8 mx-4 border-b-2 border-gray-400">
            <div class="mt-2 flex flex-grow flex-row flex-wrap">
                <!-- component -->
                <div class="w-full rounded-md bg-white p-8">
                    <div class="flex items-center justify-between pb-6">
                        <div>
                            <h2 class="font-semibold text-gray-600">Danh sách bài hát</h2>
                            <span class="text-xs">Tất cả bài hát</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center rounded-md bg-gray-50 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                                <input class="ml-1 block w-[300px] bg-gray-50 outline-none" type="text"
                                    name="" id="" placeholder="tìm kiếm...">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="-mx-4 overflow-x-auto px-4 py-4 sm:-mx-8 sm:px-8">
                            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th
                                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                                Bài hát
                                            </th>
                                            <th
                                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                                Nghệ sĩ
                                            </th>
                                            <th
                                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                                Tác giả
                                            </th>
                                            <th
                                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                                Thể loại
                                            </th>
                                            <th
                                                class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                                                Tùy chọn
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allSongs as $song)
                                            <tr>
                                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                    <div class="flex items-center">
                                                        <div class="h-10 w-10 flex-shrink-0">
                                                            <img class="h-full w-full rounded-full object-cover"
                                                                src="{{ asset('storage/' . $song->thumb) }}"
                                                                alt="" />
                                                        </div>
                                                        <div class="ml-3">
                                                            <p class="whitespace-no-wrap text-gray-900">
                                                                {{ $song->name }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                    <p class="whitespace-no-wrap text-gray-900">
                                                        @foreach ($song->artists as $artists)
                                                            @if ($loop->index != $song->artists->count() - 1)
                                                                {{ $artists->name }},
                                                            @else
                                                                {{ $artists->name }}
                                                            @endif
                                                        @endforeach
                                                    </p>
                                                </td>
                                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                    <p class="whitespace-no-wrap text-gray-900">
                                                        {{ $song->author->name }}
                                                    </p>
                                                </td>
                                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                    <p class="whitespace-no-wrap text-gray-900">
                                                        @foreach ($song->categories as $category)
                                                            @if ($loop->index != $song->categories->count() - 1)
                                                                {{ $category->name }},
                                                            @else
                                                                {{ $category->name }}
                                                            @endif
                                                        @endforeach
                                                    </p>
                                                </td>
                                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                    <span
                                                        class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                                        <span aria-hidden
                                                            class="absolute inset-0 rounded-full bg-green-200 opacity-50"></span>
                                                        <span class="relative">Edit</span>
                                                    </span>
                                                    <span
                                                        class="relative ml-1 inline-block px-3 py-1 font-semibold leading-tight text-red-900">
                                                        <span aria-hidden
                                                            class="absolute inset-0 rounded-full bg-red-200 opacity-50"></span>
                                                        <span class="relative">Delete</span>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- <div
                                    class="xs:flex-row xs:justify-between flex flex-col items-center border-t bg-white px-5 py-5">
                                    <span class="xs:text-sm text-xs text-gray-900">
                                        Showing 1 to 4 of 50 Entries
                                    </span>
                                    <div class="xs:mt-0 mt-2 inline-flex">
                                        <button
                                            class="rounded-l bg-indigo-600 py-2 px-4 text-sm font-semibold text-indigo-50 transition duration-150 hover:bg-indigo-500">
                                            Prev
                                        </button>
                                        &nbsp; &nbsp;
                                        <button
                                            class="rounded-r bg-indigo-600 py-2 px-4 text-sm font-semibold text-indigo-50 transition duration-150 hover:bg-indigo-500">
                                            Next
                                        </button>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Console Content-->
        </div>

    </div>
    <!--/container-->
    <!-- Footer section with social media icons and newsletter sign-up -->
    <footer class="bg-neutral-900 text-center text-white">
        <!-- Copyright section -->
        <div class="p-4 text-center" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:
            <a class="text-white" href="https://tailwind-elements.com/">Tailwind Elements</a>
        </div>
    </footer>
    <div x-show="openModalAddSong" class="fixed top-0 z-10 h-screen w-screen bg-slate-400 opacity-50"></div>
    <div x-show="openModalAddCategory" class="fixed top-0 z-10 h-screen w-screen bg-slate-400 opacity-50"></div>
    {{-- modal --}}
    <div x-show="openModalAddSong"
        class="container fixed top-0 left-1/2 z-20 max-w-5xl -translate-x-1/2 rounded-md bg-white p-3 shadow-md md:top-10 lg:top-10">
        <i x-on:click="openModalAddSong = false"
            class="fas fa-times absolute top-5 right-5 cursor-pointer text-3xl text-stone-600"></i>
        @include('components.modal-add-music', compact('allArtists'))
    </div>

    <div x-show="openModalAddCategory"
        class="container fixed top-0 left-1/2 z-20 max-w-5xl -translate-x-1/2 rounded-md bg-white p-3 shadow-md md:top-10 lg:top-10">
        <i x-on:click="openModalAddCategory = false"
            class="fas fa-times absolute top-5 right-5 cursor-pointer text-3xl text-stone-600"></i>
        @include('components.modal-add-category')
    </div>

    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else {
                        userMenuDiv.classList.add("invisible");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>

</body>

</html>
<script src="{{ asset('js/app.js') }}"></script>
