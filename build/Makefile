HTML = \
	index.html contact.html bio.html software.html \
	presentations.html presentations-year.html presentations-type.html \
	education.html education-full.html \
	papers.html papers-year.html papers-type.html \
	projects/cocoprop.html projects/unison.html


CONV = iconv -f ISO-8859-1 -t UTF-8
all:: $(HTML)

Makefile.papers: src/pids.php src/data/papers.php
	php -f src/pids.php > Makefile.papers

clean:
	rm -rf $(HTML)

presentations-year.html: src/presentations.php src/defaults.php
	php -f $< opt=year | $(CONV) > $@

presentations-type.html: src/presentations.php src/defaults.php
	php -f $< opt=type | $(CONV) > $@

education-full.html: src/education.php src/defaults.php
	php -f $< full=1 | $(CONV) > $@

papers-year.html: src/papers.php src/defaults.php
	php -f $< opt=year | $(CONV) > $@

papers-type.html: src/papers.php src/defaults.php
	php -f $< opt=type | $(CONV) > $@

schulte.bib: src/publist.php src/defaults.php src/data/papers.php
	php -f $< > $@

schulte.tex: src/texlist.php src/defaults.php src/data/papers.php
	php -f $< > $@

%.html: src/%.php src/defaults.php
	php -f $< | $(CONV) > $@

projects/%.html: src/projects/%.php src/defaults.php
	php -f $< | $(CONV) > $@

../%.html: %.html
	cp -f $< $@

-include Makefile.papers

all:: $(PAPERS)

INSTALL = $(HTML:%=../%) $(PAPERS:%=../%)

install: $(INSTALL) 

