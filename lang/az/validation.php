<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute qəbul edilməlidir.',
    'accepted_if'          => ':Other :value olduqda :attribute qəbul edilməlidir.',
    'active_url'           => ':Attribute düzgün URL deyil.',
    'after'                => ':Attribute :date tarixindən sonrakı tarix olmalıdır.',
    'after_or_equal'       => ':Attribute :date tarixindən sonrakı və ya eyni tarixdə olmalıdır.',
    'alpha'                => ':Attribute yalnız hərflərdən ibarət olmalıdır.',
    'alpha_dash'           => ':Attribute yalnız hərflərdən, rəqəmlərdən, tire və alt xətlərdən ibarət olmalıdır.',
    'alpha_num'            => ':Attribute yalnız hərflərdən və rəqəmlərdən ibarət olmalıdır.',
    'array'                => ':Attribute massiv olmalıdır.',
    'ascii'                => ':Attribute yalnız bir baytlıq alfasayısal simvol və simvollar olmalıdır.',
    'before'               => ':Attribute :date tarixindən əvvəlki tarix olmalıdır.',
    'before_or_equal'      => ':Attribute :date tarixindən əvvəlki və ya ona bərabər olan bir tarix olmalıdır.',
    'between'              => [
        'array'   => ':Attribute elementlərinin sayı :min ilə :max arasında olmalıdır.',
        'file'    => ':Attribute :min ilə :max kilobayt arasında olmalıdır.',
        'numeric' => ':Attribute :min ilə :max arasında olmalıdır.',
        'string'  => ':Attribute :min ilə :max simvol arasında olmalıdır.',
    ],
    'boolean'              => ':Attribute sahəsi doğru (true) və ya yalan (false) olmalıdır.',
    'can'                  => ':Attribute sahəsində icazəsiz dəyər var.',
    'confirmed'            => ':Attribute sahəsinin dəyəri təsdiqlənənlə uyğun gəlmir.',
    'current_password'     => 'Şifrə yanlışdır.',
    'date'                 => ':Attribute düzgün tarix olmalıdır.',
    'date_equals'          => ':Attribute :date ilə bərabər tarix olmalıdır.',
    'date_format'          => ':Attribute :format formatına uyğun gəlmir.',
    'decimal'              => ':Attribute-də :decimal onluq yer olmalıdır.',
    'declined'             => ':Attribute rədd edilməlidir.',
    'declined_if'          => ':Other :value olduqda :attribute rədd edilməlidir.',
    'different'            => ':Attribute və :other fərqli olmalıdır.',
    'digits'               => ':Attribute :digits rəqəmli olmalıdır.',
    'digits_between'       => ':Attribute sahəsindəki rəqəm sayı :min ilə :max arasında olmalıdır.',
    'dimensions'           => ':Attribute sahəsindəki şəklin ölçüləri yanlışdır.',
    'distinct'             => ':Attribute sahəsinin dəyərləri təkrarlanmamalıdır.',
    'doesnt_end_with'      => ':Attribute aşağıdakılardan biri ilə bitməyə bilər: :values.',
    'doesnt_start_with'    => ':Attribute  aşağıdakılardan biri ilə başlaya bilməz: :values.',
    'email'                => ':Attribute düzgün e-poçt ünvanı olmalıdır.',
    'ends_with'            => ':Attribute sahəsi göstərilən dəyərlərdən biri ilə bitməlidir: :values.',
    'enum'                 => ':Attribute üçün seçilmiş dəyər yanlışdır.',
    'exists'               => ':Attribute üçün seçilmiş dəyər yanlışdır.',
    'extensions'           => ':attribute sahəsində aşağıdakı uzantılardan biri olmalıdır: :values.',
    'file'                 => ':Attribute fayl olmalıdır.',
    'filled'               => ':Attribute sahəsinin dəyəri olmalıdır.',
    'gt'                   => [
        'array'   => ':Attribute sahəsinin dəyəri :value elementdən çox olmalıdır.',
        'file'    => ':Attribute sahəsinin fayl ölçüsü :value kilobaytdan çox olmalıdır.',
        'numeric' => ':Attribute sahəsinin dəyəri :value sayından böyük olmalıdır.',
        'string'  => ':Attribute sahəsinin dəyəri :value simvoldan çox olmalıdır.',
    ],
    'gte'                  => [
        'array'   => ':Attribute :value və ya daha çox elementdən ibarət olmalıdır.',
        'file'    => ':Attribute :value və ya daha çox kilobaytdan ibarət olmalıdır.',
        'numeric' => ':Attribute :value və ya daha böyük olmalıdır.',
        'string'  => ':Attribute :value və ya daha çox simvoldan ibarət olmalıdır.',
    ],
    'hex_color'            => ':attribute sahəsi etibarlı onaltılıq rəng olmalıdır.',
    'image'                => ':Attribute sahəsindəki fayl şəkil olmalıdır.',
    'in'                   => 'Seçilmiş :attribute yanlışdır.',
    'in_array'             => ':Attribute dəyəri :other daxilində mövcud deyil.',
    'integer'              => ':Attribute tam ədəd olmalıdır.',
    'ip'                   => ':Attribute düzgün IP ünvanı olmalıdır.',
    'ipv4'                 => ':Attribute düzgün IPv4 ünvanı olmalıdır.',
    'ipv6'                 => ':Attribute düzgün IPv6 ünvanı olmalıdır.',
    'json'                 => ':Attribute düzgün JSON sətri olmalıdır.',
    'lowercase'            => ':Attribute kiçik hərf olmalıdır.',
    'lt'                   => [
        'array'   => ':Attribute sahəsinin dəyəri :value elementdən az olmalıdır.',
        'file'    => ':Attribute sahəsinin fayl ölçüsü :value kilobaytdan az olmalıdır.',
        'numeric' => ':Attribute sahəsinin dəyəri :value sayından kiçik olmalıdır.',
        'string'  => ':Attribute sahəsinin dəyəri :value simvoldan az olmalıdır.',
    ],
    'lte'                  => [
        'array'   => ':Attribute :value və ya daha az elementdən ibarət olmalıdır.',
        'file'    => ':Attribute sahəsinin fayl ölçüsü :value kilobayt və ya daha kiçik olmalıdır.',
        'numeric' => ':Attribute :value və ya daha kiçik olmalıdır.',
        'string'  => ':Attribute :value və ya daha az simvoldan ibarət olmalıdır.',
    ],
    'mac_address'          => ':Attribute düzgün MAC ünvanı olmalıdır.',
    'max'                  => [
        'array'   => ':Attribute ən çoxu :max elementdən ibarət ola bilər.',
        'file'    => ':Attribute sahəsinin fayl ölçüsü ən çoxu :max kilobayt ola bilər.',
        'numeric' => ':Attribute dəyəri :max sayından böyük ola bilməz.',
        'string'  => ':Attribute ən çoxu :max simvoldan ibarət ola bilər.',
    ],
    'max_digits'           => ':Attribute :max rəqəmlərindən çox olmamalıdır.',
    'mimes'                => ':Attribute sahəsindəki fayl göstərilən növlərdən biri olmalıdır: :values.',
    'mimetypes'            => ':Attribute sahəsindəki fayl göstərilən növlərdən biri olmalıdır: :values.',
    'min'                  => [
        'array'   => ':Attribute ən azı :min elementdən ibarət olmalıdır.',
        'file'    => ':Attribute sahəsinin fayl ölçüsü ən azı :min kilobayt olmalıdır.',
        'numeric' => ':Attribute :min sayından kiçik ola bilməz.',
        'string'  => ':Attribute ən azı :min simvoldan ibarət olmalıdır.',
    ],
    'min_digits'           => ':Attribute ən azı :min rəqəmləri olmalıdır.',
    'missing'              => ':Attribute sahəsi əskik olmalıdır.',
    'missing_if'           => ':Other :value olduqda :attribute sahəsi əskik olmalıdır.',
    'missing_unless'       => ':Other :value olmadığı halda :attribute sahəsi əskik olmalıdır.',
    'missing_with'         => ':Values olduqda :attribute sahəsi əskik olmalıdır.',
    'missing_with_all'     => ':Values olduqda :attribute sahəsi əskik olmalıdır.',
    'multiple_of'          => ':Attribute sahəsinin dəyəri :value ədədinin bölünəni olmalıdır.',
    'not_in'               => 'Seçilmiş :attribute yanlışdır.',
    'not_regex'            => ':Attribute sahəsinin formatı yanlışdır.',
    'numeric'              => ':Attribute sahəsinin dəyəri rəqəm olmalıdır.',
    'password'             => [
        'letters'       => ':Attribute ən azı bir hərf olmalıdır.',
        'mixed'         => ':Attribute ən azı bir böyük və bir kiçik hərf olmalıdır.',
        'numbers'       => ':Attribute ən azı bir ədəd olmalıdır.',
        'symbols'       => ':Attribute ən azı bir simvol olmalıdır.',
        'uncompromised' => 'Verilmiş :attribute məlumat sızmasında ortaya çıxdı. Fərqli :attribute seçin.',
    ],
    'present'              => ':Attribute sahəsi mövcud olmalıdır.',
    'present_if'           => ':other :value olduqda :attribute sahəsi mövcud olmalıdır.',
    'present_unless'       => ':other :value olmadıqda :attribute sahəsi mövcud olmalıdır.',
    'present_with'         => ':values olduqda :attribute sahəsi mövcud olmalıdır.',
    'present_with_all'     => ':values olduqda :attribute sahəsi mövcud olmalıdır.',
    'prohibited'           => ':Attribute sahəsi qadağandır.',
    'prohibited_if'        => ':Other :value olduqda :attribute sahəsi qadağandır.',
    'prohibited_unless'    => ':Other :values daxilində olmadığı halda :attribute sahəsi qadağandır.',
    'prohibits'            => ':Attribute sahəsinin dəyəri :other dəyərinin mövcudluğunu qadağan edir.',
    'regex'                => ':Attribute sahəsinin formatı yanlışdır.',
    'required'             => ':Attribute mütləq qeyd edilməlidir.',
    'required_array_keys'  => ':Attribute massivində göstərilən açarlar olmalıdır: :values.',
    'required_if'          => ':Other :value olduqda :attribute mütləq qeyd edilməlidir.',
    'required_if_accepted' => ':Other qəbul edildikdə :attribute sahəsi tələb olunur.',
    'required_unless'      => ':Other :values daxilində olmadığı halda :attribute mütləq qeyd edilməlidir.',
    'required_with'        => ':Values mövcud olduqda :attribute mütləq qeyd edilməlidir.',
    'required_with_all'    => ':Values mövcud olduqda :attribute mütləq qeyd edilməlidir.',
    'required_without'     => ':Values mövcud olmadıqda :attribute mütləq qeyd edilməlidir.',
    'required_without_all' => ':Values mövcud olmadıqda :attribute mütləq qeyd edilməlidir.',
    'same'                 => ':Attribute ilə :other sahəsinin dəyərləri üst-üstə düşməlidir.',
    'size'                 => [
        'array'   => ':Attribute sahəsi :size elementdən ibarət olmalıdır.',
        'file'    => ':Attribute sahəsinin fayl ölçüsü :size kilobayt olmalıdır.',
        'numeric' => ':Attribute dəyəri :size olmalıdır.',
        'string'  => ':Attribute :size simvoldan ibarət olmalıdır.',
    ],
    'starts_with'          => ':Attribute göstərilən dəyərlərdən biri ilə başlamalıdır: :values.',
    'string'               => ':Attribute sahəsinin dəyəri sətir olmalıdır.',
    'timezone'             => ':Attribute sahəsinin dəyəri düzgün vaxt qurşağı olmalıdır.',
    'ulid'                 => ':Attribute etibarlı ULID olmalıdır.',
    'unique'               => 'Belə bir :attribute artıq mövcuddur.',
    'uploaded'             => ':Attribute yüklənmədi.',
    'uppercase'            => ':Attribute böyük hərf olmalıdır.',
    'url'                  => ':Attribute düzgün URL olmalıdır.',
    'uuid'                 => ':Attribute düzgün UUID olmalıdır.',
    'attributes'           => [
        'address'                  => 'ünvan',
        'affiliate_url'            => 'bağlı URL',
        'age'                      => 'yaş',
        'amount'                   => 'məbləğ',
        'announcement'             => 'elan',
        'area'                     => 'ərazi',
        'audience_prize'           => 'tamaşaçı mükafatı',
        'available'                => 'əlçatandır',
        'birthday'                 => 'ad günü',
        'body'                     => 'bədən',
        'city'                     => 'şəhər',
        'compilation'              => 'tərtib',
        'concept'                  => 'anlayış',
        'conditions'               => 'şərtlər',
        'content'                  => 'məzmun',
        'country'                  => 'şəhər',
        'cover'                    => 'qapaq',
        'created_at'               => 'yaradıldı',
        'creator'                  => 'yaradan',
        'currency'                 => 'Valyuta',
        'current_password'         => 'cari şifrə',
        'customer'                 => 'müştəri',
        'date'                     => 'tarix',
        'date_of_birth'            => 'doğum tarixi',
        'dates'                    => 'tarixlər',
        'day'                      => 'gün',
        'deleted_at'               => 'silindi',
        'description'              => 'təsvir',
        'display_type'             => 'ekran növü',
        'district'                 => 'rayon',
        'duration'                 => 'müddət',
        'email'                    => 'e-poçt ünvanı',
        'excerpt'                  => 'çıxarış',
        'filter'                   => 'filtr',
        'finished_at'              => 'başa çatıb',
        'first_name'               => 'ad',
        'gender'                   => 'cins',
        'grand_prize'              => 'böyük mükafat',
        'group'                    => 'qrup',
        'hour'                     => 'saat',
        'image'                    => 'şəkil',
        'image_desktop'            => 'masa üstü şəkli',
        'image_main'               => 'əsas şəkil',
        'image_mobile'             => 'mobil şəkil',
        'images'                   => 'şəkillər',
        'is_audience_winner'       => 'tamaşaçıların qalibidir',
        'is_hidden'                => 'gizlidir',
        'is_subscribed'            => 'abunə olunur',
        'is_visible'               => 'görünür',
        'is_winner'                => 'qalibdir',
        'items'                    => 'maddələr',
        'key'                      => 'açar',
        'last_name'                => 'soyad',
        'lesson'                   => 'dərs',
        'line_address_1'           => 'sətir ünvanı 1',
        'line_address_2'           => 'sətir ünvanı 2',
        'login'                    => 'daxil ol',
        'message'                  => 'mesaj',
        'middle_name'              => 'ata adı',
        'minute'                   => 'dəqiqə',
        'mobile'                   => 'mobil nömrə',
        'month'                    => 'ay',
        'name'                     => 'ad',
        'national_code'            => 'milli məcəllə',
        'number'                   => 'nömrə',
        'password'                 => 'şifrə',
        'password_confirmation'    => 'şifrə təsdiqi',
        'phone'                    => 'telefon',
        'photo'                    => 'şəkil',
        'portfolio'                => 'portfel',
        'postal_code'              => 'poçt kodu',
        'preview'                  => 'önizləmə',
        'price'                    => 'qiymət',
        'product_id'               => 'məhsul ID',
        'product_uid'              => 'məhsul UID',
        'product_uuid'             => 'məhsul UUID',
        'promo_code'               => 'promo kodu',
        'province'                 => 'vilayət',
        'quantity'                 => 'kəmiyyət',
        'reason'                   => 'səbəb',
        'recaptcha_response_field' => 'recaptcha cavab sahəsi',
        'referee'                  => 'hakim',
        'referees'                 => 'hakimlər',
        'reject_reason'            => 'səbəbi rədd etmək',
        'remember'                 => 'yadda saxla',
        'restored_at'              => 'bərpa olunub',
        'result_text_under_image'  => 'şəklin altındakı nəticə mətni',
        'role'                     => 'rol',
        'rule'                     => 'qayda',
        'rules'                    => 'Qaydalar',
        'second'                   => 'saniyə',
        'sex'                      => 'cins',
        'shipment'                 => 'göndərmə',
        'short_text'               => 'qısa mətn',
        'size'                     => 'ölçü',
        'skills'                   => 'bacarıqlar',
        'slug'                     => 'ilbiz',
        'specialization'           => 'ixtisas',
        'started_at'               => 'başladı',
        'state'                    => 'dövlət',
        'status'                   => 'status',
        'street'                   => 'küçə',
        'student'                  => 'tələbə',
        'subject'                  => 'mövzu',
        'tag'                      => 'etiket',
        'tags'                     => 'etiketlər',
        'teacher'                  => 'müəllim',
        'terms'                    => 'şərtlər',
        'test_description'         => 'test təsviri',
        'test_locale'              => 'test yerli',
        'test_name'                => 'test adı',
        'text'                     => 'mətn',
        'time'                     => 'vaxt',
        'title'                    => 'başlıq',
        'type'                     => 'növü',
        'updated_at'               => 'yenilənib',
        'user'                     => 'istifadəçi',
        'username'                 => 'i̇stifadəçi adı',
        'value'                    => 'dəyər',
        'year'                     => 'i̇l',
    ],
];
