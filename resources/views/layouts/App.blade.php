<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="adsite task" />
    <link rel="icon" href="images/favicon.png">

    <title>Adsite</title>

    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
        rel="stylesheet">

    

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class='overflow-x-hidden'>
    
    @include('partials.top-header')
    @include('partials.hero')
    @include('partials.slider')
    @include('partials.more-info')
    @include('partials.footer') 
</body>

</html>
