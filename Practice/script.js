document.addEventListener("scroll", function() {
    const content = document.querySelector(".content");
    const scrollPercentage = (window.scrollY / (content.offsetHeight - window.innerHeight)) * 100;
    const hue = scrollPercentage * 3.6; // Convert to hue value (0-360)
  
    content.style.backgroundColor = `hsl(${hue}, 100%, 50%)`;
  });