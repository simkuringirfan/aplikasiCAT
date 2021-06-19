// Set the date we're counting down to
var second = Number($("#waktu_ujian").val() * 60);
var telah_berlalu = Number($("#telah_berlalu").val());

var countDownDate = new Date();
var baru = countDownDate.setSeconds(countDownDate.getSeconds() + (second - telah_berlalu)) ;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = baru - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="waktuUjian"
  document.getElementById("waktuUjian").innerHTML ="<i class='far fa-clock'></i> " +hours + ":"
  + minutes + ":" + seconds ;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);

    window.location = 'http://localhost:8080/Ujian/selesaiUjianExpired/'+document.getElementById("noRegUjian").value+';'+document.getElementById("selesai_ujian").value+';'+document.getElementById("sum_point_soal").value+';'+document.getElementById("id_ujian").value+';'+document.getElementById("soalDijawab").value+';'+document.getElementById("sisaSoal").value;

    document.getElementById("waktuUjian").innerHTML = "EXPIRED";
    
  }
}, 1000);