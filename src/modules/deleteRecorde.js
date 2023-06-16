const deleteRecord = (id, table) => {
  const url = `http://localhost/crm/src/API/dellet_record.php?table=${table}&id=${id}`;
  fetch(url, {
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

export default deleteRecord;