<?php
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage == '' || $currentPage == 'index.php') {
    $currentPage = 'perfect.php'; // Default page mapping
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="DeepSeaWorlds - Advanced Number Property Calculator & Mathematical Intelligence Suite" />
    <link rel="stylesheet" href="css/style.css">
    <title>DeepSeaWorlds - Number Property Calculator</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header-brand">
                <div class="header-brand-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 12C4.5 12 6.5 10 9 10C11.5 10 13.5 12 16 12C18.5 12 20.5 10 22 10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 17C4.5 17 6.5 15 9 15C11.5 15 13.5 17 16 17C18.5 17 20.5 15 22 15" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 7C4.5 7 6.5 5 9 5C11.5 5 13.5 7 16 7C18.5 7 20.5 5 22 5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <h2>DeepSeaWorlds</h2>
                    <div class="header-subtitle">Number Property Calculator Suite</div>
                </div>
            </div>
            <div class="header-badge">
                ⚡ Pro Suite v2.0
            </div>
        </header>

        <div class="area">
            <nav class="list" aria-label="Number Property Navigation">
                <div class="list-title">Calculators</div>
                <ol>
                    <li>
                        <a href="perfect.php" class="<?php echo ($currentPage == 'perfect.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">01</span> Perfect Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="armstrong.php" class="<?php echo ($currentPage == 'armstrong.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">02</span> Armstrong Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="strong.php" class="<?php echo ($currentPage == 'strong.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">03</span> Strong Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="automorphic.php" class="<?php echo ($currentPage == 'automorphic.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">04</span> Automorphic Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="spy.php" class="<?php echo ($currentPage == 'spy.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">05</span> Spy Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="happy.php" class="<?php echo ($currentPage == 'happy.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">06</span> Happy Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="sunny.php" class="<?php echo ($currentPage == 'sunny.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">07</span> Sunny Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="neon.php" class="<?php echo ($currentPage == 'neon.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">08</span> Neon Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="pronic.php" class="<?php echo ($currentPage == 'pronic.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">09</span> Pronic Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="disarium.php" class="<?php echo ($currentPage == 'disarium.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">10</span> Disarium Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="fascinating.php" class="<?php echo ($currentPage == 'fascinating.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">11</span> Fascinating Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="trimorphic.php" class="<?php echo ($currentPage == 'trimorphic.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">12</span> Trimorphic Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                    <li>
                        <a href="evilodius.php" class="<?php echo ($currentPage == 'evilodius.php' || $currentPage == 'evil-odious.php') ? 'active' : ''; ?>">
                            <span class="nav-text"><span class="nav-icon">13</span> Evil-Odious Number</span>
                            <span class="nav-arrow">&rarr;</span>
                        </a>
                    </li>
                </ol>
            </nav>
            <main class="show">