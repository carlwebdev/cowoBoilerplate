<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/master_en.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<? include('config/head_top.php'); ?>
<? include('config/config.php'); ?>
<!-- InstanceBeginEditable name="config" -->
<!-- InstanceEndEditable -->
<? include('config/seo.php'); ?>
<? include('config/head_bottom.php'); ?> 

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>
<body>
<div id="page">
  <div id="w_headroom" class="headroom">
	<? include('components/dev/github.php'); ?> 
  <? include('components/cookies.php'); ?> 
	<? include('components/dev/dev_ruler.php'); ?>
	<? include('components/header.php'); ?> 
  </div> <!-- /w_headroom -->  
  <div id="content">
    <div class="frame">
    <!-- InstanceBeginEditable name="content" -->


<br>
<br>
<br>
<br>
<br>


<section>  

  <div class="m_htmleditor">	
    <h1>UI</h1>
  </div> <!-- /m_htmleditor --> 
  
  <div class="m_htmleditor">	
    <h2>Buttons</h2>
  </div> <!-- /m_htmleditor --> 
    
  <div class="frontWrapper_section">
      <?php /*?><div class="frontWrapper_sectionTitle">'cause we all like buttons</div><?php */?>
      <div class="frontWrapper_sectionContent">
      
          <div class="buttonBig">Big Button</div>
          <div class="buttonMedium">Medium Button</div>
          <div class="buttonSmall">Small Button</div>        
      
      </div>
  </div>
  
  
  <div class="m_htmleditor">	
    <h2>Forms</h2>
    <h3>Case : Generic</h3>
  </div> <!-- /m_htmleditor --> 
  
  
    
    <div class="frontWrapper_section">
        <div class="frontWrapper_sectionContent">
 

            <form>
 
                <div class="formLine">  
                    <label>Text</label>
                    <input type="text" placeholder="Text">
                </div> 
                
                <div class="formLine">                      
                    <label>Password</label>
                    <input type="password" value="password">
                </div> 
               
           
                <div class="formLine">
                	<label>Select an option</label>                      
                    <select name="cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>                
                 
                <div class="formLine">
                	<label>Select with option groups</label>                      
                    <select>
                      <optgroup label="Swedish Cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                      </optgroup>
                      <optgroup label="German Cars">
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </optgroup>
                    </select>
                </div> 
                                 
                <div class="formLine">                    
                    <label>Textarea</label>
                    <textarea name="description" placeholder="Textarea"></textarea>
                </div>
                   
                <div class="formLine">  
                    <label>Checkbox</label><br>
                    <input type="checkbox" id="lable_whatever"/> <label for="lable_whatever" />Checkbox</label>
                </div>
                                 
                <div class="formLine">  
                    <label>Radio Boxes</label><br>
                    <input type="radio" name="whatever" id="radio_1"/> <label for="radio_1" />radio_1</label>  
                    <input type="radio" name="whatever" id="radio_2" checked="checked"/> <label for="radio_2" />radio_2</label>                    
                </div>
                                                                    
                <div class="formLine">
                    <label>File</label>
                    <input type="file">
                </div>                        
                 
                <div class="formLine"> 
                    <input type="submit" value="Submit">
                </div>
                
                <div class="formLine"> 
                    <input type="reset" value="Reset">
                </div>

                <div class="formLine"> 
                	<label>Button</label>
                    <br>
                    <button type="button" onclick="alert('Hello World!')">Click Me!</button>
                </div>
                
                
                <div class="formLine">
	                <label>Datalist</label>
                    <br>
                    <input list="browsers" name="browser">
                    <datalist id="browsers">
                      <option value="Internet Explorer">
                      <option value="Firefox">
                      <option value="Chrome">
                      <option value="Opera">
                      <option value="Safari">
                    </datalist>
                
                </div>





                <div class="formLine"> 
                	<label>Keygen</label>
                </div>
                
                
                
                
                <div class="formLine"> 
                	<label>Number (requires validation...)</label>
                    <br>
                    <input type="number" name="quantity" min="1" max="5">
                </div>
                
                
                                


                <div class="formLine"> 
                	<label>Date</label>
                    <br>
                    <input type="date">
                    
                    
                    <br>
<br>

                    
Enter a date before 1980-01-01:<br>
<input type="date" name="bday" max="1979-12-31"><br><br>
Enter a date after 2000-01-01:<br>
<input type="date" name="bday" min="2000-01-02"><br><br>  
                  
                </div>
                
                
 
                <div class="formLine"> 
                	<label>Color</label>
                    <br>
                    <input type="color" name="favcolor" value="#ff0000">
                </div>
                
 
                <div class="formLine"> 
                	<label>Range (slider)</label>
                    <br>
                    <input type="range" name="points" min="0" max="10">
                </div>
                        
  
