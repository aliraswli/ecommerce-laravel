<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> {{ $title ?? "" }} - فروشگاه</title>
    <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">
    <link rel="icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("assets/swiper/swiper.css") }}">

    <script type="text/javascript">
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body>

@include("layouts.icons")

@includeUnless(isset($hiddenHeader), "layouts.header")

@yield("content")

@includeUnless(isset($hiddenFooter), "layouts.footer")

{{-- Overlay --}}
<div class="overlay"></div>
<div class="search-overlay"></div>


@stack('scripts') {{-- Scripts will be pushed here --}}

{{-- Js Scripts --}}
<script src="{{ asset("assets/swiper/swiper.js") }}"></script>
<script src="{{ asset("assets/scripts/app.js") }}"></script>
<script type="module" src="{{ asset("assets/scripts/slider.js") }}"></script>
<script src="{{ asset("assets/scripts/timer.js") }}"></script>

</body>

</html>
