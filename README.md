# Asset Management System

This project is an Asset Management System developed during my internship at VADC Computers in Nieuwpoort, Belgium. It is designed to help you efficiently manage your company's assets.

## Table of Contents
- [Features](#features)
- [Database Configuration](#database-configuration)
- [Setting Up the Database](#setting-up-the-database)
- [Contributing](#contributing)
- [License](#license)

## Features

1. **Login**
   - Use the login page to access the Asset Management System.
   - Enter your username and password to log in.

2. **Password Reset**
   - If you forget your password, click on "Forgot Password?" on the login page.
   - Enter your username and follow the instructions to reset your password.

3. **Add Asset**
   - Click the "Add" button to add a new asset to the system.
   - Fill in the required information and click "Add" to save the asset.

4. **Delete Asset**
   - Select the asset you want to remove from the list of assets.
   - Click the red "X" icon to remove the asset from the system.

5. **Export as CSV File**
   - Click the "Export as CSV" button to export the assets in the table as a CSV file.

6. **Logout**
   - Click the "Logout" button in the menu to log out of the Asset Management System.

## Database Configuration

Before you can start using the Asset Management System, you need to configure the database connection. Open the `includes/connect.php` file and update the following values:

```php
$hostname = "localhost";
$db_username = "root";
$db_password = "";
$database = "assetsdb";
```

Make sure to set these values to match your database setup.

## Setting Up the Database

To use the Asset Management System, you'll need to set up an SQL database named "assetsdb" with two tables: "users" and "assets." Here are the table structures:

**users Table:**
- `username` (VARCHAR): User's username.
- `password_hash` (VARCHAR): Password hash for authentication.

**assets Table:**
- `name` (VARCHAR): Asset name.
- `owner_name` (VARCHAR): Owner's name.
- `activation_date` (DATE): Date of asset activation.
- `serial_number` (VARCHAR): Asset's serial number.

You can create these tables using SQL commands or a database management tool.

## Contributing

Contributions to this project are welcome. If you have any improvements or bug fixes, please submit a pull request.

## License

This project is licensed under the MIT License.

**Disclaimer:** This script is provided as-is, and the author is not responsible for any issues or data loss caused by its use. Use it responsibly and at your own risk.