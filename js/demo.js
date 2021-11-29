/*
Program Name:   EHW JavaScript ES6 Demo: Add element to DOM (prepend)
File Name:      demo.js
Date Created:   11/29/21
Date Modified:  --
Version:        1.0
Programmer:     Eric L. Hepperle

TAGS:           Eric Hepperle, JavaScript, ES6, DOM Manipulation, Demo

Purpose: 
    HTML/PHP based sandbox to test web code. This is a demo for testing
    JavaScript. The project folder must live on a web server, local or remote.
    
Usage:
    Use with controller.php

Sample results: 

    Tutorial Info:
    - Title: How to Create Photo Gallery Grid with Modal Window Lightbox
    - URL: https://www.youtube.com/watch?v=IPVQeVlw2_E
    - Channel: LearnWebCode

Requires:
	* Browser opened to a YouTube video.
    
Demonstrates:
    * Vanilla JavaScript
    * JavaScript ES6/ECMAScript2015

*/


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



