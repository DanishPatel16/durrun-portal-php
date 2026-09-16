# Durrun Partner Portal (PHP + Bootstrap 5)

Pixel-perfect implementation of the **Durrun Partner Portal** designed with **Bootstrap 5**, custom CSS tokens, and the **Source Sans Pro** font (`Source Sans 3`).

Structured to match the **EKLevel** project architecture.

## 📁 Project Structure

```text
durrun-portal/
├── assets/
│   ├── css/
│   │   └── style.css                 # Custom styling, color tokens, responsive overrides
│   └── img/
│       ├── logo_card.png             # Durrun authentic logo
│       └── logo.svg                  # Vector SVG logo
├── includes/
│   ├── header.php                    # Shared head, fonts, Bootstrap 5 CDN, Chart.js
│   ├── sidebar.php                   # Reusable common sidebar with automatic active state
│   └── footer.php                    # Bootstrap 5 bundle JS and closing tags
├── path.php                          # Automatic relative & absolute path resolver
├── login.php                         # Partner Portal Sign In (Root Level)
├── view/                             # View Directory (Matches EKLevel architecture)
│   ├── dashboard.php                 # Partner Portal Dashboard
│   ├── provider-profile.php          # Provider Profile Management
│   ├── logout.php                    # Session logout handler (redirects to login.php)
│   ├── models/                       # Models Module Directory (Direct Implementation)
│   │   ├── modelslisting.php         # Models listing page (with search, filter, modal, delete prompt)
│   │   └── addmodels.php             # Add / Create Model page (with code tabs, upload toggles)
│   └── pages/                        # Pages Module Directory (Aliases / Redirects)
│       ├── pageslisting.php          # Redirects to view/models/modelslisting.php
│       └── addpages.php              # Redirects to view/models/addmodels.php
└── standalone/                       # Drop-in single-file versions with zero includes
    ├── login.php
    ├── dashboard.php
    ├── provider-profile.php
    ├── models.php
    └── models-add.php
```

## 🚀 How to Run

Run the local PHP server from the project directory:

```powershell
cd C:\Users\Lenovo\.gemini\antigravity\scratch\durrun-portal
php -S localhost:8080
```

Then open in your browser:
- **Login**: [http://localhost:8080/login.php](http://localhost:8080/login.php)
- **Dashboard**: [http://localhost:8080/view/dashboard.php](http://localhost:8080/view/dashboard.php)
- **Provider Profile**: [http://localhost:8080/view/provider-profile.php](http://localhost:8080/view/provider-profile.php)
- **Models Listing**: [http://localhost:8080/view/models/modelslisting.php](http://localhost:8080/view/models/modelslisting.php)
- **Add Model**: [http://localhost:8080/view/models/addmodels.php](http://localhost:8080/view/models/addmodels.php)
