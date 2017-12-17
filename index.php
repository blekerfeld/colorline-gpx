<?php
if(isset($_POST['route_date']))
{
	header('Content-Type: text/xml');
	header('Content-Disposition: attachment; filename=colorline'.date("Y-m-d", strtotime($_POST['date'])).'.gpx');
	$str_route = file_get_contents("route.xml"); 
	$date1 = $_POST['date'];
	$date2 = date("Y-m-d", strtotime($date1.' + 1 days'));
	$str_route = str_replace("2013-07-24",$date1,$str_route);
	$str_route = str_replace("2013-07-25",$date2,$str_route);
	die($str_route);
} 
?>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <style>
        html {
            font-family: Calibri, Arial;
        }
        h1 {
            background: Aquamarine;
            border: 1px solid lightblue;
        }
        .info {
            border: 1px solid lightblue;
            padding: 5px;
            color: darkgray;
            font-size: 12px;
            margin-top: -15px;
        }
        .border {
            border-top: 1px solid LightSlateGray;
        }
        .example {
            border: #444 dashed 1px;
            margin: 5px;
            padding: 10px;
            color: #777;
            background: lavender;
        }
        .form {
            background: Lavender;
            padding: 10px;
            font-size: 12px;
            color: #333;
            margin-top: -15px;
        }
        .form b {
            font-size: 13px;
        }
        .text {
            border: gray solid 1px;
            padding: 10px;
            color: #777;
            background: #F8F8F8;
            width: 95%;
            height: 200px;
            margin: 5px;
        }
        .number {
            width: 42px;
        }
        .number1 {
            width: 64px;
        }
    </style>
    <title>Tool for gpx files</title>
</head>

<body>
    <h1>Tool for gpx files<br /><span style="color: gray; font-size:12px">created by Thomas de Roo</span></h1>
    <div class='form'>
        <center><img src="http://i40.tinypic.com/2qulseb.png" style="width:175px; height: auto;" />
            <br />
            <b style="font-size: 24px;">Colorline gpx tool</b>
            <br /> Use this tool to generate gpx files of the route of the ships Color Magic and Color Fantasy of the Color Line.
            <br /> You can use those gpx files to geotag your pictures. Just enter the date you went with the Color line and BAM!, there you go! :)
            <br />
            <br />
            <b style="font-size: 18px;">Kiel - Oslo</b>
            <br />
            <form action="index.php" method="POST">
                <input type="hidden" name="route_date" value="1" /> Date <span style="font-size: 10px; color: gray;">(YYYY-MM-DD)</span>
                <input name="date" />
                <input type="submit" value="Generate" />
            </form>
            <br />
            <b style="font-size: 18px;">Oslo - Kiel</b>
            <br /> Coming soon
            <br />
            <br/>
            <b style="font-size: 20px;">How does it work?</b>
            <br /> As the route and the scedule of the color line always nearly is the same, the only thing that changes is the date.
            <br /> I got the route of one trip with the color line from <a href="http://www.marinetraffic.com/ais/shipdetails.aspx?mmsi=259222000">Marine Trafic</a> and made a gpx file out of it.
            <br /> The generated gpx file is not the precise route of one of the ships from that day, <b>it only approaches the route</b>, which is probably just enough for geotagging. =)

        </center>
    </div>
    <br />
    <div class='info'>
        Created by Thomas de Roo &copy; 2013
    </div>
</body>

</html>
