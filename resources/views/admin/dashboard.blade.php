<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiverr-Style Admin Dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <style>

/* Reset and Global Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f4f5f7;
  color: #333;
}

/* Dashboard Layout */
.dashboard-container {
  display: flex;
  min-height: 100vh;
}

/* Sidebar */
.sidebar {
  width: 250px;
  background-color: #1e2a38;
  color: #fff;
  padding-top: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.sidebar-header h2 {
  font-size: 1.5em;
  margin-bottom: 20px;
  color: #00ff8c;
}

.sidebar-nav {
  list-style: none;
  width: 100%;
}

.sidebar-nav li {
  width: 100%;
}

.sidebar-nav li a {
  display: block;
  padding: 15px;
  color: #ffffff;
  text-decoration: none;
  font-weight: bold;
  transition: background 0.3s;
}

.sidebar-nav li a:hover {
  background-color: #00ff8c;
  color: #1e2a38;
}

.icon-dashboard,
.icon-users,
.icon-services,
.icon-orders,
.icon-payments,
.icon-settings {
  margin-right: 10px;
}

/* Main Content */
.main-content {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
}

/* Top Bar */
.top-bar {
  display: flex;
  justify-content: space-between;
  padding: 20px;
  background-color: #fff;
  border-bottom: 1px solid #ccc;
}

.top-bar-left {
  display: flex;
  align-items: center;
}

.menu-toggle {
  background: none;
  border: none;
  font-size: 1.2em;
  cursor: pointer;
  color: #333;
}

.top-bar-right {
  display: flex;
  align-items: center;
}

.top-bar-right input[type="search"] {
  padding: 5px;
  font-size: 0.9em;
  margin-right: 20px;
}

.notifications {
  position: relative;
  margin-right: 20px;
}

.notifications .badge {
  position: absolute;
  top: -5px;
  right: -10px;
  background-color: red;
  color: white;
  font-size: 0.7em;
  padding: 2px 5px;
  border-radius: 50%;
}

.user-profile {
  display: flex;
  align-items: center;
}

.user-profile img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
}

.user-profile span {
  font-weight: bold;
}

/* Dashboard Overview Cards */
.dashboard-overview {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  padding: 20px;
}

.stats-card {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.stats-card h3 {
  font-size: 1.2em;
  margin-bottom: 10px;
  color: #00ff8c;
}

    </style>
</head>
<body>
  <div class="dashboard-container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="sidebar-header">
        <h2>Fiverr Admin</h2>
      </div>
      <ul class="sidebar-nav">
        <li><a href="#dashboard"><i class="icon-dashboard"></i> Dashboard</a></li>
        <li><a href="#users"><i class="icon-users"></i> Users</a></li>
        <li><a href="#services"><i class="icon-services"></i> Services</a></li>
        <li><a href="#orders"><i class="icon-orders"></i> Orders</a></li>
        <li><a href="#payments"><i class="icon-payments"></i> Payments</a></li>
        <li><a href="#settings"><i class="icon-settings"></i> Settings</a></li>
      </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
      <!-- Top Bar -->
      <header class="top-bar">
        <div class="top-bar-left">
          <button class="menu-toggle"><i class="icon-menu"></i></button>
          <h1>Dashboard</h1>
        </div>
        <div class="top-bar-right">
          <input type="search" placeholder="Search...">
          <div class="notifications">
            <i class="icon-bell"></i>
            <span class="badge">3</span>
          </div>
          <div class="user-profile">
            <img src="path/to/admin-avatar.jpg" alt="Admin">
            <span>Admin Name</span>
          </div>
        </div>
      </header>

      <!-- Dashboard Content -->
      <section class="dashboard-overview">
        <div class="stats-card">
          <h3>Total Users</h3>
          <p>5,230</p>
        </div>
        <div class="stats-card">
          <h3>Total Services</h3>
          <p>1,120</p>
        </div>
        <div class="stats-card">
          <h3>Total Orders</h3>
          <p>8,934</p>
        </div>
        <div class="stats-card">
          <h3>Total Revenue</h3>
          <p>$34,540</p>
        </div>
      </section>
    </div>
  </div>

  <script src="script.js"></script>
  <script>
document.querySelector('.menu-toggle').addEventListener('click', () => {
  document.querySelector('.sidebar').classList.toggle('collapsed');
});

    </script>
</body>
</html>