<br>
<br>
<br>  
  for css - tip - define stuff generically for all inputs with input of course, no cal types a no ser que luego si.<br>
<br>
<br>
              
                
<br>
<br>



								<div class="frontWrapper_sectionTitle">TIME & DATE STUFF !!!!</div>

                <div class="formLine"> 
                	<label>Time</label>
                    <br>
                    <input type="time" name="usr_time">
                </div>
                <div class="formLine"> 
                	<label>Month ((month and year))</label>
                    <br>
                    <input type="month" name="bdaymonth">
                </div>
                <div class="formLine"> 
                	<label>Color</label>
                    <br>
                    <input type="color" name="favcolor" value="#ff0000">
                </div>
            </form>
            
            
        </div>
    </div>
    

</section>  
              



<section>  



  <div class="m_htmleditor">	
    <h2>Web interactivity</h2>
  </div> <!-- /m_htmleditor -->
  
  
  <div class="m_htmleditor">	
    <h3>Tabs</h3>
    <p>Buck Wilson's lightbox.me.js - a responsive lightbox</p>
  </div> <!-- /m_htmleditor -->
  
  <div class="frontWrapper_section">
      <div class="frontWrapper_sectionContent"><a href="http://papermashup.com/simple-jquery-tabs/" target="_blank">SOURCE</a></div>
  </div>
  
     
	

         

        <div id="tabs">
            <div class="jq_tabsMenu">
                  <ul>
                      <li><a href="#tab-1">Tab 1</a></li> <!-- anchor link -->
                      <li><a href="#tab-2">Tab 2</a></li> <!-- anchor link -->
                      <li><a href="#tab-3">Tab 3</a></li> <!-- anchor link -->
                      <li><a href="#tab-4">Tab 4</a></li> <!-- anchor link -->
                  </ul> 
            </div>
            <div class="tab" id="tab-1"> <!-- name is just anchor target -->         
              Tab 1	
            </div> <!-- /a tab --> 
            <div class="tab" id="tab-2"> <!-- name is just anchor target -->
              Tab 2
            </div> <!-- /a tab --> 
            <div class="tab" id="tab-3"> <!-- name is just anchor target -->
              Tab 3
            </div> <!-- /a tab -->  
            <div class="tab" id="tab-4"> <!-- name is just anchor target -->
              Tab 4 
              </div> <!-- /a tab -->              
        </div> <!-- /tabs --> 



<br>
<br>
<br>
<br>
<br>


	<div id="frontWrapper_header">Accordion</div>
    <div class="frontWrapper_section">
        <div class="frontWrapper_sectionTitle">UNDER CONSTRUCTION</div>
        <?php /*?><div class="frontWrapper_sectionContent">check it out!</div><?php */?>
    </div>
    
   

<div id="accordion_wrapper">
    
    <div class="accordion_item" id="accordion-1">         
        <div class="accordion_top">       
            TITLE 1
        </div> 
        <div class="accordion_bottom">       
            CONTENT
        </div>     
    </div>    
    
    <div class="accordion_item" id="accordion-2">       
        <div class="accordion_top">        
            TITLE 2
        </div> 
        <div class="accordion_bottom">        
            CONTENT
        </div>     
    </div> 
    
    <div class="accordion_item" id="accordion-3">       
        <div class="accordion_top">        
            TITLE 3
        </div> 
        <div class="accordion_bottom">        
            CONTENT
        </div>     
    </div> 
    
    <div class="accordion_item" id="accordion-4">       
        <div class="accordion_top">        
            TITLE 4
        </div> 
        <div class="accordion_bottom">        
            CONTENT
        </div>     
    </div>  
                                                                  
</div> <!-- /accordion_wrapper --> 





<br>
<br>
<br>
<br>
<br>



  
	<div id="frontWrapper_header">Dropdown</div>
    <div class="frontWrapper_section">
        <div class="frontWrapper_sectionTitle">UNDER CONSTRUCTION</div>
        <?php /*?><div class="frontWrapper_sectionContent">check it out!</div><?php */?>
    </div>
    

    
    
    
          <div id="genericDropdownContainer">  
          
          
              <div class="genericDropdownItem jq_dropdown">         
                  <div class="genericDropdownItem_top jq_dropdown_shown">
                      CONTENT
                      <div class="genericDropdownItem_top_trigger jq_dropdown_trigger">OPEN</div>     
                  </div> <!-- /genericDropdownItem_top -->
                  <div class="genericDropdownItem_bottom jq_dropdown_hidden">  
                      MORE CONTENT
                  </div> <!-- /genericDropdownItem_bottom -->                 
              </div> <!-- /genericDropdownItem --> 
          
          
          
          
          
          </div> <!-- /genericDropdownItem --> 







