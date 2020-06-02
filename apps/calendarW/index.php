<content style="overflow: unset;">
	<div class="calendarW-body" style="background: #BC4200;height: 135px;color: white;text-align: center;font-size: 14px;padding-top: 5px;">
		<div class="calendarW-dayN"></div>
		<div class="calendarW-day" style="font-size: 58pt;line-height: 58pt;"></div>
		<div class="calendarW-monthyear" style="padding-top: 5px;"></div>
	</div>
	<script>
		$(".calendarW-day").text(new Date().getDate());
		var dayN = new Date().getDay();
		if(dayN == 0) dayN = "воскресенье";
		if(dayN == 1) dayN = "понедельник";
		if(dayN == 2) dayN = "вторник";
		if(dayN == 3) dayN = "среда";
		if(dayN == 4) dayN = "четверг";
		if(dayN == 5) dayN = "пятница";
		if(dayN == 6) dayN = "суббота";
		$(".calendarW-dayN").text(dayN);
		var dayM = new Date().getMonth();
		if(dayM == 0) dayM = "Январь";
		if(dayM == 1) dayM = "Февраль";
		if(dayM == 2) dayM = "Март";
		if(dayM == 3) dayM = "Апрель";
		if(dayM == 4) dayM = "Май";
		if(dayM == 5) dayM = "Июнь";
		if(dayM == 6) dayM = "Июль";
		if(dayM == 7) dayM = "Август";
		if(dayM == 8) dayM = "Сентябрь";
		if(dayM == 9) dayM = "Октябрь";
		if(dayM == 10) dayM = "Ноябрь";
		if(dayM == 11) dayM = "Декабрь";
		$(".calendarW-monthyear").text(dayM + " " + new Date().getFullYear());
	</script>
</content>