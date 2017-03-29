<?php
$doc = new DOMDocument;

$node = $doc->createElement("para","ff");
$node->setAttribute("id", "sdf");
$newnode = $doc->appendChild($node);
$node2 = $doc->createElement("para3","ff");
$node->appendChild($node2);
$node2->appendChild($node);
echo $doc->saveXML();