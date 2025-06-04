<aside class="fixed left-0 bg-white flex-[20%] z-10 bottom-0 top-[50px] max-w-[20%] overflow-y-scroll scrollbar-thin max-[1000px]:flex-[0] max-[1000px]:max-w-0">
    <nav class="p-6">
        <ul class="gap-2 flex flex-wrap text-sm">
            <li class="flex-[100%] max-w-full font-semibold">
                <a class="block py-1.5 px-3 flex items-center gap-2 text-[#475569]" href="{{ route('kedatangan.index') }}"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>package-variant-closed-plus</title><path fill="#475569" d="M13 19.3V12.6L19 9.2V13C19.7 13 20.4 13.1 21 13.4V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2S11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L13.5 21.3C13.2 20.7 13.1 20 13 19.3M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M11 19.3L5 15.9V9.2L11 12.6V19.3M12 10.8L6 7.5L8 6.3L14 9.8L12 10.8M20 15V18H23V20H20V23H18V20H15V18H18V15H20Z" /></svg>
                   Kedatangan</a>
            </li>
            <li class="flex-[100%] max-w-full font-semibold dropdown relative hidden">
                <a class="block py-1.5 px-3 flex items-center gap-2 drop text-[#475569]" href="javascript:void(0);"><svg class="w-5 h-5 text-[#475569]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>google-spreadsheet</title><path fill="#475569" d="M19,11V9H11V5H9V9H5V11H9V19H11V11H19M19,3C19.5,3 20,3.2 20.39,3.61C20.8,4 21,4.5 21,5V19C21,19.5 20.8,20 20.39,20.39C20,20.8 19.5,21 19,21H5C4.5,21 4,20.8 3.61,20.39C3.2,20 3,19.5 3,19V5C3,4.5 3.2,4 3.61,3.61C4,3.2 4.5,3 5,3H19Z" /></svg>
                   Sheet DB</a>
                <ul class="list-disc flex-wrap gap-3 py-3 ps-[55px] transition-all duration-100 overflow-hidden {{ Request::routeIs('sheet.*') ? 'h-auto flex' : 'h-0 hidden' }}">
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="{{ route('sheet.index') }}">Daftar Material</a></li>
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="">Detail Kekurangan Material</a></li>
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="">QTY Kabutuhan</a></li>
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="">Qty Car</a></li>
                </ul>
            </li>
            <li class="flex-[100%] max-w-full font-semibold dropdown relative">
                <a class="block py-1.5 px-3 flex items-center gap-2 drop text-[#475569]" href="javascript:void(0);"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>database</title><path fill="#475569" d="M12,3C7.58,3 4,4.79 4,7C4,9.21 7.58,11 12,11C16.42,11 20,9.21 20,7C20,4.79 16.42,3 12,3M4,9V12C4,14.21 7.58,16 12,16C16.42,16 20,14.21 20,12V9C20,11.21 16.42,13 12,13C7.58,13 4,11.21 4,9M4,14V17C4,19.21 7.58,21 12,21C16.42,21 20,19.21 20,17V14C20,16.21 16.42,18 12,18C7.58,18 4,16.21 4,14Z" /></svg>
                   Material</a>
                <ul class="list-disc flex-wrap gap-3 py-3 ps-[55px] transition-all duration-100 overflow-hidden {{ Request::routeIs('materialgd.*') || Request::routeIs('kebutuhan.*') ? 'h-auto flex' : 'h-0 hidden' }}">
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="{{ route('materialgd.index') }}">Daftar Material</a></li>
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="{{ route('materialgd.create') }}">Tambah Material</a></li>
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="{{ route('kebutuhan.index') }}">QTY Kebutuhan</a></li>
                </ul>
            </li>
            <li class="flex-[100%] max-w-full font-semibold">
                <a class="block py-1.5 px-3 flex items-center gap-2 text-[#475569]" href="{{ route('history.index') }}">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>history</title><path fill="#475569" d="M13.5,8H12V13L16.28,15.54L17,14.33L13.5,12.25V8M13,3A9,9 0 0,0 4,12H1L4.96,16.03L9,12H6A7,7 0 0,1 13,5A7,7 0 0,1 20,12A7,7 0 0,1 13,19C11.07,19 9.32,18.21 8.06,16.94L6.64,18.36C8.27,20 10.5,21 13,21A9,9 0 0,0 22,12A9,9 0 0,0 13,3" /></svg>
                    <span>History</span>
                </a>
            </li>            
        </ul>
    </nav>
</aside>