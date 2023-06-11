const salesMenue = () => {
  document.querySelector('.left-nav').addEventListener('click', (event) => {
    if (event.target.classList.contains('fa-shuffle')) {
      document.querySelectorAll('.section-item').forEach((sec) => {
        sec.classList.add('display-none');
      });
      document.querySelector('section.lead-section').classList.remove('display-none');
    } else if (event.target.classList.contains('fa-user')) {
      document.querySelectorAll('.section-item').forEach((sec) => {
        sec.classList.add('display-none');
      });
      document.querySelector('section.account-section').classList.remove('display-none');
    } else if (event.target.classList.contains('fa-address-card')) {
      document.querySelectorAll('.section-item').forEach((sec) => {
        sec.classList.add('display-none');
      });
      document.querySelector('section.contact-section').classList.remove('display-none');
    } else if (event.target.classList.contains('fa-star')) {
      document.querySelectorAll('.section-item').forEach((sec) => {
        sec.classList.add('display-none');
      });
      document.querySelector('section.opportunity-section').classList.remove('display-none');
    }
  });
};

export default salesMenue;