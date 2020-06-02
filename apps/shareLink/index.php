<content>
	<div class="link-body">
		<button class="abtn pull-left" id="link_choose">Выбрать файл...</button>
		<button class="abtn" id="generate_link"><img style="vertical-align: top;" src="/icons/small/link.png"> Предоставить ссылку</button><br>
		<input type="text" placeholder="Здесь будет ваша укороченная ссылка" id="fileShort" style="width: 100%;outline: 1px solid grey;background: white;padding: 3px;margin: 5px 0px;border: 0px none;">
		<input type="hidden" id="linkFile">
	</div>
</content>
<style>
	.link-body .header {
		color: darkblue;
		font-size: 14pt;
		padding: 5px;
	}
	.link-body .abtn {
		padding: 2px;
		margin-left: 5px;
	}
	.link-body {
		background: lightgray;
		text-align:right;
		height: 100%;
		padding: 10px;
	}

</style>
<script>
$("#link_choose").click(function() {
	openFileDialog("#linkFile");
});
	$("#linkFile").change(change());
	function change() {

	}
	$("#generate_link").click(function() {
		var safeFileName = $("#linkFile").val().substring($("#linkFile").val().indexOf(sID) - 1);
		$.post("//onlinestorage.tk/sharing/share.php",{sID: sID,file: safeFileName},function(a,b,c) {
			$("#fileShort").val(c.responseText)
		})
	});

</script>