@extends('layout')
@section('section')

    @parent
    @include('components.carousel')

            <section class="philosophy__small_section">
              <div class="philosophy__title">
                <h1 >Our Philisophy</h1>
              </div>
              <div class="philosophy">
                  <div class="philosophy__tag row">
                      <div class="philosophy__tag__image philosophy__small col-md-6">
                          <img class="odd" src="{{ asset('img/images/ai_product1.jpg') }}" height="400px" width="400px"/>
                      </div>

                          <div class="clearfix"></div>
                          <div class="philosophy__item__content col-md-6">
                          <h1>Customer Centric</h1>
                          <div class="philosophy__item__content-secondary">
                          <h3>Empowering your business, one solution at a time</h3>
                          </div>
                          <span></span>
                          <p>Our philosophy is to prioritize customer needs and provide solutions. We understand that your needs are unique, which is why we offer customized solutions that are tailored to your specific requirements. Our commitment to excellent customer service means that we're always here to provide support when you need it. With our innovative solutions and customer-centric approach, we're here to help your business succeed. The company strives to develop long-term relationships with you and work towards your success..</p>
                      </div>
                  </div>
                  <div class="philosophy__tag row">


                          <div class="clearfix"></div>
                          <div class="philosophy__item__content col-md-6">
                          <h1>Innovation</h1>
                          <div class="philosophy__item__content-secondary">
                          <h3>Excellence in every detail.</h3>
                        </div>
                          <span></span>
                          <p>Quality is at the heart of everything we do. We're committed to delivering products/services that meet or exceed our customers' expectations. Our team of experts uses rigorous testing, quality control measures, and continuous improvement processes to ensure that our products/services are of the highest quality. Our philosophy is to prioritize excellence in everything that we do, from the quality of solutions to the quality of customer service.</p>
                      </div>
                      <div class="philosophy__tag__image philosophy__small col-md-6">
                          <img class="even" src="{{ asset('img/images/ai_product2.jpg') }}" height="400px" width="400px"/>
                      </div>
                  </div>
                  <div class="philosophy__tag row">
                      <div class="philosophy__tag__image philosophy__small col-md-6">
                          <img class="odd" src="{{ asset('img/images/ai_product3.jpg') }}" height="400px" width="400px"/>
                      </div>

                          <div class="clearfix"></div>
                          <div class="philosophy__item__content col-md-6">
                          <h1>Ethics</h1>
                          <div class="philosophy__item__content-secondary">
                          <h3>Doing what's right, every time.</h3>
                        </div>
                          <span></span>
                          <p>At JKinda, our core values of honesty, integrity, and transparency guide everything we do. Our mission is to provide high-quality products/services while also making a positive impact on our employees, customers, and the wider community. We believe in ethical business practices, fair treatment of employees, environmentally sustainable practices. We're here to make a difference, one ethical decision at a time. We are committed to respecting the privacy and confidentiality of our customers, as well as complying with all applicable laws and regulations</p>
                      </div>
                  </div>
                  <div class="philosophy__tag row">


                          <div class="clearfix"></div>
                          <div class="philosophy__item__content col-md-6">
                          <h1>Collaboration</h1>
                          <div class="philosophy__item__content-secondary">
                          <h3>Working together for better results</h3>
                        </div>
                        <span></span>
                          <p>Collaboration is critical to the success of any IT services company. We encourage teamwork and collaboration both within the company and with our customers. We are open to feedback and suggestions from all stakeholders and work towards continuous improvement. Our team of experts work closely together to create innovative solutions that meet the unique needs of each client. We use cutting-edge tools and techniques to foster teamwork and communication, ensuring that everyone is working together towards a common goal. By leveraging the collective expertise of our team, we are able to deliver exceptional results for our clients</p>
                      </div>
                      <div class="philosophy__tag__image philosophy__small col-md-6">
                          <img class="even" src="{{ asset('img/images/ai_product4.jpg') }}" height="400px" width="400px"/>
                      </div>
                  </div>
              </div>
          </section>


          <section class="testimonial ">
            <div class="testimonial__title">
              Works
            </div>
            <div class="testimonial__container row p-4">
            <div class="testimonial__card item__1  col-md-3 p-2">
              <div class="card">
              <img src="{{ asset('img/products/ai_newspaper.png') }}" height="40%" width="100%">
                <div class="testimonial__head">
              <h2>AI Newspaper</h2>
            </div>
              <div class="testimonial__text">
                <p>
                This is a AI based newspaper app where we download news and create newspaper based on prefernces of user. We keep user updated with the news they have subscribed to. And also generic news. It gives feel of generic newspaper read.
            </p>
              </div>
            </div>
            </div>
            <div class="testimonial__card item__1  col-md-3 p-4">
              <div class="card">
              <img src="{{ asset('img/products/predict.webp') }}" height="40%" width="100%">
                <div class="testimonial__head">
                <h2>Predict Stock</h2>
              </div>
              <div class="testimonial__text">
                <p>Mauris sit amet consectetur massa. Vivamus fermentum urna at scelerisque ultricies. Etiam aliquam imperdiet felis, molestie facilisis sem congue a. Pellentesque pharetra fermentum ipsum quis consequat. In commodo quis urna eu ornare. Suspendisse justo mauris, sollicitudin vitae bibendum ut, pretium non turpis. </p>
              </div>
            </div>
            </div>
            <div class="testimonial__card item__1  col-md-3 p-4">
              <div class="card">
              <img src="{{ asset('img/products/ocr.jpeg') }}" height="40%" width="100%">
                <div class="testimonial__head">
              <h2>OCR Invoices</h2>
            </div>
              <div class="testimonial__text">
                <p>liquam pharetra diam quis viverra auctor. Fusce imperdiet dignissim est, eu vestibulum sapien facilisis nec. Vestibulum ac augue tincidunt nisi venenatis lobortis nec sed eros. Maecenas et ligula dolor.</p>
              </div>
            </div>
            </div>
            <div class="testimonial__card item__1  col-md-3 p-4">
              <div class="card">
              <img src="{{ asset('img/products/meeting.webp') }}" height="40%" width="100%">
              <div class="testimonial__head">
                <h2>Meet Notes</h2>

              </div>
              <div class="testimonial__text">
                <p>Sed nec ex nisl. Nam varius, magna ut tincidunt feugiat, urna nulla tincidunt sapien, vitae finibus leo est sit amet diam. Quisque iaculis, lacus ac imperdiet pulvinar, ante dui sagittis nulla, at hendrerit nunc magna non nisi. Phasellus tempor odio a urna tincidunt, id dapibus turpis efficitur. Ut faucibus, mauris at venenatis lacinia, </p>
              </div>
            </div>
            </div>
          </div>
          </section>

          <section>
            <div class="blog__title">
              Blogs
            </div>
            <div class="blog__container row p-4">
            <div class="blog__card item__1  col-md-6 p-4">
              <div class="blog__card__item">
                <div class="blog__hover">
                  <h6>Jkinda Web</h6>
                  <span> Aug 24, 2023</span>
                  <span>React New thing</span>
                </div>
                <img src="{{ asset('img/hero.jpg') }}" height="40%" width="100%" />
                <div class="blog__head">
                  <h2>Yolo</h2>
                  <span></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum justo sed eros aliquet, sed bibendum mauris rutrum. Donec posuere facilisis mauris, at sollicitudin libero ullamcorper sed. Sed mauris orci, aliquam vel mollis sit amet, sodales auctor nisl. Aliquam leo urna, </p>
                  <div class="read_more_link">
                  <a href="#">Read More</a>
                </div>
                </div>

            </div>
            </div>
            <div class="blog__card item__1  col-md-6 p-4">
              <div class="blog__card__item">
                <div class="blog__hover">
                  <h6>John Doe</h6>
                  <span> Aug 24, 2023</span>
                  <span>Learn Code CSS</span>
                </div>
                <img src="{{ asset('img/hero.jpg') }}" height="40%" width="100%" />
                <div class="blog__head">
                <h2>Google</h2>
                <span></span>
                <p>Mauris sit amet consectetur massa. Vivamus fermentum urna at scelerisque ultricies. Etiam aliquam imperdiet felis, molestie facilisis sem congue a. Pellentesque pharetra fermentum ipsum quis consequat. In commodo quis urna eu ornare. Suspendisse justo mauris, sollicitudin vitae bibendum ut, pretium non turpis. </p>
                <div class="read_more_link">
                  <a href="#">Read More</a>
                </div>
              </div>

            </div>
            </div>
            <div class="blog__card item__1  col-md-6 p-4">
              <div class="blog__card__item">
                <div class="blog__hover">
                  <h6>John Doe</h6>
                  <span> Aug 24, 2023</span>
                  <span>Learn Code CSS</span>
                </div>
                <img src="{{ asset('img/hero.jpg') }}" height="40%" width="100%" />
                <div class="blog__head">
              <h2>Apple</h2>
              <span></span>
              <p>liquam pharetra diam quis viverra auctor. Fusce imperdiet dignissim est, eu vestibulum sapien facilisis nec. Vestibulum ac augue tincidunt nisi venenatis lobortis nec sed eros. Maecenas et ligula dolor.</p>
              <div class="read_more_link">
                <a href="#">Read More</a>
              </div>
            </div>

            </div>
            </div>
            <div class="blog__card item__1  col-md-6 p-4">
              <div class="blog__card__item">
                <div class="blog__hover">
                  <h6>John Doe</h6>
                  <span> Aug 24, 2023</span>
                  <span>Learn Code CSS</span>
                </div>
                <img src="{{ asset('img/hero.jpg') }}" height="40%" width="100%" />
              <div class="blog__head">
                <h2>Microsoft</h2>
                <span></span>
                <p>Sed nec ex nisl. Nam varius, magna ut tincidunt feugiat, urna nulla tincidunt sapien, vitae finibus leo est sit amet diam. Quisque iaculis, lacus ac imperdiet pulvinar, ante dui sagittis nulla, at hendrerit nunc magna non nisi. Phasellus tempor odio a urna tincidunt, id dapibus turpis efficitur. Ut faucibus, mauris at venenatis lacinia, </p>
                <div class="read_more_link">
                  <a href="#">Read More</a>
                </div>
              </div>

            </div>
            </div>
          </div>
          </section>


          @endsection
