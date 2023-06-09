<div class="mx-auto max-w-5xl">
    <form action="/add-new-song" method="POST" autocomplete="off" aria-autocomplete="list" enctype="multipart/form-data">
        @csrf
        <div class="px-4 sm:px-0">
            <h3 class="text-base font-semibold leading-7 text-gray-900">Thêm bài hát</h3>
            <p class="mt-1 text-sm leading-6 text-gray-500">Thông tin của bài hát.</p>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="ml-5 text-sm font-medium leading-6 text-gray-900">Tên bài hát</dt>
                    <input type="text" name="name" autocomplete="off" aria-autocomplete="list"
                        class="col-span-2 h-12 w-full rounded-lg border bg-slate-100 px-2 text-slate-600 outline-none placeholder:text-xs"
                        placeholder="Tên bài hát">
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0" x-data="{ image: false }">
                    <dt class="ml-5 text-sm font-medium leading-6 text-gray-900">Ảnh bìa</dt>
                    <label for="thumb" x-show="!image"
                        class="col-span-2 flex h-[56px] cursor-pointer items-center justify-center rounded-lg bg-purple-500 text-xl text-white">
                        <i class="fas fa-plus"></i></label>
                    <input id="thumb" x-on:input="image=true" type="file" name="thumb" hidden>
                    <img id="image" src="" alt="ảnh bìa" class="h-[56px] object-cover" x-show="image">
                </div>
                <div class="items-center px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0" x-data="handleArtist({{ $allArtists }})"
                    x-on:click="openSearch=false">
                    <dt class="ml-5 text-sm font-medium leading-6 text-gray-900">Nghệ sĩ</dt>
                    <span class="col-span-2 grid grid-cols-3">
                        <div class="relative col-span-3">
                            <input type="text" x-model="keySearch" autocomplete="off" id="nameArtist" name="artists"
                                aria-autocomplete="list" x-on:input="search()"
                                class="z-20 h-12 w-full rounded-lg border bg-slate-100 px-2 text-slate-600 outline-none placeholder:text-xs"
                                placeholder="Tên nghệ sĩ biểu diễn">
                            {{-- <ul x-show="openSearch"
                                class="absolute z-40 h-[156px] w-full translate-y-1 space-y-3 overflow-y-scroll rounded-md border-2 border-blue-400 bg-slate-100 py-1 px-2 capitalize">
                                <template x-for="artist in artistSearch">
                                    <li x-on:click="addArtist(artist)"
                                        class="flex h-10 cursor-pointer items-center rounded-md border px-2 text-[#333] hover:bg-slate-400 hover:text-white">
                                        <div x-text="artist.name">
                                        </div>
                                    </li>
                                </template>
                            </ul> --}}
                            {{-- <input type="text" hidden name="artists" class="" x-model="artistIds"> --}}
                        </div>
                    </span>
                </div>
                <div class="items-center px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0" x-data="handleCategory({{ $allCategories }})"
                    x-on:click="openSearch=false">
                    <dt class="ml-5 text-sm font-medium leading-6 text-gray-900">Thể loại</dt>
                    <span class="col-span-2 grid grid-cols-3">
                        <div class="relative col-span-3">
                            <input type="text" x-model="keySearch" autocomplete="off" id="nameCategory"
                                aria-autocomplete="list" x-on:input="search()"
                                class="z-20 h-12 w-full rounded-lg border bg-slate-100 px-2 text-slate-600 outline-none placeholder:text-xs"
                                placeholder="Tên nghệ sĩ biểu diễn">
                            <ul x-show="openSearch"
                                class="absolute z-40 h-[156px] w-full translate-y-1 space-y-3 overflow-y-scroll rounded-md border-2 border-blue-400 bg-slate-100 py-1 px-2 capitalize">
                                <template x-for="category in categorySearch">
                                    <li x-on:click="addCategory(category)"
                                        class="flex h-10 cursor-pointer items-center rounded-md border px-2 text-[#333] hover:bg-slate-400 hover:text-white">
                                        <div x-text="category.name">
                                        </div>
                                    </li>
                                </template>
                            </ul>
                            <input type="text" hidden name="categoryId" class="" x-model="categoryId">
                        </div>
                    </span>
                </div>
                <div class="items-center px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0" x-data="handleAuthor({{ $allAuthors }})"
                    x-on:click="openSearch=false">
                    <dt class="ml-5 text-sm font-medium leading-6 text-gray-900">Tác giả</dt>
                    <span class="col-span-2 grid grid-cols-3">
                        <div class="relative col-span-3">
                            <input type="text" x-model="keySearch" autocomplete="off" id="nameAuthor" name="author"
                                aria-autocomplete="list" x-on:input="search()"
                                class="z-20 h-12 w-full rounded-lg border bg-slate-100 px-2 text-slate-600 outline-none placeholder:text-xs"
                                placeholder="Tên tác giả">
                            {{-- <ul x-show="openSearch"
                                class="absolute z-40 h-[156px] w-full translate-y-1 space-y-3 overflow-y-scroll rounded-md border-2 border-blue-400 bg-slate-100 py-1 px-2 capitalize">
                                <template x-for="author in authorSearch">
                                    <li x-on:click="addAuthor(author)"
                                        class="flex h-10 cursor-pointer items-center rounded-md border px-2 text-[#333] hover:bg-slate-400 hover:text-white">
                                        <div x-text="author.name">
                                        </div>
                                    </li>
                                </template>
                            </ul>
                            <input type="text" hidden name="author" class="" x-model="authorId"> --}}
                        </div>
                    </span>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0" x-data="{ fileMusic: false }">
                    <dt class="ml-5 text-sm font-medium leading-6 text-gray-900">File bài hát</dt>
                    <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                        <label for="fileMusic" x-show="!fileMusic"
                            class="flex h-[56px] w-full cursor-pointer items-center justify-center rounded-md bg-purple-600 text-2xl text-white transition hover:opacity-90">
                            <i class="fas fa-plus"></i>
                        </label>
                        <input hidden type="file" x-on:input="fileMusic = true" name="fileMusic" id="fileMusic">
                        <div x-show="fileMusic" role="list"
                            class="divide-y divide-gray-100 rounded-md border border-gray-200">
                            <div class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                <div class="flex w-0 flex-1 items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="ml-4 flex min-w-0 flex-1 justify-between gap-2">
                                        <span id="nameMusic"
                                            class="truncate font-medium">resume_back_end_developer.pdf</span>
                                        <span id="sizeMusic" class="flex-shrink-0 text-gray-400">2.4mb</span>
                                    </div>
                                </div>
                                <div class="ml-4 flex-shrink-0" x-on:click="fileMusic=false">
                                    <i class="fas fa-times cursor-pointer text-stone-600"></i>
                                </div>
                            </div>
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
        <div class="mt-4 flex w-full justify-end border-t pt-4">
            <button type="submit"
                class="w-[80px] rounded border border-blue-500 bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700">
                Lưu
            </button>
        </div>
    </form>
