# Access Wireless - Inventory Management System

A modern, enterprise-grade inventory management system with Google OAuth authentication, built with PHP and MySQL.

## 🚀 Features

- **Google Sign-In Authentication** - Secure login using Google OAuth 2.0
- **Modern Dashboard** - Clean, responsive admin dashboard with sidebar navigation
- **Inventory Management** - Complete inventory tracking and management system
- **User Management** - Agent and supervisor management
- **Sales Reports** - Daily and monthly sales analytics
- **Forecasting Tools** - Inventory demand forecasting and analysis
- **Real-time Updates** - Live activity tracking and notifications

## 📋 Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- XAMPP / WAMP / LAMP (or any PHP server)
- Google Cloud Console account (for OAuth)
- Web browser (Chrome, Firefox, Edge, etc.)

## 🛠️ Installation

### Step 1: Clone or Download Project

```bash
# If using git
git clone <repository-url>
cd php_crud_login

# Or download and extract to your web server directory
# For XAMPP: C:\xampp\htdocs\php_crud_login
```

### Step 2: Database Setup

1. Open phpMyAdmin (http://localhost/phpmyadmin)
2. Create a new database named `user_management`
3. Run the following SQL to create the users table:

```sql
CREATE DATABASE user_management;

USE user_management;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255),
    google_id VARCHAR(255) UNIQUE,
    name VARCHAR(255),
    picture TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Step 3: Configure Database Connection

Edit `db.php` with your database credentials:

```php
$servername = "localhost";
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password
$database = "user_management";
```

### Step 4: Google OAuth Setup

1. Go to [Google Cloud Console](https://console.cloud.google.com/)
2. Create a new project or select an existing one
3. Navigate to **APIs & Services** > **Credentials**
4. Click **Create Credentials** > **OAuth client ID**
5. Configure OAuth consent screen:
   - Choose **External** user type
   - Fill in app name, support email, and developer contact
   - Add scopes: `email`, `profile`, `openid`
6. Create OAuth 2.0 Client ID:
   - Application type: **Web application**
   - Name: Access Wireless Dashboard
   - Authorized JavaScript origins:
     - `http://localhost`
     - `http://localhost:80`
     - `http://127.0.0.1`
   - Authorized redirect URIs:
     - `http://localhost/php_crud_login/auth.php`
7. Copy your **Client ID** and **Client Secret**

### Step 5: Configure Google OAuth

Edit `config.php` and add your credentials:

```php
define('GOOGLE_CLIENT_ID', 'your-client-id.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', 'your-client-secret');
```

### Step 6: Start Server

**For XAMPP:**
1. Start Apache and MySQL from XAMPP Control Panel
2. Open browser and navigate to: `http://localhost/php_crud_login/`

**For WAMP:**
1. Start all services
2. Navigate to: `http://localhost/php_crud_login/`

**For LAMP:**
1. Start Apache and MySQL services
2. Navigate to: `http://localhost/php_crud_login/`

## 📁 Project Structure

```
php_crud_login/
├── auth.php                  # Login/authentication page
├── config.php                # Google OAuth configuration
├── db.php                    # Database connection
├── dashboard.php             # Main dashboard (routing)
├── google_callback.php       # Google OAuth callback handler
├── index.php                 # Entry point (redirects to auth)
├── logout.php                # Logout handler
├── pages/                    # Dashboard module pages
│   ├── home.php              # Home dashboard
│   ├── inventory_requests.php
│   ├── inventory_assignment.php
│   ├── forecasting_report.php
│   ├── on_hand_inventory.php
│   ├── device_counts.php
│   ├── daily_sales.php
│   ├── monthly_reports.php
│   ├── agent_logins.php
│   ├── supervisors.php
│   ├── same_day.php
│   └── inventory_age.php
└── README.md                 # This file
```

## 🎯 Usage

### First Time Setup

1. Visit `http://localhost/php_crud_login/`
2. You'll be redirected to the login page
3. Click "Sign in with Google"
4. Select your Google account
5. First-time users are automatically registered
6. You'll be redirected to the dashboard

### Dashboard Navigation

- **Home** - Overview with KPI cards and recent activity
- **CGM Agent Logins & Supervisors** - Agent management
- **Inventory Tools** - Complete inventory management suite
  - Inventory Assignment Tool
  - Forecasting Report
  - Inventory Requests
  - On Hand Inventory
  - Same Day Swap
  - Device Counts by Store/Assignments
  - Inventory Age by Store/Assignments
- **Sales Reports** - Sales analytics and reports
  - Daily Sales
  - Monthly Reports

### Logout

Click the "Logout" button in the top-right corner to securely log out and clear all session data.

## 🔒 Security Features

- **Session Management** - Secure PHP sessions
- **SQL Injection Prevention** - Prepared statements
- **XSS Protection** - Input sanitization with `htmlspecialchars()`
- **OAuth 2.0** - Industry-standard authentication
- **No Password Storage** - Google handles authentication
- **Auto-logout** - Session timeout protection

## 🎨 Design Features

- **Modern UI** - Clean, professional interface
- **Responsive Design** - Works on desktop, tablet, and mobile
- **Dark Sidebar** - Fixed navigation with collapsible sections
- **Card-based Layout** - Easy-to-read information cards
- **Status Badges** - Color-coded status indicators
- **Smooth Animations** - Transitions and hover effects

## 🛠️ Technologies Used

- **Backend**: PHP 7.4+
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **UI Framework**: Bootstrap 5.3.2
- **Icons**: Font Awesome 6.4.0
- **Fonts**: Inter (Google Fonts)
- **Authentication**: Google OAuth 2.0

## 📝 Configuration Files

### `config.php`
Contains Google OAuth credentials:
- `GOOGLE_CLIENT_ID` - Your Google OAuth Client ID
- `GOOGLE_CLIENT_SECRET` - Your Google OAuth Client Secret

### `db.php`
Database connection settings:
- Server name
- Username
- Password
- Database name

## 🔧 Troubleshooting

### "Access blocked: Authorization Error"
- Ensure `http://localhost` is added to Authorized JavaScript origins in Google Cloud Console
- Check that OAuth consent screen is configured
- Verify Client ID in `config.php` matches Google Cloud Console

### Database Connection Error
- Verify MySQL is running
- Check credentials in `db.php`
- Ensure database `user_management` exists

### Session Issues
- Check PHP session directory permissions
- Verify `session_start()` is called on all pages
- Clear browser cookies if issues persist

### Google Sign-In Not Working
- Verify Client ID is correct in `config.php`
- Check browser console for errors
- Ensure authorized origins match your local URL exactly

## 📄 License

This project is proprietary software for Access Wireless.

## 👥 Support

For issues or questions:
1. Check the troubleshooting section above
2. Verify all configuration steps are completed
3. Check browser console for JavaScript errors
4. Review PHP error logs

## 🚀 Future Enhancements

- [ ] Real-time inventory updates
- [ ] Email notifications
- [ ] Advanced reporting features
- [ ] Mobile app integration
- [ ] Multi-language support
- [ ] Role-based access control
- [ ] Audit logging
- [ ] Data export features

## 📞 Contact

For technical support or inquiries, please contact your system administrator.

---

**Version**: 1.0.0  
**Last Updated**: November 2025  
**Developed for**: Access Wireless

