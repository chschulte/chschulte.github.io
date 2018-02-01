HTML = index.html

all: $(HTML)

clean:
	rm -rf $(HTML)

install:
	cp -f $(HTML) ..

%.html: src/defaults.php src/%.php
	php $< > $@
