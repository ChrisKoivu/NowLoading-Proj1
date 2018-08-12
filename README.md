# Making Strides for Autism Helpdesk System




# Designate Admin User

I have created a is_admin middleware class to verify a user is an admin. It is registered in the Kernel.php file under 'is_admin'. The admin route calls this middleware and verifies the user is an admin before the AdminController processes the request.

To designate a registered user as an admin, type the following at the command line:

    php artisan tinker
    use App\User;
    User::where('email', 'admin@localhost.com')->update(['role' => 'admin'];

replace 'admin@localhost.com' with the email address of the registered user to designate as the admin.


