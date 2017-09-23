<?php

// string implode ( string $glue , array $pieces )

// Join array elements with a glue string.

$elements = array('a', 'b', 'c');

"<ul><li>" . implode("</li><li>", $elements) . "</li></ul>"; 
/*

a
b
c

*/

 $array = array(
      "name" => "John",
      "surname" => "Doe",
      "email" => "j.doe@intelligence.gov"
   );

   // build query...
   $sql  = "INSERT INTO table";

   // implode keys of $array...
   $sql .= " (`".implode("`, `", array_keys($array))."`)";

   // implode values of $array...
   $sql .= " VALUES ('".implode("', '", $array)."') "; // 'INSERT INTO table (`name`, `surname`, `email`) VALUES ('John', 'Doe', 'j.doe@intelligence.gov') '
