<?php
/**
 * CTIKS Header — header.php
 * Modified for Hello Elementor 2025
 * Overrides parent theme header for the Centre for Traditional Indian Knowledge and Skills
 *
 * ============================================================
 * HOW TO ADD A DROPDOWN TO ANY NAV LINK IN FUTURE:
 *
 * 1. Add class="has-dropdown" to the parent <li>
 * 2. Add a <ul class="dropdown"> inside that <li>
 *
 * Example — adding a dropdown to Research:
 *
 * <li class="has-dropdown">
 * <a href="/research/">Research</a>
 * <ul class="dropdown">
 * <li><a href="/research/projects/">Projects</a></li>
 * <li><a href="/research/publications/">Publications</a></li>
 * <li><a href="/research/grants/">Grants</a></li>
 * </ul>
 * </li>
 *
 * HOW TO ADD A PLAIN NAV LINK (no dropdown):
 * <li><a href="/gallery/">Gallery</a></li>
 * ============================================================
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Hello Elementor standard viewport filter
$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); // REQUIRED FOR ELEMENTOR ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="ctiks-fresh-header">

  <div class="header-top">

    <div class="header-logo-container">
      <a href="https://www.iitb.ac.in/" target="_blank">
        <img src="<?php echo content_url('/uploads/2026/02/iit_logo.png'); ?>" alt="IIT Bombay Logo">
      </a>
    </div>

    <div class="header-text-container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-title-link">
        <div class="ctiks-main-title">Centre For Traditional</div>
        <div class="ctiks-main-title">Indian Knowledge and Skills</div>
      </a>
      <a href="https://www.iitb.ac.in/" class="header-iit-link">
        <div class="ctiks-iit-title">IIT Bombay</div>
      </a>
    </div>

    <div class="header-logo-container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo content_url('/uploads/2026/02/ctiks_logo.png'); ?>" alt="CTIKS Logo">
      </a>
    </div>

  </div>

  <nav class="ctiks-nav">
    <ul class="nav-list">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
      <li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
      <li><a href="<?php echo esc_url( home_url( '/people/' ) ); ?>">People</a></li>
      <li><a href="<?php echo esc_url( home_url( '/research/' ) ); ?>">Research</a></li>
      <li><a href="<?php echo esc_url( home_url( '/academics/' ) ); ?>">Academics</a></li>
	  <li class="has-dropdown">
      	<a href="#">Activities</a>
      	<ul class="dropdown">
     		<li><a href="/news/">News</a></li>
 			<li><a href="/announcements/">Announcements</a></li>
 			<li><a href="/eventspage/">Events</a></li>
 		</ul>
 	  </li>
      <li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
    </ul>
    <button class="nav-hamburger" aria-label="Toggle menu" onclick="ctiksMobileMenu()">
      <span></span><span></span><span></span>
    </button>
  </nav>

</header>

<style>
/* ─── Reset ────────────────────────────────────────────── */
.ctiks-fresh-header *, .ctiks-fresh-header *::before, .ctiks-fresh-header *::after {
  box-sizing: border-box; margin: 0; padding: 0;
}
.ctiks-fresh-header {
  width: 100%;
  font-family: "Playfair Display", Georgia, serif;
  box-shadow: 0 2px 12px rgba(0,0,0,0.10);
  position: relative;
  z-index: 1000;
}
/* ─── Top Bar ──────────────────────────────────────────── */
.header-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 18px 48px;
  background-color: #f4f7f9;
  gap: 24px;
}
/* ─── Logos ────────────────────────────────────────────── */
.header-logo-container {
  width: 90px; height: 90px;
  flex-shrink: 0;
  display: flex; align-items: center; justify-content: center;
}
.header-logo-container img {
  width: 100%; height: 100%;
  object-fit: contain; display: block;
}
/* ─── Title ────────────────────────────────────────────── */
.header-text-container { flex: 1; text-align: center; }
.header-title-link, .header-iit-link { text-decoration: none !important; display: block; }
.ctiks-main-title {
  font-family: "Playfair Display", Georgia, serif;
  font-size: clamp(1.1rem, 2.6vw, 2rem);
  font-weight: 700; color: #aa1313 !important;
  line-height: 1.25; text-decoration: none !important;
}
.ctiks-iit-title {
  font-family: "Playfair Display", Georgia, serif;
  font-size: clamp(1rem, 2.2vw, 1.75rem);
  font-weight: 700; color: #aa1313 !important;
  line-height: 1.25; margin-top: 4px; text-decoration: none !important;
}
/* ─── Nav Bar ──────────────────────────────────────────── */
.ctiks-nav {
  background-color: #004225;
  width: 100%;
  display: flex; align-items: center; justify-content: center;
  padding: 0 48px;
  position: relative;
  border-bottom: 3px solid #FF8C00;
  min-height: 52px;
}
.nav-list { list-style: none; display: flex; align-items: center; margin: 0; padding: 0; }
.nav-list > li { position: relative; }
.nav-list > li > a {
  display: flex; align-items: center; gap: 5px;
  color: rgba(255,255,255,0.88) !important;
  text-decoration: none !important;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 0.88rem; font-weight: 600;
  letter-spacing: 1.8px; text-transform: uppercase;
  padding: 16px 28px;
  position: relative;
  transition: color 0.25s ease;
}
.nav-list > li > a::after {
  content: '';
  position: absolute;
  bottom: 10px; left: 28px; right: 28px;
  height: 2px; background: #FF8C00;
  transform: scaleX(0); transform-origin: center;
  transition: transform 0.25s ease;
}
.nav-list > li > a:hover { color: #ffffff !important; }
.nav-list > li > a:hover::after { transform: scaleX(1); }
.nav-list > li > a.active { color: #FF8C00 !important; }
.nav-list > li > a.active::after { transform: scaleX(1); }
/* ─── Dropdown arrow ───────────────────────────────────── */
.has-dropdown > a::before {
  content: '▾'; order: 1;
  font-size: 0.75rem; opacity: 0.7;
  transition: transform 0.25s ease; letter-spacing: 0;
}
.has-dropdown:hover > a::before,
.has-dropdown.open > a::before { transform: rotate(180deg); }
/* ─── Dropdown menu ────────────────────────────────────── */
.dropdown {
  display: none;
  position: absolute; top: 100%; left: 0;
  min-width: 200px;
  background-color: #003d20;
  list-style: none; padding: 8px 0; margin: 0;
  border-top: 2px solid #FF8C00;
  border-radius: 0 0 4px 4px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.30);
  z-index: 200;
  opacity: 0; transform: translateY(6px);
  transition: opacity 0.2s ease, transform 0.2s ease;
  pointer-events: none;
}
.has-dropdown:hover > .dropdown {
  display: block; opacity: 1;
  transform: translateY(0); pointer-events: auto;
}
.dropdown li a {
  display: block;
  color: rgba(255,255,255,0.75) !important;
  text-decoration: none !important;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 0.82rem; font-weight: 500;
  letter-spacing: 0.8px; padding: 11px 20px;
  transition: background 0.2s ease, color 0.2s ease, padding-left 0.2s ease;
  border-bottom: 1px solid rgba(255,255,255,0.06);
}
.dropdown li:last-child a { border-bottom: none; }
.dropdown li a:hover {
  background-color: rgba(255,140,0,0.12);
  color: #FF8C00 !important; padding-left: 26px;
}
/* ─── Hamburger ────────────────────────────────────────── */
.nav-hamburger {
  display: none; flex-direction: column; gap: 5px;
  background: none; border: none; cursor: pointer; padding: 10px 14px;
}
.nav-hamburger span { display: block; width: 24px; height: 2px; background: #fff; border-radius: 2px; transition: all 0.3s ease; }
/* ─── Tablet ───────────────────────────────────────────── */
@media (max-width: 900px) {
  .header-top { padding: 14px 24px; }
  .header-logo-container { width: 70px; height: 70px; }
  .ctiks-nav { justify-content: center; }
  .nav-list > li > a { padding: 16px 16px; letter-spacing: 1px; font-size: 0.82rem; }
  .nav-list > li > a::after { left: 16px; right: 16px; }
}
/* ─── Mobile ───────────────────────────────────────────── */
@media (max-width: 768px) {
  .header-top { padding: 12px 16px; gap: 12px; }
  .header-logo-container { width: 58px; height: 58px; }
  .ctiks-nav { padding: 0; justify-content: flex-start; min-height: 48px; }
  .nav-hamburger { display: flex; align-items: center; flex-shrink: 0; }
  .nav-list {
    display: none; flex-direction: column; width: 100%;
    padding: 6px 0 10px;
    position: absolute; top: 100%; left: 0; right: 0;
    background-color: #004225; z-index: 100;
    border-top: 1px solid rgba(255,255,255,0.12);
    box-shadow: 0 6px 16px rgba(0,0,0,0.25);
  }
  .nav-list.open { display: flex; }
  .nav-list > li > a { padding: 13px 24px; letter-spacing: 1px; font-size: 0.85rem; border-bottom: 1px solid rgba(255,255,255,0.08); }
  .nav-list > li > a::after { display: none; }
  .dropdown {
    display: none; position: static;
    box-shadow: none; border-top: none; border-radius: 0;
    background-color: rgba(0,0,0,0.20);
    opacity: 1; transform: none; pointer-events: auto; padding: 4px 0;
  }
  .has-dropdown.open > .dropdown { display: block; }
  .has-dropdown:hover > .dropdown { display: none; }
  .has-dropdown.open:hover > .dropdown { display: block; }
  .dropdown li a { padding: 10px 36px; font-size: 0.80rem; }
}
@media (max-width: 480px) {
  .header-logo-container { width: 46px; height: 46px; }
  .header-top { padding: 10px 12px; }
}
</style>

<script>
function ctiksMobileMenu() {
  var nav   = document.querySelector('.ctiks-fresh-header .nav-list');
  var btn   = document.querySelector('.ctiks-fresh-header .nav-hamburger');
  var open  = nav.classList.toggle('open');
  var spans = btn.querySelectorAll('span');
  if (open) {
    spans[0].style.transform = 'translateY(7px) rotate(45deg)';
    spans[1].style.opacity   = '0';
    spans[2].style.transform = 'translateY(-7px) rotate(-45deg)';
  } else {
    spans[0].style.transform = spans[2].style.transform = '';
    spans[1].style.opacity   = '';
    document.querySelectorAll('.ctiks-fresh-header .has-dropdown.open')
      .forEach(function(el){ el.classList.remove('open'); });
  }
}
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.ctiks-fresh-header .nav-list > li > a')
    .forEach(function(link) {
      if (window.location.pathname === link.getAttribute('href') ||
          window.location.pathname.startsWith(link.getAttribute('href').replace(/\/$/, '') + '/')) {
        link.classList.add('active');
      }
    });
  document.querySelectorAll('.ctiks-fresh-header .has-dropdown > a')
    .forEach(function(link) {
      link.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) {
          e.preventDefault();
          var parent = this.closest('.has-dropdown');
          var wasOpen = parent.classList.contains('open');
          document.querySelectorAll('.ctiks-fresh-header .has-dropdown')
            .forEach(function(el){ el.classList.remove('open'); });
          if (!wasOpen) parent.classList.add('open');
        }
      });
    });
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.ctiks-fresh-header')) {
      document.querySelectorAll('.ctiks-fresh-header .has-dropdown.open')
        .forEach(function(el){ el.classList.remove('open'); });
    }
  });
});
</script>
