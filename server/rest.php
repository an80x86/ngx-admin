<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully\n";
	
   // select a database
   $db = $m->hesapci;
   echo "Database mydb selected\n";
   $collection = $db->kullanicilar;
   echo "Collection selected succsessfully\n";

   $cursor = $collection->find();
   // iterate cursor to display title of documents
	
   foreach ($cursor as $document) {
      echo $document["ad"] . "\n";
   }