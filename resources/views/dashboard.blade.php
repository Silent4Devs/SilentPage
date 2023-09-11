<x-app-layout>
    <!-- component -->
    <div class="w-full">
        <nav class="bg-white shadow-lg">
            <div class="items-center justify-between px-8 py-2 md:flex md:px-12">
                <div class="flex items-center justify-between">
                    <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                        <img src="https://silent4business.com/img/logo_silent.webp">
                    </div>
                </div>
            </div>
        </nav>
        <div class="flex bg-white" style="height:600px;">
            <div class="flex items-center px-8 text-center lg:text-left md:px-12 lg:w-1/2">
                <div>
                    <span class="title-second text-3xl font-semibold text-gray-800 md:text-4xl">Bienvenido al panel <span
                            class="text-indigo-600">Admin</span></span>
                    <p class="mt-2 text-sm text-gray-500 md:text-base">Desde aquí puedes consultar información y
                        realizar movimientos!</p>
                    <div class="flex justify-center mt-6 lg:justify-start">
                        <a class="px-4 py-3 text-xs font-semibold text-gray-200 bg-gray-900 rounded hover:bg-gray-800"
                            href="{{ url('user/profile') }}">Perfil</a>
                        <a class="px-4 py-3 mx-4 text-xs font-semibold text-gray-900 bg-gray-300 rounded hover:bg-gray-400"
                            href="{{ url('solicitantes') }}">Solicitantes</a>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="object-cover h-full"
                    style="background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80)">
                    <div class="h-full bg-black opacity-25"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
