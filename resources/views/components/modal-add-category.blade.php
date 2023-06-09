<div class="mx-auto max-w-5xl">
    <form action="/add-new-category" method="POST" autocomplete="off" aria-autocomplete="list"
        enctype="multipart/form-data">
        @csrf
        <div class="px-4 sm:px-0">
            <h3 class="text-base font-semibold leading-7 text-gray-900">Thêm thể loại nhạc</h3>
            <p class="mt-1 text-sm leading-6 text-gray-500">Thông tin loại nhạc.</p>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="ml-5 text-sm font-medium leading-6 text-gray-900">Tên danh mục</dt>
                    <input type="text" name="name" autocomplete="off" aria-autocomplete="list"
                        class="col-span-2 h-12 w-full rounded-lg border bg-slate-100 px-2 text-slate-600 outline-none placeholder:text-xs"
                        placeholder="Tên danh mục">
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="ml-5 text-sm font-medium leading-6 text-gray-900">icon</dt>
                    <input type="text" name="icon" autocomplete="off" aria-autocomplete="list"
                        class="col-span-2 h-12 w-full rounded-lg border bg-slate-100 px-2 text-slate-600 outline-none placeholder:text-xs"
                        placeholder="icon sgv">
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="ml-5 text-sm font-medium leading-6 text-gray-900">Mô tả</dt>
                    <textarea class="col-span-2 rounded-md bg-slate-200 px-2 py-1 text-slate-600 outline-none" name="description"
                        id="description" cols="30" rows="5"></textarea>
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
