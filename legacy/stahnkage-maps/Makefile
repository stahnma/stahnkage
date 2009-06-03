# Makefile to package up stahnkage-maps
#
#
TMPDIR=/tmp
PKGNAME=stahnkage-maps
DATADIR=$(DESTDIR)/usr/share/$(PKGNAME)
CONFDIR=$(DESTDIR)/etc/
APACHE_DIR=$(CONFDIR)/httpd/conf.d
SPEC_FILE=$(PKGNAME).spec
 
RPMBUILD := $(shell if test -f /usr/bin/rpmbuild ; then echo /usr/bin/rpmbuild ; else echo "x" ; fi)
RPM_DEFINES = --define "_specdir $(shell pwd)/SPECS" --define "_rpmdir $(shell pwd)/RPMS" --define "_sourcedir $(shell pwd)/SOURCES" --define "_srcrpmdir $(shell pwd)/SRPMS" --define "_builddir $(shell pwd)/BUILD"
MAKE_DIRS= $(shell pwd)/SPECS $(shell pwd)/SOURCES $(shell pwd)/BUILD $(shell pwd)/SRPMS $(shell pwd)/RPMS 

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
	rm -f $(PKGNAME).tar.gz  *.rpm
	rm -rf BUILD SRPMS RPMS SPECS SOURCES

rpmcheck:
ifeq ($(RPMBUILD),x)
  $(error "rpmbuild not found, exiting...")
endif
	@mkdir -p $(MAKE_DIRS)
 
srpm: tarball rpmcheck
	cp -f $(PKGNAME).tar.gz $(shell pwd)/SOURCES
	@wait
	$(RPMBUILD) $(RPM_DEFINES) -bs $(SPEC_FILE)
	@mv -f SRPMS/* .
	@rm -rf BUILD SRPMS RPMS SOURCES SPECS
