<?php
// navbar.php
?>
<style>
  .navbar {
    background: rgba(0, 0, 0, 0.85);
    backdrop-filter: blur(8px);
    padding: 1rem 2rem;
    position: fixed;
    width: 100%;
    z-index: 1000;
    transition: all 0.3s ease;
    height: var(--nav-height);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .navbar:hover {
    background-color: rgba(0, 0, 0, 0.95);
  }

  .nav-container {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: flex-start;
  }

  .nav-left {
    display: flex;
    align-items: center;
    gap: 3rem;
  }

  .nav-brand {
    color: var(--spotify-white);
    font-weight: 800;
    font-size: 1.8rem;
    text-decoration: none;
    letter-spacing: -0.5px;
    font-family: 'Circular', 'Poppins', sans-serif;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  /* Styling untuk logo PNG */
  .nav-brand img {
    width: 32px;
    height: 32px;
    object-fit: contain;
    transition: all 0.3s ease;
  }

  .nav-brand:hover {
    transform: scale(1.02);
    color: var(--spotify-green);
  }

  .nav-links {
    display: flex;
    gap: 2rem;
    align-items: center;
    margin-left: 1rem;
  }

  .nav-link {
    color: var(--spotify-light-gray);
    text-decoration: none;
    font-weight: 700;
    font-size: 0.95rem;
    transition: all 0.2s ease;
    position: relative;
    padding: 0.75rem 1.25rem;
    border-radius: 4px;
    letter-spacing: 0.5px;
  }

  .nav-link:hover {
    color: var(--spotify-white);
    background: rgba(255, 255, 255, 0.1);
  }

  .nav-link.active {
    color: var(--spotify-white);
    background: rgba(255, 255, 255, 0.15);
  }

  .mobile-menu {
    display: none;
    background: none;
    border: none;
    color: var(--spotify-white);
    cursor: pointer;
    padding: 0.5rem;
    margin-left: auto;
  }

  @media (max-width: 768px) {
    .navbar {
      padding: 1rem;
    }

    .nav-links {
      display: none;
    }

    .mobile-menu {
      display: block;
    }

    .nav-brand {
      font-size: 1.5rem;
    }

    /* Responsive logo untuk mobile */
    .nav-brand img {
      width: 28px;
      height: 28px;
    }
  }
</style>

<nav class="navbar">
  <div class="nav-container">
    <div class="nav-left">
      <a href="?page=home" class="nav-brand">
        <img src="assets/img/LOGOKULINER.png" alt="KULINER Logo" />
        KULINER
      </a>
    </div>
    <div class="nav-links">
      <?php
      $current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
      $menu_items = [
        'home' => 'Home',
        'makanan' => 'Makanan',
        'minuman' => 'Minuman',
        'about' => 'About',
        'contact' => 'Contact'
      ];

      foreach ($menu_items as $page => $label) {
        $active_class = ($current_page === $page) ? 'active' : '';
        echo "<a href='?page={$page}' class='nav-link {$active_class}'>{$label}</a>";
      }
      ?>
    </div>
    <button class="mobile-menu">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <line x1="4" y1="12" x2="20" y2="12"></line>
        <line x1="4" y1="6" x2="20" y2="6"></line>
        <line x1="4" y1="18" x2="20" y2="18"></line>
      </svg>
    </button>
  </div>
</nav>