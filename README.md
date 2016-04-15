# WebNetTools
Web site for using linux network admin tools remotely.

Utilities that are prerequisite (install them on your system)
- ping
- arp-scan
- iwlist

Site set up
When you initially download the site, you will have some commands that need sudo privileges.  For example, arp-scan may need special privileges to be able to be run by the web server.  As you have any issues running certain sections of the web site, check your servers log files for clues for permissions that need to be set. On a Linux environment you may have to add the permissions in the sudoers file like I did.  I have only run this site on Raspbian Linux so far.

GUI Features
- ping, Simply type an IP or domain and click a button
- arp-scan, Simply click the link to scan your local network and see IP addresses and MAC addresses that are connected
- iwlist, Simply click the link to see available wifi information
- IP Geolocation, Type in an IP Address and click a button to get info about that IP.  This uses an API from ipinfo.io
