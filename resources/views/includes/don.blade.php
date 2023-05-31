<!DOCTYPE html>
<html>
<head>
	<title>التبرعات</title>

	<style type="text/css">
		 .jjj{display: flex;justify-content:center; }
     .noneline{text-decoration: none; color:yellow;}
    .noneline:hover{text-decoration: underline; color:red;}

    .aaasss{display: flex;justify-content:center; align-items: center;}
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
</head>
<body bgcolor="#fff">

<p>&nbsp; </p>
<div class="jjj">
<font class="headline">  للمساهمة الرجاء ارسال المبلغ الى احد الحسابات التالية    </font>
</div>
<p>&nbsp; </p>


<div class="jjj" >
<img src="donate/1.jpg" height="100" width="590"  style="border-top-left-radius:3rem;border-bottom-left-radius:3rem;   ">
<img src="donate/2.jpg" height="100" width="590"  style="border-top-right-radius:3rem;border-bottom-right-radius:3rem; " >
</div>




<p>&nbsp; </p>
<p>&nbsp; </p>
<p>&nbsp; </p>
<div class="jjj">
<font class="headline">
	
      لمشاهدة التبرعات ومزيد من مشاريع استثمار المنظمة            <a class="noneline"  href="the-news">أضغط هنا</a>


 </font>
</div>
<p>&nbsp; </p>
<p>&nbsp; </p>
<p>&nbsp; </p>




<div class="jjj">
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