<br />
<br />
<br />





	<div id="frontWrapper_header">Grid - List functionality</div>
    <div class="frontWrapper_section">
        <div class="frontWrapper_sectionTitle">UNDER CONSTRUCTION</div>
        <div class="frontWrapper_sectionContent">check it out!</div>
    </div>
    
    
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>



<style type="text/css">
.w_gridlist ul { list-style: none; }
.w_gridlist .buttons { margin-bottom: 20px; }
.w_gridlist .is-list li { width: 100%; border-bottom: 1px dotted #CCC; margin-bottom: 10px; padding-bottom: 10px; }

.w_gridlist .is-grid ul { 
/* overflow: hidden; */
 }

.w_gridlist .is-grid li { float: left; width: 20%; height: 50px; border-right: 1px dotted #CCC; border-bottom: 1px dotted #CCC; padding: 20px; }
</style>

<!-- <script src="jquery-1.7.2.min.js"></script> -->
<script>
$(document).ready(function(){
	$('button').click(function() {
		if ($(this).hasClass('grid')) {
			$('#container ul').removeClass('is-list').addClass('is-grid');
		}
		else if($(this).hasClass('list')) {
			$('#container ul').removeClass('is-grid').addClass('is-list');
		}
	});
});	
</script>

    
    
    
    

<div class="w_gridlist">


    <div class="buttons">
        <button class="grid">Grid View</button>
        <button class="list">List View</button>
    </div>
    
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>

    
    <ul class="is-list">
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
        <li>Item 4</li>
        <li>Item 5</li>
        <li>Item 6</li>
        <li>Item 7</li>
    </ul>
</div>  
    
    
    
    
    

<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>

          

	<div id="frontWrapper_header">Lightbox</div>
    <div class="frontWrapper_section">
        <div class="frontWrapper_sectionTitle">Buck Wilson's lightbox.me.js - a responsive lightbox</div>
        <div class="frontWrapper_sectionContent"><a href="http://buckwilson.me/lightboxme/" target="_blank">SOURCE</a></div>
    </div>
    

		<div class="lightboxme_trigger">Open Lightbox</div>
        
    <div class="lightboxme_content">
    
        <div id="close_wrapper">
            <div class="close">x</div> 
        </div> 
                                   
				<p><?php include('components/dev/lorem/lorem.php'); ?> <?php include('components/dev/lorem/lorem.php'); ?></p>
        
    </div>  
    
    
    
</section>  


        
<section>  
    




	<div id="frontWrapper_header">Slideshow</div>
    <div class="frontWrapper_section">
        <div class="frontWrapper_sectionTitle">frontWrapper_sectionTitle</div>
        <div class="frontWrapper_sectionContent">frontWrapper_sectionContent</div>
    </div>
    

	<div id="frontWrapper_header">Carrousel</div>
    <div class="frontWrapper_section">
        <div class="frontWrapper_sectionTitle">frontWrapper_sectionTitle</div>
        <div class="frontWrapper_sectionContent">frontWrapper_sectionContent</div>
    </div>
    



   
   
   
   
</section>  




    
    
<section>      
    
	<div id="frontWrapper_headerMega">Responsive jQuery Plugins</div>




	<div id="frontWrapper_header">FitVids.js</div> 
    <div class="frontWrapper_section">
        <div class="frontWrapper_sectionTitle">'cause videos want to be responsive too</div>
        <div class="frontWrapper_sectionContent"><a href="http://fitvidsjs.com/" target="_blank">SOURCE</a></div>
    </div>  
   
    
        <style>

          .fitvids_container {
            width: 50%; 
						margin:0px auto;
            /*
						padding: 5%;
            
            background:#fff;
            box-shadow: 0 5px 5px rgba(0,0,0,0.5);
						*/
          }

          .fitvids_container iframe {
            width: 100%;
						/* height:auto; */
          }
		  
		  
        </style>
        
        
            
    
    <div class="fitvids_container">
          <iframe width="1600px" height="900px" src="http://www.youtube.com/embed/sVOCMiufyW4" frameborder="0" allowfullscreen></iframe>
    </div> <!-- /fitvids_container -->
                  
                  
                  
                  

	<div id="frontWrapper_header">Backstretch.js</div> 
    <div class="frontWrapper_section">
        <div class="frontWrapper_sectionTitle">frontWrapper_sectionTitle</div>
        <div class="frontWrapper_sectionContent">frontWrapper_sectionContent</div>
    </div> 
    
    
    
    
    
    
    
</section>     
    
    
   



    <p>Insert content here.</p>
        
    HTML5 document<br>
    http://dev.w3.org/html5/html-author/<br>
    http://dev.w3.org/html5/html-author/#basic-templates<br>
    <br />
    This is Simple: HTML: The most basic template recommended for most authors.<br>

    <img src="images/image.jpg" alt="" height="100px"> 

<br>
<br>
<br>
<br>
<br>


<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<script>

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var img=document.getElementById("scream");
ctx.drawImage(img,10,10);

</script>


<br>
<br>



<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="190">
  <polygon points="100,10 40,180 190,60 10,60 160,180"
  style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;">
</svg>



<br>

<!-- HTML5 Video -->
<!-- http://www.w3schools.com/html/html5_video.asp -->
<video width="320" height="240" controls="controls">
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  <source src="movie.webm" type="video/webm">
Your browser does not support the video tag.
</video>

<br>
<br>


<!-- HTML5 Audio -->
<!-- http://www.w3schools.com/html/html5_audio.asp -->
<audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="horse.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>



<!-- HTML5 Drag n' Drop !!! -->
<!-- make element draggable with : draggable="true" -->
<script>
function allowDrop(ev)
{
ev.preventDefault();
}

function drag(ev)
{
ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev)
{
ev.preventDefault();
var data=ev.dataTransfer.getData("Text");
ev.target.appendChild(document.getElementById(data));
}
</script>

<p>Drag the W3Schools image into the rectangle:</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag1" src="img_logo.gif" draggable="true" ondragstart="drag(event)" width="336" height="69">

<br>
<br>
<br>
<br>
<br>


GEOLOCALIZATION DEMO

<!-- HTML5 Geolocalization !!! -->
<p id="demo">Click the button to get your position:</p>
<button onclick="getLocation()">Try It</button>
<div id="mapholder"></div>
<script>
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }

function showPosition(position)
  {
  var latlon=position.coords.latitude+","+position.coords.longitude;

  var img_url="http://maps.googleapis.com/maps/api/staticmap?center="
  +latlon+"&zoom=14&size=400x300&sensor=false";
  document.getElementById("mapholder").innerHTML="<img src='"+img_url+"'>";
  }

function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML="The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="An unknown error occurred."
      break;
    }
  }
