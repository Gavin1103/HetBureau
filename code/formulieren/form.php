<?php var_dump($_POST) ?>
<h1>a</h1>
<!-- todo fix this fucking mess -->

<form id="form" method="post"></form>

<script>
    const form = document.getElementById('form')

    fetch("http://localhost:8000/code/formulieren/get_formulier.php").then(response => response.json()).then(
        (response) => {
            render_vragen(response[0])
        }
    )

    // so now we have the data and we can render the questions
    function render_vragen(data) {
        console.log(data)
        data.forEach(question => {
            // render the title
            const vraag = document.createElement("p")
            vraag.innerText = question.vraag
            document.body.appendChild(vraag)

            // render the possible questions
            question.antwoorden.forEach(element => {
                console.log(element)
                                // create the input
                const input = document.createElement("input")
                input.type = element.type
                document.body.appendChild(input)


                // creates the label
                const label = document.createElement("lebal")
                label.innerHTML = element.label
                document.body.appendChild(label)

            });
        });
    }
</script>