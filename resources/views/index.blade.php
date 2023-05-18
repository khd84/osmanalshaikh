@extends('layouts.app')

@section('content')

<!-- Hero -->
<div class="hero-bg-image flex flex-col items-center justify-center">
<h1 class = "text-gray-100 text-5xl uppercase font-bold pb-10 text-center" >Welcome To Othman Alshaikh Blog </h1>
    <a class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl" href="/">Start Reading</a>
</div>
<!-- Article 0 -->
<div class="container sm:grid-cols-2 gap-15 mx-auto py-15 flex justify-between items-center">
        <div class=" mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/900/1000?grayscale" alt="">
        </div>
        <div class=" flex-col items-stretch justify-center m-10 sm:m-0">
            <h2 class="font-bold text-gray-700 text-4xl uppercase"> Address Of Article Here</h2>
                        <p class=" font-bold text-gray-600 text-xl pt-2">
                       this is breif of the article
                        </p>
                        <p class=" py-5 text-gray-500 text-sm leading-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/">Read More</a>
        </div>
</div>

<!-- Blog Categories -->
<div class=" text-center p-15 bg-gray-700 text-gray-100">
    <h2 class=" text-2xl">Blog Categories</h2>
</div>
<div class=" container mx-auto pt-10 sm:grid grid-cols-4 text-center">
    <div class=" font-bold text-3xl py-2">قصص قصيرة</div>
    <div class=" font-bold text-3xl py-2">مقالات</div>
    <div class=" font-bold text-3xl py-2">مقابلات</div>
    <div class=" font-bold text-3xl py-2">آراء</div>
</div>

<!-- Recent Posts -->
<div class=" container mx-auto text-center py-15 ">
    <h2 class=" font-bold text-5xl py-10">Recent Posts</h2>
    <p class=" text-justify text-gray-400 leading-6 px-10">
        ن تباغت نفسك بقراءة قصة قصيرة من بين مجموعة من القصص؛ مجازفة غير مأمونه العواقب، فأما أن تترك المجموعة للأبد وأما تقع في غرامها، وهذه القصة هي "الغافلون عن جوناثان بميدان بيكادللي" قصة قصيرة من المجموعة القصصية (الهندي الأحمر الأخير -ماتاواشيش وقصص مهاجرة- ) للكاتب السعودي طارق الجارد. وذكر جنسية الكاتب هنا، مُهم؛ لأنه يخدم قراءة المجموعة، والتي تدور كلها في عوالم بعيدة عن عوالم الكاتب التي نشأ فيها وشكّلت خلفيته التراثية والثقافية أو هذا ما اعتقده.
        المجموعة التي تقع في 90 صفحة من القطع المتوسط وتحتوي على 15 قصة قصيرة، صدرت عن دار كلمات في العام 2021. فغير غرابة عنوان المجموعة وطوله، نجد أيضاً بأن عناوين  القصص الداخلية طويلة، وهو أول ملمح تجريبي أستخدمه الكاتب، اضافة إلى احتواء المجموعة على صور فتوغرافية حقيقية، مرفقة مع القصص وتعبّر عنها. مع تزييل كل قصة بزمن كتابتها وقد تراوحت أزمنة الكتابة بين العام 2011 و2016 وكتبت كلها في مدينة مونتريال بكندا.
        كما لا يوجد إهداء في البداية أو كلمة ناشر أو تقديم من كاتب أو ناقد أو حتى سيرة ذاتية للكاتب. ولا توجد أيضاً جُمل افتتاحية للقصص ما عدا قصتين  "لماذا تسقط بغداد" و " الخيار الصعب لمبرمج حاسوب هوكينق". وبذلك يكون الكاتب قد كسر كثير من تقاليد التأليف المتعارف عليها، وهذه مسألة تُحسب له.
        تتحرّك المجموعة في عدد من الفضاءات منها السياسية والتاريخية وعوالم الطبخ والموسيقى وخوارزميات الفيسبوك والمطارات والساحات العامة وغرف المستشفيات وغُرف النّحت. فتجد قصة تتحدث عن المغول وصدام حسين، وقصة أخرى عن فيدل كاسترو، وأخرى عن فريد هامتون قائد البلاك بانثر وليلته الأخيرة أثناء حملته الانتخابية، وأخرى عن الهنود الحمر سكان أمريكا الاصليين. وأخرى عن العبقري ستيفن هوكينج.
         بلغة سردية رشيقة وبلا تعقيدات مزعجة؛ يتحرّك طارق في عوالمه، ممسكاً بتلابيب قارئه بحيث لا يُحوّل ناظريه عن القصة حتى تكتمل. فإذا تحدّث عن ميدان بيكادللي في لندن؛ كأنك تسير فيه وتُحصي عدد كاميرات المراقبة وتشعر ببرودة الطقس هناك وتتلفّت خشية أن يهجم عليك أحدهم في النقاط العمياء لكاميرات المراقبة. لنقرأ مثلاً في قصة "الغافلون عن جونثان بميدان بيكادللي" والتي تحكي عن جوناثان الذي يجلس أمام شاشة تعرض كاميرات مراقبة لشارع كبير:
        (توجد في لندن أكثر من ثلاثة آلاف كاميرا مراقبة أي شيء لجوناثان، ما عدا الإحدي عشرة المسلطة علي ميدان بيكادللي. جوناثان معني برصد كل تلك الشاشات، إلا أن الكاميرا الأكثر قرباً إلي قلبه هي كاميرا رقم 3 حينما تحين الساعة الثامنة صباحا، وهو ما يعني أن ذات الشعر الأحمر ستظهر في الركن الأعلي والأيسر من الشاشة وهي تفتح محل الورود الواقع في أحد الشوارع الحجرية التي تصب في ميدان بيكادللي.)
         يعتمد على قدرة وصفية جيّدة ودقيقة، تجعلك مُلماً بأجواء المكان، بحيث أنه لو قُدّر لك وصفه؛ فلن يعجزك شيء. لنقرأ جزاء من قصة "إمابير ستايت" والتي تحكي عن قصة لصورة أجمل انتحار التي تم نشرها في مجلة الحياة عام 1974:
        (آخـر مـا أذكره أنني كنت على الناصيـة بيـن الجـادة الخامسة والشارع الرابع والثلاثين غرباً، ولا أدري كيف ومتى أصبحت أحلق أمام طوابق الإمباير ستايت المئة وأثنين، هذه الحالة تذكرني بالمرة التي قفزت فيها من منصة المسبح ذات الأمتار العشرة في طفولتي. بعد شقلبتين عبثيتين مرعبتين، ينعدم فيهما إحساسك بالجاذبية، وتفقد وعيـك بالفـوق والتحت، يتباطأ الزمـن فتتيقظ حواسـك لـكـل مـا حـولـك ويتسارع تفكيرك، ولا يرده إلى تسارعه المعتاد سـوى ارتطامك بصفحة الماء، هذه الحالة التـي أمـر بهـا أمام الإمباير ستايت، تذكرني بالثلاثة والثلاثين منتحـراً الذين قفزوا مـن هـذا المبنى العملاق، تحديدا: إيفيلـن ماكهيـل، لقـد غادرت الحياة بكامل أناقتها، بجسد حافظ على تماسكه على الرغـم مـن سـقـوطه من خمسة وثمانين طابقا ، فسميت صورتها تلك بالانتحار الأجمـل على الإطلاق.)
        أما في قصة " ماتاواشيش أو الهندي الأحمر ما قبل الأخير في كندا" فسيقودك طارق معه إلى أول مره التقاه فيها؛ لتعرفه دون خوف:
        (رأيت ماتاواشيش ثمانـي مـرات، أول مرة كان يعرج على قدمين، إحداهما مهترئة متورمة مهملة باتجاه المستشفى، لم تبـد علـى وجهه سمات الألم. وبعدهـا ببضعة أيام، أتى يكلمنـي فـي مـوقـف السيارات أمام المستشفى، يظن أنني أحمل قداحة لكي يشعل بها سيجارته. لوقع خطواتـه هـذه المرة فرقعة مختلفة، لـم تـبـد على وجهـه سـمات الخجـل مـن ساقه الاصطناعية الجديدة!)
        هذه القصص وغيرها مما حوته المجموعة، عندي تُمثّل سرد حديث ينّفلت من قبضة السرد الكلاسيكي القديم ويفتح باب جديد لسرد يُمازج بين الواقع والمتخيّل والخاطرة والسيرة الذاتية. يُستلّهم فيه التاريخ السياسي والصور الفتوغرافية وأدوات المطبخ وعُشب الشارع العام. تمّتزج فيه خوارزميات الميديا الحديثة مع سمك السلمون وحبات القهوة.
    </p>
