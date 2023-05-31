<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UT F-8">
    <title>الاخبار</title>

  <style>
    /* Initially, hide the extra text that
      can be revealed with the button */
    #moreText {
      /* Display nothing for the element */
      display: none;  }

  </style>

    <!--  start of the animation button class button -->
<style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #212121;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #800ccc}

.button:active {
  background-color: #76ff03;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
 .j{display: flex;justify-content:center;}
</style>





</head>

<body bgcolor="#fff">
<!--   the lego pealce is here    -->
 <div class="banner-text">


<div class="j"> 

<font class="headline">&nbsp;&nbsp;  تصميم الموقع  &nbsp;&nbsp;</font>

<p>&nbsp;</p>

</font> 

 </div>

<p>&nbsp;</p>

<div style="display: flex;justify-content: center;">
<video  width="800" height="400"  id="video1" controls="controls" style="
border-radius: 2rem;">
<source src="videos/SVO.mp4" type="video/mp4">
</video> 
</div>

<p>&nbsp;</p>



<div style="display: flex;justify-content: center;">

<span id="points">...</span>
<p>&nbsp;</p>
<p> 

<button style="--color:#800ccc;--slant:.5em;--border:2px"  onclick="pause()" >Pause </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<button style="font-size: 1cm; --color:#800ccc;--slant:.5em;--border:2px"  onclick="play()" >Play</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<button style="--color:#800ccc;--slant:.5em;--border:2px" onclick="muteUnMute()">Mute</button>

</p>
</div>

    <!-- Define the text that would be
      hidden by default and only shown
      when clicked on the button -->
    <span id="moreText"> 
      <font size="6"    color="black" style="text-align: center;" >
      

         <!--  nows that arpic song name is from right to lift that means
          * is last thing you write and
          -: well be the first -->

<!--************************* hidden text**************************** -->  

‎

‎

‎
<ul>         
تم تصميم الموقع في هذه السنه 

‎</ul>
<p>
  <p>&nbsp; </p>
<ul>         
IT علي يد فريق قسم  

‎</ul>
<p>
  <p>&nbsp; </p>
<ul>         
في  منظمة شباب متطوعين السودان

‎</ul>




 </font>  
    </span>
  </p>

<!--************************* end hidden text******************************** -->  


  


  <!-- ******************************************************* -->


  <script> 
var myVideo=document.getElementById("video1"); 

function play()
{ 
    
    myVideo.play(); 

} 

function muteUnMute()
{ 
    if( !myVideo.muted)
 myVideo.muted='muted';
else

myVideo.muted=false;
} 
function pause() {
  myVideo.pause();
  // body...
}

</script> 
<!-- ******************************************************************************-->




    <!-- the buttom is make the page size so big it an isue   -->


<p>&nbsp; </p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <button 
   onclick="toggleText()"
   id="textButton" 
    style="font-size: 1cm; --color:#00ff23;--slant:.5em;--border:2px"> 
    <font  face="Cooper"  >
      <b>
    
    عرض الاخبار 


    </b>
  </font>
  </button>

   



    <script>
    function toggleText() {

      // Get all the elements from the page
      var points =
        document.getElementById("points");

      var showMoreText =
        document.getElementById("moreText");

      var buttonText =
        document.getElementById("textButton");

      // If the display property of the dots
      // to be displayed is already set to
      // 'none' (that is hidden) then this
      // section of code triggers
      if (points.style.display === "none") {

        // Hide the text between the span
        // elements
        showMoreText.style.display = "none";

        // Show the dots after the text
        points.style.display = "inline";

        // Change the text on button to
        // 'Show More'
        buttonText.innerHTML = "عرض الاخبار ";
      }

      // If the hidden portion is revealed,
      // we will change it back to be hidden
      else {

        // Show the text between the
        // span elements
        showMoreText.style.display = "inline";

        // Hide the dots after the text
        points.style.display = "none";

        // Change the text on button
        // to 'Show Less'
        buttonText.innerHTML = "اخفاء الاخبار";
      }
    }
  </script>

  </div>


   <p>&nbsp;</p>
<p>&nbsp;</p>
<div class="j">
<a href="#"> <button style="--color:#00f0ff;--border:2px;--slant:.5em;font-size:35px;" >
   أتصل بنا      </button></a>&nbsp;&nbsp;


<a href="#"> <button style="--color:#d6ff00;--border:2px;--slant:.5em;font-size:35px;">
   العروض      </button></a>&nbsp;&nbsp;

   <a href="#"> <button style="--color:#f3738a;--border:2px;--slant:.5em;font-size:35px;">
   الخدمات      </button></a>&nbsp;&nbsp;

<a href="#"> <button style="--color:#69db3a;--slant:.5em;--border:2px;font-size:35px;">  عن المنظمة    </button></a>&nbsp;&nbsp;

<a href="#"> <button style="--color:#800ccc;--slant:.5em;--border:2px;font-size:35px;">     الرئيسية     </button></a>&nbsp;&nbsp;  
</div>


</body>
</html>
    
