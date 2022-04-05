/**
 * form handler
 */

const form = document.querySelector("form");

form.addEventListener("submit", async (event) => {
  event.preventDefault();

  // haal alle html op 
  const pdf = document.getElementById("pdf").innerHTML;

  // verstuur de geformateerde data en download de pdf daarna
  await fetch("/formulieren/generatepdf.php", {
    method: "POST",
    
    // stuur de opgehaalde html op
    body: JSON.stringify(pdf),
  })
    .then((res) => res.blob())
    .then((blob) => {
      // voeg de opgehaalde pdf op en toon dit in de browser
      const file = window.URL.createObjectURL(blob);
      window.location.assign(file);
      console.log(blob);
    });
});
