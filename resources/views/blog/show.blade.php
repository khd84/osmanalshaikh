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
    {{-- <div class="flex">
      <button type="button" class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
        View more
      </button>
      <button type="button" class="text-blue-800 bg-transparent border border-blue-800 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-blue-600 dark:border-blue-600 dark:text-blue-400 dark:hover:text-white dark:focus:ring-blue-800" data-dismiss-target="#alert-additional-content-1" aria-label="Close">
        Dismiss
      </button>
    </div> --}}
  </div>
  @endif
<div class=" container m-auto text-center pt-15 pb-5">
    <h1 class=" text-6xl font-bold">{{$post->title}}</h1>
</div>
<div class=" px-20">
    By : <span class=" text-gray-500 italic">{{$post->user->name}}</span>
    On : <span class=" text-gray-500 italic">{{  $post->updated_at->format('Y-m-d H:i:s') }}</span>

</div>

<div class=" container m-auto pt-15 pb-5 text-justify px-15">
    <div class=" felx ">
        @if(filter_var($post-> image_path,FILTER_VALIDATE_URL))
            <img class=" object-cover w-full h-96" src=" {{$post-> image_path}}  " alt="">

        @else
            <img class=" object-cover w-full h-96" src="/images/{{$post-> image_path}}  " alt="">

        @endif
    </div>
    <div class=" text-l text-gray-700 py-8 leading-6">
            {{$post->description}}
    </div>
  @if(Auth::user() && Auth::user()->id == $post->user_id )
    <div class=" px-10">
        <a class=" px-5 text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="/blog/{{$post->slug}}/edit">تعديل الموضوع</a>

    </div>
@endif
</div>

@endsection
