     <h4>Overview</h4>
A user logs on to the system by providing a customerId and password. The system verifies the password
and checks the user’s profile before allowing the user access to the system. Once access has been
provided, the application can request what privileges are authorized when necessary. Once a user is
logged on they have access to all the privileges assigned to their roles.
The system disables a userId after a defined number of unsuccessful login attempts. It will remain
disabled until an administrator resets it.

<h5>Submit Logon Request</h5>
When the application is launched the logon panel is displayed and the user is prompted for their User
ID and Password. Once the User ID and Password are entered and the OK button is selected the
system validates the credentials. The system verifies that the User ID exists, that the user is not
already logged on and that the password entered matches that stored against the current user logon
ID. The user is then logged on to the system.