<!DOCTYPE html>
<html>
<head>
<title>eBase Test</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

<?php

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
?>
<table id="staff">
<?php
foreach($people as $row){ //loop through multi-dimensional array and print values into separate table rows
echo '<tr>';
echo '<td>';
echo (implode('</td><td>', $row));
echo '</td>';
echo '<td><button>Click me</button></td>';
echo '</tr>';
}

?>
</table>

<script>

$(document).ready(function () {

$('button').on('click', function(){ //the on function is used for dyanmically generated content - since the table is created through php
	var tr = $(this).closest('tr'); // locate the current table row
	var id = tr.find('td:not(:first-child, :last-child)').append(' ').text(); // find the text for all the table data except ID and button in the current table row, append a space between the values
alert (id);

});

});


</script>

</body>

</html>
