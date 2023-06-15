export const populateLead = () => {
  const leadDataElement = document.querySelector("#lead-data-populate-here");

  fetch("http://localhost/CRM/src/API/getLead.php")
    .then(response => response.json())
    .then(data => {
    // Loop through the lead data and create a row for each lead
    data.forEach(lead => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${lead.first_name}</td>
        <td>${lead.last_name}</td>
        <td>${lead.company}</td>
        <td>${lead.job_title}</td>
        <td>${lead.comment}</td>
        <td>${lead.phone_number}</td>
        <td>${lead.email}</td>
        <th><button class="btn btn-update" id="${lead.id}">update</button></th>
        <th><button class="btn btn-delete" id="${lead.id}">Delete</button></th>
      `;
      leadDataElement.appendChild(row);
    });
  })
  .catch(error => console.error(error));
}

export const populateAccount = () => {
  const accountDataElement = document.querySelector("#account-data-populate-here");
  fetch("http://localhost/CRM/src/API/getAccount.php")
    .then(response => response.json())
    .then(data => {
    // Loop through the lead data and create a row for each lead
    data.forEach(account => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>${account.first_name}</td>
      <td>${account.last_name}</td>
      <td>${account.address}</td>
      <td>${account.status}</td>
      <td><button class="btn btn-update" id="${account.id}">update</button></td>
      <td><button class="btn btn-delete" id="${account.id}">Delete</button></td>
      `;
      accountDataElement.appendChild(row);
    });
  })
  .catch(error => console.error(error));
}

