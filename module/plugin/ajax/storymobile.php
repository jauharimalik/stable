<?php
header('Content-Type: application/json');

if(isset($_GET['query'])){$query = $_GET['query'];}
else {$query = "";}

?>
[
<?php

$story_no = 0; 
$sql_story   = ("SELECT * FROM story LEFT JOIN cust_users ON story.story_userid = cust_users.cust_id WHERE story_tags like '%$query1%' or story_title like '%$query1%' or story_desc like '%$query1%' order by story_date desc limit 10");
$query_story = $db->query($sql_story);
$total_story = $db->num_rows($sql_story);

while ($a_data = $query_story->fetch_array(MYSQLI_BOTH)) { 
	$story_link = $a_data['story_link']; 
	$story_link = $c_url."/story/".seo_title($story_link);
	
	$story_title = $a_data['story_title'];  
	$story_thumbnail = $a_data['story_thumbnail'];  
	$story_thumbnail = $c_url."/".$story_thumbnail;
	
	$story_userid = $a_data['story_userid'];
	$story_iconuser = $a_data['foto'];
	
	if($story_userid <=1 || $story_iconuser =='' ){ $story_iconuser = $c_url."/compressed/user/favi.webp";}
	
	$story_no++;
?>
{
    "story_link":"<?php echo $story_link; ?>",
    "story_title":"<?php echo $story_title; ?>",
    "story_thumbnail":"<?php echo $story_thumbnail; ?>",
    "story_iconuser":"<?php echo $story_iconuser; ?>"	
}
<?php if($story_no != $total_story ){ echo ","; } ?>
<?php }  ?>
]
