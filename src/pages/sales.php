<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/4e57741acf.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,200&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../styles/sales.css">
  <title>CRM</title>
</head>

<body>
  <header id="top-header">
    <nav class="nav-item-w">
      <ul class="top-header-links-ul">
        <li><a href="../index.php" class="header-link-item-a">Dashboard</a></li>
        <li><a href="./sales.php" class="header-link-item-a current-page-a">Sales</a></li>
        <li><a href="./activities.php" class="header-link-item-a">Activities</a></li>
      </ul>
    </nav>
    <nav class="header-nav-item-icon">
      <a href="notifications"><i class="fa-solid fa-bell header-bell-icon"></i></a>
      <a href="./login.php"><i class="fa-sharp fa-solid fa-circle-user header-user-icon"></i></a>
    </nav>
  </header>
  <div class="container">
    <aside class="left-nav">
      <div class="icons">
        <a href="#"><i class="fa-solid fa-bars lef-nav-menue-bar-i"><span
              class="icon-des display-none">Menu</span></i></a>
        <a href="./sales.php"><i class="fa-solid fa-house lef-nav-menue-bar-i"><span
              class="icon-des display-none">Home</span></i></a>
        <a href="#"><i class="fa-solid fa-shuffle lef-nav-menue-bar-i"><span
              class="icon-des display-none">Lead</span></i></a>
        <a href="#"><i class="fa-solid fa-user lef-nav-menue-bar-i"><span
              class="icon-des display-none">Account</span></i></a>
        <a href="#"><i class="fa-solid fa-address-card lef-nav-menue-bar-i"><span
              class="icon-des display-none">Contact</span></i></a>
        <a href="#"><i class="fa-solid fa-star lef-nav-menue-bar-i"><span
              class="icon-des display-none">Opportunity</span></i></a>
      </div>
    </aside>
    <div class="continer-main">
      <div class="container-main-header">
        <a href="../index.js" class="path-dashboard">Dashboard ></a>
        <a href="./sales.php" class="path-dashboard">Sales</a>
      </div>
      <div class="date-div">
        <p>Tusday 3/21/2023
        <p>
      </div>

      <section class="sales-home-section section-item">
        <div class="swatch">
          <div><p class="text-inside-animation-div">Lead</p></div>
          <div><p class="text-inside-animation-div">Account</p></div>
          <div><p class="text-inside-animation-div">Oportunity</p></div>
          <div><p class="text-inside-animation-div">Deals</p></div>
          <div><p class="text-inside-animation-div" style="font-size: 5rem;">Sales</p></div>
        </div>
      </section>

      <section class="lead-section display-none section-item">
        <div class="cust-lookup">
          <h2>Lead</h2>
          <div class="locokup-input-items">
            <form action="" method="post">
              <input type="text" name="search" id="lead_search" placeholder="Name">
              <button class="cust-look-btn"><i class="fa-solid fa-magnifying-glass left-nav-search-i"></i></button>
            </form>
            <button class="btn btn-add-new btn-new-lead">Add New</button>
          </div>

          <table class="customer-grid-table">
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Job Title</th>
                <th>Comment</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php
              require_once ('../modules/php_modules/get_all_data.php');

              while ($row = mysqli_fetch_assoc($lead_result)) {
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['company'] . "</td>";
                echo "<td>" . $row['job_title'] . "</td>";
                echo "<td>" . $row['comment'] . "</td>";
                echo "<td>" . $row['phone_number'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td><button class='btn btn-update'>update</button></td>";
                echo "<td><button class='btn btn-delete'>Delete</button></td>";
                echo "</tr>";
              }
              ?>
              <!-- <tr>
                <td>Jane</td>
                <td>Smith</td>
                <td>XYZ Corp.</td>
                <td>Developer</td>
                <td>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</td>
                <td>555-5678</td>
                <td>jane.smith@example.com</td>
                <th><button class="btn btn-update">update</button></th>
                <th><button class="btn btn-delete">Delete</button></th>
              </tr> -->
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </section>
      <div id="account"></div>

      <section class="account-section display-none section-item">
        <div class="cust-lookup">
          <h2>Account Lookup</h2>
          <div class="locokup-input-items">
            <input type="text" name="name" id="name" placeholder="Name">
            <button class="cust-look-btn"><i class="fa-solid fa-magnifying-glass left-nav-search-i"></i></button>
            <button class="btn btn-add-new btn-add-new-acc">Add New</button>
          </div>

          <table class="customer-grid-table">
            <thead>
              <tr>
                <th>Agent First Name</th>
                <th>Agent Last Name</th>
                <th>Address</th>
                <th>Status</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>Addis Ababa</td>
                <td>Opend</td>
                <td><button class="btn btn-update">update</button></td>
                <td><button class="btn btn-delete">Delete</button></td>
              </tr>
              <td>John</td>
              <td>Doe</td>
              <td>Addis Ababa</td>
              <td>Opend</td>
              <td><button class="btn btn-update">update</button></td>
              <td><button class="btn btn-delete">Delete</button></td>
              </tr>
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </section>
      <div id="contact"></div>


      <section class="contact-section display-none section-item">
        <div class="cust-lookup">
          <h2>Contact</h2>
          <div class="locokup-input-items">
            <input type="text" name="name" id="name" placeholder="Name">
            <button class="cust-look-btn"><i class="fa-solid fa-magnifying-glass left-nav-search-i"></i></button>
            <button class="btn btn-add-new btn-add-new-con">Add New</button>
          </div>

          <table class="customer-grid-table">
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Details</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>+251-9-555-1234</td>
                <td>john.doe@example.com</td>
                <td>Acme Inc, Addis Ababa</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                <td><button class="btn btn-update">update</button></td>
                <td><button class="btn btn-delete">Delete</button></td>
              </tr>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>+251-9-555-1234</td>
                <td>john.doe@example.com</td>
                <td>Acme Inc, Addis Ababa</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                <td><button class="btn btn-update">update</button></td>
                <td><button class="btn btn-delete">Delete</button></td>
              </tr>
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </section>
      <div id="opportunity"></div>


      <section class="opportunity-section display-none section-item">
        <div class="cust-lookup">
          <h2>Opportunity</h2>
          <div class="locokup-input-items">
            <input type="text" name="name" id="name" placeholder="Name">
            <button class="cust-look-btn"><i class="fa-solid fa-magnifying-glass left-nav-search-i"></i></button>
            <button class="btn btn-add-new  btn-add-new-opp">Add New</button>
          </div>

          <table class="customer-grid-table">
            <thead>
              <tr>
                <th>Desc</th>
                <th>Details</th>
                <th>Stage</th>
                <th>Contact role</th>
                <th>Agent</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Vnilla Opp</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                <td>closed</td>
                <td>market share</td>
                <td>Tesfaye</td>
                <td><button class="btn btn-update">update</button></td>
                <td><button class="btn btn-delete">Delete</button></td>
              </tr>
              <tr>
                <td>Vnilla Opp</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                <td>closed</td>
                <td>market share</td>
                <td>Tesfaye</td>
                <td><button class="btn btn-update">update</button></td>
                <td><button class="btn btn-delete">Delete</button></td>
              </tr>
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>
  <!-- pop up  -->
  <!-- <div class="form-popup create-new-contact">
    <form action="#" method="post" class="form-container">
      <h2>Create New Opportunity</h2>
      
      <label for="address"><b>Desc</b></label>
      <input type="text" placeholder="Place Desc" name="desc" required>

      <label for="details"><b>Details</b></label>
      <textarea name="details" id="comment" cols="30" rows="10" placeholder="Detail info"></textarea>
      
      <label for="address"><b>Stage</b></label>
      <select id="status" name="status">
        <option value="0">0</option>
        <option value="10">10</option>
        <option value="5">5</option>
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
  </div> --> 
  <script src="./sales.js" type="module"></script>
</body>

</html>