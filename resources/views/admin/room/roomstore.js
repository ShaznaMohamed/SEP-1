/**
 * Created by Shazna on 3/21/2016.
 */


var xmlHttp = createXmlHttpRequestObject();


function createXmlHttpRequestObject(){

    var xmlHttp;

    if(window.ActiveXObject){
        try {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5

        }catch (e)
        {
            xmlHttp = false;
        }
    }
    else {
        try {
            xmlHttp = new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari

        }
        catch (e)
        {
            xmlHttp = false;
        }
    }


    if (!xmlHttp)
    {
        alert("Can't create that object hoss!");
    }
    else
        return xmlHttp
}


function getvalues(){

    if (xmlHttp.readyState==0 || xmlHttp.readyState==4)
    {
        roomtype = encodeURIComponent(document.getElementById("rooms").value);
        xmlHttp.open("GET","roomstore.php?roomtype="+roomtype,true);
        xmlHttp.onreadystatechange = handleServerResponse;
        xmlHttp.send(null);
    }else {

        setTimeout('getvalues()',1000);
    }

}


function handleServerResponse(){

    if(xmlHttp.readyState==4){
        if(xmlHttp.status==200){
            xmlResponse = xmlHttp.responseXML;
            xmlDocumentElement = xmlResponse.documentElement;
            message = xmlDocumentElement.firstChild.data;
            document.getElementById("mydive").innerHTML = '<span style="color:blue">'+message+'</span>';
            setTimeout('getvalues()',1000);
        }else
        {
            alert("Something went wrong!");
        }
    }
}