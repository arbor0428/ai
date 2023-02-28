<style>
.circle{
  border-radius:50%;
  width:10px;
  height:10px;
  background-color:#1e90ff;
  margin-bottom:25px;
  position:absolute;
}

.loading_cont{
  position:absolute;
  left:50%;
  top:50%;
  transform:translate(-50%, -50%);
}

.rowc{
  display:inline-block;
  margin-left:2px;
}

.c1{
  animation: c1 1.5s linear infinite;
}

.c2{
  animation: c2 1.5s linear infinite;
  background-color:#3fd1ff;
}

@keyframes c1{
  0%{transform:translateY(0px) scale(1);}
  25%{transform:translateY(12px) scale(1.5);background-color:#0c87ff;z-index:10;}
  50%{transform:translateY(34px) scale(1);}
  75%{transform:translateY(12px) scale(.6);background-color:#3a9eff;z-index:1;opacity:.1}
  100%{transform:translateY(0px) scale(1);}
}

@keyframes c2{
  0%{transform:translateY(0px) scale(1);}
  25%{transform:translateY(-12px) scale(.6);background-color:#75deff;z-index:1;opacity:.1}
  50%{transform:translateY(-34px) scale(1);}
  75%{transform:translateY(-12px) scale(1.5);background-color:#0fc3ff;z-index:10;}
  100%{transform:translateY(0px) scale(1);}
}

.row2 .c1{animation-delay:.1s;}.row2 .c2{animation-delay:.1s;}
.row3 .c1{animation-delay:.22s;}.row3 .c2{animation-delay:.22s;}
.row4 .c1{animation-delay:.37s;}.row4 .c2{animation-delay:.37s;}
.row5 .c1{animation-delay:.49s;}.row5 .c2{animation-delay:.49s;}
.row6 .c1{animation-delay:.67s;}.row6 .c2{animation-delay:.67s;}
.row7 .c1{animation-delay:.89s;}.row7 .c2{animation-delay:.89s;}
.row8 .c1{animation-delay:.95s;}.row8 .c2{animation-delay:.95s;}
.row9 .c1{animation-delay:1.2s;}.row9 .c2{animation-delay:1.2s;}
.row10 .c1{animation-delay:1.45s;}.row10 .c2{animation-delay:1.45s;}
.row11 .c1{animation-delay:1.62s;}.row11 .c2{animation-delay:1.62s;}
.row12 .c1{animation-delay:1.88s;}.row12 .c2{animation-delay:1.88s;}
.row13 .c1{animation-delay:2s;}.row13 .c2{animation-delay:2s;}
</style>


<div class="loading_cont">
  <div class="row rowc">
    <div class="circle c1"></div>
    <div class="circle c2"></div>
  </div>
  
  <div class="row2 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
  <div class="row3 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
  <div class="row4 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
  <div class="row5 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
  <div class="row6 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
  <div class="row7 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
  <div class="row8 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
  <div class="row9 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
  <div class="row10 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
  <div class="row11 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
  <div class="row12 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
  <div class="row13 rowc"><div class="circle c1"></div><div class="circle c2"></div></div>
</div>