<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/WeLink/Pics/Logo.png" type="image/png">
    <title>WeLink</title>
    <link rel="stylesheet" href="/WeLink/Shared.css">
    <!-- <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">



</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <img src="/WeLink/Pics/Logo.png" class="logo">
                    <li><a href="/WeLink">Home</a></li>
                    <li><a href="/WeLink/Chat/Chat.php">Chat</a></li>
                    
                    <!-- ME button -->
                    <li class="me-dropdown">
                        <div class="circle-button">
                            <span class="circle-button-text">ME</span>
                        </div>
                        <div class="me-menu">
                            <a href="/WeLink/Sign Up/Sign Up.php" class="menu-item">
                                <span class="menu-icon signup-icon"></span>Sign Up
                            </a>
                            <a href="/WeLink/Log In/Log In.php" class="menu-item">
                                <span class="menu-icon login-icon"></span>Log In
                            </a>
                        </div>
                    </li>
                    
                    <li><a href="/WeLink/Media/Media.php">Media</a></li>

                    <!-- Info dropdown with matching style -->
                    <li class="dropdown">
                        <a>Info</a>
                        <div class="dropdown-content">
                            <a href="/WeLink/Info/About/About.php">
                                <span class="menu-icon about-icon" ></span>About
                            </a>
                            <a href="/WeLink/Info/Contact Us/Contact Us.php">
                                <span class="menu-icon contact-icon"></span>Contact Us
                            </a>
                        </div>
                    </li>
                    
                    
                </ul>
            </nav>
        </div>
    </header>
    

    <!-- Chat circle -->
    <div class="chat-circle">
    <i class="fa-solid fa-headset"></i>
</div>


    <footer>
        <div class="container">
            <p>&copy;</p>
        </div>
    </footer>



<script>
document.addEventListener("DOMContentLoaded", function () {
  function normalize(path) {
    if (!path) return "/";
    try { path = decodeURIComponent(path); } catch {}
    let p = path.split("?")[0].split("#")[0];
    p = p.replace(/\/+$/, "");
    p = p.replace(/\/index\.php$/i, "");
    return p || "/";
  }

  const currentPath = normalize(window.location.pathname);

  // Only links that actually navigate (skip top-level Info <a> without href)
  const links = document.querySelectorAll("nav ul li a, .dropdown-content a, .me-menu a");

  links.forEach(link => {
    const rawHrefAttr = link.getAttribute("href");
    if (!rawHrefAttr) return; // ignore non-navigating anchors

    let linkPath;
    try {
      const u = new URL(link.href, window.location.origin);
      linkPath = normalize(u.pathname);
    } catch {
      return;
    }

    if (linkPath === currentPath) {
      // Mark the exact link
      link.classList.add("active");

      // Also mark its dropdown trigger (Info <a> or ME .circle-button)
      const dropdown = link.closest(".dropdown, .me-dropdown");
      if (dropdown) {
        let trigger;
        if (dropdown.classList.contains("me-dropdown")) {
          trigger = dropdown.querySelector(".circle-button");
        } else {
          // Prefer the top-level anchor inside .dropdown
          trigger = dropdown.querySelector(":scope > a") || dropdown.querySelector("a");
        }
        if (trigger) trigger.classList.add("active");
      }
    }
  });

  // Fallback hover glue for ME: keep button visually "hot" while menu is hovered
  // (This also covers browsers without :has())
  document.querySelectorAll(".me-dropdown").forEach(dd => {
    dd.addEventListener("mouseenter", () => dd.classList.add("menu-hover"));
    dd.addEventListener("mouseleave", () => dd.classList.remove("menu-hover"));
  });
});
</script>







</body>
</html>
