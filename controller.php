<?php // Define vars:
$page_title = "EHW JavaScript ES6 Demo: Add element to DOM (prepend)";

?>

<!--
Project Name:   EHW JavaScript ES6 Demo: Add element to DOM (prepend)
Proj Shortname: ES6: Prepend Element to DOM 
Filename:       controller.php
Date Created:   11/28/21
Date Updated:   --
Programmer:     Eric Hepperle

Purpose: 
HTML/PHP based sandbox to test web code. This is a demo for testing
JavaScript. The project folder must live on a web server, local or remote.

Usage:
Launch in browser and open developer console.

Requires:
* Browser
* Web server supporting PHP 7.4

Demonstrates:
* ES6 Arrow Functions
* Map, Reduce, Filter, Find
* Promises, Closures, Anonymous Functions
* SetTimeout, Timers,
* Const, Let, Var
* For-in, For-of, ForEach
* Continue, Break, Switch-Case

Tags:
ES6, arrow functions

-->

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">
	
<title><?php echo $page_title; ?></title>


<link rel="stylesheet" href="/">

<style>
#wrapper {
    margin: 0 auto;
    background: #536e1d;
    max-width: 1024px;
    border: solid 1px #898484;
    padding: 1em;
}
#ehw-top-head {
    color: white;
}
#ehw-top-head h2 {
    color: chartreuse;    
}
#ehw-top-head .property {
    opacity: .5;
}

main {
    background: #fffbe3;
    min-height: 2em;
    border: solid gray 2px;
    padding: .4em 1em;
    overflow: hidden;

}
.ehw-code pre {
    color: green;
    background: #f9f9f9;
    padding: .6rem;
    border: solid 1px;
    border-radius: .6rem;
}

</style>

</head>

<body>

<div id="wrapper" class="container-fluid">

<div id="ehw-top-head">
    <div id="header-img"></div>
    <h2><?php echo $page_title; ?></h2>
    <p>Filename: <span class="property"><?php echo basename(__FILE__); ?></span></p>
</div><!-- /ehw-top-head div -->

<main>
<div>
This is Eric Hepperle's examples demonstrating he understands how to use E6
JavaScript.
</div>

<section class="ehw-code">
<h3>Let, Arrow Functions, ForEach</h3>
<pre>
// add code here
</pre>
</section><!-- /ehw-code -->

</main>

</div><!-- /wrappper -->

<!-- JavaScript -->
<script>

/*
This is Eric Hepperle's examples demonstrating he understands how to use E6
JavaScript.
*/

var data = {
  "data": {
    "x": "1",
    "y": "1",
    "url": "http://url.com"
  },
  "event": "start",
  "show": 1,
  "id": 50
}

eh_div = document.createElement('div');

style = 
`min-height: 20px;
background: #ffffb3;
padding: 1em;
margin-bottom: 2em;
max-width: 80vw;
border: solid gray;
border-radius: .3rem;
margin: 0 auto;`;

eh_div.style.cssText = style;

var content = document.createTextNode(`${JSON.stringify(data)}`);
eh_div.appendChild(content);

eh_div.innerHtml = "Hello!";
document.body.prepend(eh_div);















</script>


</body>
</html>



<!--- --- ---

Notes:
- N/A-->