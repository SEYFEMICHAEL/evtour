/**Add more styles as you add functions on datevalues[]*/
var style1,style2,style3;

 function smtm_timestamp_customizer(stamp) {
	var daten =Date.parse(stamp)/1000;
               
var timestamp = daten,
date = new Date(timestamp * 1000),
datevalues = [
   date.toDateString(),// Sat May 19 2018
   date.toLocaleDateString(),// 5/21/2018
   date.toLocaleTimeString(),//6:04:36 AM
   //date.toUTCString(),// Mon, 21 May 2018 06:04:36 GMT
/**Add more function here if you need */

];
/**Assign styles with values from datevalues[index] */
style1=datevalues[0];
style2=datevalues[1];
style3=datevalues[2];
} 
/**Create accessable function for your styles to be returned*/
function smtm_DMY(){
  return style2;
}
function smtm_HMS(){
  return style3;
}
function smtm_DMDY(){
  return style1;
}