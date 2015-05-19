<?php 

// $json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=4744091&units=imperial&APPID=30666683a4b7a4bfd61d8e2a60d2d69a');
$json = file_get_contents('https://api.forecast.io/forecast/db6af2fb453541129e51a6a610ee27c6/38.8046,-77.0431');
$obj = json_decode($json);

// echo $obj->{'sys'};
// echo $obj->{'name'};
// var_dump($obj);

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hub</title>
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>

<body>
<h2>Traffic to Work</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d99327.15091874538!2d-77.1114187723732!3d38.92458395926194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x89b7cf1be55c6961%3A0xedbe2be7db8fe8ab!2s11101+Georgia+Ave%2C+Silver+Spring%2C+MD+20902!3m2!1d39.036874499999996!2d-77.0495205!4m5!1s0x89b7b0f1c979269d%3A0x8ba3bb63c9ceba1b!2sNew+Target%2C+Inc.%2C+815+N+Royal+St+%23100%2C+Alexandria%2C+VA+22314-1778%2C+United+States!3m2!1d38.813258!2d-77.041581!5e0!3m2!1sen!2sus!4v1430764726292" width="800" height="600" frameborder="0" style="border:0"></iframe>

<h2>Todays Weather</h2>
<?php 
// open weather
	// echo '<h2>' . $obj->{'name'} . '</h2>';
	// echo 'It is ' . $obj->{'weather'}['0']->main . ' right now.';
	// echo '<br />';
	// echo 'It is currently ' . $obj->{'main'}->temp . 'F.';


// forecast.io
?>

<table>
	<thead>
		<tr>
			<td>Current Conditions</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php	echo $obj->{'currently'}->summary; ?></td>
			<td><?php	echo $obj->{'currently'}->temperature; ?></td>
			<td></td>
		</tr>
	</tbody>
</table>




<!-- <h2>SoundCloud</h2> -->
<!-- <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/62531280&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
 -->

<h2>Shitty Twitter</h2>
<a class="twitter-timeline" href="https://twitter.com/geor_el" data-widget-id="452242388254085121">Tweets by @geor_el</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


</body>
</html>