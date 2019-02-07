<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/vue"></script>

</head>
<body>


<div id="app"class="container"> 

	<h2>{{hello}}</h2>
	<h2>{{title}}</h2>
	<input  v-model="hello"  />
	<input  v-model="title"  />

	<table class="table table-striped"> 

		<tr> 

           <th>Id</th>
           <th>Name</th>
           <th>Address</th>

		</tr>

		<tr v-for="student in students"> 
         <td> {{student.id}}</td>
           <td> {{student.name}}</td>
             <td> {{student.address}}</td>


		</tr>



	</table>




</div>





	

<script> 

new Vue({
 el:"#app",

 data:{

 	hello:"Hello world",
 	title:"my bro",
 	students:[
{id:1,name:"Aung Aung",address:"Insein"},
{id:2,name:"Mg Mg",address:"Insein"},
{id:3,name:"Kyaw Kyaw",address:"Insein"},
{id:4,name:"Zin Zin",address:"Insein"}



 	]
 }



});


	</script>

</body>
</html>