# Vue & Laravel API
Vue.js frontend connected to a Laravel REST API, featuring dynamic data fetching, filtering, and interactive display.

## Installation
Clone the repository and go into the project folder.

The project is split into two parts:
- frontend/ ... Vue.js application  
- backend/ ... Laravel API 

### Frontend
Open the frontend folder and run it using a local server.

### Backend
Navigate to the backend folder and run the following:

- composer install
- Copy .env.example to .env
- Update database credentials
- php artisan migrate
- php artisan db:seed
- php artisan serve

## Usage
- The frontend fetches data from the Laravel API  
- A list of entries is displayed on load  
- Clicking an item displays the details without navigating away  
- Filtering is handled through the API endpoints  

## Contributing
This project is completed individually. Standard Git workflow is followed using feature branches, pull requests, and self-reviews.

## History
Initial project setup includes:
- Separate frontend and backend structure  
- Base frontend scaffold (HTML, CSS, JS, Sass)  
- Initial styling (grid + reset)  
- README setup  

## Credits
Created by Laila Seif  

## License
MIT License