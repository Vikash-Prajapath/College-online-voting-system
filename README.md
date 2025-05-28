# College Online Voting System 🗳️

The College Online Voting System is a web-based platform designed to facilitate secure and efficient voting for college elections. The system allows students to register and cast votes online, while administrators and staff manage the election process. The project was developed specifically for a college election using PHP, MySQL Database, HTML, CSS, JavaScript (jQuery and Ajax), and Bootstrap for the design.

## 🚀 Features

- 🧑‍💼 Admin Panel to manage:
  - Voters
  - Candidates
  - Election results
- 🧑‍🎓 Student Login & Authentication
- 📊 Real-time vote counting and result display
- ✅ Duplicate voting prevention
- 📂 CSV Upload for bulk voter/candidate data
- 📉 Visual vote results using charts (can be extended)
- 🔐 Secure session-based login for voters and admins

## 🧱 Tech Stack

- **Frontend:** HTML, CSS, JavaScript, (jQuery, Ajax)
- **Backend:** PHP
- **Database:** MySQL
- **Libraries:** Font Awesome (for icons)

## 📁 Project Structure

```

myproject/
├── admin/              # Admin dashboard files
├── admin2/             # Secondary admin access (optional)
├── candidates/         # Candidate images and details
├── css/                # Custom CSS styles
├── Database/           # SQL files or DB structure
├── font-awesome-4.1.0/ # Icons library
├── login.php           # Voter login
├── vote.php            # Voting page
├── vote\_result.php     # Results display
├── voters.php          # Voter registration and listing
└── ...

````

## ⚙️ Setup Instructions

### Requirements:
- XAMPP / WAMP / LAMP Stack (or any web server with PHP & MySQL support)

### Steps:

1. **Clone or Download the Project:**
   ```bash
   git clone https://github.com/yourusername/college-online-voting-system.git

2. **Move to Server Directory:**

   * Place the `myproject/` folder inside `htdocs` (XAMPP) or your web server root directory.

3. **Database Setup:**

   * Open **phpMyAdmin**.
   * Create a new database (e.g., `voting_db`).
   * Import the SQL file found in `/Database/`.

4. **Configure Database Connection:**

   * Open `config.php`.
   * Update your database credentials:

     ```php
     <?php
       $conn = new mysqli('localhost', 'root', '', 'vote');
     ?>
     ```

5. **Run the Project:**

   * Start Apache and MySQL in XAMPP.
   * Open your browser and go to: `http://localhost/myproject`

6. **Login Credentials:**

   * **Admin Login:**

     * Login ID: `1`
     * Username: `admin`
     * Password: `admin`

   * **User Login:**

     * Login ID: `2`
     * Username: `user`
     * Password: `user`

## 📜 License

This project is open-source and free to use under the **MIT License**.
