<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Home',
    'longtitle' => 'Wow',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => 'Ooops!',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1464081841,
    'editedby' => 1,
    'editedon' => 1464083266,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!doctype html>
<html lang="en">
<head>
    <title>Home - MODX Revolution</title>
    <base href="[[!++site_url]]" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="/assets/chart/main.css">
    <script src="/assets/chart/Chart.min.js"></script>
    <script src="/assets/chart/main.js"></script>
</head>
<body>
<a href="#" title="Modx" class="logo" target="_blank">MODX</a>
<div class="container">
    <section>
        <h1>Home</h1>
        <div class="col-l">
            <h3>Name</h3>
            <p>Wow</p>
            <h3>Comments</h3>
            <p></p>
            <h3>Actions</h3>
            <p></p>
        </div>
        
        
        <div class="chart-bg">
            <div id="canvas-holder" style="width:427px">
    			<canvas id="chart-area" width="427" height="427"/>
    		</div>
    
    		<div id="my-doughnut-legend">
        </div>
		<script>
            var green = \'#66c548\';
            var greenHover = \'#50a835\';
            var red = \'#e53312\';
            var white = \'#ffffff\';
            var spieData = [
                {
    width: 20,
    label: "Ooops!",
    slices :
        [{
                height: 100,
                color: white,
                highlight: white
            },{
                height: 100,
                color: white,
                highlight: white
            },{
                height: 100,
                color: white,
                highlight: white
            },{
                height: 100,
                color: white,
                highlight: white
            },{
                height: 100,
                color: white,
                highlight: white
            },]
  },
            ];
	    </script>
    </section>
</div>
<footer class="disclaimer">
    <!--<p>&copy; 2005-2016 the VDO Game.</p>-->
</footer>
<script>
    document.querySelector(\'head\').innerHTML += "<link href=\'https://fonts.googleapis.com/css?family=Open+Sans:400,700\' rel=\'stylesheet\' type=\'text/css\'>";
    document.body.classList.add(\'loaded\');
</script>
</body>
</html>
',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '/',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Home',
    '[[*longtitle]]' => 'Wow',
    '[[*description]]' => '',
    '[[*introtext]]' => '',
    '[[chartdata]]' => '{
    width: 20,
    label: "Ooops!",
    slices :
        [{
                height: 100,
                color: white,
                highlight: white
            },{
                height: 100,
                color: white,
                highlight: white
            },{
                height: 100,
                color: white,
                highlight: white
            },{
                height: 100,
                color: white,
                highlight: white
            },{
                height: 100,
                color: white,
                highlight: white
            },]
  },',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
      'chartdata' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'chartdata',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '// Parse data from MODX [content]
function parse_csv($csv_string, $delimiter = ";", $skip_empty_lines = true, $trim_fields = true) {
    $enc = preg_replace(\'/(?<!")""/\', \'!!Q!!\', $csv_string);
    $enc = preg_replace_callback(
        \'/"(.*?)"/s\',
        function ($field) {
            return urlencode(utf8_encode($field[1]));
        },
        $enc
    );
    $lines = preg_split($skip_empty_lines ? ($trim_fields ? \'/( *\\R)+/s\' : \'/\\R+/s\') : \'/\\R/s\', $enc);
    return array_map(
        function ($line) use ($delimiter, $trim_fields) {
            $fields = $trim_fields ? array_map(\'trim\', explode($delimiter, $line)) : explode($delimiter, $line);
            return array_map(
                function ($field) {
                    return str_replace(\'!!Q!!\', \'"\', utf8_decode(urldecode($field)));
                },
                $fields
            );
        },
        $lines
    );
}

$results = parse_csv($modx->resource->getContent());

foreach($results as $result) {
echo \'{
    width: 20,
    label: "\'.$result[0].\'",
    slices :
        [\';
    // Max score < 5
    if($result[2] < 5) {
        for($i = $result[2]; $i < 5; $i++) {
            echo  \'{
                height: 100,
                color: white,
                highlight: white
            },\';
        }
    }
    // Total score = Mac score
    if($result[1] !== $result[2]) {
        for($i = $result[1]; $i < $result[2]; $i++) { 
            echo  \'{
                height: 100,
                color: red,
                highlight: red
            },\';
        }
    }
    // render total result
    for($i = 0; $i < $result[1]; $i++) {    
        echo  \'{
            height: 100,
            color: green,
            highlight: greenHover
        },\';
    }
      echo \']
  },\';
}',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '// Parse data from MODX [content]
function parse_csv($csv_string, $delimiter = ";", $skip_empty_lines = true, $trim_fields = true) {
    $enc = preg_replace(\'/(?<!")""/\', \'!!Q!!\', $csv_string);
    $enc = preg_replace_callback(
        \'/"(.*?)"/s\',
        function ($field) {
            return urlencode(utf8_encode($field[1]));
        },
        $enc
    );
    $lines = preg_split($skip_empty_lines ? ($trim_fields ? \'/( *\\R)+/s\' : \'/\\R+/s\') : \'/\\R/s\', $enc);
    return array_map(
        function ($line) use ($delimiter, $trim_fields) {
            $fields = $trim_fields ? array_map(\'trim\', explode($delimiter, $line)) : explode($delimiter, $line);
            return array_map(
                function ($field) {
                    return str_replace(\'!!Q!!\', \'"\', utf8_decode(urldecode($field)));
                },
                $fields
            );
        },
        $lines
    );
}

$results = parse_csv($modx->resource->getContent());

foreach($results as $result) {
echo \'{
    width: 20,
    label: "\'.$result[0].\'",
    slices :
        [\';
    // Max score < 5
    if($result[2] < 5) {
        for($i = $result[2]; $i < 5; $i++) {
            echo  \'{
                height: 100,
                color: white,
                highlight: white
            },\';
        }
    }
    // Total score = Mac score
    if($result[1] !== $result[2]) {
        for($i = $result[1]; $i < $result[2]; $i++) { 
            echo  \'{
                height: 100,
                color: red,
                highlight: red
            },\';
        }
    }
    // render total result
    for($i = 0; $i < $result[1]; $i++) {    
        echo  \'{
            height: 100,
            color: green,
            highlight: greenHover
        },\';
    }
      echo \']
  },\';
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);