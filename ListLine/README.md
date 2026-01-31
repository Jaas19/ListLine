<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Project Structure

### app/Http/Controllers

Contains all the controllers developed by José Arias, excluding "Controller" which is from base laravel

/AuthController.php - Handles logins and logouts of users.
/MessageController.php - Handles all http requests that mostly require interaction with the Message model. 
/ProgramController.php - Handles all http requests that mostly require interaction with the Program model.
/TotalController.php - Handles all http requests that mostly require interaction with the Total model.
/TotalTypeController.php - Handles all http requests that mostly require interaction with the TotalType model.
/UserController.php - Handles all http requests that mostly require interaction with the User model.

### app/Http/Middleware

isAdmin.php - Checks if the current user trying to acces the protected view is an admin, if not, denies access.

### app/Models

Contains all the models developed by José Arias.

Message.php - Messages are those sent by users of the system, received by other users.
    transmissor_id: User that sends the message.
    receiver_id: User that receives the message.
    header: Title of the message.
    body: Text of the message.
    image: Optional picture attached to the message.

Program.php - Programs are the different lottery programs where clients can bet, each have different commission for the lottery agencies.
    name: Name of the program
    status: Status of the program, must be 1 or 0.
    commission: % of commission the agency receives from clients' bets, can be freely changed by the admin.

Total.php - Abstract, contains the amount of something.
    type_id: id of the type of total, from the total_types table.
    user_id: id of the user/agency that this amount corresponds to.
    program_id: id of the program that this amount corresponds to.
    day: day where the amount was registered.
    amount: quantity.

TotalType.php - Identifies what kind of info represents the Total model, is basically the unit, or the "Key" in "key value", in order for the system to work properly, balance, commission, sale and payout total types must be present.
    name: Name of the type, can be freely changed by the admin.
    status: Status of the type, must be 1 or 0.
    description: Detail of the type, can be freely changed by the admin.

User.php - Base user model of laravel, modified by José Arias in order to use it for the project. All info of the user is initially written by the admin.
    name: Name of the user.
    email: User's email, needed to log in.
    role: Role of the user, must be admin or user.
    photo: User's photo upon registration.
    password: password to log in.

### app/Providers

AppServiceProvider.php: base laravel class, used in this project for dependencies injection, needed for the service architecture, and View composer, which compacts repeated info to all views, which are the user model, a variable thats true or false depending on if the user is admin, and all the messages received.

### app/Services

AuthService: Service that assists the shortening of it's controller.
AuthServiceInterface: Interface implemented by it's service, injected to the controller.
MessageService: Service that assists the shortening of it's controller.
MessageServiceInterface: Interface implemented by it's service, injected to the controller.
ProgramService: Service that assists the shortening of it's controller.
ProgramServiceInterface: Interface implemented by it's service, injected to the controller.
TotalService: Service that assists the shortening of it's controller.
TotalServiceInterface: Interface implemented by it's service, injected to the controller.
TotalTypeService: Service that assists the shortening of it's controller.
TotalTypeServiceInterface: Interface implemented by it's service, injected to the controller.
UserService: Service that assists the shortening of it's controller.
UserServiceInterface: Interface implemented by it's service, injected to the controller.

### View/Components

MainLayout.php: Class that returns the layout used for the authenticated views.

### bootstrap

app.php: Base laravel file modified by José Arias to implement the isAdmin middleware.

### config

app.php: Slightly modified by José Arias for the development of the project, including setting the timezone.

### public

This folder contains all the resources the system needs to have a functional aspect.

build: Data used to make Tailwind CSS work
images: Images used on the system's frontend

### public/js

scripts made for enhanced functionality

menu: Enables buttons that open and close the menus within the app.
percentage: Guarantees correct format of percentage fields.
program: AJAX requests for programs
report: Inserts date inputs into the create report view in case the user selects custom report
total-type: AJAX requests for totalTypes 
total: Automatic functionality of the sales report, reason of which the totaltypes specified earlier must exist
validation: Shows the validations result with a timer.

### public/storage

messages: Contains pictures attached to messages.
profilePictures: Contains users' profile pictures.

### resources

css/app.css: Styles made for the system

### routes

web: Has all the urls handled by the system, and what controllers they point to, they are divided by requests allowed if not authenticated, requests allowed only if authenticated, and requests allowed only if authenticated

auth/login.blade.php: View por login
auth/register.blade.php: View for registering the admin and the users.
components/buttons.blade.php: Component that contains the menu buttons.
components/menu.blade.php: Component that contains the main menu.
components/messages.blade.php: Component that contains the messages menu.
components/welcome.blade.php: Component that appears at the top of the page, welcoming the user.
dashboard/index.blade.php: Home page of the system
layouts/main.blade.php: App layout for the views where the user is logged in, except when the admin registers an user
message/create.blade.php: View used for sending messages to a determined user.
message/index.blade.php: View for showing a received message's information
program/create.blade.php: View used for the creation of programs.
program/edit.blade.php: View used for editting existing programs' information.
program/index.blade.php: View for listing and centralizing the functions applied to programs.
report/index.blade.php: View por choosing the parameters of the report to generate.
total/create.blade.php: View used for the registration of sales.
total/pdf.blade.php: PDF generated by the report.index view.
total_type/create.blade.php: View used for the creation of types of data.
total_type/edit.blade.php: View used for editting existing types of data's information.
total_type/index.blade.php: View for listing and centralizing the functions applied to total types.

