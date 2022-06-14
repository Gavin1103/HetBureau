/**
 * form handler
 */
const form = document.getElementById("pdf");

form.addEventListener("submit", async (event) => {
  event.preventDefault();

 /// de opties instellen voor html2pdf.js
  const options = {
    jsPDF: {
      format: "a4",
      orientation: "landscape"
    },
    margin: 0,
    image: { type: "jpeg", quality: 1 },
  };

  // genereer pdf en open het in een nieuw tab
  html2pdf().set(options).from(document.body).toPdf().save("myfile.pdf");
});