</script>



<br>
<br>
<br>
<br>
<br>


HTML5 INPUT TYPES
<!-- HTML5 INPUT TYPES ------------------------------------ -->


<pre><code>
HTML5 New Input Types
HTML5 has several new input types for forms. These new features allow better input control and validation.

This chapter covers the new input types:

color
date
datetime
datetime-local
email
month
number
range
search
tel
time
url
week
</code></pre>


<!-- HTML5 Input type color ------------------------------------ -->

color - para la web de quim !!!!!!!
<form action="demo_form.asp">
  Select your favorite color: <input type="color" name="favcolor"><br>
  <input type="submit">
</form>

<br>
<br>
<br>


date
<form action="demo_form.asp">
  Birthday: <input type="date" name="bday">
  <input type="submit">
</form>



datetime ?????
<form action="demo_form.asp">
  Birthday (date and time): <input type="datetime" name="bdaytime">
  <input type="submit">
</form>




datetime-local
<form action="demo_form.asp">
  Birthday (date and time): <input type="datetime-local" name="bdaytime">
  <input type="submit">
</form>




email (VALIDATION !!!)
<form action="demo_form.asp">
  E-mail: <input type="email" name="usremail"><br>
  <input type="submit">
</form>


month
<form action="demo_form.asp">
  Birthday (month and year): <input type="month" name="bdaymonth">
  <input type="submit">
</form>



number
<form action="demo_form.asp">
  Quantity (between 1 and 5): <input type="number" name="quantity" min="1" max="5">
  <input type="submit">
</form>




range







search





tel






time





url




week













             

<!-- InstanceEndEditable -->
    </div> <!-- /frame --> 
  </div> <!-- /content -->            
	<? include('components/footer.php'); ?>
  
<? include "components/side_menu.php"; ?>    
</div> <!-- /page -->
<? include('config/scripts.php'); ?>
<!-- InstanceBeginEditable name="scripts" -->










<!-- jQuery PLugin - RWD - Videos - FitVids.js -->
<script src="js/plugins/fitvids/jquery.fitvids.js"></script>
<script>
$(".fitvids_container").fitVids(); 
</script>





<script src="js/custom/cowo_tabs.js"></script>
<script src="js/custom/cowo_accordion.js"></script>
<script src="js/custom/cowo_dropdown.js"></script>

<!-- jQuery PLugin - RWD - Lightbox -->
<script src="js/plugins/jquery.lightbox_me.js"></script>
<script src="js/custom/lightboxme.js"></script>

<!-- jQuery UI - Accordion -->
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
$(function() {
	$( "#accordionxx" ).accordion();
});
</script>   










<!-- InstanceEndEditable -->
<? include('config/credits.php'); ?>  
</body>
<!-- InstanceEnd --></html>