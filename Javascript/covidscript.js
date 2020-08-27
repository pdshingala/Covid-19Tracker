function fatchglobal(){
	fetch('https://disease.sh/v2/all?yesterday=false&allowNull=true').then((data)=> {
        return data.json();
      })
      .then((actualdata)=>{
        const totalcases = actualdata.cases;
        document.getElementById('totalcases').innerHTML = totalcases;
        const totalrecovered = actualdata.recovered;
        document.getElementById('totalrecovered').innerHTML = totalrecovered;
        const totaldeaths = actualdata.deaths;
        document.getElementById('totaldeaths').innerHTML = totaldeaths;
        const totalactive = actualdata.active;
        document.getElementById('totalactive').innerHTML = totalactive;
      })
      .catch((error)=>{
        console.log(error);
      })

    fetch('https://disease.sh/v2/countries/india?yesterday=false&strict=false&allowNull=true').then((data)=> {
        return data.json();
      })
      .then((actualdata)=>{      	
        const indiacases = actualdata.cases;
        document.getElementById('indiacases').innerHTML = indiacases;
        const indiarecovered = actualdata.recovered;
        document.getElementById('indiarecovered').innerHTML = indiarecovered;
        const indiadeaths = actualdata.deaths;
        document.getElementById('indiadeaths').innerHTML = indiadeaths;
        const indiaactive = actualdata.active;
        document.getElementById('indiaactive').innerHTML = indiaactive;
      })
      .catch((error)=>{
        console.log(error);
      })


}

function fatchworld(){
	$.get("https://disease.sh/v2/countries?yesterday=false&sort=cases&allowNull=true",
		function (data){
			var world_table = document.getElementById('world_table');

			for(var i=1; i<216; i++){
				var x = world_table.insertRow();

				x.insertCell(0);
				world_table.rows[i].cells[0].innerHTML = data[i-1]['country'];
				
				if(i%2==1)
				{
				world_table.rows[i].cells[0].style.background = "#e6ecff";}
				else{
				world_table.rows[i].cells[0].style.background = "#ccd9ff";	
				}
				world_table.rows[i].cells[0].style.color = "navy";


				x.insertCell(1);
				world_table.rows[i].cells[1].innerHTML = data[i-1]['cases'];
	
				x.insertCell(2);
				world_table.rows[i].cells[2].innerHTML = data[i-1]['recovered'];

				x.insertCell(3);
				world_table.rows[i].cells[3].innerHTML = data[i-1]['deaths'];

				x.insertCell(4);
				world_table.rows[i].cells[4].innerHTML = data[i-1]['active'];

				x.insertCell(5);
				world_table.rows[i].cells[5].innerHTML = data[i-1]['tests'];

			}
		}
	);
}


function fatchindia(){
	$.get("https://api.covid19india.org/data.json",
		function (data){
			var india_table = document.getElementById('india_table');

			for(var i=1; i<(data['statewise'].length); i++){
				var x = india_table.insertRow();

				x.insertCell(0);
				india_table.rows[i].cells[0].innerHTML = data['statewise'][i]['state'];
				if (i%2==0) {
				india_table.rows[i].cells[0].style.background = "#e6ecff";}
				else{
				india_table.rows[i].cells[0].style.background = "#ccd9ff";	
				}
				india_table.rows[i].cells[0].style.color = "#000";

				x.insertCell(1);
				india_table.rows[i].cells[1].innerHTML = data['statewise'][i]['confirmed'];
				
				x.insertCell(2);
				india_table.rows[i].cells[2].innerHTML = data['statewise'][i]['recovered'];	

				x.insertCell(3);
				india_table.rows[i].cells[3].innerHTML = data['statewise'][i]['deaths'];

				x.insertCell(4);
				india_table.rows[i].cells[4].innerHTML = data['statewise'][i]['active'];
		
			}
		}
	);
}



