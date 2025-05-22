function nextPage(pageNumber) {
  // Verberg alle pagina's
  const pages = document.querySelectorAll(".page");
  pages.forEach((page) => (page.style.display = "none"));

  // Toon de volgende pagina
  document.getElementById("page" + pageNumber).style.display = "block";
}

function prevPage(pageNumber) {
  // Verberg alle pagina's
  const pages = document.querySelectorAll(".page");
  pages.forEach((page) => (page.style.display = "none"));

  // Toon de vorige pagina
  document.getElementById("page" + pageNumber).style.display = "block";
}
