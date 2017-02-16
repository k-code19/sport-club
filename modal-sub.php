<script src="js/modernizr.custom.52481.js"></script>
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<link href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" rel="stylesheet" />

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title text-uppercase" id="myModalLabel">Оберіть абонемент</h3>
			</div>
			<form action="index.php" method="post" name="form2">
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Прізвище, ім'я, по батькові</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Як Вас звати?" required>
					</div>
					
					<div class="form-group">
						<label for="dob">Дата народження</label>
						<input type="date" class="form-control" id="dob" name="dob" placeholder="Коли Ви народились?" required>
					</div>
					
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Ваш e-mail" required>
					</div>
					<div class="form-group">
						<label for="type">Вид абонементу</label>
						<select class="form-control" id="type" name="type" required>
						<option value="none" selected disabled>Не обрано</option>
						<option value="gym">Тренажерна зала</option>
						<option value="pool">Басейн</option>
						<option value="gympool">Тренажерна зала + басейн</option>
						</select>
					</div>
					<div class="form-group">
						<label for="periodGym">На який період?</label>
						<select class="form-control" id="period" name="period" required>
							<option  value="none" selected disabled>Не обрано</option>
							<option value="m1">1 місяць</option>
							<option value="m3">3 місяці</option>
							<option value="m6">6 місяців</option>
						</select>
					</div>
					
					
					<div class="checkbox" id="trainer">
						<label>
							<input type="checkbox" name="trainer">
							Я бажаю займатися з тренером
						</label>
					</div>
					<div class="form-group" id="divPeriodTrainer">
						<label for="periodTrainer">На який період Вам потрібен тренер?</label>
						<select class="form-control" id="periodTrainer" name="periodTrainer">
							<option  value="none" selected  disabled>Не обрано</option>
							<option value="m1">1 місяць</option>
							<option value="m3">3 місяці</option>
							<option value="m6">6 місяців</option>
						</select>
					</div>
					
					<div class="checkbox" id="instructor">
						<label>
							<input type="checkbox" name="instructor">
							Я бажаю займатися плаванням з інструктором
						</label>
					</div>
					<div class="form-group" id="divPeriodInstructor">
						<label for="periodInstructor">На який період Вам потрібен інструктор?</label>
						<select class="form-control" id="periodInstructor" name="periodInstructor">
							<option  value="none" selected  disabled>Не обрано</option>
							<option value="m1">1 місяць</option>
							<option value="m3">3 місяці</option>
							<option value="m6">6 місяців</option>
						</select>
					</div>
					
					<div class="row costall">
						<p id="cost"></p>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-md-6">
							<button type="submit" class="btn btn-primary btn-lg btn-block" name="abonement">ОК</button>
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

<script src="js/modal-sub.js"></script>
<script>
	if (!Modernizr.inputtypes.date) {
		$("#dob").datepicker();
	}
</script>