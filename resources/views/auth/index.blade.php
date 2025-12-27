@extends('index')

@section('content')
    <div class="h-full flex flex-col lg:flex-row">
        <div class="hidden lg:flex lg:relative text-white items-center lg:w-1/2 bg-cover "
            style="background-image: url({{ asset('assets/background-login-2.jpg') }})">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative z-10 px-30">
                <p class="text-7xl text-stone-200">Hello,</p>
                <p class="text-8xl text-white">Welcome</p>
                <p class="text-md text-stone-500 py-10">Sistem keamanan dalam mengelola data
                    pengamanan, pencatatan tamu, dan aktivitas operasional secara aman, cepat, dan terintegrasi.</p>

            </div>
        </div>
        <div class="flex flex-col w-full h-full lg:w-1/2 bg-white p-5 md:p-7 lg:p-10">
            <p class="text-xl md:text-2xl lg:text-3xl tracking-tight text-stone-700 font-bold drop-shadow-md uppercase">
                {{ config('app.base_name_app') }}</p>
            <div class="flex flex-col w-full h-full items-center justify-center px-10 md:px-20 lg:px-40">
                <p class="text-5xl tracking-tight text-stone-800 font-bold drop-shadow-md">HI, SECURITY</p>
                <p class="text-slate-400 py-3">welcome to {{ config('app.base_name_app') }}</p>

                <x-alert action="success" key="success" />


                <form class="mt-4 w-full" action="{{ route('auth.login') }}" method="POST"
                    onsubmit="handleLoading(
                        document.getElementById('submit')
                    )" >
                    @csrf
                    <div class="mb-8 ">
                        <x-input-text name="email" placeholder="Email" />
                    </div>
                    <div class="mb-8 ">
                        <x-input-text name="password" placeholder="Password" />
                    </div>
                    <div class="mb-4">
                        <x-button label="Login" name="submit"  />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