</div>

<div class=" sm:grid grid-cols-2 w-4/5 mx-auto">
<div class=" flex bg-yellow-700 text-gray-100 pt-10">

    <div class=" block m-auto pt-4 pb-15 w-4/5">
<ul class="md:flex text-xs gap-2">
    <li class=" bg-yellow-500 text-yellow-200 p-2 rounded inline-block my-1 md:my-0 hover:text-yellow-800 transition duration-300"><a href="/">ستموت في العشرين </a></li>
    <li class=" bg-yellow-500 text-yellow-200 p-2 rounded inline-block my-1 md:my-0 hover:text-yellow-800 transition duration-300"><a href="/">حميدتي </a></li>
    <li class=" bg-yellow-500 text-yellow-200 p-2 rounded inline-block my-1 md:my-0 hover:text-yellow-800 transition duration-300"><a href="/">بشه </a></li>
    <li class=" bg-yellow-500 text-yellow-200 p-2 rounded inline-block my-1 md:my-0 hover:text-yellow-800 transition duration-300"><a href="/">خالد سلك </a></li>
</ul>

    <h3 class="  text-l py-10 leading-6 text-right mt-4">
        [أن تقول كل شي في فيلم]
      ورطة فيلم ستموت في العشرين
      بدايةً أجد أن ورطة فيلم (ستموت في العشرين) تكمن في أنّ مُنّتجيه أرادوا أنْ يقولو كل شيء، من خلال قصة الطفل مزمل الذي تنبأ الشيخ بموته في عمر العشرين.
أرادوا الإعتراض على الموروث الديني والأخلاقي والمجتمعي والسياسي من خلال مشاهد واغنيات واهازيج وآيات وحورات، تخلّلت الفيلم.
أرادوا الاحتفاء بالتاريخ والمكان والجغرافيا والسينما والاذاعة. بحفلات الجرتق، والانشاد الديني، بجلسات الزّار. بالبحر والصحراء والأشجار. ببيوت الطين وبيوت الإنجليز وشوارع الحِلة.
    </h3>
    <a class=" bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase inline-block hover:text-yellow-400 transition duration-300" href="/">Read More</a>
    </div>


</div>

    <div class=" flex">

        <img class=" object-cover" src="https://picsum.photos/900/800" alt="">
   </div>

</div>

@endsection
