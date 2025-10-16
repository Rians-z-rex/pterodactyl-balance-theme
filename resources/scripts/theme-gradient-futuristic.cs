/* ======================================================
   THEME: Gradient Futuristic - Pterodactyl Custom Theme
   Author: Rians x GPT
   Version: 1.0
   Description: Tema futuristik dengan efek neon & blur
====================================================== */

:root {
    --gradient-1: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    --gradient-2: linear-gradient(135deg, #00d2ff 0%, #3a7bd5 100%);
    --text-glow: 0 0 10px rgba(255,255,255,0.4);
    --card-bg: rgba(255, 255, 255, 0.05);
    --border-color: rgba(255, 255, 255, 0.15);
    --shadow-strong: 0 10px 30px rgba(0,0,0,0.4);
    --transition: all 0.3s ease;
}

body {
    background: linear-gradient(120deg, #0f2027, #203a43, #2c5364);
    color: #fff;
    font-family: 'Poppins', sans-serif;
    min-height: 100vh;
    margin: 0;
    transition: var(--transition);
}

/* ===== Navbar ===== */
.navbar {
    background: var(--gradient-1);
    box-shadow: var(--shadow-strong);
    border-bottom: 1px solid var(--border-color);
}

.navbar-brand,
.nav-link {
    color: #fff !important;
    font-weight: 600;
    text-shadow: var(--text-glow);
    transition: var(--transition);
}

.nav-link:hover {
    opacity: 0.8;
}

/* ===== Card & Panels ===== */
.card, .panel {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 16px;
    box-shadow: var(--shadow-strong);
    color: #fff;
    padding: 20px;
    backdrop-filter: blur(10px);
    transition: var(--transition);
}

.card:hover, .panel:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.08);
}

/* ===== Buttons ===== */
.btn {
    background: var(--gradient-2);
    color: #fff;
    border: none;
    padding: 10px 18px;
    border-radius: 10px;
    cursor: pointer;
    font-weight: 600;
    transition: var(--transition);
    text-shadow: var(--text-glow);
}

.btn:hover {
    opacity: 0.85;
    transform: translateY(-2px);
}

/* ===== Tables ===== */
table {
    width: 100%;
    border-collapse: collapse;
    background: var(--card-bg);
    border-radius: 10px;
    overflow: hidden;
}

th {
    background: rgba(255, 255, 255, 0.1);
    text-transform: uppercase;
    letter-spacing: 1px;
}

td, th {
    padding: 12px;
    border-bottom: 1px solid var(--border-color);
}

tr:hover {
    background: rgba(255, 255, 255, 0.05);
}

/* ===== Footer ===== */
.footer {
    text-align: center;
    padding: 15px 0;
    background: rgba(0,0,0,0.2);
    font-size: 0.9rem;
    color: #ccc;
    margin-top: 30px;
}

/* ===== Saldo Display ===== */
.navbar .balance-display {
    background: rgba(0,0,0,0.2);
    border-radius: 10px;
    padding: 6px 12px;
    font-weight: bold;
    font-size: 0.95rem;
    box-shadow: inset 0 0 10px rgba(255,255,255,0.2);
}

.balance-display span {
    color: #00eaff;
}
