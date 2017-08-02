<link href="css/the-big-picture.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<div class="container">
	<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch modal 1</a>
</div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Modal header</h3>
	</div>
	<div class="modal-body">
		<p>One modal body…</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		<a href="#myModal2" role="button" class="btn" data-toggle="modal">Launch other modal</a>
	</div>
</div>
<div id="myModal2" class="modal hide fade" data-backdrop-limit="1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Modal 2 header</h3>
	</div>
	<div class="modal-body">
		<p>Two modal body…</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>
<script src="js/modal.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-2.2.3.min.js"></script>