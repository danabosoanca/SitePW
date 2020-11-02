<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezerva activitate</title>
</head>
<body>
    <nav class="navbar navbar-inverse">
<div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
    <li><a href="client.php"><span class="glyphicon glyphicon-backward"></span> Inapoi la pagina principala</a></li>
    </ul>
</div>
</nav>
<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">Haide sa rezervam</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">1. Ziua activitatii
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								Orar
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">2.Activitatea dorita</h3>
							</div>
							<div class="panel-body">
								Tipul activitatii
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">3. Informatii pasager</h3>
							</div>
							<div class="panel-body">
								Detalii pasageri
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">4. Plata</h3>
							</div>
							<div class="panel-body">
								Total de plata
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-itinerary">
					<div class="form-group">
					<label for="">Ziua activitatii:</label>
					<input type="date" class="btn btn-default" id="dept-date">
					</div>
					<button type="submit" class="btn btn-success">NEXT
					<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
<script type="text/javascript">
	$(document).on('submit', '#form-itinerary', function(event) {
		event.preventDefault();
		/* Act on the event */
		var validate = "";
		
		var dept = $('input[id=dept-date]').val();

		if(dept.length == 0){
			alert('Please Select Departure Date!');
		}else{
			$.ajax({
					url: 'data/session_itinerary.php',
					type: 'post',
					dataType: 'json',
					data: {
						oid : origin,
						did : dest,
						dd : dept
					},
					success: function (data) {
						console.log(data);
						if(data.valid == true){
							window.location = data.url;
							console.log('sss');
						}
					},
					error: function(){
						alert('Error: L161+');
					}
				});
		}//end dept kung == 0


	});

</script>



</body>
</html>
