<?php
$tituloPagina = 'Home';
$bodyID = 'home';
include 'partes/head.php';
?>
<div class="row-flex hero">
	<div class="s12 m12 l12 xl12 row-flex xcenter-ycenter direction-column">
		<h1 class="hero-title">
			Um simples framework para grids com flexbox
		</h1>
		<!-- Dropdown Trigger -->
		<a class='dropdown-button btn white-text waves-effect waves-light raibow' href='#' data-activates='dropdown1'>Download</a>

		<!-- Dropdown Structure -->
		<ul id='dropdown1' class='dropdown-content'>
			<li><a class="black-text" href="flexgrid.min.css" download>Minified</a></li>
			<li><a class="black-text" href="flexgrid.css" download>Not minified</a></li>
		</ul>

	</div>
</div>
<div class="code-container row-flex xcenter-ycenter">
	<code class="code-example">
		<span class="gray">//HTML</span><br>
		<span class="white-text">&#60;</span>div
		<span class="green-text">class</span><span class="white-text">=</span><span class="yellow-text">"row-flex"</span><span class="white-text">&#62;</span> <br>
		&nbsp;&nbsp;&nbsp;
		<span class="white-text">&#60;</span>div
		<span class="green-text">class</span><span class="white-text">=</span><span class="yellow-text">"s6 m6 l6 xl6"</span><span class="white-text">&#62;</span><span class="white-text"> col 1 </span><span class="white-text">&#60;</span>div<span class="white-text">&#62;</span> <br>
		&nbsp;&nbsp;&nbsp;
		<span class="white-text">&#60;</span>div
		<span class="green-text">class</span><span class="white-text">=</span><span class="yellow-text">"s6 m6 l6 xl6"</span><span class="white-text">&#62;</span><span class="white-text"> col 1 </span><span class="white-text">&#60;</span>div<span class="white-text">&#62;</span><br>
		<span class="white-text">&#60;</span>div<span class="white-text">&#62;</span> <br><br>
		<span class="gray">//STYLE</span><br>
		<span class="green-text">.s6, m6, l6, xl6</span><span class="white-text"> {</span><br>
		&nbsp;&nbsp;&nbsp;
		<span class="lightblue-text">flex-basis<span class="white-text">: </span><span class="purple-text">50</span><span class="red-text">%</span><span class="white-text">;</span></span><br>
		<span class="white-text"> }</span>
	</code>
</div>
<div class="features row-flex align-between">
	<div class="s12 m3 l3 xl3 item">
		<h2>
			Simples e leve
		</h2>
		O princípio do gridflex é a simplicidade e a leveza. Contém apenas estilos básicos capazes de criar qualquer tipo de site responsivo usando flexbox.
	</div>
	<div class="s12 m3 l3 xl3 item">
		<h2>
			Poderoso e rápido
		</h2>
		Já baixou bootstrap e acabou usando somente o sistema de grid? o Gridflex tem a proposta de auxiliar somente na dolorosa tarefa de tornar sites responsivos, nada mais que isso.
	</div>
	<div class="s12 m3 l3 xl3 item">
		<h2>
			Moderno e compatível
		</h2>
		Veja a compatibilidade do flexbox nos navegadores <a target="_blank" href="https://caniuse.com/#feat=flexbox">aqui</a>
	</div>
</div>

<div class="breakpoints">
	<h1>Breakpoints</h1>
	<div class="titlebrea row-flex xcenter-ycenter">

		<div class="item s12 m3 l5 xl3">
			<div class="title">
				<h2>s <span class="opac">small</span></h2>
			</div>
			<div class="break">
				@media screen and (max-width: 600px)
			</div>
		</div>
		<div class="item s12 m3 l5 xl3">
			<div class="title">
				<h2>m <span class="opac">medium</span></h2>
			</div>
			<div class="break">
				@media screen and (min-width: 601px)
			</div>
		</div>
		<div class="item s12 m3 l5 xl3">
			<div class="title">
				<h2>l <span class="opac">large</span></h2>
			</div>
			<div class="break">
				@media screen and (min-width: 992px)
			</div>
		</div>
		<div class="item s12 m3 l5 xl3">
			<div class="title">
				<h2>xl <span class="opac">extra large</span></h2>
			</div>
			<div class="break">
				@media screen and (min-width: 1600px)
			</div>
		</div>
	</div>
</div>
<script>

	$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
  }
  );

</script>
<?php 
include 'partes/footer.php';
?>

<?php
include 'partes/endFooter.php';
?> 