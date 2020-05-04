
<html>

	<head>

		<title>Memory</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<style>
			.nero{
			background-color: black;
			}

			.panel {
				float: left;
				background-color: grey;
				width: 20%;
				height: 100px;
				margin: 1em;
				cursor:grab;
			}

			#bottone {
				clear: left;
				width: 3em;
				margin: 1em;
				padding: 1em;
				background-color: darkgrey;
				cursor: pointer;
			}

		</style>
	</head>

	<body class="nero">
		<div id="contatore">0</div>
		<div class="panel" name="0" id="t1"></div>
		<div class="panel" name="1" id="t2"></div>
		<div class="panel" name="2" id="t3"></div>
		<div class="panel" name="3" id="t4"></div>
		<div class="panel" name="4" id="t5"></div>
		<div class="panel" name="5" id="t6"></div>
		<div class="panel" name="6" id="t7"></div>
		<div class="panel" name="7" id="t8"></div>
		<div class="panel" name="8" id="t9"></div>
		<div class="panel" name="9" id="t10"></div>
		<div class="panel" name="10" id="t11"></div>
		<div class="panel" name="11" id="t12"></div>
		<br><br>

		<div id="bottone" onclick="Reset();">Resetta</div>

	</body>

	<script>

		var blockArr = "";
		var openCards = "";
		var contaclick = 0;
		var blockArr = [];

		function Rand(MaxValue, MinValue){return Math.round(Math.random() * (MaxValue - MinValue) + MinValue);}
		function Random(){
			var colorArr = ['red','red','green','green','blue','blue','yellow','yellow','cyan','cyan','purple','purple'];
			for (var i=0; i<12; i++){
				var RandomNumber = Rand(0, colorArr.length - 1);
				var add = i+1;
				blockArr[i] = colorArr[RandomNumber];
				colorArr.splice(RandomNumber, 1);
			}
		}

		function Reset(){
			Random();
			openCards [2];
			$(".panel").css("background-color","grey");
			contaclick = 0;
			return false;
		}

		$(document).ready( function () {
		
			function aggiornaDim() {
				var w = $(".panel").width();
				$(".panel").css("height",w);
			}

			aggiornaDim();
			
			$(window).resize(function () {
				aggiornaDim();
			});
			$(function() {
				$(".panel").on("click", explore());
				Random();
			});
		});
			
			
		//funzione che controlla se abbiamo selezionato un div, 
		//selezionandolo cambierà da grigio al colore del memory
		function explore(){
			$(".panel").on("click", function () {
				var name = $(this).attr("name");
				$(this).css("background-color",blockArr[name]);
			});
			$("#contatore").html(contaclick + "clicks");
		}
		
		//calcola se la prima explore() ha dato lo stesso risultato della seconda
		//se risulta corretto lascierà scoperte le due carte
		//altrimenti verranno nascoste nuovamente
		function check(){

		}

  	</script>

</html>
