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
    'alpha_dash' => 'De :attribute mag alleen bestaan uit: letters, nummers, streepjes en liggende streepjes.',
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
    'boolean' => 'De :attribute moet waar of niet waar zijn.',
    'confirmed' => 'De :attribute bevestiging is niet hetzelfde.',
    'date' => 'De :attribute is geen geldige datum.',
    'date_equals' => 'De :attribute moet een datum zijn op :date.',
    'date_format' => 'De :attribute volgt de vorm niet :format.',
    'different' => 'De :attribute en :other moet verschillend zijn.',
    'digits' => 'De :attribute moet :digits cijfers zijn.',
    'digits_between' => 'De :attribute moet tussen :min en :max cijfers zijn.',
    'dimensions' => 'De :attribute heeft ongeldige afbeeldingsafmetingen.',
    'distinct' => 'Het :attribute veld mag geen dubbele waarde hebben.',
    'email' => 'De :attribute moet een geldige emailadres zijn.',
    'exists' => 'De geselecteerde :attribute is ongeldig.',
    'file' => 'De :attribute moet een bestand zijn.',
    'filled' => 'Het :attribute veld moet een waarde hebben.',
    'gt' => [
        'numeric' => 'De :attribute moet groter zijn dan :value.',
        'file' => 'De :attribute moet groter zijn dan :value kilobytes.',
        'string' => 'De :attribute moet groter zijn dan :value karakters.',
        'array' => 'De :attribute moet meer dan :value items hebben.',
    ],
    'gte' => [
        'numeric' => 'De :attribute moet groter of gelijk zijn aan :value.',
        'file' => 'De :attribute moet groter of gelijk zijn aan :value kilobytes.',
        'string' => 'De :attribute moet groter of gelijk zijn aan :value karakters.',
        'array' => 'De :attribute moet :value items of meer hebben.',
    ],
    'image' => 'De :attribute moet een afbeelding zijn.',
    'in' => 'De geselecteerde :attribute is ongeldig.',
    'in_array' => 'Het :attribute veld bestaat niet in :other.',
    'integer' => 'De :attribute moet een geheel getal zijn.',
    'ip' => 'De :attribute moet een geldig IP-adres zijn.',
    'ipv4' => 'De :attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => 'De :attribute moet een geldig IPv6-adres zijn.',
    'json' => 'De :attribute moet een geldige JSON string zijn.',
    'lt' => [
        'numeric' => 'De :attribute moet minder zijn dan :value.',
        'file' => 'De :attribute moet minder zijn dan :value kilobytes.',
        'string' => 'De :attribute moet minder dan :value karakters zijn.',
        'array' => 'De :attribute moet minder dan :value items hebben.',
    ],
    'lte' => [
        'numeric' => 'De :attribute moet minder of gelijk zijn aan :value.',
        'file' => 'De :attribute moet minder of gelijk zijn aan :value kilobytes.',
        'string' => 'De :attribute moet minder of gelijk zijn aan :value karakters.',
        'array' => 'De :attribute mag niet meer dan :value items hebben.',
    ],
    'max' => [
        'numeric' => 'De :attribute mag niet groter zijn dan :max.',
        'file' => 'De :attribute mag niet groter zijn dan :max kilobytes.',
        'string' => 'De :attribute mag niet groter zijn dan :max karakters.',
        'array' => 'De :attribute mag niet meer dan :max items hebben.',
    ],
    'mimes' => 'De :attribute moet een bestand zijn van het type: :values.',
    'mimetypes' => 'De :attribute moet een bestand zijn van het type: :values.',
    'min' => [
        'numeric' => 'De :attribute moet minimaal :min zijn.',
        'file' => 'De :attribute moet minimaal :min kilobytes zijn.',
        'string' => 'De :attribute moet minimaal :min karakters zijn.',
        'array' => 'De :attribute moet minimaal :min items hebben.',
    ],
    'not_in' => 'De geselecteerde :attribute is ongeldig.',
    'not_regex' => 'De :attribute vorm is ongeldig.',
    'numeric' => 'De :attribute moet een nummer zijn.',
    'present' => 'Het :attribute veld moet aanwezig zijn.',
    'regex' => 'De :attribute vorm is ongeldig.',
    'required' => 'Het :attribute veld is verplicht.',
    'required_if' => 'Het :attribute veld is verplicht als :other gelijk is aan :value.',
    'required_unless' => 'Het :attribute veld is verplicht tenzij :other in :values aanwezig is.',
    'required_with' => 'Het :attribute veld is verplicht als :values aanwezig is.',
    'required_with_all' => 'Het :attribute veld is verplicht als :values aanwezig zijn.',
    'required_without' => 'Het :attribute veld is verplicht als :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is verplicht als geen van :values aanwezig zijn.',
    'same' => 'De :attribute en :other moeten overeen komen.',
    'size' => [
        'numeric' => 'De :attribute moet :size zijn.',
        'file' => 'De :attribute moet :size kilobytes zijn.',
        'string' => 'De :attribute moet :size karakters zijn.',
        'array' => 'De :attribute moet bestaan uit :size items.',
    ],
    'starts_with' => 'De :attribute moet starten met een van de volgende: :values',
    'string' => 'De :attribute moet tekst zijn.',
    'timezone' => 'De :attribute moet een geldige zone zijn.',
    'unique' => 'De :attribute is al gekozen.',
    'uploaded' => 'De :attribute is niet geüpload.',
    'url' => 'De :attribute vorm is ongeldig.',
    'uuid' => 'De :attribute moet een geldige UUID zijn.',

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
