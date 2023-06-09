<!DOCTYPE html>
<html>
<head>
  <title>الانضمام للمنظمة</title>
  
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

</head>
<body>
  <div class="aaasss ">
<img src="images2/join.jpg" align="bottom" height="1000" width="1200" style="border-radius: 0rem; border:1px solid #fff;  border-width:2px 2px;"  > 
</div>





</body>
</html>