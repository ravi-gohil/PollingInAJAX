<?php
	$vote = $_REQUEST['vote'];
	
	$filename = "poll.txt";
	@$content = file($filename);
	
	@$array = explode("||", $content[0]);
	@$yes = $array[0];
	@$no = $array[1];
	
	if ($vote == 0)
	{
		$yes = $yes + 1; 
	}
	if($vote == 1)
	{
		$no = $yes + 1;
	}
	
	$insertvote = $yes."||".$no;
	$fp = fopen($filename, "w");
	fputs($fp, $insertvote);
	fclose($fp);
?>
<h2>Result</h2>
<table>
	<tr>
		<td> yes:</td>
		<td><?php echo(100*round($yes/($yes+ $no), 2));?>
	</tr>
	<tr>
		<td> no:</td>
		<td><?php echo(100*round($no/($yes+ $no), 2));?>
	</tr>
</table>
</table>