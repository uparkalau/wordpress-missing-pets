# WordPress Missing Pets Directory

WordPress Missing Pets Directory is a plugin and theme project that provides REST API endpoints for fetching pet data. It allows users to fetch pet data from the WordPress site using the `/wp-json/missing-pets/v1/pets` endpoint.

## Setup Instructions

### Cloning the Project

1. Clone the project repository from GitHub:

   ```
   git clone https://github.com/uparkalau/wordpress-missing-pets.git
   ```

### Setting Up Docker

2. Install Docker on your local machine if you haven't already done so.

3. Navigate to the project directory:

   ```
   cd wordpress-missing-pets
   ```

4. Run Docker Compose to build and start the Docker containers:

   ```
   docker-compose up -d
   ```

### Setting Up WordPress

5. Once Docker containers are running, you need to install WordPress on your local machine:
   - Open your web browser and navigate to `http://localhost:8000`.
   - Follow the WordPress installation steps, including setting up the database and creating an admin account.

6. After installing WordPress, log in to the WordPress admin dashboard (`wp-admin`) using the admin credentials you created.

7. Activate the "Pets Plugin" and "Pets Theme" from the WordPress admin dashboard.

8. Set the permalink structure by navigating to `Settings -> Permalinks` and selecting the "Post name" option. Save the changes.

9. You're now ready to test the application. Navigate to `http://localhost:8000` to access the WordPress site and test the REST API endpoints.

## Important Note

- Make sure to follow the setup instructions carefully to ensure the proper functioning of the application, especially setting the permalink structure to "Post name" for the REST API calls to work correctly.

## Author

- **Author:** Vlad P
- **GitHub:** [uparkalau](https://github.com/uparkalau)
