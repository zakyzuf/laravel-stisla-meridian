<!doctype html>
<html lang="en" data-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/svg+xml"
        href='data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><style>.t{fill:%230a0a0a}.m{stroke:%23fafafa}@media (prefers-color-scheme: dark){.t{fill:%23fafafa}.m{stroke:%230a0a0a}}</style><rect class="t" width="512" height="512" rx="112"/><path class="m" d="M 392 144 H 200 A 56 56 0 0 0 200 256 H 312 A 56 56 0 0 1 312 368 H 120" fill="none" stroke-width="76" stroke-linecap="round" stroke-linejoin="round"/></svg>' />
    <script>
        // Apply the saved theme before first paint to avoid a flash.
        (function() {
            var t = localStorage.getItem("stisla-theme");
            if (t === "dark" || t === "light") document.documentElement.dataset.theme = t;
        })();
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
    <title>Dashboard · Meridian</title>

    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/theme.js', 'resources/js/app-shell.js'])
</head>

<body>
    <div class="app-shell" data-stisla-app-shell data-stisla-app-shell-auto-collapse="true">
        <x-sidebar />

        <main class="app-shell__main">
            <x-navbar />

            <div class="page content">
                <div class="content__container">
                    
                    {{ $slot }}

                </div>
            </div>
        </main>
    </div>

    <!-- Third-party (CDN in both dev and prod). Loads before main.js so charts.js sees window.ApexCharts. -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3"></script>

    <script type="module" src="https://cdn.jsdelivr.net/npm/@stisla/vanilla@3/dist/stisla.js"></script>
</body>

</html>
