hiii,

project sebelumnya/tugas_6, dibuat dengan php, css, dan JavaScript
dimana program tersebut, merupakan aplikasi kalkulator sederhana
yang dibuat dengan interaktive JS.

## Sekian Terima Kasih

# Author IRFIN FALAH

<!-- All source code program Calculator -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Calculator Design </title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
</head>

<body>
    <div>
        <h1> Author Irfin Falah </h1>
    </div>
    <form>
        <table border="0">
            <tr>
                <td colspan="4">
                    <h2> Calculator </h2>
                </td>
            </tr>
            <tr>
                <td colspan="4"><input id="nilai" type="text" placeholder="0"></td>
            </tr>
            <tr>
                <td> <button type="button"> 7 </button> </td>
                <td> <button type="button"> 8 </button> </td>
                <td> <button type="button"> 9 </button> </td>
                <td> <button type="button" id="bagi" class="orange">/</button> </td>
            </tr>
            <tr>
                <td> <button type="button"> 4 </button> </td>
                <td> <button type="button"> 5 </button> </td>
                <td> <button type="button"> 6 </button> </td>
                <td> <button type="button" id="kali" class="orange">*</button></td>
            </tr>
            <tr>
                <td> <button type="button"> 1 </button> </td>
                <td> <button type="button"> 2 </button> </td>
                <td> <button type="button"> 3 </button> </td>
                <td> <button type="button" id="tambah" class="orange">+</button> </td>
            </tr>
            <tr>
                <td> <button type="button"> 0 </button> </td>
                <td> <button type="button"> .</button> </td>
                <td> <button type="button" id="result" class="orange"> = </button> </td>
                <td> <button type="button" id="kurang" class="orange"> - </button> </td>
            </tr>
        </table>
    </form>

    <script>
    <?php require_once("interaktive.js");?>
    </script>
</body>

</html>


const app = () => {
  const getAllBtn = document.querySelectorAll("td button");
  getAllBtn.forEach((button) => {
    if (button.getAttribute("id")) {
      button.style.cursor = "not-allowed";
    }
    button.addEventListener("click", function (e) {
      e.preventDefault();

      getInput(this.innerText);
      allowedCursor();
    });
  });
};

const getInput = (text) => {
  const inputTxt = (document.querySelector("input").value += text);
  kalkulation(text, inputTxt);
};

const kalkulation = (data, dataTxt) => {
  if (data === "=") {
    resultData(dataTxt);
  } else if (data === "+") {
    tambah(dataTxt);
  } else if (data === "*") {
    kali(dataTxt);
  } else if (data === "-") {
    kurang(dataTxt);
  } else if (data === "/") {
    bagi(dataTxt);
  } else {
    null;
  }
};

const resultData = (dataTxt) => {
  try {
    let data = eval(dataTxt.slice(0, -1));
    document.querySelector("input").value += data;
    document.querySelector("h2").innerText = data;
  } catch (err) {
    alert(err.message);
    window.location.reload();
  }
};

const tambah = (dataTxt) => {
  try {
    let data = eval(dataTxt + 0);
    document.querySelector("h2").innerText = data;
  } catch (err) {
    alert(err.message);
    window.location.reload();
  }
};

const kali = (dataTxt) => {
  try {
    let data = eval(dataTxt + 1);
    document.querySelector("h2").innerText = data;
  } catch (err) {
    alert(err.message);
    window.location.reload();
  }
};

const kurang = (dataTxt) => {
  try {
    let data = eval(dataTxt + 0);
    document.querySelector("h2").innerText = data;
  } catch (err) {
    alert(err.message);
    window.location.reload();
  }
};

const bagi = (dataTxt) => {
  try {
    let data = eval(dataTxt + 0);
    if (data != Infinity) {
      document.querySelector("h2").innerText = data;
    }
  } catch (err) {
    alert(err.message);
    window.location.reload();
  }
};

const allowedCursor = () => {
  const allowed = document.querySelectorAll(".orange");
  allowed.forEach((data) => {
    data.style.cursor = "pointer";
  });
};

app();



body {
  background: cyan;
}

form {
  width: 205px;
  margin: auto;
  background: #3e3e3e;
  border-radius: 1%;
  box-shadow: 0px 3px 8px #000;
}
input[type="text"] {
  width: 196px;
  border: none;
  border-bottom: 1px solid grey;
  font-size: 18px;
  color: #fff;
  background: none;
}
td {
  padding: 0px;
}
button {
  border: none;
  padding: 20px;
  width: 100%;
  cursor: pointer;
  color: grey;
  transition: ease 0.5s;
  background: none;
}
button:hover {
  background: grey;
  color: #fff;
}
h2 {
  font-family: "Encode Sans Condensed", sans-serif;
  color: #666;
  margin-bottom: 0;
  text-align: center;
  margin-top: 6px;
}
.orange {
  color: orange;
  text-align: justify;
}
h1 {
  font-family: "Encode Sans Condensed", sans-serif;
  color: black;
  font-size: 29px;
  border-bottom: 3px solid #fff;
}
div {
  width: 200px;
  margin: auto;
} -->
