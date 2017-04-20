/*
---------------- JS ----------------

    $(document).ready(function() {
      $('#clock').simpleClock();
    });

--------------- HTML ---------------

    <div id="clock">
      <div id="time">
        <span class="hour"></span>
        <span class="minute"></span>
        <span class="second"></span>
      </div>
      <div id="date"></div>
    </div>

------------------------------------
*/


(function($) {

  $.fn.simpleClock = function () {

    // Define weekdays and months
    var weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    var xmlHttp;
    function srvTime(){
    try {
        //FF, Opera, Safari, Chrome
        xmlHttp = new XMLHttpRequest();
    }
    catch (error_1) {
        //IE
        try {
            xmlHttp = new ActiveXObject('Msxml2.XMLHTTP');
        }
        catch (error_2) {
            try {
                xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
            }
            catch (error_3) {
                //AJAX not supported, use CPU time.
                alert("AJAX not supported");
            }
        }
    }
    xmlHttp.open('HEAD',window.location.href.toString(),false);
    xmlHttp.setRequestHeader("Content-Type", "text/html");
    xmlHttp.send('');
    return xmlHttp.getResponseHeader("Date");
    }    

    // getTime - Where the magic happens ...
    function getTime() {
      var st = srvTime();
      var date = new Date(st),
      hour = date.getHours();
      return {
        day: weekdays[date.getDay()],
        date: date.getDate(),
        month: months[date.getMonth()],
        hour: Hour(date.getHours()),
        minute: appendZero(date.getMinutes()),
        second: appendZero(date.getSeconds()),
				AMPM:	AmPm(date.getHours()),
        year: date.getFullYear()
      };
    }		

		// appendZero - If the number is less than 10, add a leading zero.
    function Hour(num) {
      if (num > 12) {
        return num - 12;
      }
      if (num == 0){
        return num + 12;
      }

      return num;
    }

		function AmPm(num) {
			if (num < 12){
				return " AM";
			}
			if (num >= 12){
				return " PM";
			}
		}

    // appendZero - If the number is less than 10, add a leading zero.
    function appendZero(num) {
      if (num < 10) {
        return "0" + num;
      }
      return num;
    }

    // refreshTime - Build the clock.
    function refreshTime() {
      var now = getTime();
      $('#date').html(now.day + ', ' + now.date + ' ' + now.month + ' ' + now.year);
      $('#time').html("<span class='hour'>" + now.hour + ":" + "</span>" + "<span class='minute'>" + now.minute + ":" + "</span>" + "<span class='second'>" + now.second + "</span>" + "<span class='AMPM'>" + now.AMPM +"</span>");
    }

    // Tick tock - Run the clock.
    refreshTime();
    setInterval(refreshTime, 1000);

  };
})(jQuery);
