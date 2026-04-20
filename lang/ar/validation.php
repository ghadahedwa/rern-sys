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

    'accepted' => 'يجب قبول حقل :attribute.',
    'accepted_if' => 'يجب قبول حقل :attribute عندما يكون :other :value.',
    'active_url' => 'يجب أن يكون حقل :attribute عنوان URL صالح.',
    'after' => 'يجب أن يكون حقل :attribute تاريخاً بعد :date.',
    'after_or_equal' => 'يجب أن يكون حقل :attribute تاريخاً بعد أو مساوياً لـ :date.',
    'alpha' => 'يجب أن يحتوي حقل :attribute على حروف فقط.',
    'alpha_dash' => 'يجب أن يحتوي حقل :attribute على حروف و أرقام و شرطات و شرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي حقل :attribute على حروف وأرقام فقط.',
    'any_of' => 'الحقل :attribute غير صحيح.',
    'array' => 'يجب أن يكون حقل :attribute مصفوفة.',
    'ascii' => 'يجب أن يحتوي حقل :attribute على أحرف ألبانية من بايت واحد و رموز فقط.',
    'before' => 'يجب أن يكون حقل :attribute تاريخاً قبل :date.',
    'before_or_equal' => 'يجب أن يكون حقل :attribute تاريخاً قبل أو مساوياً لـ :date.',
    'between' => [
        'array' => 'يجب أن يحتوي حقل :attribute على بين :min و :max عنصر.',
        'file' => 'يجب أن يكون حقل :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute بين :min و :max.',
        'string' => 'يجب أن يكون حقل :attribute بين :min و :max حرفاً.',
    ],
    'boolean' => 'يجب أن يكون حقل :attribute true أو false.',
    'can' => 'الحقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد حقل :attribute لا يتطابق.',
    'contains' => 'حقل :attribute يفتقر إلى قيمة مطلوبة.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'يجب أن يكون حقل :attribute تاريخاً صالحاً.',
    'date_equals' => 'يجب أن يكون حقل :attribute تاريخاً مساوياً لـ :date.',
    'date_format' => 'يجب أن يكون حقل :attribute في الشكل :format.',
    'decimal' => 'يجب أن يكون حقل :attribute له :decimal أماكن عشرية.',
    'declined' => 'يجب أن يكون حقل :attribute مرفوضاً.',
    'declined_if' => 'يجب أن يكون حقل :attribute مرفوضاً عندما يكون :other :value.',
    'different' => 'يجب أن يكون حقل :attribute و :other مختلفين.',
    'digits' => 'يجب أن يكون حقل :attribute :digits أرقاماً.',
    'digits_between' => 'يجب أن يكون حقل :attribute بين :min و :max أرقاماً.',
    'dimensions' => 'يجب أن يكون حقل :attribute له أبعاد صورة غير صالحة.',
    'distinct' => 'يجب أن يكون حقل :attribute له قيمة مكررة.',
    'doesnt_contain' => 'يجب أن يكون حقل :attribute لا يحتوي على أي من القيم التالية: :values.',
    'doesnt_end_with' => 'يجب أن يكون حقل :attribute لا ينتهي بواحد من القيم التالية: :values.',
    'doesnt_start_with' => 'يجب أن يكون حقل :attribute لا يبدأ بواحد من القيم التالية: :values.',
    'email' => 'يجب أن يكون حقل :attribute عنوان بريد إلكتروني صالحاً.',
    'encoding' => 'يجب أن يكون حقل :attribute مشفراً في :encoding.',
    'ends_with' => 'يجب أن يكون حقل :attribute ينتهي بواحد من القيم التالية: :values.',
    'enum' => 'القيمة المحددة لحقل :attribute غير صحيحة.',
    'exists' => 'القيمة المحددة لحقل :attribute غير صحيحة.',
    'extensions' => 'يجب أن يكون حقل :attribute له أحد الامتدادات التالية: :values.',
    'file' => 'يجب أن يكون حقل :attribute ملفاً.',
    'filled' => 'يجب أن يكون حقل :attribute له قيمة.',
    'gt' => [
        'array' => 'يجب أن يكون حقل :attribute له أكثر من :value عناصر.',
        'file' => 'يجب أن يكون حقل :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من :value.',
        'string' => 'يجب أن يكون حقل :attribute أكبر من :value حرفاً.',
    ],
    'gte' => [
        'array' => 'يجب أن يكون حقل :attribute له :value عناصر أو أكثر.',
        'file' => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value.',
        'string' => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value حرفاً.',
    ],
    'hex_color' => 'يجب أن يكون حقل :attribute لوناً هكسادسيمالياً صالحاً.',
    'image' => 'يجب أن يكون حقل :attribute صورة.',
    'in' => 'القيمة المحددة لحقل :attribute غير صحيحة.',
    'in_array' => 'يجب أن يكون حقل :attribute موجوداً في :other.',
    'in_array_keys' => 'يجب أن يكون حقل :attribute يحتوي على أحد المفاتيح التالية: :values.',
    'integer' => 'يجب أن يكون حقل :attribute عدداً صحيحاً.',
    'ip' => 'يجب أن يكون حقل :attribute عنوان IP صالحاً.',
    'ipv4' => 'يجب أن يكون حقل :attribute عنوان IPv4 صالحاً.',
    'ipv6' => 'يجب أن يكون حقل :attribute عنوان IPv6 صالحاً.',
    'json' => 'يجب أن يكون حقل :attribute سلسلة JSON صالحة.',
    'list' => 'يجب أن يكون حقل :attribute قائمة.',
    'lowercase' => 'يجب أن يكون حقل :attribute באות صغيرة.',
    'lt' => [
        'array' => 'يجب أن يكون حقل :attribute له أقل من :value عناصر.',
        'file' => 'يجب أن يكون حقل :attribute أصغر من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أصغر من :value.',
        'string' => 'يجب أن يكون حقل :attribute أصغر من :value حرفاً.',
    ],
    'lte' => [
        'array' => 'يجب أن يكون حقل :attribute ليس له أكثر من :value عناصر.',
        'file' => 'يجب أن يكون حقل :attribute أصغر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أصغر من أو يساوي :value.',
        'string' => 'يجب أن يكون حقل :attribute أصغر من أو يساوي :value حرفاً.',
    ],
    'mac_address' => 'يجب أن يكون حقل :attribute عنوان MAC صالحاً.',
    'max' => [
        'array' => 'يجب أن يكون حقل :attribute ليس له أكثر من :max عناصر.',
        'file' => 'يجب أن يكون حقل :attribute ليس أكبر من :max كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute ليس أكبر من :max.',
        'string' => 'يجب أن يكون حقل :attribute ليس أكبر من :max حرفاً.',
    ],
    'max_digits' => 'يجب أن يكون حقل :attribute ليس له أكثر من :max أرقام.',
    'mimes' => 'يجب أن يكون حقل :attribute ملفاً من النوع: :values.',
    'mimetypes' => 'يجب أن يكون حقل :attribute ملفاً من النوع: :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية أو أكبر لـ :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'string'  => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي الحقل :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'min_digits' => 'يجب أن يكون حقل :attribute له :min أرقام.',
    'missing' => 'يجب أن يكون حقل :attribute مفقوداً.',
    'missing_if' => 'يجب أن يكون حقل :attribute مفقوداً عندما يكون :other :value.',
    'missing_unless' => 'يجب أن يكون حقل :attribute مفقوداً ما لم يكن :other :value.',
    'missing_with' => 'يجب أن يكون حقل :attribute مفقوداً عندما يكون :values موجوداً.',
    'missing_with_all' => 'يجب أن يكون حقل :attribute مفقوداً عندما تكون :values موجودة.',
    'multiple_of' => 'يجب أن يكون حقل :attribute مضاعفاً لـ :value.',
    'not_in' => 'القيمة المحددة لحقل :attribute غير صحيحة.',
    'not_regex' => 'تنسيق حقل :attribute غير صحيح.',
    'numeric' => 'يجب أن يكون حقل :attribute عدداً.',
    'password' => [
        'letters' => 'يجب أن يحتوي حقل :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي حقل :attribute على حرف كبير وحرف صغير على الأقل.',
        'numbers' => 'يجب أن يحتوي حقل :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي حقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'القيمة المحددة لحقل :attribute ظهرت في تسريب بيانات. يرجى اختيار قيمة مختلفة لحقل :attribute.',
    ],
    'present' => 'يجب أن يكون حقل :attribute موجوداً.',
    'present_if' => 'يجب أن يكون حقل :attribute موجوداً عندما يكون :other :value.',
    'present_unless' => 'يجب أن يكون حقل :attribute موجوداً ما لم يكن :other :value.',
    'present_with' => 'يجب أن يكون حقل :attribute موجوداً عندما يكون :values موجوداً.',
    'present_with_all' => 'يجب أن يكون حقل :attribute موجوداً عندما تكون :values موجودة.',
    'prohibited' => 'حقل :attribute ممنوع.',
    'prohibited_if' => 'حقل :attribute ممنوع عندما يكون :other :value.',
    'prohibited_if_accepted' => 'حقل :attribute ممنوع عندما يكون :other مقبولاً.',
    'prohibited_if_declined' => 'حقل :attribute ممنوع عندما يكون :other مرفوضاً.',
    'prohibited_unless' => 'حقل :attribute ممنوع ما لم يكن :other في :values.',
    'prohibits' => 'حقل :attribute يمنع :other من الوجود.',
    'regex' => 'تنسيق حقل :attribute غير صحيح.',
    'required' => 'يجب أن يكون حقل :attribute موجوداً.',
    'required_array_keys' => 'يجب أن يحتوي حقل :attribute على مدخلات ل: :values.',
    'required_if' => 'يجب أن يكون حقل :attribute موجوداً عندما يكون :other :value.',
    'required_if_accepted' => 'يجب أن يكون حقل :attribute موجوداً عندما يكون :other مقبولاً.',
    'required_if_declined' => 'يجب أن يكون حقل :attribute موجوداً عندما يكون :other مرفوضاً.',
    'required_unless' => 'يجب أن يكون حقل :attribute موجوداً ما لم يكن :other في :values.',
    'required_with' => 'يجب أن يكون حقل :attribute موجوداً عندما يكون :values موجوداً.',
    'required_with_all' => 'يجب أن يكون حقل :attribute موجوداً عندما تكون :values موجودة.',
    'required_without' => 'يجب أن يكون حقل :attribute موجوداً ما لم يكن :values موجوداً.',
    'required_without_all' => 'يجب أن يكون حقل :attribute موجوداً ما لم تكن أي من :values موجودة.',
    'same' => 'يجب أن يكون حقل :attribute مطابقاً لحقل :other.',
    'size' => [
        'array' => 'يجب أن يحتوي حقل :attribute على :size عناصر.',
        'file' => 'يجب أن يكون حقل :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute :size.',
        'string' => 'يجب أن يكون حقل :attribute :size أحرف.',
    ],
    'starts_with' => 'يجب أن يبدأ حقل :attribute بواحد من التالي: :values.',
    'string' => 'يجب أن يكون حقل :attribute نصاً.',
    'timezone' => 'يجب أن يكون حقل :attribute منطقة زمنية صحيحة.',
    'unique' => 'حقل :attribute مأخوذ بالفعل.',
    'uploaded' => 'فشل حقل :attribute في الرفع.',
    'uppercase' => 'يجب أن يكون حقل :attribute بأحرف كبيرة.',
    'url' => 'يجب أن يكون حقل :attribute URL صحيحاً.',
    'ulid' => 'يجب أن يكون حقل :attribute ULID صحيحاً.',
    'uuid' => 'يجب أن يكون حقل :attribute UUID صحيحاً.',

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

    'attributes' => [
        'name'                  => 'الاسم',
        'username'              => 'اسم المستخدم',
        'email'                 => 'البريد الإلكتروني',
        'first_name'            => 'الاسم الأول',
        'last_name'             => 'الاسم الأخير',
        'password'              => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
    ],

];
