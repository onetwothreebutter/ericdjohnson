<?php
//set timezone across the whole site
date_default_timezone_set('America/Chicago');

function get_page_class() {
    $request_uri = trim($_SERVER['REQUEST_URI'], '/');
    $request_uri = str_replace('/','_',$request_uri);
    return ($request_uri !== '') ? $request_uri : 'homepage';
}

function get_page_css_file_path() {
    $css_path = trim($_SERVER['REQUEST_URI'], '/');

    if ($css_path === '') {
        $css_path = 'homepage';
        $file_name = 'homepage';
    } else {
        $css_path_array = explode('/', $css_path);
        $file_name = array_pop($css_path_array);

        //the production nginx config passes in index.php, but my
        // local just passes the directory
        if (strpos($file_name, 'index.php') > -1) {
            $file_name = array_pop($css_path_array);
        }

        if(array_pop($css_path_array) === 'work-ive-done') {
            $css_path = 'work-ive-done/subpages/' . $file_name;
        }

    }

    return 'src/pages/' . $css_path . '/styles/css/' . $file_name;
}
?>
<!doctype html>
<html class="<?php print get_page_class(); ?>" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eric Johnson, Web Developer/UX Guy/Creative Person</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico?v=3" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Ledger" rel="stylesheet">

    <link rel="stylesheet" href="/src/styles/css/normalize.css">
    <link rel="stylesheet" href="/src/styles/css/main.css">
    <link rel="stylesheet" href="/src/styles/css/screen.css">
    <link rel="stylesheet" href="/<?php print get_page_css_file_path(); ?>.css">
    <script src="/src/js/libs/modernizr-custom-3.5.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            custom: {
                families: ['BrandonPrinted']
            },
            fontinactive: function() {
                document.getElementsByTagName('html')[0].classList.add('-font-failed');
            }
        });
    </script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->