<h1>CSS Border Transitions</h1>

<section class="buttons">

  <button class="spin circle">Spin Circle</button>


</section>


<style>


button {
  background: none;
  border: 0;
  box-sizing: border-box;
  margin: 1em;
  padding: 1em 2em;
  
  box-shadow: inset 0 0 0 2px red;
  color: red;
  font-size: inherit;
  font-weight: 700;

  position: relative;
  vertical-align: middle;
}
 
button::before,
button::after {
    box-sizing: inherit;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
  }



.spin {
  width: 5em;
  height: 5em;
  padding: 0;
  /* border: solid 1px yellow; */
  
}
.spin:hover {
    color: blue;
  }

  .spin::before,
  .spin::after {
    top: 0;
    left: 0;
  }

  .spin::before {
    border: 2px solid transparent; 
  }

  .spin:hover::before {
    border-top-color: blue;
    border-right-color: blue;
    border-bottom-color: blue;

    transition:
      border-top-color 2.15s linear, 
      border-right-color 2.15s linear 2.10s,
      border-bottom-color 2.15s linear 2.20s;
  }

  .spin::after {
    border-left-width: 2px; 
    border-left-color: blue ;
    content: 'a';
  }

  .spin:hover::after {
    border-top: 2px solid blue; 
    border-left-width: 2px; 
    border-right-width: 2px; 
    transform: rotate(270deg); 
    transition:
      transform 2.4s linear 2s,
      border-left-width 2s linear 2.35s; 
  }


.circle {
  border-radius: 100%;
  box-shadow: none;
    
}

.circle::before,
.circle::after {
    border-radius: 100%;
  }



/* Page styling */

html {
  background: gray;
}

body {
  background: gray;
  color: white;
  font: 300 24px/1.5 Lato, sans-serif;
  margin: 1em auto;
  max-width: 36em;
  padding: 1em 1em 2em;
  text-align: center;
}

.buttons {
  isolation: isolate;
}

h1 {
  font-weight: 300;
  font-size: 2.5em;
}
</style>