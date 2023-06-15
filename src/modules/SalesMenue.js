import { populateOpportunities, populateLead, populateAccount, populateContact } from "./populateLead.js";

const clearTable = () => {
  const leadDataElement = document.querySelector("#lead-data-populate-here");
  leadDataElement.innerHTML = '';
  const accountDataElement = document.querySelector("#account-data-populate-here");
  accountDataElement.innerHTML = '';
  const contactDataElement = document.querySelector("#contact-data-populate-here");
  contactDataElement.innerHTML = '';
  const oppDataElement = document.querySelector("#opportunity-data-populate-here");
  oppDataElement.innerHTML = '';
};

const salesMenue = () => {
  document.querySelector('.left-nav').addEventListener('click', (event) => {
    if (event.target.classList.contains('fa-shuffle')) {
      document.querySelectorAll('.section-item').forEach((sec) => {
        sec.classList.add('display-none');
      })
      clearTable();

      document.querySelector('section.lead-section').classList.remove('display-none');
      console.log('tobe populated');
      populateLead();
    } else if (event.target.classList.contains('fa-user')) {
      document.querySelectorAll('.section-item').forEach((sec) => {
        sec.classList.add('display-none');
      });
      clearTable();

      const q = document.querySelector('section.account-section')
      if(q) q.classList.remove('display-none');
      populateAccount();
    } else if (event.target.classList.contains('fa-address-card')) {
      document.querySelectorAll('.section-item').forEach((sec) => {
        sec.classList.add('display-none');
      });
      clearTable();

      const q = document.querySelector('section.contact-section')
      if(q) q.classList.remove('display-none');
      populateContact();
    } else if (event.target.classList.contains('fa-star')) {
      document.querySelectorAll('.section-item').forEach((sec) => {
        sec.classList.add('display-none');
      });
      clearTable();

      const q = document.querySelector('section.opportunity-section')
      if(q) q.classList.remove('display-none');
      populateOpportunities();
    }
  });
};

export default salesMenue;