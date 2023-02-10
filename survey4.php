<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Survey Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form class="survey-form" method="post" action="survey5.php">		
			<h1><i class="far fa-list-alt"></i>Survey Form</h1>

			<div class="steps">
				<div class="step current"></div>
				<div class="step"></div>
				<div class="step"></div>
				<div class="step"></div>
				<div class="step"></div>
				<div class="step"></div>
				<div class="step"></div>
				<div class="step"></div>
				<div class="step"></div>
			</div>
			<div class="step-content current" data-step="1">
				<div class="fields">
					<p>Berapa besar tingkat keterkaitan faktor "Biaya" dengan "Keamanan Kampus"?</p>
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
					<a href="#" class="btn" data-set-step="2">Next</a>
				</div>
			</div>

			<!-- page 2 -->
			<div class="step-content" data-step="2">
				<div class="fields">
					<p>Berapa besar tingkat keterkaitan faktor "Biaya" dengan "Pendidikan dan Fasilitas Kampus"?</p>
					<div class="rating">
						<input type="radio" name="q2" id="radio5" value="1">
						<label for="radio5">1</label>
						<input type="radio" name="q2" id="radio6" value="2">
						<label for="radio6">2</label>
						<input type="radio" name="q2" id="radio7" value="3">
						<label for="radio7">3</label>
						<input type="radio" name="q2" id="radio8" value="4">
						<label for="radio8">4</label>
					</div>
					<div class="rating-footer">
						<span>Very Uncorrelated</span>
						<span>Very Correlated</span>
					</div>				
				</div>
				<div class="buttons">
					<a href="#" class="btn alt" data-set-step="1">Prev</a>
					<a href="#" class="btn" data-set-step="3">Next</a>
				</div>
			</div>

			<!-- page 3 -->
			<div class="step-content" data-step="3">
				<div class="fields">
					<p>Berapa besar tingkat keterkaitan faktor "Biaya" dengan "Kegiatan Klub"?</p>
					<div class="rating">
						<input type="radio" name="q3" id="radio9" value="1">
						<label for="radio9">1</label>
						<input type="radio" name="q3" id="radio10" value="2">
						<label for="radio10">2</label>
						<input type="radio" name="q3" id="radio11" value="3">
						<label for="radio11">3</label>
						<input type="radio" name="q3" id="radio12" value="4">
						<label for="radio12">4</label>
					</div>
					<div class="rating-footer">
						<span>Very Uncorrelated</span>
						<span>Very Correlated</span>
					</div>				
				</div>
				<div class="buttons">
					<a href="#" class="btn alt" data-set-step="2">Prev</a>
					<a href="#" class="btn" data-set-step="4">Next</a>
				</div>
			</div>

			<!-- page 4 -->
			<div class="step-content" data-step="4">
				<div class="fields">
					<p>Berapa besar tingkat keterkaitan faktor "Biaya" dengan "Lokasi Kampus"?</p>					
					<div class="rating">
						<input type="radio" name="q4" id="radio13" value="1">
						<label for="radio13">1</label>
						<input type="radio" name="q4" id="radio14" value="2">
						<label for="radio14">2</label>
						<input type="radio" name="q4" id="radio15" value="3">
						<label for="radio15">3</label>
						<input type="radio" name="q4" id="radio16" value="4">
						<label for="radio16">4</label>
					</div>
					<div class="rating-footer">
						<span>Very Uncorrelated</span>
						<span>Very Correlated</span>
					</div>				
				</div>
				<div class="buttons">
					<a href="#" class="btn alt" data-set-step="3">Prev</a>
					<a href="#" class="btn" data-set-step="5">Next</a>
				</div>
			</div>

			<!-- page 5 -->
			<div class="step-content" data-step="5">
				<div class="fields">
					<p>Berapa besar tingkat keterkaitan faktor "Biaya" dengan "Teman dan Keluarga"?</p>
					<div class="rating">
						<input type="radio" name="q5" id="radio17" value="1">
						<label for="radio17">1</label>
						<input type="radio" name="q5" id="radio18" value="2">
						<label for="radio18">2</label>
						<input type="radio" name="q5" id="radio19" value="3">
						<label for="radio19">3</label>
						<input type="radio" name="q5" id="radio20" value="4">
						<label for="radio20">4</label>
					</div>
					<div class="rating-footer">
						<span>Very Uncorrelated</span>
						<span>Very Correlated</span>
					</div>				
				</div>
				<div class="buttons">
					<a href="#" class="btn alt" data-set-step="4">Prev</a>
					<a href="#" class="btn" data-set-step="6">Next</a>
				</div>
			</div>

			<!-- page 6 -->
			<div class="step-content" data-step="6">
				<div class="fields">
					<p>Berapa besar tingkat keterkaitan faktor "Biaya" dengan "Mentoring"?</p>
					<div class="rating">
						<input type="radio" name="q6" id="radio21" value="1">
						<label for="radio21">1</label>
						<input type="radio" name="q6" id="radio22" value="2">
						<label for="radio22">2</label>
						<input type="radio" name="q6" id="radio23" value="3">
						<label for="radio23">3</label>
						<input type="radio" name="q6" id="radio24" value="4">
						<label for="radio24">4</label>
					</div>
					<div class="rating-footer">
						<span>Very Uncorrelated</span>
						<span>Very Correlated</span>
					</div>				
				</div>
				<div class="buttons">
					<a href="#" class="btn alt" data-set-step="5">Prev</a>
					<a href="#" class="btn" data-set-step="7">Next</a>
				</div>
			</div>

			<!-- page 7 -->
			<div class="step-content" data-step="7">
				<div class="buttons">
					<input type="submit" name="submit" value="Get Result">
				</div>
			</div>
			<!-- <div class="step-content" data-step="9">
				<div class="result"><?=$response?></div>
			</div> -->

		</form>
		<?php
	      if(isset($_POST['submit'])){
	        if(!empty($_POST['q1'])||!empty($_POST['q2'])||!empty($_POST['q3'])||!empty($_POST['q4'])||!empty($_POST['q5'])||!empty($_POST['q6'])) {
	        	
	        	$data = "\n".$_POST['q1'].','. $_POST['q2'].','.$_POST['q3'].','. $_POST['q4'].','. $_POST['q5'].','. $_POST['q6'];
	        	print_r($data);
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