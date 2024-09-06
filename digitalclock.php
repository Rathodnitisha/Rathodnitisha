<html>
<html>
<head>
<title></title>

<style>
	.custom-clock{
		background:black;
	}
	td,th{
		color: white;
	}
	.time{
		color: red ;
	}
	
</style>
</head>
<body>
    <div class="custom-clock-container">
        <table class="custom-clock" width="100%">
            <tr class="date">
                <th colspan="2">DATE</th>
                <th colspan="4">MONTH</th>
                <th colspan="3">YEAR</th>
            </tr>
            <tr class="date-num">
                <td colspan="2"class='time'><?php echo date("d"); ?></td>
                <td colspan="4"class='time'><?php echo date("m"); ?></td>
                <td colspan="3" class='time'><?php echo date("y"); ?></td>
            </tr>
            <tr class="time">
                <th colspan="2">HOUR</th>
                <th colspan="4">MINUTE</th>
                <th colspan="3">SECOND</th>
            </tr>
            <tr class="custom-hours">
                <td colspan="2" id="hours" class='time'></td>
                <td colspan="1" class='time'>:</td>
                <td colspan="2" id="minutes" class='time'></td>
                <td colspan="1" class='time'>:</td>
                <td colspan="2" id="seconds" class='time'></td>
                <!-- <td colspan="2" id="ampm"><?php echo date("a"); ?></td>     -->
                
            </tr>
            <tr class="radio-days">
                <td><input type="radio" id="sun"> <label for="sun">SUN</label></td>
                <td><input type="radio" id="mon"> <label for="mon">MON</label></td>
                <td><input type="radio" id="tue"> <label for="tue">TUE</label></td>
                <td><input type="radio" id="wed"> <label for="wed">WED</label></td>
                <td><input type="radio" id="thu"> <label for="thu">THU</label></td>
                <td><input type="radio" id="fri"> <label for="fri">FRI</label></td>
                <td><input type="radio" id="sat"> <label for="sat">SAT</label></td> 
            </tr>
        </table>
        <div class="ampm">
            <div id="am" class="coloram">

            </div>
            <p>am</p>
            <div id="pm" class="colorpm">

            </div>
            <p>pm</p>
            <p class="day-of-week" id="dayOfWeek" style="color:green;"></p>

        </div>
    </div>


    <script type="text/javascript">
        function updateTime() {
            let currentTime = new Date();
            let hours = String(currentTime.getHours()).padStart(2,'0');
            let minutes = String(currentTime.getMinutes()).padStart(2, '0');
            let seconds = String(currentTime.getSeconds()).padStart(2, '0');
            let dayIndex = currentTime.getDay();
            let dayOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'][dayIndex];
            

            // let hours=15;
            const ampms = hours >= 12 ? 'PM' : 'AM';
            // hours = hours % 12;
            // hours = hours ? hours : 12; // the hour '0' should be '12'  
            let ams=document.querySelector(".coloram")
            if(ampms==='PM'){
                document.querySelector(".colorpm").style.backgroundColor='yellow';
            }else{
               ams.style.backgroundColor='yellow';
            }
            
            console.log(hours);
            document.getElementById('hours').innerHTML = hours;
            document.getElementById('minutes').innerHTML = minutes;
            document.getElementById('seconds').innerHTML = seconds;
            // document.getElementById('dayOfWeek').innerHTML = dayOfWeek;

            document.querySelectorAll('.radio-days input[type="radio"]').forEach((radio, index) => {
                if (index === dayIndex) {
                    radio.checked = true;
                } else {
                    radio.checked = false;
                }
            });
        }

        setInterval(updateTime, 1000); // Update time every second
    </script>
    <script>
        window.onload=function(){
            if(document.getElementById("ampm"))
        }
    </script>
</body>
</html>


















</html>


