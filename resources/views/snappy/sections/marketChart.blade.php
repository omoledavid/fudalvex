<section class="sale-section section-padding">
    <div class="container">
        <div class="section-header wow slideInLeft" data-wow-duration="2s">
            <h2 style="color: white;">Market Chart</h2>
            <p class="icon-norb"><img src="{{ asset('storage/' . $settings->favicon) }}" style="position: inherit;z-index: 1; width: 4rem;" alt="icon"></p>
        </div>
        <div style="height: 600px;" class="row">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container" style="height:100%;width:100%">
                <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                    {
                        "autosize": true,
                        "symbol": "NASDAQ:AAPL",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "light",
                        "style": "1",
                        "locale": "en",
                        "allow_symbol_change": true,
                        "calendar": false,
                        "support_host": "https://www.tradingview.com"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </div>
</section>
