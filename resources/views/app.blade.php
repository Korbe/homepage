<!DOCTYPE html>
<html lang="en" class="h-full antialiased dark">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    
    <meta name="description" content="IT-Dienstleister & Software Ingenieur aus Villach. PC-Notdienst, Smartphone-Hilfe & individuelle Webapps - verständlich, schnell & zuverlässig.">

    <meta property="og:title" content="IT-Dienstleister & PC Notdienst Villach - Ing. Lukas Korbitsch">
    <meta property="og:description" content="Schnelle Hilfe bei PC-Problemen, Smartphone-Support & individuelle Webapps.">
    <meta property="og:image" content="https://korbitsch.at/images/me.jpg">
    <meta property="og:url" content="https://korbitsch.at">
    <meta property="og:type" content="website">

    <title inertia>{{ config('app.name', 'Ing. Korbitsch - IT-Dienstleister Villach | PC-Notdienst & maßgeschneiderte Webapps') }}</title>

    <link rel="canonical" href="https://korbitsch.at/">
    <link rel="icon" type="image/png" href="/images/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/images/favicons/favicon.svg" />
    <link rel="shortcut icon" href="/images/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Korbitsch" />
    <link rel="manifest" href="site.webmanifest" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-162ZVL3ZBV"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-162ZVL3ZBV', {
        'anonymize_ip': true
    });
</script>

<body class="flex h-full bg-zinc-50 dark:bg-black font-roboto">
    @inertia
</body>

</html>
