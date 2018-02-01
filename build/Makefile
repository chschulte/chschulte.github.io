HTML = index.html contact.html bio.html

all: $(HTML)

clean:
	rm -rf $(HTML)

install:
	cp -f $(HTML) ..

%.html: src/%.php src/defaults.php
	php $< > $@
