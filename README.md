# Codeigniter_developer_test
 

## Codeigniter app with 3 pages: Home page, Add Content Page and Search Page

Home Page contains general information about the app 
"http://localhost/Codeigniter_developer_test/index.php/welcome" or "http://localhost/Codeigniter_developer_test/"

Add Content page contains a form which submits a name and description to a MySql database.
http://localhost/Codeigniter_developer_test/index.php/welcome/addContent

Search Page contains a search bar where the user can search for movie name in the database.
Upon clickin on the autocomplete suggestions, these are inserted into a table.
http://localhost/Codeigniter_developer_test/index.php/welcome/search

### Important files
/application/controllers/Welcome.php    (used only the default controller)<br/>
/application/views/welcome_message.php (home page)<br/>
/application/views/Add_content.php (Add Content Page)<br/>
/application/views/Search.php (Search Page)<br/>
/application/models/My_model.php<br/>
/application/config/config.php , database.php<br/>
/content.sql (database dump file)

#### Notes

Most people online advised just to make an sql dump file of the database and add that to the project folder so that's what I did. You might have to set up your localhost and import content.sql in your PhpMyAdmin.
Further database setup file is /config/database.php

I didn't make the pages beatiful or responsive as I don't think that was part of the test.
Only cared for the functionality. What css there is, is to help things be more usable + default css from Codeigniter.

I didn't use any particular naming conventions or ways to set up the controllers/views/models
as I don't know how you guys do things and I'd have to learn your way anyway.

I didn't use an external js file. Kept all js in the view files so it's easier for you to go through it.

I used wamp64 as localhost server. my root is ""http://localhost/Codeigniter_developer_test/index.php/welcome". 
You can also use "http://localhost/Codeigniter_developer_test/"



##### Thanks
So yeah, let me know what you think. Everything is working perfectly as I'm writing this.
And let me know if something doesn't work on your end. Maybe I forgot something.
Or if there's some other way you want me to send the database over git.