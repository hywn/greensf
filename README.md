# greenf
preprocessed version of Greens to Grounds website

## repository contents
### housekeeping
```
README.md      -- this readme
docs/          -- script-generated site
```

### site data
```
gen.rb         -- preprocessing script
lib/           -- css and images
inc/           -- html includes
index.html
order.html
faq.html
news.html
suppliers.html
events.html
```

## the script
`gen.rb` is a vanilla ruby script that relocates a given (HTML) file, preprocessing its contents, copying any media (css, image) dependencies relative to the new destination, and recursing on any linked files.

### usage
```
./gen.rb <source file> <destination file>
```
by default, `./gen.rb` will run as
```
./gen.rb index.html docs/index.html
```
i.e. it'll generate the site in `./docs/`.