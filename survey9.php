<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Survei Keterkaian antar Faktor Pengaruh Minat Siswa Melanjutkan Pendidikan</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form class="survey-form" method="post" action="survey10.php">		
			<h1><i class="far fa-list-alt"></i>Survei Keterkaian antar Faktor Pengaruh Minat Siswa Melanjutkan Pendidikan</h1>

			<div class="steps">
				<div class="step current"></div>
			</div>
			<div class="step-content current" data-step="1">
				<div class="fields">
					<p>Berapa besar tingkat keterkaitan faktor "Teman dan Keluarga" dengan "Mentoring"?</p>
					<div class="rating">
						<input type="radio" name="q1" id="radio1" value="1">
						<label for="radio1">1</label>
						<input type="radio" name="q1" id="radio2" value="2">
						<label for="radio2">2</label>
						<input type="radio" name="q1" id="radio3" value="3">
						<label for="radio3">3</label>
						<input type="radio" name="q1" id="radio4" value="4">
						<label for="radio4">4</label>
					</div>
					<div class="rating-footer">
						<span>Very Uncorrelated</span>
						<span>Very Correlated</span>
					</div>				
				</div>
				<div class="buttons">
					<input type="submit" name="submit" class="btn" value="Next">
				</div>
			</div>

		</form>
		<?php
	      if(isset($_POST['submit'])){
	        if(!empty($_POST['q1'])||!empty($_POST['q2'])) {
	        	
	        	$data = "\n".$_POST['q1'].','. $_POST['q2'];
	        	
	        	$myfile = fopen("output.csv", "a") or die("Unable to open file!");
	        	fwrite($myfile, $data);
	        } else {
	          echo 'Please select the value.';
	        }
	      }
	    ?>
	</body>
</html>
<script>
const setStep = step => {
	document.querySelectorAll(".step-content").forEach(element => element.style.display = "none");
	document.querySelector("[data-step='" + step + "']").style.display = "block";
	document.querySelectorAll(".steps .step").forEach((element, index) => {
		index < step-1 ? element.classList.add("complete") : element.classList.remove("complete");
		index == step-1 ? element.classList.add("current") : element.classList.remove("current");
	});
};
document.querySelectorAll("[data-set-step]").forEach(element => {
	element.onclick = event => {
		event.preventDefault();
		setStep(parseInt(element.dataset.setStep));
	};
});

</script>