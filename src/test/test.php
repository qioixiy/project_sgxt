<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>table Page</title>
</head>
<body>
    <form id="form1" runat="server">
    <div style="width:500px">
    <table id ="AllTable" border="1px" cellpadding="0px" cellspacing="0px" width="100%" >        
            <tr>
                 <td>ID</td>                 
                 <td>Delete</td>                
            </tr>           
    </table>
    <a href="#" onclick="addRow();">Add Row</a><br/>
     <input  type="text" id="ColumnName"/><a href="#" onclick="addColumn();">Add Column</a><br/>
    <input type ="submit" value="submit"/> 
    </div>
    </form>
</body>
</html>
<script type="text/jscript">
 function addColumn(){
     var allTable = document.getElementById("AllTable");
     var headerRow = allTable.rows[0];
     var newHeaderCol = headerRow.insertCell(headerRow.cells.length-1);
     var headerName = document.getElementById('ColumnName').value;
     var headerLable =document.createElement('label');
     headerLable.innerHTML=headerName;
     newHeaderCol.appendChild(headerLable);
  newHeaderCol.appendChild(document.createElement('br'));
  
  var a = document.createElement('a');
  a.href = '#';
  a.onclick = function() { deleteColumn(newHeaderCol); return false; };  
  a.innerHTML = 'Remove Column';
  newHeaderCol.appendChild(a);
  
  for(var i=1;i<allTable.rows.length;i++){
      var col = allTable.rows[i].insertCell(allTable.rows[i].cells.length-1); 
      var txt = document.createElement('input'); 
      txt.type='text';
      txt.value=i; 
   txt.name = 'txt'+(i);
   col.appendChild(txt);
  }
  
 }
 function addRow(){
     var allTable = document.getElementById("AllTable");
     var lastRow = allTable.rows[allTable.rows.length - 1];
  var row = allTable.insertRow(-1);  
   
  for(var i = 0; i < lastRow.cells.length; i++) { 
     var col = row.insertCell(-1);
     if (i != lastRow.cells.length - 1) {
          var txt = document.createElement('input'); 
          txt.type='text';
          txt.value=lastRow.rowIndex+1; 
    txt.name = 'txt'+(lastRow.rowIndex+1);
    col.appendChild(txt);
     } else{          
          var btn = document.createElement('input'); 
    btn.type ='button';
    btn.value ="Delete Row";
    btn.name = 'btnDelete'+(lastRow.rowIndex+1);    
    btn.onclick = function() { deleteRow(btn); return false; };
    col.appendChild(btn);
     } 
  }
 }
 function deleteRow( btn ){
     var rownum = btn.parentNode.parentNode.rowIndex;
     var allTable = document.getElementById("AllTable");
     allTable.deleteRow(rownum);
 }
 function deleteColumn( btn ){     
     var allTable = document.getElementById("AllTable");
     var index = btn.cellIndex;
  for(var i = 0; i < allTable.rows.length; i++) {
   allTable.rows[i].deleteCell(index);
  }
 }
</script>