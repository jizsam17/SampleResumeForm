function ssubmit(){
    'use strict'
    alert("Submit button clicked")
    var title = document.querySelector("#inputJobTitle");
    var exp = document.querySelector("#inputExperience");
    var st_date = document.querySelector("#inputStartDate");
    var status = document.querySelector('input[name="status"]:checked');
    alert(title.value+" "+exp.value+" "+st_date.value+" "+status.value)
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
    document.getElementById("view_table").style.display="block"
    //document.getElementById("content").innerHTML='<object type="text/html" data="view.html" ></object>';
    //alert("Button clicked");
}