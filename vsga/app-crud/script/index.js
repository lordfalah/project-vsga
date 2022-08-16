const getInputSearch = document.querySelector(".search");

getInputSearch.addEventListener("input", function () {
  requestText(this.value);
});

const requestText = async (value) => {
  try {
    const req = await fetch("../utils/search.php", {
      method: "POST",
      body: new URLSearchParams(`name=${value}`),
    });
    const response = await req.text();

    viewData(response);
    return response;
  } catch (error) {
    return error.message;
  }
};

const viewData = (data) => {
  const getTable = document.querySelector("table");
  getTable.innerHTML = data;
};
