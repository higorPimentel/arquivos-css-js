
<div class='container-load'>
<span class="loader"></span>
</div>

<style>

    body {
        background-color:gray;
    }

    .container-load {
    margin-left: 45%;
    margin-top: 20%;
    transform: scale(2);
    display: inline-block;
}

.loader {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  border: 5 px solid;
  box-sizing: border-box;
  animation: animloader 3s linear infinite;
  /* border-color: white transparent white white; */
  /* border-color: white white transparent white; */
  /* border-color: white white white white; */
}
@keyframes animloader {
  0% {
    border-color: white transparent white white;
  }
  33% {
    border-color: white white transparent white;
  }
  66% {
    border-color: white white white transparent;
  }
  100% {
    border-color: transparent white white white;
  }
} 


</style>