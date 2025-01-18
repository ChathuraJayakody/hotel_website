# Sha Luxury Hotel Website

## Project Description
This is a dynamic and responsive website created for the "Sha Luxury Hotel." The project showcases the hotel's features and provides functionality for user login, registration, and various services. The website integrates HTML, CSS, JavaScript, PHP, and a local database (`hotel`) to deliver a complete web solution.

---

## Project Structure
Below is the project structure:

```
HOTEL_WEBSITE/
|-- assets/
|   |-- images/       # Contains all image assets used in the website
|   |-- videos/       # Contains video assets 
|
|-- css/
|   |-- myprofile.css # Styling for the user profile page
|   |-- style.css     # General styling for the website
|   |-- styles.css    # Additional styling for specific components
|   |-- try10.css     # Experimental or additional styling
|
|-- db/
|   |-- hotel.sql     # Exported database structure and data
|   |-- READ ME.txt   # Queries and notes related to the database
|
|-- about.php         # About Us page
|-- dayout.php        # Day Out service page
|-- gallery1.php      # Gallery page for hotel visuals
|-- get_guides.php    # Fetch and display guides
|-- home.php          # Home page of the website
|-- login.php         # Login functionality
|-- myprofile.php     # User profile page
|-- poolparty.php     # Pool party service page
|-- room_booking.php  # Room booking page
|-- services.php      # Services offered by the hotel
|-- update_myprofile.php # Profile update functionality
|-- update_profile.php   # Update profile logic
|-- wedding_booking.php  # Wedding booking page
```

---

## Features
- **User Authentication**: Login and registration functionality.
- **Dynamic Pages**: Pages for booking, services, and user profile updates.
- **Database Integration**: A `hotel` database that stores user information, bookings, and services.
- **Responsive Design**: Optimized for various devices with custom CSS.
- **Modern UI/UX**: Styled with fonts and animations to deliver a premium experience.

---

## Installation Guide

### Prerequisites
- **Web Server**: XAMPP or any other PHP-supported server.
- **Database Server**: MySQL.
- **Browser**: A modern web browser.

### Steps to Run Locally
1. Clone the repository:
   ```bash
   git clone https://github.com/ChathuraJayakody/hotel_website.git
   ```

2. Move the project folder to your web server's root directory:
   - For XAMPP: Place it in the `htdocs` folder.

3. Import the database:
   - Open `phpMyAdmin`.
   - Create a database named `hotel`.
   - Import the `hotel.sql` file located in the `db` folder.

4. Update database credentials in the PHP files (if needed):
   - Open the PHP files such as `login.php`, `register.php`, etc.
   - Ensure the database connection details match your local setup.

5. Start your server:
   - Run Apache and MySQL using XAMPP.

6. Access the website:
   - Open your browser and navigate to `http://localhost/HOTEL_WEBSITE/home.php`.

---

## Usage Instructions
1. **Login or Register**:
   - Use the `login.php` or `register.php` functionality.
2. **Explore Services**:
   - Navigate through the pages like `dayout.php`, `poolparty.php`, and `wedding_booking.php`.
3. **Book a Room**:
   - Use `room_booking.php` to make a booking.
4. **View Profile**:
   - Access and update user details via `myprofile.php`.

---

## Database Details
### Database Name: `hotel`
#### Tables
1. **users**: Stores user credentials and profile details.
   - `id` (Primary Key)
   - `username`
   - `email`
   - `nic`
   - `password`

2. **bookings**: Stores user booking details.
   - `booking_id` (Primary Key)
   - `user_id` (Foreign Key)
   - `room_type`
   - `check_in`
   - `check_out`
   - `status`

*Additional tables may exist for other services.*

---

## Future Enhancements
- Integration of payment gateways.
- Improved animations and interactive components.
- Deployment to a live server.
- Enhanced admin panel for managing bookings and user data.

---

## Acknowledgements
- **Fonts**: Google Fonts.
- **Tools**: Visual Studio Code, XAMPP.
- **Inspiration**: Sha Luxury Hotel team.

Feel free to contribute to the project or suggest improvements!
