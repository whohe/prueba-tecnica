<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</head>
	<body>
<div style="margin-left: 20%" class="col-md-6">
		<form method=POST action="grid"  class="row g-3 needs-validation" novalidate>
			<div class="col-md-12">
				<label for="validationCustom01" class="form-label">Nombre Completo*</label>
				<input name="name" type="text" class="form-control" id="validationCustom01" value="" required>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
			<div class="col-md-12">
				<label for="validationCustomUsername" class="form-label">Email*</label>
				<div class="input-group has-validation">
					<span class="input-group-text" id="inputGroupPrepend">@</span>
					<input name="email" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
					<div class="invalid-feedback">
						Please choose a username.
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<label for="validationCustom02" class="form-label">Sexo*</label>
				<div class="form-check">
					<input type="radio" value="M" class="form-check-input" id="validationFormCheck2" name="sexo" required>
					<label class="form-check-label" for="validationFormCheck2">Masculino</label>
				</div>
				<div class="form-check mb-3">
					<input type="radio" value="F" class="form-check-input" id="validationFormCheck2" name="sexo" required>
					<label class="form-check-label" for="validationFormCheck2">Femenino</label>
					<div class="invalid-feedback">More example invalid feedback text</div>
				</div>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
			<div class="col-md-12">
				<label for="validationCustom04" class="form-label">Area</label>
				<select name="area" class="form-select" id="validationCustom04" required>
					<option selected disabled value="">Seleccione...</option>
					<option>Administracion</option>
					<option>Contable</option>
				</select>
				<div class="invalid-feedback">
					Please select a valid state.
				</div>
			</div>
			<div class="col-md-12">
				<label for="validationTextarea" class="form-label">Descripcion</label>
				<textarea name="description" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
				<div class="invalid-feedback">
					Please enter a message in the textarea.
				</div>
			</div>
			<div class="col-12">
				<div class="form-check">
					<input name="newsletter" class="form-check-input" type="checkbox" value="" id="invalidCheck1">
					<label class="form-check-label" for="invalidCheck1">
						Deseo recibir boletin informativo
					</label>
					<div class="invalid-feedback">
						You must agree before submitting.
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="form-check">
					<input name="Dev" class="form-check-input" type="checkbox" value="" id="invalidCheck2">
					<label class="form-check-label" for="invalidCheck2">
						Profesional de proyectos - Desarrollador
					</label>
					<div class="invalid-feedback">
						You must agree before submitting.
					</div>
				</div>
				<div class="form-check">
					<input name="gerente" class="form-check-input" type="checkbox" value="" id="invalidCheck3">
					<label class="form-check-label" for="invalidCheck3">
						Gerente estrategico
					</label>
					<div class="invalid-feedback">
						You must agree before submitting.
					</div>
				</div>
				<div class="form-check">
					<input name="aux" class="form-check-input" type="checkbox" value="" id="invalidCheck3">
					<label class="form-check-label" for="invalidCheck3">
						Auxiliar administrativo
					</label>
					<div class="invalid-feedback">
						You must agree before submitting.
					</div>
				</div>
			</div>
			<div class="col-12">
				<button class="btn btn-primary" type="submit">Submit form</button>
			</div>
		</form>
</div>

	</body>
</html>
<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function () {
			'use strict'

			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.querySelectorAll('.needs-validation')

			// Loop over them and prevent submission
			Array.prototype.slice.call(forms)
				.forEach(function (form) {
						form.addEventListener('submit', function (event) {
								if (!form.checkValidity()) {
										event.preventDefault()
										event.stopPropagation()
									}

								form.classList.add('was-validated')
							}, false)
					})
		})()
</script>

