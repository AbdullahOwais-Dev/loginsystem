
# <span style="color: blue;">Login System Project</span>

## <span style="color: blue;">Overview</span>
This project is a simple login system built using PHP and MySQL. It allows users to sign up, log in, and access a welcome page after successful authentication. The system includes user registration, password hashing for security, and session management to maintain user login states.

## <span style="color: blue;">Features</span>
- **User Registration**: New users can create an account by providing a username and password.
- **User Login**: Registered users can log in using their credentials.
- **Session Management**: Once logged in, users can access a welcome page that displays their username.
- **Password Security**: Passwords are hashed before being stored in the database to enhance security.
- **Error Handling**: The system provides feedback for invalid login attempts and registration errors.

## <span style="color: blue;">Technologies Used</span>
- **PHP**: Server-side scripting language for handling requests and responses.
- **MySQL**: Database management system for storing user credentials.
- **Bootstrap**: Front-end framework for responsive design.
- **jQuery**: JavaScript library for DOM manipulation and AJAX requests.

## <span style="color: blue;">File Structure</span>

```
/loginsystem
│
├── login.php         # Login page for users
├── signup.php        # Registration page for new users
├── welcome.php       # Welcome page for logged-in users
├── partials          # Directory containing reusable components
│   ├── _dbconnect.php # Database connection script
│   └── _nav.php      # Navigation bar
└── logout.php        # Logout script
```
## <span style="color: blue;">Installation</span>
1. Clone the repository or download the project files.
2. Set up a local server using **XAMPP** or any other PHP server.
3. Create a MySQL database and import the necessary tables for user management.
4. Update the database connection details in `partials/_dbconnect.php` to match your local setup.
5. Access the application by navigating to `http://localhost/loginsystem/login.php` in your web browser.

## <span style="color: blue;">Usage</span>
- **Sign Up**: Navigate to the signup page and create a new account by entering a username and password.
- **Log In**: After registration, log in using your credentials on the login page.
- **Welcome Page**: Upon successful login, you will be redirected to the welcome page, where you can see a personalized greeting.
- **Logout**: You can log out using the provided link on the welcome page.

## <span style="color: blue;">Contributing</span>
Contributions are welcome! If you have suggestions for improvements or new features, feel free to open an issue or submit a pull request.

## <span style="color: blue;">License</span>
This project is open-source and available under the **MIT License**.

## <span style="color: blue;">Acknowledgments</span>
- Thanks to the **PHP** and **MySQL** communities for their extensive documentation and support.
- Special thanks to **Bootstrap** and **jQuery** for their frameworks that made the front-end development easier.
