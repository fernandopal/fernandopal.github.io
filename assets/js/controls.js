function openNav() {
  if (document.getElementById('blur-container') !== null) {
    document.getElementById("blur-container").classList.add("blur");
  }
  document.getElementById("menu").style.width = "250px";
  document.getElementById("menu-close-btn").style.display = "block";
  document.getElementById("menu-btn").style.display = "none";
  document.getElementById("home-btn").style.display = "block";
  document.getElementById("cv-btn").style.display = "block";
  document.getElementById("finland-btn").style.display = "block";
  document.getElementById("italy-btn").style.display = "block";
  document.getElementById("mail-text").style.display = "none";
  document.getElementById("tel-text").style.display = "none";
}

function closeNav() {
  if (document.getElementById('blur-container') !== null) {
    document.getElementById("blur-container").classList.remove("blur");
  }
  document.getElementById("menu").style.width = "30px";
  document.getElementById("menu-close-btn").style.display = "none"
  document.getElementById("mail-text").style.display = "inline-block";
  document.getElementById("tel-text").style.display = "inline-block";
  setTimeout(function() {
  	document.getElementById("menu-btn").style.display = "block"
	document.getElementById("home-btn").style.display = "none";
	document.getElementById("cv-btn").style.display = "none";
	document.getElementById("finland-btn").style.display = "none";
	document.getElementById("italy-btn").style.display = "none";
  }, 100);
}


