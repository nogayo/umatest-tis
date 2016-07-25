<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<script>
function myfuncion(){
	return confirm("Confirm delete?");
}
</script>

<script>
//VALIDACION CHECKBOX
function validacion(formu, obj, n) {
  limite=n; //limite de checks a seleccionar
  num=0;
  if (obj.checked) {
    for (i=0; ele=document.getElementById(formu).children[i]; i++)
      if (ele.checked) num++;
  if (num>limite)
    obj.checked=false;
  }
}  
</script>
<!--Comienza codigo javaScript del Cronometro del examen-->
<script>

    function cronos(min) {
    var countdownHours = 0;
    var countdownMinutes = min;
    var countdownSeconds = 0;

    countdowntimer.set(countdownHours, countdownMinutes, countdownSeconds);
  };
  </script>
  <script type="text/javascript">
    var countdowntimer = {
  seconds: 0,
  active: false,
  start: function() {
    if(!this.active) {
      countdownInterval = setInterval(this.update, 1000);
      this.active = true;
    }
  },
  update: function() {
    if(countdowntimer.seconds != 0) {
      countdowntimer.seconds--;
      var date = new Date(countdowntimer.seconds * 1000);
      if (date.getMinutes()<10) {
        if (date.getSeconds()<10) {
          document.getElementById("txtcountdown").innerHTML = "0"+date.getMinutes() + ":" +"0"+date.getSeconds();
        }else{
          document.getElementById("txtcountdown").innerHTML = "0"+date.getMinutes() + ":" + date.getSeconds();
        }     
      }else{
        if (date.getSeconds()<10) {
          document.getElementById("txtcountdown").innerHTML = date.getMinutes() + ":" + "0"+date.getSeconds();
        }else{
          document.getElementById("txtcountdown").innerHTML = date.getMinutes() + ":" + date.getSeconds();

        }
      }
      if (date.getMinutes()==0 && date.getSeconds()==0) {
        var capa = document.getElementById('noTermino');
        capa.onclick=alert("Tiempo Terminado");
        capa.click();
    }
    }

  },
  set: function(hours, minutes, seconds) {

    var hours = parseInt(hours);
    var minutes = parseInt(minutes);
    var seconds = parseInt(seconds);

    if(isNaN(hours)) {
      hours = 0;
    }
    if(isNaN(minutes)) {
      minutes = 0;
    }
    if(isNaN(seconds)) {
      seconds = 0;
    }
    countdowntimer.seconds = (hours * 3600) + (minutes * 60) + seconds;

    if(countdowntimer.seconds > 0) {
      this.start();
    }else{
      alert("El tiempo no puede ser negativo o 0");
    }
  }
};
  </script>
  <!--termina Codigo javaScript del cronometro del examen -->
  <script type="text/javascript">
  	function nobackbutton(){
   window.location.hash="no-back-button";
   window.location.hash="Again-No-back-button" //chrome
   window.onhashchange=function(){window.location.hash="no-back-button";}
	}
  </script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->