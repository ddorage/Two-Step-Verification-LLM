var num=0;
function new_requests(){

    // document.getElementById("label_1").style.visibility="hidden";
    // document.getElementById("label_2").style.visibility="hidden";
    
    var nodes="Student Who register New Their name will be visible here "
    nodes += "random_name Here "+ num
    var tag = document.createElement("p");
    tag.classList.add("gwd-p-request_label")
    var text = document.createTextNode(nodes);
    tag.appendChild(text);
    var element = document.getElementById("reqest_process");
    element.appendChild(tag);
    num +=1;
        
    // document.getElementById("p1").style.visibility="hidden"
    document.getElementById("new_student").style.visibility="visible"
        
}
function label_click() {
    // document.getElementById("label_1").style.visibility="hidden";
    // document.getElementById("label_2").style.visibility="hidden";
    document.getElementById("reqest_process").style.visibility="hidden"
}
