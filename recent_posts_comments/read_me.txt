Instructions:
This is a simple plugin that allows you to display the most recent comments and/or posts.
The code comprises of two function calls that could be easily called from anywhere in the themes template file. 
Given below are the instructions to incorporate the function calls.

Download the .zip file and unzip into your local folder.
FTP or copy the "recent_posts_comments" folder into the plugins folder.
Activate the plugin by going to the plugin menu as administrator. This step activates the plugin and makes it ready for use.
Place the function call wherever you want the recent comments to appear.
<?php valluri_recent_comments(commentcount); ?>

Place the function call wherever you want the recent comments to appear.
<?php valluri_recent_posts(postcount); ?>

commentcount is the number of comments you wish to display and postcount is the number of posts you wish to display.

Here is an example on how to use this plugin.
<h4>Recent Comments</h4>
    <div class="rightsideSection">
       <?php valluri_latest_comments(6); ?>
    </div>

    <h4>Recent Posts:</h4>
    <div class="rightsideSection">
       <?php valluri_latest_posts(6); ?>
    </div>


Please feel free to shoot me an email if you need any assistance. 
vallurirajesh@gmail.com
