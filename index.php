<?php

include('PachubeAPI.php');

$pachube = new PachubeAPI("YOUR_API_KEY");
$feed = FEED_ID;
$feed_to_delete = FEED_ID_TO_DELETE;
$user = "USER_NAME";

echo "<h2>getFeedsList(): </h2><br/>";
echo "<code>" . $pachube->getFeedsList("json", 2, 1, "summary", "energy") . "</code><br/>";

echo "<h2>getFeed(): </h2><br/>";
echo "<code>" . $pachube->getFeed("csv", $feed) . "</code><br/>";

echo "<h2>updateFeed(): </h2><br/>";
$data = "0,10";
echo "<code>" . $pachube->_debugStatus($pachube->updateFeed("csv", $feed, $data)) . "</code><br/>";

echo "<h2>deleteFeed(): </h2><br/>";
echo "<code>" . $pachube->_debugStatus($pachube->deleteFeed($feed_to_delete)) . "</code><br/>";

echo "<h2>getDatastreamsList(): </h2><br/>";
echo "<code>" . print_r($pachube->getDatastreamsList($feed)) . "</code><br/>";

echo "<h2>createDatastream(): </h2><br/>";
$data = "energy,19";
echo "<code>" . $pachube->_debugStatus($pachube->createDatastream("csv", $feed, $data)) . "</code><br/>";

echo "<h2>getDatastream(): </h2><br/>";
echo "<code>" . $pachube->getDatastream("json", $feed, 0) . "</code><br/>";

echo "<h2>updateDatastream(): </h2><br/>";
$data = "9";
echo "<code>" . $pachube->_debugStatus($pachube->updateDatastream("csv", $feed, 0, $data)) . "</code><br/>";

echo "<h2>deleteDatastream(): </h2><br/>";
echo "<code>" . $pachube->_debugStatus($pachube->deleteDatastream($feed, "energy")) . "</code><br/>";

echo "<h2>getUser(): </h2><br/>";
echo "<code>" . $pachube->getUser("xml", $user) . "</code><br/>";

echo "<h2>getFeedHistory(): </h2><br/>";
echo "<code>" . $pachube->getFeedHistory("json", $feed, false, false, false, 2) . "</code><br/>";

echo "<h2>getDatastreamHistory(): </h2><br/>";
echo "<code>" . $pachube->getDatastreamHistory("json", $feed, 0, false, false, false, 2) . "</code><br/>";
?>