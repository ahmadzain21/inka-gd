<aside class="fixed left-0 bg-white flex-[20%] z-10 bottom-0 top-[50px] max-w-[20%] overflow-y-scroll scrollbar-thin max-[1000px]:flex-[0] max-[1000px]:max-w-0">
    <nav class="p-6">
        <ul class="gap-2 flex flex-wrap text-sm">
            <li class="flex-[100%] max-w-full font-semibold">
                <a class="block py-1.5 px-3 flex items-center gap-2 text-[#475569]" href="{{ route('kedatangan.index') }}"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>package-variant-closed-plus</title><path fill="#475569" d="M13 19.3V12.6L19 9.2V13C19.7 13 20.4 13.1 21 13.4V7.5C21 7.1 20.8 6.8 20.5 6.6L12.6 2.2C12.4 2.1 12.2 2 12 2S11.6 2.1 11.4 2.2L3.5 6.6C3.2 6.8 3 7.1 3 7.5V16.5C3 16.9 3.2 17.2 3.5 17.4L11.4 21.8C11.6 21.9 11.8 22 12 22S12.4 21.9 12.6 21.8L13.5 21.3C13.2 20.7 13.1 20 13 19.3M12 4.2L18 7.5L16 8.6L10.1 5.2L12 4.2M11 19.3L5 15.9V9.2L11 12.6V19.3M12 10.8L6 7.5L8 6.3L14 9.8L12 10.8M20 15V18H23V20H20V23H18V20H15V18H18V15H20Z" /></svg>
                   Beranda</a>
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
            @can('isAdmin')
            <li class="flex-[100%] max-w-full font-semibold dropdown relative">
                <a class="block py-1.5 px-3 flex items-center gap-2 drop text-[#475569]" href="javascript:void(0);"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>account-group</title><path fill="#475569" d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z" /></svg>
                   User</a>
                <ul class="list-disc flex-wrap gap-3 py-3 ps-[55px] transition-all duration-100 overflow-hidden {{ Request::routeIs('pengguna.*') || Request::routeIs('pengguna.*') ? 'h-auto flex' : 'h-0 hidden' }}">
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="{{ route('pengguna.index') }}">Daftar User</a></li>
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="{{ route('pengguna.create') }}">Tambah User</a></li>
                </ul>
            </li>   
            @endcan
            <li class="flex-[100%] max-w-full font-semibold">
                <a class="block py-1.5 px-3 flex items-center gap-2 text-[#475569]" href="{{ route('pengaturan.index') }}">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>cog</title><path fill="#475569" d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.21,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.21,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.67 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z" /></svg>
                    <span>Pengaturan</span>
                </a>
            </li>
            <li class="flex-[100%] max-w-full font-semibold">
                <a class="block py-1.5 px-3 flex items-center gap-2 text-[#475569]" href="{{ route('pengaturan.index') }}">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>microsoft-excel</title><path fill="#475569" d="M21.17 3.25Q21.5 3.25 21.76 3.5 22 3.74 22 4.08V19.92Q22 20.26 21.76 20.5 21.5 20.75 21.17 20.75H7.83Q7.5 20.75 7.24 20.5 7 20.26 7 19.92V17H2.83Q2.5 17 2.24 16.76 2 16.5 2 16.17V7.83Q2 7.5 2.24 7.24 2.5 7 2.83 7H7V4.08Q7 3.74 7.24 3.5 7.5 3.25 7.83 3.25M7 13.06L8.18 15.28H9.97L8 12.06L9.93 8.89H8.22L7.13 10.9L7.09 10.96L7.06 11.03Q6.8 10.5 6.5 9.96 6.25 9.43 5.97 8.89H4.16L6.05 12.08L4 15.28H5.78M13.88 19.5V17H8.25V19.5M13.88 15.75V12.63H12V15.75M13.88 11.38V8.25H12V11.38M13.88 7V4.5H8.25V7M20.75 19.5V17H15.13V19.5M20.75 15.75V12.63H15.13V15.75M20.75 11.38V8.25H15.13V11.38M20.75 7V4.5H15.13V7Z" /></svg>
                    <span>Ekspor CSV</span>
                </a>
            </li>              
        </ul>
    </nav>
</aside>