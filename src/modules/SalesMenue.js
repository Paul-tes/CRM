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
      const q = document.querySelector('section.account-section')
      if(q) q.classList.remove('display-none');
    } else if (event.target.classList.contains('fa-address-card')) {
      document.querySelectorAll('.section-item').forEach((sec) => {
        sec.classList.add('display-none');
      });
      const q = document.querySelector('section.contact-section')
      if(q) q.classList.remove('display-none');
    } else if (event.target.classList.contains('fa-star')) {
      document.querySelectorAll('.section-item').forEach((sec) => {
        sec.classList.add('display-none');
      });
      const q = document.querySelector('section.opportunity-section')
      if(q) q.classList.remove('display-none');
    }
  });
};

export default salesMenue;