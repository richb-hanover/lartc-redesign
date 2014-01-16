#LARTC Site - Redesigned

This git repo contains substantially all the contents of the original LARTC site at http://lartc.org. It has the following changes/updates:

* Minor reorganization and editorial changes
* New ePub format for the HOWTO
* Ported to use Bootstrap3 CSS for a modern look
* Incorporates all the man8 pages from Ubuntu 13.10
* Updated Wondershaper page to mention shaping techniques that are available in newer Linux kernels
* The HOWTO has *not* been updated to reflect these newer technologies, nor do these pages include any updates that may have been submitted from the LARTC community or mailing list

To move the site to a new server, do the following steps:

	# Clone the repository from github
    git clone https://github.com/richb-hanover/lartc-redesign.git
	
	# Recreate the LARTC HOWTO in all its formats
    cd folder-that-contains-lartc.db
    make clean              # optional, removes old versions
    make                        
    
    # Recreate the manpages in all their formats
    cd manpages
    make clean              # optional, removes old versions
    make
        
Then copy the entire 'lartc' folder to your web server.

Note: Use `git pull` to retrieve subsequent updates from the github repository.