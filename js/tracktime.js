/**
 * Created by Sjaak on 4-11-2017.
 */
//console.log("TIME TRACKINT MODULE INITIATED");


function formatTime(sec)
{
    sec=Math.floor(sec);
    var s=sec%60; // 0-59
    s=s+""; // cast naar string
    if(s.length==1) s="0"+s;
    var m=Math.floor(sec/60);
    return m+":"+s;
}
function updateTime(ev)
{
    document.getElementById('tracktime').innerHTML = formatTime(ev.currentTime) + ' / ' + formatTime(ev.duration);
}
function updateTime2(ev)
{
    document.getElementById('tracktime2').innerHTML = formatTime(ev.currentTime) + ' / ' + formatTime(ev.duration);
}
function updateTime3(ev)
{
    document.getElementById('tracktime3').innerHTML = formatTime(ev.currentTime) + ' / ' + formatTime(ev.duration);
}
