{include 'file:chunks/base/head.tpl'}

<body class="coming-soon">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-6">
                    <div class="soon-content">
                        <h1>COMING SOON</h1>
                        <p>Unfortunately, we’re not quite ready yet. But, you can see our progres above.</p>
                        <div class="coming-countdown"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/sconto/assets/js/plugins.min.js"></script>
    <script src="assets/sconto/assets/js/main.js"></script>
    <script>
        $(function() {
            "use strict";
            $.fn.countdown && $(".coming-countdown").countdown({
                until: new Date(2016, 8, 14),
                format: "DHMS",
                padZeroes: !0
            })
        })
    </script>
</body>

</html>
