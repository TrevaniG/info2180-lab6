<?php

// accept a term (keyword)
// respond with a value

$query = $_GET['q'];
$total = $_GET['all'];

$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];

$xmldata ='<?xml version="1.0" encoding="UTF-8"?>
<entries>
     <definition name="Definition" author="Komoy">
     	A statement of the exact meaning of a word, especially in a dictionary.
     </definition>
     <definition name="Bar" author="Brandon">
     	A place that sells alcoholic beverages.
     </definition>
     <definition name="AJAX:" author="Waiza">
     	Technique which involves the use of javascript and xml (or JSON).
     </definition>
     <definition name="HTML" author="Nadine">
     	The standard markup language for creating web pages and web applications.
     </definition>
     <definiton name="CSS" author="Jonathan">
     	A style sheet language used for describing the presentation of a document written in a markup languge
     </definition>
     <definition> name="JavaScript" author="Kimbally">
     	A lightweight, interpereted programming langugae with first-class fucntions that adds interactivity to your website."
     </definition>
     <definition name="PHP" author="Courage"
     	A server-side scripting language, and a poweful tool for making dynamic and interactive websites.
     </definition>
</entries>'	;

if($query ==="" && $total==="true"){
	header('content-Type:text/xml');
	$xlOutput = new SimpleXMLElement($xldata);
	echo $xmlOutput->asXML();
}

else{

print "<h3>" . strtoupper($query) . "</h3>";
print "<p>" . $definition[$query] . "</p>";
}

