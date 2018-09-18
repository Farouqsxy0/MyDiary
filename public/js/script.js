// $(document).ready(function(){
//       document.getElementById("showdate").innerHTML=Date();
// });

// var currentDate = new Date();
// var month = currentDate.getMonth();
// var day = currentDate.getDate();
// var year = currentDate.getFullYear();
// var fulldate = month + ":" + day + ":" + year;
// document.write(Date);

// $(document).ready(function(){
//       var dt = new Date();
//       document.getElementById("time").innerHTML = dt.toLocaleTimeString();
// });


$(document).ready(function(){
      setInterval (displayclock, 500)
      function displayclock(){
            var time = new Date();
            var hrs = time.getHours();
            var min = time.getMinutes();
            var sec = time.getSeconds();
            var en = 'am';

            if (hrs > 12){
                  en = 'pm';
            };
            if (hrs >12){
                  hrs = hrs - 12;
            };
            if (hrs == 0){
                  hrs = 12;
            };
            if (hrs < 10){
                  hrs = '0'+ hrs;
            };
            if (min < 10){
                  min = '0'+ min;
            };
            if (sec < 10){
                 sec = '0'+ sec;
            };
            document.getElementById("clock").innerHTML= hrs + ':' + min + ':' + sec;
      }
});