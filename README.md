didnt work let's uses cmd jhor
mavis-gaming-site/
│
├── public/                          # Public root (entrypoint)
│   ├── index.php                    # Homepage
│   ├── blog.php                     # Blog listing
│   ├── post.php                     # Single blog post
│   ├── portfolio.php               # Portfolio projects
│   ├── contact.php                 # Contact form
│   ├── game.php                    # Mini game page
│   ├── newsletter_subscribe.php    # Newsletter endpoint
│   ├── assets/
│   │   ├── css/
│   │   │   ├── main.css
│   │   │   ├── themes.css
│   │   │   └── admin.css
│   │   ├── js/
│   │   │   ├── main.js
│   │   │   ├── theme-toggle.js
│   │   │   ├── game-embed.js
│   │   │   ├── newsletter.js
│   │   │   └── comments.js
│   │   ├── images/
│   │   └── fonts/
│   └── games/
│       ├── flappy-mavis/
│       │   └── index.html
│       └── ... more games
│
├── includes/                        # Reusable components
│   ├── header.php
│   ├── footer.php
│   ├── sidebar.php
│   ├── admin-header.php
│   └── admin-sidebar.php
│
├── admin/                           # Admin panel
│   ├── index.php                    # Dashboard
│   ├── manage-posts.php            # CRUD blog
│   ├── manage-projects.php         # CRUD portfolio
│   ├── manage-users.php            # (optional)
│   ├── settings.php
│   ├── newsletter.php              # Manage subscriptions
│   ├── comments.php                # Manage comments
│   └── logs/                       # Error logs
│       ├── app.log
│       ├── security.log
│       └── ...
│
├── security/                        # All security checks
│   ├── auth.php                    # Login / access control
│   ├── csrf.php                    # CSRF token utils
│   ├── sanitize.php                # Input sanitization
│   ├── firewall.php                # IP/block rules
│   └── rate-limit.php             # Basic DDoS protection
│
├── backend/                         # PHP logic / controllers
│   ├── blog/
│   │   ├── create.php
│   │   ├── update.php
│   │   ├── delete.php
│   │   └── fetch.php
│   ├── portfolio/
│   ├── comments/
│   ├── users/
│   └── ...
│
├── database/
│   ├── db.php                      # PDO/MySQL connection
│   ├── schema.sql                  # All CREATE TABLES
│   └── seed.sql                    # Optional dummy data
│
├── tests/                           # Unit/feature tests
│   ├── blogTest.php
│   ├── commentTest.php
│   ├── authTest.php
│   └── ...
│
├── logs/
│   ├── app.log
│   ├── db-errors.log
│   └── error.log
│
├── .env                             # DB credentials, secrets
├── .htaccess                        # Apache URL rewriting
├── composer.json                   # PHP packages (like PHPMailer, dotenv)
├── README.md
└── LICENSE
