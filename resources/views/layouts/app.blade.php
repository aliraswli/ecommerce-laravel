<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title></title>
    <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">
    <link rel="icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("assets/swiper/swiper.css") }}">

    <script type="text/javascript">
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body>

@include("shared.icons")


@includeUnless(isset($hasHeader), "layouts.header")

@yield("content")

@includeUnless(isset($hasFooter), "layouts.footer")

<!-- Overlay -->
<div class="overlay"></div>
<div class="search-overlay"></div>

<script src="{{ asset("assets/swiper/swiper.js") }}"></script>
<script src="{{ asset("assets/scripts/app.js") }}"></script>
<script type="module" src="{{ asset("assets/scripts/slider.js") }}"></script>
<script src="{{ asset("assets/scripts/timer.js") }}"></script>

</body>

</html>
