<aside class="fixed left-0 bg-white flex-[20%] z-10 bottom-0 top-[50px] max-w-[20%] overflow-y-scroll scrollbar-thin">
    <nav class="p-6">
        <ul class="gap-2 flex flex-wrap text-sm">
            <li class="flex-[100%] max-w-full font-semibold">
                <a class="block py-1.5 px-3 flex items-center gap-2 text-[#475569]" href="{{ route('sheet.index') }}"><svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="#475569" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                  </svg>
                   Dashboard</a>
            </li>
            <li class="flex-[100%] max-w-full font-semibold dropdown relative">
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
                   MySQL DB</a>
                <ul class="list-disc flex-wrap gap-3 py-3 ps-[55px] transition-all duration-100 overflow-hidden {{ Request::routeIs('mysqldb.*') ? 'h-auto flex' : 'h-0 hidden' }}">
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="{{ route('mysqldb.index') }}">Daftar Material</a></li>
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="">Detail Material</a></li>
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="">QTY Kabutuhan</a></li>
                    <li class="flex-[100%] text-slate-600"><a class="font-medium" href="">Qty Car</a></li>
                </ul>
            </li>
            <li class="flex-[100%] max-w-full font-semibold">
                <a class="block py-1.5 px-3 flex items-center gap-2" href="">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                    </svg>
                    <span>History</span>
                </a>
            </li>            
            <li class="flex-[100%] max-w-full font-semibold">
                <a class="block py-1.5 px-3 flex items-center gap-2" href="">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                    stroke-width="2" d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z"/>
                  </svg>
                   Report</a>
            </li>
        </ul>
    </nav>
</aside>