#LARTC Site - Redesigned

This git repo contains substantially all the contents of the original LARTC site at http://lartc.org.

To move the site to a new server, do the following steps:

	# Clone the repository from github
    git clone https://github.com/richb-hanover/lartc-redesign.git
	
	# Recreate all the man pages (requires docbook)
    cd manpages
    make clean              # optional, to remove old versions
    make                        
    
    # Build the LARTC HOWTO
    cd ..
    make clean              # optional, to remove old versions
    make
        
Then copy the entire 'lartc' folder to your web server.

Note: Use `git pull` to retrieve subsequent updates from the github repository.