<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
        <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>

<header class="header">

    <a href="../sa-dashboard.php" class="logo">Super<span>Admin</span></a>



    <!-- Sidebar -->
    <div class="sidebar mt-5" style="background-color: #FFE5E5; border: 1.8px grey solid">
        <div class="container my-5">
            <h3 class="fs-7 text-center" style="font-family: sub-font-bold; padding-top:35%; color: #304DA5;">Dashboard</h3>
            <hr style="background-color: black;">
            <a href="#" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                SENA Assistance Desk
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
            <a href="../sa-user-management.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                User Management
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
            <a href="../sa-rfa-status.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                RFA Status
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
            <a href="../articles/add-post.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                Articles and Seminar
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
        </div>
    </div>

    <nav class="navbar">
        <a href="../posting-dashboard.php"><i class="fas fa-home"></i> <span>Home</span></a>
        <a href="../add-post.php"><i class="fas fa-pen"></i> <span>Add posts</span></a>
        <a href="../view-post.php"><i class="fas fa-eye"></i> <span>View posts</span></a>
        <a href="../sa-account.php"><i class="fas fa-user"></i> <span>Accounts</span></a>
        <a href="../logout.php" style="color:var(--red);" onclick="return confirm('Logout from the website?');"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
    </nav>

</header>

<div id="menu-btn" class="fas fa-bars"></div>