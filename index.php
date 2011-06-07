<?php

include('PachubeAPI.php');

$pachube = new PachubeAPI("YOUR_API_KEY");
$feed = 25842;

echo "<h2>getFeedsList(): </h2><br/>";
echo "<code>" . $pachube->getFeedsList("json", 2, 1, "summary", "energy") . "</code><br/>";

echo "<h2>getFeed(): </h2><br/>";
echo "<code>" . $pachube->getFeed("csv", $feed) . "</code><br/>";

echo "<h2>updateFeed(): </h2><br/>";
$data = "0,10";
echo "<code>" . $pachube->updateFeed("csv", $feed, $data) . "</code><br/>";

echo "<h2>deleteFeed(): </h2><br/>";
echo "<code>" . $pachube->deleteFeed(26285) . "</code><br/>";

echo "<h2>createDatastream(): </h2><br/>";
$data = "energy,19";
echo "<code>" . $pachube->createDatastream("csv", $feed, $data) . "</code><br/>";
?>