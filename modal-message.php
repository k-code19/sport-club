<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title text-uppercase" id="myModalLabel">Ваше повідомлення</h3>
			</div>
			<form action="index.php" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Ім'я</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Як Вас звати?">
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Ваш e-mail" required>
					</div>
					<div class="form-group">
						<label for="message">Текст повідомлення</label>
						<textarea rows="5" class="form-control" id="message" name="message" placeholder="Що Вас цікавить?" required></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-md-6">
							<button type="submit" class="btn btn-primary btn-lg btn-block" name="message">Надіслати</button>
						</div>
						<div class="col-md-6">
							<button type="reset" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Скасувати</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>