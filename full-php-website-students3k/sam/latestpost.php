<?php
//Here is the simple example of latest post & latest user of your phpbb3 board.  
function latestpost() {
echo "<li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=18&amp;t=49'><strong>This is Amaad</strong></a><br /><small>Posted by Administrator at 01.01.70</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=18&amp;t=41'><strong>Test, just a test</strong></a><br /><small>Posted by aliangshisb63452 at 08.01.09</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=11&amp;t=45'><strong>Moderator Sharfuz Zaman</strong></a><br /><small>Posted by sharfuz at 11.12.08</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=18&amp;t=46'><strong>New member</strong></a><br /><small>Posted by ppdj at 01.12.08</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=18&amp;t=47'><strong>I am Rabbane</strong></a><br /><small>Posted by Administrator at 30.11.08</small></li>\n";
}
function latestuser() {

echo "<li><a target='_blank' href='http://www.i-tech-system.com/forum/memberlist.php?mode=viewprofile&amp;u=903'><strong>Wagner Pontes</strong></a><br /><small>Joined Thu Jan 01, 1970</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/memberlist.php?mode=viewprofile&amp;u=902'><strong>milton bola</strong></a><br /><small>Joined Wed Dec 24, 2008</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/memberlist.php?mode=viewprofile&amp;u=901'><strong>boegeholz</strong></a><br /><small>Joined Wed Dec 24, 2008</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/memberlist.php?mode=viewprofile&amp;u=900'><strong>provenzano</strong></a><br /><small>Joined Wed Dec 24, 2008</small></li><li><a target='_blank' href='http://www.i-tech-system.com/forum/memberlist.php?mode=viewprofile&amp;u=899'><strong>evandroalmeida54</strong></a><br /><small>Joined Tue Dec 23, 2008</small></li>\n"; 
}

/*
Original code for latest post & users
include("data_db.php");
		$link = mysql_connect("localhost", $userdataname, $userdatapass);
		if (!$link)
		{
// Exit, if can not connect to the database		
		die('Not connected : ' . mysql_error());
		}
// Select the database
		$db_selected = mysql_select_db($user_data, $link);
		if (!$db_selected)
		{
// Exit, if can not select the database
		die ('Can\'t use foo : ' . mysql_error());
		}
function latestpost() {
// Connect to the database
// starting the module output		
// Load the last topics
		$latest_topics = "SELECT * FROM phpbb_topics WHERE topic_approved = '1' ORDER BY topic_last_post_time DESC LIMIT 0,5";
		$topics = mysql_query($latest_topics);
		while($row = mysql_fetch_array($topics))
		{
		$date1 = date("d.m.y", $topic_last_post_time);
		extract($row);
		//echo $topic_title;
		echo "<li><a target='_blank' href='http://www.i-tech-system.com/forum/viewtopic.php?f=".$forum_id."&amp;t=".$topic_id."'><strong>".$topic_title."</strong></a><br /><small>Posted by ".$topic_last_poster_name." at ".$date1."</small></li>";
		}	
}
function latestuser() {
$result = "SELECT * FROM phpbb_users ORDER BY user_regdate DESC LIMIT 0, 5";
$hresult=mysql_query($result);
while($row = mysql_fetch_array($hresult))
	{
    $date2 =  date("D M d, Y",$user_regdate);
	extract($row);
	echo "<li><a target='_blank' href='http://www.i-tech-system.com/forum/memberlist.php?mode=viewprofile&amp;u=".$user_id."'><strong>".$username."</strong></a><br /><small>Joined ".$date2."</small></li>";
}
}
*/
?>