/**
 * form handler
 */

const form = document.querySelector("form");
console.log(form);

let data = [];

form.addEventListener("submit", async (event) => {
  data = [];
  event.preventDefault();

  // ga door alle html elementen in de form
  for (let item of form) {
    console.log(item);
    // controleer of de element een input is
    if (item.name) {
      const element = {
        answer: item.value,
        label: item.name,
      };
      data.push(element);
    }
  }

  console.log(data);

  // verstuur de geformateerde data en download de pdf daarna
  await fetch("/formulieren/generatepdf.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: JSON.stringify(data),
  })
    .then((res) => res.blob())
    .then((blob) => {
      const file = window.URL.createObjectURL(blob);
      //   window.location.assign(file);
      console.log(blob);
    });
});
