# Makefile to package up stahnkage-maps
#
#
TMPDIR=/tmp
PKGNAME=stahnkage-maps
DATADIR=$(DESTDIR)/usr/share/$(PKGNAME)
CONFDIR=$(DESTDIR)/etc/
APACHE_DIR=$(CONFDIR)/httpd/conf.d

install:
	mkdir -p {$(DATADIR),$(CONFDIR),$(APACHE_DIR)}
	install -p -m644 region.txt $(DATADIR)
	install -p -m755 maps $(DATADIR)
	install -p -m644 $(PKGNAME).conf $(APACHE_DIR)

tarball:
	mkdir -p $(TMPDIR)
	cd ..; tar pczf $(TMPDIR)/$(PKGNAME).tar.gz $(PKGNAME)
	mv $(TMPDIR)/$(PKGNAME).tar.gz .

uninstall:
	rm -rf $(DATADIR)
	rm -rf $(APACHE_DIR)/$(PKGNAME).conf

clean:
	rm -f $(PKGNAME).tar.gz
