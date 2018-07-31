<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>

<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Igor dos Santos - Front End Developer">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <title>MV - Ataíde Teruel</title>
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
  </head>
  <body>

    <header>
      <div class="container">
        <div class="row">
        	<div class="col-md-8">
						<img src="images/logo-header.png" alt="" class="logo-header">
						<img src="images/foto-header.png" alt="" class="img-fluid">
	      	</div>
        	<div class="col-md-4">
						<form class="form-inline">
							<div class="text-center">
								<span class="text-uppercase">Junte-se à minha campanha</span><br>
								<span>Para informações e atualizações</span>
							</div>
	            <input type="text" class="form-control mb-2" id="nome" placeholder="Seu Nome">
	            <input type="text" class="form-control mb-2" id="email" placeholder="Seu Email">
	            <input type="text" class="form-control mb-2 mr-sm-2" id="nascimento" placeholder="Seu Nascimento">
	            <input type="text" class="form-control mb-2" id="celular" placeholder="Celular">
	            <input type="text" class="form-control mb-2" id="cidade" placeholder="Cidade">
	            <button type="submit" class="btn p-2"><b>JUNTE-SE A MIM</b></button>
	          </form>
	      	</div>
	      </div>
      </div>
    </header>

    <nav class="mn-desktop">
    	<div class="container clearfix">
				<img src="images/logo-menu.png" alt="" class="logo float-left">
				<ul class="float-left">
					<li>VÍDEO</li>
					<li>POR QUE ATAIDE?</li>
					<li>CONTATO</li>
					<li class="ajude">AJUDE-NOS</li>	
				</ul>
				<div class="social-icons float-right">
          <a href="https://www.facebook.com/" target="_blank" title="Facebook">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 249.6 244.3" style="enable-background:new 0 0 249.6 244.3; height: 40px;" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;fill: #3C2D82;}.st1{fill: #3C2D82;}</style><g><path class="st0" d="M133.5,177.5V124h17.3l2.6-20.8h-19.8V89.9c0-6,1.6-10.1,9.9-10.1l10.6,0V61.2c-1.8-0.3-8.1-0.8-15.5-0.8c-15.3,0-25.8,9.7-25.8,27.5v15.4H95.5V124h17.3v53.4H133.5z"></path><path class="st1" d="M124.8,238.9c-64.4,0-116.7-52.4-116.7-116.7C8.1,57.8,60.4,5.4,124.8,5.4c64.4,0,116.7,52.4,116.7,116.7C241.5,186.5,189.1,238.9,124.8,238.9z M124.8,24.2c-54,0-98,44-98,98c0,54,44,98,98,98c54,0,98-44,98-98C222.8,68.1,178.8,24.2,124.8,24.2z"></path></g></svg>
          </a>
          <a href="https://twitter.com/" target="_blank" title="Twitter">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 249.6 244.3" style="enable-background:new 0 0 249.6 244.3; height: 40px;" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;fill: #3C2D82;}</style><g><path class="st0" d="M183.4,75.2c-1.8,5.8-5.6,10.6-10.6,13.6c4.9-0.6,9.5-1.9,13.8-3.9c-3.2,4.9-7.3,9.3-12,12.8c0,1,0.1,2.1,0.1,3.2c0,32.6-24.2,70.1-68.4,70.1c-13.6,0-26.2-4.1-36.8-11.1c1.9,0.2,3.8,0.3,5.7,0.3c11.3,0,21.6-3.9,29.8-10.6c-10.5-0.2-19.4-7.3-22.4-17.1c1.5,0.3,3,0.4,4.5,0.4c2.2,0,4.3-0.3,6.3-0.9c-11-2.3-19.3-12.2-19.3-24.2v-0.3c3.2,1.8,7,3,10.9,3.1c-6.4-4.4-10.7-12-10.7-20.5c0-4.5,1.2-8.7,3.3-12.4c11.9,14.9,29.6,24.7,49.5,25.8c-0.4-1.8-0.6-3.7-0.6-5.6c0-13.6,10.8-24.6,24-24.6c6.9,0,13.2,3,17.5,7.8C173.6,80,178.7,78,183.4,75.2 M241.5,122.2c0-64.4-52.4-116.7-116.7-116.7S8.1,57.8,8.1,122.2s52.4,116.7,116.7,116.7S241.5,186.5,241.5,122.2z M222.8,122.2c0,54-44,98-98,98s-98-44-98-98c0-54,44-98,98-98S222.8,68.1,222.8,122.2z"></path></g></svg>
          </a>
          <a href="https://www.instagram.com/" target="_blank" title="Instagram">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 249.6 244.3" style="enable-background:new 0 0 249.6 244.3; height: 40px;" xml:space="preserve"><style type="text/css">.st0{fill: #3C2D82;}</style><g><path class="st0" d="M124.8,238.9c-64.4,0-116.7-52.4-116.7-116.7C8.1,57.8,60.4,5.4,124.8,5.4s116.7,52.4,116.7,116.7C241.5,186.5,189.1,238.9,124.8,238.9z M124.8,24.2c-54,0-98,44-98,98s44,98,98,98s98-44,98-98C222.8,68.1,178.8,24.2,124.8,24.2z"></path></g><path id="Instagram" class="st0" d="M163.2,71.8H86.4c-6.6,0-12,5.3-12,11.9v76.9c0,6.6,5.4,11.9,12,11.9h76.8c6.6,0,12-5.3,12-11.9V83.7C175.2,77.1,169.8,71.8,163.2,71.8z M146.8,87.5c0-1.7,1.4-3.1,3.1-3.1h9.4c1.7,0,3.1,1.4,3.1,3.1V97c0,1.7-1.4,3.1-3.1,3.1H150c-1.7,0-3.1-1.4-3.1-3.1V87.5z M124.9,102.9c10.7,0,19.4,8.7,19.4,19.3c0,10.7-8.7,19.3-19.4,19.3c-10.7,0-19.4-8.7-19.4-19.3C105.5,111.6,114.2,102.9,124.9,102.9z M165.7,159.9c0,1.7-1.4,3.1-3.1,3.1H87c-1.7,0-3.1-1.4-3.1-3.1v-47.2h12.6c-1.6,2.4-2.2,6.8-2.2,9.6c0,16.9,13.8,30.6,30.6,30.6c16.9,0,30.7-13.7,30.7-30.6c0-2.8-0.4-7.1-2.4-9.6h12.6V159.9z"></path></svg>
          </a>
        </div>
      </div>
		</nav>

  	<div class="container">
    	<div class="video-container">
    		<iframe src="https://www.youtube.com/embed/thV2k1Ws3x0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    	</div>
  	</div>

    <section>
    	<div class="container">
    		<h1><small>É hora de uma revolução política:</small><br> 07 de Outubro vote 19001 para Deputado Estadual.</h1>
    		<p>
    			Ataide Teruel está concorrendo ao Congresso para lutar por uma sociedade mais justa e que funcione para todos - não apenas para os mais ricos.
    		</p>
    		<p>
    			Ataide19001 é uma campanha que une os paulistas para lutar pelas necessidades das famílias mais simples e carente de serviços públicos mais eficientes e eficazes. Juntos, lutaremos por um atendimento médico decente para todos, educação universitária gratuita, segurança e empregos de qualidade e justiça para todos.
    		</p>
    		<p>
    			Em seu coração você sabe que ele é  o candidato certo. Muitas são as pessoas que apenas se revoltam com a situação atual e acham que não votar ou apenas reclamar irá mudar alguma coisa. Por não aceitar essa posição e por acreditar que é possível mudança é que precisamos da sua ajuda.
    		</p>
    	</div>
		</section>

		<section class="mudanca">
    	<div class="container">
    		<img src="images/foto-esperanca.png" alt="" class="foto-esperanca">
    		<div class="row">
    			<div class="col-md-6"></div>
    			<div class="col-md-6">
	    			<h1>Nós não precisamos apenas de esperança. Precisamos é de MAIS esperança.</h1>
		    		<p>
		    			Temos que acreditar que é possivel sim contruirmos uma sociedade mais justa e humana. Com  Fábio Teruel no rádio e o Ataide no congresso, poderemos ajudar mais fazer muito mais!  É hora de uma sociedade que funcione para todos . 
		    		</p>
		    		<p>
		    			<b>No dia 7 de outubro podemos fazer isso acontecer. Não apenas queira a mudança, ajude a promover essa mudança #VouFazerMinhaParte</b>
		    		</p>
		    		<p>
		    			Para melhorar nossa situação, temos que enfrentar com coragem as pessoas poderosas e corruptas que impedem o desenvolvimento do nosso estado. Não há outro caminho. É por isso que colocamos nossa fé e nossos esforços nas pessoas, famílias e comunidades do distrito. Famílias trabalhadoras não devem lutar para sobreviver, ter medo de sair às ruas e sofrer na hora que precisa de um atendimento médico. Nós pagamos muitos impostos. É hora de uma sociedade que funcione para todos.
		    		</p>
    			</div>
    		</div>
    	</div>
		</section>

		<section>
    	<div class="container">
    		<h1>Por que devo apoiar o Ataide?</h1>
    		<p>
    			São Paulo merece um líder que nos devolva a confiança na classe política. Alguém que trabalhe de verdade pelas pessoas que nele votarem.
    		</p>
    		<p>
    			Ataide Teruel é um homem da comunicação, que sabe da importância de usar a sua voz para defender os direitos da classe tão sofrida, humilhada  e cansada de políticos bandidos, sujos e corruptos.
    		</p>
    	</div>
		</section>














    <div class="frase d-flex align-items-center" id="frase">
      <div class="container">
        <h1 class="text-uppercase text-white">
        	
        </h1>
      </div>
    </div>

    <div class="causa">
    	<div class="container">
        <div class="row">
        	<div class="col-md-10 col-sm-12 offset-md-1">
		        <h3 class="text-center"><span class="tt bg-warning p-2">MINHA CAUSA É POR AMOR AO BRASIL</span></h3>
		        <ol>
		        	<li><b class="text-uppercase">Lorem ipsum dolor sit amet:</b> consectetur adipisicing elit. Saepe ipsa qui error quos id quod architecto perferendis libero voluptate ipsam quisquam, in dolores velit natus ullam, cumque, repudiandae blanditiis deserunt.</li>
		        	<li><b class="text-uppercase">Lorem ipsum dolor sit amet:</b> consectetur adipisicing elit. Saepe ipsa qui error quos id quod architecto perferendis libero voluptate ipsam quisquam, in dolores velit natus ullam, cumque, repudiandae blanditiis deserunt.</li>
		        	<li><b class="text-uppercase">Lorem ipsum dolor sit amet:</b> consectetur adipisicing elit. Saepe ipsa qui error quos id quod architecto perferendis libero voluptate ipsam quisquam, in dolores velit natus ullam, cumque, repudiandae blanditiis deserunt.</li>
		        	<li><b class="text-uppercase">Lorem ipsum dolor sit amet:</b> consectetur adipisicing elit. Saepe ipsa qui error quos id quod architecto perferendis libero voluptate ipsam quisquam, in dolores velit natus ullam, cumque, repudiandae blanditiis deserunt.</li>
		        	<li><b class="text-uppercase">Lorem ipsum dolor sit amet:</b> consectetur adipisicing elit. Saepe ipsa qui error quos id quod architecto perferendis libero voluptate ipsam quisquam, in dolores velit natus ullam, cumque, repudiandae blanditiis deserunt.</li>
		        </ol>
		      </div>
		    </div>
      </div>
    </div>
    
    <div class="frase-2-wp">
	    <div class="frase-2">
	      <div class="container text-center">
	        <h2 class="text-uppercase text-danger">
						ACEITE SEU PASSADO SEM ARREPENDIMENTOS, LIDE COM SEU PRESENTE COM CONFIANÇA E ENFRENTE SEU FUTURO SEM MEDO.
	        </h2>
	      </div>
	    </div>
    </div>

   <div class="ajude text-center">
    	<div class="container">
        <div class="row">
        	<div class="col-md-10 col-sm-12 offset-md-1">
	    			<h3>AJUDE A COMPARTILHAR A VERDADE</h3>
		        <div class="row">
		        	<div class="col-md-4">
		        		<span class="img-bg bg-info" style="padding-top:35px;"><img src="images/icon-facebook.png" alt=""></span>
		        		<p><h5>ACOMPANHA<br>FACEBOOK</h5></p>
		        	</div>
		        	<div class="col-md-4">
		        		<span class="img-bg bg-warning"><img src="images/icon-monitor.png" alt=""></span>
		        		<p><h5>REPOSITÓRIO<br>DIGITAL</h5></p>
		        	</div>
		        	<div class="col-md-4">
		        		<span class="img-bg bg-dark"><img src="images/icon-question.png" alt=""></span>
		        		<p><h5>COMO AJUDAR</h5></p>
		        	</div>
		        </div>
					</div>
				</div>
      </div>
    </div>
		
		<footer class="d-flex align-items-center bg-dark text-white">
      <div class="container text-center">
        <div class="row">
        	<div class="col-md-10 col-sm-12 offset-md-1">
		      	<h4 class="text-uppercase">Convide 10 amigos para apoiar</h4>
		      	<a href="#" class="btn btn-success mt-5">CONVIDAR</a>
		      	<hr class="mt-5">
		      	<p class="text-secondary mt-5">© ataideteruel.com.br | PORQUE SEU DIA MERECE SER FELIZ.</p>
		      </div>
	      </div>
      </div>
		</footer>





    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>