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
#ehw-content {
    min-height: 20px;
    background: rgb(255, 255, 179);
    padding: 1em;
    max-width: 1024px;
    width: 80vw;
    border: solid gray;
    border-radius: 0.3rem;
    margin: 0px auto;
    margin-bottom: 1em;
    box-shadow: 2px 2px 2px 1px lightgrey;    
}
#ehw-content h4 {
    margin-top: 0;
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
<h3>PURPOSE:</h3>

<p>This is a demo showing that Eric L Hepperle knows how to add an element to the top of the DOM.</p>

<h3>STEPS:</h3>

<p>These are the steps to prepend a div to the body. Note that prepending adds to top of page, whereas appending adds to bottom of page.</p>

<ol>
	<li>Define JSON object</li>
	<li>Create new DIV element</li>
	<li>Add id "ehw-content" to div</li>
	<li>Create text node</li>
	<li>Add text node to div (appendChild)</li>
	<li>Prepend div to body</li>
</ol>

</div>

<!-- Code Section Template
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


const autos = {
    "cars": [
        {
            "make": "Ford",
            "model": "Mustang",
            "year": 1979,
        },
        {
            "make": "Ford",
            "model": "Fiesta",
            "year": 1987,
        },
        {
            "make": "Chevy",
            "model": "Malibu",
            "year": 1979,
        },
    
    ],
    "trucks": [
        {
            "make": "Ford",
            "model": "Mustang",
            "year": 1979,
        },
        {
            "make": "Ford",
            "model": "Fiesta",
            "year": 1987,
        },
        {
            "make": "Chevy",
            "model": "Malibu",
            "year": 1979,
        },    
    ],
}

data = autos;


// create new element
eh_div = document.createElement('div');

// give class to element
eh_div.id = "ehw-content";

// define content to display
var content =`${JSON.stringify(data)}`;

// create a text node
var text_node = document.createTextNode("hello");

// add text node to div
eh_div.appendChild(text_node);

// eh_div.innerHtml = "Hello!";

// add div to body
document.body.prepend(eh_div);

// ----- Change Div Contents ---

// define our content element handle
const cont_el = document.querySelector('#ehw-content');

// change content text
cont_el.innerHTML = "<h4>Stringified JSON data</h4>";
cont_el.innerHTML += content;

// loop through and print out json data
/*
function appendData(data) {
  var mainContainer = document.getElementById("myData");
  for (var i = 0; i < data.length; i++) {
    var div = document.createElement("div");
    div.innerHTML = 'Name: ' + data[i].firstName + ' ' + data[i].lastName;
    mainContainer.appendChild(div);
  }
}
*/

// not working with foreach yet ...
function formatJSONAutos_01(obj) {
    
    let keys = Object.keys(obj);
    console.log(`keys: ${keys}`);
    
    for (let i=0; i < keys.length; i++) {
        let p = document.createElement('p');
        console.log(obj[i]);
    }
}


formatJSONAutos_01(data);










</script>


</body>
</html>



<!--- --- ---

Notes:
- N/A-->