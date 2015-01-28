function create_table()
{
	var table = document.getElementById("prog-table-1");
	var i, j, row, cell;
	for(i=0;i<24;i++)
	{
		row = table.insertRow(1);
		for(j=0;j<7;j++)
		{
			cell = row.insertCell(0);
			cell.style.height = "40px";
			cell.innerHTML = "";
			cell.style.border="1px solid green";
		}
		cell = row.insertCell(0);
		cell.innerHTML = (23 - i);
		cell.style.verticalAlign = "top";
		cell.style.textAlign = "left";
		cell.style.fontSize = "20px";
		cell.style.fontStyle = "normal";
		cell.style.fontWeight = "none";
	}

}
