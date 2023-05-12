window.onscroll = function() {
    stickHeader();
  };
  
  var header = document.getElementById("myHeader");
  var navLogoContainer = document.querySelector(".nav-logo-container");
  var navContainer = document.querySelector(".nav-container");
  var btnStory = document.querySelector(".btn-story");
  var btnRecent = document.querySelector(".btn-recent");
  var btnExploding = document.querySelector(".btn-exploding");
  var btnLive = document.querySelector(".btn-live");
  var sticky = header.offsetTop;
  
  function stickHeader() {
    if (window.pageYOffset > sticky) {
      navContainer.style.width = "100%"
      header.classList.add("sticky");
      navLogoContainer.classList.remove("hidden-logo");
      header.style.borderBottom = "3px solid #e9560c";
      btnStory.style.backgroundColor = "#ff9742"
      btnRecent.style.backgroundColor = "#46af96"
      btnExploding.style.backgroundColor = "#e9560c"
      btnLive.style.backgroundColor = "#46AF96"
    } else {
      header.classList.remove("sticky");
      navLogoContainer.classList.add("hidden-logo");
      header.style.borderBottom = "";
      navContainer.style.width = ""
      btnStory.style.backgroundColor = ""
      btnRecent.style.backgroundColor = ""
      btnExploding.style.backgroundColor = ""
      btnLive.style.backgroundColor = ""
    }
  }


