@extends('layouts.app')

@section('content')

<div class=" container m-auto text-center py-10">

    <h1 class=" text-6xl font-bold">All Posts</h1>
</div>

<div class=" container sm:grid  grid-cols-2 gap-15 mx-auto py-15 px-5 justify-between items-center">
        <div>
            <img class=" object-cover" src="https://picsum.photos/id/343/960/620" alt="">
        </div>

        <div>
            <h2 class=" text-gray-700 font-bold text-4xl py-5 md:pt-0">
                How To Talk Like Commonist
            </h2>
            <span>
                By : <span class=" text-gray-500 italic">Othman Alshaikh</span>
                    <p class="py-10 text-gray-500 text-sm leading-5">
                        بل مدة ليست بطويلة ڪُنت في دار الأجنحة للطباعة والنشر ،لزيارة صديقي أنس وإقتناء بعض الڪتب والتسامر ڪالعادة .وبعد أخذ ما أريد طلبت منه أن يرشح لي كتاب على ذوقه لأضيفه لمحصلت مالدي ، وقبل إجابته دلف الينا الاستاذ متوڪل زروق وبادلنا أطراف الحديث فيما يتعلق بالڪتب ،وبينما نحن كذلك وقعت عيني على (تلصص) فسألته مارأيك بكتابات عثمان شيخ فأنا لم أقرئ له من قبل ، أجاب أنصح به ،لديه أسلوب جميل في الكتابة ،فأخذته وهممت بعد وقت بالإنصراف.

                    </p>

                    <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/">Read More</a>
            </span>
        </div>
</div>

@endsection
