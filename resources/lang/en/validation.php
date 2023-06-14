<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب قبول :attribute.',
    'accepted_if' => 'يجب قبول :attribute عندما يكون :other هو :value.',
    'active_url' => 'حقل :attribute ليس عنوان URL صحيحًا.',
    'after' => 'يجب أن يكون :attribute تاريخًا بعد :date.',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخًا بعد أو يساوي :date.',
    'alpha' => 'يجب أن يحتوي :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي :attribute على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'before' => 'يجب أن يكون :attribute تاريخًا قبل :date.',
    'before_or_equal' => 'يجب أن يكون :attribute تاريخًا قبل أو يساوي :date.',
    'between' => [
        'numeric' => 'يجب أن يكون :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون طول :attribute بين :min و :max حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على بين :min و :max عنصرًا.',
    ],
    'boolean' => 'يجب أن يكون حقل :attribute صحيحًا أو خاطئًا.',
    'confirmed' => 'حقل تأكيد :attribute لا يتطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'حقل :attribute ليس تاريخًا صحيحًا.',
    'date_equals' => 'يجب أن يكون :attribute تاريخًا يساوي :date.',
    'date_format' => 'حقل :attribute لا يتوافق مع الشكل :format.',
    'declined' => 'يجب رفض :attribute.',
    'declined_if' => 'يجب رفض :attribute عندم',
    'different' => 'يجب أن يكون :attribute و :other مختلفين.',
    'digits' => 'يجب أن يكون :attribute :digits أرقام.',
    'digits_between' => 'يجب أن يكون :attribute بين :min و :max أرقام.',
    'dimensions' => 'أبعاد الصورة :attribute غير صالحة.',
    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالح.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values.',
    'enum' => 'القيمة المحددة :attribute غير صالحة.',
    'exists' => 'القيمة المحددة :attribute غير صالحة.',
    'file' => 'يجب أن يكون :attribute ملفًا.',
    'filled' => 'حقل :attribute يجب أن يحتوي على قيمة.',
    'gt' => [
    'numeric' => 'يجب أن يكون :attribute أكبر من :value.',
    'file' => 'يجب أن يكون :attribute أكبر من :value كيلوبايت.',
    'string' => 'يجب أن يكون :attribute أكبر من :value حروف.',
    'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر.',
    ],
    'gte' => [
    'numeric' => 'يجب أن يكون :attribute أكبر من أو يساوي :value.',
    'file' => 'يجب أن يكون :attribute أكبر من أو يساوي :value كيلوبايت.',
    'string' => 'يجب أن يكون :attribute أكبر من أو يساوي :value حروف.',
    'array' => 'يجب أن يحتوي :attribute على :value عنصر أو أكثر.',
    ],
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => 'القيمة المحددة :attribute غير صالحة.',
    'in_array' => 'حقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صالح.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالح.',

    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالح.',
    'json' => 'يجب أن يكون :attribute سلسلة JSON صالحة.',
    'lt' => [
    'numeric' => 'يجب أن يكون :attribute أقل من :value.',
    'file' => 'يجب أن يكون :attribute أقل من :value كيلوبايت.',
    'string' => 'يجب أن يكون :attribute أقل من :value حروف.',
    'array' => 'يجب أن يحتوي :attribute على أقل من :value عناصر.',
    ],
    'lte' => [
    'numeric' => 'يجب أن يكون :attribute أقل من أو يساوي :value.',
    'file' => 'يجب أن يكون :attribute أقل من أو يساوي :value كيلوبايت.',
    'string' => 'يجب أن يكون :attribute أقل من أو يساوي :value حروف.',
    'array' => 'يجب أن لا يحتوي :attribute على أكثر من :value عنصر.',
    ],
    'mac_address' => 'يجب أن يكون :attribute عنوان MAC صالح.',
    'max' => [
    'numeric' => 'يجب ألا يكون :attribute أكبر من :max.',
    'file' => 'يجب ألا يكون :attribute أكبر من :max كيلوبايت.',
    'string' => 'يجب ألا يكون :attribute أكبر من :max حروف.',
    'array' => 'يجب ألا يحتوي :attribute على أكثر من :max عنصر.',
    ],
    'mimes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
    'mimetypes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
    'min' => [
    'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
    'file' => 'يجب أن يكون :attribute على الأقل :min كيلوبايت.',
    'string' => 'يجب أن يكون :attribute على الأقل :min حروف.',
    'array' => 'يجب أن يحتوي :attribute على الأقل :min عنصر.',
    ],
    'multiple_of' => 'يجب أن يكون :attribute مضاعفًا للقيمة :value.',
    'not_in' => 'القيمة المحددة :attribute غير صالحة.',
    'not_regex' => 'صيغة :attribute غير صالحة.',
    'numeric' => 'يجب أن يكون :attribute رقم',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب أن يكون حقل :attribute موجودًا.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'حقل :attribute محظور عندما يكون :other هو :value.',
    'prohibited_unless' => 'حقل :attribute محظور ما لم يكن :other في :values.',
    'prohibits' => 'حقل :attribute يحظر وجود :other.',
    'regex' => 'صيغة :attribute غير صالحة.',
    'required' => 'حقل :attribute مطلوب.',
    'required_array_keys' => 'حقل :attribute يجب أن يحتوي على مدخلات لـ: :values.',
    'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other في :values.',
    'required_with' => 'حقل :attribute مطلوب عندما يكون :values موجودًا.',
    'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without' => 'حقل :attribute مطلوب عندما لا يكون :values موجودًا.',
    'required_without_all' => 'حقل :attribute مطلوب عندما لا تكون أيًا من :values موجودة.',
    'same' => 'يجب أن يتطابق :attribute و :other.',
    'size' => [
    'numeric' => 'يجب أن يكون :attribute :size.',
    'file' => 'يجب أن يكون حجم :attribute :size كيلوبايت.',
    'string' => 'يجب أن يكون طول :attribute :size حروفًا.',
    'array' => 'يجب أن يحتوي :attribute على :size عنصرًا.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون :attribute سلسلة نصية.',
    'timezone' => 'يجب أن يكون :attribute منطقة زمنية صالحة.',
    'unique' => 'تم أخذ :attribute بالفعل.',
    'uploaded' => 'فشل تحميل :attribute.',
    'url' => 'يجب أن يكون :attribute رابط صالح.',
    'uuid' => 'يجب أن يكون :attribute UUID صالح.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
