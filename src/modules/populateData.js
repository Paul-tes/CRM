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
        <th><button class="btn btn-delete" id="${lead.id}">Delete</button></th>
        <div id="lead"></div>
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
      <td><button class="btn btn-delete" id="${account.id}">Delete</button></td>
      <div id="account"></div>
      `;
      accountDataElement.appendChild(row);
    });
  })
  .catch(error => console.error(error));
}

export const populateContact = () => {
  const contactDataElement = document.querySelector("#contact-data-populate-here");
  fetch("http://localhost/CRM/src/API/getContact.php")
    .then(response => response.json())
    .then(data => {
    // Loop through the lead data and create a row for each lead
    data.forEach(contact => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>${contact.first_name}</td>
      <td>${contact.last_name}</td>
      <td>${contact.phone_number}</td>
      <td>${contact.email}</td>
      <td>${contact.address}</td>
      <td>${contact.details}</td>
      <td><button class="btn btn-delete" id="${contact.id}">Delete</button></td>
      <div id="contacts"></div>
      `;
      contactDataElement.appendChild(row);
    });
  })
  .catch(error => console.error(error));
}

export const populateOpportunities = () => {
  const oppDataElement = document.querySelector("#opportunity-data-populate-here");
  fetch("http://localhost/CRM/src/API/getOpportunities.php")
    .then(response => response.json())
    .then(data => {
    // Loop through the lead data and create a row for each lead
    data.forEach(opp => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>${opp.description}</td>
      <td>${opp.details}</td>
      <td>${opp.stage}</td>
      <td>${opp.contact_role}</td>
      <td>${opp.agent_id}</td>
      <td><button class="btn btn-delete" id="${opp.id}">Delete</button></td>
      <div id="opportunity"></div>
      `;
      oppDataElement.appendChild(row);
    });
  })
  .catch(error => console.error(error));
}
