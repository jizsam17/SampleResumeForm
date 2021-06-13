function ssubmit(){
    'use strict'
    alert("Submit button clicked")
    var title = document.querySelector("#inputJobTitle");
    var exp = document.querySelector("#inputExperience");
    var st_date = document.querySelector("#inputStartDate");
    var status = document.querySelector('input[name="status"]:checked');
    //alert(title.value+" "+exp.value+" "+st_date.value+" "+status.value)
}

function validateDate(){
    var today = new Date(); //Thu Jun 10 2021 15:39:26 GMT+0530 (India Standard Time)
    // var dd = String(today.getDate()).padStart(2, '0');
    // var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    // var yyyy = today.getFullYear();
    // today = mm + '/' + dd + '/' + yyyy;
    var st_date = document.querySelector("#inputStartDate");
    var sel_Date = new Date(st_date.value)
    if(sel_Date.getTime() < today.getTime())
    {
        alert("Please select a valid date");
    }
}  

// var clk=document.querySelector("#click");
// clk.addEventListener("click",()=>{
//     alert("Button clicked");
// })
function load_view(){
    document.getElementById("form1").style.display="none";
    document.getElementById("formEdit").style.display="none";
    document.getElementById("view_table").style.display="block"
    //document.getElementById("content").innerHTML='<object type="text/html" data="view.html" ></object>';
    //alert("Button clicked");
}
function home_view(){
    document.getElementById("view_table").style.display="none";
    document.getElementById("formEdit").style.display="none";
    document.getElementById("form1").style.display="block"
    //document.getElementById("content").innerHTML='<object type="text/html" data="view.html" ></object>';
    //alert("Button clicked");
}

function btn_edit(ed){
    document.getElementById("view_table").style.display="none";

    var table = document.getElementById('data_table');
    var cells = table.getElementsByTagName('td');

    console.log(ed);

    var jbtitle=document.querySelector("#data_table").rows[1].cells.item(1).innerHTML;
    // var exp=document.querySelector("#data_table").rows[1].cells.item(2).innerHTML;
    // var st_date=document.querySelector("#data_table").rows[1].cells.item(3).innerHTML;
    // var end_date=document.querySelector("#data_table").rows[1].cells.item(4).innerHTML;
    // var status=document.querySelector("#data_table").rows[1].cells.item(5).innerHTML;

    // var sel_Date = new Date(st_date)
    // var dd = String(sel_Date.getDate()).padStart(2, '0');
    // var mm = String(sel_Date.getMonth() + 1).padStart(2, '0'); //January is 0!
    // var yyyy = sel_Date.getFullYear();
    // st_date = yyyy + '-' + mm + '-' + dd;

    // var en_Date = new Date(end_date)
    // dd = String(en_Date.getDate()).padStart(2, '0');
    // mm = String(sel_Date.getMonth() + 1).padStart(2, '0'); //January is 0!
    // yyyy = sel_Date.getFullYear();
    // end_date = yyyy + '-' + mm + '-' + dd;


    document.querySelector("#JobTitle").value=jbtitle;
    // document.querySelector("#Experience").selectedIndex=exp;
    // document.querySelector("#StDate").value=st_date;
    // document.querySelector("#EdDate").value=end_date;
    
    // if(status=="0"){
    //     document.getElementById("AccessTrue").checked=false;
    //     document.getElementById("AccessFalse").checked="true";
    // }

    document.getElementById("formEdit").style.display="block"
    // alert(st_date);
    // alert(end_date);

    
    //alert(today);
}