@extends('layouts.app')

@section('content')
<div class=" container m-auto text-center pt-15 pb-5">
    <h1 class=" text-6xl font-bold"> Add Post</h1>
</div>

<div class=" container m-auto pt-15 pb-5 px-20">
<form
        action="/blog"
        method="POST"
        enctype="multipart/form-data"

        >
@csrf
    <input
    type= "text"
    name= "title"
    placeholder= "Title"
    class = "w-full h-20 text-6xl rounded-lg shadow-lg border-b pb-3 mb-5 "
    >
    <textarea
    name = "description"
    placeholder = "Description"
    class = "w-full h-60 text-xl rounded-lg shadow-lg border-b pt-15 mb-5"
    ></textarea>


    <div class= " py-10">
        <label
            class="
                bg-gray-200 hover:bg-gray-700
                text-gray-700 hover:text-gray-200
                transition duration-300
                cursor-pointer I
                p-5 rounded-lg
                font-bold uppercase
            ">
            <span>Select an image to upload</ span>
            <input type= "file" name= "image" class= "hidden">
            </label>
        </div>

        <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">ٍSubmit the post</button>
</div>


</form>
</div>

@endsection
