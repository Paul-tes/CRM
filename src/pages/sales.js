import MenueToggle from "../modules/MenueToggle.js";
import salesMenue from "../modules/SalesMenue.js";
import deleteRecord from "../modules/deleteRecorde.js";
import Popups from "../modules/popUpwindow.js";
import postCurrentDate from "../modules/postCurrentDate.js";


window.addEventListener('DOMContentLoaded', ()=>{
  MenueToggle();
  salesMenue();
  postCurrentDate();
})

// popUps;
document.querySelector(".continer-main").addEventListener("click", (event) => {
  const body = document.querySelector("body");
  if (event.target.classList.contains("btn-new-lead")) {
    const div = document.createElement("div");
    const pop = new Popups();
    div.innerHTML = pop.getLeadPop();
    div.classList.add("form-popup");
    body.appendChild(div);

    document.querySelector(".cancel").addEventListener("click", () => {
      body.removeChild(div);
    });
  } else if (event.target.classList.contains("btn-add-new-con")) {
    const div = document.createElement("div");
    const pop = new Popups();
    div.innerHTML = pop.getContactPop();
    div.classList.add("form-popup");
    body.appendChild(div);

    document.querySelector(".cancel").addEventListener("click", () => {
      body.removeChild(div);
    });
  } else if (event.target.classList.contains("btn-add-new-acc")) {
    const div = document.createElement("div");
    const pop = new Popups();
    div.innerHTML = pop.getAccountPop();
    div.classList.add("form-popup");
    body.appendChild(div);

    document.querySelector(".cancel").addEventListener("click", () => {
      body.removeChild(div);
    });
  } else if (event.target.classList.contains("btn-add-new-opp")) {
    const div = document.createElement("div");
    const pop = new Popups();
    div.innerHTML = pop.getOpportunityPop();
    div.classList.add("form-popup");
    body.appendChild(div);

    document.querySelector(".cancel").addEventListener("click", () => {
      body.removeChild(div);
    });
  }


  // delete records
  else if (event.target.classList.contains("btn-delete")) {
    const id = event.target.id;
    const table = event.target.parentElement.nextElementSibling.id;
    fetch(`localhost/CRM/src/API/dellet_record.php`, {
    method: 'GET',
  })
  .then(response => response.json())
  .then(data => {
    // Display a success message
    // console.log(data.message);
  })
  .catch(error => {
    // Display an error message
    // console.error(JSON.parse(error));
  });

  }
});
