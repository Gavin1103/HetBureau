let fase1_container = document.getElementById("fase_1_container");
let fase2_container = document.getElementById("fase_2_container");
let fase3_container = document.getElementById("fase_3_container");
let fase4_container = document.getElementById("fase_4_container");

// import {
//     jsPDF
// } from "jspdf";

function kiesFase1() {
    // alert("fase 1");
    fase1_container.style.display = "block";
    fase2_container.style.display = "none";
    fase3_container.style.display = "none";
    fase4_container.style.display = "none";
}


function kiesFase2() {
    fase1_container.style.display = "none";
    fase2_container.style.display = "block";
    fase3_container.style.display = "none";
    fase4_container.style.display = "none";
}

function kiesFase3(){
    fase1_container.style.display = "none";
    fase2_container.style.display = "none";
    fase3_container.style.display = "block";
    fase4_container.style.display = "none";
}

function kiesFase4() {
    fase1_container.style.display = "none";
    fase2_container.style.display = "none";
    fase3_container.style.display = "none";
    fase4_container.style.display = "block";
}


// download as pdf functie

// let downloadbtn = document.getElementById("download");
// let body = document.getElementById("body");


// function generatePDF() {


//     // Default export is a4 paper, portrait, using millimeters for units
//     const doc = new jsPDF();

//     doc.text("Hello world!", 10, 10);
//     doc.save("a4.pdf");


// }