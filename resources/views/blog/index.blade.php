@extends('layouts.app')

@section('content')

<!--{{$posts}} -->
<div class=" container sm:grid mx-auto p-5 border-b border-gray-300">
    <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/blog/create">Add Psot</a>

</div>

@foreach ($posts as $post )
    <div class=" container sm:grid  grid-cols-2 gap-15 mx-auto py-15 px-5 justify-between items-center border-b border-cool-gray-300">
        <div>
            <img class=" object-cover" src="{{$post-> image_path}}" alt="">
        </div>

        <div>
            <h2 class=" text-gray-700 font-bold text-4xl py-5 pt-0">
                {{$post-> title}}
            </h2>
            <span>
                By : <span class=" text-gray-500 italic">{{$post->user->name}}</span>
                On : <span class=" text-gray-500 italic">{{ date( 'd-m-Y h:i:s A' , $post->updated_at ) }}</span>

                <p class="py-10 text-gray-500 text-sm leading-5 font-serif"> {{$post-> description}} </p>

                    <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/blog/{{$post->slug}}">Read More</a>
            </span>
        </div>
</div>
@endforeach



@endsection
