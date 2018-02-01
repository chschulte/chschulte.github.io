HTML = index.html

all: $(HTML)

clean:
	rm -rf $(HTML)

install:
	cp -f $(HTML) ..

%.html: src/%.php src/defaults.php
	php $< > $@
