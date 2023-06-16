const postOpenDeal = () => {
  fetch('http://localhost/crm/src/API/getOpenDeals.php')
  .then(response => response.text())
  .then(data => {
    const count = JSON.parse(data)[0].count;
    document.querySelector('.open-deals-card h2').textContent = count;
  })
  .catch(error => console.error(error));
}

export default postOpenDeal;