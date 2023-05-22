

@extends('layouts.app')

@section('content')
@if (session()->has('message'))


<div id="alert-additional-content-1" class="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
    <div class="flex items-center">
      <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Info</span>
      <h3 class="text-lg font-medium">تأكيد !!</h3>
    </div>
    <div class="mt-2 mb-4 text-sm">
        {{session()->get('message')}}
    </div>

  </div>
  @endif
<!--{{$posts}} -->
<div class=" container m-auto text-center pt-15 pb-5">
<h1 class=" text-6xl font-bold">جميع الموضوعات</h1>
</div>
@if (Auth::check())
    <div class=" px-10">
        <a class=" px-5 text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="/blog/create">أنشئ موضوعاً جديداً</a>

    </div>
@endif


@foreach ($posts as $post )
    <div class=" container sm:grid  grid-cols-2 gap-15 mx-auto py-15 px-5 justify-between items-center border-b border-cool-gray-300">
        <div>
            @if(filter_var($post-> image_path,FILTER_VALIDATE_URL))
                <img class=" object-cover" src=" {{$post-> image_path}}  " alt="">

            @else
                <img class=" object-cover" src="/images/{{$post-> image_path}}  " alt="">

            @endif
        </div>

        <div>
            <h2 class=" text-gray-700 font-bold text-4xl py-5 pt-0">
                {{$post-> title}}
            </h2>
            <span>
                By : <span class=" text-gray-500 italic">{{$post->user->name}}</span>
                On : <span class=" text-gray-500 italic">{{  $post->updated_at->format('Y-m-d H:i:s') }}</span>

                <p class="py-10 text-gray-500 text-sm leading-5 font-serif"> {{$post-> description}} </p>

                    <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/blog/{{$post->slug}}">Read More</a>
            </span>
        </div>
</div>
@endforeach



@endsection
