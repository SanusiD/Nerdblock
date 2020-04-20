
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <title>{{$title}}</title>
    <link href="/css/main.css" rel="stylesheet" id="theme-style-css" type="text/css" />
    <link href="css/extras.css" rel="stylesheet" id="theme-style-css" type="text/css" />
    <script src="/js/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Array.prototype.slice.call(document.querySelectorAll('a span[id^="cloak"]')).forEach(function (
                span) {
                span.innerText = span.textContent;
            });
        });
        var $theme = {};
    </script>
</head>



