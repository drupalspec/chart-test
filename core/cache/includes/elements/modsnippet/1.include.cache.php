<?php
// Parse data from MODX [content]
function parse_csv($csv_string, $delimiter = ";", $skip_empty_lines = true, $trim_fields = true) {
    $enc = preg_replace('/(?<!")""/', '!!Q!!', $csv_string);
    $enc = preg_replace_callback(
        '/"(.*?)"/s',
        function ($field) {
            return urlencode(utf8_encode($field[1]));
        },
        $enc
    );
    $lines = preg_split($skip_empty_lines ? ($trim_fields ? '/( *\R)+/s' : '/\R+/s') : '/\R/s', $enc);
    return array_map(
        function ($line) use ($delimiter, $trim_fields) {
            $fields = $trim_fields ? array_map('trim', explode($delimiter, $line)) : explode($delimiter, $line);
            return array_map(
                function ($field) {
                    return str_replace('!!Q!!', '"', utf8_decode(urldecode($field)));
                },
                $fields
            );
        },
        $lines
    );
}

$results = parse_csv($modx->resource->getContent());

foreach($results as $result) {
echo '{
    width: 20,
    label: "'.$result[0].'",
    slices :
        [';
    // Max score < 5
    if($result[2] < 5) {
        for($i = $result[2]; $i < 5; $i++) {
            echo  '{
                height: 100,
                color: white,
                highlight: white
            },';
        }
    }
    // Total score = Mac score
    if($result[1] !== $result[2]) {
        for($i = $result[1]; $i < $result[2]; $i++) { 
            echo  '{
                height: 100,
                color: red,
                highlight: red
            },';
        }
    }
    // render total result
    for($i = 0; $i < $result[1]; $i++) {    
        echo  '{
            height: 100,
            color: green,
            highlight: greenHover
        },';
    }
      echo ']
  },';
}
return;
