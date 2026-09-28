# 🌊 DeepSeaWorlds - Number Property Calculator Suite

[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Status](https://img.shields.io/badge/Status-Production%20Ready-10B981?style=for-the-badge)]()
[![Design](https://img.shields.io/badge/UI-Deep%20Sea%20Glassmorphism-38BDF8?style=for-the-badge)]()
[![Live Demo](https://img.shields.io/badge/Live_Demo-DeepSea_Calculator-00f2fe?style=for-the-badge&logo=firefox&logoColor=white)](http://deepseanumbers.kesug.com/)

> **DeepSeaWorlds** is a full-stack, modular PHP web application designed to compute and verify complex mathematical number properties. Featuring a modern ocean-themed glassmorphism interface, real-time single-number entry, quick-test preset chips, and interactive calculations for 13 distinct number types.

---

## 🚀 Live Demo

Click the link below to test the live application:
👉 **[Launch DeepSea Number Calculator](http://deepseanumbers.kesug.com/)**

## ✨ Features

- ⚙️ **Modular Architecture**: Separate mathematical logic ([`includes/functions.php`](includes/functions.php)), reusable form layouts ([`includes/input.php`](includes/input.php)), and centralized dynamic header/footer templates.
- 🎨 **Modern Deep-Sea Glassmorphism UI**: Engineered with custom CSS variables, bioluminescent glows (`#38bdf8`), dark slate cards (`rgba(15, 23, 42, 0.75)`), and smooth hover transitions.
- 📱 **Fully Responsive Layout**: Built with CSS Flexbox & CSS Grid, supporting desktop, tablet, and mobile displays (`@media (max-width: 768px)`).
- 🧮 **13 Mathematical Number Calculators**: Instant calculation and verification for Armstrong, Automorphic, Disarium, Evil-Odious, Fascinating, Happy, Neon, Perfect, Pronic, Spy, Strong, Sunny, and Trimorphic numbers.
- ⚡ **Interactive Presets**: Quick-click sample chips (`6`, `153`, `145`, `25`, `192`, `19`) to quickly test inputs without typing.

---

## 🔢 Supported Number Properties

| Number Property | Formula / Property Definition | Example Input |
| :--- | :--- | :--- |
| **Perfect Number** | Sum of proper positive divisors equals the number | `6`, `28`, `496` |
| **Armstrong Number** | Sum of digits each raised to power of total digit count equals $N$ | `153`, `370`, `407` |
| **Strong Number** | Sum of factorials of digits equals $N$ | `145`, `40585` |
| **Automorphic Number** | $N^2$ ends in $N$ | `5`, `25`, `76` |
| **Spy Number** | Sum of digits equals product of digits | `1124`, `123` |
| **Happy Number** | Iterative sum of square of digits leads to `1` | `19`, `7` |
| **Sunny Number** | $N + 1$ is a perfect square | `3`, `8`, `15` |
| **Neon Number** | Sum of digits of $N^2$ equals $N$ | `9`, `0` |
| **Pronic Number** | Product of two consecutive integers ($k \times (k+1)$) | `2`, `6`, `12`, `20` |
| **Disarium Number** | Sum of digits powered by 1-based position from left equals $N$ | `175`, `89`, `135` |
| **Fascinating Number** | Concatenation of $(N, 2N, 3N)$ contains digits `1-9` once | `192`, `273` |
| **Trimorphic Number** | $N^3$ ends in $N$ | `4`, `5`, `24` |
| **Evil-Odious Number** | Even count of binary `1`s = Evil; Odd count = Odious | `3` (Evil), `7` (Odious) |

---

## 📁 Directory & Project Structure

```text
all_number/
├── css/
│   └── style.css            # DeepSeaWorlds Modern Glassmorphism Stylesheet
├── includes/
│   ├── functions.php        # Centralized Mathematical Computation Functions
│   ├── header.php           # Global Navigation & Top Header Navbar
│   ├── input.php            # Reusable Single-Number Form & Output Card
│   └── footer.php           # Global Footer Template with Dynamic Year
├── armstrong.php            # Armstrong Number Entry Page
├── automorphic.php          # Automorphic Number Entry Page
├── disarium.php             # Disarium Number Entry Page
├── evilodius.php            # Evil-Odious Number Entry Page
├── evil-odious.php          # Evil-Odious Alias Route
├── fascinating.php          # Fascinating Number Entry Page
├── happy.php                # Happy Number Entry Page
├── index.php                # Default Route (Perfect Number)
├── neon.php                 # Neon Number Entry Page
├── perfect.php              # Perfect Number Entry Page
├── pronic.php               # Pronic Number Entry Page
├── spy.php                  # Spy Number Entry Page
├── strong.php               # Strong Number Entry Page
├── sunny.php                # Sunny Number Entry Page
├── trimorphic.php           # Trimorphic Number Entry Page
└── README.md                # Project Documentation
```

---

## 🚀 Installation & Local Setup

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) / WAMP / LAMP or PHP 8.0+ installed locally.
- Web Browser (Chrome, Firefox, Edge, Safari).

### Steps
1. **Clone or Copy the Repository**:
   ```bash
   git clone https://github.com/dev-deepak-prajapati/deepsea-number-calculator.git
   ```
   ```bash
   cd c:\xampp\htdocs\deepsea-number-calculator
   ```
2. **Start Web Server**:
   Open XAMPP Control Panel and start the **Apache** server.

3. **Access in Browser**:
   Navigate to:
   ```text
   http://localhost/deepsea-number-calculator/index.php
   ```

