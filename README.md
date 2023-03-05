# Orcas-Task

# Getting started

## Installation

Clone the repository

    git clone https://github.com/ramo772/movie-theatre

Switch to the repo folder

    cd movie-theatre
    
Install all the dependencies 

    composer install


Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
    
Run the seeders to generate all required data (Fake Data)

    php artisan db:seed


Start the local development server

    php artisan serve
    


You can now access the server at http://localhost:8000

At the Welcome View you will found all movies which have events and showtime



Hit Register to create Admin account

![127 0 0 1_8000_register](https://user-images.githubusercontent.com/76254252/222985649-489a993a-aa48-45b9-b1a4-5c063421b563.png)

You will find counts of movies and events and show times and attendees at the dashboard 

![127 0 0 1_8000_dashboard](https://user-images.githubusercontent.com/76254252/222985732-49fe9a03-99b0-4c60-ac6a-6737bfa88fdb.png)

Admin Can Add and Edit and Delete  movies , show times , events  with image you can also find validations for each request


Admin Can Add Movie To Event By Viewing The Event Add Hit Add New Movie "Admin can only add 3 movies per event"

![Uploading 127.0.0.1_8000_day_6.png…]()


