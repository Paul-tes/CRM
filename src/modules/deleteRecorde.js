const deleteRecord = (id, table) => {
  fetch(`localhost/CRM/src/API/dellet_record.php?table=lead&id=6`, {
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