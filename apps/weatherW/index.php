<content style="overflow: unset;">
	<div class="weatherW-body" style="    background: rgba(25, 118, 184, 0.85);
    height: 60px;
    width: 100%;
    color: white;
    display: block;
    text-align: center;
    font-size: 14px;
    padding-top: 5px;
    line-height: 26px;">
        <temperature></temperature>
        <city></city>
	</div>

    <script>
        $.getJSON("/server/api.php?token=" + token + "&path=/AppData/system.json",function(json) {
            if(json.city) {
                $.getJSON("https://api.openweathermap.org/data/2.5/weather?q=" + json.city + "&appid=eacb87128a7bf4aa29e44422e440a553",function(wth) {
                    $(".weatherW-body temperature").text(wth.main.temp + "ºC");$(".weatherW-body city").text(wth.name);
                });
            } else {

            }
        });

    </script>
</content>