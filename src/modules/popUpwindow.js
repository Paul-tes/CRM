// import './php_modules/create_lead.php'

class Popups {
  createLead = `
  <form action="../modules/php_modules/create_lead.php" method="post" class="form-container">
    <h2>Create New Lead</h2>
    
    <label for="full-name"><b>Full Name</b></label>
    <div class="full-name">
      <input type="text" placeholder="First Name" name="first-name" required>
      <input type="text" placeholder="Last Name" name="last-name" required>
    </div>
    <label for="Company"><b>Company</b></label>
    <input type="text" placeholder="Company Name" name="company" required>
    <label for="job-title"><b>Job Title</b></label>
    <input type="text" placeholder="Job title" name="job-title" required>
    <label for="phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone" required>
    <label for="emal"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    <label for="email"><b>Comment</b></label>
    <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
    <button type="submit" class="btn" name="submit">Create New</button>
    <button type="button" class="btn cancel cancel-new-lead-popup">Close</button>
  </form>
  `;

  contact = `
  <form action="../modules/php_modules/create_contact.php" method="post" class="form-container">
    <h2>Create New Contact</h2>
    
    <label for="full-name"><b>Full Name</b></label>
    <div class="full-name">
      <input type="text" placeholder="First Name" name="first-name" required>
      <input type="text" placeholder="Last Name" name="last-name" required>
    </div>
    
    <label for="phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone" required>
    
    
    <label for="emal"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Place your Address" name="address" required>

    <label for="details"><b>Details</b></label>
    <textarea name="details" id="comment" cols="30" rows="10" placeholder="Detail info"></textarea>

    <button type="submit" class="btn">Create New</button>
    <button type="button" class="btn cancel">Close</button>
  </form>`;

  account = `
    <form action="../modules/php_modules/create_account.php" method="post" class="form-container">
      <h2>Create New Account</hs  2>
      
      <label for="full-name"><b>Agent Full Name</b></label>
      <div class="full-name">
        <input type="text" placeholder="Agent First Name" name="agent-first-name" required>
        <input type="text" placeholder="Agent Last Name" name="agent-last-name" required>
      </div>
      
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Place your Address" name="address" required>


      <label for="status"><b>Status</b></label>
      <select id="status" name="status">
        <option value="active">Active</option>
        <option value="inactive">inactive</option>
        <option value="none">None</option>
      </select>
  
      <button type="submit" class="btn">Create New</button>
      <button type="button" class="btn cancel">Close</button>
    </form>
  `;

  opportunity = `
<form action="../modules/php_modules/create_opp.php" method="post" class="form-container">
  <h2>Create New Opportunity</h2>
  
  <label for="address"><b>Desc</b></label>
  <input type="text" placeholder="Place Desc" name="desc" required>

  <label for="details"><b>Details</b></label>
  <textarea name="details" id="comment" cols="30" rows="10" placeholder="Detail info"></textarea>
  
  <label for="address"><b>Stage</b></label>
  <select id="status" name="status">
    <option value="Qualified">Qualified</option>
    <option value="Interest">Interest</option>
    <option value="Consideration">Consideration</option>
    <option value="Interest">open</option>
    <option value="active">active</option>
    <option value="done">done</option>
  </select>

  <label for="contact-role"><b>Contact Role</b></label>
  <input type="text" placeholder="Contact Role" name="contact-role" required>

  <label for="full-name"><b>Agenet</b></label>
  <div class="full-name">
    <input type="text" placeholder="Agent First Name" name="agent-first-name" required>
    <input type="text" placeholder="Agent Last Name" name="agent-last-name" required>
  </div>

  <button type="submit" class="btn">Create New</button>
  <button type="button" class="btn cancel">Close</button>

</form>
  `;

  getLeadPop() {
    return this.createLead;
  }

  getContactPop() {
    return this.contact;
  }

  getAccountPop() {
    return this.account;
  }

  getOpportunityPop() {
    return this.opportunity;
  }
}

export default Popups;
