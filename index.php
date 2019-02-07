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



	<div class="row">

<div class="col-md-4">

	<form>
  <div class="form-group">
    <label >Name:</label>
    <input type="text"v-model="students.name" class="form-control" >
    
  </div>
  <div class="form-group">
    <label>Address:</label>
    <input type="text" v-model="students.address"class="form-control"  >
  </div>
 
  <button type="submit" class="btn btn-primary"v-on:click="addstudents">Submit</button>
</form> 



	</div> 
		<div class="col-md-8">



	<table class="table table-striped"> 
<thead>
		<tr> 

           
           <th>Name</th>
           <th>Address</th>
           <th>Action</th>

		</tr>
</thead>

<tbody>
		<tr v-for="student in allstudents"> 
         <td>{{student.name}}</td>
           <td>{{student.address}}</td>
              <td> <button class="badge badge-danger">delete</button></td>


		</tr>

</tbody>

	</table>
</div>

</div>

<div class="row"> 

	<div class="col-md-12"style="background-color:#FAF7F7;">

		<pre>{{$data | JSON}}</pre>

	</div>


</div>

</div>





	

<script> 

new Vue({
 el:"#app",

 data:{

 	
 	students:{names:"",address:""},

 	allstudents:[]

 },

 methods:{

 	addstudents:function(){

var name=this.students.names.trim();
var address=this.students.address.trim();
if(name && address){

	this.allstudents.push({names:name,address:address});

	this.students= {names:"",address:""};



}

 	}


 }



});


	</script>

</body>
</html>