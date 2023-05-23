
<footer class="bg-gray-900 py-15 mt-20">
    <div class="container mx-auto flex justify-between items-center px-6">

        <div>
                <h3 class="font-bold text-white">Pages</h3>
                    <ul class="pt-4 text-white">
                        <li class="pb-2 text-white">
                            <a class="hover:text-gray-600 transition duration-300" href="/">Home</a></li>
                        <li class="pb-2 text-white">
                            <a class="hover:text-gray-600 transition duration-300" href="/blog">Blog</a></li>
                        <li class="pb-2 text-white">
                            <a class="hover:text-gray-600 transition duration-300" href="/login">Login</a></li>
                        <li class="pb-2 text-white">
                            <a class="hover:text-gray-600 transition duration-300" href="/register">Register</a></li>
                    </ul>





        </div>

        <div>
            <h3 class="font-bold text-white">Latest Posts</h3>
                {{-- <ul class="pt-4 text-white">
                    <li class="pb-2 text-white">
                        <a class="hover:text-gray-600 transition duration-300" href="/">في نهاية الحرب حميدتي يقابل حبيبته</a></li>
                    <li class="pb-2 text-white">
                        <a class="hover:text-gray-600 transition duration-300" href="/">الدعامة في دهاليز التأهيل</a></li>
                    <li class="pb-2 text-white">
                        <a class="hover:text-gray-600 transition duration-300" href="/">{{ $tit }}</a></li>
                        --}}
                     @php
                        $topTitles = \App\Models\Post::orderBy('title', 'asc')
                                        ->limit(3)
                                        ->pluck('title');
                      @endphp

                      <ol class="pt-4 text-white">
                        @foreach ($topTitles as $tit)
                            <li class="pb-2 text-white"><a class="hover:text-gray-600 transition duration-300" href="/blog/{{Str::slug($tit,'-')}}" >{{ $tit }}</a></li>
                        @endforeach
                      </ol>
        </div>

    </div>

</footer>
