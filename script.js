const scriptURL =
  "https://script.google.com/macros/s/AKfycby2iFDoFkJjQRNdwLSKr61UZ4RVwBJu8Z_BH65m_3Z31txYqcuqrBw-j9xLxda1MQuF/exec";
const form = document.forms["google-sheet"];

form.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => {
      alert("Thanks for contacting me! I'll reach out to you!");
    })
    .catch((error) => console.error("Error!", error.message));
});
