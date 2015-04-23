### wp-setup

> How to set up a WordPress install for maximum jollies
> including  selection of key plugins, tools and tweaks for a standard WordPress install.

###### 1 structure

- [ ] Download latest WP from WordPress.org
- [ ] Rename wp-content to 'assets'
- [ ] Create sub-folder in 'assets' named 'core'
- [ ] Use the git ignore file in this repo if you like

###### 2 wp-config

- [ ] Use the wp-config <a href="https://github.com/ChelseaStats/wp-config/">here</a>
- [ ] Use a unqiue table prefix
- [ ] Add DB connection details
- [ ] Change salts + keys to something unique
- [ ] check other defines/settings - mostly fine
    
###### 3 Install Plugins

> Install the following plugins in the 'assets/plugins' folder

- [ ] Pingdom               - https://wordpress.org/plugins/real-user-monitoring-by-pingdom/
- [ ] CloudFlare            - https://wordpress.org/plugins/cloudflare/
- [ ] Simple History        - http://eskapism.se/wordpress/simple-history/
- [ ] QRPA                  - https://wordpress.org/plugins/quick-review-post-access/
- [ ] Resize Tag Cloud      - https://wordpress.org/plugins/resize-tag-cloud/
- [ ] Admin Trim Interface  - https://wordpress.org/plugins/admin-trim-interface/
- [ ] WP-Pagenavi           - https://wordpress.org/plugins/wp-pagenavi/
- [ ] Google Sitemap XML    - https://wordpress.org/plugins/google-sitemap-generator/
- [ ] Sitemap               - https://wordpress.org/plugins/sitemap/
- [ ] Acunetix WP Security  - 
- [ ] Cron GUI              - 
- [ ] Configure SMTP        - 
- [ ] Askimet               - 
- [ ] Limit Login Attempts  - 
- [ ] Redirection           - 


###### 4 Install Must-use plugins (core)

> if you have some classes that you can't live without or your own plugins you'd never disable then stick them in the `core` folder.

    
###### 5 Install a theme

> or make your own. it goes in a folder in the `assets/themes/` folder like `assets/themes/themename`

###### 6 Create content / pages

> You could do this by script (I'll add this later) or in the admin interface if you prefer.

###### 7 Get paid

> Site is done, get some $$$, get drunk. party.
