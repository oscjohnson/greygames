<?php
include('db.inc.php');
db_connect();

$q=$_GET["q"];
//$x=$xmlDoc->getElementsByTagName('link');

$x = mysql_query("SELECT * FROM Game WHERE upper(name) LIKE'%$q%'");

//get the q parameter from URL


//lookup all links from the xml file if length of q>0
if (strlen($q)>0)
{
$hint="";
for($i=0; $i<($x->length); $i++)
  {
  $y=$x->item($i)->getElementsByTagName('linkname');
  $z=$x->item($i)->getElementsByTagName('url');
  if ($y->item(0)->nodeType==1)
    {
    //find a link matching the search text
    if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))
      {
      if ($hint=="")
        {
        $hint="<a href='" . 
        $z->item(0)->childNodes->item(0)->nodeValue . 
        "' target='_blank'>" . 
        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      else
        {
        $hint=$hint . "<br /><a href='" . 
        $z->item(0)->childNodes->item(0)->nodeValue . 
        "' target='_blank'>" . 
        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint=="")
  {
  $response="";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
?>