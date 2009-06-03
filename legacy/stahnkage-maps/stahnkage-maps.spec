Name:           stahnkage-maps
Version:        1.0
Release:        1%{?dist}
Summary:        Ascii maps for stahnkage

Group:          Applications/Internet
License:        BSD
URL:            http://www.stahnkage.com/maps/about
Source0:        %{name}.tar.gz
BuildRoot:      %{_tmppath}/%{name}-%{version}-%{release}-root-%(%{__id_u} -n)
BuildArch:      noarch

Requires:       httpd

%description
Stahnkage Maps is a lame bash CGI based service that pretty much cats a file
to stdout.  It has ascii maps and invalid hyperlinks.

%prep
%setup -q -n %{name}


%install
rm -rf $RPM_BUILD_ROOT
make install DESTDIR=$RPM_BUILD_ROOT


%clean
rm -rf $RPM_BUILD_ROOT


%files
%defattr(-,root,root,-)
%doc Makefile README 
%config(noreplace) %{_sysconfdir}/httpd/conf.d/%{name}.conf
%{_datadir}/%{name}


%changelog
* Tue Jun 02 2009 Michael Stahnke <stahnma@fedoraproject.org> - 1.0-1
- Initial Package
