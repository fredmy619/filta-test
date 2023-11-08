# filta-test
TASK 1:
Description
Create an HTML banner thatswaps its background image based on the menu tree visualized below.
Assuming the graph below shows the main menu structure. All pages under and including Root A
(Sub 1) display image A in the banner, while all pages under and including Root B (Sub 2, Sub 3)
display image B in the banner. If the CMS admin drags Sub 3 under Root A, then Sub 3 will now show
image A. Note: Image A and B can be any unique images.

1. Create a WP CMS using local app.
2. Use this updated theme to test the project.
3. Update the permalink to "postname"
4. Create pages "Root A" and "Root B"
5. Create a primary navigation called "Header"
6. Create sub menus "Sub 1, Sub 2, Sub 3"
7. Update the position of the menus and test.
8. Go to functions.php and search for "get_parent_page_id"
9. Go to content-page.php which displays the dynamic content of the page.

Demo Part 1:https://www.loom.com/share/63017e307ecd438898b000a33573fa22?sid=8c31ef23-62a5-4822-a040-d26bb1a0b322
Demo Part 2:https://www.loom.com/share/08ab46c6d0f84a1ab24c7a5c5c6957bb


===

TASK 2:
Create a custom module/plugin that provides a simple block in a designated page (homepage) for
displaying “Product of the Day”.

1. I use the same theme from the task #1.
2. Go to twentytwentyone/custom-home.php it's where we added the code to display the products block.
3. Installed Custom Post Type UI and Advanced Custom Fields PRO plugin to create the feature.
4. Create a custom post type "products"
5. Add new products.
6. Import "acf-export-2023-11-08.json" to https://perfumed-cheesecake.localsite.io/wp-admin/edit.php?post_type=acf-field-group&page=acf-tools
7. Updated the options of the products.
8. Please see the video for the explanation.
   
Open Live Link:
https://perfumed-cheesecake.localsite.io
If prompted, enter the information below.

Username: adjective
Password: concerned
==
Login: https://perfumed-cheesecake.localsite.io/wp-login.php
username: admin
password: admin

Note: Instead of creating a plugin from scratch I use 3rd party plugin to create the half of the functionality. I create a custom-home.php template to display the products and add the query code. 
Given the timeframe 3-4 hours it's not doable for a custom from scratch plugin.


https://www.loom.com/share/96bda255c63d4d70ba4926a287eb3ca5?sid=f5381145-c576-47c9-8bee-20b2a378c54e
