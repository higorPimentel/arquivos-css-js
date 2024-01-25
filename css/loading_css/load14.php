<span class="loader"></span>

<style>

    body {
        background-color:gray;
    }

.loader {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  border: 10px solid;
  box-sizing: border-box;
  animation: animloader 5s linear infinite;
  border-color: white transparent transparent transparent;
  /* border-color: white white transparent white; */
  /* border-color: white white white white; */
}
@keyframes animloader {
  /* 0% {
    border-color: white transparent transparent transparent;
  }
  33% {
    border-color: white white transparent transparent;
  }
  66% {
    border-color: white white white transparent;
  }
  100% {
    border-color: transparent white white white;
  } */

  0% {
    border-color: red transparent transparent transparent;
  }
  10% {
    border-color: red red transparent transparent;
  }
} 


</style>