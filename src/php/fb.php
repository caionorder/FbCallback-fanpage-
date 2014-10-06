<?php
// Fanpage ID (get on http://findmyfacebookid.com/)
$fanPageId = "607690675909650";
//Your Tokem (get on https://developers.facebook.com/tools/explorer/)
$token = "CAACEdEose0cBAG4bbZCrqveW3QTEnlY2DEP0xMepqNUyXqZCxYGZCe3YWHWuEa7sZBDWLKgMwGsbgDGYEKekh5uhZBYZBBWYNKrE7NtF6n8UReS5dSyLKZBPNHzbzlX4qbY0bgxAuWbmAzzFbCIwn2maU7nhsG5IZCUIO0f6QMAIWPYLng5hTbmqngNjA5UmuSthPtHKmnprrMmtZBXfEKqeuSTRJoXjUcQwZD";
// url to script get
$url = "https://graph.facebook.com/v2.1/{$fanPageId}/posts?access_token={$token}&fields=message,picture,link&limit=".$_GET['q'];
$contents = file_get_contents($url);

// change small pic to large.
$contents = str_replace('v\/t1.0-9\/p130x130\/','p\/t1.0-9\/s\/', $contents);

// set return header
header('Content-Type: application/json');

// print "callback fanpage"
echo "fbCallback(".$contents.");";
