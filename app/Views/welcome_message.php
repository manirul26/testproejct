<!DOCTYPE html>
<html lang="en">
<head>
  <title>How Fetch a single record in a JSON with PHP mysql using jquery ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="jumbotron text-center">
  <h3>Test</h3>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
	<input type="button" id="btn" value="Get Data" onclick="doCall()">
	<input type="button" id="btn" value="Get Data 2" onclick="docall2()">
	
		<div id="datashow">


        </div>

		

    </div>
  </div>
</div>

<div class="container" id="tableContain" style="display: none;">
  <div class="row">
    <table class="table">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Date of Birth</th>
      </tr>
      <tbody>
        <tr>
          <td><span id="id"></span></td>
          <td><span id="cname"></span></td>
          <td><span id="email"></span></td>
          <td><span id="username"></span></td>
          <td><span id="dob"></span></td>
        </tr>
      </tbody>
    </table>    
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script type="text/javascript">
  $(document).ready(function(){
	//doCall();

/* alert();
   

$.ajax({
   type: 'POST',
   crossDomain: true,
   dataType: 'jsonp',
   url: 'http://103.36.103.60/report/data?username=testJD',
   success: function(jsondata){
		alert(jsondata);
   }
})
 */





	/* 	$.ajax({
            url: "http://103.36.103.60/report/data?username=testJD",
            type: "GET",
            crossDomain: true,
            data: JSON.stringify(somejson),
            dataType: "json",
            success: function (response) {
                var resp = JSON.parse(response)
                alert(resp.status);
            },
            error: function (xhr, status) {
                alert("error");
            }
        }); */


  });
  function doCall(){
	$.get('http://localhost/testexam/json/json.js', function(data) {

		$('#datashow').html(data);
	});
}
function docall2(){
	$.get('http://localhost/testexam/json/json.js', function(data) {
		var result = JSON.stringify(data);
		$('#datashow').html(result);
	});
}
</script>

</body>
</html>