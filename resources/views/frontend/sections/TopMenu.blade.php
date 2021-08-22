<nav class="bg-white flex justify-between p-3 pt-4 pb-4 border-b-2 border-gray-200 border-solid items-center fixed top-0 w-full z-10">
    <div class="w-1/6 flex justify-around items-center">
        <div>
            <button class="w-8 pt-2">
                <svg focusable="false" viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
            </button>
        </div>
        <div>
            <a href="/" class="flex items-center"><img src="{{ asset('images/keep-icon.png') }}"> <span class="pl-2 font-sans text-2xl text-gray-500">Keep</span></a>
        </div>
    </div>
    
    <form class="w-1/2 p-2 bg-gray-200 rounded flex justify-between" id="search-wrapper" method="GET">
        <i class="fal fa-search"></i>
        <input type="text" id="search" name="search" class="w-full bg-transparent p-1">
    </form>

    <div class="w-1/6 flex justify-around items-center">
        <div class="flex justify-between items-center">
            <div class="pr-2">
                <i class="fas fa-redo-alt"></i>
            </div>
            <div class="pr-2">
                <i class="fad fa-bars"></i>
            </div>
            <div class="pl-2">
                <i class="far fa-cog"></i>
            </div>
        </div>

        <div class="flex justify-between items-center">
            <div clas="pr-2">
                <svg class="gb_Ve" focusable="false" viewBox="0 0 24 24"><path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path></svg>
            </div>
            <div class="pl-2">
                <a href="/"><img src="{{ asset('images/profile.jpg') }}" class="w-10 h-10 rounded-full"></a>
            </div>
        </div>
    </div>
</nav>