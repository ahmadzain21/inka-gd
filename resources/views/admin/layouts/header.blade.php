<header class="bg-white min-h-[50px] shadow-lg px-5 fixed top-0 left-0 right-0 z-20">
    <div class="flex justify-between items-center h-[50px]">
        <div class="flex gap-2.5 items-center">
            <button type="button" id="menu-btn" class="hidden max-[1000px]:inline-block"><svg class="w-5 h-5 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>menu</title><path fill="#222" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg></button>
            <div class="h-[40px] relative overflow-hidden max-w-[200px] w-[100rem]">
                <img class="h-full absolute top-0" src="https://www.its.ac.id/stp/wp-content/uploads/sites/113/2024/07/PT-INKA.png" alt="logo">
            </div>
        </div>
        <div class="flex gap-2.5 items-center relative cursor-pointer" id="show-profile-btn">
            <div class="inline-flex flex-col gap-0.5 text-sm text-right">
                <b>{{ Auth::user()->name; }}</b>
                <span class="text-xs text-slate-600">{{ Auth::user()->email }}</span>
            </div>
            <div  class="overflow-hidden relative rounded-full h-[35px] w-[35px]">
                <img class="absolute top-0 w-full h-full object-cover" src="https://w7.pngwing.com/pngs/748/89/png-transparent-individual-man-people-person-icon-thumbnail.png" alt="person">
            </div>
            <div id="profile-menu" class="bg-white w-[150px] shadow-md rounded absolute end-[0] top-[50px] h-0 overflow-hidden">
                <div class="m-2">
                    <b class="text-xs">{{ Auth::user()->name; }}</b>
                    <span class="text-xs text-slate-600 mb-2">{{ Auth::user()->email }}</span>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="bg-red-500 text-white px-2 py-1 rounded text-xs w-full text-center font-semibold hover:bg-red-700" type="submit">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span>Log out</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>