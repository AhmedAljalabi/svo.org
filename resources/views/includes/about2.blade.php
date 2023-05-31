<!DOCTYPE html>
<html>
<head>
  <title>page</title>
</head>
<body>
  <style type="text/css">
    .aaasss{display: flex;justify-content:center; align-items: center;  }
    .i{display: grid; place-items:center;}
    .j{display: flex;justify-content:center;}
    .ttt{  direction: rtl; unicode-bidi: bidi-override;   text-align: center; }

button {
  --border: 5px;    /* the border width */
  --slant: 0.7em;   /* control the slanted corners */
  --color: #37E8FC; /* the color */
  
  font-size: 35px;
  padding: 0.4em 1.2em;
  border: none;
  cursor: pointer;
  font-weight: bold;
  color: var(--color);
  background: 
     linear-gradient(to bottom left,var(--color)  50%,#0000 50.1%) top right,
     linear-gradient(to top   right,var(--color)  50%,#0000 50.1%) bottom left;
  background-size: calc(var(--slant) + 1.3*var(--border)) calc(var(--slant) + 1.3*var(--border));
  background-repeat: no-repeat;
  box-shadow:
    0 0 0 200px inset var(--s,#0000),
    0 0 0 var(--border) inset var(--color);
  clip-path: 
      polygon(0 0, calc(100% - var(--slant)) 0, 100% var(--slant),
              100% 100%, var(--slant) 100%,0 calc(100% - var(--slant))
             );
  transition: color var(--t,0.3s), background-size 0.3s;
}
button:focus-visible {
  outline-offset: calc(-1*var(--border));
  outline: var(--border) solid #000c;
  clip-path: none;
  background-size: 0 0;
}
button:hover,
button:active{
  background-size: 100% 100%;
  color: #fff;
  --t: 0.2s 0.1s;
}
button:active {
  --s: #0005;
  transition: none;
}






  </style>


<div class="j"> 

<font class="headline"> &nbsp; &nbsp;   عن المنظمة    &nbsp;&nbsp;  </font>



</div>
<p>&nbsp;</p>

  <div class="aaasss ">
<img src="images2/1.jpg" align="bottom" height="100" width="400" style="border-radius: 10rem; border:1px solid #ccc; border-style:outset; border-width:15px 15px;"  > 
</div>
<p>&nbsp;</p>
<div class="j">
<div class="headlineblue">
<b>
<font face="arial" style="color:blue ; font-size:50px;">s</font><font face="arial" style="color:blue;font-size:25px;">udan</font>
<font face="arial" style="color:#ffff00 ;font-size:50px;">v</font><font face="arial" style="color:#ffff00 ;font-size:25px;">ulnteer</font>

<font face="arial" style="color:green; font-size:50px;">o</font><font face="arial" style="color:green; font-size:25px;">rganizatoin </font>

</b>

  </div>
</div>
  
<b>
  <div class="j"  >
  

<font class="ttt" face="arial" style="color:gray; font-size:20px;">
<p>&nbsp;</p>

المنظمة هي منظمة تطوعية لا ربحية ,منها ما يعمل ضمن نطاق الاجتماعي و هي مصممة 
لكي تترك اثرا ايجابيا علي المجتمع <br>تنتشر في النظم ‏الديمقراطية، وتشجع الحكومات على عملها والقيام بنشاطها،فهي 
تقوم بمجالات مكملة لمجهودات الحكومة على مستوى المحافظة<br> وعلى مستوى المدينة ‏والقرية. 
الجمعيات التطوعية تنظمها مجموعات أهلية مستقلة عن الحكومة بغرض مساعدة الاخرين


</font>
  </div>
<br>&nbsp;
<div class="j"> 
<font face="arial" style="color:black; font-size:15px;">Made By &nbsp;</font><font face="arial" style="color:green; font-size:15px;"> abdulrahim</font>
</div>

</b>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="j">
<a href="#"> <button style="--color:#00f0ff;--border:2px;--slant:.5em">
   أتصل بنا      </button></a>&nbsp;&nbsp;


<a href="#"> <button style="--color:#d6ff00;--border:2px;--slant:.5em">
   العروض      </button></a>&nbsp;&nbsp;

   <a href="#"> <button style="--color:#f3738a;--border:2px;--slant:.5em">
   الخدمات      </button></a>&nbsp;&nbsp;

<a href="#"> <button style="--color:#69db3a;--slant:.5em;--border:2px">  عن المنظمة    </button></a>&nbsp;&nbsp;

<a href="#"> <button style="--color:#800ccc;--slant:.5em;--border:2px">     الرئيسية     </button></a>&nbsp;&nbsp;  
</div>
<p>&nbsp;</p>



</body>
</html>