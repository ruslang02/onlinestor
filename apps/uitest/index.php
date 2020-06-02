<content class="uitest-body">
	<button class="menubutton menubutton-inverse" data-to-menu="fileMenu" onclick="toggleMenu(this,'fileMenu')" translate>
		File
	</button>
	<div class="menu hide" id="fileMenu">
		<vert-bar></vert-bar>
		<button onclick="closeWindow($(this).parents('.window').attr('id'))" disabled translate>
			Disabled
		</button>
		<divider></divider>
		<button onclick="closeWindow($(this).parents('.window').attr('id'))" translate>
			Exit
		</button><over></over>
	</div>
	<button class="menubutton menubutton-inverse" data-to-menu="editMenu" onclick="toggleMenu(this,'editMenu')" translate>
		Help
	</button>
	<div class="menu hide" id="editMenu">
		<vert-bar></vert-bar>
		<button onclick="Window('about')" translate disabled>
			<img src="/icons/small/question.png"> Heelp
		</button>
		<divider></divider>
		<button onclick="Window('about')" translate>
			About
		</button><over></over>
	</div>
	<br>
	<label>Text Input:&nbsp;&nbsp;<input type="text" placeholder="Write Here" class="form-control"></label>
	<br>
	<label>Textarea:<br><textarea style="resize:none" class="form-control"></textarea></label>
	<br>
	<button class="abtn active">Active</button>&nbsp;&nbsp;<button class="abtn">Normal</button>&nbsp;&nbsp;<button disabled class="abtn">Disabled</button>
</content>
<style>
.uitest-body {
	background: white;
	padding:1em;
	line-height:2em;
}
</style>