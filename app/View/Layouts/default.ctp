<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		DW ESCOLAR
	</title>
	<link rel="icon" href="<?php echo $this->webroot ?>img/favicon.jpg" type="image/jpg" sizes="192x192">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

	<style type="text/css">
		body{
			font-family: 'Roboto', sans-serif;
		}
		#myBtn {
		  display: none;
		  position: fixed;
		  bottom: 20px;
		  right: 30px;
		  z-index: 99;
		  font-size: 18px;
		  border: none;
		  outline: none;
		  color: white;
		  cursor: pointer;
		  padding: 5px;
		  border-radius: 4px;
		}

		#myBtn:hover {
		  background-color: #555;
		}
	</style>

</head>
<body>
	<div id="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">
		    <img src="<?php echo $this->webroot ?>img/logo-transparente.png" style="width: 60%;" alt="">
		  </a>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav ml-auto">
		      	<a class="nav-link" href="#etnia">Etnia <span class="sr-only">(current)</span></a>
		      	<a class="nav-link" href="#rede">Rede de escolas</a>
		      	<a class="nav-link" href="#genero">Gênero</a>
		      	<a class="nav-link" href="#renda">Renda familiar</a>
		      	<a class="nav-link" href="#matricula">Situação de matrícula</a>
		      	<a class="nav-link" href="#naturalidade">Naturalidade</a>
		      	<a class="nav-link" href="#faixa">Faixa etária</a>
		    </div>
		  </div>
		</nav>
			
		<br>

		<div id="content">

			<button onclick="topFunction()" id="myBtn" title="Go to top" class="btn btn-sm btn-dark">
				<i class="fa fa-arrow-up" aria-hidden="true"></i>
			</button>

			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>

		</div>

	</div>

	<script>
	//Get the button
	var mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	    mybutton.style.display = "block";
	  } else {
	    mybutton.style.display = "none";
	  }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}
	</script>

</body>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</html>	
