<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="PRADIP KUMAR RAUSHAN">

    <meta name="keywords" content="PRADIP KUMAR RAUSHAN">

    <meta name="author" content="PRADIP KUMAR RAUSHAN">

    <title>PRADIP KUMAR RAUSHAN</title>

	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/w/bs/jq-3.3.1/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/datatables.min.css"/> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/w/bs/jq-3.3.1/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/datatables.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

</head>

<body onLoad="setInterval('tt()',1000)">

<?php 



include('connection.php');

function fetch_page_visit($connect)

{

	$query = "SELECT  * FROM page_track ";

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();
//var_dump($result);
	$total_row = $statement->rowCount();


	if($total_row > 0)

	{
		$output='
               	<div style="background:  lightgrey" class="table-responsive">

		<table  id="myTable" class="table table-bordered table-hover ">

		<thead>

			<tr class="info">

				<th >Url</th>

				<th >Time</th>

				<th >Ip</th>

				<th >City</th>

				<th >Region</th>

                <th >Location</th>

				<th >Country</th>

				<th >Org</th>

				<th >Postal</th>

			</tr>

		</thead>

		<tbody>
		';

		foreach($result as $row)

		{

			$output .='




				<tr>

				<td ><span>'.$row["page_url"].'</span></td>
				<td ><span>'.$row["page_open_datetime"].'</span></td>
				<td ><span>'.$row["ip"].'</span></td>
				<td ><span>'.$row["city"].'</span></td>
				<td ><span>'.$row["region"].'</span></td>
				<td ><span>'.$row["loc"].'</span></td>
				<td ><span>'.$row["country"].'</span></td>
				<td ><span>'.$row["org"].'</span></td>
				<td ><span>'.$row["postal"].'</span></td>

				

			    </tr>
			    ';


		}
					$output .= '
	    </tbody>

       <tfoot>

			<tr class="info">


				<th >Url</th>

				<th >Time</th>

				<th >Ip</th>

				<th >City</th>

				<th >Region</th>

                <th >Location</th>

				<th >Country</th>

				<th >Org</th>

				<th >Postal</th>

			</tr>

		</tfoot>

	</table>

</div>

			';

	}

	else

	{

		$output .= '

            <hr>
			<h1 align="center" style="color:red"><strong>No  Data Found</strong></h1>

	

		';

	}

	return $output;

}

?>





	<h2 class="text-center"> <strong>Page Visit Logs</strong></h2>

               <div class=" text-center">
              	<span class="btn" style="color:white;background-color: black" id="tar"></span>
              </div><?php   echo fetch_page_visit($connect);    ?>
<style type="text/css">



 body {

    padding-top:  1em;

    background: #39caf6;

  }

  @media (max-width: 980px) {

    body {

      padding-top:  1em;

      background: #39caf6;

    }

  }
  /*
table {
  table-layout: auto;
  width: 100%;  
}
*/
</style>

<script type="text/javascript">



$(document).ready(function(){





        $('#myTable').DataTable( {

        dom: 'lBfrtip',

         buttons: [

        {

            extend: 'copy',

            text: 'Copy to clipboard'

        },

        {

            extend: 'print',

            text: 'Print'

        },

        'excel',

        'pdf'

    ],
    order: [[ 1, "desc" ]],
    lengthMenu: [ [5, 10, 15, 25, 40, -1], [5, 10, 15, 25, 40, "All"] ]

});



});

</script>

<script type="text/javascript">

   function tt()

  {

   var d=new Date();

   var t=d.getHours()+":"+ d.getMinutes()+":"+ d.getSeconds()+" / "+ d.toDateString();

   document.getElementById("tar").innerHTML=t;  

  }

</script>

<br>

</body>

</html>