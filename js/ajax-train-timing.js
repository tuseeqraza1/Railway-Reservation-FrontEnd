function trainTiming(train_id) {
    if (train_id=="0") {
        document.getElementById("result").innerHTML="";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
        document.getElementById("result").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET","content/trainData.php?trainID="+train_id,true);
    xmlhttp.send();
}