﻿<? php
echo '<html>';
echo '<head>';
echo '<script type="text/javascript">';
echo 'function startTime() {';
echo 'var today = new Date();';
echo 'var h = today.getHours();';
echo 'var m = today.getMinutes();';
echo 'var s = today.getSeconds();';
echo 'm = checkTime(m);';
echo 's = checkTime(s);';
echo 'document.getElementById('time').innerHTML =';
echo 'h + ":" + m + ":" + s + " am";';
echo '';
echo '';
echo 'var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];';
echo 'var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];';
echo 'var curWeekDay = days[today.getDay()];';
echo 'var curDay = today.getDate();';
echo 'var curMonth = months[today.getMonth()];';
echo 'var curYear = today.getFullYear();';
echo 'var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;';
echo 'document.getElementById("date").innerHTML = date;';
echo '';
echo 'var t = setTimeout(startTime, 500);';
echo '}';
echo 'function checkTime(i) {';
echo 'if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10';
echo 'return i;';
echo '}';
echo '</script>';
echo '';
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo '</head>';
echo '';
echo '<body onload="startTime()">';
echo '<h4>HNG INTERNSHIP 4.0</h4>';
echo '<p>TIME:</p>';
echo '<h3 id="time"></h3>';
echo '<p>DATE:</p>';
echo '<h4 id="date"></h4>';
echo '</body>';
echo '</html>';
?>