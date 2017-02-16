<div class="modal fade" id="modal-news-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title text-uppercase" id="qw"><?php echo $row['title']; ?></h3>
			</div>
			<div class="modal-body">
				<p class="date">Дата: <?php echo $row['date']; ?>.</p>
					<p><?php echo $row['text']; ?></p>
			</div>
			<div class="modal-footer">
				<div class="row">
					<button type="submit" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" >Закрити</button>
				</div>
			</div>
		</div>
	</div>
</div>