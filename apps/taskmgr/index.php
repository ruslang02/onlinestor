<content class="taskmgr-body">
		<select id="tasks"></select>
	<div class="taskmgr-actions"><button disabled class="abtn pull-right" translate>Kill</button></div>
	<style>
		.taskmgr-body {
			background:white;
			overflow:hidden;
		}
		.taskmgr-actions {
			height: 35px; background: lightgray; padding: 8px;
		}
		#tasks {
			border:none;
			width: calc(100% + 17px);
			height:calc(100% - 35px);

		}
		.selectedTask {
			border: 1px solid white !important;
			outline: 1px solid dodgerblue !important;
			margin: 2px !important;
		}
		.taskmgr-body option {
			padding: 10px;
			margin: 3px;
			border: 1px solid transparent;
			outline: 1px solid transparent;
		}
	</style>
	<script>
	$(".window").each(function() {
		$("#tasks").append("<option value='" + $(this).attr("id") + "'>" + $(this).children(".up").text().trim() + "</option>");
	});
		$("select").on({
			change: function() {
				$("option").removeClass("selectedTask")
				$("option[value=" + $("#tasks").val() + "]").addClass("selectedTask")
				$(".taskmgr-body .abtn").prop("disabled",false);
			}
		});
		$(".taskmgr-body .abtn").on({
			click: function() {
				closeWindow($("#tasks").val());
				$("option[value=" + $("#tasks").val() + "]").remove();
				$(".taskmgr-body .abtn").addProp("disabled");
			}
		});
		$("option:first-child").addClass("selectedTask");
		$("select").attr("size",$(".window").length + 1);
	</script>
</content>