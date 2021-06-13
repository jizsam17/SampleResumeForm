function ssubmit(){
    
    var id = document.getElementById("id").value;
    var jbt = document.querySelector("#JobTitle").value;
    var exp = document.querySelector("#Experience").value;
    var st = document.querySelector("#StDate").value;
    var dt = document.querySelector("#EdDate").value;
    var sta = document.getElementsByName("Acstatus").value;
    alert(id+" "+jbt+" "+exp+" "+st+" "+dt+" "+sta);
}

function validateDate(event){
    //console.log(event.target.value)
    var today = new Date(); //Thu Jun 10 2021 15:39:26 GMT+0530 (India Standard Time)

    //var st_date = document.querySelector("#inputStartDate");
    var sel_Date = new Date(event.target.value)
    if(sel_Date.getTime() < today.getTime())
    {
        alert("Please select a valid date");
        event.target.value="";
    }
    
}  

function validateEndDate(){
    var st_date = new Date(document.querySelector("#inputStartDate").value);
    var end_date = new Date(document.querySelector('#inputEndDate').value);

    var today = new Date();

    if(end_date.getTime() < today.getTime())
    {
        alert("Please select a valid date");
        document.querySelector("#inputEndDate").value="";
    }

    else if(end_date.getTime() <= st_date.getTime())
    {
        alert("Please select a valid date");
        document.querySelector("#inputEndDate").value="";
    }
    
}

function validateUpdateEndDate(){
    var st_date = new Date(document.querySelector("#StDate").value);
    var end_date = new Date(document.querySelector('#EdDate').value);

    var today = new Date();

    if(end_date.getTime() < today.getTime())
    {
        alert("Please select a valid date");
        document.querySelector("#EdDate").value="";
    }

    else if(end_date.getTime() <= st_date.getTime())
    {
        alert("Please select a valid date");
        document.querySelector("#EdDate").value="";
    }
    
}

function load_view(){
    document.getElementById("form1").style.display="none";
    document.getElementById("formEdit").style.display="none";
    document.getElementById("view_table").style.display="block"
}
function home_view(){
    document.getElementById("view_table").style.display="none";
    document.getElementById("formEdit").style.display="none";
    document.getElementById("form1").style.display="block"
}

function btn_edit(event){
    document.getElementById("view_table").style.display="none";

    var tableRow =event.target.parentNode.parentNode;
    
    var id=tableRow.cells[0].innerHTML;
    var jbtitle=tableRow.cells[1].innerHTML;
    var exp=tableRow.cells[2].innerHTML;
    var st_date=tableRow.cells[3].innerHTML;
    var end_date=tableRow.cells[4].innerHTML;
    var status=tableRow.cells[5].innerHTML;

    var sel_Date = new Date(st_date)
    var dd = String(sel_Date.getDate()).padStart(2, '0');
    var mm = String(sel_Date.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = sel_Date.getFullYear();
    st_date = yyyy + '-' + mm + '-' + dd;

    var en_Date = new Date(end_date)
    dd = String(en_Date.getDate()).padStart(2, '0');
    mm = String(sel_Date.getMonth() + 1).padStart(2, '0'); //January is 0!
    yyyy = sel_Date.getFullYear();
    end_date = yyyy + '-' + mm + '-' + dd;

    document.getElementById("id").value=parseInt(id);
    document.querySelector("#JobTitle").value=jbtitle;
    document.querySelector("#Experience").selectedIndex=exp;
    document.querySelector("#StDate").value=st_date;
    document.querySelector("#EdDate").value=end_date;
    
    if(status=="0"){
        document.getElementById("AccessTrue").checked=false;
        document.getElementById("AccessFalse").checked="true";
    }

    document.getElementById("formEdit").style.display="block"

}