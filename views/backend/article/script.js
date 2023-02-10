const showDropdown = document.querySelector(".show-dropdown");
const dropdown = document.querySelector(".dropdown");

showDropdown.addEventListener("mouseenter", function() {
  dropdown.style.display = "block";
});

showDropdown.addEventListener("mouseleave", function() {
  dropdown.style.display = "none";
});

dropdown.addEventListener("mouseenter", function() {
  dropdown.style.display = "block";
});

dropdown.addEventListener("mouseleave", function() {
  dropdown.style.display = "none";
});