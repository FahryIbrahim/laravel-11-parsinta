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

    'accepted' => 'Kolom :attribute harus diterima.',
    'accepted_if' => 'Kolom :attribute harus diterima jika :other adalah :value.',
    'active_url' => 'Kolom :attribute bukan URL yang valid.',
    'after' => 'Kolom :attribute harus tanggal setelah :date.',
    'after_or_equal' => 'Kolom :attribute harus tanggal setelah atau sama dengan :date.',
    'alpha' => 'Kolom :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Kolom :attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'Kolom :attribute hanya boleh berisi huruf dan angka.',
    'array' => 'Kolom :attribute harus berupa array.',
    'ascii' => 'Kolom :attribute hanya boleh berisi karakter alfanumerik satu byte dan simbol.',
    'before' => 'Kolom :attribute harus tanggal sebelum :date.',
    'before_or_equal' => 'Kolom :attribute harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => 'Kolom :attribute harus memiliki antara :min dan :max item.',
        'file' => 'Kolom :attribute harus berukuran antara :min dan :max kilobita.',
        'numeric' => 'Kolom :attribute harus bernilai antara :min dan :max.',
        'string' => 'Kolom :attribute harus memiliki panjang antara :min dan :max karakter.',
    ],
    'boolean' => 'Kolom :attribute harus bernilai true atau false.',
    'can' => 'Kolom :attribute berisi nilai yang tidak diizinkan.',
    'confirmed' => 'Konfirmasi kolom :attribute tidak cocok.',
    'contains' => 'Kolom :attribute tidak mengandung nilai yang diperlukan.',
    'current_password' => 'Kata sandi salah.',
    'date' => 'Kolom :attribute harus tanggal yang valid.',
    'date_equals' => 'Kolom :attribute harus tanggal yang sama dengan :date.',
    'date_format' => 'Kolom :attribute tidak cocok dengan format :format.',
    'decimal' => 'Kolom :attribute harus memiliki :decimal tempat desimal.',
    'declined' => 'Kolom :attribute harus ditolak.',
    'declined_if' => 'Kolom :attribute harus ditolak jika :other adalah :value.',
    'different' => 'Kolom :attribute dan :other harus berbeda.',
    'digits' => 'Kolom :attribute harus berisi :digits digit.',
    'digits_between' => 'Kolom :attribute harus berisi antara :min dan :max digit.',
    'dimensions' => 'Kolom :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Kolom :attribute memiliki nilai duplikat.',
    'doesnt_end_with' => 'Kolom :attribute tidak boleh diakhiri dengan salah satu dari berikut: :values.',
    'doesnt_start_with' => 'Kolom :attribute tidak boleh diawali dengan salah satu dari berikut: :values.',
    'email' => 'Kolom :attribute harus berisi alamat email yang valid.',
    'ends_with' => 'Kolom :attribute harus diakhiri dengan salah satu dari berikut: :values.',
    'enum' => 'Nilai yang dipilih untuk :attribute tidak valid.',
    'exists' => 'Nilai yang dipilih untuk :attribute tidak valid.',
    'extensions' => 'Kolom :attribute harus memiliki salah satu ekstensi berikut: :values.',
    'file' => 'Kolom :attribute harus berupa file.',
    'filled' => 'Kolom :attribute harus memiliki nilai.',
    'gt' => [
        'array' => 'Kolom :attribute harus memiliki lebih dari :value item.',
        'file' => 'Kolom :attribute harus berukuran lebih dari :value kilobita.',
        'numeric' => 'Kolom :attribute harus bernilai lebih dari :value.',
        'string' => 'Kolom :attribute harus memiliki panjang lebih dari :value karakter.',
    ],
    'gte' => [
        'array' => 'Kolom :attribute harus memiliki :value item atau lebih.',
        'file' => 'Kolom :attribute harus berukuran lebih dari atau sama dengan :value kilobita.',
        'numeric' => 'Kolom :attribute harus bernilai lebih dari atau sama dengan :value.',
        'string' => 'Kolom :attribute harus memiliki panjang lebih dari atau sama dengan :value karakter.',
    ],
    'hex_color' => 'Kolom :attribute harus berupa warna heksadesimal yang valid.',
    'image' => 'Kolom :attribute harus berupa gambar.',
    'in' => 'Nilai yang dipilih untuk :attribute tidak valid.',
    'in_array' => 'Kolom :attribute tidak ada dalam :other.',
    'integer' => 'Kolom :attribute harus berupa bilangan bulat.',
    'ip' => 'Kolom :attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Kolom :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Kolom :attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Kolom :attribute harus berupa string JSON yang valid.',
    'list' => 'Kolom :attribute harus berupa daftar.',
    'lowercase' => 'Kolom :attribute harus berupa huruf kecil.',
    'lt' => [
        'array' => 'Kolom :attribute harus memiliki kurang dari :value item.',
        'file' => 'Kolom :attribute harus berukuran kurang dari :value kilobita.',
        'numeric' => 'Kolom :attribute harus bernilai kurang dari :value.',
        'string' => 'Kolom :attribute harus memiliki panjang kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => 'Kolom :attribute tidak boleh memiliki lebih dari :value item.',
        'file' => 'Kolom :attribute harus berukuran kurang dari atau sama dengan :value kilobita.',
        'numeric' => 'Kolom :attribute harus bernilai kurang dari atau sama dengan :value.',
        'string' => 'Kolom :attribute harus memiliki panjang kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => 'Kolom :attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => 'Kolom :attribute tidak boleh memiliki lebih dari :max item.',
        'file' => 'Kolom :attribute tidak boleh berukuran lebih dari :max kilobita.',
        'numeric' => 'Kolom :attribute tidak boleh bernilai lebih dari :max.',
        'string' => 'Kolom :attribute tidak boleh memiliki panjang lebih dari :max karakter.',
    ],
    'max_digits' => 'Kolom :attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes' => 'Kolom :attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => 'Kolom :attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => 'Kolom :attribute harus memiliki setidaknya :min item.',
        'file' => 'Kolom :attribute harus berukuran setidaknya :min kilobita.',
        'numeric' => 'Kolom :attribute harus bernilai setidaknya :min.',
        'string' => 'Kolom :attribute harus memiliki panjang setidaknya :min karakter.',
    ],
    'min_digits' => 'Kolom :attribute harus memiliki setidaknya :min digit.',
    'missing' => 'Kolom :attribute harus hilang.',
    'missing_if' => 'Kolom :attribute harus hilang jika :other adalah :value.',
    'missing_unless' => 'Kolom :attribute harus hilang kecuali jika :other adalah :value.',
    'missing_with' => 'Kolom :attribute harus hilang jika :values ada.',
    'missing_with_all' => 'Kolom :attribute harus hilang jika :values ada.',
    'multiple_of' => 'Kolom :attribute harus merupakan kelipatan dari :value.',
    'not_in' => 'Nilai yang dipilih untuk :attribute tidak valid.',
    'not_regex' => 'Format kolom :attribute tidak valid.',
    'numeric' => 'Kolom :attribute harus berupa angka.',
    'password' => [
        'letters' => 'Kolom :attribute harus mengandung setidaknya satu huruf.',
        'mixed' => 'Kolom :attribute harus mengandung setidaknya satu huruf kapital dan satu huruf kecil.',
        'numbers' => 'Kolom :attribute harus mengandung setidaknya satu angka.',
        'symbols' => 'Kolom :attribute harus mengandung setidaknya satu simbol.',
        'uncompromised' => ':attribute yang diberikan telah muncul dalam kebocoran data. Harap pilih :attribute yang berbeda.',
    ],
    'present' => 'Kolom :attribute harus ada.',
    'present_if' => 'Kolom :attribute harus ada jika :other adalah :value.',
    'present_unless' => 'Kolom :attribute harus ada kecuali jika :other adalah :value.',
    'present_with' => 'Kolom :attribute harus ada jika :values ada.',
    'present_with_all' => 'Kolom :attribute harus ada jika :values ada.',
    'prohibited' => 'Kolom :attribute dilarang.',
    'prohibited_if' => 'Kolom :attribute dilarang jika :other adalah :value.',
    'prohibited_unless' => 'Kolom :attribute dilarang kecuali jika :other ada dalam :values.',
    'prohibits' => 'Kolom :attribute melarang :other hadir.',
    'regex' => 'Format kolom :attribute tidak valid.',
    'required' => 'Kolom :attribute wajib diisi.',
    'required_array_keys' => 'Kolom :attribute harus berisi entri untuk: :values.',
    'required_if' => 'Kolom :attribute wajib diisi jika :other adalah :value.',
    'required_if_accepted' => 'Kolom :attribute wajib diisi jika :other diterima.',
    'required_if_declined' => 'Kolom :attribute wajib diisi jika :other ditolak.',
    'required_unless' => 'Kolom :attribute wajib diisi kecuali jika :other ada dalam :values.',
    'required_with' => 'Kolom :attribute wajib diisi jika :values ada.',
    'required_with_all' => 'Kolom :attribute wajib diisi jika :values ada.',
    'required_without' => 'Kolom :attribute wajib diisi jika :values tidak ada.',
    'required_without_all' => 'Kolom :attribute wajib diisi jika tidak ada :values.',
    'same' => 'Kolom :attribute harus sama dengan :other.',
    'size' => [
        'array' => 'Kolom :attribute harus berisi :size item.',
        'file' => 'Kolom :attribute harus berukuran :size kilobita.',
        'numeric' => 'Kolom :attribute harus bernilai :size.',
        'string' => 'Kolom :attribute harus berisi :size karakter.',
    ],
    'starts_with' => 'Kolom :attribute harus diawali dengan salah satu dari berikut: :values.',
    'string' => 'Kolom :attribute harus berupa string.',
    'timezone' => 'Kolom :attribute harus berupa zona waktu yang valid.',
    'unique' => 'Kolom :attribute sudah ada.',
    'uploaded' => 'Kolom :attribute gagal diunggah.',
    'uppercase' => 'Kolom :attribute harus berupa huruf kapital.',
    'url' => 'Kolom :attribute harus berupa URL yang valid.',
    'ulid' => 'Kolom :attribute harus berupa ULID yang valid.',
    'uuid' => 'Kolom :attribute harus berupa UUID yang valid.',

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
