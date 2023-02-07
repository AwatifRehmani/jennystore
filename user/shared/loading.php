<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');

.loader-container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  background-color: #370036d1;
  opacity:0.9;
  z-index: 9999;
}



.diamond {
  display: block;
  width: 200px;
  height: 200px;
  position: relative;
}

.diamond li {
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  opacity: 0;
  z-index: 100;
  transition: 400ms ease;
}

.diamond li:nth-child(1) {
  border-width: 20px 20px 0 20px;
  border-color: #7AD997 transparent transparent transparent;
  left: 0;
  right: 0;
  margin: auto;
  animation: traingle1 200ms 2.2s ease, opacity 2s 2.4s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(2) {
  border-width: 0 20px 20px 20px;
  border-color: transparent transparent #64C592;
  left: 59px;
  animation: traingle2 200ms 1.8s ease, opacity 2s 2.4s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(3) {
  border-width: 0 20px 20px 20px;
  border-color: transparent transparent #54B28D;
  right: 59px;
  animation: traingle3 200ms 2s ease, opacity 2s 2.4s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(4) {
  border-width: 0 20px 20px 20px;
  border-width: 20px 20px 0 20px;
  border-color: #7AD997 transparent transparent transparent;
  animation: traingle4 200ms 1.6s ease, opacity 2s 2.6s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(5) {
  border-width: 0 20px 20px 20px;
  border-width: 20px 20px 0 20px;
  border-color: #B4FEA5 transparent transparent transparent;
  animation: traingle5 200ms 1.4s ease, opacity 2s 2.6s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(6) {
  border-width: 0 20px 20px 20px;
  border-color: transparent transparent #fff;
  left: 0;
  right: 0;
  margin: auto;
  animation: traingle6 200ms 1.2s ease, opacity 2s 2.6s ease infinite;
  animation-fill-mode: forwards;
}

.diamond li:nth-child(7) {
  border-width: 20px 20px 0 20px;
  border-color: #C9FEAC transparent transparent transparent;
  left: 0;
  right: 0;
  margin: auto;
  animation: traingle7 200ms 1s ease, opacity 2s 2.8s ease infinite;
  animation-fill-mode: forwards;
}

.textCon {
  width: 200px;
  height: 50px;
  position: absolute;
  top:50;
  text-align: center;
  line-height: 600px;
  font-size:50px;
  font-family: Dancing Script;
  color: #fff;
  opacity: 0;
  animation: text 500ms 2.0s ease;
  animation-fill-mode: forwards;
}

@keyframes traingle1 {
  0% {
    top: -50px;
    opacity: 0;
  }
  100% {
    top: 0;
    opacity: 1;
  }
}

@keyframes traingle2 {
  0% {
    top: -50px;
    opacity: 0;
  }
  100% {
    top: 1px;
    opacity: 1;
  }
}

@keyframes traingle3 {
  0% {
    top: -50px;
    opacity: 0;
  }
  100% {
    top: 1px;
    opacity: 1;
  }
}

@keyframes traingle4 {
  0% {
    right: 59px;
    top: -33px;
    opacity: 0;
  }
  100% {
    right: 59px;
    top: 22px;
    opacity: 1;
  }
}

@keyframes traingle5 {
  0% {
    left: 59px;
    top: -33px;
    opacity: 0;
  }
  100% {
    left: 59px;
    top: 22px;
    opacity: 1;
  }
}

@keyframes traingle6 {
  0% {
    top: -33px;
    opacity: 0;
  }
  100% {
    top: 23px;
    opacity: 1;
  }
}

@keyframes traingle7 {
  0% {
    top: -10px;
    opacity: 0;
  }
  100% {
    top: 44px;
    opacity: 1;
  }
}

@keyframes opacity {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0.3;
  }
  100% {
    opacity: 1;
  }
}

@keyframes text {
  0% {
    top: 0;
    opacity: 0;
  }
  100% {
    top: 70px;
    opacity: 1;
  }
}
ul,
li {
  margin: 0;
  padding: 0;
  list-style: none;
}

    </style>
</head>
<body>


<div class="loader-container">
<ul class="diamond">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>
<div class="textCon">Jenny's</div>
</div>


</body>
</html>

<script>

window.addEventListener("load", function() {
  const loaderContainer = document.querySelector(".loader-container");
  setTimeout(function() {
    loaderContainer.style.opacity = 0;
    setTimeout(function() {
      loaderContainer.style.display = "none";
    },200);
  },2700);
});

</script>