<?php 
/*
 * HTML / PHP
 * Dev . Sample Text HTML-editor  -- - TAGS    - - -htmleditor_aggregate ... 
 
 1 - BUILD SASS PARTIAL TO TAKE CARE OIF HTML TAGS, LKEEP IT INSIED ETYPOGRAPHGY FODER BEACUSE WHY NOT..
 
 
 */ 
?>


<h2>HTML Tags aka elements</h2>


index:<br>
1) text<br>
2) code<br>
3) minor layout funcionalities<br>
<br>
<br>






<h3>HTML Tags - text-related</h2>


  <h4>abbr</h4>
  <p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>

<hr>


  <h4>cite</h4>

  <p><cite>The Scream</cite> by Edward Munch. Painted in 1893.</p>


<hr>

  <h4>q</h4>

  <p>WWF's goal is to: 
  <q>Build a future where people live in harmony with nature.</q>
  We hope they succeed.</p>

<hr>

  <h4>s</h4>

  <p><s>Only 50 tickets left!</s></p>
  <p>SOLD OUT!</p>


<hr>









<h3>HTML Tags - code-related</h2>


  <h4>kbd</h4>

  <p>Press <kbd>Ctrl</kbd> + <kbd>C</kbd> to copy text (Windows).</p>
  
<hr>

  <h4>code</h4>

  <p>The HTML <code>button</code> tag defines a clickable button.</p>

  <p>The CSS <code>background-color</code> property defines the background color of an element.</p>


<hr>

  <h4>pre</h4>

  <pre>
  Text in a pre element
  is displayed in a fixed-width
  font, and it preserves
  both      spaces and
  line breaks
  </pre>

<hr>

  <h4>samp</h4>

  <p>Message from my computer:</p>

  <p><samp>File not found.<br>Press F1 to continue</samp></p>

<hr>





<?php /*?>
Most browsers will display the <pre> element with the following default values:

pre {
  display: block;
  font-family: monospace;
  white-space: pre;
  margin: 1em 0;
}


<?php */?>



<br>
<br>
<br>
<br>


<h3>HTML - minor layout related tags</h2>


<h4>Description List</h3>
<dl>
  <dt>Coffee</dt>
  <dd>Black hot drink</dd>
  <dt>Milk</dt>
  <dd>White cold drink</dd>
</dl>




<h4>Details & summary<?php /*?>The summary element aka dropdown <?php */?></h4>

<details>
  <summary>Epcot Center</summary>
  <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
</details>





<br>
<br>
<br>
<br>
<br>
<br>
<br>





<h3>OTHER HTML TAGS (to fomrat text basically, & some etc functionalities</h3>














<?php /*?>The <code> tag is used to define a piece of computer code. The content inside is displayed in the browser's default monospace font.
  
  <?php */?>
  
  
  
<?php /*?><samp>	Defines sample output from a computer program
<kbd>	Defines keyboard input
<var>	Defines a variable
<pre>	Defines preformatted text<?php */?>
  
  
<p>Do not forget to buy <mark>milk</mark> today.</p>






















<br>
<br>
PICTURE ELEMENT !!

<picture>
  <source media="(min-width:650px)" srcset="img_pink_flowers.jpg">
  <source media="(min-width:465px)" srcset="img_white_flower.jpg">
  <img src="img_orange_flowers.jpg" alt="Flowers" style="width:auto;">
</picture>

  

<q>Build a future where people live in harmony with nature.</q>
We hope they succeed.</p>


<!--
!!! q tag !!! is quote, vs the blckquote !! check depercation ... 
-->






<?php /*?>there ara ashitload of tags i w3schools to learn frm !!!<?php */?>