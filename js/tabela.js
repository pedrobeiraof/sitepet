function myCreateFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    cell1.innerHTML = document.getElementById("titulo").value;
    cell2.innerHTML = document.getElementById("autor").value;
    cell3.innerHTML = document.getElementById("pagina").value;
    cell4.innerHTML = document.getElementById("assunto").value;
    cell5.innerHTML = document.getElementById("links").value;
}

function myDeleteFunction() {
    document.getElementById("myTable").deleteRow(1);
}


function createlink() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    cell1.innerHTML = document.getElementById("link").value;
}

function deletelink() {
    document.getElementById("myTable").deleteRow(0);
}


