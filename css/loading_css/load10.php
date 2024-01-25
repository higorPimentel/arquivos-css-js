<style>


body {
    background-color: #14325a;
}

.container-load {
    margin-left: 45%;
    margin-top: 20%;
    /* transform: scale(3); */
    display: inline-block;
}

.loader {
  width: 148px;
  height: 148px;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  border: 20px solid;
  /* border-color: rgba(255, 255, 255, 0.15) rgba(255, 255, 255, 0.25) rgba(255, 255, 255, 0.35) rgba(255, 255, 255, 0.5); */
  border-color: rgba(255, 255, 255, 0.15) #14325a #14325a #14325a;
  box-sizing: border-box;
  animation: rotation 2s linear infinite;
}

.loader-bg {
    width: 148px;
  height: 148px;
  margin-left: -151px;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  border: 20px solid;
  /* 
    border-color: rgba(255, 255, 255, 0.15) rgba(255, 255, 255, 0.25) rgba(255, 255, 255, 0.35) rgba(255, 255, 255, 0.5); 
  */
  border-color: rgba(255, 255, 255, 0.15);
  box-sizing: border-box;
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 

</style>

<div class='container-load'>
    <span class="loader"></span>
    <span class="loader-bg"></span>
</div>
