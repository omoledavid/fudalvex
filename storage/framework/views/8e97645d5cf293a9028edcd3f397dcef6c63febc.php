<div class="mgm" style="display: none;">
    <div class="txt" style="color:black;">Someone from <b>Austria</b> just earned <a href="javascript:void(0);"
                                                                                     onclick="javascript:void(0);">$100000
            .</a></div>
</div>
<style>
    .mgm {
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #f2eeee;
        padding: 20px 27px;
        box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
    }

    .mgm a {
        font-weight: 700;
        display: block;
        color: green;
    }

    .mgm a,
    .mgm a:active {
        transition: all .2s ease;
        color: green;
    }
</style>
<script type="text/javascript">
    var listCountries = ['Argentina', 'USA', 'Germany', 'France', 'Italy', 'South Korea', 'Australia', 'Norway', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'Spain', 'Austria', 'Venezuela', 'South Africa', 'Sweden', 'South Korea', 'China', 'Italy', 'Germany', 'United Kingdom', 'Bahrain', 'Greece', 'Cuba', 'Bulgaria', 'Portugal', 'Austria', 'Cyprus', 'Panama', 'Asia', 'Norway', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus', 'Spain', 'Norway'];
    var listPlans = ['$50,000', '$15,000', '$10,000', '$100,000', '$20,000', '$30,000', '$40,000', '$60,000', '$7,000', '$25,000', '$35,000', '$5,000', '$7,000', '45,000', '$3,500', '$5,000', '$12,500', '$9,500'];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'Someone from <b>' + country + '</b> just earned  <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(300);
        window.setTimeout(function () {
            $(".mgm").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/snappy/layouts/partials/flashNotification.blade.php ENDPATH**/ ?>