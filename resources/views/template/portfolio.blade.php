<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <meta name="description"
        content="Free open source Tailwind CSS starter template - for use as a user profile website / card">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,profile, user profile, card">

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="manifest" href="../site.webmanifest">
    <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#3b7977">

    <!-- Primary Meta Tags -->
    <title>Portfolio</title>
    <meta name="title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
    <meta name="description" content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body class=" font-sans antialiased text-gray-900 leading-normal tracking-wider">
    
    @include('template.portfolio.header')
    @include('template.portfolio.hero')
    @include('template.portfolio.about')
    @include('template.portfolio.portfolio')
    
    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
