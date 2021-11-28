<?php // Define vars:
$page_title = "EHW JavaScript ES6 SANDBOX";

?>

<!--
Project Name:   EHW JavaScript ES6 SANDBOX 
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
// Let, arrow func, foreEach

let add = (a, b) => a + b;

const test = [
    [10, 20],
    [9, 3],
    [7, 12]
];

test.forEach(function(val, i) {
    let msg = `val_1: ${val[0]}` + '\t' +  `val_2: ${val[1]}`;
    msg += '\t' + `add = ${add(val[0], val[1])} `;
    console.log(msg)
});
</pre>
<hr>
</section>


<section class="ehw-code">
<h3>TopTal/Codility Code Test: ES6 - Problem 1</h3>
<p>There is a forum that has a limit of K characters per entry. In this task your job is to implement an algorithm for cropping messages that are too long. You are given a message, consisting of English alphabet letters and spaces, that might be longer than the limit. Your algorithm should crop a number of words from the end of the message, keeping in mind that:</p>
<blockquote><ul style="margin: 10px;padding: 0px;"><li>it may not crop away part of a word;</li>
<li>the output message may not end with a space;</li>
<li>the output message may not exceed the K-character limit;</li>
<li>the output message should be as long as possible.</li>
</ul>
</blockquote><p>This means that, in some cases, the algorithm may need to crop away the entire message, outputting an empty string.</p>
<p>For example, given the text:</p>
<p>"<tt style="white-space:pre-wrap">Codility We test coders</tt>"</p>
<p>With K = 14 the algorithm should output:</p>
<p>"<tt style="white-space:pre-wrap">Codility We</tt>"</p>
<p>Note that:</p>
<blockquote><ul style="margin: 10px;padding: 0px;"><li>the output "<tt style="white-space:pre-wrap">Codility We te</tt>" would be incorrect, because the original message is cropped through the middle of a word;</li>
<li>the output "<tt style="white-space:pre-wrap">Codility We </tt>" would be incorrect, because it ends with a space;</li>
<li>the output "<tt style="white-space:pre-wrap">Codility We test coders</tt>" would be incorrect, because it exceeds the K-character limit;</li>
<li>the output "<tt style="white-space:pre-wrap">Codility</tt>" would be incorrect, because it is shorter than the correct output.</li>
</ul>
</blockquote><p>Write a function</p>
<blockquote><p style="font-family: monospace; font-size: 9pt; display: block; white-space: pre-wrap"><tt>function solution(message, K);</tt></p></blockquote>
<p>which, given a message and an integer K, returns the message cropped to no more than K characters, as described above.</p>
<p><b>Examples:</b></p>
<p>1. Given message = "<tt style="white-space:pre-wrap">Codility We test coders</tt>" and K = 14, the function should return "<tt style="white-space:pre-wrap">Codility We</tt>".</p>
<p>2. Given message = "<tt style="white-space:pre-wrap">Why not</tt>" and K = 100, the function should return "<tt style="white-space:pre-wrap">Why not</tt>".</p>
<p>3. Given message = "<tt style="white-space:pre-wrap">The quick brown fox jumps over the lazy dog</tt>" and K = 39, the function should return "<tt style="white-space:pre-wrap">The quick brown fox jumps over the lazy</tt>".</p>
<p>4. Given message = "<tt style="white-space:pre-wrap">To crop or not to crop</tt>" and K = 21, the function should return "<tt style="white-space:pre-wrap">To crop or not to</tt>".</p>
<p>Assume that:</p>
<blockquote><ul style="margin: 10px;padding: 0px;"><li>K is an integer within the range [<span class="number">1</span>..<span class="number">500</span>];</li>
<li><tt style="white-space:pre-wrap">message</tt> is a non-empty string containing at most 500 English alphabet letters and spaces. There are no spaces at the beginning or at the end of <tt style="white-space:pre-wrap">message</tt>; also there can't be two or more consecutive spaces in <tt style="white-space:pre-wrap">message</tt>.</li>
</ul>
</blockquote><p>In your solution, focus on <b><b>correctness</b></b>. The performance of your solution will not be the focus of the assessment.</p>
</div>

<h3>My Code with Debugs:</h3>
<pre class="ehw-code">
// you can write to stdout for debugging purposes, e.g.
// console.log('this is a debug message');
// K is a maxlength
// @returns: String
function solution(message, K) {
    // write your code in JavaScript (Node.js 8.9.4)
    
    let out_msg = `message: ${message}` + '\t' + `K: ${K}`;
    console.log(out_msg);
    
    // find out message length in chars
    let msg_len = message.split('').length;
    console.log(`### MESSAGE LENGTH: ${msg_len}`)
    if (msg_len < K){
        return message.trim();
    }
    
    let maxlen_str = message.substring(0, K);
    console.log(`maxlen_str = ${maxlen_str}`);
    
    let max_plus_one = message.split('')[K];
    console.log(`max_plus_one = ${max_plus_one}`)
    
    // if max_plus_one is not a space, then we split a word
    // so find previous occurence of space, then find the previous
    // occurence of a character
    if (max_plus_one === ' ') {
        
        // check if there is another word after
        return maxlen_str.trim();
    } else {
        
        let last_sp = maxlen_str.lastIndexOf(' ');
        console.log(`last space index: ${last_sp} | char ${last_sp} = ${maxlen_str[last_sp]}.`);
        
        let new_maxlen_str = maxlen_str.substring(0, last_sp);
        console.log(`new_maxlen_str = ${new_maxlen_str}`);
        
        
        return new_maxlen_str.trim();
    }

}
</pre>
</section>

</main>

</div><!-- /wrappper -->






<script>

/*
This is Eric Hepperle's examples demonstrating he understands how to use E6
JavaScript.
*/

// Let, arrow func, foreEach

let add = (a, b) => a + b;

const test = [
    [10, 20],
    [9, 3],
    [7, 12]
];

test.forEach(function(val, i) {
    let msg = `val_1: ${val[0]}` + '\t' +  `val_2: ${val[1]}`;
    msg += '\t' + `add = ${add(val[0], val[1])} `;
    console.log(msg)
});


// For-in, For-of

















































</script>


</body>
</html>



<!--- --- ---

Notes:
- N/A-->