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
