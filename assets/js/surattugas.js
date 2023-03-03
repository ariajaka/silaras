function addRow(tableID){
    var table=document.getElementById(tableID);
    var rowCount=table.rows.length;
    var row=table.insertRow(rowCount);
    var colCount=table.rows[0].cells.length;

	for(var n=0;n<colCount;n++){
    	var newcell = row.insertCell(n);
    	newcell.innerHTML = table.rows[0].cells[n].innerHTML;
		switch(newcell.childNodes[0].type){
			case"text":newcell.childNodes[0].value="";
			break;
			case"checkbox":newcell.childNodes[0].checked=false;
			break;
			case"select-one":newcell.childNodes[0].selectedIndex=0;break;
		}
	}
}

function deleteRow(tableID){
	try{
    	var table = document.getElementById(tableID);
    	var rowCount = table.rows.length;
    	for(var n = 0;n<rowCount;n++){
    		var row = table.rows[n];
    		var chkbox = row.cells[0].childNodes[0];
    		if(null!= chkbox && true == chkbox.checked){
    			if(rowCount<=1){
    				alert("Maaf Tidak dapat Menghapus semua baris");
    				break;
    			}
    			table.deleteRow(n);rowCount--;n--;
    		}
    	}
    }
    catch(e){
    	alert(e);
    }
}

