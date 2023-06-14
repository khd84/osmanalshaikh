
@extends('layouts.app')
@section('content')
<div class=" container m-auto text-center pt-15 pb-5">
    <h1 class=" text-6xl font-bold">إنشاء منشور</h1>
</div>
<div class=" container m-auto pt-15 pb-5 px-20">
<form
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
@csrf
    <input
    type= "text"
    name= "title"
    placeholder= "العنوان"
    class = " text-right w-full h-20 text-6xl rounded-lg shadow-lg border-b pb-3 mb-5 ">
               <div id="summernote">
                <textarea name="description" id="summernote" cols="30" rows="10"
                class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400 text-right" placeholder="اكتب مقالتك هنا ..." required
                ></textarea>
               </div>
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
            <span>الرجاء اختيار الصورة</ span>
            <input type= "file" name= "image" class= "hidden">
            </label>
        </div>
        <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">تأكيد اضافة المقال</button>
</div>


</form>
</div>
<script>
    $('#summernote').summernote({
        toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]});
</script>
@endsection

