<section class="sale-section section-padding">
    <div class="container">
        <div class="section-header wow slideInLeft" data-wow-duration="2s">
            <h2 style="color: white;">Invest in top shocks</h2>
            <p class="icon-norb"><img src="<?php echo e(asset('storage/' . $settings->favicon)); ?>"
                                      style="position: inherit;z-index: 1; width: 4rem;" alt="icon"></p>
        </div>
        <div style="height: 600px;" class="row">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-stock-heatmap.js" async>
                    {
                        "exchanges"
                    :
                        [],
                            "dataSource"
                    :
                        "SPX500",
                            "grouping"
                    :
                        "sector",
                            "blockSize"
                    :
                        "market_cap_basic",
                            "blockColor"
                    :
                        "change",
                            "locale"
                    :
                        "en",
                            "symbolUrl"
                    :
                        "",
                            "colorTheme"
                    :
                        "light",
                            "hasTopBar"
                    :
                        false,
                            "isDataSetEnabled"
                    :
                        false,
                            "isZoomEnabled"
                    :
                        true,
                            "hasSymbolTooltip"
                    :
                        true,
                            "isMonoSize"
                    :
                        false,
                            "width"
                    :
                        "100%",
                            "height"
                    :
                        "100%"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </div>
</section>
<?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/snappy/sections/topStocks.blade.php ENDPATH**/ ?>