</div>
<script>
    function handleArtist(data) {
        return {
            allArtists: data,
            artists: [],
            artistIds: [],
            artistSearch: [],
            openSearch: false,
            keySearch: '',

            addArtist(value) {
                if (value.name.trim() !== '') {
                    this.keySearch = ''
                    if (!this.artists.includes(value.name)) {
                        this.artists.push(value.name);
                        this.artistIds.push(value.id);
                    }
                }
            },
            removeArtist(artists) {
                this.artists.splice(this.artists.indexOf(artists), 1);
            },
            search() {
                this.openSearch = true
                this.searchStringInArray(this.keySearch)
            },
            searchStringInArray(str) {
                let arrayTemp = [];
                let searchString = str.toLowerCase();
                for (var j = 0; j < this.allArtists.length; j++) {
                    if (this.allArtists[j].name.toLowerCase().includes(searchString)) {
                        arrayTemp.push(this.allArtists[j]);
                    }
                }
                this.artistSearch = arrayTemp;
            }

        }
    }

    function handleCategory(data) {
        return {
            allCategories: data,
            categoryId: '',
            categorySearch: [],
            openSearch: false,
            keySearch: '',

            addCategory(value) {
                this.categoryId = value.id;
                this.keySearch = value.name
            },

            search() {
                this.openSearch = true
                this.searchStringInArray(this.keySearch)
            },
            searchStringInArray(str) {
                let arrayTemp = [];
                let searchString = str.toLowerCase();
                for (var j = 0; j < this.allCategories.length; j++) {
                    if (this.allCategories[j].name.toLowerCase().includes(searchString)) {
                        arrayTemp.push(this.allCategories[j]);
                    }
                }
                this.categorySearch = arrayTemp;
            }

        }
    }

    function handleAuthor(data) {
        return {
            allAuthors: data,
            authorId: '',
            authorSearch: [],
            openSearch: false,
            keySearch: '',

            addAuthor(value) {
                this.keySearch = value.name
                this.authorId = value.id;
            },
            search() {
                this.openSearch = true
                this.searchStringInArray(this.keySearch)
            },
            searchStringInArray(str) {
                let arrayTemp = [];
                let searchString = str.toLowerCase();
                for (var j = 0; j < this.allAuthors.length; j++) {
                    if (this.allAuthors[j].name.toLowerCase().includes(searchString)) {
                        arrayTemp.push(this.allAuthors[j]);
                    }
                }
                this.authorSearch = arrayTemp;
            }
        }
    }
    let music = document.getElementById('fileMusic')
    let thumb = document.getElementById('thumb')
    music.addEventListener('input', () => {
        document.getElementById('nameMusic').innerHTML = music.files[0].name
        document.getElementById('sizeMusic').innerHTML = (music.files[0].size / (1024 ** 2)).toFixed(2) + ' Mb'
    })
    thumb.addEventListener('input', () => {
        let url = URL.createObjectURL(thumb.files[0])
        document.getElementById('image').setAttribute('src', url)
    })
</script>
