# Movie-Theatre

# Getting started

## Installation

Clone the repository

    git clone https://github.com/ramo772/movie-theatre

Switch to the repo folder

    cd movie-theatre
    
Install all the dependencies 

    composer install
    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env


Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
    
Run the seeders to generate all required data (Fake Data)

    php artisan db:seed


Start the local development server

    php artisan serve
    


You can now access the server at http://localhost:8000

At the Welcome View you will found all movies which have events and showtime

![image](https://user-images.githubusercontent.com/76254252/222986166-87a7d8cb-bf9e-4060-a42d-3a65ab606dbb.png)


Hit Register to create Admin account

![127 0 0 1_8000_register](https://user-images.githubusercontent.com/76254252/222985649-489a993a-aa48-45b9-b1a4-5c063421b563.png)

You will find counts of movies and events and show times and attendees at the dashboard 

![127 0 0 1_8000_dashboard](https://user-images.githubusercontent.com/76254252/222985732-49fe9a03-99b0-4c60-ac6a-6737bfa88fdb.png)

Admin Can Add and Edit and Delete  movies , show times , events  with image you can also find validations for each request
![image](https://user-images.githubusercontent.com/76254252/222986311-c051faec-b62f-4678-9f25-685d469acda9.png)

View Moviw Event And Show Times

![image](https://user-images.githubusercontent.com/76254252/222986353-315974a8-1041-45d5-a23c-838129ae4513.png)


Admin Can Add Movie To Event By Viewing The Event Add Hit Add New Movie "Admin can only add 3 movies per event"

![image](https://user-images.githubusercontent.com/76254252/222986465-30b44396-21bc-4cbf-8840-d862e77b6847.png)

Admin can view all registered attendees 
![image](https://user-images.githubusercontent.com/76254252/222986500-74a8e290-8a24-46c9-ba1e-1b662fcbfbfd.png)

Attendee will use the below form to book ticket he will choose the movie then choose the event day then ajax will return back the available show times related to this movie anbd this day 

![image](https://user-images.githubusercontent.com/76254252/222986526-e3cfa6f4-400f-4885-b3d8-49281a9c5c2b.png)




