<!DOCTYPE html>
<html>
<head>
  <title>SVO</title>
      <meta charset="utf-8">
  <style type="text/css">
    .aaasss{display: flex;justify-content:center; align-items: center;}
    .i{display: grid; place-items:center;}
    .j{display: flex;justify-content:center;}
    .ttt{  direction: rtl; unicode-bidi: bidi-override;   text-align: center; }
    .noneline{text-decoration: none;}


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

<!--************************************photo nav bar***********************************-->

<style type="text/css">
  .kodfun-galeri{
    display: flex;
    height: 20rem;
    gap:1rem;
  }
  .kodfun-galeri > div{
    flex: 1;
    border-radius: 3rem;
    background-position: center;
    background-repeat: no-repeat;
    background-size: auto 100%;
    transition: all .8s cubic-bezier(.25, .4, .45, 1.4);

  }
  .kodfun-galeri > div:hover{
    flex: 5;

  }

.w{color: #800ccc;}




.caption {
  display: block;
  font-family: ;
  font-size: 17px;

  line-height: 25px;
  margin-left: 20px;
  padding: 9px;
  position: relative;
  top: 75%;
  right:5%;
  width: 90%;
  height:15%;
  background-color: #00000080;
  color: #fff;

  border-radius: 1rem;

  opacity: 0.9;

}

.content {
  padding: 40px;
}




.cap {
  display: block;
  font-size: 15px;
  font-style: bold;
  line-height: 30px;
  margin-left: 10px;
  padding: 10px;
  position: relative;
  top: 55%;
  left:  0%;
  right: 0%;
  width: 70%;
  background-color: #000;
  color: #fff;
  border-radius: 2rem;
  opacity: 0.5;
}

.kodfun-galeri > div:hover .cap {
  top: 80%;
  left:15%;
  width:65%;
      opacity: 0.7;
      color:#fff;
      background-color:#800ccc80;
     font-size: 20px;
      
  font-family: impact;
         }

 td:hover {

position: relative;
bottom: 10px;
right: 10px;

}


 td:hover .caption  {

position: relative;
top: 75%;
right: 15px;

      opacity: 0.7;
      color:#fff;
      background-color:#800ccc;
     font-size: 20px;
      
  font-family: impact;
         }
</style>
<!--************************************************************************************  -->



</head>
<body bgcolor="#fff">



<!--************************************ photo nav bar**********************************-->
<div style="position:absolute; width: 300px;left:40%;"><font class="headline"><tt><b>      أبرز الاحداث     </b></tt> </font></div>



<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="kodfun-galeri">
<div style="background-image: url('news/1.jpg');"><p class='cap'>مشروع مدينة الفاشر عاصمة غربي البلاد </p> </div>
<div style="background-image: url('news/2.jpg');"><p class='cap'>مشروع مدينة الفاشر عاصمة غربي البلاد </p> </div>
<div style="background-image: url('news/3.jpg');"><p class='cap'>مشروع مدينة الفاشر عاصمة غربي البلاد </p> </div>
<div style="background-image: url('news/4.jpg');"><p class='cap'>مشروع مدينة الفاشر عاصمة غربي البلاد </p> </div>
<div style="background-image: url('news/5.jpg');"><p class='cap'>مشروع مدينة الفاشر عاصمة غربي البلاد </p> </div>
<div style="background-image: url('news/6.jpg');"><p class='cap'>مشروع مدينة الفاشر عاصمة غربي البلاد </p> </div>
<div style="background-image: url('news/7.jpg');"><p class='cap'>مشروع توزيع المواشي لعيد الاضحي لعام 2022م </p> </div>
<div style="background-image: url('news/8.jpg');"><p class='cap'>مشروع مدينة الفاشر عاصمة غربي البلاد </p> </div>
</div>


<!--************************************end photo nav bar**********************************-->





<!-- ******************************************************************************-->

<!-- the start code of the page contact -->

<p>&nbsp;</p>
<p>
<div style="position:absolute; width: 300px;left:40%;"><font class="headline"><tt><b>      العروض        </b></tt> </font></div> </p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<div>

  <font color="black" size="5" style="text-align: center;">



<table align="center" border="0" width="0" cellspacing="10" cellpadding="10" >

<tr>
<td><a class="noneline" href="more">
  
<div style="   background-image: url('news/1.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
   border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;


}">
  <p class='caption'> مشروع مدينة الفاشر عاصمة غربي البلاد </p>
  </div>

      </a>
