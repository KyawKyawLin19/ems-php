<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - DreamHR</title>
    <link rel="stylesheet" href="/admin/assets/css/dashboard_demo.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <?php require_once('layouts/sidebar.php') ?>
            <!-- Main Content -->
            <main class="main-content">
                        <!-- Added mobile menu toggle button -->
                        <button class="mobile-menu-toggle" id="mobileMenuToggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        
                        <header class="main-header">
                            <div class="header-left">
                                <h1 id="pageTitle">Dashboard Overview</h1>
                                <p id="pageSubtitle">Welcome back! Here's what's happening today.</p>
                            </div>
                            <div class="header-right">
                                <button class="notification-btn">
                                    <span>🔔</span>
                                    <span class="notification-badge">3</span>
                                </button>
                                <div class="date-display" id="currentDate"></div>
                            </div>
                        </header>