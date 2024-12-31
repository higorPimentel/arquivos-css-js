  
  <div class='container-load'>
    <div class='load'>
      <div class="loader"></div> 
      <p class="info-load">Calculando Frete...</p>
    </div>
  </div>
    

<style>


.container-load {
  /* background-color: rgba(20, 50, 90, 0.9); */
  background-color:#1e1f29ee;
  width: 100%;
  height: 100%;
  z-index: 12;
  top: 0;
  left:0;
  position: fixed;
  /* display: none; */
}

.load {

    margin-left: 35%;
    margin-top: 300px;
    /* transform: scale(3); */
    display: inline-block;
}


.loader {
  width: 520px;
  height: 22px;
  border-radius: 20px;
  color: #514b82;
  border: 2px solid;
  position: relative;
}
.loader::before {
  content: "";
  position: absolute;
  margin: 2px;
  inset: 0 100% 0 0;
  border-radius: inherit;
  background: currentColor;
  animation: l6 15s infinite;
}

.info-load {
  display: block;
  position: relative;
  color:white;
  text-align: center;
  align-items: center;
  font-size:25px;
  margin-top:20px;
  font-family:Arial, sans-serif ;
}


@media(max-width: 1200px){ 


  .load {
    margin-left: 30%;
  }

}


@media(max-width: 1000px){ 

.load {
  margin-left: 22%;
}

}


@media(max-width: 900px){ 

  .load {
    margin-left: 10%;
  }

}

@media(max-width: 800px){ 

.load {
  margin-left: 20px;
  margin-right: 20px;
  width: 100%;
}

}




@keyframes l6 {
    100% {inset:0}
}

</style>