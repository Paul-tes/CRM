<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/4e57741acf.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles/style.css">
  <title>CRM</title>
</head>
<body>
  <header id="top-header">
    <nav class="nav-item-w">
      <ul class="top-header-links-ul">
        <li><a href="./index.php" class="header-link-item-a current-page-a">Dashboard</a></li>
        <li><a href="./pages/sales.php" class="header-link-item-a">Sales</a></li>
        <li><a href="./pages/activities.php" class="header-link-item-a">Activities</a></li>
      </ul>
    </nav>
    <nav class="header-nav-item-icon">
      <a href="#"><i class="fa-solid fa-bell header-bell-icon"></i></a>
      <a href="#"><i class="fa-sharp fa-solid fa-circle-user header-user-icon"></i></a>
    </nav>
  </header>
  <div class="container">
    <aside class="left-nav">
      <div class="icons">
        <a href="#"><i class="fa-solid fa-bars lef-nav-menue-bar-i"></i></a>
        <a href="#"><i class="fa-solid fa-house lef-nav-menue-bar-i"></i></a>
      </div>
    </aside>
    <div class="continer-main">
      <div class="container-main-header">
        <a href="#" class="path-dashboard">Dashboard > </a>
      </div>
      <div class="date-div">
        <p>Tusday 3/21/2023<p>
      </div>
      <section class="cards-section">
        <div class="todo-card card">
          <div class="top">
            <p class="card-header-p">Todo</p>
            <h2 class="card-num-sm">85</h2>
          </div>
          <div class="bottom">
            <div class="fineshed-progress">
              <div class="finesh-task-progress-bar"></div>
            </div>
            <p>Finished tasks</p>
          </div>
        </div>

        <div class="new-leads-card card">
          <div class="left">
            <p>New Leads</p>
            <h2>21</h2>
            <p><span class="percent">60%</span> Daily Goal</p>
            <p><span class="No">72</span> This week</p>
          </div>
          <div class="cirular-bar">75%</div>
        </div>

        <div class="recent-activities-card card">
          <p class="p-h">Recent Activities</p>
          <h2>85</h2>
          <p>New Activities This week</p>
        </div>

        <div class="open-deals-card card">
          <p>Open Deals</p>
          <h2>200</h2>
        </div>

        <div class="top-industries-leads-card card ">
          <p>Top Industries Leads Created</p>
          <div class="item-lists">
            <p>Comunication <i class="fa-solid fa-caret-down carret-down"></i><span class="no">36</span></i></p>
            <p>Advertisement <i class="fa-solid fa-caret-up carret-up"></i><span class="no">21</span></p>
            <p>Cold Call <i class="fa-solid fa-caret-down carret-down"></i><span class="no">36</span></i></p>
            <p>Sell Product <i class="fa-solid fa-caret-up carret-up"></i><span class="no">36</span></p>
            <p>Comunication <i class="fa-solid fa-caret-up carret-up"></i><span class="no">36</span></p>
          </div>
        </div>

        <div class="top-lead-owners-card card">
          <p>Top Lead owners</p>
          <div class="item-lists">
            <p>Christopher <i class="fa-solid fa-caret-down carret-down"></i><span class="no">36</span></p>
            <p>Jason <i class="fa-solid fa-caret-up carret-up"></i><span class="no">21</span></p>
            <p>Paul <i class="fa-solid fa-caret-down carret-down"></i><span class="no">36</span></p>
            <p>Natenael <i class="fa-solid fa-caret-up carret-up"></i><span class="no">36</span></p>
            <p>Nahom <i class="fa-solid fa-caret-up carret-up"></i><span class="no">36</span></p>
          </div>
        </div>
      </section>
      <div class="cust-lookup">
        <h2>Customer Lookup</h2>
        <div class="locokup-input-items">
          <input type="text" name="name" id="name" placeholder="Name">
          <input type="text" name="city" id="city" placeholder="City">
          <input type="text" name="country" id="country" placeholder="Country">
          <button class="cust-look-btn"><i class="fa-solid fa-magnifying-glass left-nav-search-i"></i></button>
        </div>
      </div>
      <div class="cust-lookup-result">
        <h4>Result</h4>
        <div class="result-lists">
        </div>
      </div>
    </div>
  </div>
  <script src="./index.js" type="module"></script>
</body>
</html>