$( document ).ready(function() {
    let res =  document.getElementById("empleados");
    res.innerHTML = "lalala";
    

    

    let des = document.getElementById("design");
    des.onclick = addEmp;
    function addEmp(empleados) {
        let res =  document.getElementById("empleados").innerHTML;
        let res1 = res +empleados;
        res.innerHTML = res1;
    }

    

});