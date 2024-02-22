@extends('layout')
@section('section')
<section class="product">
          <div class="container">
            <div class="row">
                <div class="col-md-6 product__desc">
                    <h1>One app for all of the tasks</h1>
                    <span class="product__desc-s">Description of the product</span>
                    <div col="product__features">
                        <span class="product__features__icon">A</span>
                        <span class="product__features__icon">B</span>
                        <span class="product__features__icon">C</span>
                        <span class="product__features__icon">D</span>
                        <span class="product__features__icon">E</span>
                    </div>
                    <div class="product__get__started">
                        <span>Lets get started</span>
                        <div class="product__get__started-btns">
                            <input type="email" placeholder="hello"/>
                            <button>Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 product__show">
                    <img src="./img/hero.jpg" />
                </div>
            </div>
            <div class="product__head">
                <h1>Join the product Teams</h1>
            </div>

          </div>
          <div class="product__new container">
            <div class="row">
                <div class="col-md-6 product__new__text">
                    <h1>Text Idea</h1>
                    <span>Fusce nunc tortor, fermentum sit amet posuere non, dignissim ut lorem. Integer in pharetra leo, sed venenatis tellus. Etiam quis maximus lacus, eget condimentum elit. Duis sit amet lacinia tellus, vitae congue risus. Pellentesque a euismod est. Praesent ornare arcu id ante finibus, id molestie mauris vulputate. </span>
                    <button>Discover</button>
                </div>
                <div class="col-md-6 product__new__img">
                    <img src="./img/nat-1.jpg" />
                </div>
            </div>
        </div>
        <div class="product__features">
            <div class="product__features-tabs">
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                </ul>
            </div>
            <div class="row product__new">
                <div class="col-md-6 product__new__text">
                    <h1>Text Idea</h1>
                    <span>Fusce nunc tortor, fermentum sit amet posuere non, dignissim ut lorem. Integer in pharetra leo, sed venenatis tellus. Etiam quis maximus lacus, eget condimentum elit. Duis sit amet lacinia tellus, vitae congue risus. Pellentesque a euismod est. Praesent ornare arcu id ante finibus, id molestie mauris vulputate. </span>
                    <button>Discover</button>
                </div>
                <div class="col-md-6 product__new__img">
                    <img src="./img/nat-1.jpg" />
                </div>
            </div>
        </div>
        </section>
        <section class="subs">
            <div class="subs__container">
                <h1>What can we help you with</h1>
                <div class="subs__container-btns">
                    <button class="subs__container-btns-contact">Work with us</button>
                    <button class="subs__container-btns-job">Apply for job</button>
                </div>
            </div>
        </section>

          @endsection
