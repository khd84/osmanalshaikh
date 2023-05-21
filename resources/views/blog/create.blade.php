@extends('layouts.app')

@section('content')
<div class=" container m-auto text-center pt-15 pb-5">
    <h1 class=" text-6xl font-bold"> Add Post</h1>
</div>

<div class=" container m-auto text-center pt-15 pb-5">
<form action="/blog" method="POST">

    <input
    type= "text"
    name= "title"
    placeholder= "Title"
    class = "w-full h-20 text-6xl rounded-lg shadow-lg border-b pb-15 mb-5 "
    >


</form>
</div>

@endsection
