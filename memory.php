
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
            background-color: darkgrey;
            width: 20%;
            height: 100px;
            margin: 1em;
        }

        #bottone {
            clear: left;
            width: 3em;
            margin: 1em;
            padding: 1em;
            background-color: darkgrey;
        }

      </style>
  </head>

  <body class="nero">
    
    <div class="panel" id="t1"></div>
    <div class="panel" id="t2"></div>
    <div class="panel" id="t3"></div>
    <div class="panel" id="t4"></div>
    <div class="panel" id="t5"></div>
    <div class="panel" id="t6"></div>
    <div class="panel" id="t7"></div>
    <div class="panel" id="t8"></div>
    <div class="panel" id="t9"></div>
    <div class="panel" id="t10"></div>
    <div class="panel" id="t11"></div>
    <div class="panel" id="t12"></div>
    <br><br>

    <div id="bottone"  onclick="Random();">Resetta</div>

  </body>

  <script>
    
    function Rand(MaxValue, MinValue) {
		    return Math.round(Math.random() * (MaxValue - MinValue) + MinValue);
	  }
      
    function Random(){
      var colorArr = ['red','red','green','green','blue','blue','yellow','yellow','cyan','cyan','purple','purple'];
      for (var i=0; i<12; i++){
        var RandomNumber = Rand(0, colorArr.length - 1);
        var add = i+1;
        var id = "#t"+ add;
        $(id).css("background-color",colorArr[RandomNumber]);
        colorArr.splice(RandomNumber, 1);
      }
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

      $(".panel").on("click", function () {
        $(this).css("background-color","yellow");
      });

      //funzione che controlla se abbiamo selezionato un div, 
      //selezionandolo cambierà da grigio al colore del memory
      function explore(){

      }
      
      //calcola se la prima explore() ha dato lo stesso risultato della seconda
      //se risulta corretto lascierà scoperte le due carte
      //altrimenti verranno nascoste nuovamente
      function check(){

      }

    });

  </script>

</html>
