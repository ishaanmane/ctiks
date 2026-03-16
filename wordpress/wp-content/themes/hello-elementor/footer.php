<?php
/**
 * CTIKS Footer — footer.php
 * Modified for Hello Elementor 2025
 *
 * ============================================================
 * HOW TO ADD OR EDIT FOOTER LINKS IN THE FUTURE:
 *
 * To add a new link under any column (like Quick Links or Resources):
 * 1. Scroll down to the column you want to modify.
 * 2. Find the `<ul class="footer-links">` section.
 * 3. Copy an existing `<li>` line and paste it where you want it.
 * 4. Change the `href="/your-link/"` to your new page URL.
 * 5. Change the text between the `<a>...</a>` tags.
 *
 * Example — Adding a "Gallery" link:
 * <li><a href="/gallery/">Gallery</a></li>
 * ============================================================
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// User Login State Logic
$is_logged_in  = is_user_logged_in();
$logout_url    = wp_logout_url( home_url() );
$dashboard_url = admin_url();
?>

<footer class="ctiks-footer">

  <div class="ctiks-footer-inner">

    <div class="footer-col footer-col--about">
      <div class="footer-brand">
        <div class="footer-brand-title">CTIKS</div>
        <div class="footer-brand-sub">Centre For Traditional Indian<br>Knowledge and Skills</div>
        <div class="footer-brand-inst">IIT Bombay</div>
      </div>
    </div>

    <div class="footer-col">
      <h4 class="footer-col-heading">Quick Links</h4>
      <ul class="footer-links">
        <li><a href="/about-us/">About Us</a></li>
        <li><a href="/people/">People</a></li>
        <li><a href="/research/">Research</a></li>
        <li><a href="/academics/">Academics</a></li>
        <li><a href="/contact-us/">Contact Us</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4 class="footer-col-heading">Resources</h4>
      <ul class="footer-links">
        <li><a href="https://www.iitb.ac.in/" target="_blank">IIT Bombay</a></li>
        <li><a href="/news/">News &amp; Announcements</a></li>
        <li><a href="/events/">Events</a></li>
        <li><a href="/publications/">Publications</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <?php if ( $is_logged_in ) : ?>
        <h4 class="footer-col-heading">My Account</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( $dashboard_url ); ?>">Go to Dashboard</a></li>
          <li><a href="<?php echo esc_url( $logout_url ); ?>">Log Out</a></li>
        </ul>
      <?php else : ?>
        <h4 class="footer-col-heading">Account</h4>
        <ul class="footer-links">
          <li><a href="/wp-login.php">Log In</a></li>
        </ul>
      <?php endif; ?>
    </div>

  </div>

  <div class="footer-divider"></div>

  <div class="ctiks-footer-bottom">
    <span>&copy; <?php echo date('Y'); ?> Centre For Traditional Indian Knowledge and Skills, IIT Bombay. All rights reserved.</span>
  </div>

</footer>

<style>
/* ─── Reset ────────────────────────────────────────────── */
.ctiks-footer *, .ctiks-footer *::before, .ctiks-footer *::after {
  box-sizing: border-box; margin: 0; padding: 0;
}

/* ─── Footer Shell ─────────────────────────────────────── */
.ctiks-footer {
  background-color: #004225;
  width: 100%;
  padding: 56px 48px 0;
  font-family: Arial, Helvetica, sans-serif;
  border-top: 4px solid #FF8C00;
}

/* ─── Inner Grid ───────────────────────────────────────── */
.ctiks-footer-inner {
  max-width: 1140px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1.6fr 1fr 1fr 1fr;
  gap: 40px;
  padding-bottom: 48px;
}

/* ─── Brand Column ─────────────────────────────────────── */
.footer-brand-title {
  font-family: "Playfair Display", Georgia, serif;
  font-size: 1.8rem;
  font-weight: 700;
  color: #FF8C00;
  letter-spacing: 2px;
  margin-bottom: 10px;
}

.footer-brand-sub {
  font-size: 0.82rem;
  color: rgba(255,255,255,0.60);
  line-height: 1.6;
  margin-bottom: 6px;
}

.footer-brand-inst {
  font-size: 0.78rem;
  color: rgba(255,255,255,0.40);
  letter-spacing: 1px;
  text-transform: uppercase;
}

/* ─── Column Headings ──────────────────────────────────── */
.footer-col-heading {
  font-size: 0.72rem;
  font-weight: 700;
  color: rgba(255,255,255,0.90);
  letter-spacing: 2px;
  text-transform: uppercase;
  margin-bottom: 18px;
  padding-bottom: 10px;
  border-bottom: 1px solid rgba(255,255,255,0.10);
}

/* ─── Footer Links ─────────────────────────────────────── */
.footer-links {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.footer-links li a {
  color: rgba(255,255,255,0.55) !important;
  text-decoration: none !important;
  font-size: 0.85rem;
  line-height: 1.4;
  transition: color 0.2s ease, padding-left 0.2s ease;
  display: inline-block;
}

.footer-links li a:hover {
  color: #FF8C00 !important;
  padding-left: 4px;
}

/* ─── Divider ──────────────────────────────────────────── */
.footer-divider {
  max-width: 1140px;
  margin: 0 auto;
  height: 1px;
  background: rgba(255,255,255,0.15);
}

/* ─── Bottom Bar ───────────────────────────────────────── */
.ctiks-footer-bottom {
  max-width: 1140px;
  margin: 0 auto;
  padding: 20px 0 24px;
  text-align: center;
  color: rgba(255,255,255,0.45);
  font-size: 0.78rem;
  letter-spacing: 0.5px;
}

/* ─── Responsive ───────────────────────────────────────── */
@media (max-width: 900px) {
  .ctiks-footer-inner {
    grid-template-columns: 1fr 1fr;
    gap: 32px;
  }
  .footer-col--about {
    grid-column: 1 / -1; /* full width on tablet */
  }
}

@media (max-width: 540px) {
  .ctiks-footer {
    padding: 40px 24px 0;
  }
  .ctiks-footer-inner {
    grid-template-columns: 1fr;
    gap: 28px;
  }
  .footer-col--about { grid-column: auto; }
}
</style>

<?php wp_footer(); // ABSOLUTELY REQUIRED FOR ELEMENTOR ?>

</body>
</html>