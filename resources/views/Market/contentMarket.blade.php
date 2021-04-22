
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chartisan example</title>
</head>
<body>
<!-- Chart's container -->
<div id="chart" style="height: 300px; width: 500px; border: 1px solid" class="selectContent"></div>
<!-- Charting library -->
<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
<!-- Your application script -->
<script>
    const chart = new Chartisan({
        el: '#chart',
        url: "@chart('sampleChart')",
    });
</script>
</body>
</html>

{{--<div class="selectContent">--}}
{{--    <div class="content content-1">--}}
{{--        content 1--}}
{{--    </div>--}}

{{--    <div class="content content-2">--}}
{{--        content 2--}}
{{--    </div>--}}

{{--    <div class="content content-3">--}}
{{--        content 3--}}
{{--    </div>--}}

{{--    <div class="content content-4">--}}
{{--        content 4--}}
{{--    </div>--}}

{{--    <div class="content content-5">--}}
{{--        content 5--}}
{{--    </div>--}}
{{--</div>--}}