</td>
  
<td><a class="noneline" href="svo-aeed">
 <div style="   background-image: url('news/2.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'>مشروع مدينة الفاشر عاصمة غربي البلاد</p>
  </div>

</a>
</td>

<td><a class="noneline" href="more">
<div style="   background-image: url('news/3.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'>مشروع مدينة الفاشر عاصمة غربي البلاد</p>
  </div>

   </a>
</td>

<td><a class="noneline" href="more">
<div style="   background-image: url('news/4.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'>مشروع مدينة الفاشر عاصمة غربي البلاد</p>
  </div>

  </a>
</td>

</tr>

<tr>

<td><a class="noneline" href="#">

<div style="   background-image: url('news/5.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'> مشروع مدينة الفاشر عاصمة غربي البلاد </p>
  </div>

</a>
</td>

<td><a class="noneline" href="#">
 <div style="   background-image: url('news/6.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'>مشروع مدينة الفاشر عاصمة غربي البلاد   </p>
  </div>

</a>
</td>

<td><a class="noneline" href="#">
<div style="   background-image: url('news/7.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
   border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;
}">
  <p class='caption'>مشروع مدينة الفاشر عاصمة غربي البلاد </p>
  </div>

</a>
</td>

<td><a class="noneline" href="#">
   <div style="   background-image: url('news/8.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'> مشروع مدينة الفاشر عاصمة غربي البلاد  </p>
  </div>

</a>
</td>

</tr>

<tr>

<td><a class="noneline" href="#">
   
<div style="   background-image: url('news/1.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'>مشروع مدينة الفاشر عاصمة غربي البلاد </p>
  </div>

</a>
</td>

<td><a class="noneline" href="#">
<div style="   background-image: url('news/2.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'> مشروع مدينة الفاشر عاصمة غربي البلاد  </p>
  </div>

</a>
</td>

<td><a class="noneline" href="#">
<div style="   background-image: url('news/3.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'> مشروع مدينة الفاشر عاصمة غربي البلاد  </p>
  </div>

</a>
</td>

<td><a class="noneline" href="#">
<div style="   background-image: url('news/4.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'>مشروع مدينة الفاشر عاصمة غربي البلاد </p>
  </div>

</a>
</td>

</tr>

<tr>

<td><a class="noneline" href="#">
   
<div style="   background-image: url('news/5.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'> مشروع مدينة الفاشر عاصمة غربي البلاد  </p>
  </div>

</a>
</td>

<td><a class="noneline" href="#">
<div style="   background-image: url('news/6.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'>مشروع مدينة الفاشر عاصمة غربي البلاد </p>
  </div>

</a>
</td>

<td><a class="noneline" href="#">
<div style="   background-image: url('news/7.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'>مشروع مدينة الفاشر عاصمة غربي البلاد  </p>
  </div>

</a>
</td>

<td>
<a class="noneline" href="#">
<div style="   background-image: url('news/8.jpg');
  background-size: cover;
  background-position: center;
  height: 350px;
  width:260px;
  border-radius: 3rem;
     border:1px solid #ccc; 
   border-style:outset;
    border-width:5px 5px;

}">
  <p class='caption'>مشروع مدينة الفاشر عاصمة غربي البلاد </p>
  </div>

</a>
</td>

</tr>

</table>
</font>





</div>


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