# Visited-Pages-Log
You put your code into your WebPages and every time someone visits a WebPages and the code send valuable information about the visitor back to your log. Stat organises all this information into charts &amp; lists to make your analysis easier.

# Web site traffic monitoring features

- Visited Pages URL
- Date and Time
- IP Address
- City
- Region
- Location
- Country
- Organisation
- Postal Code
# Requirements

- VISIT https://ipinfo.io Website and create your free account and copy the token and paste that token into the include_page_track.php

  $info='https://ipinfo.io/'.$ipv4.'?token=ENTER_YOUR_TOKEN';
  
- FREE ACCOUNT HAS LIMIT OF 50000 requests/MONTH
- Alternative: http://ip-api.com SignUp not required for free version (45 requests / minute )

- Create Database and import the sql file page_track.sql in this database 

- Provide HOSTNAME,DATABASE,USERNAME and PASSWORD in connection.php file

# NOTE : UPLOAD ALL FILES ON WEB. MAYBE ON LOCALHOST IT WILL NOT WORK PROPERLY.
