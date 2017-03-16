## Personal portfolio webpage
#### https://johnlazzarini.github.io/portfolio-webpage/

## Summary
This evolved from a simple freelancer template into a unique personal portfolio.  Modals, smooth scrolling, and an intuitive UI are formed from simple applications of HTML, CSS, JS and jQuery.

## Implementation details

The code for the modals is fairly straight-forward, but can look intimidating.  Let's look an example of one to better understand how they are implemented here:

```
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <h4 class="text-center">C++</h4>
                        <img src="https://s3.amazonaws.com/poly-screenshots.angel.co/Project/1a/375031/1478e4e2952957ce64b57766387d8af9-original.jpg" style="max-width: 300px; max-height: 200px; display: block; margin: auto;" class="img-responsive" alt="">
                        <h3 class="text-center">iTunes Playlist Creator</h3>
                    </a>
                </div>
```

The col-sm-4 div is contained within a larger row div.  Within it, we can see that the appearance of the modal pre-expansion is simply contained inside of an "a" tag, which links to a modal stored in the same file (shown below).  I've chosen to include an image that represents the project as well as a title and the primary language in which it was written.

```
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>iTunes Playlist Creator</h2>
                            <hr class="star-primary">
                            <img src="https://s3.amazonaws.com/poly-screenshots.angel.co/Project/1a/375031/1478e4e2952957ce64b57766387d8af9-original.jpg" style="max-width: 400px; max-height: 400px;" class="img-responsive img-centered" alt="">
                            <p style="text-align: left">Add song titles and lengths to the included itunes file, specify a window, and the creator will quickly give you a list of songs whose summed lengths will exactly fit that window.</p>
                            <a href="https://github.com/johnlazzarini/itunes-playlist-creator"><h4>GitHub Repository Link</h4></a>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
```
By assigning the role of the containing div to "dialog", the modal will behave similarly to the way that a JavaScript prompt or alert would by super imposing itself over the screen.  The controls for closing the dialog box are abstracted away for us by the close-modal class, and the contents are stored and customizable within the "modal-body" class.

