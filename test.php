<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css"> -->
	<script type="text/javascript" src="jq_ajax/jquery.min.js"></script>
	
</head>
<body>
		
			<button type="button" class="" id="buton">change</button>

			<script type="text/javascript">
				$(document).ready(function(){
            //e.preventDefault();
             $("#buton").on('click',function(){
             	$.ajax({
                 type:'POST',
                 url:"test_ajax.php",
                 success:function(result){
                 	$("#div1").html(result);
                 }
             	});
             });
         });


			</script>	
			<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
</body>
</html>