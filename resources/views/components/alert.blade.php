@if (\Session::has('success'))
    <div x-data="{ show: true }">
        <div x-show="show"
            class="fixed right-2 top-5 z-[999999] min-w-[400px] rounded-b border-t-4 border-teal-500 bg-teal-100 px-4 py-3 text-teal-900 shadow-md transition"
            role="alert">
            <div class="flex">
                <div class="py-1"><svg class="mr-4 h-6 w-6 fill-current text-teal-500" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg></div>
                <div>
                    <p class="font-bold">Thành công</p>
                    <p class="text-sm">{!! \Session::get('success') !!}.</p>
                </div>
                <div class="absolute top-1/2 right-5 -translate-y-1/2" x-on:click="show = false">
                    <i class="fas fa-times cursor-pointer text-stone-600"></i>
                </div>
            </div>
        </div>
    </div>
@endif
