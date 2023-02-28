<style>
*{margin:0; padding:0;}
.loading-wrap{position:fixed;width:100%;height:100%;background:rgba(0,0,0,0.5);z-index:100;display:none;}
.loading-wrap svg {position:absolute;}

.loading-container {
  width:100px;
  height: 100px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  filter: url('#goo');
  animation: rotate-move 2s ease-in-out infinite;
}

.dot { 
  width: 70px;
  height: 70px;
  border-radius: 80%;
  background-color: #000;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}

.dot-3 {
  background-color: #f74d75;
  animation: dot-3-move 2s ease infinite;
}

.dot-2 {
  background-color: #10beae;
  animation: dot-2-move 2s ease infinite;
}

.dot-1 {
  background-color: #ffe386;
  animation: dot-1-move 2s ease infinite;
}

@keyframes dot-3-move {
  20% {transform: scale(1)}
  45% {transform: translateY(-18px) scale(.45)}
  60% {transform: translateY(-40px) scale(.45)}
  80% {transform: translateY(-40px) scale(.45)}
  100% {transform: translateY(0px) scale(1)}
}

@keyframes dot-2-move {
  20% {transform: scale(1)}
  45% {transform: translate(-16px, 12px) scale(.45)}
  60% {transform: translate(-40px, 40px) scale(.45)}
  80% {transform: translate(-40px, 40px) scale(.45)}
  100% {transform: translateY(0px) scale(1)}
}

@keyframes dot-1-move {
  20% {transform: scale(1)}
  45% {transform: translate(16px, 12px) scale(.45)}
  60% {transform: translate(40px, 40px) scale(.45)}
  80% {transform: translate(40px, 40px) scale(.45)}
  100% {transform: translateY(0px) scale(1)}
}

@keyframes rotate-move {
  55% {transform: rotate(0deg)}
  80% {transform: rotate(360deg)}
  100% {transform: rotate(360deg)}
}

</style>
<div class="loading-wrap">
	<div class="loading-container">
	  <div class="dot dot-1"></div>
	  <div class="dot dot-2"></div>
	  <div class="dot dot-3"></div>
	</div>

	<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
	  <defs>
		<filter id="goo">
		  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
		  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7"/>
		</filter>
	  </defs>
	</svg>
</div>