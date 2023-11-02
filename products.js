function searchCards() {
  const input = document.querySelector("input");
  const filter = input.value.toUpperCase();
  const products = document.querySelectorAll(".card");
  products.forEach((cards) => {
    cards.style.display = "none";
  });

  const cardsToShow = [];

  for (let i = 0; i < products.length; i++) {
    const title = products[i].querySelector("h6").textContent.toUpperCase();

    if (title.includes(filter)) {
      products[i].style.display = "";
    } else {
      products[i].style.display = "none";
    }
  }
}
