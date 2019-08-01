<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | De following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'De :attribute moet geaccepteerd worden.',
    'active_url' => 'De :attribute is geen geldige url.',
    'after' => 'De :attribute moet een datum na :date zijn.',
    'after_or_equal' => 'De :attribute moet later of op :date zijn.',
    'alpha' => 'De :attribute mag alleen uit letters bestaan.',
    'alpha_dash' => 'De :attribute mag alleen uit: letters, nummers, streepjes en liggende streepjes bestaan.',
    'alpha_num' => 'De :attribute mag alleen bestaan uit: letters en nummers.',
    'array' => 'De :attribute moet een lijst zijn.',
    'before' => 'De :attribute moet een datum voor :date zijn.',
    'before_or_equal' => 'De :attribute moet een datum voor of op :date zijn.',
    'between' => [
        'numeric' => 'De :attribute moet een waarde hebben tussen :min en :max.',
        'file' => 'De :attribute moet tussen :min en :max kilobytes groot zijn.',
        'string' => 'De :attribute moet tussen :min en :max karakters lang zijn.',
        'array' => 'De :attribute moet tussen :min en :max items bestaan.',
    ],
    'boolean' => 'De :attribute moet waar of onjuist zijn.',
    'confirmed' => 'De :attribute confirmation does not match.',
    'date' => 'De :attribute is not a valid date.',
    'date_equals' => 'De :attribute must be a date equal to :date.',
    'date_format' => 'De :attribute does not match the format :format.',
    'different' => 'De :attribute and :other must be different.',
    'digits' => 'De :attribute must be :digits digits.',
    'digits_between' => 'De :attribute must be between :min and :max digits.',
    'dimensions' => 'De :attribute has invalid image dimensions.',
    'distinct' => 'De :attribute field has a duplicate value.',
    'email' => 'De :attribute must be a valid email address.',
    'exists' => 'De selected :attribute is invalid.',
    'file' => 'De :attribute must be a file.',
    'filled' => 'De :attribute field must have a value.',
    'gt' => [
        'numeric' => 'De :attribute must be greater than :value.',
        'file' => 'De :attribute must be greater than :value kilobytes.',
        'string' => 'De :attribute must be greater than :value characters.',
        'array' => 'De :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'De :attribute must be greater than or equal :value.',
        'file' => 'De :attribute must be greater than or equal :value kilobytes.',
        'string' => 'De :attribute must be greater than or equal :value characters.',
        'array' => 'De :attribute must have :value items or more.',
    ],
    'image' => 'De :attribute must be an image.',
    'in' => 'De selected :attribute is invalid.',
    'in_array' => 'De :attribute field does not exist in :other.',
    'integer' => 'De :attribute must be an integer.',
    'ip' => 'De :attribute must be a valid IP address.',
    'ipv4' => 'De :attribute must be a valid IPv4 address.',
    'ipv6' => 'De :attribute must be a valid IPv6 address.',
    'json' => 'De :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'De :attribute must be less than :value.',
        'file' => 'De :attribute must be less than :value kilobytes.',
        'string' => 'De :attribute must be less than :value characters.',
        'array' => 'De :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'De :attribute must be less than or equal :value.',
        'file' => 'De :attribute must be less than or equal :value kilobytes.',
        'string' => 'De :attribute must be less than or equal :value characters.',
        'array' => 'De :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'De :attribute may not be greater than :max.',
        'file' => 'De :attribute may not be greater than :max kilobytes.',
        'string' => 'De :attribute may not be greater than :max characters.',
        'array' => 'De :attribute may not have more than :max items.',
    ],
    'mimes' => 'De :attribute must be a file of type: :values.',
    'mimetypes' => 'De :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'De :attribute must be at least :min.',
        'file' => 'De :attribute must be at least :min kilobytes.',
        'string' => 'De :attribute must be at least :min characters.',
        'array' => 'De :attribute must have at least :min items.',
    ],
    'not_in' => 'De selected :attribute is invalid.',
    'not_regex' => 'De :attribute format is invalid.',
    'numeric' => 'De :attribute must be a number.',
    'present' => 'De :attribute field must be present.',
    'regex' => 'De :attribute format is invalid.',
    'required' => 'De :attribute field is required.',
    'required_if' => 'De :attribute field is required when :other is :value.',
    'required_unless' => 'De :attribute field is required unless :other is in :values.',
    'required_with' => 'De :attribute field is required when :values is present.',
    'required_with_all' => 'De :attribute field is required when :values are present.',
    'required_without' => 'De :attribute field is required when :values is not present.',
    'required_without_all' => 'De :attribute field is required when none of :values are present.',
    'same' => 'De :attribute and :other must match.',
    'size' => [
        'numeric' => 'De :attribute must be :size.',
        'file' => 'De :attribute must be :size kilobytes.',
        'string' => 'De :attribute must be :size characters.',
        'array' => 'De :attribute must contain :size items.',
    ],
    'starts_with' => 'De :attribute must start with one of the following: :values',
    'string' => 'De :attribute must be a string.',
    'timezone' => 'De :attribute must be a valid zone.',
    'unique' => 'De :attribute has already been taken.',
    'uploaded' => 'De :attribute failed to upload.',
    'url' => 'De :attribute format is invalid.',
    'uuid' => 'De :attribute must be a valid UUID.',

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
