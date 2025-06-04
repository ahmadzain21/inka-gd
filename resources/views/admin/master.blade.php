<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('admin.layouts.head')
    <body class="bg-[#ededed] font-[inter]">
        @include('admin.layouts.header')
        <section class="flex ">
            @include('admin.layouts.sidebar')
            <main class="ms-[20%] mt-[50px] w-full max-w-[80%] max-[1000px]:max-w-full max-[1000px]:ms-[unset]">
                @yield('content')
            </main>
        </section>
        @include('admin.layouts.footer')
        @include('admin.layouts.footer_script')
    </body>
</html>