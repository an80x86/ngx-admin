<?php
// connect to mongodb
$m = new MongoClient();
	
// select a database
$db = $m->hesapci;
$collection = $db->kullanicilar;

$cursor = $collection->find();
// iterate cursor to display title of documents
	
foreach ($cursor as $document) {
    echo $document["ad"] . "\n";
}

echo "hi";   