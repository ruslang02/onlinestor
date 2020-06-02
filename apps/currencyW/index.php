<content style="overflow: unset;">
	<code class="currencyW-body" style="    background: rgba(166, 146, 22, 0.85);
    height: 60px;
    width: 100%;
    color: white;
    display: block;
    text-align: center;
    font-size: 14px;
    padding-top: 5px;
    font-family: Consolas;
    line-height: 26px;">
        <label style="font-family: consolas,Ubuntu Mono,monospace;">USD: <input data-currency="USD" onclick="$(this).focus();" type="text" class="form-control" style="padding: 0;width: 85px;"></label>
        <label style="font-family: consolas,Ubuntu Mono,monospace;">RUB: <input data-currency="RUB" onclick="$(this).focus();" type="text" class="form-control" style="padding: 0;width: 85px;"></label>
	</code>

    <script>
        $(".currencyW-body input").on("input",function() {
            var currencytwo = $(".currencyW-body input:not([data-currency=" + $(this).attr('data-currency') + "])");
            var currencyone = $(this);
            $.getJSON("https://api.fixer.io/latest?symbols=" + currencytwo.attr('data-currency') + "&base=" + $(this).attr('data-currency'),function(json) {
                var ctwo = currencytwo.attr('data-currency');
                console.log();
                currencytwo.val(json.rates[currencytwo.attr('data-currency')] * currencyone.val());
            });
        });

    </script>
</content>